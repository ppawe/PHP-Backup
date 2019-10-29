<?php
ini_set('max_execution_time', 600);
ini_set('memory_limit','1024M');

zipData('testfolder', 'test_new.zip');
echo "done, ";

function zipData($source, $destination){
  if(extension_loaded('zip') === true){
    if(file_exists($source) === true){
      $zip = new ZipArchive();
      if($zip->open($destination, ZIPARCHIVE::CREATE) === true){
        $source = realpath($source);
        echo "realpath: ".$source."; ";

        if(is_dir($source) === true) { //This should be the folder including the programm
          $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);
          var_dump($files);

          foreach ($files as $file){
            $file = realpath($file);

            if(is_dir($file) === true){
              $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
            } else if(is_file($file) === true){
              $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
            }
          }
        } else if(is_file($source) === true){
          $zip->addFromString(basename($source), file_get_contents($source));
        }
      } else{
        echo "couldnt open zip-Archive, ";
      }
      echo "the function was successfully run through, ";
      return $zip->close();
    }
  }
  echo "this didnt work, ";
  return false;
}
?>
