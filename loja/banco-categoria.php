<?php 

function listaCategorias($conexao){
    //Array de categorias
    $categorias = array();
    //Executa a query e guarda o retorno
    $result = mysqli_query($conexao , "select * from categorias");
    //Traz a linha associada para cada resultado
    //faça isso enquanto houver linhas/resultados
    while($categoria = mysqli_fetch_assoc($result)){
    //Guarda as linhas na array categorias
    array_push($categorias , $categoria);

    }

    //retorna a array com os dados
    return $categorias;
    
}







?>