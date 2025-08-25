<html>
  <head>
    <title>PIN-ny PIN PIN</title>
  </head>
  <body>
    <?php
$username = $_REQUEST['UserName'];

echo "<h1>Logged in as: $username</h1>";

if (($_REQUEST['UserName'] == "Admin") and ($_REQUEST['UserPassword'] == "Password123"))
{$IsAdmin = true;}
if ($IsAdmin)
{
  $_SESSION['PIN'] = "12345";
  echo "Welcome your majesty. use your PIN to open this door";
}
else
{ $_SESSION['PIN'] = "888";
 echo "Welcome Ordinary User, Use your PIN for Attendance";
}
?>
<br><br>
Click here to see your PIN <a href="/HTMLtest/admins-users/secret-pin.php">Link</a>
  </body>
</html>