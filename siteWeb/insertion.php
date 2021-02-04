
<!DOCTYPE html>
    <html lang="fr">
        <head>
        <title>Logement à Tours</title>
        <meta charset="utf-8" />
        <style type = "text/css">
	h1{
	text-align: center;
	font-style: italic;
	padding: 2rem 6rem;
	background: grey;
	color: white;
	font-size: 1.8rem;
	cursor: pointer;
	border: none

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
</style>
        </head>
        <body>
        	<?php
        $c = mysqli_connect("localhost", "root","", "sitweb");
        if($c)
        {
$nomRec = $_GET['n'];
$prenomRec = $_GET['p'];
$telRec = $_GET['tel'];
$emailRec = $_GET['email'];
$messageRec = $_GET['message'];
$req = "insert into propriétaires VALUES('NULL', '$nomRec', '$prenomRec', '$telRec', '$emailRec', '$messageRec')";
$r = mysqli_query($c, $req);
if($r)
	echo "Enrégistrement effectué";
else
	echo "Enrégistrement non effectué";

        }

        	?>
     <h1>MERCI!<strong>Nous vous contacterons bientôt</strong></h1>
   

        	</body>
        	</html>