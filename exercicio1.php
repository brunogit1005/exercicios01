<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title>Exercicio 2</title>
    </head>
    <body>
    <?php

	include("cabecalho.php");

    echo"<form action=\"exibe1.php\" method=\"POST\">
    
        <p><label>Nome:</label>
                <input type=\"text\" name=\"nome\" size=\"30\" required/>
            </p>
        <p><label>Email:</label>
                <input type=\"email\" name=\"email\"/>
            </p>
		<p><label>CPF:</label>
                <input type=\"cpf\" name=\"cpf\"/>
            </p>
        <p><label>Sexo:</label>
                <input type=\"radio\" name=\"sexo\" value=\"Masculino\">Masculino
                <input type=\"radio\" name=\"sexo\" value=\"Feminino\">Feminino<br>
        </p>
        <p><label>Data Nasc:</label>
                <input type=\"date\" name=\"data_nasc\"<br>
        </p>
		
        <input type=\"submit\" value=\"Enviar\"/>
		</form>
		";
            
        ?>
	</body>
</html>