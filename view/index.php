<?php

/*
$server = 'localhost';
$user = 'root';
$password = 'root';
$db_name = 'hcode_shop';
$port = 8889;

$db_connect = new mysqli($server,$user,$password,$db_name,$port);
mysqli_set_charset($db_connect,"utf8"); // para inserir com acentuacao corretamente

if ($db_connect->connect_error) {
		echo 'Falha: ' . $db_connect->connect_error;
} else {

	$result = $db_connect->query("select * from tb_produtos");

	if ($result->num_rows > 0) {

		while ($row = $result->fetch_assoc()) {
			var_dump($row);
		}
	}
}


exit;
*/

?>

<?php include_once("header.php"); ?>

		<section>
			
			<div id="banner">
				
				<h1>Orlando City<small>Orlando City Soccer Club</small></h1>

			</div>

			<div id="news" class="container">
				
				<div class="row text-center">
					<h2>Latest News</h2>
					<hr>	
				</div>				
				
				<button type="button" id="btn-news-prev"><i class="fa fa-angle-left"></i></button>
				<button type="button" id="btn-news-next"><i class="fa fa-angle-right"></i></button>

				<div class="row thumbnails">
					<div class="item">
						<div class="item-inner">
							<img src="img/noticia-thumb.jpg" alt="Noticia">
							<h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
							<time>December 21, 2015</time>
						</div>chevron
					</div>
					<div class="item">
						<div class="item-inner">
							<img src="img/noticia-thumb.jpg" alt="Noticia">
							<h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
							<time>December 21, 2015</time>
						</div>
					</div>
					<div class="item">
						<div class="item-inner">
							<img src="img/noticia-thumb.jpg" alt="Noticia">
							<h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
							<time>December 21, 2015</time>
						</div>
					</div>
					<div class="item">
						<div class="item-inner">
							<img src="img/noticia-thumb.jpg" alt="Noticia">
							<h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
							<time>December 21, 2015</time>
						</div>
					</div>
					<div class="item">
						<div class="item-inner">
							<img src="img/noticia-thumb.jpg" alt="Noticia">
							<h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
							<time>December 21, 2015</time>
						</div>
					</div>
					<div class="item">
						<div class="item-inner">
							<img src="img/noticia-thumb.jpg" alt="Noticia">
							<h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
							<time>December 21, 2015</time>
						</div>
					</div>
					<div class="item">
						<div class="item-inner">
							<img src="img/noticia-thumb.jpg" alt="Noticia">
							<h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
							<time>December 21, 2015</time>
						</div>
					</div>
					<div class="item">
						<div class="item-inner">
							<img src="img/noticia-thumb.jpg" alt="Noticia">
							<h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
							<time>December 21, 2015</time>
						</div>
					</div>
				</div>

			</div>

			<div id="estatisticas">
				
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<p>61348<small>Stadium Capacity</small></p>
						</div>
						<div class="col-md-4">
							<p>2010<small>Founded</small></p>
						</div>
						<div class="col-md-4">
							<p>7th<small>Eastern Conference</small></p>
						</div>
					</div>
				</div>

			</div>

			<div id="call-to-action">
				
				<div class="container">

					<div class="row text-center">
						<h2>American club number one in Brazil</h2>
						<hr>	
					</div>

					<div class="row">
						
						<p>Adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat volup tatem. Uteni ad minima veniam, quis nostrum sed quia non numquam eius modi tempora incidunt ut. quia non numquam eius numquam eius modi temp modi tempora incidunt ut labore et dolore m.</p>

					</div>
					
					<div class="text-center">
						<div class="row row-max-400">
							
							<div class="col-xs-6">
								<a href="#" class="btn btn-roxo">Shop</a>
							</div>
							<div class="col-xs-6">
								<a href="#" class="btn btn-amarelo">Register</a>
							</div>

						</div>
					</div>

				</div>

			</div>

		</section>

		<?php include_once("footer.php"); ?>

		<script src="lib/jquery/jquery.min.js"></script>
		<script src="lib/owl.carousel/owl-carousel/owl.carousel.min.js"></script>
		<script src="lib/bootstrap/js/bootstrap.min.js"></script>
		<script src="js/efeitos.js"></script>

	</body>
</html>