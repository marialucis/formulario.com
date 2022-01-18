<?php

/*Recebendo dados do form*/

/*campo nome*/ 
$nome = $_GET['nome'];
/*campo sobrenome */
$sobrenome = $_GET['sobrenome'];
/*campo email*/
$email = $_GET['email'];
/*campo de desenvilvimento web/aplicação*/
$devweb = $_GET['devweb'];
/*campo de Senioridade*/
$senioridade= $_GET['senioridade'];
/*campo das tecnologias*/
$tecnologia = $_GET['tecnologia']; 
/*campo caixa de texto*/
$experiencia = $_GET['experiencia'];
/*Exibindo os dados */

echo "Dados do formulario<br><br>";

echo "Nome completo: $nome $sobrenome <br>" ; 
echo "E-mail: $email <br>";


echo "Qual lado da aplicação você desenvolve: $devweb <br>";
echo "Senioridade: $senioridade <br>";
echo "Selecione as tecnologias que utiliza: <br>";

echo "Sua experiência: $experiencia <br>";
?> 