<?php     
    
    $grantType = "grant_type";
    $redirectUri = "http://localhost/dh/login/linkedIn/profile.php"; //user will be redirected to this url after login
    $clientId = '*******'; //Your client key or ID
    $clientSecret = '******'; //Your client secret key

    function apiAccessToken($url,$param){          
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($param));
        $result = curl_exec($ch);   
        return $result;
    }

    function apiProfile($url,$ACCESSTOKEN){              
        $header[] = 'Authorization: Bearer '.$ACCESSTOKEN;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);        
        $result = curl_exec($ch);  
        
        if ($result === false)
            {            
                print_r('Curl error: ' . curl_error($ch));
            }

        curl_close($ch);        
        return $result;
    }
?>