<?php
session_start(); //start session
require_once('../inc/config.inc.php'); //include config file
setlocale(LC_MONETARY,"tr_TR"); // US national format (see : http://php.net/money_format)

############# add products to session #########################
if(isset($_POST["productcode"]))
{

	foreach($_POST as $key => $value){
	  $new_product[$key] = filter_var($value, FILTER_SANITIZE_STRING); //create a new product array 
	}

	//we need to get product name and price from database.
	$statement = $mysqli_conn->prepare("SELECT memberid, id, baslik, fiyat FROM ilanlar WHERE id=?");
	$statement->bind_param('s', $new_product['productcode']);
	$statement->execute();
	$statement->bind_result($member_id, $ilan_no, $product_name, $product_price);
	

	while($statement->fetch()){ 
		$new_product["member_id"] = $member_id; //fetch product name from database
		$new_product["ilan_no"] = $ilan_no;  //fetch product price from database
		$new_product["product_name"] = $product_name;  //fetch product image from database
		$new_product["product_price"] = $product_price;  //fetch product image from database
		$new_product["product_qty"] = $_POST['product_qty'];
		
		if(isset($_SESSION["products"])){  //if session var already exist
			if(isset($_SESSION["products"][$new_product['productcode']])) //check item exist in products array
			{
				unset($_SESSION["products"][$new_product['productcode']]); //unset old item
			}			
		}

	$_SESSION["products"][$new_product['productcode']] = $new_product;//update products with new item array	
	
	}

$total_items = count($_SESSION["products"]); //count total items
die(json_encode(array('items'=>$total_items))); //output json 

}

################## list products in cart ###################
if(isset($_POST["load_cart"]) && $_POST["load_cart"]==1)
{

	if(isset($_SESSION["products"]) && count($_SESSION["products"])>0){ //if we have session variable
		$cart_box = '<ul class="cart-products-loaded">';
		$total = 0;
		foreach($_SESSION["products"] as $product){ //loop though items and prepare html content
			
			//set variables to use them in HTML content below
			$member_id = $product["member_id"]; 
			$ilan_no = $product["ilan_no"];
			$product_name = $product["product_name"];
			$product_price = $product["product_price"];
			$product_code = $product["productcode"];
			$product_qty =  $product["product_qty"];
			
			$cart_box .=  "<li><table align='left' width='755px'><tr><td>$product_name</td><td>$product_qty Adet</td><td>$currency ".sprintf("%01.2f", ($product_price * $product_qty)). " </td><td><a href=\"#\" class=\"remove-item\" data-code=\"$product_code\">&times;</a></td></tr></table></li>";
			$subtotal = ($product_price * $product_qty);
			$total = ($total + $subtotal);
		}
		$cart_box .= "</ul>";
		$cart_box .= "<div class='clearfix'></div>";
		$cart_box .= '<div class="cart-products-total">
						Toplam :  '.$currency.sprintf("%01.2f",$total).'
						</div><br/><a href="/satinal">
<div style="float:right; background-color: #ff6c00;border-radius: 4px;font-size: 14px;font-weight: 900;margin-bottom: 10px;cursor: pointer;color: #FFFFFF;padding: 8px;-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;transition: all 0.3s ease 0s;">SİPARİŞİ TAMAMLA</div></a>';
		die($cart_box); //exit and output content
	}else{

		$cart_box .= "<div style='text-align:center'><img src='../images/cartEmpty.png' height='90px' width='90px'><br/> <br/>Alışveriş Sepetiniz Boş<br/> <a href='/'>Alışverişe Devam</a></div>";
		die($cart_box);
	}
}

################# remove item from shopping cart ################
if(isset($_GET["remove_code"]) && isset($_SESSION["products"]))
{
	$product_code   = filter_var($_GET["remove_code"], FILTER_SANITIZE_STRING); //get the product code to remove

	if(isset($_SESSION["products"][$product_code]))
	{
		unset($_SESSION["products"][$product_code]);
	
	}
	
 	$total_items = count($_SESSION["products"]);
	die(json_encode(array('items'=>$total_items)));

}
echo $_SESSION['SESS_MEMBER_ID'];
?>
<meta charset="utf-8">