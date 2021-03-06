<?php  require_once('header.php') ?>
<style>
	/*SOLUCOES*/
	.navbar-default .navbar-nav > li > a, .navbar-default .navbar-nav > li > a {
    color: #9c9c9b;
    
}
.navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > li > a:hover {
    color: #bf3258;
    font-weight: bold;
}
#contato-solucoes{
  background-color: #fff;
  color: #bf3258;
  border: 2px solid #bf3258;
  margin-top: 6px;
  padding: 8px 15px;
}
#contato-solucoes:hover{
  background-color: #bf3258;
  color: #fff;
  border: 2px solid #bf3258;
  margin-top: 6px;
  padding: 8px 15px;
}
.solucoes .navbar-default .navbar-toggle {
    border: 2px solid #888;
    border-radius: 0px;
}
.solucoes .navbar-default .navbar-toggle .icon-bar {
    background-color: #888;
}
.videos{
  height: 29.4rem;
  margin-top: 7rem;
  background-image: url('http://res.cloudinary.com/estudiomalves/image/upload/v1518284066/videos-otm_sd6x4j.jpg');
 background-repeat: no-repeat;
}
.midias{
  width: 100%;
  height: 29.4rem;
  margin-top: 7rem;
  background-image: url('http://res.cloudinary.com/estudiomalves/image/upload/v1518284041/midia-otm_iiavvm.jpg');
 background-repeat: no-repeat;
}
.consultoria{
  
  height: 29.4rem;
  margin-top: 4rem;
  background-image: url('http://res.cloudinary.com/estudiomalves/image/upload/v1518284028/consultoria-otm_x7dijl.jpg');
 background-repeat: no-repeat;
}
.marketing{
  width: 100%;
  height: 29.4rem;
  margin-top: 4rem;
  background-image: url('http://res.cloudinary.com/estudiomalves/image/upload/v1518284041/marketing-otm_hxayij.jpg');
 background-repeat: no-repeat;
}
.titulo-solucoes{
  font-weight: bold;
  position: relative;
  padding: 0px 15px;
  top: 21rem;
}
</style>
<body class="solucoes">
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
	      <a class="navbar-brand" href="index.php"><img id="logo" src="img/logo-site.png" alt="Estudio Cerejeira"></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right nav-black">
	        <li><a href="sobre.php">SOBRE</a></li>
	        <li><a href="solucoes.php">SOLUÇÕES</a></li>
	        <li><a href="portfolio.php">PORTFÓLIO</a></li>
	        <li><a id="contato-solucoes" href="contato.php">CONTATO</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
 
		<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-5">
			<div id="" class="videos">
				<h3 id="producao" class="titulo-solucoes">PRODUÇÃO COMPLETA DE VÍDEOS</h3>
			</div>
			<div class="consultoria">
				<h3 class="titulo-solucoes">CONSULTORIA EM CONTEÚDO</h3>
			</div>
		</div>
		<div class="col-sm-5">
			<div class="midias">
				<h3 class="titulo-solucoes">MEDIA TRANNING</h3>
			</div>
			<div class="marketing">
				<h3 class="titulo-solucoes">MARKETING</h3>
			</div>
		</div>
		<div class="col-sm-1"></div>
		

	</div>
	
	
	
</div>


<?php require_once('footer.php') ?>