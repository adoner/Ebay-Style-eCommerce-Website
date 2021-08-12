<?php
ob_start();
session_start();
$no_visible_elements = true;
include('header.php');

if($_POST){
	
		if($_POST['login']=="" or $_POST['password']==""){
			header("location: login.php");
			
			}
					
//Create query
$member=$db->query("SELECT * FROM users WHERE login='".$_POST['login']."' AND passwd='".md5($_POST['password'])."'")->fetch();
$qry=$db->query("SELECT COUNT(*) as num FROM users WHERE login='".$_POST['login']."' AND passwd='".md5($_POST['password'])."'");
$rows = $qry->fetchColumn();
		
		
		//echo $rows;
			//Check whether the query was successful or not
			if($rows==1) {
				//Login Successful
				@session_regenerate_id();
				$_SESSION['USER_ID'] = $member['member_id'];
				$_SESSION['USER_FIRST_NAME'] = $member['firstname'];
				$_SESSION['USER_LAST_NAME'] = $member['lastname'];
				session_write_close();
				header("location: main.php");
				exit();
			}else {
				//Login failed
				header("location: login.php");
				exit();
			}
}else{

 ?>
 <div style="position:relative; margin:0 auto; margin-top:100px">
    <div class="row">
        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">
                Lütfen kullanıcı adı ve şifre ile giriş yapınız.
            </div>
            <form class="form-horizontal" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" placeholder="Kullanıcı adı" name="login">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" class="form-control" placeholder="Şifre" name="password">
                    </div>
                    <div class="clearfix"></div>

                    <p class="center col-md-5">
                        <button type="submit" class="btn btn-primary">Giriş</button>
                    </p>
                </fieldset>
            </form>
        </div>
        <!--/span-->
    </div><!--/row-->
</div>
<?php
	}
 require('footer.php');
?>