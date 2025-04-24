<?php



//==================================FUNCTION CHECK LENGHT
function check_lenght($string)
{
    if (strlen($string)>=8){

        echo "(V) La password rispetta la lunghezza di 8 caratteri! \n";
        return true;
    } 
    else 
    { 
        
        return false;
    }
    
}//end check_lenght


//==================================FUNCTION CHECK_UPPERCASE
function check_upperCase($string){
    
    for ($i=0; $i < strlen($string) ; $i++) { 
        if (ctype_upper($string[$i]))
        {
            echo "(V) La password contiene almeno una lettera maiuscola! \n";
            return true;
        }
    }
    
    return false;
    
}////end check_uppercase


//==================================FUNCTION CHECK_NUMBER
function check_number($string)
{
    for ($i=0; $i < strlen($string) ; $i++) { 
        if (is_numeric($string[$i]))
        {
            echo "(V) La password contiene almeno un numero! \n";
            return true;
        }
    }
    
    return false;
}////end check_number


//==================================FUNCTION CHECK_SPECIAL
function check_special($string)
{
    $pattern="/[#$%@*&()!?><_-]/";

    if (preg_match($pattern, $string))
    {
        echo "(V) La password contiene almeno un carattere speciale! \n";
        return true;
    }
    
    return false;
}////end check_special


//==================================FUNCTION CHECK_BANNED
function check_banned($string)
{
    $bannedPwd = [
        0 => '12345678',
        1 => 'abcdefgh'
    ];

    for ($i=0; $i < count($bannedPwd); $i++) { 
        if ($string == $bannedPwd[$i]) {
            
            return false;
        }
    }

    echo "(V) La password non contiene parole bannate! \n";
    return true;
}////end check_special


//==================================FUNCTION CHECK_PASSWORD

function check_password($string)
{
$c_B=check_banned($string);
$c_L=check_lenght($string);
$c_U=check_upperCase($string);
$c_S=check_special($string);
$c_N=check_number($string);

if ($c_B && $c_L && $c_U && $c_S && $c_N)
{
echo "!!!--- La password che hai inserito rispetta tutti i requisiti! ---!!!";
return true;
}

echo "------------------------------------------ \n";

if (!$c_B)
{
    echo "(X) La password e' troppo semplice! \n";
}

if (!$c_L)
{
    echo "(X) La password ha meno di 8 caratteri \n";
}

if (!$c_U)
{
    echo "(X) La password non contiene nessuna lettera maiuscola \n";
}

if (!$c_S)
{
    echo "(X) La password non contiene nessun carattere speciale \n";
}

if (!$c_N)
{
    echo "(X) La password non contiene nessun numero \n";
}

echo "------------------------------------------ \n";


return false;

}

?>