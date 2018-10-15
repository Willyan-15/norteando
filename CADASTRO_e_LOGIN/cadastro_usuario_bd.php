<?php


    $cpf_contratante = $_POST['cpf_contratante'];
    $nome_contratante = $_POST['nome_contratante'];
    $data_nascimento = $_POST['data_nascimento'];
    $ddd = $_POST['ddd'];
    $telefone_cont = $_POST['telefone_cont'];

$estado = $_POST['estado'];
$cidade= $_POST['cidade']; 
$rua= $_POST['rua'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$num_local = $_POST['num_local'];
$complemento = $_POST['complemento'];


$email_contratante = $_POST['email_contratante'];
$senha = $_POST['senha'];
$rg = $_POST['rg'];
$cod_empresa = $_POST['cod_empresa'];
  
    
    
    


echo "cadastrando contratante ".$nome_contratante ;

require_once("_con.php");

$connect = mysqli_connect($host,$user,$pass,$db);
if($connect)
{
    echo " conectou";
}
else{
    echo " nao abriu o banco";
}
//mysql_connect($host,$user,$pass) or die ("Banco de Dados Morreu");
//mysqli_select_db($connect,$db) or die ("Db não selecionada");


$comando = "insert into contratante(cpf_contratante,nome_contratante
,data_nascimento,ddd,telefone_cont,estado,cidade,rua,bairro,cep,
num_local,complemento,email_contratante,senha,rg,cod_empresa) 

values('".$cpf_contratante."', '".$nome_contratante."', ".$data_nascimento."
, ".$ddd.",'".$telefone_cont."','".$estado."','".$cidade."',
'".$rua."', '".$bairro."', '".$cep."',".$num_local.", '".$complemento."',
 '".$email_contratante."','".$senha."', '".$rg."','".$cod_empresa."')";


$resultado = mysqli_query ($connect, $comando);

if($resultado){
echo " cadastrou com Sucesso" ;
}
else{
    echo " erro no cadastro";
}
?>