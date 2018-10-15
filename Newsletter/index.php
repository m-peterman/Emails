
    <!----------------------------------------- replace begin ------------------------------------------------->
<?php
session_start();

# ---------- Adjust settings here ----------

$loginRequired = TRUE;
$title = "Multimedia Today";
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
    
  
   
        
            <!-- Email Body : BEGIN -->
            <map name="MapMapMap">
    
  <area shape="circle" coords="20,15,13" href="http://www.youtube.com/user/mmtcomau" alt="Youtube" />
  <area shape="circle" coords="48,15,13" href="https://www.facebook.com/AskMultimedia/" alt="Facebook" />
  <area shape="circle" coords="75,15,13" href="https://www.linkedin.com/company-beta/554279/" alt="Linkedin" />
  <area shape="circle" coords="100,15,13" href="http://www.mmt.com.au" alt="MMT Website" />

  </map><table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px;">

                <!-- Hero Image, Flush : BEGIN -->
                <tbody><tr>
                    <td bgcolor="#ffffff">
                      <img src="http://www.mmt.com.au/multimedia-today/171121/header2.jpg" usemap="#MapMapMap" width="680" height="" alt="alt_text" border="0" align="center" class="fluid" style="width: 100%; max-width: 680px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 13px; line-height: 20px; color: #555555;" />
                    </td>
                </tr>
   
                <!-- Hero Image, Flush : END -->

                
                <!-- 1 Column Text + Button : BEGIN -->
                <tr>
                    <td bgcolor="#ffffff">
                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tbody><tr>
                              <td style=" text-align: left; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
                                <a style="text-decoration: none; font-size: 10px">Date 10 April 2018</a></td>
                            </tr>
                            <tr>
                           	  <td style=" text-align: center; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
                               	<a href="http://www.mmt.com.au/" style=" font-size: 12px">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp;<a href="http://www.mmt.com.au/search/?promo=all" style=" font-size: 12px">Promotions</a>&nbsp;&nbsp;-&nbsp;&nbsp;<a href="http://www.mmt.com.au/search/?clearance=" style=" font-size: 12px">Clearance</a>&nbsp;&nbsp;-&nbsp;&nbsp;<a href="http://www.mmt.com.au/search/?n=" style=" font-size: 12px">New this week</a>&nbsp;&nbsp;-&nbsp;&nbsp;<a href="http://www.mmt.com.au/articles/" style=" font-size: 12px">Articles</a>&nbsp;&nbsp;-&nbsp;&nbsp;<a href="http://www.mmt.com.au/about-us/contact-us/" style=" font-size: 12px">Contact us</a>

                            	</td>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>

              <!-- 3 Even Columns : BEGIN -->
                <tr>
                    <td bgcolor="#ffffff" align="center" height="100%" valign="top" width="100%" style="padding: 10px 0;">
                        <!--[if mso]>
                        <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                        <tr>
                        <td align="center" valign="top" width="660">
                        <![endif]-->
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="max-width:660px;">
                            <tbody><tr>
                                <td align="center" valign="top" style="font-size:0;">
                                    <!--[if mso]>
                                    <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                                    <tr>
                                    <td align="left" valign="top" width="220">
                                    <![endif]-->
                                    <div style="display:inline-block; margin: 0 -2px; max-width:33.33%; min-width:220px; vertical-align:top; width:100%;" class="stack-column">
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tbody><tr>
                                                <td style="padding: 5px 10px;">
                                                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-size: 13px;text-align: left;">
                                                        
                                                        <tbody><tr>
                                                            <td><a href="http://www.mmt.com.au/search/?manufacturer=&amp;category=&amp;search=infinity+board&amp;stype=1"><img src="http://www.mmt.com.au/multimedia-today/180410/img/NEC.jpg" width="200" border="0" alt="Netcomm" class="center-on-narrow" style="width: 100%; max-width: 200px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 13px; line-height: 20px; color: #555555;" /></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-family: sans-serif; font-size: 15px;  color: #555555; padding-top: 10px; font-weight: bold; vertical-align:top" class="stack-column-center">Collaborate with Ease</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-family: sans-serif; font-size: 11px; line-height: 20px; color: #555555; padding-top: 10px;" class="stack-column-center"> A powerful  all-in-one panel for meeting rooms with a natural writing experience, it’s like working on paper!</td>
                                                        </tr>
                                                    </tbody></table>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </div>
                                    <!--[if mso]>
                                    </td>
                                    
                                    <td align="left" valign="top" width="220">
                                    <![endif]-->
                                    <div style="display:inline-block; margin: 0 -2px; max-width:33.33%; min-width:220px; vertical-align:top; width:100%;" class="stack-column">
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tbody><tr>
                                                <td style="padding: 5px 10px;">
                                                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-size: 13px;text-align: left;">
                                                        <tbody><tr>
                                                            <td><a href="http://www.mmt.com.au/search/?manufacturer=&amp;category=&amp;search=synbun&amp;stype=1"><img src="http://www.mmt.com.au/multimedia-today/180410/img/synology.jpg" width="200" border="0" alt="philips" class="center-on-narrow" style="width: 100%; max-width: 200px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 13px; line-height: 20px; color: #555555;" /></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-weight: bold; font-family: sans-serif; font-size: 15px; color: #555555; padding-top: 10px;" class="stack-column-center">Save when you Bundle</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-family: sans-serif; font-size: 11px; line-height: 20px; color: #555555; padding-top: 10px;" class="stack-column-center"> We know that with any NAS the right hard drive is essential. Learn how much you can save when you bundle.</td>
                                                        </tr>
                                                  </tbody></table>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </div>
                                    <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="220">
                                    <![endif]-->
                                    <div style="display:inline-block; margin: 0 -2px; max-width:33.33%; min-width:220px; vertical-align:top; width:100%;" class="stack-column">
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tbody><tr>
                                                <td style="padding: 5px 10px;">
                                                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-size: 13px;text-align: left;">
                                                        
                                                        <tbody><tr>
                                                            <td><a href="http://www.mmt.com.au/search/product/?name=13VPLPHZ10"><img src="http://www.mmt.com.au/multimedia-today/180410/img/sony.jpg" width="200" border="0" alt="NVidia" class="center-on-narrow" style="width: 100%; max-width: 200px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 13px; line-height: 20px; color: #555555;" /></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-family: sans-serif; font-size: 15px; color: #555555; padding-top: 10px; font-weight: bold; vertical-align:top" class="stack-column-center">Get in before it's gone</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-family: sans-serif; font-size: 11px; line-height: 20px; color: #555555; padding-top: 10px;" class="stack-column-center">Cost effective  with 20,000 hours of virtually no maintenance. Save over $200 when you buy during <strong>April</strong>. </td>
                                                        </tr>
                                                    </tbody></table>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </div>
                                    <!--[if mso]>
                                    </td>
                                   
                                    </tr>
                                    </table>
                                    <![endif]-->
                                </td>
                            </tr>
                        </tbody></table>
                        <!--[if mso]>
                        </td>
                        </tr>
                        </table>
                        <![endif]-->
                    </td>
                </tr>
                <!-- 3 Even Columns : END -->
                <!-- 3 Even Columns : BEGIN -->
                <tr>
                    <td bgcolor="#ffffff" align="center" height="100%" valign="top" width="100%" style="padding: 10px 0;">
                        <!--[if mso]>
                        <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                        <tr>
                        <td align="center" valign="top" width="660">
                        <![endif]-->
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="max-width:660px;">
                            <tbody><tr>
                                <td align="center" valign="top" style="font-size:0;">
                                    <!--[if mso]>
                                    <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                                    <tr>
                                    <td align="left" valign="top" width="220">
                                    <![endif]-->
                                    <div style="display:inline-block; margin: 0 -2px; max-width:33.33%; min-width:220px; vertical-align:top; width:100%;" class="stack-column">
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tbody><tr>
                                                <td style="padding: 5px 10px;">
                                                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-size: 13px;text-align: left;">
                                                        <tbody><tr>
                                                            <td><a href="http://www.mmt.com.au/search/product/?name=15L-20HR000VAU"><img src="http://www.mmt.com.au/multimedia-today/180410/img/lenovo.jpg" width="200" border="0" alt="HP" class="center-on-narrow" style="width: 100%; max-width: 200px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 13px; line-height: 20px; color: #555555;" /></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-weight: bold; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding-top: 10px;" class="stack-column-center">Hot Price On Lenovo<a style="color:#FF0000"></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-family: sans-serif; font-size: 11px; line-height: 20px; color: #555555; padding-top: 10px;" class="stack-column-center">  Just 1.14 kg &amp; 15.95 mm thin, has an Intel  Core i5 processor, 8GB ram and 256GB SSD it is perfect for traveling</td>
                                                        </tr>
                                                  </tbody></table>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </div>
                                    <!--[if mso]>
                                    </td>
                                    
                                    <td align="left" valign="top" width="220">
                                    <![endif]-->
                                    <div style="display:inline-block; margin: 0 -2px; max-width:33.33%; min-width:220px; vertical-align:top; width:100%;" class="stack-column">
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tbody><tr>
                                                <td style="padding: 5px 10px;">
                                                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="text-align: left;">
                                                        
                                                        <tbody><tr>
                                                            <td><a href="http://www.mmt.com.au/search/?manufacturer=FUJITSU&amp;category=&amp;search=8th+gen&amp;stype=1&amp;view=1&amp;sort=age"><img src="http://www.mmt.com.au/multimedia-today/180410/img/fujitsu.jpg" width="200" border="0" alt="BenQ" class="center-on-narrow" style="width: 100%; max-width: 200px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 13px; line-height: 20px; color: #555555;" /></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-family: sans-serif; font-size: 15px; color: #555555; padding-top: 10px; font-weight: bold; vertical-align:top" class="stack-column-center">New 8th Gen Intel</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-family: sans-serif; font-size: 11px; line-height: 20px; color: #555555; padding-top: 10px;" class="stack-column-center"> The New Fujitsu Lifebook range with 8th Gen intel core processors are now available at MMT. </td>
                                                        </tr>
                                                  </tbody></table>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </div>
                                    
                                    <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="220">
                                    <![endif]-->
                                    <div style="display:inline-block; margin: 0 -2px; max-width:33.33%; min-width:220px; vertical-align:top; width:100%;" class="stack-column">
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tbody><tr>
                                                <td style="padding: 5px 10px;">
                                                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-size: 13px;text-align: left;">
                                                        <tbody><tr>
                                                            <td><a href="http://www.mmt.com.au/search/?manufacturer=J5CREATE&amp;category=&amp;search=jda&amp;stype=1&amp;view=1&amp;sort=age"><img src="http://www.mmt.com.au/multimedia-today/180410/img/J5.jpg" width="200" border="0" alt="Power Shield" class="center-on-narrow" style="width: 100%; max-width: 200px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 13px; line-height: 20px; color: #555555;" /></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-weight: bold; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding-top: 10px;" class="stack-column-center">Adapt to every Application</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-family: sans-serif; font-size: 11px; line-height: 20px; color: #555555; padding-top: 10px;" class="stack-column-center">With a vast range of new and affordable J5create adapter, connect up to display application with ease. </td>
                                                        </tr>
                                                    </tbody></table>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </div>
                                    <!--[if mso]>
                                    </td>
                                    </tr>
                                    </table>
                                    <![endif]-->
                                </td>
                            </tr>
                        </tbody></table>
                        <!--[if mso]>
                        </td>
                        </tr>
                        </table>
                        <![endif]-->
                    </td>
                </tr>
                <!-- 3 Even Columns : END -->

                <!-- 3 Even Columns : BEGIN -->
                <tr>
                    <td bgcolor="#ffffff" align="center" height="100%" valign="top" width="100%" style="padding: 10px 0;">
                        <!--[if mso]>
                        <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                        <tr>
                        <td align="center" valign="top" width="660">
                        <![endif]-->
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="max-width:660px;">
                            <tbody><tr>
                                <td align="center" valign="top" style="font-size:0;">
                                    <!--[if mso]>
                                    <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                                    <tr>
                                    <td align="left" valign="top" width="220">
                                    <![endif]-->
                                    <div style="display:inline-block; margin: 0 -2px; max-width:33.33%; min-width:220px; vertical-align:top; width:100%;" class="stack-column">
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tbody><tr>
                                                <td style="padding: 5px 10px;">
                                                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-size: 13px;text-align: left;">
                                                        <tbody><tr>
                                                            <td><a href="http://www.mmt.com.au/search/?manufacturer=&amp;category=&amp;search=shinpoc&amp;stype=1"><img src="http://www.mmt.com.au/multimedia-today/180410/img/shintaro.jpg" width="200" height="200" border="0" alt="D-Link" class="center-on-narrow" style="width: 100%; max-width: 200px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 13px; line-height: 20px; color: #555555;" /></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-weight: bold; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding-top: 10px;" class="stack-column-center">Hot Price on 8GB USBs</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-family: sans-serif; font-size: 11px; line-height: 20px; color: #555555; padding-top: 10px;" class="stack-column-center"> When you buy a minimum of 100x  8GB Usb drives get them for  $4.95 each. Perfect for schools &amp; education.</td>
                                                        </tr>
                                                    </tbody></table>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </div>
                                    <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="220">
                                    <![endif]-->
                                    <div style="display:inline-block; margin: 0 -2px; max-width:33.33%; min-width:220px; vertical-align:top; width:100%;" class="stack-column">
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tbody><tr>
                                                <td style="padding: 5px 10px;">
                                                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-size: 13px;text-align: left;">
                                                        <tbody><tr>
                                                            <td><a href="http://www.mmt.com.au/search/?manufacturer=&amp;category=&amp;search=freeg225&amp;stype=1&amp;view=1&amp;sort=age&amp;bundle="><img src="http://www.mmt.com.au/multimedia-today/180410/img/D-link.jpg" width="200" border="0" alt="Gumdrop" class="center-on-narrow" style="width: 100%; max-width: 200px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 13px; line-height: 20px; color: #555555;" /></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-weight: bold; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding-top: 10px;" class="stack-column-center">Get a Bonus Modem Router</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-family: sans-serif; font-size: 11px; line-height: 20px; color: #555555; padding-top: 10px;" class="stack-column-center">Buy a unified service router get a free N300 modem. Perfect for  cloud based applications. </td>
                                                        </tr>
                                                    </tbody></table>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </div>
                                    <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="220">
                                    <![endif]-->
                                    <div style="display:inline-block; margin: 0 -2px; max-width:33.33%; min-width:220px; vertical-align:top; width:100%;" class="stack-column">
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tbody><tr>
                                                <td style="padding: 5px 10px;">
                                                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-size: 13px;text-align: left;">
                                                        <tbody><tr>
                                                            <td><a href="http://www.mmt.com.au/search/?manufacturer=OKI&amp;category=&amp;search=oki&amp;stype=1&amp;view=1&amp;sort=age"><img src="http://www.mmt.com.au/multimedia-today/180410/img/oki.jpg" width="250" border="0" alt="Fujtisu" class="center-on-narrow" style="width: 100%; max-width: 200px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 13px; line-height: 20px; color: #555555;" /></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-weight: bold; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding-top: 10px;" class="stack-column-center">Oki Demo Month</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-family: sans-serif; font-size: 11px; line-height: 20px; color: #555555; padding-top: 10px;" class="stack-column-center">Learn how you can save up to 50% on selected printers this demo month with OKI. Hurry Ends 30/04/18</td>
                                                        </tr>
                                                    </tbody></table>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </div>
                                    <!--[if mso]>
                                    </td>
                                    </tr>
                                    </table>
                                    <![endif]-->
                                </td>
                            </tr>
                        </tbody></table>
                        <!--[if mso]>
                        </td>
                        </tr>
                        </table>
                        <![endif]-->
                    </td>
                </tr>
                <!-- 3 Even Columns : END -->
                <!-- Hero Image, Flush : BEGIN -->
                <tr>
                    <td bgcolor="#ffffff"><a href="http://www.mmt.com.au/search/?manufacturer=&amp;category=&amp;search=toughbook&amp;stype=1"><img src="http://www.mmt.com.au/multimedia-today/180410/img/banner.jpg" width="600" height="187" alt="XYZ Printing" border="0" align="center" class="fluid" style="width: 100%; max-width: 680px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 13px; line-height: 20px; color: #555555;" /></a>
                    </td>
                </tr>
                <!-- Hero Image, Flush : END -->
                <!-- Hero Image, Flush : BEGIN -->
                <tr>
                    <td bgcolor="#ffffff">
                      <img src="http://www.mmt.com.au/multimedia-today/171205/footer.jpg" width="680" height="" alt="alt_text" border="0" align="center" class="fluid" style="width: 100%; max-width: 680px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 13px; line-height: 20px; color: #555555;" />
                    </td>
                </tr>
                <!-- Hero Image, Flush : END -->
            </tbody></table>
            <!-- Email Body : END -->
    <!----------------------------------------- Delete begin -------------------------------------------------> 

    <!----------------------------------------- keep begin ------------------------------------------------->
    <!-- Thumbnail Right, Text Left : BEGIN -->
   <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px;">
   
     <tr> 
      <!-- dir=rtl is where the magic happens. This can be changed to dir=ltr to swap the alignment on wide while maintaining stack order on narrow. -->
      <td dir="rtl" align="center" height="100%" valign="top" width="100%" style="padding-top: 2px; padding-bottom: 2px"><!--[if mso]>
                        <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                        <tr>
                        <td align="center" valign="top" width="660">
                        <![endif]-->
        
        <table role="presentation" border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="max-width:660px;">
          <tr>
            <td align="center" valign="top" style="font-size:0; padding: 10px 0;"><!--[if mso]>
                                    <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                                    <tr>
                                    <td align="left" valign="top" width="120">
                                    <![endif]-->
              
              <div style="display:inline-block; margin: 0 -2px; max-width: 130px; min-width:90px; vertical-align:top; width:100%;" class="stack-column">
                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                  <tr>
                    <td dir="ltr" style="padding: 0 50px 0px 10px;"><img src="http://www.mmt.com.au/articles/powershield/170403/img/logo.png" width="90" height="" border="0" alt="particle resistant" class="center-on-narrow" style="width: 100%; max-width: 90px; height: auto; font-family: Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
                  </tr>
                </table>
              </div>
              
              <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="540">
                                    <![endif]-->
              
              <div style="display:inline-block; margin: 0 -2px; max-width:70%; min-width:390px; vertical-align:top;" class="stack-column">
                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                  <tr>
                    <td dir="ltr" style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 10px; line-height: 15px; color: #ddd; padding: 10px 10px 0; text-align: center;" class="center-on-narrow"><table align="center" cellpadding="0" cellspacing="0" border="0" style="text-align: center">
                        <tr>
                          <td> Please note that all pricing quoted is EXCLUDING GST.</td>
                        </tr>
                        <tr>
                          <td> All care has been taken to ensure the accuracy of the information provided within.</td>
                        </tr>
                        <tr>
                          <td> Errors and omissions excepted.</td>
                        </tr>
                      </table>
                      <br></td>
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
	  </table>
    
    <!-- Thumbnail Right, Text Left : END --> 
    
    <!--[if mso]>
            </td>
            </tr>
            </table>
            <![endif]--> 
	</div>
    
    <map title="MapMapMap" id="MapMapMap" name="MapMapMap">
    <a style="text-decoration: none" rea shape="circle" coords="20,15,17" href="http://www.youtube.com/user/mmtcomau" alt="YouTube" /> 
    <a style="text-decoration: none" rea shape="circle" coords="50,15,17" href="https://www.facebook.com/AskMultimedia/" alt="facebook" />
     <a style="text-decoration: none" rea shape="circle" coords="80,15,17" href="https://www.linkedin.com/company-beta/554279/" alt="linkedin" /> 
     <a style="text-decoration: none" rea shape="circle" coords="105,15,17" href="https://twitter.com/AskMultimedia" alt="Twitter" /> 
     <a style="text-decoration: none" rea shape="circle" coords="132,15,17" href="http://www.mmt.com.au" alt="website" />
  </map>
</center>

    <!----------------------------------------- keep end ------------------------------------------------->


    <!----------------------------------------- replace begin ------------------------------------------------->

</div>
</div>
<?php
$page->createFooter($user->isAuthenticated());
?>

    <!----------------------------------------- replace end ------------------------------------------------->
