<?php //The name of this file in this example is imgdata.php

  // $url=$_GET['url'];
  // $img = file_get_contents($url);
  // $fn = substr(strrchr($url, "/"), 1);
  // file_put_contents($fn,$img);
  // echo $fn;
  //
  $head = array_change_key_case(get_headers('https://i.ytimg.com/vi/xS3wQEGlOGU/1.jpg', TRUE));
  $filesize = $head['content-length'];
  echo $filesize;
?>
