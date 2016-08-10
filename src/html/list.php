<?php
//require '../php/app.php';
//require '../php/functions.php';
require 'head.php';
require 'php/functions.php';

$books = getBooksList();

$booksKeys = array_keys($books[0]);

//$deleteProduct =  $database->query('DELETE FROM cars WHERE ID=:id');

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
                    echo '<td><a href="edit.php?id=' . $book['ID'] . '" class="options"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a data-toggle="modal" data-target="#myModal" class="options"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h2 class="modal-title" id="myModalLabel">Delete Book</h2>
                          </div>
                          <div class="modal-body">
                            <strong>Are you sure you want to delete this book? Changes can not be undone.</strong>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="closeBtn" data-dismiss="modal">Close</button>
                            <a href="delete.php?action=delete&id=' . $book['ID'] . '"><button type="button" class="deleteBtn">Delete</button></a>
                          </div>
                        </div>
                      </div>
                    </div>';
                    echo "</tr>";
                }
                ?> 
            
        </Table>
    </div>
</div>

<?php
require 'foot.php';
?>
