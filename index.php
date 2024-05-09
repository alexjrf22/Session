<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        session_start();
        require_once('Session.php');

        //Session::set(index: 'name', value: 'Alexandre');
        //Session::set(index: 'id', value: '01');
        //Session::set(index: 'email', value: 'Alexjrf22@gmail.com');
        //Session::remove(index: '$index');
        //var_dump(Session::has(index: 'name'));
        //Session::flash(index: 'Erro', value: 'Usuário não existe!');
        var_dump(Session::get(index: 'name'));
        //Session::removeFlash();
        //Session::removeAll();
        //Session::dump();

       
    ?>
    
</body>
</html>