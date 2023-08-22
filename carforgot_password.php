<!DOCTYPE html>
<html lang="en">
<head>
    
    
    <meta charset="UTF-8">
    <title>Login in CodeIgniter using Ajax from Scratch</title>
    <!--Include Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--Include Bootstrap-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <style>
    

        #login .container #login-row #login-column #login-box {
            margin-top: 120px;
            max-width: 500px;
            height: 140px;
            border: 1px solid #9C9C9C;
            /* background-image: url(https://img.freepik.com/free-vector/mandala-illustration_53876-75291.jpg?size=626&ext=jpg&ga=GA1.2.782802263.1686637376&semt=ais); */
        }

        #login .container #login-row #login-column #login-box #login-form {
            padding: 10px;
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
                    <div id="login-box" class="col-md-12">
                        
                        <div id="login-form" class="form">
                            
                            <div class="form-group text-dark">
                            <label for="forgotpassword">Forgot Password:</label><br>
                                <input type="text" class="form-control" name="forgotpassword" id="mailid" placeholder="enter your email address">
                            </div>
                            
                            <div class="form-group text-dark">
                                <center><input type="submit" id="forgotid" name="login" class="btn btn-outline-primary btn-md"></center>
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
    $(document).on('click', '#forgotid', function(){
		var email = $('#mailid').val();
        console.log("Clicl below link to reset user password");
        console.log("http://localhost/Cd/index.php/Car_login/carreset_password/old_pass?email="+email+"");
		$.ajax({
                url: "<?php echo site_url('/Car_login/send_mail') ?>",
                method: 'POST',
                data: {email:email},
                success: function (res) {
                    var res = $.parseJSON(res);
                            let {
                            code,
                            msg
                            } = res; 
                            if (code === 1) {
                                toastr.success(msg,'Success!');
							 //   window.location.href = '<?php echo site_url("/logincontroller1/forgot_password") ?>';	
                            }else{
                                toastr.error(msg,'Error');
                                return false;
                            }
				}
			});
	});

});
</script>
</body>
</html>
