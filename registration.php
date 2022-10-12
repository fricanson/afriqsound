<?php

require_once('config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tickets</title>
    <link rel="stylesheet" href="./assets/fontawesome-5.0.8/css/fontawesome-all.css">
    <link rel="stylesheet" href="./assets/fontawesome-5.0.8/css/fontawesome.min.css">
    <link rel="stylesheet" href="./assets/css/afrosound.css?"> 
    <link rel="stylesheet" href="./assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>

<body>

<div>
    <?php
    if(isset($_POST['create'])){
        $firstname     = $_POST['firstname'];
        $lastname      = $_POST['lastname'];
        $email         = $_POST['email'];
        $phoneno       = $_POST['phoneno'];
        $event         = $_POST['event'];
        $paymentmethod = $_POST['payment'];
        $password      = $_POST['password'];

        $sql = "INSERT INTO users (firstname, lastname ,email ,phoneno ,event  ,payment ,password) VALUES(?,?,?,?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$firstname, $lastname ,$email ,$phoneno, $event ,$paymentmethod ,$password]);
        if($result){
            echo 'Succesfully saved.';
            }else{
                echo 'There were errors while saving the data';
                }

    }
    ?>

<div class="row">
    <div class="col-sn-3">
    <div>
        <form action="registration.php" method="post">
        <div class="container">

        <div class="row">
            <div class="col-sn-3">  
                <h1> tickets </h1>
                <hr class="mb-3">
                <p>fill up the form with correct values</p>
                <label for="first name"><b>first name</b></label>
                <input class="form-control" id="first name" type="text" name="firstname" required>

                <label for="last name"><b>last name</b></label>
                <input class="form-control" id="last name" type="text" name="lastname" required>

                <label for="email"><b>emailaddress</b></label>
                <input class="form-control" id="email address" type="text" name="email" required>

                <label for="phoneno"><b>phoneno</b></label>
                <input class="form-control" id="phone" type="text"  name="phoneno" required>

                <label for="event"><b>event</b></label>
                <input class="form-control" id="event" type="text" name="event" required>

                <label for="payment"><b>payment</b></label>
                <input class="form-control" id="payment" type="payment" name="payment" required>

                <label for="password"><b>password</b></label>
                <input class="form-control" id="password" type="password" name="password" required>
                <hr clas="mb-3">

                <input class="btn btn-primary" type="submit" id="register" name="create" value="sign up">
            </div>
        </div>
         <div>
        </div>
        </form>
    </div>
    <script src="./assets/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $(function (){

            var valid =this.form.checkValidity();
            if(valid){

            var firstname = $('firstname').val();
            var lastname = $('lasttname').val();
            var email = $('email').val();
            var phoneno = $('phoneno').val();
            var event = $('event').val();
            var payment = $('payment').val();
            var password = $('password').val();

                e.preventDefault();
                $.ajax({
                    type : 'POST',
                    url : 'process.php'
                    data : {firstname: firstname, lastname: lastname, email: email, phoneno: phoneno, event: event, payment: payment password: password }

                    success: function(data){
                        swal.fire({
                            'title' : 'Successful'
                            'text' : 'Successfully registered'
                            'type' : 'success'
                        })

                    },
                    error:function(data){
                        swal.fire({
                            'title' : 'Error'
                            'text' : 'There Were Errors while Saving The Data'
                            'type' : 'error'
                        })

                    }

            });

            alert('true');
            {
                else{
                    alert('false')
                }
            }

          
        });
        

</body>
</html>