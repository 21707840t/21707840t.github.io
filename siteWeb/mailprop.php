<?php require_once 'propmail.php';?>

    <!DOCTYPE html>
    <html lang="fr">
        <head>
        <title>Logement à Tours</title>
        <meta charset="utf-8" />
        </head>
        <body> 
<form action ='propmail.php' method = 'post'>
    <p>Vos coordonées:<br>
<p><label>Nom:</label><input id ="nom" type="text" name="nom"/></p>
<p><label>Prenom:</label><input id = "prenom" type="text" name="prenom"/></p>
<p><label>Telephone:</label><input id ="telephone" type="text" name="telephone"/></p>
<p><label>Email:</label><input id ="email" type="email" name="email" placeholder = "liliane@gmail.com"
title = "mail au like liliane@gmail.com"/></p></p>
<p>Message: Veuillez resésir vos coordonnées<br>
<textarea id ="body" name="body"cols ='50' rows='4'></textarea></p>
<p><input type="submit" value="Envoyer" name = "s"></p>
</form>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
></script>
<script type="text/javascript">
    function sendEMail(){
        var nom = $("#nom");
        var prenom = $("#prenom");
        var email = $("#email");
        var telephone = $("#telephone");
        var body = $("#body");
        
        if(isNotEmpty(nom) && isNotEmpty(prenom) && isNotEmpty(email) && isNotEmpty(body)){

            $.ajax({
                url:'sendEmail.php',
                method: 'POST',
                dateType: 'json',
                data:{
                        nom:nom.val(),
                        prenom:prenom.val(),
                        body: body.val(),
                     },success:function(reponse){
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message envoye avec succes");
                     }
                 });
             }
         }
         function isNotEmpty(caller){
            if(caller.val()==""){
                caller.css('border','1px solid red');
                return false;
            }
            else{
                caller.css('border', '');
                return true;
            }
         }

</script>
        </body>
        </html>


