<?php
$characters='1234567890QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm%&/()';
$password='';
if(isset($_GET['lenght'])){
    for($i=0;$i<$_GET['lenght'];$i++){
        $randomIndex=rand(0,strlen($characters)-1);
        $password.=$characters[$randomIndex];
    }
    var_dump($password);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong password generator</title>
</head>
<body>
    <form action=""method='GET'>
        <label for="lunghezza-password"></label>
        <input type="number" name="lenght" placeholder="inserisci password"
        min='8' max='32' value="<?php echo (isset($_GET['lenght']))?$_GET['lenght']:8?>">
        <button type="submit">Genera</button>
    </form>
</body>
</html>