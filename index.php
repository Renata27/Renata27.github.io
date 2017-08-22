  <p class="Title_css"> PPT Games        </p>
          
	    
          <?php
 if ($handle = opendir('./images')) {
   while (false !== ($file = readdir($handle)))
      {
          if ($file != "." && $file != "..")
	  {
          	$thelist .= '<li class="body_css"><a class="body_css" href="/content/Games/'.$file.'">'.$file.'</a></li>';
          }
       }
  closedir($handle);
  }
?>
<ul><?=$thelist?></ul>
<?php
unset($thelist);
?>