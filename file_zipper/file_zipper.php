<?php
$zip = new ZipArchive();
$zip->open('file.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);
if ($zip->open('test.zip') === TRUE) {
    $zip->addFile('/testfolder/file1.txt');
    $zip->addFile('/testfolder/file2.txt');
    $zip->addFile('/testfolder/file3.txt');
    $zip->close();
    echo 'ok';
} else {
    echo 'failed';
}
?>
