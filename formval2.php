<?php
    $mail=$pass='';
    $err_email=$err_password=$err_checkbox='';
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["email"])){
            $err_email = '<div class="alert alert-danger" role="alert">
                                Email not founded!
                          </div>';
        }else{

            $mail = val($_POST["email"]);
        }
        if(empty($_POST["password"])){
            $err_password = '<div class="alert alert-danger" role="alert">
                                Password not founded!
                          </div>';
        }else{

            $pass = val($_POST["password"]);
        }
        if(empty($_POST["checkbox"])){
            $err_checkbox = '<div class="alert alert-danger" role="alert">
                                 checkbox not checked!
                          </div>';
        }else{

             val($_POST["checkbox"]);
        }
        
    }
    function val($sqr){
        $sqr = htmlspecialchars($sqr);
        $sqr = trim($sqr);
        $sqr = stripslashes($sqr);
        return $sqr;
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    



    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
                <div class="col-4">
                 <h2>FORM</h2>
                    <form class="mt-3" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <?php echo $err_email; ?>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" name="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            <?php echo $err_password; ?>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" name="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            <?php echo $err_checkbox; ?>
                        </div>
                        <input class="btn btn-primary" type="submit" name="submit">
                        
                    </form>
                </div>
            <div class="col-4"></div>
        </div>
    </div>


    <h1>User Data</h1>

    <?php
    
        echo 'User Email: ',$mail,'<br/>';
        echo 'User Password: ',$pass,'<br/>';
    
    ?>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>