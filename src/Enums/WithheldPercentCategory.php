<?php

namespace Firebed\AadeMyData\Enums;

enum WithheldPercentCategory: int
{
    use HasLabels;
    
    /**
     *  Περιπτ. β’- Τόκοι - 15%
     */
    case TAX_1 = 1;
    

    /**
     *  Περιπτ. γ’ - Δικαιώματα - 20%
     */
    case TAX_2 = 2;
    

    /**
     *  Περιπτ. δ’ - Αμοιβές Συμβουλών Διοίκησης - 20%
     */
    case TAX_3 = 3;
    

    /**
     *  Περιπτ. δ’ - Τεχνικά Έργα - 3%
     */
    case TAX_4 = 4;
    

    /**
     *  Υγρά καύσιμα και προϊόντα καπνοβιομηχανίας 1%
     */
    case TAX_5 = 5;
    

    /**
     *  Λοιπά Αγαθά 4%
     */
    case TAX_6 = 6;
    

    /**
     *  Παροχή Υπηρεσιών 8%
     */
    case TAX_7 = 7;
    

    /**
     *  Προκαταβλητέος Φόρος Αρχιτεκτόνων και Μηχανικών επί Συμβατικών Αμοιβών, για Εκπόνηση Μελετών και Σχεδίων 4%
     */
    case TAX_8 = 8;
    

    /**
     *  Προκαταβλητέος Φόρος Αρχιτεκτόνων και Μηχανικών επί Συμβατικών Αμοιβών, που αφορούν οποιασδήποτε άλλης φύσης έργα 10%
     */
    case TAX_9 = 9;
    

    /**
     *  Προκαταβλητέος Φόρος στις Αμοιβές Δικηγόρων 15%
     */
    case TAX_10 = 10;
    

    /**
     *  Παρακράτηση Φόρου Μισθωτών Υπηρεσιών παρ. 1 αρ. 15 ν. 4172/2013 ποσό
     */
    case TAX_11 = 11;
    

    /**
     *  Παρακράτηση Φόρου Μισθωτών Υπηρεσιών παρ. 2 αρ. 15 ν. 4172/2013 - Αξιωματικών Εμπορικού Ναυτικού 15%
     */
    case TAX_12 = 12;
    

    /**
     *  Παρακράτηση Φόρου Μισθωτών Υπηρεσιών παρ. 2 αρ. 15 ν. 4172/2013 - Κατώτερο Πλήρωμα Εμπορικού Ναυτικού 10%
     */
    case TAX_13 = 13;
    

    /**
     *  Παρακράτηση Ειδικής Εισφοράς Αλληλεγγύης ποσό
     */
    case TAX_14 = 14;
    

    /**
     *  Παρακράτηση Φόρου Αποζημίωσης λόγω Διακοπής Σχέσης Εργασίας παρ. 3 αρ. 15 ν. 4172/2013 ποσό
     */
    case TAX_15 = 15;
    

    /**
     *  Παρακρατήσεις συναλλαγών αλλοδαπής βάσει συμβάσεων αποφυγής διπλής φορολογίας (Σ.Α.Δ.Φ.) ποσό
     */
    case TAX_16 = 16;
    

    /**
     *  Λοιπές Παρακρατήσεις Φόρου ποσό
     */
    case TAX_17 = 17;


    /**
     *  Παρακράτηση Φόρου Μερίσματα περ.α παρ. 1 αρ. 64 ν. 4172/2013 5%
     */
    case TAX_18 = 18;

    public function label(): string
    {
        return match($this) {
            self::TAX_1  => "Περιπτ. β’ - Τόκοι - 15%",
            self::TAX_2  => "Περιπτ. γ’ - Δικαιώματα - 20%",
            self::TAX_3  => "Περιπτ. δ’ - Αμοιβές Συμβουλών Διοίκησης - 20%",
            self::TAX_4  => "Περιπτ. δ’ - Τεχνικά Έργα - 3%",
            self::TAX_5  => "Υγρά καύσιμα και προϊόντα καπνοβιομηχανίας 1%",
            self::TAX_6  => "Λοιπά Αγαθά 4%",
            self::TAX_7  => "Παροχή Υπηρεσιών 8%",
            self::TAX_8  => "Προκαταβλητέος Φόρος Αρχιτεκτόνων και Μηχανικών επί Συμβατικών Αμοιβών, για Εκπόνηση Μελετών και Σχεδίων 4%",
            self::TAX_9  => "Προκαταβλητέος Φόρος Αρχιτεκτόνων και Μηχανικών επί Συμβατικών Αμοιβών, που αφορούν οποιασδήποτε άλλης φύσης έργα 10%",
            self::TAX_10 => "Προκαταβλητέος Φόρος στις Αμοιβές Δικηγόρων 15%",
            self::TAX_11 => "Παρακράτηση Φόρου Μισθωτών Υπηρεσιών παρ. 1 αρ. 15 ν. 4172/2013",
            self::TAX_12 => "Παρακράτηση Φόρου Μισθωτών Υπηρεσιών παρ. 2 αρ. 15 ν. 4172/2013 - Αξιωματικών Εμπορικού Ναυτικού 15%",
            self::TAX_13 => "Παρακράτηση Φόρου Μισθωτών Υπηρεσιών παρ. 2 αρ. 15 ν. 4172/2013 - Κατώτερο Πλήρωμα Εμπορικού Ναυτικού 10%",
            self::TAX_14 => "Παρακράτηση Ειδικής Εισφοράς Αλληλεγγύης",
            self::TAX_15 => "Παρακράτηση Φόρου Αποζημίωσης λόγω Διακοπής Σχέσης Εργασίας παρ. 3 αρ. 15 ν. 4172/2013",
            self::TAX_16 => "Παρακρατήσεις συναλλαγών αλλοδαπής βάσει συμβάσεων αποφυγής διπλής φορολογίας (Σ.Α.Δ.Φ.)",
            self::TAX_17 => "Λοιπές Παρακρατήσεις Φόρου",
            self::TAX_18 => "Παρακράτηση Φόρου Μερίσματα 5% [περ.α παρ. 1 αρ. 64 ν. 4172/2013]",
        };
    }

    /**
     * @deprecated 
     */
    public function affectsTotalGrossValue(): bool
    {
        return !in_array($this, [
            self::TAX_8,
            self::TAX_9,
            self::TAX_10,
        ]);
    }
}