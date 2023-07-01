<?php



// Lê um arquivo em um array.  Nesse exemplo nós obteremos o código fonte de
// uma URL via HTTP
$lines = file ('https://www.maioresemelhores.com/hobbies-para-curtir-tempo-livre/');

// Percorre o array, mostrando o fonte HTML com numeração de linhas.
foreach ($lines as $line_num => $line) {
  //  echo "Linha #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br>\n";
    echo  " " . ($line) . "<br>\n";
}

// Outro exemplo, onde obtemos a página web inteira como uma string. Veja também file_get_contents().
//$html = implode ('', file ('https://www.maioresemelhores.com/hobbies-para-curtir-tempo-livre/'));

// Usando o parâmetro de flags opcionais disponíveis desde o PHP 5
//$trimmed = file('somefile.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);









//$content = file_get_contents("https://semprebem.paguemenos.com.br/posts/mente-e-comportamento/lista-de-hobbies",true);


//print_r($content);
/*

$re = '/(<h3>.+\s<\/h3>)/m';
$str =htmlentities("https://semprebem.paguemenos.com.br/posts/mente-e-comportamento/lista-de-hobbies");
 

 print_r($str );

 

preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);

// Print the entire match result
//var_dump(str_replace(["<h3>","</h3>","\n"],"",trim($matches[1][0])));

//var_dump($matches);

*/



?>