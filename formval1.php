<?php
    $err_name=$err_password=$err_email='';

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if (empty($_POST["name"])){
            $err_name = " empty name";
        }else{
            echo val($_POST["name"]),'<br>';
        }
        if (empty($_POST["email"])){
            $err_email = " empty email";
        }else{
            echo val($_POST["email"]),'<br>';
        }
        if (empty($_POST["email"])){
            $err_password = " empty password";
        }else{
            echo val($_POST["password"]),'<br>';
        }
        echo val($_POST["comment"]);
    }

    function val($seqr){
        $seqr = htmlspecialchars($seqr);
        $seqr = trim($seqr);
        $seqr = stripslashes($seqr);
        return $seqr;
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
    <style>
        span {
                color: red;
                display:block;
            }
    </style>
</head>
<body>



    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
    
        <input type="text" placeholder="Your Name" name="name"><span><?php echo $err_name; ?></span>
        <br><br>
        <input type="email" placeholder="Your email" name="email"><span><?php echo $err_email; ?></span><br><br> 
        <input type="password" placeholder="Your Password" name="password"><span><?php echo $err_password; ?></span><br><br>
        <textarea name="comment" placeholder="Comment" cols="30" rows="10"></textarea><br><br>   
        <input type="submit" name="submit">

    </form>


    
</body>
</html>