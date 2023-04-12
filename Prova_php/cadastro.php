<?php
if(!file_exists('cadastro.txt')){
$handle = fopen("cadastro.txt", "w");
}
else{
    $handle = fopen("cadastro.txt", "a");
}
fwrite($handle, "\n");
fwrite($handle,"Titulo :" . $_POST['titulo']);
fwrite($handle, "\n");
fwrite($handle,'Editora :'. $_POST['editora']);
fwrite($handle, "\n");
fwrite($handle,'Ano de Publicação :'. $_POST['ano']);
fwrite($handle, "\n");
fflush($handle);
fclose($handle);
?>
<div>
    <p>Cadastrado com sucesso! </p>
</div>
<a href="welcome.php" class="btn btn-danger"><h1>Sair</h1><</a>;
