<?php
require 'head.php';
require 'php/functions.php';

if($_POST) {
    $id = addProduct($_POST);
    echo "<a href='edit.php?id=" . $id . "'>Edit Product</a>";
}

//get a list of authors in an array by calling getAuthorList()



?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
<label for="title">
    Title:
</label> 
<input type="text" id="title" name="title">

<label for="authors">Author</label>
<select>
    
    <?php
    //iterate through an array to build a list of <options> for authors
    //set value = id and select text as concat of firstName and lastName
    ?>
    
</select>

<input type="submit" value="Submit">
    
    
</form>





<?php
require 'foot.php';
?>