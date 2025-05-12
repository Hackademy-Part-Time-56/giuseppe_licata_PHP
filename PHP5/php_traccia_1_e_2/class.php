<?php
/*
======================TRACCIA 1=======================
Crea un file chiamato class.php e crea una classe astratta di tipo Categoria , con i relativi figli (ovvero che estendono Category) seguendo questa struttura:
Category
-- Attualita's
-- Sport
-- Gossip
-- Storia
Tutte le classi dovranno avere un metodo astratto chiamato: getMyCategory() che mostri a schermo il valore relativo. 
======================TRACCIA 2=======================
Crea un nuovo file chiamato index.php e, importando la classe appena creata, crea una classe Post con i seguenti attributi:
Titolo
Categoria
Tag
Crea delle istanze di classe Post, iniettando la dipendenze Categoria all’interno dell’attributo dedicato. Crea anche dei metodi per visualizzare gli articoli completi. 
*/

require 'interfaces.php';

abstract class Category implements getMyCategory
{
abstract public function getMyCategory();
}

class News extends Category{
    public function getMyCategory(){echo "Attualita'\n";}
}

class Sport extends Category{
    public function getMyCategory(){echo "Sport\n";}
}

class Gossip extends Category{
    public function getMyCategory(){echo "Gossip\n";}
}

class Story extends Category{
    public function getMyCategory(){echo "Storia\n";}
}

// $news= new News(); 
// $news->getMyCategory();
// $sport= new Sport(); 
// $sport->getMyCategory();
// $gossip= new Gossip(); 
// $gossip->getMyCategory();
// $story= new Story(); 
// $story->getMyCategory();