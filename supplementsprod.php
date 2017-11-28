<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Equipment Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shape Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/simpleCart.min.js"> </script>
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
<script src="js/jquery.easydropdown.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});

			if(sessionStorage["uname"]!=undefined){
				$("#username").html("<b>"+sessionStorage["uname"]+"</b>");
			}




		});
		</script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			   </script>
</head>
<body>
  <div class="header">
	<div class="container">
		<div class="header-top">
      		 <div class="logo">
				<a href="index.php"><img src="images/logo.png" alt=""/></a>
			 </div>
		   <div class="header_right">
			 <ul class="social">
				<li><a href=""> <i class="fb"> </i> </a></li>
				<li><a href=""><i class="tw"> </i> </a></li>
				<li><a href=""><i class="utube"> </i> </a></li>
				<li><a href=""><i class="pin"> </i> </a></li>
				<li><a href=""><i class="instagram"> </i> </a></li>
			 </ul>
		    <div class="lang_list">
			  <select tabindex="4" class="dropdown">
				<option value="" class="label" value="">En</option>
				<option value="1">English</option>
				<option value="2">French</option>
				<option value="3">German</option>
			  </select>
   			</div>
			<div class="clearfix"></div>
          </div>

					<div id="username" class="header_left">
					<b>HI</b>
					<div class="clearfix"></div>
					</div>



          <div class="clearfix"></div>
		 </div>
		 <div class="apparel_box">
			<ul class="login">
				<li class="login_text"><a href="login.php">Login</a></li>
				<li class="wish"><a href="checkout.php">Wish List</a></li>
				<div class='clearfix'></div>
		    </ul>
		    <div class="cart_bg">
	   		 	  <ul class="cart">
	   		 			<a href="checkout.php">
					    <h4><i class="cart_icon"> </i><p>Cart: <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</p><div class="clearfix"> </div></h4>
					 </a>
				     <h5 class="empty"><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></h5>
				     <div class="clearfix"> </div>
                  </ul>
	   		 	</div>
			  <ul class="quick_access">
				<li class="view_cart"><a href="checkout.php">View Cart</a></li>
				<li class="check"><a href="checkout.php">Checkout</a></li>
				<div class='clearfix'></div>
		     </ul>
			<div class="search">
			   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
			   <input type="submit" value="">
			</div>
		  </div>
		</div>
    </div>

	<div class="main">
	  <div class="content_box">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="menu_box">
				   	  	<h3 class="menu_head">Menu</h3>
								<ul class="nav">
								 <li><a href="apparel.php">About</a></li>
								 <li><a href="equipments.php">Equipments</a></li>
								 <li><a href="apparel.php">Nutrition Supplements</a></li>
								 <li><a href="contact.php">Contact</a></li>
							</ul>
			   	    </div>
			   	    <div class="category">
			   	    	<h3 class="menu_head">Category Options</h3>
			   	    	<ul class="category_nav">
					   	  	<li><a href="#">Men</a></li>
					   	  	<li><a href="#">Women</a></li>
					   	  	<li><a href="#">Kids</a></li>
					   	  	<li><a href="#">Wetsuits</a></li>
					   	  	<li><a href="#">Outerwear</a></li>
					   	</ul>
			   	    </div>
			   	    <div class="category">
			   	    	<h3 class="menu_head">Brand Options</h3>
			   	    	<ul class="category_nav">
					   	  	<li><a href="#">Billabong</a></li>
					   	  	<li><a href="#">Element</a></li>
					   	  	<li><a href="#">o'neill</a></li>
					   	  	<li><a href="#">Oakley</a></li>
					   	  	<li><a href="#">Reef</a></li>
					   	  	<li><a href="#">Quiksilver</a></li>
					   	  	<li><a href="#">Ripcurl</a></li>
					   	  	<li><a href="#">Jackss</a></li>
					   	</ul>
			   	    </div>
			   	    <div class="tags">
				    	<h4 class="tag_head">Tags Widget</h4>
				         <ul class="tags_links">
							<li><a href="#">Kitesurf</a></li>
							<li><a href="#">Super</a></li>
							<li><a href="#">Duper</a></li>
							<li><a href="#">Theme</a></li>
							<li><a href="#">Men</a></li>
							<li><a href="#">Women</a></li>
							<li><a href="#">Equipment</a></li>
							<li><a href="#">Best</a></li>
							<li><a href="#">Accessories</a></li>
							<li><a href="#">Men</a></li>
							<li><a href="#">Apparel</a></li>
							<li><a href="#">Super</a></li>
							<li><a href="#">Duper</a></li>
							<li><a href="#">Theme</a></li>
							<li><a href="#">Responsiv</a></li>
					        <li><a href="#">Women</a></li>
							<li><a href="#">Equipment</a></li>
						</ul>
						<a href="#" class="link1">View all tags</a>
				     </div>
				     <div class="side_banner">
					   <div class="banner_img"><img src="images/pic9.jpg" class="img-responsive" alt=""/></div>
					   <div class="banner_holder">
						  <h3>Now <br> is <br> Open!</h3>
					   </div>
				     </div>
			  </div>
			  <div class="col-md-9">
			    <div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.php" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="home">&nbsp;
                        <?php

include 'db.php' ;
extract($_GET) ;
echo $category; ?>&nbsp;
                        <span>&gt;</span>&nbsp;
                    </li>
                    <li class="home">&nbsp;
                       <?php

include 'db.php' ;
extract($_GET) ;
echo $brand; ?>
                        <span>&gt;</span>&nbsp;
                    </li>
                    <li class="women">
                       <?php

include 'db.php' ;
extract($_GET) ;
echo $name; ?>
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.php">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>



<!-- ----------------------------------------------------------------------------------------------------  -->





<?php

include 'db.php' ;
extract($_GET) ;
$proddetails = "'".$name.",".$category.",".$brand.",".$cost."'";
$f = fopen("images/nutrition/$category/$brand/des.txt", "r");
$txt=fgets($f);

					echo "
					<div class='singel_right'>
										<div class='labout span_1_of_a1'>
										<div class='flexslider'>
										<ul class='slides'>
										 <li data-thumb='images/nutrition/$category/$brand/pic1.jpg'>
											 <img src='images/nutrition/$category/$brand/pic1.jpg'/>
										 </li>
										 <li data-thumb='images/nutrition/$category/$brand/pic2.jpg'>
											 <img src='images/nutrition/$category/$brand/pic2.jpg'/>
										 </li>
										 <li data-thumb='images/nutrition/$category/$brand/pic3.jpg'>
											 <img src='images/nutrition/$category/$brand/pic3.jpg'/>
										 </li>

										</ul>
									 </div>
									</div>
					<div class='cont1 span_2_of_a1 simpleCart_shelfItem'>
					<h1>$name</h1>

					 <div class='price_single'>
					 <span class='amount item_price actual'>₹$cost</span>
					</div>
					<h2 class='quick'>Quick Overview:</h2>
					
					<p class='quick_desc'>$txt</p>
					 <ul class='size'>
					 <h3>Weight</h3>
					 <li><a href='#'>1 lbs</a></li>
					 <li><a href='#'>2 lbs</a></li>
					 <li><a href='#'>3 lbs</a></li>
					 <li><a href='#'>4 lbs</a></li>
					 <li><a href='#'>5 lbs</a></li>
					 <li><a href='#'>10 lbs</a></li>
					</ul>
					<ul class='product-qty'>
						<span>Quantity:</span>
						<select id='quant'>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						</select>
					 </ul>
					 <div class='btn_form button item_add item_1'>

						<input type='button' onclick=\"addtocart(event,$proddetails)\" value='Add to Cart' title=''>

					</div>
					</div>
					<div class='clearfix'></div>
					</div>";

fclose($f);


?>









<!--  ----------------------------------------------------------------------------------------------------  -->
		   <div class="sap_tabs">
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Product Description</span></li>
							  <div class="clear"></div>
						  </ul>
							<div class="resp-tabs-container">
							    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<div class="facts">
									  <ul class="tab_list">
<?php

include 'db.php' ;
extract($_GET) ;

	$f = fopen("images/nutrition/$category/$brand/des.txt", "r");

	while(!feof($f)) { 
	    echo fgets($f) . "<br />";
	} 

	fclose($f);

	?>									 
									 <!--	<li><a>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</a></li>
									  	<li><a>augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigatione</a></li>
									  	<li><a>claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica</a></li>
									  	<li><a>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</a></li>  -->
										
									  </ul>
							        </div>
							     </div>


							 </div>
					      </div>
					 </div>
					 <h3 class="like">You Might Also Like</h3>
				     <ul id="flexiselDemo3">
					 
					<?php


						include "db.php";


							$sql = "select n.supname as name, nc.supcategory as category, n.supbrand as brand, n.supcost as cost from nutrition_supplements n, nutrition_supplements_categories nc where n.supcatid=nc.supcatid";
							$run_query = mysqli_query($con,$sql);
							$count = mysqli_num_rows($run_query);
							if($count > 0){
									while ($row = mysqli_fetch_array($run_query)) {
											extract($row);
											$name=strtolower($name);
											$category=strtolower($category);
											$brand=strtolower($brand);
											echo "<li class='simpleCart_shelfItem'>
												<a class='cbp-vm-image' href='equipmentsprod.php?name=$name&brand=$brand&category=$category&cost=$cost'>
												<div class='inner_content clearfix'>
													<div class='product_image'>
														<img src='images/nutrition/$category/$brand/pic1.jpg'  style='width:210px;height:250px;' class='img-responsive' alt=''/>
														<div class='product_container'>
														   <div class='cart-left'>
															 <p class='title'>$name</p>
															 <p class='title' style='font-size: small;'>$brand</p>

														   </div>
														   <div class='mount item_price price'>₹$cost</div>
														   <div class='clearfix'></div>
													     </div>
													  </div>
								                     </div>
							                    </a>
												<div class='cbp-vm-details'>
													Silver beet shallot wakame tomatillo salsify mung bean beetroot groundnut.
												</div>
												<a class='button item_add cbp-vm-icon cbp-vm-add' href='#'>Add to cart</a>
											</li>";


									}
							}


						?>
					
					







					<!--	<li><img src="images/pic11.jpg" class="img-responsive" /><div class="grid-flex"><a href="#">Syenergy 2mm</a><p>Rs 850</p></div></li>
						<li><img src="images/pic10.jpg" class="img-responsive" /><div class="grid-flex"><a href="#">Surf Yoke</a><p>Rs 1050</p></div></li>
						<li><img src="images/pic9.jpg" class="img-responsive" /><div class="grid-flex"><a href="#">Salty Daiz</a><p>Rs 990</p></div></li>
						<li><img src="images/pic8.jpg" class="img-responsive" /><div class="grid-flex"><a href="#">Cheeky Zane</a><p>Rs 850</p></div></li>
						<li><img src="images/pic7.jpg" class="img-responsive" /><div class="grid-flex"><a href="#">Synergy</a><p>Rs 870</p></div></li>
				     -->
					 
					
					</ul>
				    <script type="text/javascript">
					 $(window).load(function() {
						$("#flexiselDemo3").flexisel({
							visibleItems: 3,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
					    	responsiveBreakpoints: {
					    		portrait: {
					    			changePoint:480,
					    			visibleItems: 1
					    		},
					    		landscape: {
					    			changePoint:640,
					    			visibleItems: 2
					    		},
					    		tablet: {
					    			changePoint:768,
					    			visibleItems: 3
					    		}
					    	}
					    });

					});
				   </script>
				   <script type="text/javascript" src="js/jquery.flexisel.js"></script>

			</div>
		 </div>
		</div>
	    </div>
		<div class="container">
		  <div class="brands">
			 <ul class="brand_icons">
				<li><img src='images/icon1.jpg' class="img-responsive" alt=""/></li>
				<li><img src='images/icon2.jpg' class="img-responsive" alt=""/></li>
				<li><img src='images/icon3.jpg' class="img-responsive" alt=""/></li>
				<li><img src='images/icon4.jpg' class="img-responsive" alt=""/></li>
				<li><img src='images/icon5.jpg' class="img-responsive" alt=""/></li>
				<li><img src='images/icon6.jpg' class="img-responsive" alt=""/></li>
				<li class="last"><img src='images/icon7.jpg' class="img-responsive" alt=""/></li>
			 </ul>
		   </div>
	    </div>
	    <div class="container">
	      <div class="instagram_top">
	      	<div class="instagram text-center">
				<h3><i class="insta_icon"> </i> Instagram feed:&nbsp;<span class="small">#Surfhouse</span></h3>
			</div>
	        <ul class="instagram_grid">
			  <li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/i1.jpg" class="img-responsive"alt=""/></a></li>
			  <li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/i2.jpg" class="img-responsive" alt=""/></a></li>
			  <li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/i3.jpg" class="img-responsive" alt=""/></a></li>
			  <li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/i4.jpg" class="img-responsive" alt=""/></a></li>
			  <li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/i5.jpg" class="img-responsive" alt=""/></a></li>
			  <li class="last_instagram"><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="images/i6.jpg" class="img-responsive" alt=""/></a></li>
			  <div class="clearfix"></div>
			  <div id="small-dialog1" class="mfp-hide">
				<div class="pop_up">
					<h4>A Sample Photo Stream</h4>
					<img src="images/i_zoom.jpg" class="img-responsive" alt=""/>
				</div>
			  </div>
			</ul>
		  </div>
	      <ul class="footer_social">
			<li><a href="#"> <i class="fb"> </i> </a></li>
			<li><a href="#"><i class="tw"> </i> </a></li>
			<li><a href="#"><i class="pin"> </i> </a></li>
			<div class="clearfix"></div>
		   </ul>
	    </div>
	    </div>
        <div class="footer">
			<div class="container">
				<div class="footer-grid">
					<h3>Category</h3>
					<ul class="list1">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">About us</a></li>
					  <li><a href="#">Eshop</a></li>
					  <li><a href="#">Features</a></li>
					  <li><a href="#">New Collections</a></li>
					  <li><a href="#">Blog</a></li>
					  <li><a href="#">Contact</a></li>
				    </ul>
				</div>
				<div class="footer-grid">
					<h3>Our Account</h3>
				    <ul class="list1">
					  <li><a href="#">Your Account</a></li>
					  <li><a href="#">Personal information</a></li>
					  <li><a href="#">Addresses</a></li>
					  <li><a href="#">Discount</a></li>
					  <li><a href="#">Orders history</a></li>
					  <li><a href="#">Addresses</a></li>
					  <li><a href="#">Search Terms</a></li>
				    </ul>
				</div>
				<div class="footer-grid">
					<h3>Our Support</h3>
					<ul class="list1">
					  <li><a href="#">Site Map</a></li>
					  <li><a href="#">Search Terms</a></li>
					  <li><a href="#">Advanced Search</a></li>
					  <li><a href="#">Mobile</a></li>
					  <li><a href="#">Contact Us</a></li>
					  <li><a href="#">Mobile</a></li>
					  <li><a href="#">Addresses</a></li>
				    </ul>
				  </div>
				  <div class="footer-grid">
					<h3>Newsletter</h3>
					<p class="footer_desc">Nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
					<div class="search_footer">
			          <input type="text" class="text" value="Insert Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Insert Email';}">
			          <input type="submit" value="Submit">
			        </div>
			        <img src="images/payment.png" class="img-responsive" alt=""/>
				 </div>
				 <div class="footer-grid footer-grid_last">
					<h3>About Us</h3>
					<p class="footer_desc">Diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,.</p>
                    <p class="f_text">Phone:  &nbsp;&nbsp;&nbsp;00-250-2131</p>
                    <p class="email">Email: &nbsp;&nbsp;&nbsp;<a href="#">info(at)Shape.com</a></p>
                 </div>
				 <div class="clearfix"> </div>
			</div>
		</div>
        <div class="footer_bottom">
        	<div class="container">
        		<div class="copy">
				   <p>Copyright &copy; 2015 Shape. All Rights Reserved . Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			    </div>
        	</div>
        </div>
<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

	<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});


var items=sessionStorage["items"];
var proddetails=0;
var quant=0;
function addtocart(ev,pd){
proddetails=pd;
	//Create a new XHR object
quant=$("#quant").val();
//alert(quant);
	xhr=new XMLHttpRequest();

	//Register event handler
	xhr.onreadystatechange=showMessage;

	//Open & Send
	xhr.open("GET","addtocart.php?user="+sessionStorage["uname"]+"&proddetails="+proddetails+","+quant,true);
	xhr.send();



}

				function showMessage(){
				if(xhr.readyState==4 && xhr.status==200){
						var previtems=sessionStorage["items"];
						//alert(previtems);
						var newitems;
						if(previtems!=undefined)newitems=previtems+"&"+proddetails+","+quant;
						else newitems=proddetails+","+quant;
						sessionStorage.setItem("items",newitems);
						proddetails=null;
						quant=null;

				}


				}




</script>

</body>
</html>
