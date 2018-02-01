<?php

$sourceDirectory = './src';
$buildDirectory = './dist';;

$phar = new Phar($buildDirectory . "/exampleapp.phar", FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::KEY_AS_FILENAME, "exampleapp.phar");
$phar["index.php"] = file_get_contents($sourceDirectory . "/index.php");
$phar["example.php"] = file_get_contents($sourceDirectory . "/example.php");
$phar->setStub($phar->createDefaultStub("index.php"));


