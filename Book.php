<?php
class Book {
    protected $_title;
    protected $_pages;
    protected $_publish;
    protected $_price;
    protected $_author;
        
    public function __construct(string $title,int $pages,string $publish,int $price, Author $author){
        $this->_title = $title;
        $this->_pages = $pages;
        $this->_publish = $publish;
        $this->_price = $price;
        $this->_author= $author;
        $this->_author->addBook($this);
    }
            
    //GET
    public function getTitle(){
        return $this->_title;
    }
    public function getPages(){
        return $this->_pages;
    }
    public function getPublish(){
        return $this->_publish;
    }
    public function getPrice(){
        return $this->_price;
    }
    public function getAuthor(){
        return $this->_Author;
    }

        
    //SET
    public function setTitle($title){
        $this->_title = $title;
    }
    public function setPages($pages){
        $this->_pages = $pages;
    }
    public function setPublish($publish){
        $this->_publish = $publish;
    }
    public function setPrice($price){
        $this->_price = $price;
    }

            
                    
    //Affiche les info d'un compte
            
    public function getBookInfos(){
            echo $this->_title." (".$this->_publish.") : ".$this->_pages." pages / ".$this->_price." €<br>";

    }
}
?>