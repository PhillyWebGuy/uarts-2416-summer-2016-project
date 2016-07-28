<?php
//require '../php/app.php';
//require '../php/functions.php';
require 'head.php';
require 'php/functions.php';

$books = getBooksList();

$booksKeys = array_keys($books[0]);

//print_r($books);

?>


<div class="container">
    <div class="row">
        <h1 class="center">Reading List</h1>
    </div>    
</div>  
<div class="container">
    <div class="row">       
        <Table>
            <tr>
                <?php 
                    for ($i=0; $i < count($booksKeys); $i++){
                        echo "<th>" . $booksKeys[$i] . "</th>";
                    } 
                ?>
                <th>Options</th>
            </tr>
            
                <?php
                for ($i=0; $i < count($books); $i++){
                    $book = $books[$i];
                    echo "<tr>";
                    foreach ($book as $bookPart){
                        echo "<td>" . $bookPart . "</td>";
                        
                    }
<<<<<<< HEAD
                    echo '<td><a href="edit.php?idgulp=' . $book['ID'] . '" class="options"><i class="fa fa-pencil" aria-hidden="true"></i></a><a href="delete.php" class="options"><i class="fa fa-trash" aria-hidden="true"></i></a></td>';
=======
                     echo '<td><a href="edit.php?idgulp=' . $book['ID'] . '" class="options"><i class="fa fa-pencil" aria-hidden="true"></i></a><a href="delete.php" class="options"><i class="fa fa-trash" aria-hidden="true"></i></a></td>';
>>>>>>> 26dc978b3f6a458499be02ae5cfacd7460cc87f0
                    echo "</tr>";
                }git
                ?> 
            
        </Table>
    </div>
</div>

<?php
require 'foot.php';
?>
