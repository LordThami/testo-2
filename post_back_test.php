<?php
include('dbconfig.php');


$sub = $_REQUEST['subid'];

wh_log($sub);

$ref ='postbacks';
$newPostKey = $database->getReference($ref)->push($sub);



function wh_log($log_msg) {
    $log_filename = $_SERVER['DOCUMENT_ROOT']."/log";
    if (!file_exists($log_filename))
    {
        // create directory/folder uploads.
        mkdir($log_filename, 0777, true);
    }
    $log_file_data = $log_filename.'/log_' . date('d-M-Y') . '.log';
    file_put_contents($log_file_data, $log_msg . "\n", FILE_APPEND);
}

// another way to call error_log():
error_log("You messed up!", 3, "/var/tmp/my-errors.log");
?>