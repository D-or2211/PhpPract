<?php
require 'Book.php';

class Comic extends Book {

    public function __construct(
        $author,
        $title,
        $price,
        $stock,
        $id,
        private array $illustrators,
        private int $vol, 
    )
    {
        parent::__construct($author, $title, $price, $stock, $id);
    }

    public function getInfo()
    {
        $result = "volumen: $this->vol <br>";

        $ul = "<ul> -- Ilustradores --";
        foreach( $this->illustrators as $illustrator) {
            $ul .= "<li> $illustrator </li>";
        }

        $ul .= "</ul>";

        echo parent::getInfo();

        echo $result .= $ul;
    }
}

$comic1 = new Comic(
    'Alan Moore',
    'Batman the killing joke',
    120.20,
    30,
    1,
    ['Brian Bolland', 'John H.'],
    1
);

echo $comic1->getInfo();