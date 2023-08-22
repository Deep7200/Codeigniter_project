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
      
        /* body {

          background-image: url(https://img.freepik.com/premium-vector/abstract-colorful-background-set_1078-535.jpg?size=626&ext=jpg&ga=GA1.1.782802263.1686637376&semt=ais);
          
        }

        #login .container #login-row #login-column #login-box {
            margin-top: 120px;
            max-width: 650px;
            height: 370px;
            border: 1px solid #9C9C9C;
            background-image: url(https://img.freepik.com/free-vector/mandala-illustration_53876-75291.jpg?size=626&ext=jpg&ga=GA1.2.782802263.1686637376&semt=ais);
        }

        #login .container #login-row #login-column #login-box #login-form {
            padding: 20px;
        } */

        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');
*
{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Quicksand', sans-serif;
}
body 
{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: #000;
}
section 
{
  position: absolute;
  width: 100vw;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 2px;
  flex-wrap: wrap;
  overflow: hidden;
}
section::before 
{
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  background: linear-gradient(#000,#0f0,#000);
  animation: animate 1.8s linear infinite;
}
@keyframes animate 
{
  0%
  {
    transform: translateY(-100%);
  }
  100%
  {
    transform: translateY(100%);
  }
}
section span 
{
  position: relative;
  display: block;
  width: calc(6.25vw - 2px);
  height: calc(6.25vw - 2px);
  background: #181818;
  z-index: 2;
  transition: 1.5s;
}
section span:hover 
{
  background: #0f0;
  transition: 0s;
}

section .signin
{
  position: absolute;
  width: 400px;
  background: #222;  
  z-index: 1000;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 40px;
  border-radius: 4px;
  box-shadow: 0 15px 35px rgba(0,0,0,9);
}
section .signin .content 
{
  position: relative;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  gap: 40px;
}
section .signin .content h2 
{
  font-size: 1.5em;
  color: #0f0;
  text-transform: uppercase;
}
section .signin .content .form 
{
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 25px;
}
section .signin .content .form .inputBox
{
  position: relative;
  width: 100%;
}
section .signin .content .form .inputBox input 
{
  position: relative;
  width: 100%;
  background: #333;
  border: none;
  outline: none;
  padding: 10px 10px 7.5px;
  border-radius: 4px;
  color: #fff;
  font-weight: 500;
  font-size: 1em;
}
section .signin .content .form .inputBox i 
{
  position: absolute;
  left: 0;
  padding: 10px 10px;
  font-style: normal;
  color: #aaa;
  transition: 0.5s;
  pointer-events: none;
}
.signin .content .form .inputBox input:focus ~ i,
.signin .content .form .inputBox input:valid ~ i
{
  transform: translateY(-7.5px);
  font-size: 0.8em;
  color: #fff;
}
.signin .content .form .links 
{
  position: relative;
  width: 100%;
  display: flex;
  justify-content: space-between;
}
.signin .content .form .links a 
{
  color: #fff;
  text-decoration: none;
}
.signin .content .form .links a:nth-child(2)
{
  color: #0f0;
  font-weight: 600;
}
.signin .content .form .inputBox input[type="submit"]
{
  padding: 5px;
  background: #0f0;
  /* color: #000; */
  background-image: linear-gradient(to right, #0f0 0%, #8fd3f4 51%, #0f0 100%);
  font-weight: 600;
  font-size: 1.35em;
  letter-spacing: 0.05em;
  cursor: pointer;
}
input[type="submit"]:active
{
  opacity: 0.6;
}
@media (max-width: 900px)
{
  section span 
  {
    width: calc(10vw - 2px);
    height: calc(10vw - 2px);
  }
}
@media (max-width: 600px)
{
  section span 
  {
    width: calc(20vw - 2px);
    height: calc(20vw - 2px);
  }
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

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

*, html, body {
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Poppins', sans-serif;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(to bottom right, #ff966d, #fa538d, #89379c);
}

.container {
    width: 50vw;
    height: 60vh;
    display: grid;
    grid-template-columns: 100%;
    grid-template-areas: "login";
    box-shadow: 0 0 17px 10px rgb(0 0 0 / 30%);
    border-radius: 20px;
    background: white;
    overflow: hidden;
}

.design {
    grid-area: design;
    display: none;
    position: relative;
}

.rotate-45 {
    transform: rotate(-45deg);
}

.design .pill-1 {
    bottom: 0;
    left: -40px;
    position: absolute;
    width: 80px;
    height: 200px;
    background: linear-gradient(#ff966d, #fa538d, #89379c);
    border-radius: 80px;
    border: 10px solid #e2c5e2;
}

.design .pill-2 {
    top: -144px;
    left: -80px;
    position: absolute;
    height: 450px;
    width: 220px;
    background: linear-gradient(#ff966d, #fa538d, #89379c);
    border-radius: 200px;
    border: 30px solid #e2c5e2;
}

.design .pill-3 {
    top: -100px;
    left: 160px;
    position: absolute;
    height: 200px;
    width: 100px;
    background: linear-gradient(#ff966d, #fa538d, #89379c);
    border-radius: 70px;
    border: 10px solid #e2c5e2;
}

.design .pill-4 {
    bottom: -180px;
    left: 220px;
    position: absolute;
    height: 300px;
    width: 120px;
    background: linear-gradient(#ff966d, #fa538d);
    border-radius: 70px;
    border: 10px solid #e2c5e2;
}

.login {
    grid-area: login;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
    background: white;
}

.login h3.title {
    margin: 15px 0;
}

.text-input {
    background: #e6e6e6;
    height: 40px;
    display: flex;
    width: 75%;
    align-items: center;
    border-radius: 10px;
    padding: 0 15px;
    margin: 5px 0;
}

.text-input input {
    background: none;
    border: none;
    outline: none;
    width: 100%;
    height: 100%;
    margin-left: 10px;
}

.text-input i {
    color: #686868;
}

::placeholder {
    color: #9a9a9a;
}

.login-btn {
    width: 68%;
    padding: 10px;
    color: white;
    background: linear-gradient(to right, #ff966d, #fa538d, #89379c);
    border: none;
    border-radius: 20px;
    cursor: pointer;
    margin-top: 10px;
    border: 8px solid #e2c5e2;
}

a {
    font-size: 12px;
    color: #9a9a9a;
    cursor: pointer;
    user-select: none;
    text-decoration: none;
}

a.forgot {
    margin-top: 15px;
    font-size: 18px;
}

.create {
    display: flex;
    align-items: center;
    position: absolute;
    bottom: 30px;
}

.create i {
    color: #9a9a9a;
    margin-left: 10px;
}

@media (min-width: 768px) {
    .container {
        grid-template-columns: 50% 50%;
        grid-template-areas: "design login";
    }

    .design {
        display: block;
    }
}

    </style>
</head>
<body>
<footer>   
    
    <div class="bottom">
      <p>Copyright © 2023 All rights reserved</p>
    </div>
  </footer>

<!-- <div class="login-wrap">
    <div id="login">
        
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        
                        <div id="login-form" class="form">

                            <h2 class="text-center text-white">Book Author Login</h3><br>
                            
                            <div class="form-group text-white">
                                <h5><label for="username">Username:</label><br></h5>
                                <input type="text" name="username" id="username" class="form-control" value="<?php if(isset($_COOKIE["user_id"])) { echo $_COOKIE["user_id"]; } ?>" required autocomplete="off">
                            </div>

                            <div class="form-group text-white">
                                <h5><label for="password">Password:</label><br></h5>
                                <input type="text" name="password" id="password" class="form-control" value="<?php if(isset($_COOKIE["user_password"])) { echo $_COOKIE["user_password"]; } ?>" required autocomplete="off">
                            </div>

                            <div class="checkBox text-white">
                            <input type="checkbox" name="remember" class="mb-2 text-white rememberCheck" id="customCheck" checkeded="uncheck" <?php if(isset($_COOKIE["user_id"])) { ?> checked <?php } ?>>&nbsp;&nbsp;
                            <span style="margin-right: 166px;" class="text">Remember me</span>
                            </div>

                            <div class="form-group text-white">
                                 <input type="submit" name="Login" class="btn btn-outline-light btn-md" value="Login"
                                       onclick="submitform()">
                                       <a style="float: right;" class="btn btn-outline-light btn-md" href="<?php echo site_url() ?>/logincontroller1/forgot_password">Forgot password ?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 

   <div class="signin"> 

    <div class="content"> 
    
     <h2>User Login</h2> 

     <div class="form"> 
      <div class="inputBox text-white">
      <label for="username">Username:</label><br>
      <input type="text" name="username" id="username" placeholder="enter username" class="form-control" value="<?php if(isset($_COOKIE["user_id"])) { echo $_COOKIE["user_id"]; } ?>" required autocomplete="off">

      </div> 

      <div class="inputBox text-white"> 
      <label for="password">Password:</label><br>
      <input type="password" name="password" id="password" maxlength="5" placeholder="enter password" class="form-control" value="<?php if(isset($_COOKIE["user_password"])) { echo $_COOKIE["user_password"]; } ?>" required autocomplete="off"> 

      </div>  
      <div class="chechBox text-white">
      <input type="checkbox" name="remember" class="mb-2 text-white rememberCheck" id="customCheck" checkeded="check" <?php if(isset($_COOKIE["user_id"])) { ?> checked <?php } ?>>
      <label for="customCheck">Remember Me</label><br>  
      </div>

      <div class="inputBox"> 

      <input type="submit" name="Login" class="btn btn-outline-light btn-md" value="Login"
                                       onclick="submitform()"> 
      </div> 

      <div class="inputBox">
      <a style="background-image: linear-gradient(to right, #0f0 0%, #8fd3f4 51%, #0f0 100%); font-size: 22px;" class="btn btn-primary btn-md form-control" href="<?php echo site_url() ?>/Car_login/carforgot_password">Forgot password ?</a>
      </div>

     </div> 

    </div> 

   </div> 

  </section> -->
  <div class="container">
        <div class="design">
            <div class="pill-1 rotate-45"></div>
            <div class="pill-2 rotate-45"></div>
            <div class="pill-3 rotate-45"></div>
            <div class="pill-4 rotate-45"></div>
        </div>
        <div class="login">
            <h3 class="title">User Login</h3>
            <div class="text-input">
                <i class="ri-user-fill"></i>
                <input type="text" name="username" id="username" placeholder="enter username" class="form-control" value="<?php if(isset($_COOKIE["user_id"])) { echo $_COOKIE["user_id"]; } ?>" required autocomplete="off">
            </div>
            <div class="text-input">
                <i class="ri-lock-fill"></i>
                <input type="password" name="password" id="password" maxlength="10" placeholder="enter password" class="form-control" value="<?php if(isset($_COOKIE["user_password"])) { echo $_COOKIE["user_password"]; } ?>" required autocomplete="off"> 
            </div>
            <div class="checkbox">
            <input type="checkbox" name="remember" class="mb-2 text-white rememberCheck" id="customCheck" checkeded="check" <?php if(isset($_COOKIE["user_id"])) { ?> checked <?php } ?>>
            <label for="customCheck">Remember Me</label><br>
            </div>
            <button type="submit" name="login" class="login-btn" value="Login" onclick="submitform()">LOGIN</button>&nbsp;&nbsp;
            <!-- <div class="input"> 

            <input type="submit" name="Login" class="btn btn-outline-dark btn-md" value="Login"
                                            onclick="submitform()"> <br>
            </div> <br> -->

            <div class="input">
            <a class="forgot"href="<?php echo site_url() ?>/Car_login/carforgot_password">Forgot password ?</a>
            </div>
        </div>
    </div>
<script>
   
    function submitform() {
        var flag = 0;
        
        var username = $('#username').val();
        var password = $('#password').val();
        var remember = $('#customCheck').attr('checkeded');
        console.log(remember);
        
        if (username == '' || username == undefined) {
            $('#username').css('border', '1px solid red');
            flag = 1;
            
        }
        
        if (password == '' || password == undefined) {
            $('#password').css('border', '1px solid red');
            flag = 1;
        }
        
        if (flag == 0) {
            $.ajax({
                url: "<?php echo site_url('Car_login/getLogin') ?>",
                method: 'POST',
                data: "UserName=" + username + "&Password=" + password + "&remember=" + remember,
                dataType:'JSON',
                success : function (result) {
                   var code= result['code'];
                   var msg= result['msg'];
                    if (code == 1 || code == 2) {
                        $('#username').css('border', '1px solid green');
                        $('#password').css('border', '1px solid green');
                        toastr.success(msg,"Success");
                        window.location.href = '<?php echo site_url("Car_controller/dashboard") ?>';
                    // alert("Book Author Succesfully Login! Click Here for go to dashboard page")
                    } else if (code == 3 || code == 4) {
                        $('#username').css('border', '1px solid red');
                        $('#password').css('border', '1px solid red');
                        toastr.error('Invalid Username & Passowrd');
                    } else {
                        toastr.error('Invalid Username & Passowrd');
                    }
                   
                    // if (result == 2) {
                    //     $('#username').css('border', '1px solid green');
                    //     $('#Password').css('border', '1px solid green');
                    //     setTimeout(function () {
                    //         window.location.href = '<?php echo site_url("S/dashboard") ?>';
                    //         alert("Book Author Succesfully Login! Click Here for go to dashboard page")
                    //     }, 1000)
                    // } else if (result == 1) {
                    //     $('#username').css('border', '1px solid red');
                    //     toastr.error('Invalid Username');

                    // } else if (result == 3) {
                    //     $('#Password').css('border', '1px solid red');
                    //     toastr.error('Invalid Password');

                    // } else if (result == 4 || result == 5) {
                    //     $('#username').css('border', '1px solid red');
                    //     $('#Password').css('border', '1px solid red');
                    //     toastr.error('Invalid Username & Passowrd');
                    // } else {
                    //     toastr.error('Something went wrong');
                    // }
                }
            });
        } else {
            toastr.error('Please enter username and password!');
        }
        $('#customCheck').click(function() {
		if($(this).is(':checked')){
			$("#customCheck").attr('checkeded','check');
			var remember = $(this).is(':checked');
			console.log(remember);
		}
		else{
			$("#customCheck").attr('checkeded','uncheck');
		}
    });
    }
</script>
</body>
</html>