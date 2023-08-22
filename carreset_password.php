<!DOCTYPE html>
<html lang="en">
<head>
    
    
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!--Include Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--Include Bootstrap-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <style>
        body {

        /* background-image: url(https://img.freepik.com/premium-vector/abstract-colorful-background-set_1078-535.jpg?size=626&ext=jpg&ga=GA1.1.782802263.1686637376&semt=ais); */

        }

        #login .container #login-row #login-column #login-box {
            margin-top: 100px;
            max-width: 500px;
            height: 300px;
            border: 1px solid #9C9C9C;
            /* background-image: url(https://img.freepik.com/free-vector/mandala-illustration_53876-75291.jpg?size=626&ext=jpg&ga=GA1.2.782802263.1686637376&semt=ais); */
        }

        #login .container #login-row #login-column #login-box #login-form {
            padding: 20px;
        }
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins',sans-serif;
        text-decoration: none;
        }
        footer{
        width: 100%;
        height: 10%;
        text-align: center;
        position: fixed;
        bottom: 0;
        left: 0;
        background: #111;
        }
        footer .bottom{
        width: 100%;
        height: 10%;
        margin-top: 20px;
        text-align: center;
        color: #d9d9d9;
        padding: 0 40px 5px 0;
        }
        footer .bottom a{
            text-align: center;
        color: #eb2f06;
        }

    </style>
</head>
<body>
<footer>   
    
   <div class="bottom">
     <p>Copyright © 2023 All rights reserved</p>
   </div>
 </footer>
<div class="login-wrap">
    <div id="login">
        
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-6">
                        
                        <div id="login-form" class="form">
       
                            <h3 class="text-center text-dark">Reset Password</h3>
                            <input type="hidden" class="txt_id">
                            <div class="form-group text-dark">
                                <h5><label for="password">New Password:</label><br></h5>
                                <input type="hidden" id ="email" name="email" value="<?php echo $_GET['email']; ?>">
                                <input type="text" name="newpass" id="newpass" class="form-control" placeholder="enter new Passowrd">
                            </div>

                            <div class="form-group text-dark"> 
                                <h5><label for="password">Confirm Password:</label><br></h5>
                                <input type="text" name="passconf" id="passconf" class="form-control" placeholder="Re enter new Passowrd">
                            </div>
                            
                            <div class="form-group text-dark">
                            <center><button type="submit" id="resetpass" class="col-md-3 btn btn-danger text-white">Save</button></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$(document).on('click', '#resetpass', function(){
				var flag = 0;

                var email=$("#email").val();		
              
				var new_password=$("#newpass").val();
      
                var confirm_password=$("#passconf").val();
                

				if (new_password == '' || new_password == undefined) {
					$('#newpass').css('border', '1px solid red');
                    toastr.error("Please Enter Password");
					flag = 2;
                    return false;
				}

                if (confirm_password == '' || confirm_password == undefined) {
					$('#passconf').css('border', '1px solid red');
                    toastr.error("Please Enter Confirm Password");
					flag = 3;
                    return false;
				}

				if (new_password !== confirm_password) {
					$('#newpass').css('border', '1px solid red');
                    $('#passconf').css('border', '1px solid red');
                    toastr.error("Please Enter Same Password");
                    return false;
				}
                
				if (flag == 0) {
              
					$.ajax({
						url: "<?php echo site_url('/Car_login/resetpassword') ?>",
						method: 'POST',
						data: 
                        {
                            new_password : new_password,
                            email : email
                        },
                        dataType : 'JSON',

						success:function(data){ 
                            // alert("Password reset link is expired");
                            window.location.href = '<?php echo site_url("Car_login") ?>';
                    }
					});
				}
			});
		});
	</script>

</body>
</html>