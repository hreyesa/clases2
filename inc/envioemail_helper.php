<?php
require('Mailin.php');


/*try {
    $de = 'hreyes.albornoz@gmail.com';
               
        $html = '';
               
        $mailin = new Mailin("https://api.sendinblue.com/v2.0","7HqtjN1QGKZ6OwJv");
        
        $data = array( "to" => array("hreyes.albornoz@gmail.com"=>""),                   
                   "bcc" =>array("hreyes.albornoz@gmail.com"=>""),
                   "from" => array('hreyes.albornoz@gmail.com',"PARAISO"),                   
                   "subject" => 'CONTACTO',
                   "text" => "",
                   "html" => $html,
                   "attachment" => array(),
                   "headers" => array("Content-Type"=> "text/html; charset=iso-8859-1","X-param1"=> "value1", "X-param2"=> "value2","X-Mailin-custom"=>"my custom value", "X-Mailin-IP"=> "102.102.1.2", "X-Mailin-Tag" => "My tag")               
       );    
       $res = $mailin->send_email($data);      

       echo "ENVIADO";
              
    } catch (Exception $e) {
        
        echo $e->getMessage();        
    };
*/

$nombre = $_POST['name'];
$correo = $_POST['email'];
$asunto = $_POST['sub'];
$mensaje = $_POST['message'];

$mailin = new Mailin('hreyes.albornoz@gmail.com', '7HqtjN1QGKZ6OwJv');
$mailin->
addTo('hreyes.albornoz@gmail.com', 'Hector Reyes')->
setFrom('hreyes.albornoz@gmail.com', 'Hector Reyes')->
setReplyTo('hreyes.albornoz@gmail.com','Hector Reyes')->
setSubject($asunto)->
setText($mensaje)->
setHtml('<head><title>'.$asunto.'</title></head>'.
  '<body> <p>Nombre contacto: '.$nombre.
  '</p><p> Correo Electronico solicitante:'.$correo.
  '</p><p> Mensaje:'.$mensaje.
  '</P> </body>');
$res = $mailin->send();

header('Location: /webapp/index.php/home/index');
/**
El mensaje de éxito será enviado de esta forma:
{'result' => true, 'message' => 'E-mail enviado'}
*/


?>