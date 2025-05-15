<?php

//ARM PARTS (LOWERBODY)

class ArmsMissile extends MiddleBody
{
    
    public function middleSkill()
    {
        $messages = [
            "Ti faccio esplodere con i miei missili\n",
            "Ti polverizzo silurandoti!\n",
            "I miei razzi a ricerca termica non mancano mai il bersaglio!\n",
            "La mia artiglieria pesante ridurrà tutto in cenere!\n",
            "Ti disintegro con il mio arsenale esplosivo di ultima generazione!\n"
        ];
        echo chooseSkill($messages); //riciclo la funzione chooseSkills per scegliere un messaggio randomico
        
    }
};

class ArmsSlap extends MiddleBody
{
    public function middleSkill()
    {
        $messages = [
            "Ti do una sberla potente!\n",
            "Prenditi ste sberle!\n",
            "Il mio schiaffo sonico crea onde d'urto!\n",
            "Una manata e volerai all'altro capo della città!\n",
            "Le mie mani sono armi a impatto devastante!\n"
        ];
        echo chooseSkill($messages); //riciclo la funzione chooseSkills per scegliere un messaggio randomico
    }
};

class ArmsShield extends MiddleBody
{
    public function middleSkill()
    {
        $messages = [
            "Non puoi penetrare il mio scudo difensivo!\n",
            "Sono inattaccabile!\n",
            "La mia barriera energetica respinge qualsiasi attacco!\n",
            "Il mio campo di forza è impenetrabile anche ai colpi più potenti!\n",
            "La mia armatura quantistica devia persino i raggi laser!\n"
        ];
        echo chooseSkill($messages); //riciclo la funzione chooseSkills per scegliere un messaggio randomico
    }
};

class ArmsFlame extends MiddleBody
{
    public function middleSkill()
    {
        $messages = [
            "Ti carbonizzo con i miei lanciafiamme!\n",
            "Adesso brucia!!!!!\n",
            "Le mie fiamme termonucleari sciolgono anche il metallo!\n",
            "Il mio inferno portatile ti ridurrà in cenere!\n",
            "Sentirai il calore dei miei propulsori incendiari sulla pelle!\n"
        ];
        echo chooseSkill($messages); //riciclo la funzione chooseSkills per scegliere un messaggio randomico
    }
};