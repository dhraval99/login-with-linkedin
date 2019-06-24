<?php

    require('linked_in_config.php');
    $code = $_GET['code'];
    $apiTokenPostData = [
        'grant_type' => 'authorization_code',
        'code' => $code,
        'redirect_uri' => $redirectUri,
        'client_id' => $clientId,
        'client_secret' => $clientSecret,
    ];

    $accessToekenRespJson = apiAccessToken('https://www.linkedin.com/oauth/v2/accessToken',$apiTokenPostData);
    
    $accessToekenRespArray = json_decode($accessToekenRespJson, true);
    
    $accessToken =  $accessToekenRespArray['access_token'];


    $profileJson = apiProfile('https://api.linkedin.com/v2/me',$accessToken);

    $profileArray = json_decode($profileJson, true);     

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>        
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container text-center" style="height:100vh;">
        <div class="row h-100">
            <div class="col-sm-12 my-auto">
                
                <h3 class="text-secondary">User ID : <?php echo $profileArray['id'] ?> </h3>
                <h4 class="text-secondary">First Name : <?php echo $profileArray['localizedFirstName'] ?> </h4>
                <h4 class="text-secondary">Last Name : <?php echo $profileArray['localizedLastName'] ?> </h4>
                
            </div>
        </div>        
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>