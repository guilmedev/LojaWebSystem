<?php include("cabecalho.php");?>
<?php include("banco-produto.php");?>
<?php 




    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    $categoria_id = $_POST['categoria_id'];
    $conexao = mysqli_connect('localhost', 'root', '', 'loja');

    //Campo select não selecionado não é enviado pelo form
    //É preciso checar se ele existe antes

    if(array_key_exists('usado', $_POST)){
        //String = false = string null
        $usado = "true";
    }else $usado = "false";       

if(inserteProduto($conexao , $nome , $preco , $descricao , $categoria_id , $usado)){ ?>

<p class="text-success"> Produto <?php echo $nome?>, <?php echo $preco?> com sucesso </p>

<?php }else { ?>

<p class="text-danger"> Produto <?php echo $nome?> não cadastrado </p>

<?php
 }
?>
   
<?php include ("rodape.php");?>