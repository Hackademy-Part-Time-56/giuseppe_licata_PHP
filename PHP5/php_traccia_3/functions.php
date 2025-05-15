<?php

///SCEGLIE UN ELEMENTO CASUALE TRA GLI ELEMENTI CHE COMPONGONO L ARRAY DATO IN PASTO ALLA FUNZIONE
function chooseSkill($_arr)
{
    $n=random_int(0,count($_arr)-1);
    return $_arr[$n];
}

