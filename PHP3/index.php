<?php
/*
+Crea una classe Company che abbia i seguenti attributi pubblici:
-name: nome dell’azienda;
-location: stato in cui e' ubicata la sede dell’azienda;
-tot_employees: numero di dipedenti assunti in quella sede (di default, 0);
+Crea 5 istanze di 5 aziende diverse
+Crea un metodo che permetta di stampare a terminale la seguente frase: “L’ufficio Aulab con sede in Italia ha ben 50 dipendenti“; se la sede non ha dipendenti, allora stampa: “L’ufficio Aulab con sede in Italia non ha dipendenti“;
+Aggiungi un nuovo attributo chiamato $avg_salary nella Classe Company. Aggiorna poi le aziende che hai gia' creato nel punto 2.
+Implementa un metodo che calcoli la spesa per un numero variabile di mesi (praticamente il metodo deve accettare come parametro N mesi) e poi uno che stampi a schermo l’informazione (sono due metodi diversi);
+Implementa un attributo statico che tenga traccia di quante aziende sono state create;
+Implementa un metodo statico che stampi a schermo quante aziende sono state create.
*/

echo "\n";
echo "<=================PHP-3=================>\n";
echo "\n";

///functions php require
require ('functions.php');

////++++++++++++CLASS COMPANY++++++++++++
class Company {
    public $name;
    public $location;
    public $tot_employes = 0;
    public $avg_salary;
    //--//
    public static $costs;
    public static $company_num;
    
    ////==============CONSTRUCT=============
    public function __construct($_name, $_location, $tot_employes)
    {
        $this->name=$_name;
        $this->location=$_location;
        $this->tot_employes=$tot_employes;
        self::$company_num++;
    }///end construct
    
    ////==============PRINT EMPLOYES=============
    public function print_employes()
    {
        if ($this->tot_employes > 0) {
            echo "- L'ufficio Aulab con sede in $this->location ha ben $this->tot_employes dipendenti.\n";
        } else
        if ($this->tot_employes <= 0) {
            echo "- L'ufficio Aulab con sede in $this->location non ha dipendenti.\n";
        }
    }
    
    ////==============PRINT SALARY=============
    public function print_salary()
    {
        echo "(R) Lo stipendio medio di un dipendente di $this->name con sede a $this->location e' di $this->avg_salary $\n";
        echo "----\n";
    }
    
    ////==============CALC MONTHLY COSTS===============
    public static function calc_monthly_costs($_arr_company)
    {
        self::$costs=0;
        
        foreach ($_arr_company as $_company) {
            self::$costs+=$_company->avg_salary;
        }
        return self::$costs;
    }
    
    ////==============PRINT MONTHLY COSTS===============
    public static function print_monthly_costs($_months)
    {
        if (is_numeric($_months) && $_months>0){
            if ($_months==1){
                echo "(R) Aulab in"." "."un"." "."mese spende"." ".self::$costs*$_months." "."$ per pagare gli stipendi di tutti i dipendenti\n";
                echo "----\n";
            } else
                if ($_months>1){
                    echo "(R) Aulab in"." ".$_months." "."mesi spende"." ".self::$costs*$_months." "."$ per pagare gli stipendi di tutti i dipendenti\n";
                    echo "----\n";
                }
                    return true;
                    
                } else
                {echo "(!) Non hai inserito un valore numerico corretto\n";
                    return false;
                }
                
            }
            
            ////==============PRINT COMPANY NUMBER==============
            public static function print_company_number()
            {
                echo "L'azienda AULAB ha" ." ". self::$company_num . " " . "sedi.\n";
            }
            
        };//end class Company
        
        /////istanzio sedi
        $company1= new Company("Azienda1","Toronto",85);
        $company2 = new Company("Azienda2", "New York", 120);
        $company3 = new Company("Azienda3", "London", 62);
        $company4 = new Company("Azienda4", "Nowhere", 0);
        $company5 = new Company("Azienda5", "Italia", 50);
        
        
        /////inserisco LE SEDI in un array
        $tot_company=[
            $company1,
            $company2,
            $company3,
            $company4,
            $company5,
        ];
        
        //++++print employes infos (function.php)
        echo "\n----NUMERO DI DIPENDENTI----\n";
        company_employes_info($tot_company);
        
        //update average_salary
        $company1->avg_salary = 45000;
        $company2->avg_salary = 65000;
        $company3->avg_salary = 58000;
        $company4->avg_salary = 0;
        $company5->avg_salary = 70000;
        
        
        //++++PRINT COMPANY NUMBER
        echo "\n----NUMERO DI SEDI----\n";
        Company::print_company_number();
        print_company_name($tot_company); /// (function.php)
        
        //++++PRINT SALARY
        echo "\n----STIPENDI----\n";
        //scelta della sede di interesse
        choose_company_of_interest($tot_company);
        
        //++++MONTHLY COSTS
        echo "\n----SPESE MENSILI----\n";
        Company::calc_monthly_costs($tot_company);
        //choose months
        choose_months();
        
        //END