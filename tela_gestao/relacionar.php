<?php
    include("conexao.php");
    
    $nome=$_POST["nome"];
    $email=$_POST["email"];
    $coment=$_POST["coment"];
    
    $sql = "INSERT INTO reg_email (nome, email, comentario) VALUES ('$nome', '$email', '$coment')";
    if (mysqli_query($conexao, $sql))   
    { 
        header("Location: site_nort.html#contact1");
    }
    else
    {
        echo  " Erro: ".$sql." <br> ".mysqli_error($conexao);
    }
