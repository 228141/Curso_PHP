<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de String</title>
</head>
<body>
    
    <h1>STRINGS em PHP</h1>

    <p>Para concatenar duas strings no PHP, o símbolo usado no na linguagem do PHP é o "ponto (.)" </p>
    <p>Nas aspas duplas existe a interpretação do conteúdo da string. </p>

    <?php 
    // "PHP\u{1F418}"; <!-- // deverá aparecer na tela o PHP com o simbolo do elefane. -->
    
    $nome = "Jailton";
    echo "Olá, $nome !";
    ?> 
    
    <p>Nas aspas simples não existe a interpretação do conteúdo da 
    string. </p>
    
    <?php
	const CANAL = " Minha família";
	echo "Eu Amo" . CANAL \u{1F499};



</body>
</html>