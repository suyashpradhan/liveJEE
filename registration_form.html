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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="robots" content="noindex">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration Form</title>
<style type="text/css">
.RegisterNow {font-family:Segoe UI semibold,Segoe UI,Tahoma,sans-serif; padding:0px; margin:0px; line-height:19px;
 width:520px; }
.RegisterNow .heading-title{ background-color:#990000; color:#fff;}
.RegisterNow label{ margin: 10px 0px;}
.RegisterNow p {  margin:8px 2px; padding:0px; font-size:14px;}
.RegisterNow input[type="text"], input[type="password"], input[type="email"]{
  width: 90%;
  padding: 8px 0px 8px 8px;
  border-radius: 5px;
  background:#fff;
   border: 1px dotted #333333;
  margin: 10px 0px 10px 0px;
  color: #000000;
}

.RegisterNow  input[type="submit"]  { 
  padding: 5px 20px;
  border-radius: 2px;
  border:1px solid #43D1AF;
  background-color:#43D1AF;
  color:#FFF;
  text-transform:uppercase; font-size:16px;
  margin-bottom:10px;;
}

.RegisterNow .invoice{ 
  padding: 5px 20px;
  border-radius: 2px;
  border:1px solid #AAA;
  background-color:#AAA;
  color:#FFF;
  text-transform:uppercase; font-size:16px;
  margin-bottom:10px;;
}

.button_css
{
  padding: 5px 20px;
  border-radius: 2px;
  border:1px solid #603;
  background-color:#603;
  color:#FFF;
  text-transform:uppercase; font-size:16px;
  margin-bottom:10px;
}

</style>
<script language="javascript" src="jquery.js"></script>
<script language="javascript" src="js/state.js"></script>
</head>

<body>
<form action="" method="post" id="profile_detail">
<table>
<tr>
<td style="vertical-align:top;">
<table align="center" class="RegisterNow" cellpadding="0"  height="400px" cellspacing="0">
<tr height="30px;">
   <td align="center" class="heading-title" colspan="4"><b>Shipping Address</b></td>
</tr> 
  <tr height="50">
    <td style="padding-left:10px;">Name<span>*</span></td>
    <td>
    <input  name="student_name" id="student_name" type="text" placeholder="First Name" required onkeyup="display_student_first_name()" onblur="display_student_first_name()" />    </td>
    <td>
    <input type="text" placeholder="Last Name" name="last_name" id="last_name" onkeyup="display_student_last_name()"/></td>
  </tr>
  <tr height="50"> 
    <td style="padding-left:10px;">Phone No.<span >*</span> </td>
    <td>
    <input  name="contact_number" id="contact_number" type="text" placeholder="Mobile Number 1" onkeyup="display_student_mobile_number1()" onblur="display_student_mobile_number1()"   required />    </td>
    <td>
    <input  type="text" name="second_contact"  id="second_contact" placeholder="Mobile Number 2" onkeyup="display_student_mobile_number2()" onblur="display_student_mobile_number2()"/>    </td>
  </tr>
  <tr height="50">
    <td style="padding-left:10px;"> Email Id<span>*</span> </td>
    <td colspan="2">
    <input  type="email" name="student_email" size="40" id="student_email"  required onkeyup="display_student_email_id()" onblur="display_student_email_id()"/>
     </td>
  </tr>
  
  <tr>
  <td style="padding-left:10px;">Country<span>*</span> </td>
  <td colspan="2"><input type="radio" name="country" id="country" value="India" checked="checked" onchange="check_country();" /> India &nbsp;&nbsp;&nbsp;  <input type="radio" name="country" id="country2" value="Other" onchange="check_country();"  /> Other
   <input type="text" name="other_country" id="other_country" style="display:none" onkeypress="display_country()" onblur="display_country()"  placeholder="Enter Country" /></td>
  </tr>
  
  <tr height="50" id="india_section">
    <td rowspan="1" style="padding-left:10px;"></td>
    <td colspan="2">
	  <div id="selection">
        <select id="listBox" name="state_name" onchange='selct_district(this.value)'></select>
        <select id='secondlist' name="city_name" onchange="check_city()" style="width:150px;"></select><input type="text" name="city" id="city" style="display:none" placeholder="Enter City Name"/>
      </div>
    </td>
  </tr>
  
  <tr>
<td style="padding-left:10px;">Address</td>
<td colspan="2"> 
 <textarea name="address" id="address" cols="38" onkeyup="display_student_address()" onblur="display_student_email_id()"></textarea>
</td></tr> 
  
  <tr style="display:none; padding-top:20px;" id="shop_section">
    <td colspan="4">
       <table id="shop_names" style="padding-top:20px;" class="RegisterNow"></table>
  </td>
  </tr>

<tr height="50">
  <td colspan="2" align="right"><!-- <input type="submit" name="step_1_next" id="step_1_next" value="NEXT" /> -->
  </td>
</tr>
</table>
</td>

<td style="vertical-align:top">
<table align="center" class="RegisterNow" style="vertical-align:top; width:345px; font-size:12px; border:0px solid #ccc; background-color:#fefefe;" cellpadding="5"  height="400px" cellspacing="0">
<tr height="30px" style="margin-top:0px;">
   <td align="center" colspan="2" style="padding-top:25px;"><input type="button" class="invoice" value="Invoice"></td>
</tr> 
<tr>
<td width="130px;">Student Name:</td>
<td width="190px;" id="display_student_name"></td>
</tr>
<tr>
<td>Mobile Number 1:</td>
<td id="display_mobile_number1"></td>
</tr>
<tr>
<td>Mobile Number 2:</td>
<td id="display_mobile_number2"></td>
</tr>
<tr>
<td>Email Id:</td>
<td id="display_email_id"></td>
</tr>
<tr>
<td id="student_name">Country:</td>
<td id="display_country"></td>
</tr>
<tr>
<td id="address">Address:</td>
<td id="display_address"></td>
</tr>
 
<tr><td style="padding-top:10px;" colspan="2">
							 <table align="center" width="320" border="1" cellpadding="0" cellspacing="0" align="center" style="line-height:20px;">   
								        <tr >
										     <td width="250" bgcolor="#CCCCCC" style="padding-left:15px"><strong>Module Selected</strong></td>
											 <td width="100" bgcolor="#CCCCCC" style="padding-left:15px"><strong>Cost</strong></td>
										</tr>
										<tr>
										     <td width="250" style="padding-left:15px"><?php
											    foreach($_SESSION['module'] as $sess)
												{
												echo $sess.'/';
												}
												?></td>
											  <td width="100" style="padding-left:15px">Rs. <label id="net_fees"><?php echo $fees_total; ?></label> /- <input type="hidden" id="net_fees_input" name="net_fees_input"  value="<?php echo $fees_total; ?>" /></td>
										</tr>
								 </table>	
							</td></tr> 
<!-- <tr>							
  <td align="center"  style="padding-top:25px;" colspan="2"><input type="submit" name="step_2_next" id="step_2_next" value="Bank Detail (for NEFT)"  />  </td>
</tr> -->

<tr>
<td align="center" colspan="2"> <input type="submit" name="step_1_next" id="step_1_next" value="Proceed To Payment" onclick="ccavenue();" width="200px"/> </td>							
</tr>

</table>
</td>
</tr>

</table>
</form>
 </body>
</html>

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