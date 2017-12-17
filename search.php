<?php include "header.php"; ?>

<!-- search section -->
<section class="searchSection">
	<div class="container">
		<div class="row">
			 
			<div class="col-md-10 offset-md-1">

				<div class="searchDiv">
					
					<h1>Find the right home and the right neighborhood</h1>
<!-- 					<div class="threeButton">
						<button class="btn" id="buy">Buy</button>
						<button class="btn" id="sell">Sell</button>
						<button class="btn" id="rent">Rent</button>
					</div> -->
					<form action="search.php" method="post">
					    <div class="input-group">
					      <input type="text" class="form-control" placeholder="Search for...">
					      <span class="input-group-btn">
					        <button class="btn btn-default" type="button">Search</button>
					      </span>
					    </div><!-- /input-group -->
					</form>
					<div class="filter">
				      <!-- <label for="amount">Price range:</label>
					  <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
					  <div id="slider-range"></div> -->
					  <div class="row">
					  <div class="col-md-3">
					  	<input type="text" class="form-control transparent minPrice" placeholder="min price...">	
					  </div>
  					  <div class="col-md-3">
					  	<input type="text" class="form-control transparent maxPrice" placeholder="max price...">	
					  </div>
					  <div class="col-md-2">
					  	<input type="text" class="form-control transparent bedroom" placeholder="bedroom...">	
					  </div>
					  <div class="col-md-2">
					  	<input type="text" class="form-control transparent toilet" placeholder="toilet...">	
					  </div>
					  <div class="col-md-2">
					  	<button class="btn" class="filtered" id="filtered">Filter</button>
					  </div>
					  
					  

					</div>
				</div>

			</div>

		</div>
	</div>
</section>
<!-- search section ends-->

<!-- prooerty list view -->
<section class="propertyListView">
	<div class="container">
		<div class="catergory">
			<h4>Your search</h4>
			<!-- <h5 class="lightColor">New York, NY</h5> -->
			<div class="row">
				<div class="col-md-3 col-sm-4 col-xs-12" id="singlePropertyView1">

					<div class="singlePropertyView">
						<div class="propertyImage"></div>

						<a href="#" class="heart"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
						<div class="singlePropertyinfo">
							<ul>
								<li>$<span class="price1">1000</span></li>
								<li>
									<ul class="propertyInfo">
										<li>
											<i class="fa fa-bed" aria-hidden="true"></i>
											<span class="noOfBed1">3</span>bed
										</li>
										<li>
											<i class="fa fa-bath" aria-hidden="true"></i><span class="noOfToilet1">3</span>toilet
										</li>
										<li>3.865sqft</li>
									</ul>
								</li>
								<li class="lightColor">Stree View</li>
								<li class="lightColor">Mirpur, Dhaka</li>
							</ul>
						</div>
						<a href="buy.php"><div class="hide" id="overlay1"></div></a>	
					</div>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-12" id="singlePropertyView2">
					<div class="singlePropertyView">
						<div class="propertyImage"></div>

						<a href="#" class="heart"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
						<div class="singlePropertyinfo">
							<ul>
								<li>$<span class="price2">20000</span></li>
								<li>
									<ul class="propertyInfo">
										<li>
											<i class="fa fa-bed" aria-hidden="true"></i>
											<span class="noOfBed2">3</span>bed
										</li>
										<li>
											<i class="fa fa-bath" aria-hidden="true"></i><span class="noOfToilet2">2</span>toilet
										</li>
										<li>3.865sqft</li>
									</ul>
								</li>
								<li class="lightColor">Stree View</li>
								<li class="lightColor">Mirpur, Dhaka</li>
							</ul>
						</div>
						<a href="buy.php"><div  class="hide" id="overlay2"></div></a>
					</div>				
				</div>

				<div class="col-md-3 col-sm-4 col-xs-12" id="singlePropertyView3">
					<div class="singlePropertyView">
						<div class="propertyImage"></div>

						<a href="#" class="heart"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
						<div class="singlePropertyinfo">
							<ul>
								<li>$<span class="price3">1200</span></li>
								<li>
									<ul class="propertyInfo">
										<li>
											<i class="fa fa-bed" aria-hidden="true"></i>
											<span class="noOfBed3">3</span>bed
										</li>
										<li>
											<i class="fa fa-bath" aria-hidden="true"></i><span class="noOfToilet3">2</span>toilet
										</li>
										<li>3.865sqft</li>
									</ul>
								</li>
								<li class="lightColor">Stree View</li>
								<li class="lightColor">Mirpur, Dhaka</li>
							</ul>
						</div>
						<a href="buy.php"><div class="hide" id="overlay3"></div></a>
					</div>				
				</div>

				<div class="col-md-3 col-sm-4 col-xs-12" id="singlePropertyView4">
					<div class="singlePropertyView">
						<div class="propertyImage"></div>

						<a href="#" class="heart"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
						<div class="singlePropertyinfo">
							<ul>
								<li>$<span class="price4">1500</span></li>
								<li>
									<ul class="propertyInfo">
										<li>
											<i class="fa fa-bed" aria-hidden="true"></i>
											<span class="noOfBed4">3</span>bed
										</li>
										<li>
											<i class="fa fa-bath" aria-hidden="true"></i><span class="noOfToilet4">2</span>toilet
										</li>
										<li>3.865sqft</li>
									</ul>
								</li>
								<li class="lightColor">Stree View</li>
								<li class="lightColor">Mirpur, Dhaka</li>
							</ul>
						</div>
						<a href="buy.php"><div class="hide" id="overlay4"></div></a>
					</div>				
				</div>
			</div> <!-- row	 -->
		</div> 	<!-- catergory	 -->

		<div class="catergory">
		
	</div>
</section>
<!-- prooerty list view ends-->

<?php include "footer.php"; ?>
