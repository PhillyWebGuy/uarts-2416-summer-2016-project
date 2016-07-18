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

<div class="container">
    <div class="row">
        <h1 class="center">Add Book Information</h1>
    </div>
</div>

<div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <div class="row">
        <div class="col-md-12">
            
            <label for="title">
                Title:
            </label> 
            <input type="text" id="title" name="title">
        </div>    
    </div>  
    <div class="row">
        <div class="col-md-8">
            <label for="authors">Author:</label>
            
                <select id="authorID" name="authorID">  
                <?php
                    //iterate through an array to build a list of <options> for authors
                    //set value = id and select text as concat of firstName and lastName
                    for ($i=0; $i < count($authors); $i++){
                        echo "<option value=" . $authors[$i]['ID'] . ">" . $authors[$i]['firstName'] . " " . $authors[$i]['lastName']. "</option>";
                    }
                ?>
                </select>
            </div>
            <div class="col-md-4">
                <label for="price">
                    Price:
                </label> 
                <input type="text" id="price" name="price">
            </div>    
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="publication_date">
                    Publication Date:
                </label> 
                <input type="text" id="publication_date" name="publication_date">
            </div>    
            <div class="col-md-8">   
                <label for="genre">
                    Genre:
                </label> 
                <input type="text" id="genre" name="genre">
            </div>     
        <div class="row">  
            <div class="col-md-12">
                <input type="submit" value="Submit">
            </div>    
        </div>         
        </form>
    </div>
</div>





<?php
require 'foot.php';
?>