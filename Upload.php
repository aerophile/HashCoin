<?php



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
    <form action="Upload.php" method="post">
    <input id="file_upload" type="file">
    <button id="submit">Submit</button>
  </form>
  </body>
</html>
