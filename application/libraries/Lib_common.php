<?php
class Lib_common extends MY_Controller {
   
    private $CI;
  
    function __construct()
    {
        $this->CI = get_instance();
    }

function uploadFiles($userfiles,$path){
            
            $len = count($userfiles['name']);
            $allowedfileExtensions = array('jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG', 'doc', 'DOC', 'docx', 'DOCX', 'pdf', 'PDF', 'eml', 'EML', 'csv', 'ppt', 'pptx', 'zip', 'msg','xlsx','3gp','mp4' ,'txt');

            $message = [];

            for($i = 0; $i < $len; $i++){

              $fileTmpPath = $userfiles['tmp_name'][$i];
              $fileName = $userfiles['name'][$i];
              $fileSize = $userfiles['size'][$i];
              $fileType = $userfiles['type'][$i];

              $fileNameCmps = explode(".", $fileName);
              $fileExtension = strtolower(end($fileNameCmps));

              $message[$i]['filename'] =    $fileName;

              if (in_array($fileExtension, $allowedfileExtensions)) {

                    
                    $uploadFileDir = $path;
                    $dest_path = $uploadFileDir . $fileName;

                    if(move_uploaded_file($fileTmpPath, $dest_path))
                    {
                        $message[$i]['is_uploaded'] = "YES";
                    }
                    else
                    {
                        $message[$i]['is_uploaded'] = "NO";
                        
                    }

              } // End IF Check File Extension
              else{
                $message[$i]['is_uploaded'] = "NO";
              }

              $message[$i]['error'] = isset($userfiles['error'][$i]) ? $userfiles['error'][$i] : NULL;
            } // End For Loop


            return $message;
             
        } // End Function

        function renameFile($userfiles,$indo_code){
        
        if(!empty($userfiles['name'])){
          $len = count($userfiles['name']);
          for($i = 0; $i < $len; $i++){
              $ext = pathinfo($userfiles['name'][$i], PATHINFO_EXTENSION);
              $userfiles['name'][$i] = $indo_code.'-'.date('d-m-Y-H-i-s').'-'.rand().'.'.$ext;
          }

        } // End IF  

        return $userfiles;

        } // End Function

}
        ?>