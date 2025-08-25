<html>
  <head>
    <title>Here is your File Info</title>
  </head>
  <body>
    <h1>File Reader 3000</h1>
    <h3>Here is your File Info:</h3>
<?php
$FileTemp = $_FILES['FileName']['tmp_name'];
$FilePreview = '/home/runner/pro70crazy/HTMLtest/file-reader/preview/';
if (($_FILES['FileName']['type'] == 'image/png') or ($_FILES['FileName']['type'] == 'image/jpeg') or ($_FILES['FileName']['type'] == 'image/jpg') or ($_FILES['FileName']['type'] == 'image/gif') or ($_FILES['FileName']['type'] == 'image/tpl') or ($_FILES['FileName']['type'] == 'image/heif') or ($_FILES['FileName']['type'] == 'image/heic'))
{
  copy($FileTemp,$FilePreview);
  echo "<img src='/HTMLtest/file-reader/preview/'";
  echo $_FILES['FileName']['name'];
  echo " />";
}
echo "File Name: ". $_FILES['FileName']['name'] . "<br>";
echo "File Type: ". $_FILES['FileName']['type'] . "<br>";
echo "File Size: ". $_FILES['FileName']['size']; 
echo " bytes";
?>
<br><br>
<a href="index.html">Check another File</a>
</html>