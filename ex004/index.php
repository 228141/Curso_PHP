<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e constantes</title>
</head>
<body>
    <H1>Variáveis e constantes</H1>

    <p>O que são variáveis e constantes?</p>
    
    <p>Variáveis: </p>
    <p>As variáveis recebe o $ e o nome da variável</p>
    <p>Declaração de varíável</p>
    //$nome = "Jailton";
    //$sobrenome = "Pereira";
    //
    //
    
    <p>Exemplo:</p>
    <?php 
    $nome = "Jailton";
    $sobrenome = "Pereira";

    echo "Muito Prazer, $nome $sobrenome!";
    ?>
    <p>Constantes:</p>
    <p>constantes não mudam, elas ficam fixas no sistema</p>


    <p>REGRAS para nomes identificadores:</p>
    <p>1. Variáveis sempre começam com o "Símbolo - $"</p>
    <p>2. O segundo pode ser "letra" ou "símbolo de "_"</p>
    <p>3. Aceita caracteres [a-z], [A-Z],[0-9] e [_]</p>
    <p>4. Aceita caracteres da tabela ASCII a partir de 128 </p>
    <p>5. Aceita caracteres acenturados como á, õ, ç </p>
    <p>6. A liguagem é "case sensitive" em relação aos nomes </p>
    <p>7. Nomes especiais como $this não podem ser usados </p>
    
    <p>Exemplo, com variável errada
    
    $nome = "Jailton";
    
    echo "É verdade que seu nome é $NOME ?";
        
    Exemplo, com variável corrigida
    
    $nome = "Jailton";
    
    echo "É verdade que seu nome é $NOME ?";

    </p>

    <p>RECOMENDAÇÕES para dar nomes:</p>
    <p>1. Tente da nomes "claros" e de "fácil" identificação;</p>
    <p>2. Evite nomes muito **curtos** ou muito **longos**;</p>
    <p>3. Defina um padrão de nomeaçãoe siga em todo o projeto;</p>
    <p>4. Para "variáveis", dê preferência a letras "minusculas";</p>
    <p>5. Para "constantes", dê preferência a letras "MAIUSCULAS"; </p>
    <p>6. Use "camelCase" para médotos e atributos; </p>
    <p>7. Use "SNAKE_CASE" para nomear entre as palavras use o "_";</p>
    <p>8. Não se pode dar espaço entre as palavras da variável</p>
    
</body>
</html>