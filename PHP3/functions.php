<?php

//=================================employes info
function company_employes_info($_array)
{
    foreach ($_array as $element) {
        $element->print_employes();
    }
    
}


//=================================print company names
function print_company_name($_array)
{
    echo "\n";
    $num=1;
    foreach ($_array as $company) {
        echo $num. "-" . " " . $company->name . " " .  "(". $company->location .")". "\n";
        $num++;
    }
    
};

//================================choose company of interest
function choose_company_of_interest($_arr)
{
    do {
        $choice=readline("Inserisci il numero equivalente alla sede di tuo interesse :\n");
        if (is_numeric($choice)){
            $choice-=1;
            if ($choice>=0 && $choice<count($_arr))
            {
                $_arr[$choice]->print_salary();
            }
            else {echo "(!) Non hai selezionato un azienda valida.\n"; $choice="";}
        }
        else {echo "(!) Non hai selezionato un azienda valida.\n"; }
    } while (is_numeric($choice)==false);  
}

//=================================choose months function
function choose_months(){
    $check=false;
    do {
        $check=Company::print_monthly_costs(readline("Inserisci numero di mesi di tuo interesse :\n"));
    } while ($check==false);
    $check=false;
}

//END