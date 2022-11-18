<h1>POO Book</h1>

<?php 
 spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';

});


$author1 = new Author("Sarkozy","Nico");
$book1 = new Book("Le temps des tempêtes",500,"2014",45, $author1);
$book2 = new Book("Le temps des trompêtes",140,"2019",5, $author1);

$author1->displayBibliography();

$author2 = new Author("King","Stephen");
$book3 = new Book("Ca",1138,"1986",20, $author2);
$book4 = new Book("Simetierre",374,"1983",15, $author2);
$book5 = new Book("Le Fléau",823,"823",14, $author2);
$book6 = new Book("Shining",447,"447",16, $author2);

$author2->displayBibliography();

?>