<h1>TIPOS PRIMITIVOS</h1>

<h2>AULA 5<h2>

<h3>CATEGORIS DOS TIPOS PRIMITIVOS</h3>

<p>Existem sempre em qualquer curso, os tipos primitivos</p>
<p>Exstem 3 categoria de tipos primitivos.</p>
<p>1. Escalares;</p>
<p>2. Compostos;</p>
<p>3. Especiais.</p>

<h4>TIPOS PRIMITIVOS ESCALARES</h4>

$sobrenome = "Pereira" 
$idade = 42
$peso = 72,5
$casado = true

<p>A variável "$sobrenome", é uma variável do tipo "string", caracterizado com a sequência de letras, números e símbolos, sempre representadas entre aspas, e existe no PHP a diferença entre as aspas duplas e aspas simples </p>

<p> A variavel "$idade",  é uma variável do tipo "int ou integer", é uma variável de valor númerico inteiro, aquele que vem sem a parte decimal.</p>

<p> A variavel "$peso",  é uma variável do tipo "flout, doble ou real"(sendo que o tipo "real", deixou de ser usado no php após a versão 7), é uma variável de valor númerico Real, quevem com a parte de casas decimais, aquele que vem depois do ponto flutuane após o número inteiro.</p>

<p> A variavel "$casado", é uma variável do tipo "bool ou boooleano", é uma variável que aceita apenas os valores de "Verdadeiros ou Falso" (true or false).</p>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h4>Testes de tipos primitivos</h4>
    <?php 
    // //números que iniciam com "0x = hexadecimal 0b = binário 0 = Octal"
    // $num = 0x1A;
    // echo "O valor da variável é $num ";       
    
    // $num = (integer) 3e2; // 3x10(2) coersão
    // echo "O valor é $num"; 
    // var_dump($num);

    // $v = "Gustavo";
    // var_dump($v);

    // $num = (float) "950";
    // var_dump($num);

    // $casado = true;
    // //var_dump($casado);
    // print "O valor para casado é $casado";

    // $vet = [6, 2.5, "Maria", 3, false];
    // var_dump($vet);

    class Pessoa {
        private string $nome;
    }

    $p = new Pessoa;
    var_dump($p);
    ?>

    <h4>TIPOS PRIMITIVOS COMPOSTOS</h4>

    <h3>ARRAY</h3>
    <p></p>

    <h3>OBJECT</h3>
    <p></p>

    <h4>TIPOS PRIMITIVOS ESPECIAIS</h4>

    <h3>NULL</h3>
    <P></P>

    <h3>RESOURCE</h3>
    <P></P>

    <h3>CALLABE</h3>
    <p></p>

    <h3>MIXED</h3>
    <p></p>

</body>
</html>