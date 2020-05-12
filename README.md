# cpanel-email-generator

Generate Unlimted Email  account  From Cpanel

This Script is tested in cPanel & WHM Version 78 

With this script you are able to:--

Generate new mail accounts in bulk

<hr>

<h1><b>How to use Script:--</b></h1>


<b>1. Changes following variables values in genemail.php</b>:--

<code>$cdomain = 'yourdomain.com';</code>  Your Cpanel domain without port 2082<br>
<code> $cusername='CPANEL_USERNAME';</code>   Cpanel user Name<br>
<code> $cpass='CPANEL_PASSWORD';</code>   Cpanel Password<br>
<code>$domain ='yoursite.com';</code>   Domain from which you have to Generate emails From Cpanel <br>
<code> $epass ='emailpass';</code>  Password for all email id you can modify script if you want diffrent password for each Email id<br>
</code> $equota = '20';  Email quota in mb </code><br>


After changing the value save this file
<hr>

<b>2. Create a file of email.txt </b><br>
Enter the email name you want to generate from your Cpanel<br>

<b>Note:-- The file email.txt should follow the format one line each email name  ", space" sepration is not allowed.</b>


After saving the changes run the script in localhost or in your hosting

<h1><b>How to delete emails account in bulk through Script:--</b></h1>

Edit variables in  in deletemail.php

<code>$cdomain = 'yourdomain.com';</code>  Your Cpanel domain without port 2082<br>
<code> $cusername='CPANEL_USERNAME';</code>   Cpanel user Name<br>
<code> $cpass='CPANEL_PASSWORD';</code>   Cpanel Password<br>
<code>$domain ='yoursite.com';</code>   Domain from which you have to delete emails From Cpanel <br>

<b>2. Create a file of delete.txt </b><br>
Enter the email name you want to delete from your Cpanel<br>

<b>Note:-- The file delete.txt should follow the format one line each email name  ", space" sepration is not allowed.</b>

After filling information run the script 




