<?php
/*****************************************************
* 
* Author :
* Version :
* 
* Description :
* 
*/

include('../env.php');
require_once(ROOT_DIR.'/database/DatabaseConnection.php');
require_once(ROOT_DIR.'/app/Http/Controllers/FormController.php');
require_once(ROOT_DIR.'/app/Http/Controllers/UploadController.php');

FormController\index();

if( (isset($_POST['message'])) && (!empty($_FILES['fileToUpload']) ) )
{
    $array_fichier = UploadController\store();
    var_dump($array_fichier);
    FormController\store($conn, $array_fichier);
    FormController\show();
}