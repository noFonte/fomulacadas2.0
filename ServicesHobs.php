<?php


$content = file_get_contents("https://semprebem.paguemenos.com.br/posts/mente-e-comportamento/lista-de-hobbies",true);


print_r($content);
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