<?php
require 'head.php';
require 'php/functions.php';

if($_REQUEST) {
    $product = editProduct($_REQUEST);
    var_dump($_REQUEST);
    print_r($product);
}

?>







<?php
require 'foot.php';
?>