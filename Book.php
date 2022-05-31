<?php
class Book {
    // propiedades: caracteristicas de nuestros objetos
    //metodo: definen que es lo que puede ser nuestro objeto


    //metodos : magico
    public function __construct(
        private string $author,
        private string $title,
        private float $price,
        private int $stock,
        private int $id
    )
    {
        //echo "Soy una instancia de Book";
    }

    public function getInfo()
    {
        $info = "<b> {$this->title} </b> escrito por: <i> {$this->author} </i> <br>
                precio: {$this->price} <br>
                ID: {$this->id} <br>
        ";

        if( $this->stock > 0) {
            $info .= "piezas disponibles: <span style='color:green'>  $this->stock </span> <br>";
        }else{
            $info .= "piezas disponibles: <span style='color:red'> NO DISPONIBLE </span> <br>";
        }
        return $info;
    }
}


//instancia de la clase book 
$book1 = new Book(
    'George',
    'Rebelion en la granja',
    299.00,
    0,
    1
);

//echo $book1->getInfo();

$book2 = new Book(
    'Stephen King',
    'Christine',
    399.00,
    50,
    2
);

//echo "<br>";
//echo $book2->getInfo();
//var_dump( $book1 );

//echo $book2 ->title;
//echo "<br>";
//echo $book2 ->author;