<?php

//HEAD PARTS (UPPERBODY)

class HeadVision extends UpperBody
{
    public function upperSkill()
    {
        $messages = [
            "Con la mia visuale ad infrarossi riesco a vederti anche al buio!\n",
            "Non puoi sfuggirmi neanche al buio!\n",
            "Inutile nascondersi nel buio!\n",
            "La mia visione termica rileva ogni tuo movimento nell'oscurità!\n",
            "Le mie lenti notturne trasformano la notte in giorno!\n",
            "Nell'ombra più profonda, la tua firma termica ti tradisce!\n"
        ];
        echo chooseSkill($messages); //riciclo la funzione chooseSkills per scegliere un messaggio randomico
    }
};

class HeadZoom extends UpperBody
{
    public function upperSkill()
    {
        $messages = [
            "Con il mio zoom ottico riesco a vederti anche dalla Luna!\n",
            "Ti vedo anche se sei piccolo come una formica!\n", 
            "Ho uno zoom a 100000x!\n",
            "Posso vedere i tuoi atomi!\n",
            "Il mio telescopio quantico supera i limiti della fisica!\n",
            "Con le mie lenti potenziate vedo attraverso le montagne!\n",
            "Il mio sistema di ingrandimento rivela anche l'invisibile!\n"
        ];
        echo chooseSkill($messages); //riciclo la funzione chooseSkills per scegliere un messaggio randomico
        
    }
};

class HeadTag extends UpperBody
{
    public function upperSkill()
    {
        $messages = [
            "Non puoi sfuggire al mio sistema di targeting avanzato!\n",
            "Con la mia mira automatica non sbaglio un colpo!\n", 
            "Sei nel mirino!\n",
            "Il mio puntatore laser ti ha già localizzato!\n",
            "I miei sensori di movimento ti tengono tracciato!\n",
            "La mia tecnologia di puntamento predice ogni tua mossa!\n"
        ];
        echo chooseSkill($messages); //riciclo la funzione chooseSkills per scegliere un messaggio randomico
    }
};