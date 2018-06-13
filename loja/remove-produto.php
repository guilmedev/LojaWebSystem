<?php include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");
?>

<?php
    //Pega o id
    $id = $_POST['id'];
    //remove
    removeProduto($conexao , $id);
    //Só redireciona
    header("Location: produto-lista.php?removido=true");
    die();
?>



<?php include ("rodape.php");?>