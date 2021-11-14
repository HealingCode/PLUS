<?php


class fileManipulate{
/*
 * php delete function that deals with directories recursively
 */
 function delete_directory($dirname) {
          if (is_dir($dirname))
            $dir_handle = opendir($dirname);
      if (!$dir_handle)
           return false;
      while($file = readdir($dir_handle)) {
            if ($file != "." && $file != "..") {
                 if (!is_dir($dirname."/".$file))
                      unlink($dirname."/".$file);
                 else
                      $this->delete_directory($dirname.'/'.$file);
            }
      }
      closedir($dir_handle);
      rmdir($dirname);
      return true;
 }

 function delete_file($dirname){

   unlink($dirname);

 }

}
 ?>
