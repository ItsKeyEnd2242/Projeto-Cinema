<?php
class Book
{
    // Métodos
    public function __construct( // Propriedades
    private string $ISBN13,
    private string $tittle,
    private string $author,
    private string $publisher,
    private string $gender,
    private DateTime $publisherDay,
    private int $edition,
    private array $type,
    private string $synopsis,
    private int $numberOfPages,
    private int $classification,
    private float $price,
    ){}

    public function __get($prop):mixed{
        if(property_exists($this, $prop)){
            return $this->$prop;
        }
        return null;
    }
}