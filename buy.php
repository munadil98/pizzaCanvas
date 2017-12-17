<?php include "header.php"; ?>

<!-- prooerty list view -->
<section class="singlePropertyDetails">
	<div class="container">
		<div class="propertyTop" id="propertyTop">
			<div class="row">
				<div class="col-md-12 offset-md-10">
					<a href="#"	><i class="fa fa-heart-o" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>

					<!-- Load Facebook SDK for JavaScript -->
					  <!-- <div id="fb-root"></div>
					  <script>(function(d, s, id) {
					    var js, fjs = d.getElementsByTagName(s)[0];
					    if (d.getElementById(id)) return;
					    js = d.createElement(s); js.id = id;
					    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1";
					    fjs.parentNode.insertBefore(js, fjs);
					  }(document, 'script', 'facebook-jssdk'));</script> -->

					  <!-- Your share button code -->
					  <!-- <div class="fb-share-button" 
					    data-href="localhost/rproperty/search.php" 
					    data-layout="button_count">
					  </div> -->
				</div>
			</div>
			<div class="row">
				<div class="col-md-7">
					<div class="propertyAttribute">
						<p>Address: Mirpur DOHS</p>
						<p>
							<span>1 bed</span>
							<span>1 bath</span>
							<span>846 sqft</span>
							<span>Condo</span>

						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="propertyPrice">
						<h4>FOR Rent</h4>
						<p>$10,995,000</p>
					</div>
				</div>
			</div> <!-- row -->
		</div> 

		<div class="row">
			<div class="col-md-8">
				<div class="SinglePropertyImage">
					<img id="bigImage" src="images/property/house1.jpg">
				</div>
				<div class="carousel1">
					<div class="myCarousel owl-carousel owl-theme">
					     <div class="item"><img id="property1" src="images/property/house1.jpg" alt="bed"></div>
					     <div class="item"><img id="property2" src="images/property/house2.jpg" alt="bed"></div>
					     <div class="item"><img id="property3" src="images/property/house3.jpg" alt="bed"></div>
					     <div class="item"><img id="property4" src="images/property/house4.jpg" alt="bed"></div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sendRequest">
					<form>
					  <div class="form-group">
					    <label for="name">Name:</label>
					    <input type="name" class="form-control" id="name">
					  </div>
					  <div class="form-group">
					    <label for="email">Email address:</label>
					    <input type="email" class="form-control" id="email">
					  </div>
					  <div class="form-group">
					    <label for="phone">Phone:</label>
					    <input type="phone" class="form-control" id="phone">
					  </div>
					  <div class="checkbox">
					    <label><input type="checkbox"> Remember me</label>
					  </div>
					  <button type="submit" class="btn btn-default">Send Request</button>
					</form>
				</div>
			</div>
		</div> <!-- row -->

		<div class="row">

			<div class="col-md-12">
			<div class="detailInfo">
				
				<h3>Home Details</h3>
				<h4>Description</h4>
					<p>Move right into this high floor and oversized 1 Bedroom home in the heart of the Upper East Side. A formal entry gallery leads into a large sunken living room facing North with an abundance of natural sunlight throughout the day. The windowed marble kitchen boasts tons of storage, great counter space and updated appliances including a built-in wine cooler. The Master Bedroom also faces North and features 2 see more...</p>
				<h4>Features</h4>
				<div class="row">
					<div class="col-md-6">
						<h5>Listing info</h5>
						<p>2 Bed</p>
						<p>1 Drawing</p>
						<p>1 Kitchen</p>
						<p>1 Dining</p>
						<p>2 Bathroom</p>
					</div>
				
					<div class="col-md-6">
						<h5>Price info</h5>
						<p>Floor size: 1600sqft</p>
						<p>Monthly Rent: 20,00 BDT</p>

						<p></p>
					</div>
				</div>
			</div>	
			</div>
			
		</div> <!-- row -->

		<div class="row">
			<div class="col-md-12">
				<div class="similarProperty">
					<div class="carousel">
						<h3>Similar Properties</h3>
					<div class="similarPropertyCarousel owl-carousel owl-theme">
					     <div class="item"><a href="#"><img id="property1" src="images/property/house1.jpg" alt="bed"></a></div>
					     <div class="item"><a href="#"><img id="property2" src="images/property/house2.jpg" alt="bed"></a></div>
					     <div class="item"><a href="#"><img id="property3" src="images/property/house3.jpg" alt="bed"></a></div>
					     <div class="item"><a href="#"><img id="property4" src="images/property/house4.jpg" alt="bed"></a></div>
					     <div class="item"><a href="#"><img id="property4" src="images/property/house1.jpg" alt="bed"></a></div>
					     <div class="item"><a href="#"><img id="property4" src="images/property/house1.jpg" alt="bed"></a></div>
					     <div class="item"><a href="#"><img id="property4" src="images/property/house1.jpg" alt="bed"></a></div>
					</div>
				</div>
				</div>
			</div>		
		</div>
		
	</div>
</section>
<!--singlePropertyDetails ends-->

<?php include "footer.php"; ?>
