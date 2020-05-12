# cpanel-email-generator

Create Unlimted Email  account  From Cpanel

This Script is tested on cPanel & WHM Version 78 

With this script you are able to:--

Generate new mail accounts
<hr>

<h1><b>How to use Script:--</b></h1>


<b>1. Changes following variables values</b>:--

<code>$cdomain = 'yourdomain.com';  Your Cpanel domain without port 2082

$cusername='CPANEL_USERNAME';  Cpanel user Name

$cpass='CPANEL_PASSWORD';  Cpanel Password

$domain ='yoursite.com';  Domain from which you have to Generate emails From Cpanel

$epass ='emailpass'; Password for all email id you can modify script if you want diffrent password for each Email id

$equota = '20';  Email quota in mb </code>


After changing the value save this file
<hr>

<b>2. Create a file of email.txt </b>
Enter the email name you want to generate from your Cpanel

<b>Note:-- The file email.txt should follow the format one line each email name the ", space" sepration is not allowed.</b>


After saving the changes run the script in localhost or in your hosting


