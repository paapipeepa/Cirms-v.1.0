<?php
  session_start();
  $id = $_GET['id'];
  $_SESSION['inkokadu'] = $id;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="supernova"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F63134071782453" title="oEmbed Form"><link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F63134071782453" title="oEmbed Form">-->
<meta property="og:title" content="Simple Event Registration Form" >
<!--<meta property="og:url" content="http://www.jotform.me/form/63134071782453" > -->
<meta property="og:description" content="Please click the link to complete this form.">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="HandheldFriendly" content="true" />
<title>Company Registration</title>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.15640" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.15640" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.15640" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/548957a3700cc4ae108b4567.css?themeRevisionID=5731e817977cdf046d8b4567"/>
<style type="text/css">
    .form-label-left{
        width:150px !important;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px !important;
    }
    body, html{
        margin:0;
        padding:0;
        background:false;
    }

    .form-all{
        margin:0px auto;
        padding-top:0px;
        width:690px;
        color:#555 !important;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:14px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: Black;
    }

</style>

<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/buttons/form-submit-button-blue.css?3.3.15640"/>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.15640" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.init(function(){
      setTimeout(function() {
          $('input_30').hint('ex: xyz@yahoo.com');
       }, 20);
      setTimeout(function() {
          $('input_31').hint('ex: 8328358523');
       }, 20);
	JotForm.clearFieldOnHide="disable";
	JotForm.onSubmissionError="jumpToFirstError";
   });
</script>
</head>
<body>
<form class="jotform-form" action="RegisterForm.php" method="post" name="form_63134071782453" id="63134071782453" accept-charset="utf-8">
  <input type="hidden" name="formID" value="63134071782453" />
  <div class="form-all">
    <ul class="form-section page-section">
      <li id="cid_29" class="form-input-wide" data-type="control_head">
        <div class="form-header-group">
          <div class="header-text httac htvam">
            <h2 id="header_29" >
              COMPANY REGISTRATION
            </h2>
            <div id="subHeader_29" class="form-subHeader">
              Fill out the form to register to the company.
            </div>
          </div>
        </div>
      </li><!--
      <li class="form-line" data-type="control_fullname" id="id_15">
              <label class="form-label form-label-left form-label-auto" id="label_15" for="input_15"> Name </label>
        <div id="cid_15" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top;">
            <input class="form-textbox" type="text" size="10" name="q15_name15[first]" id="first_15" />
            <label class="form-sub-label" for="first_15" id="sublabel_first" style="min-height: 13px;"> First Name </label>
          </span>
          <span class="form-sub-label-container" style="vertical-align: top;">
            <input class="form-textbox" type="text" size="15" name="q15_name15[last]" id="last_15" />
            <label class="form-sub-label" for="last_15" id="sublabel_last" style="min-height: 13px;"> Last Name </label>
          </span>
        </div>
      </li>!-->
      <li class="form-line form-line-column form-col-1 jf-required" data-type="control_textbox" id="id_19">
        <label class="form-label form-label-left form-label-auto" id="label_19" for="input_19">
          Name
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_19" class="form-input jf-required">
          <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_19" name="q15_name15" size="32" value="" />
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 jf-required" data-type="control_textbox" id="id_19">
        <label class="form-label form-label-left form-label-auto" id="label_19" for="input_19">
          Roll Number
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_19" class="form-input jf-required">
          <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_19" name="q19_rollNumber19" size="32" value="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_email" id="id_30">
        <label class="form-label form-label-left form-label-auto" id="label_30" for="input_30">
          E-mail
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_30" class="form-input jf-required">
          <input type="email" class=" form-textbox validate[required, Email]" id="input_30" name="q30_email30" size="32" value="" />
        </div>
      </li>
      <li class="form-line" data-type="control_number" id="id_31">
        <label class="form-label form-label-left form-label-auto" id="label_31" for="input_31"> Phone Number </label>
        <div id="cid_31" class="form-input jf-required">
          <input type="number" class="form-number-input  form-textbox" id="input_31" name="q31_phoneNumber" style="width:260px" size="30" value="" data-type="input-number" />
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_26">
        <div id="cid_26" class="form-input-wide">
          <div style="text-align:right" class="form-buttons-wrapper">
            <button id="input_26" type="submit" class="form-submit-button form-submit-button-blue">
              Register
            </button>
            <span>
              &nbsp;
            </span>
            <button id="input_reset_26" type="reset" class="form-submit-reset form-submit-button-blue">
              Clear Form
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <!--
  <input type="hidden" id="simple_spc" name="simple_spc" value="63134071782453" />
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "63134071782453-63134071782453";
  </script>
  -->
</form></body>
</html>
<!--<script type="text/javascript">JotForm.ownerView=true;</script> -->