<style>
p{
    background-color: #beffd2;
}
</style>

<?php

$livros= array("romance", "suspense", "terror", "época" ,"poesia", "aventura");

echo "<p>  livros: <br></p>";
for($l=0; $l<=(count($livros)-1); $l++){

    if($l == 4){
        echo "$livros[$l] <br>";
}
}
?>