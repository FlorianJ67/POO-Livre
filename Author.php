<?php
class Author {
    protected $_name;
    protected $_fname;
    protected $_books;
    
    public function __construct(string $name,string $fname){
        $this->_name = $name;
        $this->_fname = $fname;
        $this->_books = [];
    }

    //GET
    public function getName(){
        return $this->_name;
    }
    public function getFName(){
        return $this->_fname;
    }
    public function getBooks(){
        return $this->_books;
    }

    //SET
    public function setName($name){
        $this->_name = $name;
    }
    public function setFName($fname){
        $this->_fname = $fname;
    }

  
    public function addBook($newBook){
        array_push($this->_books,$newBook);
    }

    
    //Affiche les info d'un titulaire

    public function displayBibliography(){        

        echo 'Livres de '.$this->_fname." ".$this->_name.' :<br>';
        foreach($this->_books as $book){
            $book->getBookInfos();
        }
        echo'<br>';

    }
}
          