     
     <!DOCTYPE html>
    <html lang="fr">
        <head>
        <title>Logement sur Tours</title>
        <meta charset="utf-8"  />
        <link href="connect.css" rel="stylesheet">
        </head>
        <body>   
 <?php
    $host = 'localhost';
    $dbname = 'sitweb';
    $username = 'root';
    $password = '';
  try 
  {
    $bdd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);  
  }
   catch (PDOException $e) 
  {
    die("Impossible de se connecter à la base de données $dbname :" . $e->getMessage());
   }
$logements = $bdd->query('select *from logements');
if(isset($_GET['q']) AND !empty($_GET['q'])){
$q = htmlspecialchars($_GET['q']);
$logements = $bdd->query('select * from logements where type like "%'.$q.'%"');
}
?>
            <form method="get" action="connect.php">
                <label for = "query">Recherche</label>   
                <input type="search" name="q" placeholder = "Recherchez par type: Appartement, Studio ou Chambre" maxlength="50" size="55" id = "query">
                <input type="submit" name = "bsubmit" value="Rechercher">
             </form>
<ul>
<?php
while($a = $logements->fetch()){ ?>
   <fieldset>
  <table>
  <td> <img src = "<?php echo $a['lien_image']; ?>" height = "200" width = "300"></td>
  <td>
    <fieldset>
<strong><?=$a['type'] ?></strong>  
  <p> <li>Ce logement est un(e) <?=$a['type'] ?></br>
  situé au <?=$a['adresse'] ?></br>
  de superficie de <?=$a['surface(m²)'] ?>m²</li>
   <li>Loyer mensuel de <?=$a['loyer_mensuel(€)']?>€</li>
  <a class= "joo" href = 'sendmail.php'>Envoyer un mail</a>
</fieldsert></td>
  </p>
</table>
</fieldset>
<?php } ?>
</ul></br>
</body>
</html>