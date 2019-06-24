<?php 

    require('linked_in_config.php');
    $state = md5(rand());
    $authUrl = "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id=$clientId&redirect_uri=$redirectUri&scope=r_liteprofile%20r_emailaddress%20w_member_social&state=$state";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Html Design</title>
    <meta name="description" content="Demo of the Login with linkedIn Version 2.0 in PHP"/>
    <meta name="keywords" content="login with linkedin, new api, version 2.0, php">    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center" style="height:100vh;">
        <div class="row h-100">
            <div class="col-sm-12 my-auto">
                <a href="<?php echo $authUrl; ?>" class="btn btn-lg btn-primary mb-5">Login With linkedIn</a>                
            </div>
        </div>        
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>