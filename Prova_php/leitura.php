<a href="welcome.php" class="btn btn-danger"><h1>Sair</h1></a>;
<br>
<<?php
 
$txt_file = fopen('cadastro.txt','r');

if(file_exists('cadastro.txt')){
    while ($line = fgets($txt_file)) {
       echo   $line . "<br>";
 }

fclose($txt_file);
}
?>





