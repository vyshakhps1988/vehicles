<?php
namespace App\Classes;


//Models
use App\Models\VehicleModels;


class ImageUploaderUtilities{
    public static function imageUpload($targetDir, $image){
        $imageExtensionArray    =   ["jpg","JPG","jpeg","JPEG","png","PNG","gif","GIF"];
        $targetFile             =   $targetDir . basename($image["name"][0]);
        $filename               =   $image["name"][0];
        $tempFilename           =   $image["tmp_name"][0];
        $imageFileType          =   strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

        if(in_array($imageFileType,$imageExtensionArray)){
            if(move_uploaded_file($tempFilename, $targetFile)){
                return "upload_success";
            }
            else{
                return "upload_failed";
            }
        }
        else{
            return "invalid_image_format";
        }






    }

}



?>
