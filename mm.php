<html>
	
<title>SHADOW IT URSELF</title>
<h1><center>HD shades.in</center></h1>
	
<body background="C:\Users\ADMIN\Desktop\lab\bg.jpg">	
		<?php
    
  		if(isset($_POST['reg']))
 
     		{
    
  			$aaa=$_POST['email'];
 
				$bbb=$_POST['pass'];

      			$connection = mysql_connect("localhost","root","");

        		mysql_select_db("a", $connection);
  
      		$qry = 'select * from login where user="'.$aaa.'" and pass="'.$bbb.'"';

	        	$result = mysql_query($qry,$connection);
	 
       	if(!$result || mysql_num_rows($result) <= 0)
	  
      	{
	
        		echo "Username and Password doesn't match ";

	        	}
	        	
else

	        	{
	      
  		//echo "done";

	        		header('Location: next.html');
	
        	}

      			
// $host="localhost"; 
// Host name 

// $db_name="a"; 
// Database name 
//
 $tbl_name="login";
 // Table name 
//
 // Connect to server and select databse.

// mysql_connect("$host", "", "")or die("cannot connect");
 
// mysql_select_db("$db_name")or die("cannot select DB");

// // Define $myusername and $mypassword
 
 
// echo $aaa.$bbb;

// die();
// To protect MySQL injection (more detail about MySQL injection)

// $aa = stripslashes($aaa);

// $bb = stripslashes($bbb);

// $az = mysql_real_escape_string($aa);

// $bz  = mysql_real_escape_string($bb);

// $sql="SELECT * FROM $tbl_name WHERE user='$az' and pass='$bz'";

//echo $sql;
//die();



// $result=mysql_query($sql);

// // Mysql_num_row is counting table row

// $count=mysql_num_rows($result);

// // If result matched $myusername and $mypassword, table row must be 1 row

// if($count==1)
{

// header('Location: next.html');

// // Register $myusername, $mypassword and redirect to file "login_success.php"
//
 }

// else
 {

//echo "Wrong Username or Password";
// 
}
	
      		}
		
?>

		<div class="container">

			<br><br><br><br>
	
		<div class="row">
		
        <form class="form-horizontal" role="form" method="post" action="#" id="register-form">
	
	          	<div class="row">
		    
      		<div class="form-group">

 <h4 align="centre">Login</h4>		          
			<label for="Name" class="col-sm-4 control-label">Email:<font color = "red" size = "3">*</font></label>
	
	            		<div class="col-sm-4">
		 
             			<input type="text" name="email" class="form-control" id="email" placeholder="Email" data-validation-engine="validate[required]" data-errormessage-value-missing="Email is required!">
		
            		</div>
	
	          		</div>
		    
       	</div>

	
	           	<div class="row">

		           		<div class="form-group">

			              	<label for="MobileNo" class="col-sm-4 control-label">Password:<font color = "red" size = "3">*</font></label>
	
		            	<div class="col-sm-4">
	
		              		<input type="password" name="pass" class="form-control" id="pass" placeholder="Password" data-validation-engine="validate[required]" data-errormessage-value-missing="Mobile Number is required!">
	
		            	</div>
		       
   		</div>                
					
</div>

				 
   <br/>
			 
       <div class="row">
			
        	<div class="form-group">

				          	<!-- <div class="col-sm-offset-2 col-sm-10"> -->

				          	<div align="left">

				            	<button type="submit" class="btn btn-primary" id="register" name="reg">Login</button>
				
            	<br><br>
							<div class="col-sm-2"></div>

				          		<!-- <button type="submit" class="btn btn-primary" id="reset" name="reset">Start Over</button> -->

				          	</div>
	
		       		</div>
			    
   	</div>
		     	</form>
		
	</div><!-- end of div row -->
		
</div>
	
	<br>
	



</body>
	
</html>