<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

      <?php
        $data = 'Hello';
        $name = urlencode("sachin & nishalka");
        $url = "getMethod.php?thedata={$data}&name={$name}"
       ?>
       <a href=<?php echo $url ?>>Click Here</a>
  </body>
</html>
