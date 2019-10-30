<?php
ini_set('max_execution_time', 600);
ini_set('memory_limit','1024M');

zipData('testfolder', 'test_new.zip'); //1st value is the folder to be zipped, 2nd value says where to place the zip-file (and its name)
echo "done, ";

function zipData($source, $destination){
  if(extension_loaded('zip') === true){
    if(file_exists($source) === true){
      $zip = new ZipArchive();
      if($zip->open($destination, ZIPARCHIVE::CREATE) === true){
        $source = realpath($source);
        echo "realpath: ".$source."; <br><br>";

        if(is_dir($source) === true) { //This should be the folder including the programm
          $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);

          foreach ($files as $file){
            echo $file . "<br>";
            $file = realpath($file);

            if(is_file($file) === true){
              echo "it is a file <br>";
              $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file)); //addFromString creates both the files as well as the directories they are placed into. Overwrites files of same name
            }
          }
        } else if(is_file($source) === true){ //zip if its only a file
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

//folder/subfolder/subfolder2/text.txt
?>
