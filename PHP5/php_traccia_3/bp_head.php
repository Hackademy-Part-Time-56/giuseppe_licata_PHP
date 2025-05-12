<?php

//HEAD PARTS (UPPERBODY)

class HeadVision extends UpperBody
{
    public function upperSkill()
    {
        echo "Con la mia visuale ad infrarossi riesco a vederti anche al buio!\n";
    }
};

class HeadZoom extends UpperBody
{
    public function upperSkill()
    {
        echo "Con il mio zoom ottico riesco a vederti anche dalla Luna!\n";
    }
};

class HeadTag extends UpperBody
{
    public function upperSkill()
    {
        echo "Non puoi sfuggire al mio sistema di targeting avanzato!\n";
    }
};