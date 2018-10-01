<html>
<head>
	<title>Cadastro de Empresas</title>
</head>
Cadastro:<br><br>
<form method=post action=cadastro.php>
Razão Social: <input type=text name="nome"><br><br>
Nome Fantasia: <input type=text name="empresa"><br><br>
CNPJ: <input type=text name="cnpj"><br><br>
Telefone/Celular: <input type=text name="fone"><br><br>
Informções: 
<br>
<textarea  name="informacoes" cols="40" rows="5" style="height: 100px" wrap="hard" ></textarea><br><br>




Rua: <input type=text name="rua"><br><br>
Bairro; <input type=text name="bairro"><br><br>
Cep: <input type=text name="cep"><br><br>
Número do Local: <input type=text name="num_local"><br><br>
Complemento: <input type=text name="complemento"><br><br>








Estado: <select name="estado" type="text">
            <option value="AC" selected>AC
            <option value="AL">AL
            <option value="AM">AM
            <option value="AP">AP
            <option value="BA">BA
            <option value="CE">CE
            <option value="DF">DF
            <option value="ES">ES
            <option value="GO">GO
            <option value="MA">MA
            <option value="MG">MG
            <option value="MS">MS
            <option value="MT">MT
            <option value="PA">PA
            <option value="PB">PB
            <option value="PE">PE
            <option value="PI">PI
            <option value="PR">PR
            <option value="RJ">RJ
            <option value="RN">RN
            <option value="RS">RS
            <option value="RO">RO
            <option value="RR">RR
            <option value="SC">SC
            <option value="SP">SP
            <option value="SE">SE
            <option value="TO">TO
          </select> 
		  <br><br>

Cidade: <input type=text name="cidade"><br><br>



E-mail: <input type=text name="email"><br><br>
Senha: <input type=text name="senha"><br><br>

<input type=submit value=Enviar> <input type=reset value=Limpar> 
</form>
</body>
</html>

