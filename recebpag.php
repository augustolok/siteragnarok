<?php
$user = 'usuario do bd';
$pass='senha';
$host= "ip";
$dbname = "nome DB";
if(isset($_POST['notificationType']) && $_POST['notificationType'] == 'transaction'){
    //Todo resto do código iremos inserir aqui.

    $email = 'augustoperez696@live.com';
    $token = '1743bed8-f95a-44f3-81d2-078397c5a76833a85f704353903145188d82fd8681035657-6287-4a1a-b4c1-891d1694d413';

    //$url = 'https://ws.pagseguro.uol.com.br/v2/transactions/notifications/' . $_POST['notificationCode'] . '?email=' . $email . '&token=' . $token;
    //Caso use sandbox descontente a linha abaixo.
    //$url = 'https://ws.pagseguro.uol.com.br/v2/transactions/notifications/';
    $url = 'https://ws.pagseguro.uol.com.br/v2/transactions/notifications/' . $_POST['notificationCode'] . '?email=' . $email . '&token=' . $token;

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $transaction= curl_exec($curl);
    curl_close($curl);

    if($transaction == 'Unauthorized'){
        //Insira seu código avisando que o sistema está com problemas, sugiro enviar um e-mail avisando para alguém fazer a manutenção

        exit;//Mantenha essa linha
    }
    $transaction = simplexml_load_string($transaction);
    var_dump($transaction->status);
    if ($transaction->status == 3) {
        try {
            $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
         
          }
          catch(PDOException $e) {
              echo "I'm sorry, Dave. I'm afraid I can't do that.";
              file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
          }
        $sql= "select * from login where userid=:nome";
        //$sql = "insert into venas (data,valor,nome,chave) VALUES (Now(),:valor,:nome,:chave)";
        $stmt = $DBH->prepare($sql);
        $nome = $transaction->reference;
        $valor = $transaction->grossAmount;
        $stmt->bindParam (':nome', $nome);
            if($stmt->execute()){
               $resutlado = $stmt->fetchAll();
               $valor1=$valor;
               $valor = $valor*100;
               $valorfinal =$valor+$resutlado[0]['cash'];
               $sql = "update login set cash=:valorfinal where userid =:account_id";
               $stmt = $DBH->prepare($sql);
               $stmt->bindParam (':valorfinal', $valorfinal);
               $stmt->bindParam (':account_id', $nome);
               $stmt->execute();
               $sql = "insert into vendas (data,valor,nome,chave,estatus) VALUES (Now(),:valor,:nome,:chave,1)";
               $stmt = $DBH->prepare($sql);
               $codigo = $transaction->code;
               $stmt->bindParam (':nome', $nome);
               $stmt->bindParam (':chave', $codigo);
               $stmt->bindParam (':valor', $valor1);
                $stmt->execute();
            }

        //$stmt->bindParam (':nome',$_POST['id']);
        //$stmt->bindParam (':chave',$chave);
        //;;$transaction->reference;
       
    }
}


