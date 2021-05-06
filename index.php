<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input {
            border: 1px solid white;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <label>
        Inventment Amount :
        <input type="text" name="amount">
    </label><br/>
    <label>
        Yearly Interest Rate :
        <input type="text" name="interest">
    </label><br/>
    <label>
        Number of Years:
        <input type="text" name="year">
    </label><br/>
    <input type="submit" value="submit">
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $amount = $_POST['amount'];
    $interest = $_POST['interest'];
    $year = $_POST['year'];

    $value = $amount;

    for ($i = 0 ; $i < $year ; $i++){
        $amount = $amount + ( $amount * ($interest / 100));
    }
    echo 'gia tri tuong lai cua '.$value.' sau '.$year.' nam la :'.$amount;
}
?>