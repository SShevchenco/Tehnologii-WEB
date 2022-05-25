<?php 
session_start();
$_SESSION['errors'] = true;

if (count($_POST)){

    $jsonImport = file_get_contents("../DATABASE/datbase.json");
    $importedList = json_decode($jsonImport);

    $uemail = isset($_POST['email']) ? $_POST['email'] : '';
    $upassword = isset($_POST['psw']) ? $_POST['psw'] : '';

    foreach($importedList as $value){
        if($value->Email == $uemail){
            $_SESSION['errors'] = true;
            $_SESSION['errorMessage'] = "Utilizator existent";
            echo "<script>document.location = '../REGOSTER.php';</script>";
            return;
        }
    }

    $importedList[] = ['Email' => $uemail, 'Passwoed' => $upassword];
    $jsonImport = json_encode($importedList);
    file_put_contents('../DATABASE/datbase.json', $jsonImport);
    $_SESSION['errors'] = false;

    echo "<script>
        alert('Inregistrat cu suscex, logheazate');
        document.location = '../LOGIN.php';
        </script>";
}
?>
