<?php 
try{
    require 'dbInfo.php';
    include 'isSession.php';

    function Decrypt($str)
// secreat key = 'funware', secreat iv = 'tlsrn815'
{

    $key = hash('sha256', 'funware');

    $iv = substr(hash('sha256', 'tlsrn815'), 0, 16);

    return openssl_decrypt(

            base64_decode($str), "AES-256-CBC", $key, 0, $iv

    );

}

echo Decrypt('eWE2RjZDUkhGb0dTaysxZWlreFc1Zz09');


}catch(Exception $e){
    echo $e;
}
?>