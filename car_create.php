
<!DOCTYPE html>

<head>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <!-- toaster cdn { -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    
    <style>
    .error {color: #FF0000;}
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
<!-- <footer>   
    
   <div class="bottom">
     <p>Copyright © 2023 All rights reserved</p>
   </div>
 </footer> -->


    <div id="result"></div>
    <div class="container my-5">
        
        <h3> Add New Book author Details</h3><br>  
        
        <form method="post" enctype="multipart/form-data" id="insertdata" class="insertdata">
            <div class="row mb-3">
                <lable class="col-sm-3 col-form-label"> Car owner Name</lable>
                <div class="col-sm-6">
                    <Select class="form-control txt_name" name="name" placeholder="enter name" id="authorname">
                        <option value="">Car Owner Name : </option>
                        <option value="Deep Patel">Deep Patel</option>
                        <option value="Maulik Patel">Maulik Patel</option>
                        <option value="Nayan Patel">Nayan  Patel</option>
                        <option value="Chintan Patel">Chintan Patel</option>
                        <option value="Shyam Patel">Shyam Patel</option>
                    </select>
                </div> 
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Gender</label>
                <div class="col-sm-6">
                <input type="radio" class="txt_gender" name="gender" value="male">
                <label for="gender">Male</label><br>
                <input type="radio" class="txt_gender" name="gender" value="female">
                <label for="female">Female</label><br>
                <input type="radio" class="txt_gender" name="gender" value="other">
                <label for="other">Other</label><br>
                </div>
            </div>

            <div class="row mb-3"> 
                <label class="col-sm-3 col-form-label">Campany Name</label>
                <div class="col-sm-6">
                    <div class="table-responsive">  
                        <table class="table table-bordered" id="dynamic_field">  
                            <tr>  
                                <td>
                                    <select name="addmore[]" placeholder="Enter Subject" class="form-control txt_subject" id="txtbox" required="" />
                                    <option value="">Select Company name : </option>
                                    <option value="BMW">BMW</option>
                                    <option value="Audi">Audi</option>
                                    <option value="Tata">Tata</option>
                                    <option value="Mahindra">Mahindra</option>
                                    <option value="Jaguar">Jaguar</option>
                                    <option value="Mercedes">Mercedes</option>
                                    <option value="Porshe">Porshe</option>                        
                                    </select></td>  
                                <td><button type="button" name="add" id="add" class="btn btn-success">+</button></td>  
                            </tr>  
                        </table>  
                    </div>
                </div> 
            </div>

            <div class="row mb-3"> 
                <label class="col-sm-3 col-form-label">Car Model name</label>
                <div class="col-sm-6">
                    <div class="table-responsive">  
                        <table class="table table-bordered" id="dynamic_field1">  
                            <tr class="dynamic_added_add">  
                                <td class="dynamic_added_add">
                                    <select name="addmore1[]" placeholder="Enter Subject" class="form-control book_type" id="txtbox1" required="" />
                                    <option value="">Select Car model name : </option>
                                    <option value="X7">X7</option>
                                    <option value="Q7">Q7</option>
                                    <option value="Harrier">Harrier</option>
                                    <option value="XUV7OO">XUV700</option>
                                    <option value="I-Pace">I-Pace</option>
                                    <option value="S class">S class</option>
                                    <option value="Macan">Macan</option>                          
                                    </select></td>  
                                <td><button type="button" name="add" id="add1" class="btn btn-success">+</button></td>  
                            </tr>  
                        </table>  
                    </div>
                </div> 
            </div>

            <!-- <div class="row mb-3">
                 <label class="control-label col-md-3">Image</label>
                 <div class="col-md-6">
                <input type="file" name="img_upload" placeholder="" class="form-control img_type">
            </div>
      </div>      -->

            <div class="row mb-3"> 
                <label class="col-sm-3 col-form-label">Car Manufacture year</label>
                <div class="col-sm-6">
                    <div class="table-responsive">  
                        <table class="table table-bordered" id="dynamic_field2">  
                            <tr class="dynamic_added_add">  
                                <td class="dynamic_added_add">
                                    <select name="addmore2[]" placeholder="Enter Subject" class="form-control book_type_name" id="txtbox2" required="" />
                                    <option value="">Select Car Manufacture Year : </option>
                                    <option value="2012">2012</option>
                                    <option value="2018">2018</option>
                                    <option value="2020">2020</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2023">2013</option>
                                    <option value="2019">2019</option>                          
                                    </select></td>  
                                <td><button type="button" name="add" id="add2" class="btn btn-success">+</button></td>  
                            </tr>  
                        </table>  
                    </div>
                </div> 
            </div>

            <div class="row mb-3"> 
                <label class="col-sm-3 col-form-label">Car Images</label>
                <div class="col-sm-6">
                    <div class="table-responsive">  
                        <table class="table table-bordered" id="dynamic_field3">  
                            <tr class="dynamic_image">  
                                <td class="dynamic_added_image">
                                <input type="file" name="files[]" multiple="" placeholder="" class="form-control img_type">
                                   </td>  
                                <td><button type="button" name="add" id="add2" class="btn btn-success">+</button></td>  
                            </tr>  
                        </table>  
                    </div>
                </div> 
            </div>
            <div class="row mb-3">
                <lable class="col-sm-3 col-form-label"> Car Purchase Date</lable>
                <div class="col-sm-6">
                    <input type="date" class="form-control txt_date" name="date" value="date">
                </div> 
            </div>

            <div class="row mb-3 col-12">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit"   class="btn btn-primary">Submit</button>
                </div>

                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="http://localhost/Cd/index.php/Car_controller/dashboard" role="button">Cancel</a>
                </div>
            </div>
       </form>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript">

    $(document).ready(function(){      
      var i=1;  
   
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><select type="text" name="addmore[]" placeholder="Enter Car Company name" class="form-control newtxt_subject txt_subject " id="txtbox" required ><option value="">Select Car company name : </option><option value="BMW">BMW</option><option value="Audi">Audi</option><option value="Tata">Tata</option><option value="Mahindra">Mahindra</option><option value="Jaguar">Jaguar</option><option value="Mercedes">Mercedes</option><option value="Porshe">Porshe</option></select></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">-</button></td></tr>');  
      });
  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();
      });  
  
    });

    $(document).ready(function(){      
      var i=1;  
   
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field1').append('<tr id="row'+i+'" class="dynamic-added"><td><select type="text" name="addmore1[]" placeholder="Enter Car model name" class="form-control book_type newbook_type " id="txtbox1" required ><option value="">Select Car model name : </option><option value="X7">X7</option><option value="Q7">Q7</option><option value="Harrier">Harrier</option><option value="XUV700">XUV700</option><option value="I-Pace">I-Pace</option><option value="S class">S class</option><option value="Macan">Macan</option></select></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">-</button></td></tr>');  
      });
  
        $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();
      });
  
    });

    $(document).ready(function(){      
      var i=1;  
   
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field2').append('<tr id="row'+i+'" class="dynamic-added"><td><select type="text" name="addmore2[]" placeholder="Enter Car Manufacture yaer" class="form-control book_type_name newbook_type " id="txtbox2" required ><option value="">Select Car Manufacture Year : </option><option value="2012">2012</option><option value="2018">2018</option><option value="2020">2020</option><option value="2022">2022</option><option value="2021">2021</option><option value="2013">2013</option><option value="2019">2019</option></select></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">-</button></td></tr>');  
      });
  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();
      });  
  
    });

    $(document).ready(function(){      
      var i=1;  
   
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field3').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="file" name="files[]" placeholder="" class="form-control img_type"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">-</button></td></tr>');  
      });
  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();
      });  
  
    });

    $(document).on('change', '.txt_subject', function () { 
        let sub_1 = []; 
        let sub_2 = $(this).val(); 
        $('[name="addmore[]"]').each(function () {
            
        if ($(this).val() !== "" && $(this).val() !== null) {
        sub_1.push($(this).val());
        }
        });
        var sub_3 = sub_4(sub_2, sub_1);
        
        if (sub_3 >= 2 && sub_2 !== "") {
        check_exist = 1;
        } else {
        check_exist = 0;
        }
       
        if (check_exist === 1) {
        $(this).val('').trigger('change'); 
        toastr.error("Please select another Car company name");
      
        }
        
 });

        function sub_4(item, array) {

        var count = 0;
        $.each(array, function (i, v) {
        if (v === item) count++;
        });
        return count;
        }


        $(document).on('change', '.book_type', function () {
        let sub_1 = []; 
        let sub_2 = $(this).val(); 
        $('[name="addmore1[]"]').each(function () {
            
        if ($(this).val() !== "" && $(this).val() !== null) {
        sub_1.push($(this).val());
        }
        });
        var sub_3 = sub_4(sub_2, sub_1);
        
        if (sub_3 >= 2 && sub_2 !== "") {
        check_exist = 1;
        } else {
        check_exist = 0;
        }
       
        if (check_exist === 1) {
        $(this).val('').trigger('change'); 
        toastr.error("Please select another car model name");
      
        }
        
    });

        function sub_4(item, array) {

        var count = 0;
        $.each(array, function (i, v) {
        if (v === item) count++;
        });
        return count;
        }

        $(document).on('change', '.book_type_name', function () { 
        let sub_1 = []; 
        let sub_2 = $(this).val(); 
        $('[name="addmore2[]"]').each(function () {
            
        if ($(this).val() !== "" && $(this).val() !== null) {
        sub_1.push($(this).val());
        }
        });
        var sub_3 = sub_4(sub_2, sub_1);
        
        if (sub_3 >= 2 && sub_2 !== "") {
        check_exist = 1;
        } else {
        check_exist = 0;
        }
       
        if (check_exist === 1) {
        $(this).val('').trigger('change'); 
        toastr.error("Please select another manufacture year");
      
        }
        
    });

        function sub_4(item, array) {

        var count = 0;
        $.each(array, function (i, v) {
        if (v === item) count++;
        });
        return count;
        }

    $(document).ready(function() {
        let site_url = "<?php echo site_url();?>";

    $("#insertdata").on('submit',(function(e) {
        e.preventDefault();
    var name = $(".txt_name").val();
    var date = $(".txt_date").val();
    // var type = $("input[name='vehicle']:checked").val();
    // alert(type)
    var gender = $("input[name='gender']:checked").val();
    var sub = [];
    $.each($(".txt_subject"), function () {
         sub.push($(this).val());
    });

    var subject = $(".txt_subject").val();

    var book = [];
    $.each($(".book_type"), function () {
         book.push($(this).val());
    });
    // alert(book)
    
    var book1 = [];
    $.each($(".book_type_name"), function () {
         book1.push($(this).val());
    });
    // alert(book1)
    var img = [];
    $.each($(".img_type"), function () {
         img.push($(this).val());
    });
    // alert(img)


    var subject = $(".txt_subject").val();
    // alert(subject)
    var booktype = $(".book_type").val();
    // alert(booktype)
    var booktypename = $(".book_type_name");
    // alert(booktypename)
    // var inputFile=$('input[name=userfile]').val();
    // alert(inputFile)
    var pic=$('input[type=file]').val().replace(/C:\\fakepath\\/i, '')
    // alert(pic)
    
    
  
    console.log("name",name);
    console.log("subject",sub);
    console.log("booktype",book);
    console.log("booktypename",book1);
    console.log("Image",img);

    if(name==''|| subject=='' || sub == '') {
    toastr.error("All Field are Required!");
    return false;
    }
  


    $.ajax({
        type: "POST",
        url: site_url+'/Car_controller/adddata',
        data: 
        new FormData(this),
        // {
        // name: name,
        // gender: gender,
        // // type: type,
        // subject: sub,
        // booktype: book,
        // booktypename: book1,
        // date: date
        // },
         processData:false,
         contentType:false,
         cache:false,
         async:false,
        dataType:'json',
        success: function(data) {
            console.log("succcess_data",data);
                    alert("Car Owner succesfully add");
                    window.location.href = "<?php echo site_url ("Car_controller/dashboard")?>";        
        },

        error : function(data) {
             console.log("error_data",data);
                 alert("Something went wrong!");
                    // window.location.href = "<?php echo site_url ("Car_controller/dashboard")?>";   
        }
    });

    }));

    });

    </script>
</body>
</html>




