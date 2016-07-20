<?php
require 'head.php';
require 'php/functions.php';

if($_REQUEST) {
    $product = editProduct($_REQUEST);
    var_dump($_REQUEST);
    print_r($product);
}

//1: Use the $_REQUEST array in order to obtain index for the ID of the book you are editing
//2: Write a function that will accept the argument 
//3: In the function you write, write a SQL query that will query the database for the
//   record of the book you are wishing to edit
//4: Return that record as an array
//5: TBC...

?>







<?php
require 'foot.php';
?>