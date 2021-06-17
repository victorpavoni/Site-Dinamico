<?php 
    include '../config.php';
    $data = [];
    $assunto = "Novo email cadastrado no site!";
    $corpo = '';
    foreach ($_POST as $key => $value) {
        $corpo.=ucfirst($key).": ".$value;
        $corpo.="<hr>";
    }
    $info = array("assunto"=>$assunto,"corpo"=>$corpo);
    $mail = new Email('smtp.gmail.com','******@gmail.com','****','Victor');
    $mail->addAdress('rainbowsixxfzk@gmail.com','Victor');
    $mail->formatarEmail($info);
    if($mail->enviarEmail()) {
        $data['sucesso'] = true;
    } else {
        $data['erro'] = true;
    }
    die(json_encode($data));
?>
