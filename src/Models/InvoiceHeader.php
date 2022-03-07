<?php

namespace Firebed\AadeMyData\Models;

use Firebed\AadeMyData\Enums\InvoiceType;
use Firebed\AadeMyData\Enums\MovePurpose;

class InvoiceHeader extends Type
{
    /**
     * @return string|null Σειρά παραστατικού
     */
    public function getSeries(): ?string
    {
        return $this->get('series');
    }

    /**
     * Σε περίπτωση μή έκδοσης σειράς παραστατικού, το πεδίο series πρέπει να έχει την τιμή 0
     * 
     * @param string $series Σειρά παραστατικού
     */
    public function setSeries(string $series): void
    {
        $this->put('series', $series);
    }

    /**
     * @return string|null ΑΑ Παραστατικού, μέγιστο επιτρεπτό μήκος 50
     */
    public function getAa(): ?string
    {
        return $this->get('aa');
    }

    /**
     * @param string $aa ΑΑ Παραστατικού, μέγιστο επιτρεπτό μήκος 50
     */
    public function setAa(string $aa): void
    {
        $this->put('aa', $aa);
    }

    /**
     * @return string|null Ημερομηνία Έκδοσης Παραστατικού
     */
    public function getIssueDate(): ?string
    {
        return $this->get('issueDate');
    }

    /**
     * @param string $issueDate Ημερομηνία Έκδοσης Παραστατικού
     */
    public function setIssueDate(string $issueDate): void
    {
        $this->put('issueDate', $issueDate);
    }

    /**
     * @return string|null Είδος Παραστατικού
     */
    public function getInvoiceType(): ?string
    {
        return $this->get('invoiceType');
    }

    /**
     * @param InvoiceType|string $invoiceType Είδος Παραστατικού
     */
    public function setInvoiceType(InvoiceType|string $invoiceType): void
    {
        $this->put('invoiceType', $invoiceType);
    }

    /**
     * @return bool|null Αναστολή Καταβολής ΦΠΑ
     */
    public function isVatPaymentSuspension(): ?bool
    {
        return $this->get('vatPaymentSuspension');
    }

    /**
     * @param bool $vatPaymentSuspension Αναστολή Καταβολής ΦΠΑ
     */
    public function setVatPaymentSuspension(bool $vatPaymentSuspension): void
    {
        $this->put('vatPaymentSuspension', $vatPaymentSuspension);
    }

    /**
     * @return string|null Νόμισμα
     */
    public function getCurrency(): ?string
    {
        return $this->get('currency');
    }

    /**
     * Ο κωδικός νομισμάτων προέρχεται από την αντίστοιχη λίστα σύμφωνα με το πρότυπο ISO4217.
     * 
     * @param string $currency Νόμισμα
     */
    public function setCurrency(string $currency): void
    {
        $this->put('currency', $currency);
    }

    /**
     * @return float|null Ισοτιμία
     */
    public function getExchangeRate(): ?float
    {
        return $this->get('exchangeRate');
    }

    /**
     * To πεδίο exchangeRate είναι η ισοτιμία του νομίσματος σε σχέση με το ευρώ.
     * Πρέπει να συμπληρώνεται μόνο όταν το νόμισμα δεν έχει τιμή EUR
     * 
     * @param float $exchangeRate Ισοτιμία
     */
    public function setExchangeRate(float $exchangeRate): void
    {
        $this->put('exchangeRate', $exchangeRate);
    }

    /**
     * @return string|null Συσχετιζόμενα Παραστατικά
     */
    public function getCorrelatedInvoices(): ?string
    {
        return $this->get('correlatedInvoices');
    }

    /**
     * Το στοιχείο correlatedInvoices είναι λίστα και περιέχει τα ΜΑΡΚ των συσχετιζόμενων παραστατικών.
     * 
     * @param string $correlatedInvoices Συσχετιζόμενα Παραστατικά
     */
    public function setCorrelatedInvoices(string $correlatedInvoices): void
    {
        $this->put('correlatedInvoices', $correlatedInvoices);
    }

    /**
     * @return bool|null Ένδειξη Αυτοτιμολόγησης
     */
    public function isSelfPricing(): ?bool
    {
        return $this->get('selfPricing');
    }

    /**
     * @param bool $selfPricing Ένδειξη Αυτοτιμολόγησης
     */
    public function setSelfPricing(bool $selfPricing): void
    {
        $this->put('selfPricing', $selfPricing);
    }

    /**
     * @return string|null Ημερομηνία Έναρξης Αποστολής
     */
    public function getDispatchDate(): ?string
    {
        return $this->get('dispatchDate');
    }

    /**
     * @param string $dispatchDate Ημερομηνία Έναρξης Αποστολής
     */
    public function setDispatchDate(string $dispatchDate): void
    {
        $this->put('dispatchDate', $dispatchDate);
    }

    /**
     * @return string|null Ώρα Έναρξης Αποστολής
     */
    public function getDispatchTime(): ?string
    {
        return $this->get('dispatchTime');
    }

    /**
     * @param string $dispatchTime Ώρα Έναρξης Αποστολής
     */
    public function setDispatchTime(string $dispatchTime): void
    {
        $this->put('dispatchTime', $dispatchTime);
    }

    /**
     * @return string|null Αριθμός Μεταφορικού Μέσου
     */
    public function getVehicleNumber(): ?string
    {
        return $this->get('vehicleNumber');
    }

    /**
     * @param string $vehicleNumber Αριθμός Μεταφορικού Μέσου
     */
    public function setVehicleNumber(string $vehicleNumber): void
    {
        $this->put('vehicleNumber', $vehicleNumber);
    }

    /**
     * @return string|null Σκοπός Διακίνησης
     */
    public function getMovePurpose(): ?string
    {
        return $this->get('movePurpose');
    }

    /**
     * @param MovePurpose|string $movePurpose Σκοπός Διακίνησης
     */
    public function setMovePurpose(MovePurpose|string $movePurpose): void
    {
        $this->put('movePurpose', $movePurpose);
    }

    /**
     * @return bool|null Ένδειξη Παραστατικό καυσίμων
     */
    public function isFuelInvoice(): ?bool
    {
        return $this->get('fuelInvoice');
    }

    /**
     * Το πεδίο fuelInvoice ορίζει αν πρόκειται για παραστατικό πώλησης υγρών καυσίμων και
     * επιτρέπεται η αποστολή μόνο για την περίπτωση των παρόχων
     * 
     * @param bool $fuelInvoice Ένδειξη Παραστατικό καυσίμων
     */
    public function setFuelInvoice(bool $fuelInvoice): void
    {
        $this->put('fuelInvoice', $fuelInvoice);
    }
}