<?php
ob_start();
session_start();
require_once("functions.php");
?>
<script>
$(document).ready(function(){
	
	$(".shopping-cart-box").fadeOut();
		
	$(".form-item").submit(function(e){
		
		var form_data = $(this).serialize();
		var button_content = $(this).find('button[type=submit]');
		button_content.html('İşleniyor...'); //Loading button text 
		$.ajax({ //make ajax request to cart_process.php
			url: "../pages/cart_process.php",
			type: "POST",
			dataType:"json", //expect json value from server
			data: form_data
		}).done(function(data){ //on Ajax success
			$("#cart-info").html(data.items); //total items in cart-info element
			button_content.html('<i class="glyphicon glyphicon-shopping-cart"></i>  SEPETE EKLE'); //reset button text to original text
			$("#cart-info").html('<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>  Sepetim (  )');
			alert("Ürün Sepetinize Eklendi!"); //alert user
			location.reload();
			if($(".shopping-cart-box").css("display") == "block"){ //if cart box is still visible
				$(".cart-box").trigger( "click" ); //trigger click to update the cart box.			
			}
		})
		e.preventDefault();
	});

	//Show Items in Cart
	$( ".cart-box").click(function(e) { //when user clicks on cart box
	
		e.preventDefault(); 
		$(".shopping-cart-box").fadeIn(); //display cart box
		$("#shopping-cart-results").html('<img src="../images/ajax-loader.gif">'); //show loading image
		$("#shopping-cart-results" ).load( "../pages/cart_process.php", {"load_cart":"1"}); //Make ajax request using jQuery Load() & update results
	
	});
	
	//Close Cart
	$( ".close-shopping-cart-box").click(function(e){ //user click on cart box close link
		e.preventDefault(); 
		$(".shopping-cart-box").fadeOut(); //close cart-box
	});
	
	//Remove items from cart
	$("#shopping-cart-results").on('click', 'a.remove-item', function(e) {
		e.preventDefault(); 
		var pcode = $(this).attr("data-code"); //get product code
		$(this).parent().fadeOut(); //remove item element from box
		
		$.getJSON( "/pages/cart_process.php", {"remove_code":pcode} , function(data){ //get Item count from Server
			$("#cart-info").html(data.items); //update Item count in cart-info
			$(".cart-box").trigger( "click" ); //trigger click on cart-box to update the items list
			location.reload();
			$("#cart-info").html('<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>  Sepetim ( <?php echo count($_SESSION["products"]);?>  )');
			
		});
		
	});

});
</script>
<div class="header-container ">
<div class="header">
        <p class="clearfix">
            <a class="logo" href="/" title="arıcımdan.com anasayfasına dön">
                arıcımdan.com anasayfasına dön</a>
        </p>
        <form id="searchSuggestionForm" action="/inc/islemler.php?islem=arama" method="post">
        <div id="searchSuggestionLoadingWrapper"><div id="searchSuggestionLoading"></div></div><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input type="text" id="searchText" name="query_text" placeholder="Kelime veya mağaza adı ile ara" title="Kelime veya mağaza adı ile ara" required="required" autocomplete="off">
        <button type="submit" value="Ara"></button>
        <a href="">
            Detaylı Arama</a>
    	</form>
        
	<a href="#" class="cart-box" id="cart-info">
    <i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
      Sepetim (
	  <?php 
			if(isset($_SESSION["products"])){
				echo count($_SESSION["products"]); 
			}else{
				echo 0; 
			}
	 ?> )</a>
    <div class="shopping-cart-box">
    <a href="#" class="close-shopping-cart-box" >Kapat</a>
    <h5>Alışveriş Sepetiniz</h5>
        <div id="shopping-cart-results">
        </div>
    </div>
    
    <ul class="user-unlogin">
     	<?php if($_SESSION['SESS_MEMBER_ID']){?>
        <li class="login-text">
        <a rel="nofollow" <?php if($_SESSION['SESS_MEMBER_UYELIK']==0){?> href="" <?php }?><?php if($_SESSION['SESS_MEMBER_UYELIK']==1){?> href="/memberpanel/pages/main-page.php" <?php }?>>
        <?php echo $_SESSION['SESS_MEMBER_NAME']." ".$_SESSION['SESS_MEMBER_LASTNAME'];?></a>
        </li>
        <li class="register-text">
         <a rel="nofollow" href="/logout">Çıkış</a>
        </li>
        <?php }?>
        
        <?php if($_SESSION['SESS_USER_ID']){?>
        <li class="login-text">
        <a rel="nofollow" href="/user">
        <?php echo $_SESSION['SESS_USER_NAME']." ".$_SESSION['SESS_USER_LASTNAME'];?></a>
        </li>
        <li class="register-text">
         <a rel="nofollow" href="/userlogout">Çıkış</a>
        </li>
        <?php }?>
        
        <?php if(!$_SESSION['SESS_MEMBER_ID'] and !$_SESSION['SESS_USER_ID']){?>
        <li class="login-text">
            <a rel="nofollow" href="/uyegiris">
                Giriş Yap</a>
        </li>
        <li class="register-text">
            <a rel="nofollow" href="/yeniuyelik">
                Üye Ol</a>
        </li>
        <?php }?>
    </ul>
</div>
</div>