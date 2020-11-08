<?php
$user = 'user do bd';
$pass='senha';
$host= "ip";
$dbname = "nome do banco";
if ($_POST['qtdinformado']<1) {
    $valor = 1;
}
else {
    $valor = $_POST['qtdinformado'];
}
# connect to the database
try {
    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
 
  }
  catch(PDOException $e) {
      echo "I'm sorry, Dave. I'm afraid I can't do that.";
      file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
  }
  $numbers = range(1, 9000);


$data['token'] ='1743bed8-f95a-44f3-81d2-078397c5a76833a85f704353903145188d82fd8681035657-6287-4a1a-b4c1-891d1694d413';
//$data['token'] ='ABF25EB412A0402AB34E34DDBC59E2C8';
$data['email'] = 'augustoperez696@live.com';
$data['currency'] = 'BRL';
$data['itemId1'] = '1';
if ($_POST['qtdinformado']<1) {
    $valor = 1;
}
else {
    $valor = $_POST['qtdinformado'];
}
$data['itemQuantity1'] = $valor;
$data['itemDescription1'] = 'login '.$_POST['id'].' esse dinheiro sera convertido em cash um modeo do virtual do jogo ragnarok.';
$data['itemAmount1'] = '1.00';
$data['reference'] = $_POST['id'];
$url = 'https://ws.pagseguro.uol.com.br/v2/checkout/';
//$url = 'https://ws.sandbox.pagseguro.uol.com.br/v2/checkout/';

$data = http_build_query($data);

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
$xml= curl_exec($curl);

curl_close($curl);
$xml= simplexml_load_string($xml);
echo $xml -> code;
if($xml == 'Unauthorized'){
    $return = 'Não Autorizado';
    echo $return;
    exit;
    }
    $chave = $xml -> code;
    $sql = "insert into vendas (data,valor,nome,chave) VALUES (Now(),:valor,:nome,:chave)";
$stmt = $DBH->prepare($sql);
$stmt->bindParam (':valor',$valor);
$stmt->bindParam (':nome',$_POST['id']);
$stmt->bindParam (':chave',$chave);
$resultado = $stmt->execute($connct);
if($stmt->execute()){
}
?>