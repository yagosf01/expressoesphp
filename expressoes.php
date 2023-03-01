<?php
// mudança tipo implicita

 echo 5 / 2;
 echo "<br>";

 if(is_float(5/2)){
    echo " É float <br>";
 }

 echo 2 . 3;
 echo "<br>";
  
 if(is_string(2 . 3)){
    echo "É uma string <br>";
 }

 $nome = 'Yago';
 $sobrenome = 'Figuredo';

 $nomeCompleto = $nome . " " . $sobrenome;

 echo $nomeCompleto;
 echo "<br>";

 //exercicio 11 ( TESTES A EXPRESSÃO "5" * 12 E UTILIZE A FUNÇÃO GETTYPE() PARA CHECAR O TUPO DA RESULTANTE.)
 
$conta = "5" * 12;
echo $conta . "<br>";
echo gettype ($conta); 
echo "<br>" ;

//gettype() mostra qual o tipo da variavel

// Operadores aritimeticos

$multi = 5 * 5;
echo $multi;
echo "<br>";

$adicao = 5 + 5;
echo $adicao;
echo "<br>";

$sub = 5 - 5;
echo $sub;
echo "<br>";

$divisao = 5 / 5;
echo $divisao;
echo "<br>";

// Operador de modulo (resto)

echo 12 % 2;
echo " módulo <br>";
echo 12 / 2;
echo " divisao <br>";

echo 13 % 2;
echo " módulo <br>";
echo 13 / 5;
echo " divisao <br>";

// Exercicio 13 ( Teste o operador de resto em duas divisoes, uma nao resulta exata outra sim)

$a = 20;
$b = 2; 
$c = 3; 

echo $a % $b;
echo "<br>";

echo $a % $c;
echo "<br>";

// Exponenciação = (**)

echo 5 ** 2;
echo "<br>";

//ou

$a = 7;
$b = 4;

echo $a ** $b;
echo "<br>";
 
//Concatenação  . (ponto)

$nome = 'Yago';
$sobrenome = 'Figuredo';

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;
echo "<br>";

$a = "Testando";
$b = "Concatenação";

echo $a . " a " . $b;
echo "<br>";

$marca = "Audi"; 
$motor = "2.0 Turbo";
$vel_max = 299;

echo "O carro da ". $marca . "Tem uma motorização de ". $motor . " E uma velocidade maxima de ". $vel_max ." Km/h";
echo "<br>";

// Exercicio 14 ( Crie uma saudação, nome e sobrenome)

$nome = 'Yago';
$sobrenome = 'Figuredo';

echo "Bom dia Senhor(a) ". $nome . " " . $sobrenome . " Fique a vontade";

//ou 

$frase = "Bom dia Senhor(a) ". $nome . " " . $sobrenome . " Fique a vontade";

echo "<br>";
echo $frase;

// INCREMENTO

$f = 0;
$g = 0;

$f++;
$g = $g + 1;

echo "<br>";
echo "f: " . $f . "<br>";
echo "g: " . $g . "<br>";

// DECREMETNO

$n = 10;
$m = 10;

$n--;
$m = $m - 1;

echo "n: ". $n . "<br>";
echo "m: ". $m . "<br>";

// OPERADORES DE COMPARAÇÃO 

// IGUALDADE: ==

// IDENTICO A: ==== ( CONFERE O TIPO E VALOR)

//DIFERENÇA: !=

// NAO IDENTICO A: !== (DIFERNTE O NUMERO E O TIPO)

// MAIOR E MAIOR OU IGUAL A: > E >=

// MENOR E MENOR OU IGUAL A: < E <= 

$u = 2;
$v = 2;

if(3==3){
    echo "Comparação verdadeira <br>" ;
}

if($u == $v){
    echo "Comparação verdadeira <br>";
}

$nome = 'Yago';
$nomeDoSistema = 'Yago';

if($nome == $nomeDoSistema){
    echo "O nome coincide <br>";
}

if(10 != 5){
    echo "Falso <br>"; //exibe pois é falso
}

if(5==="5"){
    Echo "falso <br>";
}

if(5===5){
    echo "verdadeiro <br>";
}

if(5!=="5"){
    echo "falso <br>";
}

// OPERADORES LOGICOS
// AND: &&
// OR: ||
// NOT:  !

//EXERCICIO VERIFIQUE: 15>5 AND "JOAO" === "JOAO" / "TESTE" > 5 AND 1 / 2==3 AND 5>=3

if(15 > 5 && "João" === "João"){
    echo "Comparação 1 é Verdadeiro <br>";
}

if("teste" > 5 && 1){
    echo "Compração 2 é Verdadeiro <br>";
}

if(2==3 && 5 > 3){
    echo "Comparação 3 é Verdadeiro <br>";
}

// EXERCICIOS OR 

if(12 < 5 || "João" === "João"){
    echo "Comparação OR 1 é verdadeira <br>";
}

if(1 > 5 || 1){
    echo "Comparação OR 2 é verdadeira <br>";
}

if(20==="20" && 51 >= 31){
    echo "Comparação OR 3 é verdadeira <br>";
}

// OPERADOR CAST (CONVERSÃO)

$cast = (int) "12";
echo $cast ;
echo "<br>";
echo $cast + 10;
echo "<br>";

$castb = (float) "3.14432768";

if($castb === 3.14432768){
    echo "Mesmo tipo <br>";
}

// EXERCICIOS

$ex19 = (int) "testando";
echo $ex19;
echo "<br>"; // printou 0

$ex19a = (int) "12.9";
echo $ex19a;
echo "<br>";// printou 12

$ex19b = (int) "true";
echo $ex19b;
echo "<br>";// printou 0

$ex19c = (int) [1,2,3];
echo $ex19c;
echo "<br>";// printou 1

// OPERADOR DE ATRIBUIÇÃO 

// +=

$k = 0;
$k += 10; // $k = $k + 10
echo $k . "<br>";

// -=

$l = 0;
$l -= 10; // $l = $l - 10
echo $l . "<br>";;

// *=

$ç = 0;
$ç *= 10; // $ç = $ç * 10
echo $ç . "<br>";

// /=

$t = 0;
$t /= 10; // $t = $t / 10
echo $t . "<br>";

// %=

$z = 0;
$z %= 10; // $z = $z % 10
echo $z . "<br>";

// OPERADOR TERNÁRIO 

    echo 20 > 10 ? "TRUE <br>" : "FALSE <br>"; //true
    echo 20 > 50 ? "TRUE <br>" : "FALSE <br>"; //false

    $w = 10;
    $q = 5;

    echo $w >= $q ? "true <br>" : "false <br>"; //true

    $numero1 = 10;
    $numero2 = 20; 

    echo $numero1 > $numero2 ? "true <br>" : "false <br>"; //true
    echo $numero2 > $numero1 ? "true <br>" : "false <br>"; //false
