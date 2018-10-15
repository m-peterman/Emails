
    <!----------------------------------------- replace begin ------------------------------------------------->
<?php
session_start();

# ---------- Adjust settings here ----------

$loginRequired = TRUE;
$title = "Multimedia Technology Official Email";
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
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88291229-1', 'auto');
  ga('send', 'pageview');

</script>
<div id="pagetext" style="background-color:#e5e5e5"> <br>

    <div width="100%" bgcolor="#aaaaaa" style="margin: 0; mso-line-height-rule: exactly;">
    
    



    <!----------------------------------------- replace end ------------------------------------------------->

<!------------------------------------------------------------- keep-begin ---------------------------------------------------------------------------->

<center style="width: 100%; background: #E5E5E5; text-align: left;">
  
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
    
    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';max-width: 660px;">
      
      <!-- Banner : BEGIN -->
      <tbody><tr>
        <td style="background-color:#ffffff"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
            <tbody><tr>
              <td style="background-color:#ffffff"><img usemap="#MapMapMap" src="http://www.mmt.com.au/articles/samsung/180119/img/banner.jpg" width="660" alt="banner" border="0" align="center" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';width: 100%; max-width: 660px; height: auto; background: #dddddd; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;" class="fluid g-img">
                <map name="MapMapMap">
                  <area shape="circle" coords="20,15,17" href="http://www.youtube.com/user/mmtcomau" alt="Youtube">
                  <area shape="circle" coords="50,15,17" href="https://www.facebook.com/AskMultimedia/" alt="Facebook">
                  <area shape="circle" coords="80,15,17" href="https://www.linkedin.com/company-beta/554279/" alt="Linkedin">
                  <area shape="circle" coords="106,15,17" href="http://www.mmt.com.au" alt="MMT Website">
              </map></td>
            </tr>
          </tbody></table></td>
      </tr>
      <!-- Banner : END --> 
      
      
      
       
      
      
      
       
      
      
      
       
      
      
      
      
      
      <!-- 1 column half half : BEGIN -->
      <tr>
        <td style="background-color:#ffffff" align="center" height="100%" valign="top" width="100%">
          
          <!--[if mso]>
                        <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                        <tr>
                        <td align="center" valign="top" width="660">
                        <![endif]-->
          
          <table role="presentation" border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';max-width:660px;">
            <tbody><tr>
              <td align="center" valign="top" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-size:0; padding: 10px 0;"><!--[if mso]>
                                    <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                                    <tr>
                                    <td align="left" valign="top" width="330">
                                    <![endif]-->
                
                <div style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';display:inline-block; margin: 0 -2px; width:100%; min-width:200px; max-width:330px; vertical-align:top;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tbody><tr>
                      <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';padding: 10px 10px;"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-size: 14px;text-align: left;">
                          <tbody><tr>
                            <td align="center"><img src="http://www.mmt.com.au/articles/samsung/180119/img/2row1.jpg" width="300" border="0" alt="Alt Text" class="center-on-narrow" style="font-family: Helvetica, helvetica neue, Arial, 'sans-serif'; width: 100%; max-width: 300px; height: auto; background: #28A5FF; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; text-align: center"></td>
                          </tr>
                        </tbody></table></td>
                    </tr>
                  </tbody></table>
                </div>
                
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="330">
                                    <![endif]-->
                
                <div style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';display:inline-block; margin: 0 -2px; width:100%; min-width:200px; max-width:330px; vertical-align:top;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tbody><tr>
                      <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';padding: 10px 10px;"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-size: 14px;text-align: left;">
                          <tbody><tr>
                            <td style="font-family: Helvetica, helvetica neue, Arial, 'sans-serif';font-family: sans-serif;font-size: 13px;color: #555555;padding-top: 10px;" class="stack-column-center"><p>The <strong style ="color:#1428A0">Samsung</strong> SSD 860 EVO is a brand new successor to Samsung’s premium SSD product 850 EVO. The 860 EVO is powered by <strong style ="color:#1428A0">Samsung's</strong> 3D V-NAND technology that maximises everyday computing experiences with optimised performance and enhanced reliability. Stock now shipping <strong style ="color:#D9005B">...ask Multimedia. </strong><br>
                              <br>
                                * SATA 6Gb/s SSD for Client PCs<br>
                                * 2.5 inch form factor<br>
                                * Samsung 32 layer 3D V-NAND<br>
                                * Samsung Magician Software for SSD management<br>
                                * Samsung Data Migration Software<br>
  <br>
                              </p></td>
                          </tr>
                           <tr>
                                  <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif'; font-size: 20px; line-height: 21px; text-align: center; text-decoration: none; display: block; color: #ff0000;  width: 100%; font-weight:bold;"> <a href="" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';color: #FF0000; text-decoration: none">From $116.50 ex.</a></td>
                                </tr>
                                <tr>
                                  <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif'; font-size: 14px; line-height: 15px; text-align: center; text-decoration: none; display: block; color: #090;  width: 100%;"> <a href="" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';color: #090; text-decoration: none">$149.00 RRP</a></td>
                                </tr>
                                <tr>
                                  <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-family:Helvetica, Arial, 'sans-serif'; font-size: 12px; line-height: 17px; color: #555555; text-align: center" class="stack-column-center">
                                   <!-- Button : BEGIN -->
                                    
                                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';margin: auto">
                                      <tbody><tr>
                                        <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';border-radius: 3px; background:#3A5897; text-align: center;" class="button-td"><a href="http://www.mmt.com.au/search/?manufacturer=&amp;category=&amp;search=860+evo+2.5&amp;stype=1" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';background: #3A5897; border: 2px solid #3A5897; font-family: sans-serif; font-size: 20px; line-height: 1.3; text-align: center; text-decoration: none; display: block; border-radius: 3px; " class="button-a"> <span style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;Order Here&nbsp;&nbsp;&nbsp;</span> </a></td>
                                      </tr>
                                    </tbody></table>
                                    
                                    <!-- Button : END -->
                                    </td>
                                </tr>
                                <tr>
                                  <td align="center" class="stack-column-center" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';line-height: 14px;  font-size: 13px; color: #0000ff; text-align: center"><a style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-decoration: none; color:#00F" href="">06SS-860E-250GB</a><a href="" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';color: #00F"></a></td>
                                </tr>
                        </tbody></table></td>
                    </tr>
                  </tbody></table>
                </div>
                
                <!--[if mso]>
                                    </td>
                                    </tr>
                                    </table>
                                    <![endif]--></td>
            </tr>
          </tbody></table>
          
          <!--[if mso]>
                        </td>
                        </tr>
                        </table>
                        <![endif]--></td>
      </tr>
      <tr>
              <td align="center" style="background-color:#ffffff;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-align: center; font-size: 22px " width="100%"><p style="margin:0px;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-align: center; padding-left: 10px"><strong style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-family:Helvetica, Arial, 'sans-serif'; font-size: 22px">Available Capacity</strong></p></td>
        </tr>
      <tr>
        <td align="center" height="100%" valign="top" width="100%" style="background-color:#ffffff;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';padding: 0px 0;"><!-- 4 Even Columns Header : BEGIN --> 
          
          <!--[if mso]>
                        <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                        <tr>
                        <td align="center" valign="top" width="660">
                        <![endif]-->
          
          <table role="presentation" border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';max-width:660px;">
            <tbody><tr>
              <td align="center" valign="top" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-size:0;"><!--[if mso]>
                                    <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                                    <tr>
                                    <td align="left" valign="top" width="132">
                                    <![endif]-->
                
                <div style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';  display:inline-block; margin: 0 -2px; max-width:20%; min-width:132px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tbody><tr>
                      <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif'; font-size: 14px;text-align: left;">
                          <tbody>
                          <tr>
                            <td align="center"><a href="http://www.mmt.com.au/search/product/?name=06SS-860E-250GB"><img src="http://www.mmt.com.au/articles/samsung/180119/img/5row1.jpg" width="108" height="" border="0" alt="Alt Text" class="center-on-narrow" style="font-family: Helvetica, helvetica neue, Arial, 'sans-serif'; width: 100%; max-width: 108px; height: auto; background: #28A5FF; font-family: Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></a></td>
                          </tr>
                          
                          
                          
                          
                                
                          
                          
                          
                        </tbody></table></td>
                    </tr>
                  </tbody></table>
                </div>
                
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="132">
                                    <![endif]-->
                    <div style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';  display:inline-block; margin: 0 -2px; max-width:20%; min-width:132px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tbody><tr>
                      <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif'; font-size: 14px;text-align: left;">
                          <tbody>
                          <tr>
                            <td align="center"><a style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-decoration: none;" href="http://www.mmt.com.au/search/product/?name=06SS-860E-500GB"> <img src="http://www.mmt.com.au/articles/samsung/180119/img/5row2.jpg" width="108" height="" border="0" alt="Alt Text" class="center-on-narrow" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';width: 100%; max-width: 108px; height: auto; background: #28A5FF; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></a></td>
                          </tr>
                          
                          
                          
                          
                                
                          
                          
                          
                        </tbody></table></td>
                    </tr>
                  </tbody></table>
                </div>
                
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="132">
                                    <![endif]-->
                    <div style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';  display:inline-block; margin: 0 -2px; max-width:20%; min-width:132px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tbody><tr>
                      <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif'; font-size: 14px;text-align: left;">
                          <tbody>
                          <tr>
                            <td align="center"><a href="http://www.mmt.com.au/search/product/?name=06SS-860E-1TB"><img src="http://www.mmt.com.au/articles/samsung/180119/img/5row3.jpg" width="108" height="" border="0" alt="Alt Text" class="center-on-narrow" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';width: 100%; max-width: 108px; height: auto; background: #28A5FF; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></a></td>
                          </tr>
                          
                          
                          
                          
                                
                          
                          
                          
                        </tbody></table></td>
                    </tr>
                  </tbody></table>
                </div>
                
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="132">
                                    <![endif]-->
                    <div style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';  display:inline-block; margin: 0 -2px; max-width:20%; min-width:132px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tbody><tr>
                      <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif'; font-size: 14px;text-align: left;">
                          <tbody>
                          <tr>
                            <td align="center"><a href="http://www.mmt.com.au/search/product/?name=06SS-860E-2TB"><img src="http://www.mmt.com.au/articles/samsung/180119/img/5row4.jpg" width="108" height="" border="0" alt="Alt Text" class="center-on-narrow" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';width: 100%; max-width: 108px; height: auto; background: #28A5FF; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></a></td>
                          </tr>
                          
                          
                          
                          
                                
                          
                          
                          
                        </tbody></table></td>
                    </tr>
                  </tbody></table>
                </div>
                
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="132">
                                    <![endif]-->
                                    
                                    
                    <div style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';  display:inline-block; margin: 0 -2px; max-width:20%; min-width:132px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tbody><tr>
                      <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif'; font-size: 14px;text-align: left;">
                          <tbody>
                          <tr>
                            <td align="center"><a href="http://www.mmt.com.au/search/product/?name=06SS-860E-4TB"><img src="http://www.mmt.com.au/articles/samsung/180119/img/5row5.jpg" width="108" height="" border="0" alt="Alt Text" class="center-on-narrow" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';width: 100%; max-width: 108px; height: auto; background: #28A5FF; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></a></td>
                          </tr>
                          
                          
                          
                          
                                
                          
                          
                          
                        </tbody></table></td>
                    </tr>
                  </tbody></table>
                </div>
                
                <!--[if mso]>
                                    </td>
                                    </tr>
                                    </table>
                                    <![endif]--></td>
            </tr>
          </tbody></table>
          
          <!--[if mso]>
                        </td>
                        </tr>
                        </table>
                        <![endif]--></td>
      </tr> 
      
      <!-- 2 Even Columns : BEGIN -->
      
      <!-- 2 Even Columns : END --> 
      
      
      
       
      
      
      
       
      
      
      
       
      
      
      
       
      
      
      
       
      
       
       
      
      
      
      
      <!-- Addon Header : END -->
      
      <!-- full image bottom, text top : BEGIN -->
      <tr>
        <td align="center" style="background-color:#ffffff;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-align: center " width="100%"><!-- 1 Even Columns Header : BEGIN -->
          
          <table align="center" style="background-color:#ffffff;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-align: center " width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody><tr>
              <td align="center" style="background-color:#ffffff;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-align: center; font-size: 22px " width="100%"><p style="margin:0px;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-align: center; padding-left: 10px"><strong style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-family:Helvetica, Arial, 'sans-serif'; font-size: 22px"><br>
                The SSD to trust</strong></p></td>
            </tr>
            <tr>
              <td style="background-color:#ffffff;padding: 0px 10px;" align="center" width="100%"><p style="margin:0px;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';padding:10px; text-align: center; font-size: 14px; font-family: 'Helvetica Neue', Helvetica, Arial, 'sans-serif'">The newest edition to the world’s best-selling* SATA SSD series, the Samsung 860 EVO. Specially designed for mainstream PCs and laptops, with the latest V-NAND and a robust algorithm-based controller, this fast and reliable SSD comes in a wide range of compatible form factors and capacities.</p></td>
            </tr>
            <tr>
              <td width="100%"><img src="http://www.mmt.com.au/articles/samsung/180119/img/banner1.jpg" width="660" alt="banner" border="0" align="center" style="font-family: Helvetica, helvetica neue, Arial, 'sans-serif'; width: 100%; max-width: 680px; height: auto; background: #dddddd; font-family: Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;" class="fluid g-img"></td>
            </tr>
          </tbody></table>
          
          <!-- 1 Even Columns Header : END --></td>
      </tr>
      <tr>
        <td align="center" style="background-color:#ffffff;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-align: center " width="100%"><!-- 1 Even Columns Header : BEGIN -->
          
          <table align="center" style="background-color:#ffffff;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-align: center " width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody><tr>
              <td align="center" style="background-color:#000;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-align: center; font-size: 22px;color:#fff; " width="100%"><p style="margin:0px;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-align: center; padding-left: 10px"><strong style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-family:Helvetica, Arial, 'sans-serif'; font-size: 22px"><br>
                Enhanced performance</strong></p></td>
            </tr>
            <tr>
              <td style="background-color:#000;padding: 0px 10px;" align="center" width="100%"><p style="margin:0px;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';padding:10px; text-align: center; font-size: 14px; font-family: 'Helvetica Neue', Helvetica, Arial, 'sans-serif';color:#fff;">Speeds are more consistent, even with heavy workloads and multi-tasks. The 860 EVO performs at sequential writes up to 520 MB/s* with Intelligent TurboWrite technology, and sequential reads up to 550 MB/s. The TurboWrite buffer size* is upgraded from 12 GB to 78 GB for faster file transfer.</p></td>
            </tr>
            <tr>
              <td width="100%"><img src="http://www.mmt.com.au/articles/samsung/180119/img/banner2.jpg" width="660" alt="banner" border="0" align="center" style="font-family: Helvetica, helvetica neue, Arial, 'sans-serif'; width: 100%; max-width: 680px; height: auto; background: #dddddd; font-family: Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;" class="fluid g-img"></td>
            </tr>
          </tbody></table>
          
          <!-- 1 Even Columns Header : END --></td>
      </tr>

<tr>
        <td align="center" style="background-color:#ffffff;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-align: center " width="100%"><!-- 1 Even Columns Header : BEGIN -->
          
          <table align="center" style="background-color:#ffffff;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-align: center " width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody><tr>
              <td align="center" style="background-color:#ffffff;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-align: center; font-size: 22px " width="100%"><p style="margin:0px;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-align: center; padding-left: 10px"><strong style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-family:Helvetica, Arial, 'sans-serif'; font-size: 22px"><br>
                Boosted endurance</strong></p></td>
            </tr>
            <tr>
              <td style="background-color:#ffffff;padding: 0px 10px;" align="center" width="100%"><p style="margin:0px;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';padding:10px; text-align: center; font-size: 14px; font-family: 'Helvetica Neue', Helvetica, Arial, 'sans-serif'">Safely store and render large sized 4K videos and 3D data used by the latest applications, up to 8x higher TBW (Terabytes Written)* than the previous 850 EVO. The latest V-NAND technology gives you up to 2,400 TBW, or is backed by a 5-year limited warranty.*</p></td>
            </tr>
            <tr>
              <td width="100%"><img src="http://www.mmt.com.au/articles/samsung/180119/img/banner3.jpg" width="660" alt="banner" border="0" align="center" style="font-family: Helvetica, helvetica neue, Arial, 'sans-serif'; width: 100%; max-width: 680px; height: auto; background: #dddddd; font-family: Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;" class="fluid g-img"></td>
            </tr>
          </tbody></table>
          
          <!-- 1 Even Columns Header : END --></td>
      </tr>

      <tr>
        <td align="center" style="background-color:#ffffff;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-align: center " width="100%"><!-- 1 Even Columns Header : BEGIN -->
          
          <table align="center" style="background-color:#ffffff;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-align: center " width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody><tr>
              <td align="center" style="background-color:#ffffff;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-align: center; font-size: 22px " width="100%"><p style="margin:0px;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-align: center; padding-left: 10px"><strong style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-family:Helvetica, Arial, 'sans-serif'; font-size: 22px"><br>
                Smart compatibility</strong></p></td>
            </tr>
            <tr>
              <td style="background-color:#ffffff;padding: 0px 10px;" align="center" width="100%"><p style="margin:0px;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';padding:10px; text-align: center; font-size: 14px; font-family: 'Helvetica Neue', Helvetica, Arial, 'sans-serif'">Benefit from faster, more fluid communication with your host system. The refined ECC* algorithm and a new MJX controller generate higher speeds, and the improved queued trim enhances Linux compatibility. Our advanced engineering makes the 860 EVO more compatible with your computing system.</p></td>
            </tr>
            <tr>
              <td width="100%"><img src="http://www.mmt.com.au/articles/samsung/180119/img/banner4.jpg" width="660" alt="banner" border="0" align="center" style="font-family: Helvetica, helvetica neue, Arial, 'sans-serif'; width: 100%; max-width: 680px; height: auto; background: #dddddd; font-family: Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;" class="fluid g-img"></td>
            </tr>
          </tbody></table>
          
          <!-- 1 Even Columns Header : END --></td>
      </tr>
      <!-- Image Small Left, Text Right : BEGIN -->
      <tr>
        <td align="center" style="background-color:#ffffff;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-align: center " width="100%"><!-- 1 Even Columns Header : BEGIN -->
          
          <table align="center" style="background-color:#ffffff;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-align: center " width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody><tr>
              <td align="center" style="background-color:#ffffff;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-align: center; font-size: 22px " width="100%"><p style="margin:0px;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-align: center; padding-left: 10px"><strong style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-family:Helvetica, Arial, 'sans-serif'; font-size: 22px"><br>
                Samsung Magician</strong></p></td>
            </tr>
            
            
          </tbody></table>
          
          <!-- 1 Even Columns Header : END --></td>
      </tr>
            <!-- 1 column half half : BEGIN -->
      <tr>
        <td style="background-color:#ffffff" align="center" height="100%" valign="top" width="100%">
          
          <!--[if mso]>
                        <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                        <tr>
                        <td align="center" valign="top" width="660">
                        <![endif]-->
          
          <table role="presentation" border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';max-width:660px;">
            <tbody><tr>
              <td align="center" valign="top" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-size:0;direction:  rtl;"><!--[if mso]>
                                    <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                                    <tr>
                                    <td align="left" valign="top" width="330">
                                    <![endif]-->
                
                <div style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';display:inline-block;width:100%;min-width:200px;max-width:330px;vertical-align:top;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tbody><tr>
                      <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-size: 14px;text-align: left;">
                          <tbody><tr>
                            <td align="center"><img src="http://www.mmt.com.au/articles/samsung/180119/img/2row2.jpg" width="300" border="0" alt="Alt Text" class="center-on-narrow" style="font-family: Helvetica, helvetica neue, Arial, 'sans-serif'; width: 100%; max-width: 300px; height: auto; background: #28A5FF; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; text-align: center"></td>
                          </tr>
                        </tbody></table></td>
                    </tr>
                  </tbody></table>
                </div>
                
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="330">
                                    <![endif]-->
                
                <div style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';display:inline-block;width:100%;min-width:200px;max-width:330px;vertical-align:top;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tbody><tr>
                      <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';padding: 10px 10px;direction:  ltr;"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-size: 14px;text-align: left;">
                          <tbody><tr>
                            <td style="font-family: Helvetica, helvetica neue, Arial, 'sans-serif';font-family: sans-serif;font-size: 13px;color: #555555;padding-top: 10px;direction:  ltr;" class="stack-column-center"><h3>Management software</h3>
                              <p>Samsung Magician software is designed to help you manage your SSD with a simple and intuitive user interface.</p>
                              <h3>Firmware update</h3>
                              <p>Get notifications when new firmware is released, and easily install updates for enhanced performance, stability, and compatibility.</p>
                              <h3>Perf. benchmark</h3>
                              <p>Check your SSD's sequential and random read/write speeds, so you can maintain superb performance.</p>
                              <h3>Data security</h3>
                              <p>Protect data by selecting security options. The 860 EVO supports AES 256-bit hardware-based encryption and is compliant with TCG Opal and IEEE 1667.</p></td>
                          </tr>
                        </tbody></table></td>
                    </tr>
                  </tbody></table>
                </div>
                
                <!--[if mso]>
                                    </td>
                                    </tr>
                                    </table>
                                    <![endif]--></td>
            </tr>
          </tbody></table>
          
          <!--[if mso]>
                        </td>
                        </tr>
                        </table>
                        <![endif]--></td>
      </tr>
      <!-- 1 column half half : END --> 
      <tr>
        <td bgcolor="#FFFFFF" align="center"><table width="97%" style="line-height:3px; border-bottom:solid 2px #F1F1F1; border-collapse:collapse" border="0" cellpadding="0">
            <tbody>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </tbody>
          </table></td>
     </tr>
     <tr>
              <td align="center" style="background-color:#ffffff;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-align: center; font-size: 22px " width="100%"><p style="margin:0px;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-align: center; padding-left: 10px"><strong style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-family:Helvetica, Arial, 'sans-serif'; font-size: 22px">The Latest Range of Samsung Products</strong></p></td>
        </tr>
      <tr>
      <!-- 4 Even Columns : BEGIN -->
      <tr>
        <td align="center" height="100%" valign="top" width="100%" style="background-color:#ffffff;font-family:Helvetica, helvetica neue, Arial, 'sans-serif';padding: 0px 0;"><!-- 4 Even Columns Header : BEGIN --> 
          
          <!-- 4 Even Columns Header : END --> 
          
          <!--[if mso]>
                        <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                        <tr>
                        <td align="center" valign="top" width="660">
                        <![endif]-->
          
          <table role="presentation" border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';max-width:660px;">
            <tbody><tr>
              <td align="center" valign="top" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-size:0;"><!--[if mso]>
                                    <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                                    <tr>
                                    <td align="left" valign="top" width="165">
                                    <![endif]-->
                
                <div style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif'; padding-top: 2px; padding-bottom: 2px;  display:inline-block; margin: 0 -2px; max-width:25%; min-width:165px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tbody><tr>
                      <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif'; padding: 8px 8px;"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';background-color: #FFFFFF; font-size: 14px;text-align: left;">
                          <tbody><tr>
                            <td align="center" style="font-family: Helvetica, helvetica neue, Arial, 'sans-serif'; background-color: #FFFFFF; font-size: 16px; line-height: 20px; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center;"><a href="" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-decoration: none;color: #000"><strong>860 EVO mSATA</strong></a></td>
                          </tr>
                          <tr>
                            <td align="center"><a style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-decoration: none" href=""> <img src="http://www.mmt.com.au/articles/samsung/180119/img/4row2.jpg" width="140" border="0" alt="Alt Text" class="center-on-narrow" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';width: 100%; max-width: 140px; height: auto; background: #28A5FF; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"> </a></td>
                          </tr>
                          <tr>
                            <td align="left" style=" padding: 0px 10px; font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-size: 11px; line-height: 12px; text-align: left;"><table border="0" cellspacing="0" cellpadding="0" width="100%" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';color: #000; text-align: left">
                                <tbody>
                              </tbody></table></td>
                          </tr>
                          
                          <tr>
                            <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-family:Helvetica, Arial, 'sans-serif'; font-size: 17px; line-height: 18px; color: #555555; text-align: center; font-weight:bold;" class="stack-column-center"><a style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-decoration: none; color:#F00" href="">From $116.50 ex.</a></td>
                          </tr>
                          <tr>
                            <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-family:Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 16px; color: #555555; text-align: center" class="stack-column-center"><a style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-decoration: none; color:#090" href="">RRP $149.00</a></td>
                          </tr>
                                <tr>
                                  <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-family:Helvetica, Arial, 'sans-serif'; font-size: 12px; line-height: 17px; color: #555555; text-align: center" class="stack-column-center">
                                   <!-- Button : BEGIN -->
                                    
                                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';margin: auto">
                                      <tbody><tr>
                                        <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';border-radius: 3px; background:#3A5897; text-align: center;" class="button-td"><a href="http://www.mmt.com.au/search/?manufacturer=&amp;category=&amp;search=860+mSATA&amp;stype=1" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';background: #3A5897; border: 2px solid #3A5897; font-family: sans-serif; font-size: 20px; line-height: 1.3; text-align: center; text-decoration: none; display: block; border-radius: 3px; " class="button-a"> <span style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;Order Here&nbsp;&nbsp;&nbsp;</span> </a></td>
                                      </tr>
                                    </tbody></table>
                                    
                                    <!-- Button : END -->
                                    </td>
                                </tr>
                          <tr>
                            <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-family:Helvetica, Arial, 'sans-serif'; font-size: 12px; line-height: 13px; color: #555555; text-align: center" class="stack-column-center"><a style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-decoration: none; color:#00F" href=""> 06SS-860E-MS-250GB</a></td>
                          </tr>
                          
                        </tbody></table></td>
                    </tr>
                  </tbody></table>
                </div>
                
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="165">
                                    <![endif]-->
                
                <div style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif'; padding-top: 2px; padding-bottom: 2px;  display:inline-block; margin: 0 -2px; max-width:25%; min-width:165px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tbody><tr>
                      <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif'; padding: 8px 8px;"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';background-color: #FFFFFF; font-size: 14px;text-align: left;">
                          <tbody><tr>
                            <td align="center" style="font-family: Helvetica, helvetica neue, Arial, 'sans-serif'; background-color: #FFFFFF; font-size: 16px; line-height: 20px; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center;"><a href="" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-decoration: none;color: #000"><strong>860 EVO M.2 NVMe</strong></a></td>
                          </tr>
                          <tr>
                            <td align="center"><a style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-decoration: none" href=""> <img src="http://www.mmt.com.au/articles/samsung/180119/img/4row3.jpg" width="140" border="0" alt="Alt Text" class="center-on-narrow" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';width: 100%; max-width: 140px; height: auto; background: #28A5FF; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"> </a></td>
                          </tr>
                          <tr>
                            <td align="left" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-size: 11px; line-height: 12px; padding: 0px 10px;  text-align: left;"><table border="0" cellspacing="0" cellpadding="0" width="100%" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';color: #000; text-align: left">
                                <tbody>
                              </tbody></table></td>
                          </tr>
                          
                          <tr>
                            <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-family:Helvetica, Arial, 'sans-serif'; font-size: 17px; line-height: 18px; color: #555555; text-align: center; font-weight:bold;" class="stack-column-center"><a style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-decoration: none; color:#F00" href="">From $116.50 ex.</a></td>
                          </tr>
                          <tr>
                            <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-family:Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 16px; color: #555555; text-align: center" class="stack-column-center"><a style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-decoration: none; color:#090" href="">RRP $149.00</a></td>
                          </tr>
                                <tr>
                                  <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-family:Helvetica, Arial, 'sans-serif'; font-size: 12px; line-height: 17px; color: #555555; text-align: center" class="stack-column-center">
                                   <!-- Button : BEGIN -->
                                    
                                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';margin: auto">
                                      <tbody><tr>
                                        <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';border-radius: 3px; background:#3A5897; text-align: center;" class="button-td"><a href="http://www.mmt.com.au/search/?manufacturer=&amp;category=&amp;search=860+EVO+M.2+&amp;stype=1" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';background: #3A5897; border: 2px solid #3A5897; font-family: sans-serif; font-size: 20px; line-height: 1.3; text-align: center; text-decoration: none; display: block; border-radius: 3px; " class="button-a"> <span style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;Order Here&nbsp;&nbsp;&nbsp;</span> </a></td>
                                      </tr>
                                    </tbody></table>
                                    
                                    <!-- Button : END -->
                                    </td>
                                </tr>
                          <tr>
                            <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-family:Helvetica, Arial, 'sans-serif'; font-size: 12px; line-height: 13px; color: #555555; text-align: center" class="stack-column-center"><a style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-decoration: none; color:#00F" href=""> 06SS-860E-M2-250GB</a></td>
                          </tr>
                          
                        </tbody></table></td>
                    </tr>
                  </tbody></table>
                </div>
                
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="165">
                                    <![endif]-->
                
                <div style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif'; padding-top: 2px; padding-bottom: 2px;  display:inline-block; margin: 0 -2px; max-width:25%; min-width:165px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tbody><tr>
                      <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif'; padding: 8px 8px;"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';background-color: #FFFFFF; font-size: 14px;text-align: left;">
                          <tbody><tr>
                            <td align="center" style="font-family: Helvetica, helvetica neue, Arial, 'sans-serif'; background-color: #FFFFFF; font-size: 16px; line-height: 20px; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center;"><a href="" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-decoration: none;color: #000"><strong>860 PRO SSD</strong></a></td>
                          </tr>
                          <tr>
                            <td align="center"><a style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-decoration: none" href=""> <img src="http://www.mmt.com.au/articles/samsung/180119/img/4row1.jpg" width="140" border="0" alt="Alt Text" class="center-on-narrow" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';width: 100%; max-width: 140px; height: auto; background: #28A5FF; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"> </a></td>
                          </tr>
                          <tr>
                            <td align="left" style=" padding: 0px 10px; font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-size: 11px; line-height: 12px; text-align: left;"><table border="0" cellspacing="0" cellpadding="0" width="100%" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';color: #000; text-align: left">
                                <tbody>
                              </tbody></table></td>
                          </tr>
                          
                          <tr>
                            <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-family:Helvetica, Arial, 'sans-serif'; font-size: 17px; line-height: 18px; color: #555555; text-align: center; font-weight:bold;" class="stack-column-center"><a style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-decoration: none; color:#F00" href="">From $161.50 ex.</a></td>
                          </tr>
                          <tr>
                            <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-family:Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 16px; color: #555555; text-align: center" class="stack-column-center"><a style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-decoration: none; color:#090" href="">RRP $209.00</a></td>
                          </tr>
                                <tr>
                                  <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-family:Helvetica, Arial, 'sans-serif'; font-size: 12px; line-height: 17px; color: #555555; text-align: center" class="stack-column-center">
                                   <!-- Button : BEGIN -->
                                    
                                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';margin: auto">
                                      <tbody><tr>
                                        <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';border-radius: 3px; background:#3A5897; text-align: center;" class="button-td"><a href="http://www.mmt.com.au/search/?manufacturer=&amp;category=&amp;search=06SS-860P&amp;stype=1" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';background: #3A5897; border: 2px solid #3A5897; font-family: sans-serif; font-size: 20px; line-height: 1.3; text-align: center; text-decoration: none; display: block; border-radius: 3px; " class="button-a"> <span style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;Order Here&nbsp;&nbsp;&nbsp;</span> </a></td>
                                      </tr>
                                    </tbody></table>
                                    
                                    <!-- Button : END -->
                                    </td>
                                </tr>
                          <tr>
                            <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-family:Helvetica, Arial, 'sans-serif'; font-size: 12px; line-height: 13px; color: #555555; text-align: center" class="stack-column-center"><a style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-decoration: none; color:#00F" href=""> 06SS-860P-256GB</a></td>
                          </tr>
                          
                        </tbody></table></td>
                    </tr>
                  </tbody></table>
                </div>
                
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="165">
                                    <![endif]-->
                <div style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif'; padding-top: 2px; padding-bottom: 2px;  display:inline-block; margin: 0 -2px; max-width:25%; min-width:165px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tbody><tr>
                      <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif'; padding: 8px 8px;"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';background-color: #FFFFFF; font-size: 14px;text-align: left;">
                          <tbody><tr>
                            <td align="center" style="font-family: Helvetica, helvetica neue, Arial, 'sans-serif'; background-color: #FFFFFF; font-size: 16px; line-height: 20px; text-align: center; text-decoration: none; display: block; color: #000000; text-align: center;"><a href="" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-decoration: none;color: #000"><strong>Samsung T5 SSD</strong></a></td>
                          </tr>
                          <tr>
                            <td align="center"><a style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-decoration: none" href=""> <img src="http://www.mmt.com.au/articles/samsung/180119/img/4row4.jpg" width="140" height="" border="0" alt="Alt Text" class="center-on-narrow" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';width: 100%; max-width: 140px; height: auto; background: #28A5FF; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"> </a></td>
                          </tr>
                         
                          
                          <tr>
                            <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-family:Helvetica, Arial, 'sans-serif'; font-size: 17px; line-height: 18px; color: #555555; text-align: center; font-weight:bold;" class="stack-column-center"><a style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-decoration: none; color:#F00" href="">From $169.00 ex.</a></td>
                          </tr>
                          <tr>
                            <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-family:Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 16px; color: #555555; text-align: center" class="stack-column-center"><a style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-decoration: none; color:#090" href="">RRP $199.00</a></td>
                          </tr>
                                <tr>
                                  <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-family:Helvetica, Arial, 'sans-serif'; font-size: 12px; line-height: 17px; color: #555555; text-align: center" class="stack-column-center">
                                   <!-- Button : BEGIN -->
                                    
                                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';margin: auto">
                                      <tbody><tr>
                                        <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';border-radius: 3px; background:#3A5897; text-align: center;" class="button-td"><a href="http://www.mmt.com.au/search/?manufacturer=&amp;category=&amp;search=Samsung+T5&amp;stype=1" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';background: #3A5897; border: 2px solid #3A5897; font-family: sans-serif; font-size: 20px; line-height: 1.3; text-align: center; text-decoration: none; display: block; border-radius: 3px; " class="button-a"> <span style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;Order Here&nbsp;&nbsp;&nbsp;</span> </a></td>
                                      </tr>
                                    </tbody></table>
                                    
                                    <!-- Button : END -->
                                    </td>

                                </tr>
                          <tr>
                            <td style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';font-family:Helvetica, Arial, 'sans-serif'; font-size: 12px; line-height: 13px; color: #555555; text-align: center" class="stack-column-center"><a style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';text-decoration: none; color:#00F" href=""> 06SU-T5-250G</a></td>
                          </tr>
                          
                        </tbody></table></td>
                    </tr>
                  </tbody></table>
                </div>
                
                <!--[if mso]>
                        </td>
                        </tr>
                        </table>
                        <![endif]--></td>
            </tr>
          </tbody></table>
          
          <!--[if mso]>
                        </td>
                        </tr>
                        </table>
                        <![endif]--></td>
      </tr>
      <!-- 4 Even Columns : END --> 
      
      
      <!-- Image Large Right, Text Left  : END --> 
      
      <!-- Footer : BEGIN -->
      <tr>
        <td style="background-color:#ffffff"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
            <tbody><tr>
              <td style="background-color:#ffffff"><img src="http://www.mmt.com.au/articles/samsung/180119/img/askmmt.jpg" width="660" height="" alt="ask multimedia footer" border="0" align="center" style="font-family:Helvetica, helvetica neue, Arial, 'sans-serif';width: 100%; max-width: 660px; height: auto; background: #dddddd; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;" class="g-img fluid"></td>
            </tr>
          </tbody></table></td>
      </tr>
      <!-- Footer Image : BEGIN -->
           <tr>
        <td bgcolor="#FFFFFF" align="center"><table width="97%" style="line-height:3px; border-bottom:solid 2px #F1F1F1; border-collapse:collapse" border="0" cellpadding="0">
            <tbody>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </tbody>
          </table></td>
     </tr>
      
    </tbody></table>
    
    <!-- Email Body : END --> 
    <!----------------------------------------- keep end -------------------------------------------------> 
 
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
