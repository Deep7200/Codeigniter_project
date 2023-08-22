<!DOCTYPE html>
<html>
<head>
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">


</head>
<style>  
html {  
    position: relative;  
    min-height: 100%;  
}  
body {  
    padding-top: 4.5rem;  
    margin-bottom: 4.5rem;  
}  
.footer {  
  position: absolute;  
  bottom: 0;  
  width: 100%;  
  height: 3.5rem;  
  line-height: 3.5rem;  
  background-color: #6c757d;  
}  
.bg-dark {  
    background-color: #6c757d!important;  
}  
.nav-link:hover {  
  transition: all 0.4s;  
}  
.nav-link-collapse:after {  
  float: right;  
  content: '\f067';  
  font-family: 'FontAwesome';  
}  
.nav-link-show:after {  
  float: right;  
  content: '\f068';  
  font-family: 'FontAwesome';  
}  
.nav-item ul.nav-second-level {  
  padding-left: 0;  
}  
.nav-item ul.nav-second-level > .nav-item {  
  padding-left: 20px;  
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


<body> 
<footer>   
    
    <div class="bottom">
      <p>Copyright © 2023 All rights reserved</p>
    </div>
  </footer>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">    
  <button  
    class="navbar-toggler"  
    type="button"  
    data-toggle="collapse"  
    data-target="#navbarCollapse"  
    aria-controls="navbarCollapse"  
    aria-expanded="false"  
    aria-label="Toggle navigation">  
    <span class="navbar-toggler-icon"></span>  
  </button>  
  <div class="collapse navbar-collapse" id="navbarCollapse">  
    <form class="form-inline ml-auto mt-2 mt-md-0">    
    <a class="btn btn-outline-light btn-md nav-link btn_add" href="/Cd/index.php/Car_controller/car_create" role="button"> Add New Car Details</a>&nbsp;&nbsp;
    <a class="btn btn-outline-light btn-md nav-link" href="<?php echo site_url() ?>/Car_login/carchange_password">Change password</a>&nbsp;&nbsp;
    <!-- <a class="btn btn-outline-light btn-md nav-link" href="<?php echo site_url() ?>/Car_login/update_user">Update User</a> -->
    <a class="btn btn-outline-light btn-md nav-link" href="<?php echo site_url() ?>/Car_controller/logout">Logout</a></center>
  </form>  
  </div>  
</nav> 

    <div id="result"></div>
    <div class="container my-20">
		
        <h3><center>Car list</center></h3>
        <!-- <center><a class="btn btn-outline-primary btn-md btn_add" href="/Cd/index.php/Car_controller/car_create" role="button"> Add New Car details</a></center>&nbsp;&nbsp; -->

        <table class="table table-striped table-bordered border-secondary" id="myTable" style="width:1105px;">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">ID</th>
                    <th>Car Owner Name</th>
                    <!-- <th>Owner Type</th> -->
                    <th>Gender</th>
					          <th>Car company name</th>
                    <th>Car model</th>
                    <th>Car manufacture year</th>
                    <th>Car Image</th>
                    <th>Car purchase date</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>

    </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">

    let site_url = "<?php echo site_url();?>";
    let base_url = "<?php echo base_url();?>";
	$('#myTable').DataTable({
          'processing': true,
          'serverMethod': 'post',
          'ajax': {
             'url':'<?php echo site_url('Car_controller/show/'); ?>',
             'post':'post',   
          },
          
        "columnDefs": [
          {
            "render": function (data, type, row) {
            // alert(data.status);
            let html = "";
            if(data.Image_type != ""){
            html = `<img height="60px" class="image_type" src=${base_url}/assets/image/${data.Image_type}>`;
            }else{

            }
            return html
            },
            "targets": 6,
            "width": "1%",
            "orderable": false
          }
        ],

          'columns': [
             { data: 'student_id'},
             { data: 'name' },
            //  {data: 'type'},
             {data: 'gender'},
             { data: 'sub_name'},
             {data: 'book_type'},
             {data: 'book_type_name'},
             {data: null},
             {data: 'date'},
                {

			     mRender: function (data, type, row) {
				   var bindHtml = '';
				   bindHtml += '<a class="btn btn-secondary" href=edit?data-id='+row.student_id+'>Edit</a><br>&nbsp;&nbsp;&nbsp;&nbsp;';

				   bindHtml += '<a class="btn btn-secondary btn_delete" data-id='+row.student_id+'>Delete</a>';
				
				   return bindHtml;
			      }  
		        }

          ]
        });

        $(document).ready(function() {  
        $('.nav-link-collapse').on('click', function() {  
        $('.nav-link-collapse').not(this).removeClass('nav-link-show');  
        $(this).toggleClass('nav-link-show');  
        });  
        });  


	
	$(document).ready(function(){
		
	$(document).on("click",".btn_delete",function(e) {

 	var id = $(this).attr('data-id');   

   	$.ajax({
		
 		url: site_url+'/Car_controller/deletedata',
 		type: "GET",
 		data: {id:id},
 		success: function(data) {
        console.log("succes_data",data);
                          toastr.error("Record Delete succesfully");
                           window.location.href = "<?php echo site_url ("Car_controller/dashboard")?>";
                          
					
	}
	
 	});

	});


	});

    
    </script>
</body>
</html>




