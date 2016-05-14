<?php require 'header.php' ?>

	<div class="wrapper">
		<div class="row">
			<div class="col-xs-12 ">
				<div class="row">
					<div class="col-sx-12 text-center titleDiv">
						<h1 class="caseTitle">Kundcases</h1>
						<p class="caseText">Här kan du se utvalda delar av vår kundportfolio</p>
						<a href="offer.php"class="caseLink"></a>
					</div>
				</div>
				<div class="row hidden-xs">
					<div id="entry" class="col-sx-12">
						<ul class="nav nav-pills pillsNav ">
						  <li role="presentation"><a id="1" href="#">Design</a><label class="ring">3</label></li>
						  <li role="presentation"><a id="2" href="#">Kommunikation</a><label class="ring">2</label></li>
						  <li role="presentation"><a id="3" href="#">Koncept</a><label class="ring">4</label></li>
						  <li role="presentation"><a id="4" href="#">Butiksdemo</a><label class="ring">2</label></li>
						  <li role="presentation"><a id="5" href="#">Varumärken</a><label class="ring">1</label></li>
						</ul>
					</div>
				</div>

				<div class="row visible-xs">
					<div id="entry-mobile" class="col-xs-12 text-center touch-pills-cnt">
						<div class="row">
							<div class="col-xs-6 pill-cnt">
								<a id="1" class="touch-pill" href="#">Design</a> <span>4</span>
							</div>

							<div class="col-xs-6 pill-cnt">
								<a id="2" class="touch-pill" href="#">Kommunikation</a> <span>2</span>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6 pill-cnt">
								<a id="3" class="touch-pill" href="#">Koncept</a> <span>3</span>
							</div>
							<div class="col-xs-6 pill-cnt">
								<a id="4" class="touch-pill" href="#">Butiksdemo</a> <span>2</span>
							</div>
						</div>
						<div class="row">
							<div id="pill" class="col-xs-6 pill-cnt">
								<a id="5" class="touch-pill" href="#">Varumärken</a> <span>1</span>
							</div>
							<div id="pill" class="col-xs-6 pill-cnt">
								<a id="6" class="touch-pill" href="all">Visa alla..</a> <span>13</span>
							</div>
						</div>
					</div>
				</div>


				<div class="row hidden-xs">
					<div class="col-sx-12 caseDiv">
						<div class="innerCaseDiv">
							<a href="single-portfolio.php">
								<img src="img/ARN_Sommarkaffe_thumb-362x204.jpg"><img class="caseLogo"src="img/fazer-logo-white.png">
							</a>
						</div>
						<div class="innerCaseDiv">
							<a href="single-portfolio.php">
								<img src="img/GB_BJ_thumb-362x204.jpg"><img class="caseLogo"src="img/sony.png">
							</a>	
						</div>
						<div class="innerCaseDiv">
							<a href="single-portfolio.php">
								<img src="img/MabsCompthumb-362x204.jpg"><img class="caseLogo"src="img/playstation.png">
							</a>	
						</div>
						<div class="innerCaseDiv">
							<a href="single-portfolio.php">
								<img src="img/GB_PS_thumb-362x204.jpg"><img class="caseLogo"src="img/sony.png">
							</a>	
						</div>
						<div class="innerCaseDiv">
							<a href="single-portfolio.php">
								<img src="img/thumb_orangina-362x204.jpg"><img class="caseLogo"src="img/playstation.png">
							</a>	
						</div>
						<div class="innerCaseDiv">
							<a href="single-portfolio.php">
								<img src="img/Wasa_Event_portfolio_thumb-362x204.jpg"><img class="caseLogo"src="img/fazer-logo-white.png">
							</a>	
						</div>
					</div>
				</div>

				<div class="row visible-xs">
					<div class="col-xs-12 caseDiv">

						<div class="hover" data-cat1="Design" data-cat2="Varumärken">
							<a href="single-portfolio.php">
								<img class="img-responsive center-block"src="img/ARN_Sommarkaffe_thumb-362x204.jpg"><img class="caseLogo"src="img/fazer-logo-white.png">
							</a>
						</div>

						<!-- <a href="#">Fazer</a>  Komplettera med länkar om touchend och preventdefault i jQuery -->
						<div class="hover" data-cat1="Koncept" data-cat2="Butiksdemo">
							<a href="single-portfolio.php">
								<img class="img-responsive center-block"src="img/GB_BJ_thumb-362x204.jpg"><img class="caseLogo"src="img/sony.png">
							</a>	
						</div>
						<div class="hover" data-cat1="Design" data-cat2="Koncept">
							<a href="single-portfolio.php">
								<img class="img-responsive center-block"src="img/MabsCompthumb-362x204.jpg"><img class="caseLogo"src="img/playstation.png">
							</a>	
						</div>
						<div class="hover" data-cat1="Koncept" data-cat2="Design">
							<a href="single-portfolio.php">
								<img class="img-responsive center-block"src="img/GB_PS_thumb-362x204.jpg"><img class="caseLogo"src="img/sony.png">
							</a>	
						</div>
						<div class="hover" data-cat1="Kommunikation" data-cat2="Design">
							<a href="single-portfolio.php">
								<img class="img-responsive center-block"src="img/thumb_orangina-362x204.jpg"><img class="caseLogo"src="img/playstation.png">
							</a>	
						</div>
						<div class="hover" data-cat1="Butiksdemo" data-cat2="Kommunikation">
							<a href="single-portfolio.php">
								<img class="img-responsive center-block"src="img/Wasa_Event_portfolio_thumb-362x204.jpg"><img class="caseLogo"src="img/fazer-logo-white.png">
							</a>	
						</div>


					</div>
				</div>
			</div> <!-- /main col -->
		</div> <!-- / main row -->
	</div> <!-- /.wrapper -->
<?php require 'footer.php' ?>