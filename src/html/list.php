<?php
require '../php/app.php';
require '../php/functions.php';

$books = getBooksList();

$booksKeys = array_keys($books[0]);

//print_r($books);


?>
<!DOCTYPE html>
<html>
<head>
    
</head>


<body>
    <Table>
        <tr>
            <?php 
                for ($i=0; $i < count($booksKeys); $i++){
                    echo "<th>" . $booksKeys[$i] . "</th>";
                } 
            ?>
        </tr>
        
            <?php
            for ($i=0; $i < count($books); $i++){
                $book = $books[$i];
                echo "<tr>";
                foreach ($book as $bookPart){
                    echo "<td>" . $bookPart . "</td>";
                }
                echo "</tr>";
            }
            ?> 
        
    </Table>
</body>

</html>
