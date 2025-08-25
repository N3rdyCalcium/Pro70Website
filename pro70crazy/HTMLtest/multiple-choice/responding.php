<html>
  <head>
    <title>Responding...........</title>
  </head>
  <body>
    <?php
echo "<h1>You said: ". $_POST['okay']. "</h1><br>";
echo "<hr>";
echo "<h2>Respondent's input: </h2>";

if ($_POST['okay'] == "Yes")
{
  echo "phew";
}
else
{
  echo "<strong>911 Dispatcher: </strong>911 what's your emergency?";
  echo "<br>";
  echo "<strong>Respondent: </strong>My User is Not Okay! Please bring him to the hospital!";
  echo "<br>";
  echo "<strong>911 Dispatcher: </strong>Please calm down. we will bring your ambulance ASAP.";
  echo "<br>";
  echo "<strong>Respondent: </strong>Ok. User, You will brought to the hospital, be <i>patient</i> ok";
}
?>
</html>