<?php
$razao_social = $_POST['razaosocial'];
$nome_fantasia = $_POST['nomefantasia'];
$cnpj = $_POST['cnpj'];
$ddd = $_POST['ddd'];
$telefone = $_POST['fone'];
$informacoes = $_POST['informacoes'];

$rua= $_POST['rua'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$num_local = $_POST['num_local'];
$complemento = $_POST['complemento'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];

$email = $_POST['email'];
$senha = $_POST['senha'];

echo " cadastrando empresa ".$nome_fantasia ;

require_once("_con.php");

$connect = mysqli_connect($host,$user,$pass,$db);
if($connect)
{
    echo "conectou";
}
else{
    echo "nao abriu o banco";
}
//mysql_connect($host,$user,$pass) or die ("Banco de Dados Morreu");
//mysqli_select_db($connect,$db) or die ("Db não selecionada");

$resultado = mysqli_query ($connect, "insert into empresa(razao_social,nome_fantasia,cnpj,ddd,telefone, informacoes,rua,bairro,cep,num_local,complemento,estado,

cidade,email,senha) 
values('".$razao_social."', '.$nome_fantasia.','.$cnpj.','.$ddd.',  '.$telefone.', '.$informacoes.','.$rua.',

'.$bairro.','.$cep.','.$num_local.','.$complemento.','.$estado.'

,'.$cidade.', '.$email.', '.$senha.')");

if($resultado){
echo " cadastrou com Sucesso " ;
}
else{
    echo " erro no cadastro";
}
?>