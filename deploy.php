<?php
/*
	Copy the contents of a directory from one location to another with PHP
	http://www.beliefmedia.com/copy-directory-php
*/
 
 
function beliefmedia_recurse_copy($src, $dst) {
 
  /* Returns false if src doesn't exist */
  $dir = @opendir($src);
 
  /* Make destination directory. False on failure */
  if (!file_exists($dst)) @mkdir($dst);
 
  /* Recursively copy */
  while (false !== ($file = readdir($dir))) {
 
      if (( $file != '.' ) && ( $file != '..' )) {
         if ( is_dir($src . '/' . $file) ) beliefmedia_recurse_copy($src . '/' . $file, $dst . '/' . $file); 
         else copy($src . '/' . $file, $dst . '/' . $file);
      }
 
  }
 closedir($dir); 
}
 
/* Source directory (can be an FTP address) */
$src = '/home/appacm/repositories/acm/';
 
/* Full path to the destination directory */
$dst = '/home/appacm/public_html/';
 
/* Usage */
beliefmedia_recurse_copy($src, $dst);