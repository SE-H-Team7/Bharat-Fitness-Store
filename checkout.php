

Add ajax code here to send details to addtocart.php when the cart is modified so the changes are reflected to database
write the axaj code in changeQuantity function..
and also handle quantity =0 case...


























<!DOCTYPE HTML>
<html>
<head>
<title>Shape an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template| Checkout :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shape Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
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
	   <div class="container">
		  <div class="check_box">
		<div class="col-md-9 cart-items">
			 <h1>My Shopping Bag (<span id="numofitems"></span>)</h1>

				 <div id="cart_items">

</div>
		 </div>
		 <div class="col-md-3 cart-total">
			 <a class="continue" href="#">Continue to basket</a>
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span id="total_items_cost" class="total1"></span>
				 <span>Service Charges</span>
				 <span id="total_service_charges" class="total1"></span>
				 <div class="clearfix"></div>
			 </div>
			 <ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>
			   <li id="final_cost" class="last_price"><span></span></li>
			   <div class="clearfix"> </div>
			 </ul>


			 <div class="clearfix"></div>
			 <a class="order" href="#">Place Order</a>
			</div>
			<div class="clearfix"></div>
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
				   <p>Copyright &copy; 2017 BFS. All Rights Reserved . Design by Team 7</p>
			    </div>
        	</div>
        </div>

				<script>


					var productdetails=0;
					var sessionproddetails=0;
					var total_service_charges=0;
					var total_items_cost=0;
					var finalitems=[];
					var numofitems=0;

					if (sessionStorage["items"]==undefined){
						$("#cart_items").html("<h1>Nothing in Cart</h1>");
					}
					else{
						//alert("Yes there is something!!");

								var items=sessionStorage["items"];
								items=items.split("&");
								//console.log(sessionStorage["items"]);
								//sessionStorage["items"]=undefined;
								var item=0;
								for(var i =0;i<items.length;i++){
									items[i]=items[i].split(",");

								}


								for(var i=0;i<items.length;i++){
									item=items[i];
									productdetails=item.slice(0,4).join("_");
									sessionproddetails=item.slice(0,4).join(",");
									//console.log(productdetails);
									//name,category,brand,cost,quantity
									//console.log($("img[src='images/equipments/"+item[1]+"/"+item[0]+"/"+item[2]+"/1.jpg']").attr("src"));
									var temp=item[3]*item[4];
									total_items_cost+=temp;
									total_service_charges+=temp*0.01;
									numofitems+=parseInt(item[4]);
									if ($("img[src='images/equipments/"+item[1]+"/"+item[0]+"/"+item[2]+"/1.jpg']").attr("src")!=undefined){
										//alert("Yes exists!!");

										var a=$("#"+productdetails+"_qty");
										//console.log(a);
										//console.log(sessionproddetails);
										finalitems.splice(finalitems.indexOf(sessionproddetails+","+a.val()),1);
										var qt=parseInt(a.val())+parseInt(item[4]);
										a.attr("value",qt);
										finalitems.push(sessionproddetails+","+qt);
									//	console.log(finalitems);
										var b=$("#"+productdetails+"_servcharges");
										b.html(parseInt(item[3])*0.01*qt);
										var c=$("#"+productdetails+"_subtot");
										c.html(parseInt(item[3])*qt);

									}
									else{
									//alert("Doesn't exists !!");
										$("#cart_items").append(" \
										<div class='cart-header'> \
											<div class='close'> </div> \
											 <div class='cart-sec simpleCart_shelfItem'> \
												 <div class='cart-item cyc'> \
														<img src='"+"images/equipments/"+item[1]+"/"+item[0]+"/"+item[2]+"/1.jpg"+"' class='img-responsive' alt=''> \
												 </div> \
													<div class='cart-item-info'> \
												 <h3><a href='#'>"+item[0].toUpperCase()+"</a><span>"+item[2].toUpperCase()+"</span> \
												 </h3> \
												 <h2> \
												 <span>₹"+item[3]+" per Quantity</span><br> \
												 Sub Total₹<span id='"+productdetails+"_subtot' >"+eval("parseInt(item[3])*parseInt(item[4])")+"</span> \
												 </h2> \
												 <ul class='qty'> \
													 <li><p>Size : 5</p></li> \
													 <li><p>Qty : <input id='"+productdetails+"_qty' size='5'  value='"+item[4]+"' ></p></li> \
												 </ul> \
														<div class='delivery'> \
														<p>Service Charges : ₹<span id='"+productdetails+"_servcharges'>"+eval("parseInt(item[3])*0.01*parseInt(item[4])")+"</span></p> \
														<span>Delivered in 2-3 bussiness days</span> \
														<div class='clearfix'></div> \
														 </div> \
													</div> \
													<div class='clearfix'></div> \
											 </div></div> \
										 ");

										finalitems.push(sessionproddetails+","+item[4]);

									}

									//console.log(finalitems);

								}



								$("#numofitems").html(" "+numofitems+" ");
								$("#total_items_cost").html(" "+total_items_cost+" ");
								//console.log("hi "+total_items_cost)
								$("#total_service_charges").html(" "+total_service_charges+" ");
								$("#final_cost").html(" "+eval("total_items_cost+total_service_charges")+" ");
								sessionStorage["items"]=finalitems.join("&");

					}



function changeQuantity(ev,prod){
//change total_items_cost, total_service_charges, servcharges, final_cost

//console.log(ev.target.value);
var v=ev.target.value;
var item=prod.split("_");
$("#"+prod+"_servcharges").html(parseInt(item[3])*0.01*parseInt(v));
var prevquantity=parseInt($("#"+productdetails+"_subtot").html())/parseInt(item[3]);
//console.log("prevquantity="+prevquantity);
//console.log(total_items_cost);
total_items_cost=total_items_cost-parseInt($("#"+productdetails+"_subtot").html());
//console.log(total_items_cost);
var cost=parseInt(item[3])*parseInt(v);
//console.log(cost);
total_items_cost=total_items_cost+cost;
//console.log(total_items_cost);
total_service_charges=cost*0.01;
//console.log(total_service_charges);
$("#total_items_cost").html(" "+eval(total_items_cost)+" ");
$("#total_service_charges").html(" "+eval(total_service_charges)+" ");
$("#final_cost").html(" "+eval("total_items_cost+total_service_charges")+" ");
$("#"+prod+"_subtot").html(" "+eval(cost)+" ");
var items=sessionStorage["items"].split("&");
items.splice(items.indexOf(item.join(",")+","+prevquantity),1);
items.push(item.join(",")+","+v);
//console.log(items);
sessionStorage["items"]=items.join("&");


}



$(document).ready(function(c) {
	$('.close').on('click', function(c){
		$(this).closest('div.cart-header').fadeOut('slow', function(c){
			$(this).closest('div.cart-header').remove();
		});
		});
	});

//console.log($("input[id$='_qty']").attr("id"));
	$("input[id$='_qty']").on("change",function(){changeQuantity(event,$(this).attr("id").split("_").splice(0,4).join("_"))});


				</script>





</body>
</html>
