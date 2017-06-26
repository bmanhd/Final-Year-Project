
<p style="color:blue;font-family:verdana"><b>Here is the Download Page</b></p> 
<br>
<br>
<p style="color:blue;font-family:verdana">Below right click and save as to download projects (txt files will open in the browser) :</p>
<br>
<br>

<?php

if ($directory = opendir('/web/stud/u1355755/mvc/php/uploads/')) {
  while (false !== ($downloadfile = readdir($directory))) {
    if (!preg_match("/\.(.?|php)$/",$downloadfile)) {
      
       echo '<a href="uploads/' .$downloadfile. '">' .$downloadfile. '</a><br>';
      echo '<font style="font-size:11px;"></font><br>';
    }
  }
  closedir($directory);
}
?>

