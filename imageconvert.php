<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Image Manipulation Test</title>

    <!--Nav Bar-->
    <script src=jquery-3.3.1.min.js></script>

    <div id="nav-placeholder">

    </div>

    <script>
    $(function(){
      $("#nav-placeholder").load("nav.html");
    });
    </script>
    <!--End Nav Bar-->
  </head>
  <body>
    <h1>The uploaded image:</h1>
    <?php
      $file = $_FILES['picture']['tmp_name'];
      $picture = file_get_contents($file);
      $sourceImage = imagecreatefromstring($picture);

      $width = imageSX($sourceImage);
      $height = imageSY($sourceImage);

      $newheight = 400;
      $newwidth = $newheight * ($width / $height);

      $newImage = imagecreatetruecolor($newwidth, $newheight);
      $result = imagecopyresampled($newImage, $sourceImage, 0, 0, 0, 0,
        $newwidth, $newheight, $width, $height);
      imagejpeg($newImage, "newimage.jpg");
    ?>
    <img src="newimage.jpg" alt="dern">
  </body>
</html>
