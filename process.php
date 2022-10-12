<?php
require_once('config.php')
?>

<?php
    if(isset($_POST['create'])){
        $firstname     = $_POST['firstname'];
        $lastname      = $_POST['lastname'];
        $email         = $_POST['email'];
        $phoneno       = $_POST['phoneno'];
        $event         = $_POST['event'];
        $paymentmethod = $_POST['payment'];
        $password      = shal($_POST['password']);

        $sql = "INSERT INTO users (first name, last name ,email ,phone no ,event  ,payment ,password) VALUES(?,?,?,?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$firstname, $lastname ,$email ,$phoneno, $event ,$paymentmethod ,$password]);
        if($result){
            echo 'Succesfully saved.';
            }else{
                echo 'There were errors while saving the data';
                }

    }else{
        echo 'no data';
    }
  