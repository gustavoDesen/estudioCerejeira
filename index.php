<?php  require_once('header.php') ?>
<style>
	/*HOME*/
	
@media screen and (max-width: 1600px){
  .home{
	 background-image: url('http://res.cloudinary.com/estudiomalves/image/upload/v1518717347/home-1200x720_ockfjw.jpg');
	  background-position: center center;
	  background-repeat: no-repeat;
	  background-attachment: fixed;
	  background-size: cover;
	}
}
@media screen and (max-width: 768px){
  .home{
	 background-image: url('http://res.cloudinary.com/estudiomalves/image/upload/v1518717682/home-768x1024_hqhbky.jpg');
	  background-position: center center;
	  background-repeat: no-repeat;
	  background-attachment: fixed;
	  background-size: cover;
	}
}
@media screen and (max-width: 480px){
  .home{
	 background-image: url('http://res.cloudinary.com/estudiomalves/image/upload/v1518718113/home-480x800_bgrssz.jpg');
	  background-position: center center;
	  background-repeat: no-repeat;
	  background-attachment: fixed;
	  background-size: cover;
	}
}
@media screen and (max-width: 320px){
  .home{
	 background-image: url('http://res.cloudinary.com/estudiomalves/image/upload/v1518718209/home-320x480_bcfqco.jpg');
	  background-position: center center;
	  background-repeat: no-repeat;
	  background-attachment: fixed;
	  background-size: cover;
	}
}
	
h1{
  font-weight: bold;
}
#texto1{
  font-weight: 100;
}
#contato{
  border: 2px solid #fff;
  margin-top: 6px;
  padding: 8px 15px;
}
#contato:hover{
  background-color: #bf3258;
  border: 2px solid #bf3258;
  color:#fff;
  margin-top: 6px;
  padding: 8px 15px;
}
.btn-destaque {
    color: #fff;
    background-color: #bf3258;
    border-color: none;
    border-radius: 0px;
    margin-top: 1rem;  
}
.btn:hover {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
}

</style>
<body class="home">
<div class="container">
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="index.php"><img id="logo" src="img/logo-site-branco.png" alt="Estudio Cerejeira"></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="sobre.php">SOBRE</a></li>
	        <li><a href="solucoes.php">SOLUÇÕES</a></li>
	        <li><a href="portfolio.php">PORTFÓLIO</a></li>
	        <li><a id="contato" href="contato.php">CONTATO</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div class="jumbotron text-center">
	  <h1>CONTEÚDO RELEVANTE</h1>
	  <p id="texto1">Produção de vídeos e consultoria em conteúdo</p>
	  <p id="texto1">Comunicação com o seu DNA</p>
	  <p><a class="btn btn-destaque btn-lg" href="portfolio.php" role="button">CONFIRA NOSSOS TRABALHOS</a></p>
		<div style="margin-top: 2rem;">
					<a href="https://www.facebook.com/estudiocerejeira" target="_blank" >
						<svg width="38px" height="38px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20.3 20.3" style="enable-background:new 0 0 20.3 20.3;" xml:space="preserve">
						<style type="text/css">
							.st0{fill:#C64167;}
							.st1{fill:#FFFFFF;}
						</style>
						<path class="st0" d="M20.3,10.2c0,5.6-4.6,10.2-10.2,10.2C4.6,20.3,0,15.8,0,10.2C0,4.6,4.6,0,10.2,0C15.8,0,20.3,4.6,20.3,10.2z"/>
						<path class="st1" d="M11,15.9v-5.2h1.7l0.3-2h-2V7.3c0-0.6,0.2-1,1-1h1.1V4.6c-0.2,0-0.8-0.1-1.6-0.1C10,4.5,9,5.4,9,7.1v1.5H7.2v2
							H9v5.2H11z"/>
						</svg>
					</a>
					<a href="https://www.instagram.com/estudiocerejeira" target="_blank">
						<svg width="38px" height="38px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 20.3 20.3" style="enable-background:new 0 0 20.3 20.3;" xml:space="preserve">
						<style type="text/css">
							.st0{fill:#C64167;}
							.st1{fill:#FFFFFF;}
						</style>
						<path class="st0" d="M20.3,10.2c0,5.6-4.6,10.2-10.2,10.2C4.6,20.3,0,15.8,0,10.2C0,4.6,4.6,0,10.2,0C15.8,0,20.3,4.6,20.3,10.2z"/>
						<g>
							<path class="st1" d="M12.5,4.5H7.9c-1.8,0-3.3,1.5-3.3,3.3v4.9c0,1.8,1.5,3.3,3.3,3.3h4.6c1.8,0,3.3-1.5,3.3-3.3V7.7
								C15.7,5.9,14.2,4.5,12.5,4.5z M14.9,12.6c0,1.3-1.1,2.4-2.4,2.4H7.9c-1.3,0-2.4-1.1-2.4-2.4V7.7c0-1.3,1.1-2.4,2.4-2.4h4.6
								c1.3,0,2.4,1.1,2.4,2.4V12.6z"/>
							<path class="st1" d="M10.2,7.1C10.2,7.1,10.1,7.1,10.2,7.1C9.3,7.1,8.6,7.4,8,8c-0.6,0.6-0.9,1.3-0.9,2.1c0,1.7,1.4,3,3,3
								c0.8,0,1.6-0.3,2.1-0.9c0.6-0.6,0.9-1.3,0.9-2.1c0-0.8-0.2-1.6-0.7-2.1C11.9,7.5,11.1,7.2,10.2,7.1z M10.2,12.2c-1.1,0-2-0.9-2-2
								c0-1.1,0.9-2,1.9-2c0,0,0,0,0.1,0c1.3,0,2,0.8,2,2C12.1,11.3,11.3,12.2,10.2,12.2z"/>
							<path class="st1" d="M13.3,6.3c-0.4,0-0.7,0.3-0.7,0.7c0,0.4,0.3,0.7,0.7,0.7C13.7,7.7,14,7.4,14,7C14,6.7,13.7,6.3,13.3,6.3z"/>
						</g>
						</svg>
					</a>
					<a href="">
						<svg width="38px" height="38px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 20.3 20.3" style="enable-background:new 0 0 20.3 20.3;" xml:space="preserve">
						<style type="text/css">
							.st0{fill:#C64167;}
							.st1{fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;}
						</style>
						<path class="st0" d="M20.3,10.2c0,5.6-4.6,10.2-10.2,10.2C4.6,20.3,0,15.8,0,10.2C0,4.6,4.6,0,10.2,0C15.8,0,20.3,4.6,20.3,10.2z"/>
						<path class="st1" d="M16.2,6.9c0.1-0.5,0.1-1-0.2-1.4c-0.4-0.6-1.4-0.6-2-0.5c-0.5,0.1-2.3,0.9-2.9,2.7c1.1-0.1,1.6,0.1,1.5,1.2
							c0,0.5-0.3,1-0.6,1.5c-0.3,0.6-0.9,1.8-1.7,0.9c-0.7-0.8-0.7-2.2-0.8-3.2C9.4,7.7,9.3,7,9.2,6.5C9,6,8.7,5.4,8.2,5.3
							c-0.5-0.1-1,0.1-1.4,0.3C5.8,6.2,5,7.1,4.1,7.8v0.1C4.3,8,4.3,8.3,4.6,8.4c0.6,0.1,1.2-0.6,1.7,0.1c0.3,0.4,0.3,0.9,0.5,1.4
							c0.2,0.6,0.4,1.3,0.6,2c0.3,1.2,0.7,3,1.7,3.5c0.5,0.2,1.3-0.1,1.7-0.3c1.1-0.7,2-1.6,2.7-2.6C15.1,10.2,16.1,7.6,16.2,6.9z"/>
						</svg>
					</a>
				</div>	<div class="midia">
		

	</div>
</div>


<?php require_once('footer.php') ?>