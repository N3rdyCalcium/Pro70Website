<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Thank You for your question</title>
<link rel="stylesheet" href="/style.css"
</head>
<body>
    <h1>Thank You</h1>
<p>You asked: <b><?php echo $_POST['ask-question'];

$Questions = $_POST['ask-question'];
$Timestamp = new DateTime();
?></b></p>
<br> <br>
<a href="index.html">Back to Questions</a>
<a href="/">Go back home</a>
 
</body>
 
</html>