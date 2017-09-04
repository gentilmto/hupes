<?php  
//$ch = curl_init();
///$timeout = 0;
//curl_setopt($ch, CURLOPT_URL, 'http://hupes/resources/views/atc.html');
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
//$conteudo = curl_exec ($ch);
//curl_close($ch);
//echo $conteudo;

$url = file_get_contents('http://localhost/hupes/resources/views/atc.html');
//preg_match_all('/\b[\D]\d\d\D\D\d\d \D{15}/', $url, $conteudo,PREG_SET_ORDER);
preg_match_all('/\b[a-zA-Z]\d\d\D\D\D\D\ \D *\D*\</', $url, $conteudo,PREG_SET_ORDER);
//$exibir = $conteudo[0][0];
//$retirar = array('mais moedas','atas Copom','mais detalhes','ORES-->','<!--');
//$exibir = str_replace($retirar, '', $exibir);
//echo $exibir;

foreach ($conteudo as $val) {
    echo "atc:" . $val[0] . "\n"."<br>";

   }



?>
