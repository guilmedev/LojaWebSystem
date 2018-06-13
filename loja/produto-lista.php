<?php include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");?>

<?php 
    if(array_key_exists("removido", $_GET) && $_GET["removido"]=="true"){
?>    
    <p class="alert-success"> Produto removido com sucesso </p>
<?php    
    }
?>
<table class="table table-striped table-bordered">
    <?php
        $produtos = listaProdutos($conexao);
        foreach($produtos as $produto){
    ?>    

<tr>
    <td> <?= $produto['nome'] ?></td>
    <td> <?= $produto['preco'] ?></td>
    <td> <?= substr($produto['descricao'],0,39) ?></td>
    <td> <?= $produto['categoria_nome'] ?></td>
    <td>
        <a class="btn btn-primary" href="produto-altera-form.php?id=<?=$produto['id']?>">
        Alterar
        </a>
    </td>
    <td> 
        <form action="remove-produto.php" method="post">       
            <input type="hidden" name="id" value="<?=$produto['id']?>">
            <button class="btn btn-danger">X</button>
        </form>   
    </td>
</tr>   

    <?php    
        }
    ?>

</table>


<?php include ("rodape.php");?>