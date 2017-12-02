<?php



   // $file = file_get_contents($_POST['file1']['path'], true);
   //echo $file;
  //echo sha1_file('/Applications/XAMPP/xamppfiles/htdocs/Hashcoin/Upload.php');
  //echo sha1_file($_FILES['file1']['name']);

  $targetdir = '/Applications/XAMPP/xamppfiles/htdocs/Hashcoin/uploads/';
      // name of the directory where the files should be stored
  $targetfile = $targetdir.$_FILES['file1']['name'];

  if (move_uploaded_file($_FILES['file1']['tmp_name'], $targetfile)) {
    // file uploaded succeeded
    echo "done";
    echo sha1_file($targetfile);
  } else {
    // file upload failed
  }

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <script>

  var button = document.getElementById("submit");
  var file = document.getElementById("file_upload").files[0];

  button.addOnEventListener('click',function(){
    console.log(file);
  });

  </script>

  <body>
    <form action="Upload.php" method="post" enctype="multipart/form-data">
    <input id="file_upload" type="file" name="file1">
    <button id="submit">Submit</button>
  </form>
  </body>
</html>
