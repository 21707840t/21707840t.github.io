    <!DOCTYPE html>
<html lang = "fr">
<head>
<title>Logement à Tours</title>
<meta charset="utf-8"  />
<style type = "text/css">
    h1{
        text-align: center;
        font-style: italic;
        padding: 2rem 6rem;
    background: grey;
    color: white;
    font-size: 1.8rem;
    cursor: pointer;
    border: none;

    }
    html{
          background: url("https://mag-habitat.fr/wp-content/uploads/2015/09/chambre-%C3%A0-coucher-adolescent.jpg");
          background-size: cover;
color: #C8FE2E;
/*align-items: center;*/
background-position: top;
    min-height: 90vh;
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
    }
    body{
        font-size: 2rem;
    }
    </style>
</head>
<body>
   
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['telephone'])){
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$telephone = $_POST['telephone'];
	$body = $_POST['body'];



$c = mysqli_connect("localhost", "root","", "sitweb");
        if($c){
 $nomRec = $_POST['nom'];
$prenomRec = $_POST['prenom'];
$telRec = $_POST['telephone'];
$emailRec = $_POST['email'];
$messageRec = $_POST['body'];
$req = "insert into propriétaires VALUES('NULL', '$nomRec', '$prenomRec', '$telRec', '$emailRec', '$messageRec')";
$r = mysqli_query($c, $req);

if($r)
	echo "Enrégistrement effectué.<br>";
else
	echo "Enrégistrement non effectué<br>";

        }
	 require 'includes/PHPMailer.php';
     require 'includes/SMTP.php';
     require 'includes/Exception.php';

	$mail = new PHPMailer();
	$mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "ndmfatou@gmail.com";
    $mail->Password = '775865198';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    $mail->isHTML(true);
    $mail->setFrom($email, $nom);
    $mail->addAddress("ndmfatou@gmail.com");
     $mail->Body = $body;

     if($mail->send()){
     	echo "email envoyé<br>";
     	echo "Merci! nous vous contacterons bientôt.";
     }
     else{
     	echo "quelque chose ne va pas:<br>" .$mail->Erreur;
     }
}


?>
 </body>
    </html>