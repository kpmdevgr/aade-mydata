<?php

namespace Firebed\AadeMyData\Http;

use Firebed\AadeMyData\Exceptions\MyDataAuthenticationException;
use Firebed\AadeMyData\Exceptions\MyDataConnectionException;
use Firebed\AadeMyData\Exceptions\MyDataException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use Psr\Http\Message\ResponseInterface;
use ReflectionClass;

abstract class MyDataRequest
{
    private const DEV_ERP_URL  = 'https://mydataapidev.aade.gr/';
    private const PROD_ERP_URL = 'https://mydatapi.aade.gr/myDATA/';

    private const DEV_PROVIDER_URL  = 'https://mydataapidev.aade.gr/myDataProvider/';
    private const PROD_PROVIDER_URL = 'https://mydatapi.aade.gr/myDataProvider/';

    private static ?string     $user_id          = null;
    private static ?string     $subscription_key = null;
    private static ?string     $env              = null;
    private static ?bool       $is_provider      = false;
    private static bool|string $verify_client    = true;

    private static HandlerStack $handler;

    public static function setHandler(MockHandler $handler): void
    {
        self::$handler = HandlerStack::create($handler);
    }

    public static function init(string $user_id, string $subscription_key, string $env, bool $is_provider = false): void
    {
        self::setCredentials($user_id, $subscription_key);
        self::setEnvironment($env, $is_provider);
    }

    public static function setCredentials(string $user_id, string $subscription_key): void
    {
        self::$user_id = $user_id;
        self::$subscription_key = $subscription_key;
    }

    public static function setEnvironment(string $env, bool $is_provider = false): void
    {
        self::$env = $env;
        self::$is_provider = $is_provider;
    }

    /**
     * <ul>Describes the SSL certificate verification behavior of a request.
     *
     * <li>Set to <code>true</code> to enable SSL certificate verification and use the default CA bundle provided by operating system.</li>
     * <li>Set to <code>false</code> to disable certificate verification (this is insecure!).</li>
     * <li>Set to a string to provide the path to a CA bundle to enable verification using a custom certificate.</li>
     * </ul>
     *
     * <pre>
     * // Use the system's CA bundle (this is the default setting)
     * MyDataRequest::verifyClient(true);
     *
     * // Use a custom SSL certificate on disk.
     * MyDataRequest::verifyClient('/path/to/cert.pem');
     *
     * // Disable validation entirely (don't do this!).
     * MyDataRequest::verifyClient(false);
     * </pre>
     *
     * <br>
     * <p>If you do not need a specific certificate bundle, then Mozilla provides a commonly used CA bundle which can be downloaded <a href="https://curl.haxx.se/ca/cacert.pem">here</a>
     * (provided by the maintainer of cURL). Once you have a CA bundle available on disk, you can set the "openssl.cafile" PHP ini
     * setting to point to the path to the file, allowing you to omit the "verify" request option.
     * Much more detail on SSL certificates can be found on the <a href="http://curl.haxx.se/docs/sslcerts.html">cURL website</a>.</p>
     *
     * @param bool|string $verify
     * @return void
     */
    public static function verifyClient(bool|string $verify = true): void
    {
        self::$verify_client = $verify;
    }

    public static function isProduction(): bool
    {
        return self::$env === 'prod';
    }

    public static function isDevelopment(): bool
    {
        return self::$env === 'dev';
    }

    public static function isProvider(): bool
    {
        return self::$is_provider;
    }
    
    /**
     * @throws MyDataAuthenticationException
     */
    private static function validateCredentials(): void
    {
        if (empty(self::$user_id) || empty(self::$subscription_key)) {
            throw new MyDataAuthenticationException();
        }
    }
    
    /**
     * @throws MyDataAuthenticationException|MyDataException
     */
    protected function get(array $query): ResponseInterface
    {
        self::validateCredentials();

        try {
            return $this->client()->get($this->getUrl(), ['query' => $query]);
        } catch (GuzzleException $e) {
            $this->handleException($e);
        }
    }

    /**
     * @throws MyDataAuthenticationException|MyDataException
     */
    protected function post(array $query = null, string $body = null): ResponseInterface
    {
        self::validateCredentials();

        $params = [];
        if (!empty($query)) {
            $params['query'] = $query;
        }

        if (!empty($body)) {
            $params['body'] = $body;
        }

        try {
            return $this->client()->post($this->getUrl(), $params);
        } catch (GuzzleException $e) {
            $this->handleException($e);
        }
    }

    /**
     * @throws MyDataAuthenticationException|MyDataException
     */
    protected function handleException(GuzzleException $exception)
    {
        if ($exception->getCode() === 401) {
            throw new MyDataAuthenticationException();
        }

        // In case the endpoint url is wrong
        if ($exception->getCode() === 0) {
            throw new MyDataConnectionException();
        }

        throw new MyDataException($exception->getMessage(), $exception->getCode());
    }

    private function client(): Client
    {
        $config = [
            'headers' => [
                'aade-user-id' => self::$user_id,
                'Ocp-Apim-Subscription-Key' => self::$subscription_key,
                'Content-Type' => "text/xml"
            ],
            'verify' => self::$verify_client
        ];

        if (isset(self::$handler)) {
            $config['handler'] = self::$handler;
        }

        return new Client($config);
    }

    public function getUrl(): string
    {
        $action = $this->getAction();
        $url = self::$is_provider ? $this->getUrlForProvider() : $this->getUrlForErp();
        
        return $url.$action;
    }

    private function getUrlForErp(): string
    {
        return self::isDevelopment() ? self::DEV_ERP_URL : self::PROD_ERP_URL;
    }

    private function getUrlForProvider(): string
    {
        return self::isDevelopment() ? self::DEV_PROVIDER_URL : self::PROD_PROVIDER_URL;        
    }

    private function getAction(): string
    {
        return $this->action ?? (new ReflectionClass($this))->getShortName();
    }
}
