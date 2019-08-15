<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        
    </head>
    <body>
		<?php
		include("classePessoa.php");
		include("cabecalho.php");
		
		/*$p->nome = $_POST["nome"];
		$p->email = $_POST["email"];
		$p->cpf = $_POST["cpf"];
		$p->sexo = $_POST["sexo"];
		$p->data_nasc = $_POST["data_nasc"];
		*/
		$n = $_POST["nome"];
		$e = $_POST["email"];
		$c = $_POST["cpf"];
		$s = $_POST["sexo"];
		$d = $_POST["data_nasc"];
		$p = new Pessoa($n, $e, $c, $s, $d);
		$p->mostrar_dados();
		
		//session_start();
		
		//$_SESSION["pessoa"][]=$p;
		
		//echo"Pessoa Cadastrada com sucesso";
		
		
		?>
	</body>
  </html>