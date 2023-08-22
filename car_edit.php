
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
<footer>   
    
   <div class="bottom">
     <p>Copyright © 2023 All rights reserved</p>
   </div>
 </footer>


    <div id="result"></div>
    <div class="container my-5">
        
        <h3> Add New Book author Details</h3><br>  
        <input type="hidden" name="" class="txt_id">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
                        <table class="table table-bordered dynamic_field_class" id="dynamic_field">  
                            <tr class="dynamic-added">  
                                <td class="dynamic-added1">
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
                        <table class="table table-bordered dynamic_field_cartype" id="dynamic_field1">  
                            <tr class="dynamic_car">  
                                <td class="dynamic_car_added">
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

            <div class="row mb-3">
                 <label class="control-label col-md-3">Image</label>
                 <div class="col-md-6">
                <input type="file" name="img_upload" value="img_upload" placeholder="" class="image_type form-control">
            </div>
      </div>     

            <div class="row mb-3"> 
                <label class="col-sm-3 col-form-label">Car Manufacture year</label>
                <div class="col-sm-6">
                    <div class="table-responsive">  
                        <table class="table table-bordered dynamic_date_cartype" id="dynamic_field2">  
                            <tr class="dynamic_car_date">  
                                <td class="dynamic_car_add1">
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
                <lable class="col-sm-3 col-form-label"> Car Purchase Date</lable>
                <div class="col-sm-6">
                    <input type="date" class="form-control txt_date" name="date" value="date">
                </div> 
            </div>

            <div class="row mb-3 col-12">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit"   class="btn btn-primary btn_submit">Submit</button>
                </div>

                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="http://localhost/Cd/index.php/Car_controller/dashboard" role="button">Cancel</a>
                </div>
            </div>
       </form>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript">
    let site_url = "<?php echo site_url(); ?>";
        $(document).ready(function () {

            $.ajax({
                type: 'GET',
                url: site_url + '/Car_controller/edit_test',
                dataType: 'json',
                data: { id: <?php echo $_GET['data-id'] ?> },
                success: function (result) {
                    console.log(result)
                    $(".txt_name").val(result[0].name);
                    $("input[name=gender][value=" + result[0].gender + "]").attr('checked', 'checked');
                    $(".txt_id").val(result[0].student_id);
                    $(".txt_date").val(result[0].date);
                    $(".book_type").val(result[0].booktype);
                    $(".book_type_name").val(result[0].booktypename);
                    // $(".image_type").val(result[0].img_upload);
                    $("input[name=file][value=" + result[0].img_upload + "]");
                    var tst = result[0].sub_name.split('||');
                    var ss_id = result[0].ss_id.split('||');
                    var b_type =result[0].book_type.split('||');
                    // alert(b_type)
                    var book_type =result[0].book_type_name.split('||');
                    // alert(book_type)
                    var html = "";
                    var sub_id = result[0].subject_id.split('||');
                    for (i = 0; i < tst.length; i++) {
                        if (i === 0) {
                            
                            $('.remove').attr("ss_id", ss_id[0])
                            $('.txt_subject').val(tst[0])
                            $('.txt_subject').attr("data-id", sub_id[0])
                        } else{
                           
                            html = $('.dynamic-added:last').clone();
                            html.find('.txt_subject').val(tst[i])
                            html.find('.txt_subject').attr("data-id", sub_id[i])
                            
                            html.find('.remove').remove()
                            html.appendTo('.dynamic_field_class');
                            html.find('td:nth-child(2)').html('<button type="button" name="remove" ss_id="' + ss_id[i] + '" class="btn btn-danger btn_remove1">-</button>');
                        }

                    }
                    
                    for (i = 0; i < b_type.length; i++) {
                      
                        if (i === 0) {
                            
                            $('.remove').attr("ss_id", ss_id[0])
                            $('.book_type').val(b_type[0])
                            $('.book_type').attr("data-id", sub_id[0])
                        } else{
                           
                            html = $('.dynamic_car:last').clone();
                            html.find('.book_type').val(b_type[i]);
                            html.find('.book_type').attr("data-id", sub_id[i])
                           
                            html.find('.remove').remove()
                            html.appendTo('.dynamic_field_cartype');
                            html.find('td:nth-child(2)').html('<button type="button" name="remove" ss_id="' + ss_id[i] + '" class="btn btn-danger btn_remove2">-</button>');
                        }

                    }

                    for (i = 0; i < book_type.length; i++) {
                      
                      if (i === 0) {
                          
                          $('.remove').attr("ss_id", ss_id[0])
                          $('.book_type_name').val(book_type[0])
                          $('.book_type_name').attr("data-id", sub_id[0])
                      } else{
                         
                          html = $('.dynamic_car_date:last').clone();
                          html.find('.book_type_name').val(book_type[i]);
                          html.find('.book_type_name').attr("data-id", sub_id[i])
                         
                          html.find('.remove').remove()
                          html.appendTo('.dynamic_date_cartype');
                          html.find('td:nth-child(2)').html('<button type="button" name="remove" ss_id="' + ss_id[i] + '" class="btn btn-danger btn_remove3">-</button>');
                      }

                  }
                }
            });

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
           $('#dynamic_field1').append('<tr id="row'+i+'" class="dynamic_car"><td><select type="text" name="addmore1[]" placeholder="Enter Car model name" class="form-control new_book_type" id="txtbox1" required ><option value="">Select Car model name : </option><option value="X7">X7</option><option value="Q7">Q7</option><option value="Harrier">Harrier</option><option value="XUV700">XUV700</option><option value="I-Pace">I-Pace</option><option value="S class">S class</option><option value="Macan">Macan</option></select></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">-</button></td></tr>');  
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
           $('#dynamic_field2').append('<tr id="row'+i+'" class="dynamic_car_date"><td><select type="text" name="addmore2[]" placeholder="Enter Car Manufacture yaer" class="form-control book_type_name" id="txtbox2" required ><option value="">Select Car Manufacture Year : </option><option value="2012">2012</option><option value="2018">2018</option><option value="2020">2020</option><option value="2022">2022</option><option value="2021">2021</option><option value="2013">2013</option><option value="2019">2019</option></select></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">-</button></td></tr>');  
      });
  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();
      });  
  
    });

    var ss_id = [];
            $(document).on('click', '.btn_remove1', function () {

                $(this).parent().parent().find('.txt_subject').attr('data_delete','1');
                $(this).parent().parent().css({"border": "3px solid #FF0000"});
             
                    ss_id.push($(this).attr("ss_id"));
                });

                var ss_id= [];
                $(document).on('click', '.btn_remove2', function () {

                $(this).parent().parent().find('.book_type').attr('data_delete','1');
                $(this).parent().parent().css({"border": "3px solid #FF0000"});
             
                    ss_id.push($(this).attr("ss_id"));
                });

                var ss_id= [];
                $(document).on('click', '.btn_remove3', function () {

                $(this).parent().parent().find('.book_type_name').attr('data_delete','1');
                $(this).parent().parent().css({"border": "3px solid #FF0000"});
             
                    ss_id.push($(this).attr("ss_id"));
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
        $(document).on("click", ".btn_submit", function (e) {
                e.preventDefault();
                var name = $(".txt_name").val();
                // alert(name)
                var gender = $("input[name='gender']:checked").val();
                // alert(gender)
                var date = $(".txt_date").val();
                // alert(date)
                
                
                var abc = [];
                var newsub = [];
                $.each($(".newtxt_subject"), function () {
                    newsub.push($(this).val());
                });
                var sub = [];
                var type = [];
                $.each($(".book_type"), function () {
                    type.push($(this).val());
                });
                // alert(type)

                var car = [];
                $.each($(".book_type_name"), function () {
                    car.push($(this).val());
                });

                // var def = [];
                // $.each($(".new_book_type"), function () {
                //     def.push($(this).val());
                // });
                // alert(def)


                
                var delete_data = [];
                $.each($(".txt_subject"), function () {
                    if($(this).attr('data_delete') == 1){
                        delete_data.push($(this).attr('data_delete'));
                    }
                    abc.push($(this).attr("data-id"));
                    sub.push($(this).val());
                });

                var id = $(".txt_id").val();
            
                console.log("name", name);
                console.log("gender", gender);
                console.log("type", sub);
                console.log("date",date);
                console.log("booktype",type);
                console.log("booktypename",car);
                
                

                // if (name == '' || sub == '' || newsub =='') {
                //     toastr.error("New book author data are required.");
                //     return false;
                // }


                $.ajax({
                    type: "POST",
                    url: site_url + '/Car_controller/updtitle',
                    data: {
                        name: name,
                        gender:gender,
                        subject: sub,
                        newsubject: newsub,
                        booktype : type,
                        // newbooktype : def,
                        booktypename: car,
                        id: id,
                        delete  : delete_data,
                        sub_id: abc,
                        ss_id: ss_id,
                        date: date,
                    },
                    datatype: 'JSON',

                    success: function (data) {
                        console.log("succes_data", data);
                        alert("Book author updated")
                        window.location.href = "<?php echo site_url("Car_controller/dashboard") ?>";

                    },

                    error: function (data) {
                        console.log("error_data", data);
                        alert("Somethin went wrong!");
                        window.location.href = "<?php echo site_url("Car_controller/dashboard") ?>";


                    }

                });

            });

        
        });
    </script>
</body>
</html>




