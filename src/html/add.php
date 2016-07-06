<?php
require 'head.php';
require 'php/functions.php';

if($_POST) {
    $id = addProduct($_POST);
    echo "<a href='edit.php?id=" . $id . "'>Edit Product</a>";
}

?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
<label for="title">
    Title:
</label> 
<input type="text" id="title" name="title">

<input type="submit" value="Submit">
    
    
</form>





<?php
require 'foot.php';
?>