		   <div class="sub-cate">
				<div class=" top-nav rsidebar span_1_of_left">
						<h3 class="cate">CATEGORIES</h3>
		 <ul class="menu">
		<li class="item1"><a href="#">Electronics<img class="arrow-img" src="images/arrow1.png" alt=""/> </a>
			<ul class="cute">
				<li class="subitem1"><a href="mobiles.php?ptypeid=1&pcid=1">Mobiles</a></li>
				<li class="subitem2"><a href="laptops.php?ptypeid=1&pcid=2">Laptops</a></li>
				<li class="subitem3"><a href="cameras.php?ptypeid=1&pcid=3">Cameras </a></li>
                <li class="subitem3"><a href="television.php?ptypeid=1&pcid=4">Televisions </a></li>
			</ul>
		</li>
		<li class="item2"><a href="#">Men <img class="arrow-img " src="images/arrow1.png" alt=""/></a>
			<ul class="cute">	<li class="subitem1"><a href="footware-men.php">Footware </a></li>
				<li class="subitem2"><a href="clothing-men.php">Clothing</a></li>
				<li class="subitem3"><a href="watches-men.php">Watches</a></li>
			</ul>
		</li>
		<li class="item3"><a href="#">Women<img class="arrow-img img-arrow" src="images/arrow1.png" alt=""/> </a>
			<ul class="cute">
				<li class="subitem1"><a href="footware-women.php">Footware </a></li>
				<li class="subitem2"><a href="clothing-women.php">Clothing</a></li>
				<li class="subitem3"><a href="watches-women.php">Watches</a></li>
			</ul>
		</li>
		<li class="item4"><a href="#">Kids <img class="arrow-img img-left-arrow" src="images/arrow1.png" alt=""/></a>
			<ul class="cute">
				<li class="subitem1"><a href="footware-kids.php">Footware </a></li>
				<li class="subitem2"><a href="clothing-kids.php">Clothing</a></li>
				<li class="subitem3"><a href="watches-kids.php">Watches</a></li>
			</ul>
		</li>
        <li class="item5"><a href="#">Books and Media <img class="arrow-img img-left-arrow" src="images/arrow1.png" alt=""/></a>
			<ul class="cute">
				<li class="subitem1"><a href="books.php">Books </a></li>
				<li class="subitem2"><a href="gaming.php">Gaming</a></li>
				<!--<li class="subitem3"><a href="product.php">Watches</a></li>-->
			</ul>
		</li>				
			
	</ul>
					</div>
				<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
					<div class=" chain-grid menu-chain">
	   		     		<a href="#"><img class="img-responsive chain" src="images/wat.jpg" alt=" " /></a>	   		     		
	   		     		<div class="grid-chain-bottom chain-watch">
		   		     		<span class="actual dolor-left-grid"></span>
		   		     		<span class="reducedfrom"></span>  
		   		     		<h6></h6>  		     			   		     										
	   		     		</div>
	   		     	</div>
	   		     	 <a class="view-all all-product" href="#">VIEW ALL PRODUCTS<span> </span></a> 	
		</div>      
</div>