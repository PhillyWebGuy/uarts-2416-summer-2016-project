<?php
require 'head.php';
require 'php/functions.php';

if($_POST) {
    $id = addProduct($_POST);
    echo "<a href='edit.php?id=" . $id . "'>Edit Product</a>";
}

//get a list of authors in an array by calling getAuthorList()
$authors = getAuthorList();
//print_r ($authors);


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
        for ($i=0; $i < count($authors); $i++){
            echo "<option value=" . $authors[$i]['ID'] . ">" . $authors[$i]['firstName'] . " " . $authors[$i]['lastName']. "</option>";
        }
    ?>
    </select>
    
    <label for="price">
        Price:
    </label> 
    <input type="text" id="price" name="price">
    
    <label for="publication_date">
        Publication Date:
    </label> 
    <input type="text" id="publication_date" name="publication_date">
    
    <label for="genre">
        Publication Date:
    </label> 
    <input type="text" id="genre" name="genre">

<input type="submit" value="Submit">
    
    
</form>





<?php
require 'foot.php';
?>