<?php

///CORE PARTS (MIDDLEBODY)

class CoreLaser extends MiddleBody
{
    public function middleSkill()
    {
        echo "Ti disintegro con il mio raggio mortale!\n";
    }
};

class CoreShield extends MiddleBody
{
    public function middleSkill()
    {
        echo "Con il mio campo di forza sono impenetrabile!\n";
    }
};

class CoreTemperature extends MiddleBody
{
    public function middleSkill()
    {
        echo "Non soffro il freddo ne il caldo!\n";
    }
};