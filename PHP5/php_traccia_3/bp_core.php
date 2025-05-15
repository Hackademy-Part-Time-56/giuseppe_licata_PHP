<?php

///CORE PARTS (MIDDLEBODY)

class CoreLaser extends MiddleBody
{
    public function middleSkill()
    {
        $messages = [
            "Ti disintegro con il mio raggio mortale!\n",
            "Ti riduco in polvere finissima!\n",
            "Il mio cannone a particelle scompone le tue molecole!\n",
            "Il mio fascio di energia quantica ti vaporizza all'istante!\n",
            "Dopo il mio raggio distruttore non rimarrà traccia di te!\n"
        ];
        echo chooseSkill($messages); //riciclo la funzione chooseSkills per scegliere un messaggio randomico
    }
};

class CoreShield extends MiddleBody
{
    public function middleSkill()
    {
        $messages = [
            "Con il mio campo di forza sono impenetrabile!\n",
            "Non puoi farmi proprio nulla!\n",
            "La mia barriera quantica respinge ogni tuo attacco!\n",
            "Il mio scudo energetico assorbe qualsiasi colpo tu sferri!\n",
            "La mia difesa molecolare mi rende immune a ogni tua arma!\n"
        ];
        echo chooseSkill($messages); //riciclo la funzione chooseSkills per scegliere un messaggio randomico
    }
};

class CoreTemperature extends MiddleBody
{
    public function middleSkill()
    {
        $messages = [
            "Non soffro il freddo ne il caldo!\n",
            "Sono in grado di termoregolarmi!\n",
            "Il mio sistema termico adattivo mi rende immune alle temperature estreme!\n",
            "Posso sopravvivere dall'Antartide al deserto senza battere ciglio!\n",
            "La mia tecnologia di regolazione corporea sfida ogni ambiente ostile!\n"
        ];
        echo chooseSkill($messages); //riciclo la funzione chooseSkills per scegliere un messaggio randomico
    }
};