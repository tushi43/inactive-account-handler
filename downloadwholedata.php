<?php

require 'connect.php';

require 'core.php';

session_start();

$row = $_SESSION['email_do'];

$id = $row["id"];
if($id)
{
// Get real path for our folder
$rootPath = $_SERVER['DOCUMENT_ROOT']."/data/".$row["id"]."/";

$zipname = $id.time().'.zip';
// Initialize archive object
$zip = new ZipArchive();

$zip->open($zipname, ZipArchive::CREATE | ZipArchive::OVERWRITE);

// Create recursive directory iterator
/** @var SplFileInfo[] $files */
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($rootPath),
    RecursiveIteratorIterator::LEAVES_ONLY
);

foreach ($files as $name => $file)
{
    // Skip directories (they would be added automatically)
    if (!$file->isDir())
    {
        // Get real and relative path for current file
        $filePath = $file->getRealPath();
        $relativePath = substr($filePath, strlen($rootPath) + 1);

        // Add current file to archive
        $zip->addFile($filePath, $relativePath);
    }
}

// Zip archive will be created only after closing object
$zip->close();

if (file_exists($zipname)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/zip');
        header('Content-Disposition: attachment; filename='.basename($zipname));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($zipname));
        ob_clean();
        flush();
        readfile($zipname);
       exit;
    } else {
        exit("Could not find Zip file to download");
    }
}

header("Location: yes.php");

?>