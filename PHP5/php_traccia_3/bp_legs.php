<?php

//LEG PARTS (LOWERBODY)

class LegsRun extends LowerBody
{
    public function lowerSkill()
    {
        $messages = [
            "Corro piu veloce della luce!\n",
            "Sono veloce come un fulmine!\n",
            "La mia velocita e' estrema!\n",
            "Nemmeno i tuoi occhi possono seguirmi quando scatto!\n",
            "Supero la barriera del suono con un semplice passo!\n",
            "Il mio sprint sfida le leggi della fisica!\n"
        ];
        echo chooseSkill($messages); //riciclo la funzione chooseSkills per scegliere un messaggio randomico
    }
};

class LegJet extends LowerBody
{
    public function lowerSkill()
    {
        $messages = [
            "Posso volare in alto grazie ai miei propulsori!\n",
            "Posso saltare anche un palazzo!\n",
            "Con un salto spicco il volo!\n",
            "I miei razzi dorsali mi catapultano fino alla stratosfera!\n",
            "Sfido la gravità con la potenza dei miei stivali anti-gravitazionali!\n",
            "Un balzo e sono già oltre le nuvole!\n"
        ];
        echo chooseSkill($messages); //riciclo la funzione chooseSkills per scegliere un messaggio randomico
    }
};

class LegKick extends LowerBody
{
    public function lowerSkill()
    {
        $messages = [
            "Ti calcio oltre l'atmosfera!\n",
            "Ti do un calcio rotante!\n",
            "Ti schiaccio con un solo piede!\n",
            "La mia pedata supersonica crea crateri nel terreno!\n",
            "Un mio calcio volante e volerai fino alla Luna!\n",
            "La potenza delle mie gambe può spezzare anche l'acciaio!\n"
        ];
        echo chooseSkill($messages); //riciclo la funzione chooseSkills per scegliere un messaggio randomico
    }
};