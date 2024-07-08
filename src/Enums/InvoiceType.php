<?php

namespace Firebed\AadeMyData\Enums;

enum InvoiceType: string
{
    /*
    |--------------------------------------------------------------------------
    | Αντικριζόμενα Παραστατικά Εκδότη ημεδαπής / αλλοδαπής 
    | Τιμολόγιο Πώλησης
    |--------------------------------------------------------------------------
    */

    /**
     *  Τιμολόγιο Πώλησης
     */
    case TYPE_1_1 = "1.1";

    /**
     *  Τιμολόγιο Πώλησης / Ενδοκοινοτικές Παραδόσεις
     */
    case TYPE_1_2 = "1.2";

    /**
     *  Τιμολόγιο Πώλησης / Παραδόσεις Τρίτων Χωρών
     */
    case TYPE_1_3 = "1.3";

    /**
     *  Τιμολόγιο Πώλησης / Πώληση για Λογαριασμό Τρίτων
     */
    case TYPE_1_4 = "1.4";

    /**
     *  Τιμολόγιο Πώλησης / Εκκαθάριση Πωλήσεων Τρίτων - Αμοιβή από Πωλήσεις Τρίτων
     */
    case TYPE_1_5 = "1.5";

    /**
     *  Τιμολόγιο Πώλησης / Συμπληρωματικό Παραστατικό
     */
    case TYPE_1_6 = "1.6";


    /*
    |--------------------------------------------------------------------------
    | Αντικριζόμενα Παραστατικά Εκδότη ημεδαπής / αλλοδαπής 
    | Τιμολόγιο Παροχής Υπηρεσιών
    |--------------------------------------------------------------------------
    */

    /**
     *  Τιμολόγιο Παροχής
     */
    case TYPE_2_1 = "2.1";

    /**
     *  Τιμολόγιο Παροχής / Ενδοκοινοτική Παροχή Υπηρεσιών
     */
    case TYPE_2_2 = "2.2";

    /**
     *  Τιμολόγιο Παροχής / Παροχή Υπηρεσιών σε λήπτη Τρίτης Χώρας
     */
    case TYPE_2_3 = "2.3";

    /**
     *  Τιμολόγιο Παροχής / Συμπληρωματικό Παραστατικό
     */
    case TYPE_2_4 = "2.4";


    /*
    |--------------------------------------------------------------------------
    | Αντικριζόμενα Παραστατικά Εκδότη ημεδαπής / αλλοδαπής 
    | Τίτλος Κτήσης
    |--------------------------------------------------------------------------
    */

    /**
     *  Τίτλος Κτήσης (μή υπόχρεος Εκδότης)
     */
    case TYPE_3_1 = "3.1";

    /**
     *  Τίτλος Κτήσης (άρνηση έκδοσης από υπόχρεο Εκδότη)
     */
    case TYPE_3_2 = "3.2";


    /*
    |--------------------------------------------------------------------------
    | Αντικριζόμενα Παραστατικά Εκδότη ημεδαπής / αλλοδαπής 
    | Πιστωτικό Τιμολόγιο
    |--------------------------------------------------------------------------
    */

    /**
     *  Πιστωτικό Τιμολόγιο / Συσχετιζόμενο
     */
    case TYPE_5_1 = "5.1";

    /**
     *  Πιστωτικό Τιμολόγιο / Μη Συσχετιζόμενο
     */
    case TYPE_5_2 = "5.2";


    /*
    |--------------------------------------------------------------------------
    | Αντικριζόμενα Παραστατικά Εκδότη ημεδαπής / αλλοδαπής 
    | Στοιχείο Αυτοπαράδοσης - Ιδιοχρησιμοποίησης
    |--------------------------------------------------------------------------
    */

    /**
     *  Στοιχείο Αυτοπαράδοσης
     */
    case TYPE_6_1 = "6.1";

    /**
     *  Στοιχείο Ιδιοχρησιμοποίησης
     */
    case TYPE_6_2 = "6.2";


    /*
    |--------------------------------------------------------------------------
    | Αντικριζόμενα Παραστατικά Εκδότη ημεδαπής / αλλοδαπής 
    | Συμβόλαιο - Έσοδο
    |--------------------------------------------------------------------------
    */

    /**
     *  Συμβόλαιο - Έσοδο
     */
    case TYPE_7_1 = "7.1";


    /*
    |--------------------------------------------------------------------------
    | Αντικριζόμενα Παραστατικά Εκδότη ημεδαπής / αλλοδαπής 
    | Ειδικό Στοιχείο (Έσοδο) – Απόδειξη Είσπραξης
    |--------------------------------------------------------------------------
    */

    /**
     *  Ενοίκια - Έσοδο
     */
    case TYPE_8_1 = "8.1";

    /**
     * Τέλος ανθεκτικότητας κλιματικής κρίσης
     */
    case TYPE_8_2 = "8.2";

    /**
     * Απόδειξη Είσπραξης POS
     */
    case TYPE_8_4 = "8.4";

    /**
     * Απόδειξη Επιστροφής POS
     */
    case TYPE_8_5 = "8.5";

    
    /*
    |--------------------------------------------------------------------------
    | Αντικριζόμενα Παραστατικά Εκδότη ημεδαπής / αλλοδαπής 
    | Δελτίο Παραγγελίας
    |--------------------------------------------------------------------------
    */
    
    /**
     * Δελτίο Παραγγελίας Εστίασης
     */
    case TYPE_8_6 = "8.6";


    /*
    |--------------------------------------------------------------------------
    | Αντικριζόμενα Παραστατικά Εκδότη ημεδαπής / αλλοδαπής 
    | Παραστατικό Διακίνησης
    |--------------------------------------------------------------------------
    */

    /**
     * Παραστατικό Διακίνησης Μη Συσχετιζόμενο
     */
    case TYPE_9_3 = "9.3";

    
    /*
    |--------------------------------------------------------------------------
    | Μη Αντικριζόμενα Παραστατικά Εκδότη ημεδαπής / αλλοδαπής
    | Παραστατικά Λιανικής 
    |--------------------------------------------------------------------------
    */

    /**
     *  ΑΛΠ
     */
    case TYPE_11_1 = "11.1";

    /**
     *  ΑΠΥ
     */
    case TYPE_11_2 = "11.2";

    /**
     *  Απλοποιημένο Τιμολόγιο
     */
    case TYPE_11_3 = "11.3";

    /**
     *  Πιστωτικό Στοιχ. Λιανικής
     */
    case TYPE_11_4 = "11.4";

    /**
     *  Απόδειξη Λιανικής Πώλησης για Λογ/σμό Τρίτων
     */
    case TYPE_11_5 = "11.5";


    /*
    |--------------------------------------------------------------------------
    | Μη Αντικριζόμενα Παραστατικά Εκδότη ημεδαπής / αλλοδαπής
    | Για Μελλοντική Χρήση
    |--------------------------------------------------------------------------
    */

    /**
     *  Για Μελλοντική Χρήση
     */
    case TYPE_12 = "12";


    /*
    |--------------------------------------------------------------------------
    | Μη Αντικριζόμενα Παραστατικά Λήπτη ημεδαπής / αλλοδαπής
    | Λήψη Παραστατικών Λιανικής
    |--------------------------------------------------------------------------
    */

    /**
     *  Έξοδα - Αγορές Λιανικών Συναλλαγών ημεδαπής / αλλοδαπής
     */
    case TYPE_13_1 = "13.1";

    /**
     *  Παροχή Λιανικών Συναλλαγών ημεδαπής / αλλοδαπής
     */
    case TYPE_13_2 = "13.2";

    /**
     *  Κοινόχρηστα
     */
    case TYPE_13_3 = "13.3";

    /**
     *  Συνδρομές
     */
    case TYPE_13_4 = "13.4";

    /**
     *  Παραστατικά Οντότητας ως Αναγράφονται από την ίδια (Δυναμικό)
     */
    case TYPE_13_30 = "13.30";

    /**
     *  Πιστωτικό Στοιχ. Λιανικής ημεδαπής / αλλοδαπής
     */
    case TYPE_13_31 = "13.31";


    /*
    |--------------------------------------------------------------------------
    | Αντικριζόμενα Παραστατικά Λήπτη ημεδαπής / αλλοδαπής
    | Παραστ. Εξαιρ. Οντοτήτων ημεδαπής / αλλοδαπής
    |--------------------------------------------------------------------------
    */

    /**
     *  Τιμολόγιο / Ενδοκοινοτικές Αποκτήσεις
     */
    case TYPE_14_1 = "14.1";

    /**
     *  Τιμολόγιο / Αποκτήσεις Τρίτων Χωρών
     */
    case TYPE_14_2 = "14.2";

    /**
     *  Τιμολόγιο / Ενδοκοινοτική Λήψη Υπηρεσιών
     */
    case TYPE_14_3 = "14.3";

    /**
     *  Τιμολόγιο / Λήψη Υπηρεσιών Τρίτων Χωρών
     */
    case TYPE_14_4 = "14.4";

    /**
     *  ΕΦΚΑ και λοιποί Ασφαλιστικοί Οργανισμοί
     */
    case TYPE_14_5 = "14.5";

    /**
     *  Παραστατικά Οντότητας ως Αναγράφονται από την ίδια (Δυναμικό)
     */
    case TYPE_14_30 = "14.30";

    /**
     *  Πιστωτικό ημεδαπής / αλλοδαπής
     */
    case TYPE_14_31 = "14.31";


    /*
    |--------------------------------------------------------------------------
    | Αντικριζόμενα Παραστατικά Λήπτη ημεδαπής / αλλοδαπής
    | Συμβόλαιο - Έξοδο
    |--------------------------------------------------------------------------
    */

    /**
     * Συμβόλαιο - Έξοδο
     */
    case TYPE_15_1 = "15.1";


    /*
    |--------------------------------------------------------------------------
    | Αντικριζόμενα Παραστατικά Λήπτη ημεδαπής / αλλοδαπής
    | Ειδικό Στοιχείο (Έξοδο) – Απόδειξη Πληρωμής
    |--------------------------------------------------------------------------
    */

    /**
     * Ενοίκιο Έξοδο
     */
    case TYPE_16_1 = "16.1";


    /*
    |--------------------------------------------------------------------------
    | Εγγραφές Τακτοποίησης Εσόδων - Εξόδων
    | Εγγραφές Οντότητας
    |--------------------------------------------------------------------------
    */

    /**
     *  Μισθοδοσία
     */
    case TYPE_17_1 = "17.1";

    /**
     *  Αποσβέσεις
     */
    case TYPE_17_2 = "17.2";

    /**
     *  Λοιπές Εγγραφές Τακτοποίησης Εσόδων - Λογιστική Βάση
     */
    case TYPE_17_3 = "17.3";

    /**
     *  Λοιπές Εγγραφές Τακτοποίησης Εσόδων - Φορολογική Βάση
     */
    case TYPE_17_4 = "17.4";

    /**
     *  Λοιπές Εγγραφές Τακτοποίησης Εξόδων - Λογιστική Βάση
     */
    case TYPE_17_5 = "17.5";

    /**
     *  Λοιπές Εγγραφές Τακτοποίησης Εξόδων - Φορολογική Βάση
     */
    case TYPE_17_6 = "17.6";
}