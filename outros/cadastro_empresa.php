

<!------ Include the above in your HEAD tag ---------->

<!Doctype html>
<html>
<head>
     <meta charset="UTF-8">
     <title>Registration Form</title>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css3.css">
</head>


<form method=post action=cadastro.php>

<body>
 <div class="container">
 <!---heading---->
     <header class="heading"> Registro de Empresa</header><hr></hr>
	<!---Form starting----> 
	<div class="row ">
	 <!--- For Name---->
         <div class="col-sm-12">
             <div class="row">
			     <div class="col-xs-4">
          	         <label class="telefone">Razão Social :</label> </div>
		         <div class="col-xs-8">
		             <input type="text" name="razaosocial" id="razaosocial" placeholder="Digite a Razão Social da Empresa" class="form-control ">
             </div>
		      </div>
		 </div>
		 
		 
         <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
                     <label class="telefone">Nome Fantasia :</label></div>
				<div class ="col-xs-8">	 
		             <input type="text" name="nomefantasia" id="nomefantasia" placeholder="Digite o Nome Fantasia da Empresa" class="form-control last">
                </div>
		     </div>
		 </div>

		 <div class="col-sm-12">
			<div class="row">
				<div class="col-xs-4">
					<label class="telefone">CNPJ :</label></div>
			   <div class ="col-xs-8">	 
					<input type="text" name="cnpj" id="" placeholder="Digite o CNPJ da Empresa" class="form-control last">
			   </div>
			</div>
        </div>




        <!-----For email---->
		 <div class="col-sm-12">
			<div class="row">
				<div class="col-xs-4">
					<label class="telefone" >DDD :</label></div>
				<div class="col-xs-8"	>	 
					 <input type="telefone" name="ddd"  id="telefone"placeholder="Digite o DDD" class="form-control" >
				</div>
			</div>
		</div>
        




		 
		 <!-----For email---->
		 <div class="col-sm-12">
			<div class="row">
				<div class="col-xs-4">
					<label class="telefone" >Telefone :</label></div>
				<div class="col-xs-8"	>	 
					 <input type="telefone" name="fone"  id="telefone"placeholder="Digite o Telefone" class="form-control" >
				</div>
			</div>
        </div>

         
        



 	<!-----For email---->
 	<div class="col-sm-12">
		<div class="row">
			<div class="col-xs-4">
				<label class="telefone" >Informações :</label></div>
			<div class="col-xs-8"	>	 
				 <input type="telefone" name="informacoes"  id="telefone"placeholder="Digite informações de sua empresa" class="form-control" cols="40" rows="5" style="height: 100px" wrap="hard" >
			</div>
		</div>
    </div>
    



     <!-----For email---->
		 <div class="col-sm-12">
			<div class="row">
				<div class="col-xs-4">
					<label class="telefone" >Rua :</label></div>
				<div class="col-xs-8"	>	 
					 <input type="rua" name="rua"  id="rua"placeholder="Digite a Rua" class="form-control" >
				</div>
			</div>
        </div>


        <!-----For email---->
		 <div class="col-sm-12">
			<div class="row">
				<div class="col-xs-4">
					<label class="telefone" >Bairro :</label></div>
				<div class="col-xs-8"	>	 
					 <input type="bairro" name="bairro"  id="bairro"placeholder="Digite o Bairro" class="form-control" >
				</div>
			</div>
		</div>
        





		 <!-----For email---->
		 <div class="col-sm-12">
			<div class="row">
				<div class="col-xs-4">
					<label class="telefone" >CEP :</label></div>
				<div class="col-xs-8"	>	 
					 <input type="cep" name="cep"  id="cep"placeholder="Digite o CEP" class="form-control" >
				</div>
			</div>
		</div>
		
		 
		 
		
		 <!-----For email---->
		 <div class="col-sm-12">
			<div class="row">
				<div class="col-xs-4">
					<label class="telefone" >Número do Local :</label></div>
				<div class="col-xs-8"	>	 
					 <input type="numero" name="num_local"  id="numero"placeholder="Digite o Número" class="form-control" >
				</div>
			</div>
		</div>
		 <!-----For email---->
		 <div class="col-sm-12">
			<div class="row">
				<div class="col-xs-4">
					<label class="telefone" >Complemento :</label></div>
				<div class="col-xs-8"	>	 
					 <input type="complemento" name="complemento"  id="complemento"placeholder="Digite o Complemento se tiver" class="form-control" >
				</div>
			</div>
        </div>


		<!-----For email---->
		<div class="col-sm-12">
			<div class="row">
				<div class="col-xs-4">
					<label class="telefone" >Estado :</label></div>
				<div class="col-xs-8"	>	 
				<select name="estado" type="text" class="form-control">
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
				</div>
			</div>
        </div>



        <!-----For email---->
		 <div class="col-sm-12">
			<div class="row">
				<div class="col-xs-4">
					<label class="telefone" >Cidade :</label></div>
				<div class="col-xs-8"	>	 
					 <input type="cidade" name="cidade"  id="cidade"placeholder="Digite o nome da Cidade" class="form-control" >
				</div>
			</div>
		</div>




		 <!-----For email---->
		 <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
		             <label class="telefone" >Email :</label></div>
			     <div class="col-xs-8"	>	 
			          <input type="email" name="email"  id="email"placeholder="Digite o email" class="form-control" >
		         </div>
		     </div>
		 </div>
		
		<!-----For Password and confirm password---->
		<div class="col-sm-12">
			<div class="row">
				<div class="col-xs-4">
					  <label class="telefone">Senha :</label></div>
			 <div class="col-xs-8">
					<input type="senha" name="senha" id="senha" placeholder="Digite sua senha" class="form-control">
			</div>
	 </div>
	 </div>


		  
   
		  	
			 
	 
	 

		 </div>
	 </div>	 
		 		 
		 
</div>


<input type=submit value=Enviar> <input type=reset value=Limpar> 
</form>
</form>

</body>		
</html>