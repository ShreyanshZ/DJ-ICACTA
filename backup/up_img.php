
<?php
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& in_array($extension, $allowedExts)) {
  if ($_FILES["file"]["error"] > 0) {
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
  } else {
    
    echo("Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>");
    
    if (file_exists("blog_img/" . $_FILES["file"]["name"])) {
      echo $_FILES["file"]["name"] . " already exists, upload failed. ";
    } else {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "blog_img/" . $_FILES["file"]["name"]);
      echo("Image URL: " . "blog_img/" . $_FILES["file"]["name"] . " <br>");
    }
  }
 }
 else {
  echo "Invalid file, upload failed";
}
?> 

<FORM><INPUT Type="button" VALUE="Back" onClick="history.go(-1);return true;"></FORM>