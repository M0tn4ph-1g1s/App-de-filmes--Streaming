<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet"> 

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/plyr.css">
	<link rel="stylesheet" href="css/photoswipe.css">
	<link rel="stylesheet" href="css/default-skin.css">
	<link rel="stylesheet" href="css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>Cine New Generation</title>

</head>
<?php
$filme1=[
    "titulo"=>"",
    "nota"=> 8.6,
    "genero"=>"",
    "sinopse"=>"",
    "poster"=> "img/covers/cover.jpg"

];
$filme2=[
    "titulo"=>"",
    "nota"=> 8.6,
    "genero"=>"",
    "sinopse"=>"",
    "poster"=> "img/covers/cover.jpg"

];
$filme3=[
    "titulo"=>"",
    "nota"=> 8.6,
    "genero"=>"",
    "sinopse"=>"",
    "poster"=> "img/covers/cover.jpg"

];

$filme4=[
    "titulo"=>"",
    "nota"=> 8.6,
    "genero"=>"",
    "sinopse"=>"",
    "poster"=> "img/covers/cover.jpg"

];
$filmes=[$filme1,$filme2,$filme3,$filme4];
?>
<style>
	.paginator {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  margin: 20px auto 30px;
  background-color: #2b2b31;
  -webkit-box-shadow: 0 0 20px 0 rgba(0,0,0,0.3);
  box-shadow: 0 0 20px 0 rgba(0,0,0,0.3);
  -webkit-border-radius: 4px;
  border-radius: 4px;
  height: 50px;
  width: 290px;
}
.paginator__item {
  margin: 0;
}
.paginator__item a {
  font-size: 16px;
  height: 50px;
  width: 50px;
  display: block;
  line-height: 50px;
  color: rgba(255,255,255,0.5);
  text-align: center;
  -webkit-border-radius: 4px;
  border-radius: 4px;
}
.paginator__item:hover a {
  color: #fff;
}
.paginator__item--prev,
.paginator__item--next {
  display: block;
  position: relative;
  height: 50px;
  -webkit-transition: 0.4s ease;
  -moz-transition: 0.4s ease;
  transition: 0.4s ease;
}
.paginator__item--prev a,
.paginator__item--next a {
  font-size: 18px;
}
.paginator__item--active a {
  color: #fff;
  cursor: default;
  font-weight: 500;
  background-image: -moz-linear-gradient(90deg, #39dc79 0%, #39dc4f 100%);
  background-image: -webkit-linear-gradient(90deg, ##39dc79 0%, #39dc4f 100%);
  background-image: -ms-linear-gradient(90deg, #39dc79 0%, #39dc4f 100%);
  background-image: linear-gradient(90deg, #39dc79 0%, #39dc4f 100%);
  -webkit-box-shadow: 0 0 20px 0 rgba(102, 255, 88, 0.5);
  box-shadow: 0 0 20px 0 rgba(102, 255, 88, 0.5);
}
.paginator__item--active a:hover {
  color: #fff;
}
@media (min-width: 360px) {
  .paginator {
    width: 300px;
  }
}
@media (min-width: 768px) {
  .paginator {
    margin: 30px auto;
  }
  .paginator--list {
    margin: 10px auto 30px;
  }
}
@media (min-width: 1200px) {
  .paginator--list {
    margin: 20px auto 30px;
  }
}


</style>
<body class="body">
	
	<!-- header -->
	<header class="header">
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<!-- header logo -->
							<h1 class="logo me-auto me-lg-0" style="color: aliceblue;"><a href="index.html" style="color: aliceblue;">Cine New Generation</a></h1>
							<!-- end header logo -->

							<!-- header nav -->
							<ul class="header__nav">
								<!-- dropdown -->
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuHome" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>

									
								</li>
								<!-- end dropdown -->

								<!-- dropdown -->
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catálogo</a>

					
								</li>
								<!-- end dropdown -->
								<li class="header__nav-item">
									<a href="pricing.html" class="header__nav-link">Plano de Pagamento</a>
								</li>
							</ul>
							<!-- end header nav -->

							<!-- header auth -->
							<div class="header__auth">
								<button class="header__search-btn" type="button">
									<i class="icon ion-ios-search"></i>
								</button>
							</div>
							<!-- end header auth -->

							<!-- header menu btn -->
							<button class="header__btn" type="button">
								<span></span>
								<span></span>
								<span></span>
							</button>
							<!-- end header menu btn -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- header search -->
		<form action="#" class="header__search">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__search-content">
							<input type="text" placeholder="Search for a movie, TV Series that you are looking for">

							<button type="button">search</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- end header search -->
	</header>
	<!-- end header -->

	<!-- page title -->
	<section class="section section--first section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title">Catalogo</h2>
						<!-- end section title -->

						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="#">Home</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">Catalogo</li>
						</ul>
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- filter -->
	<div class="filter">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="filter__content">
						<div class="filter__items">
							<!-- filter item -->
							<div class="filter__item" id="filter__genre">
								<span class="filter__item-label">GENERO:</span>

								<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-genre" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<input type="button" value="Action/Adventure">
									<span></span>
								</div>

								<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-genre">
									<li>Action/Adventure</li>
									<li>Animals</li>
									<li>Animation</li>
									<li>Biography</li>
									<li>Comedy</li>
									<li>Cooking</li>
									<li>Dance</li>
									<li>Documentary</li>
									<li>Drama</li>
									<li>Education</li>
									<li>Entertainment</li>
									<li>Family</li>
									<li>Fantasy</li>
									<li>History</li>
									<li>Horror</li>
									<li>Independent</li>
									<li>International</li>
									<li>Kids</li>
									<li>Kids & Family</li>
									<li>Medical</li>
									<li>Military/War</li>
									<li>Music</li>
									<li>Musical</li>
									<li>Mystery/Crime</li>
									<li>Nature</li>
									<li>Paranormal</li>
									<li>Politics</li>
									<li>Racing</li>
									<li>Romance</li>
									<li>Sci-Fi/Horror</li>
									<li>Science</li>
									<li>Science Fiction</li>
									<li>Science/Nature</li>
									<li>Spanish</li>
									<li>Travel</li>
									<li>Western</li>
								</ul>
							</div>
							<!-- end filter item -->

							<!-- filter item -->
							<div class="filter__item" id="filter__quality">
								<span class="filter__item-label">QUALIDADE:</span>

								<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-quality" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<input type="button" value="HD 1080">
									<span></span>
								</div>

								<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-quality">
									<li>HD 1080</li>
									<li>HD 720</li>
									
								</ul>
							</div>
							
						</div>
						
						<!-- filter btn -->
						<button class="filter__btn" type="button">aplicar filtro</button>
						<!-- end filter btn -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end filter -->

	<!-- catalog -->
	<div class="catalog">
		<div class="container">
			<div class="row">
				<!-- card -->
                <?php
                for ($i=0 ;$i<count($filmes); $i++){
                    $filme = $filmes[$i];

                ?>
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="<?=$filme["poster"]?>" alt="">
							<a href="#" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="#"><?=$filme["titulo"]?></a></h3>
							<span class="card__category">
								<a href="#">Action</a>
								<a href="#">Triler</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i><?=$filme["nota"]?></span>
						</div>
					</div>
				</div><?php }; ?>
				<!-- end card -->

				

				<!-- paginator -->
				<div class="col-12">
					<ul class="paginator">
						<li class="paginator__item paginator__item--prev">
							<a href="#"><i class="icon ion-ios-arrow-back"></i></a>
						</li>
						<li class="paginator__item"><a href="#">1</a></li>
						<li class="paginator__item paginator__item--active"><a href="#">2</a></li>
						<li class="paginator__item"><a href="#">3</a></li>
						<li class="paginator__item"><a href="#">4</a></li>
						<li class="paginator__item paginator__item--next">
							<a href="#"><i class="icon ion-ios-arrow-forward"></i></a>
						</li>
					</ul>
				</div>
				<!-- end paginator -->
			</div>
		</div>
	</div>

	<!-- JS -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/wNumb.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/jquery.morelines.min.js"></script>
	<script src="js/photoswipe.min.js"></script>
	<script src="js/photoswipe-ui-default.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>