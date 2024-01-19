<?php
class Tag
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function open($text = "")
    {
        $name = $this->name;
        return "<$name $text>";
    }

    public function close()
    {
        $name = $this->name;
        return "</$name>";
    }
}




$header = new Tag('header');
$h1 = new Tag('h1');
echo $header->open() . $h1->open() . 'header сайта' . $h1->close() . $header->close();
$tag = new Tag('img');
echo $tag->open('src=directory/pngwing.com.png');
?>