body{
		margin:0;
		padding:0px;	
		background-color: #DCDCDC;
	}
	.topo{
		width:100%;
		height: 100px;
		background-color: #696969;	
	}
	/*.menu{
		width: 100%;
		background-color: #DCDCDC;	
		float: left;
	}		*/
	.conteudo{
		width: 70%;
		margin: 0 auto;	
		background-color: white;
		float: left;	
	}
	.rodape{ 
		width:100%; 
		height: 150px;
		background-color: #696969;	
		float: left;	
	}
	ul{
		
	}
	li{
		list-style: none;/*retira os marcadores*/
		width: 100px;
		height: 25px;
		padding-left: 5px;/*espaço da margem interna a esquerda*/
		padding-top: 5px;/*espaço da margem interna do topo*/
		border: 1px solid red;
		background-color: silver;
		font-size: 15px;
		float: left;/*flutuar a esquerda*/
		margin: 0;
}
<?php
   $nome = filter_input(INPUT_POST, "nome");
   $email = filter_input(INPUT_POST, "email");
   $descricao = filter_input(INPUT_POST, "descricao");
   $fone = filter_input(INPUT_POST, "fone");
   echo "Nome: " . $nome;
   echo "<br>E-mail " . $email;
   echo "<br>Descrição " . $descricao;
   echo "<br>Fone " . $fone;
?>