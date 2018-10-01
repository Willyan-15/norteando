<?php
require_once("_con.php");

$connect = mysqli_connect($host,$user,$pass,$db);
if($connect)
{
    echo "conectou";
}
//mysql_connect($host,$user,$pass) or die ("Banco de Dados Morreu");
//mysqli_select_db($connect,$db) or die ("Db não selecionada");

mysqli_query ($connect, "CREATE TABLE empresa2 (
 cod_empresa int auto_increment,
razao_social varchar(150) not null,
nome_fantasia varchar(150) not null,  
cnpj char(18) not null,
telefone char(12) not null,
informacoes text,
rua varchar (250) not null,
bairro varchar (150) not null,
cep char (9) not null,
num_local int (5) not null,
complemento varchar (50),
cidade varchar (100) not null,
estado char (2) not null,
email varchar (255) not null,
senha varchar (20) not null,
imagem longblob,
primary key(cod_empresa)

)");

echo "Tabela Banco de Dados Criada com Sucesso" ;

?>
