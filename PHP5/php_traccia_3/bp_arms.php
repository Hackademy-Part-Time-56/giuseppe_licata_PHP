<?php

//ARM PARTS (LOWERBODY)

class ArmsMissile extends MiddleBody
{
    public function middleSkill()
    {
        echo "Ti faccio esplodere con i miei missili\n";
    }
};

class ArmsSlap extends MiddleBody
{
    public function middleSkill()
    {
        echo "Ti do una sberla potente!\n";
    }
};

class ArmsShield extends MiddleBody
{
    public function middleSkill()
    {
        echo "Non puoi penetrare il mio scudo difensivo!\n";
    }
};

class ArmsFlame extends MiddleBody
{
    public function middleSkill()
    {
        echo "Ti carbonizzo con i miei lanciafiamme!\n";
    }
};