<?php
require_once('vendor/autoload.php');
require_once("views/form.php");

use Aws\s3\s3Client;
use Aws\Credentials\Credentials;
use Aws\Exception\AwsException;

 
    $s3 = new s3Client([
        'version' => 'latest',
        'region' => _BUKET_REGION_,
        'credentials' => new Credentials(_ACCESS_KEY_, _SECRET_KEY_)
    ]);

    try {
        $id = uniqid();
        $file_temp = $_FILES['file']['tmp_name'];
        $s3->upload(_BUCKET_NAME_, $id ,fopen($file_temp, 'r+'));
        echo"done";
    } catch (AwsException $e) {
        echo "error in uploading file";
    }
