<?php
require 'class.php';

class Post{
    public $title;
    public $category;
    public $tag;


public function __construct($_title, Category $_category, $_tag )
{
$this->title=$_title;
$this->category=$_category;
$this->tag=$_tag;
}

public function printArticle($_article)
{
    echo "=============$this->title=============\n";
        echo "-Categoria: ";
        $this->category->getMyCategory();
        echo "-Titolo: $this->title\n";
        echo "-Tag: $this->tag\n";
        echo "\n";
        echo "$_article\n";
}

}

$article= new Post("The Little Bang",new News,"#meteora, #ufo, #stelle, #atropo");
$articolo="Dallo spazio profondo, una meteora di dimensioni ignote\ne' precipitata sul pianeta Atropo estinguendo la popolazione\ndi Coleotteri Freccia.";
$article->printArticle($articolo);