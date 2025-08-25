<html>
  <head>
    <title>Uploading File</title>
    <link rel="stylesheet" href="/style.css">
  </head>
  <body>
    <h1>File Info</h1>
    <?php
echo "<b>File Name: </b><p>". $_FILES['FileUpload']['name'] . "</p><br>";
echo "<b>File Type: </b><p>". $_FILES['FileUpload']['type'] . "</p><br>";
echo "<b>File Location: </b>". $_FILES['FileUpload']['tmp_name']. "</p><br>";
echo "<b>File Size: </b><p>". $_FILES['FileUpload']['size']; 
echo " B";
echo "</p><br><br>";

$FileSource = $_FILES['FileUpload']['tmp_name'];
$FileUpload = '/home/runner/pro70crazy/HTMLtest/pending/'. $_FILES['FileUpload']['name'];

// checks and submits file
if (isset($_POST["submit"])) {
  if (($_FILES['FileUpload']['type'] == "text/html") or ($_FILES['FileUpload']['type'] == "text/php") or ($_FILES['FileUpload']['type'] == "text/xml") or ($_FILES['FileUpload']['type'] == "text/javascript") or ($_FILES['FileUpload']['type'] == "text/xml") or ($_FILES['FileUpload']['type'] == "application/zip"))
  {
  copy($FileSource,$FileUpload);
  echo "<h1 style='color:green'>Upload Complete!</h1>";
  echo "<h3>Your file is submitted and it's currently pending approval</h3>";
  echo "<p>To preview your pending HTML, JS, XML, and PHP file, you can go to:</p>";
  echo "<br>";  
  echo "<p>https://pro70.calvinb1.repl.co/HTMLtest/pending/". $_FILES['FileUpload']['name']. "</p>";
  }
  else
  {
  echo "<h1 style='color:red'>Upload Failed!</h1>";
  echo "<h3>Sorry, you can only upload HTML, PHP, JS and ZIP files. ZIP files must contain HTML and PHP files.</h3>";
  }
}
?>
<br><br>
    <a href="/HTMLtest/submit-file/">Upload another file</a> <br>
    <a href="/HTMLtest/">Back to HTMLtest</a>
  </body>
</html>