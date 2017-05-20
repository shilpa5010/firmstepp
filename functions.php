<?php
ob_start();
class councilDetails
{
    public function getCurlCouncilDetails($conn) {
          
              $service_url = "http://localhost/firmstep/councildetails.php?comp=view";
              $ch = curl_init($service_url);
              ////curl_setopt($ch, CURLOPT_TIMEOUT, 5);
              //curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
              curl_setopt($ch, CURLOPT_HTTPGET, 1);
              $headers= array('Accept: application/json','application/x-www-form-urlencoded');
              curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              $curl_response = curl_exec($ch);
              curl_close($ch);
              $curl_json = json_decode($curl_response, true);
              return $curl_json;
             // echo "<pre>"; print_r($curl_json);     exit;         
      }
      public function getCouncilDetails($conn) {
               $Query = "SELECT * FROM queue ORDER BY id DESC"; 
               $Select = mysqli_query($conn,$Query) or mysqli_error($conn);  
               if($Select->num_rows>=1) {
               return $Select;         
               } else {
               return 0;
               }
      }
      public function Add($details,$conn) {
             $Query = "INSERT INTO queue(firstName,lastName,organization,type,service) "
                                 . "VALUES('".$details['first_name']."','".$details['last_name']."',"
                                 . "'".$details['organization']."','".$details['type']."',"
                                 . "'".$details['service']."')";
             $Select = mysqli_query($conn,$Query) or mysqli_error($conn);    
            
             if($Select) {
             echo json_encode(array('msg'=>'success'));
             } else {
             echo json_encode(array('msg'=>'error'));
             }
        }
        public function cDetails($conn) {
        
             $url = "http://localhost/firmstep/councildetails.php?comp=insert";
             $ch = curl_init($url);
             if($ch === false)
             {
                die('Failed to create curl object');
             }
             $encoded = '';
             foreach($_POST as $name => $value) {
                     $encoded .= urlencode($name).'='.urlencode($value).'&';
             }
             $encoded = substr($encoded, 0, strlen($encoded)-1);
             curl_setopt($ch, CURLOPT_URL, $url);
             curl_setopt($ch, CURLOPT_POSTFIELDS,  $encoded);
             curl_setopt($ch, CURLOPT_HEADER, 0);
             curl_setopt($ch, CURLOPT_POST, 1);
             curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

             $html = curl_exec($ch);
                //echo 'curl Success';
             curl_close($ch);             
             $var = json_decode($html);
             if($var->msg=="success") {
             header('location:index.php?msg=1');
             exit;
             } else if($var->msg=="error") {
             header('location:index.php?msg=0');
             exit;
             }            
      }
      
}
?>