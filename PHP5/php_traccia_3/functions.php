<?php

///SCEGLIE UN NUMERO CASUALE TRA IL NUMERO DI ELEMENTI CHE COMPONGONO L ARRAY DATO IN PASTO ALLA FUNZIONE
function chooseSkill($_arr)
{
    $n=random_int(0,count($_arr)-1);
    return $_arr[$n];
}

