<?php
///utente puo inserire una password
///minima lunghezza password 8 caratteri
///deve contenere almeno una lettera maiuscola
///deve contenere almeno un numero
///deve contenere almeno un carattere speciale
///non deve essere troppo semplice

require('functions.php');

$attempts = 5;

if ($attempts >= 1) {
    do {
        echo "\n";
        echo "Tentativi rimasti: $attempts \n";
        $psw = readline("Inserisci una password: ");
        $attempts--;
        echo "\n";
        
        if ($attempts <= 0 && !check_password($psw)) {
            echo "\n";
            echo "!!!!!!!!!!!!--Hai fatto troppi tentativi--!!!!!!!!!!!!\n";
            break;
        }
    } while (!check_password($psw));
}
