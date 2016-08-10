<?php
require 'head.php';
require 'php/functions.php';

if($_REQUEST) {
    $product = editProduct($_REQUEST);
}

//1: Use the $_REQUEST array in order to obtain index for the ID of the book you are editing
//2: Write a function that will accept the argument 
//3: In the function you write, write a SQL query that will query the database for the
//   record of the book you are wishing to edit
//4: Return that record as an array
//5: TBC...

if($_POST) {
    updateProduct($_POST);
    echo "<a href='list.php'>See All Products</a>";
}



?>


<div class="container">
    <div class="row">
        <h1 class="center">Edit Book Information</h1>
    </div>
</div>

<div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    
    <div class="row">
        <div class="col-md-12">
            
            <label for="title">
                Title:
            </label> 
            <input type="text" id="title" name="title" value="<?php echo $product['title']; ?>">
        </div>    
    </div>  
    <div class="row">
        <div class="col-md-8">
            <label for="authors">Author:</label>
            
        </div>
            <div class="col-md-4">
                <label for="price">
                    Price:
                </label> 
                <input type="text" id="price" name="price" value="<?php echo $product['price']; ?>">
            </div>    
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="publication_date">
                    Publication Date:
                </label> 
                <input type="text" id="publication_date" name="publication_date" value="<?php echo $product['publication_date']; ?>">
            </div>    
            <div class="col-md-8">   
                <label for="genre">
                    Genre:
                </label> 
                <input type="text" id="genre" name="genre" value="<?php echo $product['genre']; ?>">
                <input type="hidden" id="ID" name="ID" value="<?php echo $product['ID']; ?>">
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