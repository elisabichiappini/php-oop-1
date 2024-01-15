<?php
// definisco la classe Movie
class Movie {
    // dichiarazione variabili di istanza
    public $title;
    public $comingDate;
    public $author;
    public $genre;

    // constructor 

    function __construct($_title, $_comingOut) {
        $this->title = $_title;
        $this->comingDate = $_comingOut;
    }
    
    // per TITLE dichiaro metodo della classe Movie setter
    public function setTitle($title) {
        if($title !== '') {
            $this->title = $title;
        } else {
            $this->title = 'NotFound';
        }
    }
    // per TITLE dichiaro metodo della classe Movie getter
    public function getTitle() {
        return $this->title;
    }

    // per COMINGDATE dichiaro metodo della classe Movie setter
    public function setDateComing($date) {
        if($date !== '') {
            $this->comingDate = $date;
        } else {
            $this->comingDate = 'NotFound';
        }
    }
    // per COMINGDATE dichiaro metodo della classe Movie getter
    public function getDate() {
        return $this->comingDate;
    }

    // per AUTHOR dichiaro metodo della classe Movie setter
    public function setAuthor($name) {
        if($name !== '') {
            $this->author = $name;
        } else {
            $this->author = 'NotFound';
        }
    }
    // per AUTHOR dichiaro metodo della classe Movie getter
    public function getAuthor() {
        return $this->author;
    }
    
    // per GENRE dichiaro metodo della classe Movie setter
    public function setGenre($type) {
        if($type !== '') {
            $this->genre = $type;
        } else {
            $this->genre = 'NotFound';
        }
    }
    // per GENRE dichiaro metodo della classe Movie getter
    public function getGenre() {
        return $this->genre;
    }
};
?>