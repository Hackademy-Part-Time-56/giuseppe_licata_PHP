<?php

//LEG PARTS (LOWERBODY)

class LegsRun extends LowerBody
{
    public function lowerSkill()
    {
        echo "Corro piu veloce della luce!\n";
    }
};

class LegJet extends LowerBody
{
    public function lowerSkill()
    {
        echo "Volo in alto con i miei propulsori!\n";
    }
};

class LegKick extends LowerBody
{
    public function lowerSkill()
    {
        echo "Ti calcio oltre l'atmosfera!\n";
    }
};