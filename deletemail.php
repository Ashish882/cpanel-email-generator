<?php

function login($url,$data){
    $fp = fopen("cookie.txt", "w");
    fclose($fp);
    $login = curl_init();
    curl_setopt($login, CURLOPT_COOKIEJAR, "cookie.txt");
    curl_setopt($login, CURLOPT_COOKIEFILE, "cookie.txt");
    curl_setopt($login, CURLOPT_TIMEOUT, 40000);
    curl_setopt($login, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($login, CURLOPT_URL, $url);
    curl_setopt($login, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($login, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($login, CURLOPT_POST, TRUE);
    curl_setopt($login, CURLOPT_POSTFIELDS, $data);
    ob_start();
    return curl_exec ($login);
    ob_end_clean();
    curl_close ($login);
    unset($login);    
}                  
 
 
function post_data($site,$data){
    $datapost = curl_init();
        $headers = array("Expect:");
    curl_setopt($datapost, CURLOPT_URL, $site);
        curl_setopt($datapost, CURLOPT_TIMEOUT, 40000);
    curl_setopt($datapost, CURLOPT_HEADER, 0);
        curl_setopt($datapost, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($datapost, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($datapost, CURLOPT_POST, TRUE);
    curl_setopt($datapost, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($datapost, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($datapost, CURLOPT_POSTFIELDS, $data);
        curl_setopt($datapost, CURLOPT_COOKIEFILE, "cookie.txt");
    ob_start();
    return curl_exec ($datapost);
    ob_end_clean();
    curl_close ($datapost);
    unset($datapost);    
}
 
?>


<?php


$cdomain = 'yourdomain.com'; // your c panel domain without port 2082
$cusername='CPANEL_USERNAME'; // c panel user name
$cpass='CPANEL_PASSWORD'; // c panel password
$domain ='yoursite.com'; // domain from which you have to generate emails from c panel


$data = login("$cdomain:2082/login/?login_only=1","user=$cusername&pass=$cpass&goto_uri=%2F"); // For login in c panel using curl
$character = json_decode($data);
$token = $character->security_token; // This is the token which changed everytime when you login its within the url 



 $fisier = file_get_contents('delete.txt'); 
                $emailarray = explode("\n", $fisier); // making array of email.txt file
                $total= count($emailarray);

for($i=0;$i<$total;$i++){
     $str= $emailarray[$i];
    $str = str_replace("\r", '', $str);

$postdata = post_data("$cdomain:2082$token/execute/Batch/strict","command=%5B%22Email%22%2C%22delete_pop%22%2C%7B%22email%22%3A%22$str%40$domain%22%7D%5D"); // This function will delete email id


preg_match_all("/\[([^\]]*)\]/", $postdata, $matches); // finding matches for error if anything get wrong while deleting email all the error shown to you is from Cpanel


$details = implode('',$matches[0]);
echo "Description of delete email task from Cpanel :-- ".$details;
echo "<br>";
echo "<br>";






}




?>
