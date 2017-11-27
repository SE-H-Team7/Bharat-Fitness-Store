<?php
include "db.php";
	echo "<h3 class='m_1'>Search Results</h3>";
	$keyword = $_POST["keyword"];
	$keyword=strtolower($keyword);
	$sql = "SELECT * FROM equipments WHERE keywords LIKE '%$keyword%'";
	$run_query = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($run_query)){
			$eqid    = $row['eqid'];
			$eqcatid   = $row['eqcatid'];
			$eqbrandid = $row['eqbrandid'];
			$eqname = $row['eqname'];
			$eqcost = $row['eqcost'];
			$sql2 = "select e.eqname as name, ec.eqcategory as category, eb.eqbrandname as brand, e.eqcost as cost from equipments e, equipments_categories ec, equipments_brands eb where e.eqcatid=ec.eqcatid and e.eqbrandid=eb.eqbrandid and e.eqcatid = $eqcatid and e.eqbrandid = $eqbrandid";
			$run_query2 = mysqli_query($con,$sql2);
			while($row2=mysqli_fetch_array($run_query2)){
			extract($row2);
			$name=strtolower($name);
			$category=strtolower($category);
			$brand=strtolower($brand);
				echo "
				
				<div class='content_grid'>
										<div class='col_1_of_3 span_1_of_3 simpleCart_shelfItem'>
											<a href='images/nutrition/$category/$brand/$name/description.txt'>
												<div class='inner_content clearfix'>
												 <div class='product_image'>
													<img src='images/equipments/$category/$name/$brand/1.jpg' class='img-responsive' alt=''/>
													<a href='' class='button item_add item_1'> </a>	
													<div class='product_container'>
														<div class='cart-left'>
														<p class='title'>$name</p>
														</div>
														<span class='amount item_price'>$cost</span>
														<div class='clearfix'></div>
													</div>		
												</div>
											</div>
											</a>
										</div>";

			}
	}



?>
