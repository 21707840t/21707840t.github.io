<!DOCTYPE html>
    <html lang="fr">
        <head>
        <title>Logement à Tours</title>
          <meta charset="utf-8" />
         
         <style type="text/css">
           
           html{
  font-size: 62.5%;
}
h1{
  font-size: 2.6rem;
}
h2{
  font-size: 4.8rem;
}
h3{
  font-size: 3rem;
}
h4{
  font-size: 2.8rem;
}
h5{
  font-size:10px;
  color: black;

}
a{
  color: white;
  text-decoration: none;



}
li, button{
  font-size: 2rem;
  color:red;
}
/*header*/
.header{
  background: grey;
  
}
nav{
  min-height: 10vh;
  display: flex;
  align-items: center;
  width: 90%;
  margin: auto;
padding : 1rem;
flex-wrap: wrap;
}
nav ul{
  display: flex;
  flex: 1 1 40rem;
  justify-content: space-around;
  align-items: center;
  list-style: none;
}
#logo{
  flex: 1 1 40rem;
}
.section{
  min-height: 90vh;
  background: linear-gradient(rgb(0, 0, 0, 0.5), transparent), url("https://mag-habitat.fr/wp-content/uploads/2015/09/chambre-%C3%A0-coucher-adolescent.jpg");
background-size: cover;
background-position: bottom;
color: #C8FE2E;
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
text-align: center;

}
button{
  padding: 2rem 6rem;
  background: grey;
  color: white;
  font-size: 1.8rem;
  cursor: pointer;
  border: none;
}
/*img{
margin-left: -130px;

}*/
.img {
    display: inline-block;
    position: relative;
    margin-left: -120px;
    color: red;
}
.img .img1{
    position: absolute;
    text-align: center;
    left: 5%;
    right: 5%;
    top: 30%;
    color: white;
    width: 90%;
}
@media screen and (max-width: 885px){
  html{
    font-size: 30%;
  }
nav{
  text-align: center;
}
#logo{
  padding: 2rem;
}

}

         </style>
        </head>
        <body>

<header class = "header">
<nav>
<h1 id = "logo"><a href = tours.html>Tours</a></h1>
<ul>
<li class = "rtp"><div class = "img">
<img src = "https://cs-lormes.fr/wp-content/uploads/2017/01/logo_msap.png" height="100" widthalt = "150">
<div class = "img1">
	<h5>LOGEMENT A TOURS</h5>
</div>
</div></li>
<li><a href = "locate.html">Locataires</a></li>
<li><a href = "Propriètaires.html">Propriètaires</a></li>
<li><a href = "agences.html">Agences</a></li>
<li><a href = "connect.php">Logements</a></li>
</ul>
</nav>
</header>
<section class ="section">
<h2>Bienvenue à notre site de logement !</h2>
<button><a href = "cont.html" >Contactez-nous</a></button>
	</section>
        </body>
        </html>