<?php
$razao_social = $_POST['razaosocial'];
$nome_fantasia = $_POST['nomefantasia'];
$cnpj = $_POST['cnpj'];
$ddd = $_POST['ddd'];
$telefone = $_POST['fone'];
$informacoes = $_POST['informacoes'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];

$rua= $_POST['rua'];
$num_local = $_POST['num_local'];
$complemento = $_POST['complemento'];


$email = $_POST['email'];
$senha = $_POST['senha'];

echo " cadastrando empresa ".$nome_fantasia ;

require_once("_con.php");

$connect = mysqli_connect($host,$user,$pass,$db);
if($connect)
{
    echo " conectou";
}
else{
    echo "nao abriu o banco";
}
//mysql_connect($host,$user,$pass) or die ("Banco de Dados Morreu");
//mysqli_select_db($connect,$db) or die ("Db não selecionada");

$comando =  "insert into empresa(razao_social,nome_fantasia,cnpj,ddd,

telefone, informacoes,rua,bairro,cep,num_local,complemento,estado,cidade,email,senha) 

values('".$razao_social."', '".$nome_fantasia."','".$cnpj."',
'".$ddd."',  '".$telefone."',
 '".$informacoes."','".$cep."','".$estado."',
 '".$cidade."','".$bairro."','".$rua."',
'".$num_local."','".$complemento."',
 '".$email."', '".$senha."')";

$resultado = mysqli_query ($connect, $comando);

//*echo $comando;

if($resultado){
echo " cadastrou com Sucesso " ;
}
else{
    echo " erro no cadastro";
}
?>