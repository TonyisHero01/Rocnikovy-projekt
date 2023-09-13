<?php
require_once "constants.php";
$response = array();
if ($_FILES['myFile']) {
    $uploadDir = '/home/76824974/public_html/eshop_cms/images/';

    $fileInfo = pathinfo($_FILES['myFile']['name']);
    $fileExtension = $fileInfo['extension'];

    $uniqueFileName = $_POST['name'] . '.' . $fileExtension;

    $uploadFilePath = $uploadDir . $uniqueFileName;

    if (move_uploaded_file($_FILES['myFile']['tmp_name'], $uploadFilePath)) {
        $response['success'] = true;
       // $response['message'] = "upload file successful";
        $response['filePath'] = '../'.$uploadFilePath;
        $response['fileUrl'] = './'.$uploadFilePath;
        //echo "upload file successful";
    } else {
        //echo "error, upload file failed";
        $response['success'] = false;
    }
} else {
    echo "no file";
}
header('Content-Type: application/json');
echo json_encode($response);

?>
