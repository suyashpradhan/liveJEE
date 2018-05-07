<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <script language="javascript" src="jquery.js"></script>
<script language="javascript" src="js/state.js"></script>
</head>
<body>
    <?php
    session_start();
    $fees_total=$_SESSION['fees'];
    $count=count(array_unique($_SESSION['module']));   
  ?>
  <?php
      if(isset($_POST['step_1_next']) || isset($_POST['step_2_next']))
      {
        $form = array();
          foreach($_POST as $key=>$value) {
            $form[$key] = $value;
           }
           if($form['country'] == 'Other')
             {
                $form['country'] = $form['other_country'];
             }
             
             if(isset($form['city_name']))
              {
                 if($form['city_name'] == 'Other')
                 {
                    $form['city_name'] = $form['city'];
                 }
              } 
                    $result=$form['result_code'];
                    if($result == 'correct')
                    {
                       $shop_id=$form['shop_id'];
                       $shop_name='';
                       $discount='yes';
                       echo $shop_id,$shop_name;
                    }
                    else 
                    {
                       $shop_id='';
                       $shop_name='';
                       $discount='no';
                   }
       include("connection.php");
           $f_name=$conn->real_escape_string($_POST['student_name']);
       $l_name=$_POST['last_name'];
       $name=$f_name.' '.$l_name;
       $tel=$conn->real_escape_string($_POST['contact_number']);
       $email=$conn->real_escape_string($_POST['student_email']);
       $address=$conn->real_escape_string($_POST['address']);
       $country=$conn->real_escape_string($form['country']);
       $city_name=$conn->real_escape_string($form['city_name']);
       $state_name=$form['state_name'];
       $net_fees=$_POST['net_fees_input'];
       $code=substr($name,0,3).substr($tel,6,10).rand(1,10);
           $date1=date("Y-m-d H:i:s");
       $mod='';
           foreach($_SESSION['module'] as $sess)
         {
           $mod=$mod.$sess.'/';
         }
            $mod=rtrim($mod,'/');
            $code_mod=$code.$mod;
            $stmt = $conn->prepare("insert into register_user1(code,name,mobile_no,email_id,address,date_time,country,state,city,shop_id,fees,discount) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param("ssssssssssss",$code_mod,$name,$tel,$email,$address,$date1,$country,$state_name,$city_name,$shop_id,$net_fees,$discount);
            //  $r=mysql_query("insert into register_user1 values('','$code.$mod','$name','$tel','$email','$address',now(),'$country','$state_name','$city_name','$shop_id','$net_fees','$discount','')");
        if($stmt->execute())
        {
                $_SESSION['inserted_id']=$conn->insert_id;
                    $_SESSION['code']=$code.$mod;
                $_SESSION['registered_user']=$name;
                $_SESSION['email_id']=$email;
            $_SESSION['shop_id']=$shop_id;  
            $_SESSION['net_fees']=$net_fees;
                 $email1 = 'contact@domain-education.com,nidhi.jain0212@gmail.com,abhishek1404@gmail.com';
                 $subject = ' Profile Registration On LiveCBSE Website' ;
    $message="<b>The Following Person:</b><br><br> <b>Name :</b>$name <br><br> <b>Phone No:</b>$tel <br> <b> Email Id : </b>$email <br><br> have <b> selected </b> the following module code $mod" ;
   $headers = "MIME-Version: 1.0" . "\r\n";
  $headers.= "Content-type:text/html;charset=iso-8859-1"."\r\n";
  $headers.= "From:domaininfo@domain-education.com";
  mail($email1,$subject,$message,$headers);  
    if(isset($_POST['step_2_next']))
    {
       echo "<script language='javascript'>parent.fancyBoxClose5();</script>";
    }
    else
    {
         echo "<script language='javascript'>parent.fancyBoxClose3();</script>";
    }
   }
        else
        {
        echo "<script language='javascript'>alert('Error in Recording Saving');</script>";
        } 
      }
  ?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Pay Now
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Register Now !!!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="width: 100%">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-mg-8 col-lg-8 col-xl-8">
                        <div class="first-half-Header">
                            <h1>Personal Details</h1>
                        </div>
                        <form action="" class="registration-form" id="profile_detail" method="post">
                            <div class="first-form-wrapper">
                                <label>Name:</label>
                                <input type="text" placeholder="First Name" name="fName" class="first_Name" id="student_name" required onkeyup="display_student_first_name()" onblur="display_student_first_name()" required>
                                <input type="text" placeholder="Last Name" name="lName" class="last_Name" id="last_name" onkeyup="display_student_last_name()" required>
                            </div>
                            <br>
                            <div class="first-form-wrapper">
                                <label>Phone No:</label>
                                <input type="text" placeholder="Mobile Number" name="pNumber" class="phone_number_one" id="contact_number" onkeyup="display_student_mobile_number1()" onblur="display_student_mobile_number1()">
                                <input type="text" placeholder="Mobile Number" name="pNumber" class="phone_number_two" id="second_contact" onkeyup="display_student_mobile_number2()" onblur="display_student_mobile_number2()">
                            </div>
                            <br>
                            <div class="first-form-wrapper-email">
                                <label>Email:</label>
                                <input type="email" placeholder="Email Address" name="email" class="email_address" id="student_email" onkeyup="display_student_email_id()" onblur="display_student_email_id()">
                            </div>
                            <br>
                            <div class="first-form-wrapper-country">
                                <label>Country:</label>
                                <input type="radio" name="country" value="country" id="country" onchange="check_country()">India
                                <input type="radio" name="country" value="country" id="other_country" onkeypress="display_country()" onblur="display_country()">Other
                            </div>
                            <br>
                            <div class="first-form-wrapper-state">
                                <select name="state">
                                    <option value="Select State">Select States</option>
                                    <option value="Arunachal Pradhesh">Arunachal Pradhesh</option>
                                    <input type="text" class="cities" placeholder="City">
                                </select>
                            </div>
                            <br>
                            <div class="first-form-wrapper-address">
                                <label>Address:</label>
                                <input type="text" placeholder="Address" name="address" class="address" id="address" onkeyup="display_student_address()" onblur="display_student_email_id()">
                            </div>
                        </form>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-mg-4 col-lg-4 col-xl-4">
                        <div class="second-half-Header">
                            <h1>Invoice</h1>
                        </div>
                        <div class="form-input-Wrapper">
                            <label>First Name: <span id="display_student_name">Suyash Pradhan</span>
                            </label><br>
                            <label>Mobile Number 1: <span id="display_mobile_number1"></span></label><br>
                            <label>Mobile Number 2: <span id="display_mobile_number2"></span></label><br>
                            <label>Email Address: <span id="display_email_id"></span></label><br>
                            <label>Country: <span id="display_country"></span></label><br>
                            <label>Address: <span id="display_address"></span></label><br>
                        </div>
                        <table class="table_course" style="width: 100%;text-align: center">
                            <tr>
                                <th>Module Selected</th>
                                <th>Cost</th>
                            </tr>
                            <tr>
                                <td><?php
                                    foreach($_SESSION['module'] as $sess)
                                    {
                                    echo $sess.'/';
                                    }
                                    ?></td>
                                <td>Rs<label id="net_fees"><?php echo $fees_total;?<input type="hidden" id="net_fees_input" name="net_fees_input"  value="<?php echo $fees_total; ?>"></label></td>
                            </tr>
                        </table><br>
                        <button class="btnPayNow" name="step_1_next" id="step_1_next" onclick="ccavenue();"
                                style="background-color: #231F20;border: 1px solid #231F20;font-size: 16px;border-radius: 5px;width: 100px;color: #fff;cursor: pointer;padding:3px 0;">Pay Now</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

        <script language="javascript">
            function display_student_first_name()
            {
                var student_name=$('#student_name').val();
                $('#display_student_name').html(student_name); 
            }
            
            function display_student_last_name()
            {
                var student_name=$('#student_name').val();
                var last_name=$('#last_name').val();
                $('#display_student_name').html(student_name+' '+last_name); 
            }
            
            function display_student_mobile_number1()
            {
                var student_name=$('#contact_number').val();
                $('#display_mobile_number1').html(student_name); 
            }
            
            function display_student_mobile_number2()
            {
                var student_name=$('#second_contact').val();
                $('#display_mobile_number2').html(student_name); 
            }
         
            function display_student_email_id()
            {
                var student_name=$('#student_email').val();
                $('#display_email_id').html(student_name); 
            }
            
            function display_student_address()
            {
                var student_name=$('#address').val();
                $('#display_address').html(student_name); 
            }
            
            function display_country()
            {
                var student_name=$('#other_country').val();
                $('#display_country').html(student_name); 
            }
            
            function check_booksellercode(arg)
            {
               var shop_id = $('#shop_id').val();
               var value = $('#promo_code').val();
             //  var shop_id = id.split("_");  
                      $.ajax({
                                   type: 'POST',
                                   url: 'check_bookseller_code.php?shop_id='+shop_id+'&booksellercode='+value,
                                   data: '',
                                    beforeSend: function() {  
                                     },
                                   success: function(response){
                                      if(response != '')
                                       {
                                             if(response == 'correct')
                                                 { 
                                                    $('#promo_code_c').html('&#10004');
                                                    $('#result_code').val('correct'); 
                                                        $.ajax({
                                                             type: 'POST',
                                                             url: 'get_discount_detail.php?discount='+response,
                                                             data: '',
                                                             beforeSend: function() {  
                                                              },
                                                              success: function(response1){   
                                                                                                    $('#net_fees').html(response1); 
                                                                                                    $('#net_fees_input').val(response1); }
                                                             }); 
                                                 }
                                             else
                                                 { 
                                                   $('#promo_code_c').html('&#10006'); 
                                                   $('#result_code').val('incorrect');
                                                 }			   
                                       }
                                    }
                                });
            }
         
         check_country();
         
            function check_country()
            {
                var country=$('input[name="country"]:checked').val();
                 if(country == 'India')
                    {
                       $('#other_country').hide();
                       $('#india_section').show();
                       // $('#shop_names').show();
                        $('#display_country').html('India'); 
                    }
                 else
                    {
                       $('#other_country').show();
                       $('#india_section').hide();
                       $('#shop_names').hide();
                    }        
            }
         
            function check_city()
            {
               var city=$('#secondlist').val();
             // alert(city);
                 if(city == 'Other')
                 {
                    $('#city').show();
                 }   
                 else
                 {
                     $('#city').hide();
                            $.ajax({
                                   type: 'POST',
                                   url: 'get_bookseller_list.php?city='+city,
                                   data: '',
                                    beforeSend: function() {  
                                     },
                                   success: function(response){
                                      if(response != '')
                                       {
                                          $('#shop_section').show();
                                          $('#shop_names').html(response);  
                                       }
                                      // $('#box1').html(response);
                                   }
                                });
                 }    
            }
         </script>
</body>
</html>