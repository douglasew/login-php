<?php

    $name = 'Douglas';

    $emailConta = $_POST['email'];
    $senhaConta = $_POST['senha'];

    /*
    echo "Email: $emailConta";
    echo "<br>";
    echo "Senho: $senhaConta";
    
    echo "<br>";
    */

    if ($emailConta === 'douglasewerton9@gmail.com' && $senhaConta === '1913961324'){
        echo "<h1>Bem-vindo ao sistema $name </h1>";
    }
    else{
        header('location: index.php?erro=1');
    }
?>



