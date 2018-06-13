<?php 
include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");
include("banco-produto.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao , $id);

$categorias = listaCategorias($conexao);


$isChecked = $produto['usado'] ? "checked = 'checked'" : "";

?>

<div class="container">
<h1>Alterar produto</h1>
</div>

<form action="altera-produto.php" method="post">
<input type="hidden" name="id" value="<?=$produto['id']?>">
    <table class="table">
        <tr>
            <td>Nome:</td>
            <td><input class="form-control" type="text" name="nome" placeholder= "nome" value="<?=$produto['nome']?>"></td>
        </tr>    
        <tr>
            <td>Preço: </td>
            <td> <input class="form-control" type="number" name="preco" placeholder= "preço" value="<?=$produto['preco']?>"></td>
        </tr>
        <tr>
        <tr>
            <td>Descrição: </td>
            <td> 
                <textarea class="form-control" name="descricao" cols="30" rows="5"><?=$produto['descricao']?></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="checkbox" name="usado" value="true" <?=$isChecked?>>Usado
            </td>
        </tr>
        <tr>
            <td>Categoria: </td>
            
            <td> 
            <select name="categoria_id" class="form-control">
            
                <?php foreach($categorias as $categoria){   
                    
                    $isCategoria = $produto['categoria_id'] == $categoria['id'];

                    $selecao= $isCategoria ? "selected='selected'" : "";
                    ?>                        

                        <option value="<?=$categoria['id'];?>" <?=$selecao?>>                        
                            <?=$categoria['nome'];?>
                        </option>                                           
                <?php
                    }

                ?>
                </select>
              
            </td>
        </tr>
        <tr>
            <td>
                <input class="btn btn-primary" type="submit" value="Alterar">
            </td>
        </tr>    
    </table>
</form>
<?php include ("rodape.php");?>