<?php
/*
==================================TRACCIA 3==================================
Crea la tua armatura di Ironman seguendo il modello visto a lezione, seguendo i seguenti punti:

metti ogni classe (abstract o no) in un file diverso, utilizzando nel file principale la funzione require()
crea un esercito random di Ironman
aggiungi un contatore di quanti Ironman hai creato
*/

///============ABSTRACT BASE CLASS============
require "ab_upperbody.php";
require "ab_lowerbody.php";
require "ab_middlebody.php";
///============BODY PARTS============
require "bp_head.php"; //upperBodyPart
require "bp_core.php"; //middleBodyPart
require "bp_arms.php"; //middleBodyPart
require "bp_legs.php"; //lowerBodyPart
///============FUNCTIONS============
require "functions.php";

//////////////////////////////////////////////////////
//============RECAP SKILLS============              
//HEAD SKILLS [ upperSkill() ]:
/* HeadVision - HeadZoom - HeadTag */

//CORE SKILLS [ middleSkill() ]:
/* CoreLaser - CoreShield - CoreTemperature */

//ARMS SKILLS [ middleSkill() ]:
/* ArmsMissile - ArmSlap - ArmShield - ArmFlame */

//LEGS SKILLS [ lowerSkill() ]:
/* LegRun - LegJet - LegKick */
/////////////////////////////////////////////////////


//============IRONMAN CLASS============
class IronMan
{
    public $upper;
    public $middle;
    public $lower;

    public function __construct(UpperBody $_upper , MiddleBody $_middle, LowerBody $_lower)
    {
        $this->upper=$_upper;
        $this->middle=$_middle;
        $this->lower=$_lower;
    }

    public function myUpperSkill(){
        $this->upper->upperSkill();
    }

    public function myMiddleSkill(){
        $this->middle->middleSkill();
    }

    public function myLowerSkill(){
        $this->lower->lowerSkill();
    }

    public function myFinalSetting()
    {
        $this->myUpperSkill();
        $this->myMiddleSkill();
        $this->myLowerSkill();

    }

}

///============GENERAZIONE IRONMANS ARRAY SKILLS + FUNZIONE============
$upperArr= [new HeadZoom, new HeadTag, new HeadVision];
$middleArr=[new CoreLaser, new CoreShield, new CoreTemperature, new ArmsSlap, new ArmsFlame, new ArmsShield, new ArmsMissile];
$lowerArr=[new LegJet, new LegKick, new LegsRun];

function generateInstances($_instanceNumber,$_up,$_mid,$_low)
{
echo "\n";
echo "--------------IRONMANS GENERATI-------------\n";
echo "\n";
for ($i=0; $i < $_instanceNumber; $i++) { 
echo "============== IronMan ". $i+1 ." =============\n";
${'iron' . $i} = new IronMan(chooseSkill($_up),chooseSkill($_mid),chooseSkill($_low));
${'iron' . $i}->myFinalSetting();
echo "\n";
}
echo "== Generati correttamente $_instanceNumber IronMans!\n ==";
}
///END




//============STARTING GENERATION============
$generationNumber=readline("Scegli un numero di IronMan da generare : ");
generateInstances($generationNumber, $upperArr,$middleArr,$lowerArr);



