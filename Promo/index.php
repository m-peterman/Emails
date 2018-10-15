
    <!----------------------------------------- replace begin ------------------------------------------------->
<?php
session_start();

# ---------- Adjust settings here ----------

$loginRequired = TRUE;
$title = "Special offers - Multimedia Technology";
$products = array('15CF-AX2LDCZBA','15CF-AX2LDCEBA');

# ---------- DO NOT ADJUST ----------
require_once($_SERVER['DOCUMENT_ROOT'] . '\nav\includes\ClassController.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '\nav\includes\PricingMatrixClass.php');
$page = new Page($title, '', '');
$user = new User;
$matrix = new PricingMatrix;
$prices = null;

if ($loginRequired && !$user->isAuthenticated()) {
    header('Location:http://' . $_SERVER['SERVER_NAME'] . '/login/?redirect=' . htmlspecialchars($_SERVER['REQUEST_URI']));
    exit;
}

if ($user->isAuthenticated()) {
    $prices = $matrix->getPrices($products);
} else {
    $prices = $matrix->getRRP($products);
}

$page->setExtraHeader('<style type="text/css">
<!--
            * {
                font-family: sans-serif !important;
            }
    
/* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
html, body {
	margin: 0 auto !important;
	padding: 0 !important;
	height: 100% !important;
	width: 100% !important;
}
/* What it does: Stops email clients resizing small text. */
* {
	-ms-text-size-adjust: 100%;
	-webkit-text-size-adjust: 100%;
}
/* What it does: Centers email on Android 4.4 */
div[style*="margin: 16px 0"] {
	margin: 0 !important;
}
/* What it does: Stops Outlook from adding extra spacing to tables. */
table, td {
	mso-table-lspace: 0pt !important;
	mso-table-rspace: 0pt !important;
}
/* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
table {
	border-spacing: 0 !important;
	border-collapse: collapse !important;
	table-layout: fixed !important;
	margin: 0 auto !important;
}
table table table {
	table-layout: auto;
}
/* What it does: Uses a better rendering method when resizing images in IE. */
img {
	-ms-interpolation-mode: bicubic;
}
/* What it does: A work-around for iOS meddling in triggered links. */
*[x-apple-data-detectors] {
	color: inherit !important;
	text-decoration: none !important;
}
/* What it does: A work-around for Gmail meddling in triggered links. */
.x-gmail-data-detectors, .x-gmail-data-detectors *, .aBn {
	border-bottom: 0 !important;
	cursor: default !important;
}
/* What it does: Prevents Gmail from displaying an download button on large, non-linked images. */
.a6S {
	display: none !important;
	opacity: 0.01 !important;
}
img.g-img + div {
	display: none !important;
}
/* What it does: Prevents underlining the button text in Windows 10 */
.button-link {
	text-decoration: none !important;
}


@media only screen and (min-device-width: 375px) and (max-device-width: 413px) { /* iPhone 6 and 6+ */
.email-container {
	min-width: 375px !important;
}.hidden{
		
		display: none;
		float: none;
	}
}

/* What it does: Hover styles for buttons */
.button-td,  .button-a {
	transition: all 100ms ease-in;
}
.button-td:hover,  .button-a:hover {
	background: #555555 !important;
	border-color: #555555 !important;
}

/* Media Queries */
@media screen and (max-width : 767px ) {
/* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */
.fluid {
	width: 100% !important;
	max-width: 100% !important;
	height: auto !important;
	margin-left: auto !important;
	margin-right: auto !important;
}
/* What it does: Forces table cells into full-width rows. */
.stack-column,  .stack-column-center {
	display: block !important;
	width: 100% !important;
	max-width: 100% !important;
	direction: ltr !important;
}
/* And center justify these ones. */
.stack-column-center {
	text-align: center !important;
}
/* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
.center-on-narrow {
	text-align: center !important;
	display: block !important;
	margin-left: auto !important;
	margin-right: auto !important;
	float: none !important;
}
table.center-on-narrow {
	display: inline-block !important;
}
}
-->
</style>
');
$page->createHeader($user->isAuthenticated(), $user->firstName(), $user->salesRep(), $user->retrieveOrder());
?>
    
<div id="pagetext" style="background-color:#e5e5e5"> <br>

    <div width="100%" bgcolor="#aaaaaa" style="margin: 0; mso-line-height-rule: exactly;">
    
    



    <!----------------------------------------- replace end ------------------------------------------------->

<!------------------------------------------------------------- keep-begin ---------------------------------------------------------------------------->

<center style="width: 100%; background: #224c6f; text-align: left;">
  
  <!-- Visually Hidden Preheader Text : BEGIN -->
  <div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family:Helvetica, Arial, 'sans-serif';"> (Optional) This text will appear in the inbox preview, but not the email body. </div>
  <!-- Visually Hidden Preheader Text : END --> 
  
  <!--
            Set the email width. Defined in two places:
            1. max-width for all clients except Desktop Windows Outlook, allowing the email to squish on narrow but never go wider than 680px.
            2. MSO tags for Desktop Windows Outlook enforce a 680px width.
            Note: The Fluid and Responsive templates have a different width (600px). The hybrid grid is more "fragile", and I've found that 680px is a good width. Change with caution.
        -->
  <div style="max-width: 680px; margin: auto;" class="email-container"> 
    <!--[if mso]>
            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="680" align="center">
            <tr>
            <td>
            <![endif]--> 
    
    <!------------------------------------------------------------- keep-end ----------------------------------------------------------------------------> 
    
  
   
  <!----------------------------------------- keep begin -------------------------------------------------> 
  <!-- Email Body : BEGIN -->
  <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px;">
   
   <!-- Hero Image, Flush : BEGIN -->
   <tr>
    <td bgcolor="#eaeaea"><img usemap="#MapMapMap" src="http://www.mmt.com.au/articles/zzmisc/we-want-you-back/171019/img/banner.jpg" width="680" alt="banner" border="0" align="center" style="width: 100%; max-width: 680px; height: auto; background: #aaaaaa; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;" class="fluid g-img" /></td>
   </tr>
   <!-- Hero Image, Flush : END --> 
       <map name="MapMapMap">
  
 <area shape="circle" coords="20,15,17" href="http://www.youtube.com/user/mmtcomau" alt="Youtube">
 <area shape="circle" coords="50,15,17" href="https://www.facebook.com/AskMultimedia/" alt="Facebook">
 <area shape="circle" coords="80,15,17" href="https://www.linkedin.com/company-beta/554279/" alt="Linkedin">
 <area shape="circle" coords="105,15,17" href="http://www.mmt.com.au" alt="MMT Website">
 </map>
      <tr align="center">
   <td height="39" style="padding-bottom:5PX; background-color:#eaeaea ; font-family:Arial, Helvetica, sans-serif ; font-size:24px ; color:#000000 ; font-weight:bold">Online Specials for One Week Only<br>
    <a style="font-size:24px; color:#BF0000" href="http://www.mmt.com.au/"><strong>www.mmt.com.au</strong></a></td>
  </tr>
  <tr style="vertical-align:bottom">
   <td align="center" style="padding-bottom:5PX; background-color:#eaeaea ; font-family:Arial, Helvetica, sans-serif ; font-size:22px ; color:#004080 ; font-weight:bold"><span style="color:#000000">**Offers Expire Midnight Wednesday <span style="padding-bottom:5PX; background-color:#eaeaea ; font-family:Arial, Helvetica, sans-serif ; font-size:21px ; color:#000000 ; font-weight:bold">25th October</span> 2017**</span></td>
  </tr>
     <tr align="center">
   
    <!-- 3 Even Columns : BEGIN -->
   <tr>
    <td align="center" height="100%" valign="top" width="100%" style="padding: 0px 0; background-color:#eaeaea ;"><!-- 3 Even Columns Header : BEGIN --> 
     
     <!-- 3 Even Columns Header : END --> 
     
     <!--[if mso]>
            <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
            <tr>
            <td align="center" valign="top" width="660">
            <![endif]-->
     
     <table role="presentation" border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="max-width:660px;">
      <tr>
       <td align="center" valign="top" style="font-size:0;"><!--[if mso]>
                  <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                  <tr>
                  <td align="left" valign="top" width="220">
                  <![endif]--> 
         <div style=" display:inline-block; margin: 0 -2px; max-width:33.33%; min-width:210px; vertical-align:top; width:100%;" class="stack-column">
         <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
          <tr>
           <td style=" padding: 10px 10px;">
             
        
             <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #ffffff;font-size: 14px;text-align: left;">
             <tr>
              <td align="center" style="background-color: #ffffff; font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;"> XYZrobot Robotic </td>
             </tr>
             <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;"> Arms K-100</td>
                          </tr>
             <tr>
              <td align="center"><img src="http://www.mmt.com.au/articles/zzmisc/we-want-you-back/171019/img/3rowsmall1.jpg" alt="1" width="180" border="0" class="center-on-narrow" style="width: 100%; max-width: 180px;  background: #aaaaaa; font-family: Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
             </tr>
             <tr>
              <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; Advanced robotic arm</span></td></tr>
             <tr>
              <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; wheels programming studying
</span></td></tr>
             <tr>
              <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; Bluetooth 4.0</span></td></tr>
             <tr>
              <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 14px; line-height: 1; text-align: center; text-decoration: line-through; display: block; color: #000000; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;Was&nbsp;$485.00 ex.&nbsp; &nbsp; </span></td>
             </tr>
             <tr>
              <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 19px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #ff0000; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$295.00 ex. &nbsp; &nbsp; </span></td>
             </tr>
             <tr>
              <td class="stack-column-center" style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 16px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #090; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$599.95


 RRP &nbsp; &nbsp; </span></td>
             </tr>
             
             <tr><td><!-- Button : BEGIN -->
               
               <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto">
                <tr>
                 <td style="border-radius: 3px; font-family: Helvetica, Arial, 'sans-serif'; background:#2199d6; text-align: center;" class="button-td"><a href="http://www.mmt.com.au/search/product/?name=37RROBARM6DOFPLUS" style="background: #2199d6; border-bottom-color: #0042ff; /* [disabled]border-bottom-style: solid; */ font-family: Helvetica, Arial, 'sans-serif'; font-size: 20px; line-height: 1.3; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold; border-width: 5px 5px 3px;" class="button-a"> <span style="color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buy Now&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </a></td>
                </tr>
               </table>
               
               <!-- Button : END --> </td></tr>
               <tr>
              <td align="center"><span class="stack-column-center" style="line-height: 1; font-family: Helvetica, Arial, 'sans-serif'; font-size: 12px; color: #0000ff; text-align: center"> 37RROBARM6DOFPLUS</span></td>
             </tr>
					    </table></td>
          </tr>
          
         </table>
        </div>
        <!--[if mso]>
                  </td>
                  <td align="left" valign="top" width="220">
                  <![endif]--> 
        
        <div style=" display:inline-block; margin: 0 -2px; max-width:33.33%; min-width:210px; vertical-align:top; width:100%;" class="stack-column">
         <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
          <tr>
           <td style=" padding: 10px 10px;"> 
        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #ffffff;font-size: 14px;text-align: left;">
             <tr>
              <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;"> EVGA GeForce GTX </td>
             </tr>
             <tr>
              <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;">1060 3GB Gaming</td>
             </tr>
             <tr>
              <td align="center"><img src="http://www.mmt.com.au/articles/zzmisc/we-want-you-back/171019/img/3rowsmall2.jpg" alt="2" width="180" border="0" class="center-on-narrow" style="width: 100%; max-width: 180px;  background: #aaaaaa; font-family: Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
             </tr>
             <tr>
              <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull;  Base Clock: 1506 MHZ</span></td></tr>
             <tr>
              <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; Boost Clock: 1708 MHz</span></td></tr>
             <tr>
              <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; 	Memory Bandwidth: 192 GB/s</span></td></tr>
             <tr>
              <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 14px; line-height: 1; text-align: center; text-decoration: line-through; display: block; color: #000000; font-weight: bold; width: 100%;"><span>  &nbsp;&nbsp;Was&nbsp;$280.00 ex.&nbsp; &nbsp; </span></td>
             </tr>
             <tr>
              <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 19px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #ff0000; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$260.00 ex. &nbsp; &nbsp; </span></td>
             </tr>
             <tr>
              <td class="stack-column-center" style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 16px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #090; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$379.00


 RRP &nbsp; &nbsp; </span></td>
             </tr>
             
                     <tr><td><!-- Button : BEGIN -->
                              
                              <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto">
                                <tr>
                                   <td style="border-radius: 3px; font-family: Helvetica, Arial, 'sans-serif'; background:#2199d6; text-align: center;" class="button-td"><a href="http://www.mmt.com.au/search/product/?name=11E-GTX1060-6160" style="background: #2199d6; border-bottom-color: #0042ff; /* [disabled]border-bottom-style: solid; */ font-family: Helvetica, Arial, 'sans-serif'; font-size: 20px; line-height: 1.3; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold; border-width: 5px 5px 3px;" class="button-a"> <span style="color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buy Now&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </a></td>
                                </tr>
                              </table>
                              
                              <!-- Button : END --> </td></tr>
                              <tr>
              <td align="center"><span class="stack-column-center" style="line-height: 1; font-family: Helvetica, Arial, 'sans-serif'; font-size: 12px; color: #0000ff; text-align: center">11E-GTX1060-6160</span></td>
             </tr>
						  </table></td>
                    </tr>
                  </table>
                </div>
                
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="220">
                                    <![endif]--> 
                
                 <div style="  display:inline-block; margin: 0 -2px; max-width:33.33%; min-width:210px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td style=" padding: 10px 10px;">      <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #ffffff;font-size: 14px;text-align: left;">
                          <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;">23&quot; HP EliteDisplay E233</td>
                          </tr>
                          <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;"> Business Display</td>
                          </tr>
                          <tr>
                            <td align="center"><img src="http://www.mmt.com.au/articles/zzmisc/we-want-you-back/171019/img/3rowsmall3.jpg" width="180" border="0" alt="15" class="center-on-narrow" style="width: 100%; max-width: 180px;  background: #aaaaaa; font-family: Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
                          </tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; Res:	1920 x 1080</span></td>
                          </tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; Contrast	Ratio: 5,000,000:1</span></td>
                          </tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull;  Tilt / Swivel / Pivot rotation: 90</span></td>
                          </tr>
                          <tr>
                            <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 14px; line-height: 1; text-align: center; text-decoration: line-through; display: block; color: #000000; font-weight: bold; width: 100%;"><span>  &nbsp;&nbsp;Was&nbsp;$219.00 ex.&nbsp; &nbsp; </span></td>
                          </tr>
                          <tr>
                            <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 19px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #ff0000; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$205.00 ex. &nbsp; &nbsp; </span></td>
                          </tr>
                          <tr>
                            <td class="stack-column-center" style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 16px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #090; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$349.00


 RRP &nbsp; &nbsp; </span></td>
                          </tr>
                          
                          <tr>
                            <td><!-- Button : BEGIN -->
                              <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto">
                                <tr>
                                   <td style="border-radius: 3px; font-family: Helvetica, Arial, 'sans-serif'; background:#2199d6; text-align: center;" class="button-td"><a href="http://www.mmt.com.au/search/product/?name=13H-1FH46AA" style="background: #2199d6; border-bottom-color: #0042ff; /* [disabled]border-bottom-style: solid; */ font-family: Helvetica, Arial, 'sans-serif'; font-size: 20px; line-height: 1.3; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold; border-width: 5px 5px 3px;" class="button-a"> <span style="color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buy Now&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a></td>
                                </tr>
                              </table>
                              <!-- Button : END --></td>
                          </tr>
                          <tr>
                            <td align="center"><span class="stack-column-center" style="line-height: 1; font-family: Helvetica, Arial, 'sans-serif'; font-size: 12px; color: #0000ff; text-align: center">13H-1FH46AA</span></td>
                          </tr>
                          </table></td>
                    </tr>
                  </table>
                </div>
                <!--[if mso]>
                                    </td>
                                    </tr>
                                    </table>
                                    <![endif]--></td>
            </tr>
          </table>
          
          <!--[if mso]>
                        </td>
                        </tr>
                        </table>
                        <![endif]--></td>
      </tr>
      <!-- 3 Even Columns : END --> 
      
      <!-- 3 Even Columns : BEGIN -->
      <tr>
        <td align="center" height="100%" valign="top" width="100%" style="padding: 0px 0; background-color:#eaeaea ;"><!-- 3 Even Columns Header : BEGIN --> 
          
          <!-- 3 Even Columns Header : END --> 
          
          <!--[if mso]>
                        <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                        <tr>
                        <td align="center" valign="top" width="660">
                        <![endif]-->
          
          <table role="presentation" border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="max-width:660px;">
            <tr>
              <td align="center" valign="top" style="font-size:0;"><!--[if mso]>
                                    <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                                    <tr>
                                    <td align="left" valign="top" width="220">
                                    <![endif]--> 
                 <div style="  display:inline-block; margin: 0 -2px; max-width:33.33%; min-width:210px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td style=" padding: 10px 10px;">
                        
                         <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #ffffff;font-size: 14px;text-align: left;">
                          <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;"> Panasonic Toughbook</td>
                          </tr>
                          <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;"> CF-54 Mk1</td>
                          </tr>
                          <tr>
                            <td align="center"><img src="http://www.mmt.com.au/articles/zzmisc/we-want-you-back/171019/img/3rowsmall4.jpg" width="180" border="0" alt="4" class="center-on-narrow" style="width: 100%; max-width: 180px;  background: #aaaaaa; font-family: Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
                          </tr>
                          <tr>
              <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull;		Intel Core i5-5300U (2.30GHz)</span></td></tr>
             <tr>
              <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; Memory 8GB DDR3</span></td></tr>
             <tr>
              <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; Semi-Rugged (14.0")</span></td></tr>
             <tr>
                            <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 14px; line-height: 1; text-align: center; text-decoration: line-through; display: block; color: #000000; font-weight: bold; width: 100%;"><span>  &nbsp;&nbsp;Was&nbsp;$3,635.00 ex.&nbsp; &nbsp; </span></td>
                          </tr>
                          <tr>
                            <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 19px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #ff0000; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$2,249.00 ex. &nbsp; &nbsp; </span></td>
                          </tr>
                          <tr>
                            <td class="stack-column-center" style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 16px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #090; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$4,299.00




  RRP &nbsp; &nbsp; </span></td>
                          </tr>
                          
                          <tr><td><!-- Button : BEGIN -->
                              
                              <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto">
                                <tr>
                                   <td style="border-radius: 3px; font-family: Helvetica, Arial, 'sans-serif'; background:#2199d6; text-align: center;" class="button-td"><a href="http://www.mmt.com.au/search/product/?name=15CF-54B5885BA" style="background: #2199d6; border-bottom-color: #0042ff; /* [disabled]border-bottom-style: solid; */ font-family: Helvetica, Arial, 'sans-serif'; font-size: 20px; line-height: 1.3; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold; border-width: 5px 5px 3px;" class="button-a"> <span style="color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buy Now&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </a></td>
                                </tr>
                              </table>
                              
                              <!-- Button : END --> </td></tr>
                              <tr>
                            <td align="center"><span class="stack-column-center" style="line-height: 1; font-family: Helvetica, Arial, 'sans-serif'; font-size: 12px; color: #0000ff; text-align: center">15CF-54B5885BA</span></td>
                          </tr>
							 </table></td>
                    </tr>
                  </table>
                </div>
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="220">
                                    <![endif]--> 
                
               <div style="  display:inline-block; margin: 0 -2px; max-width:33.33%; min-width:210px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td style=" padding: 10px 10px;">  
               <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #ffffff;font-size: 14px;text-align: left;">
                          <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;"> Nikon Digital Camera</td>
                          </tr>
                           <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;">COOLPIX A900 </td>
                          </tr>
                          <tr>
                            <td align="center"><img src="http://www.mmt.com.au/articles/zzmisc/we-want-you-back/171019/img/3rowsmall5.jpg" width="180" border="0" alt="5" class="center-on-narrow" style="width: 100%; max-width: 180px;  background: #aaaaaa; font-family: Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
                          </tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; 35x optical zoom </span></td></tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; 	20.3 MP</span></td></tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;"> 	&bull; 4K UHD 3840 x 2160/30p</span></td></tr>
                          <tr>
                            <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 14px; line-height: 1; text-align: center; text-decoration: line-through; display: block; color: #000000; font-weight: bold; width: 100%;"><span>  &nbsp;&nbsp;Was&nbsp;$419.00 ex.&nbsp; &nbsp; </span></td>
                          </tr>
                          <tr>
                            <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 19px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #ff0000; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$399.00 ex. &nbsp; &nbsp; </span></td>
                          </tr>
                          <tr>
                            <td class="stack-column-center" style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 16px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #090; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$579.00



 RRP &nbsp; &nbsp; </span></td>
                          </tr>
                          
                          <tr><td><!-- Button : BEGIN -->
                              
                              <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto">
                                <tr>
                                   <td style="border-radius: 3px; font-family: Helvetica, Arial, 'sans-serif'; background:#2199d6; text-align: center;" class="button-td"><a href="http://www.mmt.com.au/search/product/?name=09N-A900-BLK" style="background: #2199d6; border-bottom-color: #0042ff; /* [disabled]border-bottom-style: solid; */ font-family: Helvetica, Arial, 'sans-serif'; font-size: 20px; line-height: 1.3; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold; border-width: 5px 5px 3px;" class="button-a"> <span style="color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buy Now&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </a></td>
                                </tr>
                              </table>
                              
                              <!-- Button : END --> </td></tr>
                              <tr>
                            <td align="center"><span class="stack-column-center" style="line-height: 1; font-family: Helvetica, Arial, 'sans-serif'; font-size: 12px; color: #0000ff; text-align: center">  09N-A900-BLK</span></td>
                          </tr>
						  </table></td>
                    </tr>
                  </table>
                </div>
                
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="220">
                                    <![endif]--> 
                
                <div style="  display:inline-block; margin: 0 -2px; max-width:33.33%; min-width:210px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td style=" padding: 10px 10px;">      <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #ffffff;font-size: 14px;text-align: left;">
                          <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;"> Shintaro  </td>
                          </tr>
                           <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;">Stereo Headset</td>
                          </tr>
                          <tr>
                            <td align="center"><img src="http://www.mmt.com.au/articles/zzmisc/we-want-you-back/171019/img/3rowsmall6.jpg" width="180" border="0" alt="6" class="center-on-narrow" style="width: 100%; max-width: 180px;  background: #aaaaaa; font-family: Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
                          </tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; 	 Single 3.5mm Combo jack</span></td></tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;"> &bull; 	In-line Volume Control and Mic</span></td></tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; Noise-Cancelling Microphone</span></td></tr>
                          <tr>
                            <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 14px; line-height: 1; text-align: center; text-decoration: line-through; display: block; color: #000000; font-weight: bold; width: 100%;"><span>  &nbsp;&nbsp;Was&nbsp;$9.95 ex.&nbsp; &nbsp; </span></td>
                          </tr>
                          <tr>
                            <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 19px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #ff0000; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$4.95 ex. &nbsp; &nbsp; </span></td>
                          </tr>
                          <tr>
                            <td class="stack-column-center" style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 16px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #090; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$34.95




 RRP &nbsp; &nbsp; </span></td>
                          </tr>
                         
                          <tr><td><!-- Button : BEGIN -->
                              
                              <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto">
                                <tr>
                                   <td style="border-radius: 3px; font-family: Helvetica, Arial, 'sans-serif'; background:#2199d6; text-align: center;" class="button-td"><a href="http://www.mmt.com.au/search/product/?name=14SH-105MC" style="background: #2199d6; border-bottom-color: #0042ff; /* [disabled]border-bottom-style: solid; */ font-family: Helvetica, Arial, 'sans-serif'; font-size: 20px; line-height: 1.3; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold; border-width: 5px 5px 3px;" class="button-a"> <span style="color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buy Now&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </a></td>
                                </tr>
                              </table>
                              
                              <!-- Button : END --> </td></tr>
                               <tr>
                            <td align="center"><span class="stack-column-center" style="line-height: 1; font-family: Helvetica, Arial, 'sans-serif'; font-size: 12px; color: #0000ff; text-align: center">14SH-105MC</span></td>
                          </tr>
						  </table></td>
                    </tr>
                  </table>
                </div>
                <!--[if mso]>
                                    </td>
                                    </tr>
                                    </table>
                                    <![endif]--></td>
            </tr>
          </table>
          
          <!--[if mso]>
                        </td>
                        </tr>
                        </table>
                        <![endif]--></td>
      </tr>
      <!-- 3 Even Columns : END --> 
      
      
      <!-- 3 Even Columns : BEGIN -->
      <tr>
        <td align="center" height="100%" valign="top" width="100%" style="padding: 0px 0; background-color:#eaeaea ;"><!-- 3 Even Columns Header : BEGIN --> 
          
          <!-- 3 Even Columns Header : END --> 
          
          <!--[if mso]>
                        <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                        <tr>
                        <td align="center" valign="top" width="660">
                        <![endif]-->
          
          <table role="presentation" border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="max-width:660px;">
            <tr>
              <td align="center" valign="top" style="font-size:0;"><!--[if mso]>
                                    <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                                    <tr>
                                    <td align="left" valign="top" width="220">
                                    <![endif]--> 
                 <div style="  display:inline-block; margin: 0 -2px; max-width:33.33%; min-width:210px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td style=" padding: 10px 10px;">
                        
                         <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #ffffff;font-size: 14px;text-align: left;">
                         <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;"> NEC ME301WG</td>
                          </tr>
                           <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;">LCD Projector </td>
                          </tr>
                          <tr>
                            <td align="center"><img src="http://www.mmt.com.au/articles/zzmisc/we-want-you-back/171019/img/3rowsmall7.jpg" width="180" height="" border="0" alt="7" class="center-on-narrow" style="width: 100%; max-width: 180px;  background: #aaaaaa; font-family: Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
                          </tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull;  	1280 x 800 (WXGA)</span></td></tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; 3000 Lumans</span></td></tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; 1.7x optical zoom</span></td></tr>
                          <tr>
                            <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 14px; line-height: 1; text-align: center; text-decoration: line-through; display: block; color: #000000; font-weight: bold; width: 100%;"><span>  &nbsp;&nbsp;Was&nbsp;$766.00 ex.&nbsp; &nbsp; </span></td>
                          </tr>
                          <tr>
                            <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 19px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #ff0000; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$729.00 ex. &nbsp; &nbsp; </span></td>
                          </tr>
                          <tr>
                            <td class="stack-column-center" style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 16px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #090; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$1,155.00




 RRP &nbsp; &nbsp; </span></td>
                          </tr>
                         
                          <tr><td><!-- Button : BEGIN -->
                              
                              <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto">
                                <tr>
                                   <td style="border-radius: 3px; font-family: Helvetica, Arial, 'sans-serif'; background:#2199d6; text-align: center;" class="button-td"><a href="http://www.mmt.com.au/search/product/?name=13NEC-ME301WG" style="background: #2199d6; border-bottom-color: #0042ff; /* [disabled]border-bottom-style: solid; */ font-family: Helvetica, Arial, 'sans-serif'; font-size: 20px; line-height: 1.3; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold; border-width: 5px 5px 3px;" class="button-a"> <span style="color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buy Now&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </a></td>
                                </tr>
                              </table>
                              
                              <!-- Button : END --> </td></tr>
                              <tr>
                            <td align="center"><span class="stack-column-center" style="line-height: 1; font-family: Helvetica, Arial, 'sans-serif'; font-size: 12px; color: #0000ff; text-align: center">13NEC-ME301WG</span></td>
                          </tr>
							 </table></td>
                    </tr>
                  </table>
                </div>
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="220">
                                    <![endif]--> 
                
               <div style="  display:inline-block; margin: 0 -2px; max-width:33.33%; min-width:210px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td style=" padding: 10px 10px;">    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #ffffff;font-size: 14px;text-align: left;">
                          <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;"> Atdec Visidec Focus Desk </td>
                          </tr>
                          <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;">Mount Double Arm</td> 
                          
                          </tr>
                          <tr>
                            <td align="center"><img src="http://www.mmt.com.au/articles/zzmisc/we-want-you-back/171019/img/3rowsmall8.jpg" width="180" height="" border="0" alt="8" class="center-on-narrow" style="width: 100%; max-width: 180px;  background: #aaaaaa; font-family: Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
                          </tr>
                          <tr>
              <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull;	Suits Displays from 12" to 30"</span></td></tr>
             <tr>
              <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; Bolt through and desk clamp</span></td></tr>
             <tr>
              <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; Portrait, landscape & rotation</span></td></tr>
             <tr>
                            <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 14px; line-height: 1; text-align: center; text-decoration: line-through; display: block; color: #000000; font-weight: bold; width: 100%;"><span>  &nbsp;&nbsp;Was&nbsp;$247.00 ex.&nbsp; &nbsp; </span></td>
                          </tr>
                          <tr>
                            <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 19px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #ff0000; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$220.00 ex. &nbsp; &nbsp; </span></td>
                          </tr>
                          <tr>
                            <td class="stack-column-center" style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 16px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #090; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$374.00





 RRP &nbsp; &nbsp; </span></td>
                          </tr>
                        
                          <tr><td><!-- Button : BEGIN -->
                              
                              <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto">
                                <tr>
                                   <td style="border-radius: 3px; font-family: Helvetica, Arial, 'sans-serif'; background:#2199d6; text-align: center;" class="button-td"><a href="http://www.mmt.com.au/search/product/?name=13VIS-FOCUS-DB" style="background: #2199d6; border-bottom-color: #0042ff; /* [disabled]border-bottom-style: solid; */ font-family: Helvetica, Arial, 'sans-serif'; font-size: 20px; line-height: 1.3; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold; border-width: 5px 5px 3px;" class="button-a"> <span style="color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buy Now&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </a></td>
                                </tr>
                                
                              </table>
                              
                              <!-- Button : END --> </td></tr>
                              <tr>
                            <td align="center"><span class="stack-column-center1" style="line-height: 1; font-family: Helvetica, Arial, 'sans-serif'; font-size: 12px; color: #0000ff; text-align: center">13VIS-FOCUS-DB</span></td>
                          </tr>
						  </table></td>
                    </tr>
                  </table>
                </div>
                
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="220">
                                    <![endif]--> 
                
                <div style="  display:inline-block; margin: 0 -2px; max-width:33.33%; min-width:210px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td style=" padding: 10px 10px;">       <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #ffffff;font-size: 14px;text-align: left;">
                          <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;"> Asus Transformer</td>
                          </tr>
                          <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;">Book T100</td>
                          </tr>
                          <tr>
                            <td align="center"><img src="http://www.mmt.com.au/articles/zzmisc/we-want-you-back/171019/img/3rowsmall9.jpg" width="180" height="" border="0" alt="9" class="center-on-narrow" style="width: 100%; max-width: 180px;  background: #aaaaaa; font-family: Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
                          </tr>
                          
                          <tr>
              <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull;	Convertible 2-in-1 Notebook</span></td></tr>
             <tr>
              <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; 	Windows 8.1</span></td></tr>
             <tr>
              <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; 10.1" FHD</span></td></tr>
             <tr>
                          
                          <tr>
                            <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 14px; line-height: 1; text-align: center; text-decoration: line-through; display: block; color: #000000; font-weight: bold; width: 100%;"><span>  &nbsp;&nbsp;Was&nbsp;$309.00
 ex.&nbsp; &nbsp; </span></td>
                          </tr>
                          <tr>
                            <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 19px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #ff0000; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$295.00 ex. &nbsp; &nbsp; </span></td>
                          </tr>
                          <tr>
                            <td class="stack-column-center" style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 16px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #090; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$449.00


 RRP &nbsp; &nbsp; </span></td>
                          </tr>
                          
                          <tr>
                            <td><!-- Button : BEGIN -->
                              <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto">
                                <tr>
                                   <td style="border-radius: 3px; font-family: Helvetica, Arial, 'sans-serif'; background:#2199d6; text-align: center;" class="button-td"><a href="http://www.mmt.com.au/search/product/?name=15AS-T100CHI-FG003B" style="background: #2199d6; border-bottom-color: #0042ff; /* [disabled]border-bottom-style: solid; */ font-family: Helvetica, Arial, 'sans-serif'; font-size: 20px; line-height: 1.3; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold; border-width: 5px 5px 3px;" class="button-a"> <span style="color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buy Now&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a></td>
                                </tr>
                              </table>
                              <!-- Button : END --></td>
                          </tr>
                          <tr>
                            <td align="center"><span class="stack-column-center1" style="line-height: 1; font-family: Helvetica, Arial, 'sans-serif'; font-size: 12px; color: #0000ff; text-align: center">15AS-T100CHI-FG003B</span></td>
                          </tr>
                          </table></td>
                    </tr>
                  </table>
                </div>
                <!--[if mso]>
                                    </td>
                                    </tr>
                                    </table>
                                    <![endif]--></td>
            </tr>
          </table>
          
          <!--[if mso]>
                        </td>
                        </tr>
                        </table>
                        <![endif]--></td>
      </tr>
      <!-- 3 Even Columns : END --> 
      
        <!-- 3 Even Columns : BEGIN -->
      <tr>
        <td align="center" height="100%" valign="top" width="100%" style="padding: 0px 0; background-color:#eaeaea ;"><!-- 3 Even Columns Header : BEGIN --> 
          
          <!-- 3 Even Columns Header : END --> 
          
          <!--[if mso]>
                        <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                        <tr>
                        <td align="center" valign="top" width="660">
                        <![endif]-->
          
          <table role="presentation" border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="max-width:660px;">
            <tr>
              <td align="center" valign="top" style="font-size:0;"><!--[if mso]>
                                    <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                                    <tr>
                                    <td align="left" valign="top" width="220">
                                    <![endif]--> 
                 <div style="  display:inline-block; margin: 0 -2px; max-width:33.33%; min-width:210px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td style=" padding: 10px 10px;">
                        
                         <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #ffffff;font-size: 14px;text-align: left;">
                          <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;">OKI B401dn Mono A4</td>
                          </tr>
                         <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;">Printer</td>
                          </tr>
                          <tr>
                            <td align="center"><img src="http://www.mmt.com.au/articles/zzmisc/we-want-you-back/171019/img/3rowsmall10.jpg" width="180" height="" border="0" alt="10" class="center-on-narrow" style="width: 100%; max-width: 180px;  background: #aaaaaa; font-family: Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
                          </tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; 29PPM	</span></td></tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull;  250 Sheet</span></td></tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; Duplex Network Printer</span></td></tr>
                          <tr>
                            <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 14px; line-height: 1; text-align: center; text-decoration: line-through; display: block; color: #000000; font-weight: bold; width: 100%;"><span>  &nbsp;&nbsp;Was&nbsp;$165.00 ex.&nbsp; &nbsp; </span></td>
                          </tr>
                          <tr>
                            <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 19px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #ff0000; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$75.00 ex. &nbsp; &nbsp; </span></td>
                          </tr>
                          <tr>
                            <td class="stack-column-center" style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 16px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #090; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$244.75


 RRP &nbsp; &nbsp; </span></td>
                          </tr>
                          
                          <tr><td><!-- Button : BEGIN -->
                              
                              <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto">
                                <tr>
                                   <td style="border-radius: 3px; font-family: Helvetica, Arial, 'sans-serif'; background:#2199d6; text-align: center;" class="button-td"><a href="http://www.mmt.com.au/search/product/?name=17B401DN" style="background: #2199d6; border-bottom-color: #0042ff; /* [disabled]border-bottom-style: solid; */ font-family: Helvetica, Arial, 'sans-serif'; font-size: 20px; line-height: 1.3; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold; border-width: 5px 5px 3px;" class="button-a"> <span style="color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buy Now&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </a></td>
                                </tr>
                              </table>
                              
                              <!-- Button : END --> </td></tr>
                              <tr>
                            <td align="center"><span class="stack-column-center1" style="line-height: 1; font-family: Helvetica, Arial, 'sans-serif'; font-size: 12px; color: #0000ff; text-align: center">  17B401DN</span></td>
                          </tr>
							 </table></td>
                    </tr>
                  </table>
                </div>
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="220">
                                    <![endif]--> 
                
               <div style="  display:inline-block; margin: 0 -2px; max-width:33.33%; min-width:210px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td style=" padding: 10px 10px;">  
               <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #ffffff;font-size: 14px;text-align: left;">
                          <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;"> Matrox TripleHead2Go </td>
                          </tr>
                          <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;">DP Edition</td>
                          </tr>
                          <tr>
                            <td align="center"><img src="http://www.mmt.com.au/articles/zzmisc/we-want-you-back/171019/img/3rowsmall11.jpg" width="180" border="0" alt="11" class="center-on-narrow" style="width: 100%; max-width: 180px;  background: #aaaaaa; font-family: Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
                          </tr>
                          <tr>
                          <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; Run three independent monitors</span></td></tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; Expanded	Gaming Exprience</span></td></tr>
                          <tr>
                          <tr>
                              <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; Use applications on each monitor</span></td></tr>
                          <tr>
                            <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 14px; line-height: 1; text-align: center; text-decoration: line-through; display: block; color: #000000; font-weight: bold; width: 100%;"><span>  &nbsp;&nbsp;Was&nbsp;$530.00 ex.&nbsp; &nbsp; </span></td>
                          </tr>
                          <tr>
                            <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 19px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #ff0000; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$449.00 ex. &nbsp; &nbsp; </span></td>
                          </tr>
                          <tr>
                            <td class="stack-column-center" style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 16px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #090; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$689.00



 RRP &nbsp; &nbsp; </span></td>
                          </tr>
                          
                          <tr><td><!-- Button : BEGIN -->
                              
                              <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto">
                                <tr>
                                   <td style="border-radius: 3px; font-family: Helvetica, Arial, 'sans-serif'; background:#2199d6; text-align: center;" class="button-td"><a href="http://www.mmt.com.au/search/product/?name=11MT2G-DP-MIF" style="background: #2199d6; border-bottom-color: #0042ff; /* [disabled]border-bottom-style: solid; */ font-family: Helvetica, Arial, 'sans-serif'; font-size: 20px; line-height: 1.3; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold; border-width: 5px 5px 3px;" class="button-a"> <span style="color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buy Now&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </a></td>
                                </tr>
                              </table>
                              
                              <!-- Button : END --> </td></tr>
                              <tr>
                            <td height="14" align="center"><span class="stack-column-center1" style="line-height: 1; font-family: Helvetica, Arial, 'sans-serif'; font-size: 12px; color: #0000ff; text-align: center">   11MT2G-DP-MIF</span></td>
                          </tr>
						  </table></td>
                    </tr>
                  </table>
                </div>
                
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="220">
                                    <![endif]--> 
                
                <div style="  display:inline-block; margin: 0 -2px; max-width:33.33%; min-width:210px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td style=" padding: 10px 10px;">      <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #ffffff;font-size: 14px;text-align: left;">
                          <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;"> Cisco SPA504G </td>
                          </tr>
                          <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;">4-Line IP Phone</td>
                          </tr>
                          <tr>
                            <td align="center"><img src="http://www.mmt.com.au/articles/zzmisc/we-want-you-back/171019/img/3rowsmall12.jpg" width="180" border="0" alt="12" class="center-on-narrow" style="width: 100%; max-width: 180px;  background: #aaaaaa; font-family: Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
                          </tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull;  backlit display for ease of use</span></td>
                          </tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; Power over Ethernet (PoE)</span></td>
                          </tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; Easy installation </span></td>
                          </tr>
                          <tr>
                            <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 14px; line-height: 1; text-align: center; text-decoration: line-through; display: block; color: #000000; font-weight: bold; width: 100%;"><span>  &nbsp;&nbsp;Was&nbsp;$107.03 ex.&nbsp; &nbsp; </span></td>
                          </tr>
                          <tr>
                            <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 19px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #ff0000; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$104.85 ex. &nbsp; &nbsp; </span></td>
                          </tr>
                          <tr>
                            <td class="stack-column-center" style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 16px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #090; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$392.45


 RRP &nbsp; &nbsp; </span></td>
                          </tr>
                          
                          <tr><td><!-- Button : BEGIN -->
                              
                              <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto">
                                <tr>
                                   <td style="border-radius: 3px; font-family: Helvetica, Arial, 'sans-serif'; background:#2199d6; text-align: center;" class="button-td"><a href="http://www.mmt.com.au/search/product/?name=16SPA504G" style="background: #2199d6; border-bottom-color: #0042ff; /* [disabled]border-bottom-style: solid; */ font-family: Helvetica, Arial, 'sans-serif'; font-size: 20px; line-height: 1.3; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold; border-width: 5px 5px 3px;" class="button-a"> <span style="color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buy Now&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </a></td>
                                </tr>
                              </table>
                              
                              <!-- Button : END --> </td></tr>
                              <tr>
                            <td align="center"><span class="stack-column-center1" style="line-height: 1; font-family: Helvetica, Arial, 'sans-serif'; font-size: 12px; color: #0000ff; text-align: center">16SPA504G</span></td>
                          </tr>
						  </table></td>
                    </tr>
                    
                  </table>
                </div>
                <!--[if mso]>
                                    </td>
                                    </tr>
                                    </table>
                                    <![endif]--></td>
            </tr>
          </table>
          
          <!--[if mso]>
                        </td>
                        </tr>
                        </table>
                        <![endif]--></td>
      </tr>
      <!-- 3 Even Columns : END --> 
        <!-- 3 Even Columns : BEGIN -->
      <tr>
        <td align="center" height="100%" valign="top" width="100%" style="padding: 0px 0; background-color:#eaeaea ;"><!-- 3 Even Columns Header : BEGIN --> 
          
          <!-- 3 Even Columns Header : END --> 
          
          <!--[if mso]>
                        <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                        <tr>
                        <td align="center" valign="top" width="660">
                        <![endif]-->
          
          <table role="presentation" border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="max-width:660px;">
            <tr>
              <td align="center" valign="top" style="font-size:0;"><!--[if mso]>
                                    <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                                    <tr>
                                    <td align="left" valign="top" width="220">
                                    <![endif]--> 
                 <div style="  display:inline-block; margin: 0 -2px; max-width:33.33%; min-width:210px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td style=" padding: 10px 10px;">
                        
                         <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #ffffff;font-size: 14px;text-align: left;">
                          <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;">PowerShield ZapGuard </td>
                          </tr>
                         <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;">8 Way Powerboard</td>
                          </tr>
                          <tr>
                            <td align="center"><img src="http://www.mmt.com.au/articles/zzmisc/we-want-you-back/171019/img/3rowsmall13.jpg" width="180" border="0" alt="13" class="center-on-narrow" style="width: 100%; max-width: 180px;  background: #aaaaaa; font-family: Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
                          </tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; Amps: 110,000A @8/20uS</span></td></tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; Joules: 4090J @10/1000uS</span></td></tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; 	Response: &#60; 1 nanoseconds</span></td></tr>
                          <tr>
                            <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 14px; line-height: 1; text-align: center; text-decoration: line-through; display: block; color: #000000; font-weight: bold; width: 100%;"><span>  &nbsp;&nbsp;Was&nbsp;$38.00 ex.&nbsp; &nbsp; </span></td>
                          </tr>
                          <tr>
                            <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 19px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #ff0000; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$29.50 ex. &nbsp; &nbsp; </span></td>
                          </tr>
                          <tr>
                            <td class="stack-column-center" style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 16px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #090; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$72.00
 RRP &nbsp; &nbsp; </span></td>
                          </tr>
                          
                          <tr><td><!-- Button : BEGIN -->
                              
                              <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto">
                                <tr>
                                   <td style="border-radius: 3px; font-family: Helvetica, Arial, 'sans-serif'; background:#2199d6; text-align: center;" class="button-td"><a href="http://www.mmt.com.au/search/product/?name=31PSZ8AV1" style="background: #2199d6; border-bottom-color: #0042ff; /* [disabled]border-bottom-style: solid; */ font-family: Helvetica, Arial, 'sans-serif'; font-size: 20px; line-height: 1.3; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold; border-width: 5px 5px 3px;" class="button-a"> <span style="color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buy Now&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </a></td>
                                </tr>
                              </table>
                              
                              <!-- Button : END --> </td></tr>
                              <tr>
                            <td align="center"><span class="stack-column-center1" style="line-height: 1; font-family: Helvetica, Arial, 'sans-serif'; font-size: 12px; color: #0000ff; text-align: center">31PSZ8AV1</span></td>
                          </tr>
							 </table></td>
                    </tr>
                  </table>
                </div>
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="220">
                                    <![endif]--> 
                
               <div style="  display:inline-block; margin: 0 -2px; max-width:33.33%; min-width:210px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td style=" padding: 10px 10px;">  
               <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #ffffff;font-size: 14px;text-align: left;">
                          <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;">Everki 16"</td>
                          </tr>
                          <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;">Agile Briefcase</td>
                          </tr>
                          <tr>
                            <td align="center"><img src="http://www.mmt.com.au/articles/zzmisc/we-want-you-back/171019/img/3rowsmall14.jpg" width="180" height="" border="0" alt="14" class="center-on-narrow" style="width: 100%; max-width: 180px;  background: #aaaaaa; font-family: Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
                          </tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; 	Leather handles and accents</span></td></tr>
                         <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull;  Anti-shock foam padding</span></td></tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull;  Lifetime Warranty</span></td></tr>
                          <tr>
                            <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 14px; line-height: 1; text-align: center; text-decoration: line-through; display: block; color: #000000; font-weight: bold; width: 100%;"><span>  &nbsp;&nbsp;Was&nbsp;$48.95 ex.&nbsp; &nbsp; </span></td>
                          </tr>
                          <tr>
                            <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 19px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #ff0000; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$23.95  ex. &nbsp; &nbsp; </span></td>
                          </tr>
                          <tr>
                            <td class="stack-column-center" style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 16px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #090; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$79.95

 RRP &nbsp; &nbsp; </span></td>
                          </tr>
                          
                          <tr><td><!-- Button : BEGIN -->
                              
                              <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto">
                                <tr>
                                   <td style="border-radius: 3px; font-family: Helvetica, Arial, 'sans-serif'; background:#2199d6; text-align: center;" class="button-td"><a href="http://www.mmt.com.au/search/product/?name=15EKB424" style="background: #2199d6; border-bottom-color: #0042ff; /* [disabled]border-bottom-style: solid; */ font-family: Helvetica, Arial, 'sans-serif'; font-size: 20px; line-height: 1.3; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold; border-width: 5px 5px 3px;" class="button-a"> <span style="color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buy Now&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </a></td>
                                </tr>
                              </table>
                              
                              <!-- Button : END --> </td></tr>
                              <tr>
                            <td align="center"><span class="stack-column-center" style="line-height: 1; font-family: Helvetica, Arial, 'sans-serif'; font-size: 12px; color: #0000ff; text-align: center">15EKB424</span></td>
                          </tr>
						  </table></td>
                    </tr>
                  </table> 
                </div>
                
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="220">
                                    <![endif]--> 
                
                                <div style="  display:inline-block; margin: 0 -2px; max-width:33.33%; min-width:210px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td style=" padding: 10px 10px;">
               <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #ffffff;font-size: 14px;text-align: left;">
                          <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;"> Samsung T5 </td>
                          </tr>
                          <tr>
                            <td align="center" style="background-color: #ffffff;font-family: Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 1.2; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center; font-weight: bold;">Portable SSD</td>
                          </tr>
                          <tr>
                            <td align="center"><img src="http://www.mmt.com.au/articles/zzmisc/we-want-you-back/171019/img/3rowsmall15.jpg" width="180" border="0" alt="3" class="center-on-narrow" style="width: 100%; max-width: 180px;  background: #aaaaaa; font-family: Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
                          </tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull; 500GB</span></td></tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull;  Speed Up to 540 MB/sec.</span></td></tr>
                          <tr>
                            <td><span style="font-family: Helvetica, Arial, 'sans-serif';padding-left:4px; font-size: 13px; line-height: 1; text-align: left; text-decoration: none; display: block; color: #000000; width: 100%;">&bull;   51 grams &amp; 10.5 mm thick</span></td></tr>
                          <tr>
                            <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 14px; line-height: 1; text-align: center; text-decoration: line-through; display: block; color: #000000; font-weight: bold; width: 100%;"><span>  &nbsp;&nbsp;Was&nbsp;$267.50 ex.&nbsp; &nbsp; </span></td>
                          </tr>
                          <tr>
                            <td style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 19px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #ff0000; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$262.50 ex. &nbsp; &nbsp; </span></td>
                          </tr>
                          <tr>
                            <td class="stack-column-center" style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 16px; line-height: 1; text-align: center; text-decoration: none; display: block; color: #090; font-weight: bold; width: 100%;"><span> &nbsp;&nbsp;&nbsp;&nbsp;$329.00

RRP &nbsp; &nbsp; </span></td>
                          </tr>
                          <tr><td><!-- Button : BEGIN -->
                              
                              <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto">
                                <tr>
                                
                                   <td style="border-radius: 3px; font-family: Helvetica, Arial, 'sans-serif'; background:#2199d6; text-align: center;" class="button-td"><a href="http://www.mmt.com.au/search/product/?name=06SU-T5-500G" style="background: #2199d6; border-bottom-color: #0042ff; /* [disabled]border-bottom-style: solid; */ font-family: Helvetica, Arial, 'sans-serif'; font-size: 20px; line-height: 1.3; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold; border-width: 5px 5px 3px;" class="button-a"> <span style="color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buy Now&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </a></td>
                                </tr>
                                
                              </table>
                              
                              <!-- Button : END --> </td></tr>
                              <tr>
                            <td align="center"><span class="stack-column-center" style="line-height: 1; font-family: Helvetica, Arial, 'sans-serif'; font-size: 12px; color: #0000ff; text-align: center">06SU-T5-500G</span></td>
                          </tr>
						  </table></td>
                    </tr>
                  </table>
                </div>
                <!--[if mso]>
                                    </td>
                                    </tr>
                                    </table>
                                    <![endif]--></td>
            </tr>
          </table>
          
          <!--[if mso]>
                        </td>
                        </tr>
                        </table>
                        <![endif]--></td>
      </tr>
      <!-- 3 Even Columns : END --> 
      <td bgcolor="#FFFFFF" style="font-size: 12px; text-align: left; padding: 2px; font-family:'Helvetica Neue', Helvetica, Arial, 'sans-serif'">1.	Purchase values stated in this promotion are EXCLUSIVE OF GST. </td>
      <!-- 1 Column Text + Button : BEGIN -->
      <tr>
      <tr>
      <td bgcolor="#FFFFFF" style="font-size: 12px; text-align: left; padding: 2px; font-family:'Helvetica Neue', Helvetica, Arial, 'sans-serif'">2.	Promotion runs from 1st September 2017 to 31st October 2017 </td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF" style="font-size: 12px; text-align: left; padding: 2px; font-family:'Helvetica Neue', Helvetica, Arial, 'sans-serif'">3.	To qualify for credit, goods must be invoiced during the promotional period between 1st September 2017 to 31st October 2017 </td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF" style="font-size: 12px; text-align: left; padding: 2px; font-family:'Helvetica Neue', Helvetica, Arial, 'sans-serif'">4.	Bonus credit will be applied to MMT reseller customers’ account by 20th November 2017. </td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF" style="font-size: 12px; text-align: left; padding: 2px; font-family:'Helvetica Neue', Helvetica, Arial, 'sans-serif'">5.    Credit cannot be redeemed as Cash, credit must be used on products or services from MMT </td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF" style="font-size: 12px; text-align: left; padding: 2px; font-family:'Helvetica Neue', Helvetica, Arial, 'sans-serif'">6.	Multimedia Technology (MMT) reserves the right to terminate the promotion at any time, without notice.</td>
    </tr>
      
        <td bgcolor="#eaeaea"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
            <tr>
              <td bgcolor="#eaeaea"><img src="http://www.mmt.com.au/articles/zzmisc/we-want-you-back/171019/img/askmmt.jpg" width="680" height="" alt="ask multimedia footer" border="0" align="center" style="width: 100%; max-width: 680px; height: auto; background: #aaaaaa; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;" class="g-img fluid"></td>
            </tr>
          </table></td>
      </tr>
      <!-- 1 Column Text + Button : BEGIN -->
      
    </table>
    
    <!-- Email Body : END --> 
    
    <!----------------------------------------- keep end -------------------------------------------------> 
    

    <!----------------------------------------- replace begin ------------------------------------------------->

</div>
</div>
<?php
$page->createFooter($user->isAuthenticated());
?>

    <!----------------------------------------- replace end ------------------------------------------------->
