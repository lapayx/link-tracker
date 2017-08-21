<?php

  include_once ("basa.php");

    $link = $_GET['link'];

    $rederictUrl = "";
    if ( isset($basa[$link]) ){
      $rederictUrl =$basa[$link];
      $count = 0;
      if ( file_exists("counter/".$link))
      {
        $count = intval(file_get_contents("counter/".$link.'.txt'));
      }
      file_put_contents("counter/".$link.'.txt',$count+1);
    } else {
      header("HTTP/1.0 404 Not Found");
      echo "404 Not Found\n";
      exit();
    }
    header('Location: '.$rederictUrl, true, 301);
    exit;
 ?>
