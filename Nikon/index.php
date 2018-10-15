  <!----------------------------------------- replace begin ------------------------------------------------->
<?php
session_start();

# ---------- Adjust settings here ----------

$loginRequired = TRUE;
$title = "A handheld device like never before - Multimedia Technology";
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

<center style="width: 100%; background: #ffe603; text-align: left;">
  
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
        <td bgcolor="#ffffff"><img usemap="#MapMapMap" src="http://www.mmt.com.au/articles/nikon/170406-nikon360/img/banner.jpg" width="680" alt="banner" border="0" align="center" style="width: 100%; max-width: 680px; height: auto; background: #dddddd; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;" class="fluid g-img" /></td>
      </tr>
      <!-- Hero Image, Flush : END --> 
      
      <!-- Drawcard : BEGIN -->
      <tr>

      </tr>
      <!-- Drawcard : END --> 
      
      <!-- Background Image with Text : BEGIN -->
      <tr> 
        <!-- Bulletproof Background Images c/o https://backgrounds.cm -->
        <td bgcolor="#ffffff" valign="middle" style="text-align: center; background-position: center center !important; background-size: cover !important;"><!--[if gte mso 9]>
                        <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:680px;height:175px; background-position: center center !important;">
                        <v:fill type="tile" src="http://www.mmt.com.au/articles/nikon/170406-nikon360/img/background1.jpg" color="#ffffff" />
                        <v:textbox inset="0,0,0,0">
                        <![endif]-->
          
          <div> 
            <!--[if mso]>
                            <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="580">
                            <tr>
                            <td align="center" valign="top" width="580">
                            <![endif]-->
            <table role="presentation" border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="max-width:580px; margin: auto;">
              
              <!-- logo Text: BEGIN -->
              <tr> 
                <!-- dir=rtl is where the magic happens. This can be changed to dir=ltr to swap the alignment on wide while maintaining stack order on narrow. -->
                <td dir="rtl" align="center" height="100%" valign="middle" width="100%" style="padding-top: 2px; padding-bottom: 2px"><!--[if mso]>
                        <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                        <tr>
                        <td align="center" valign="middle" width="660">
                        <![endif]-->
                  
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="max-width:660px;">
                    <tr>
                      <td align="center" valign="middle" style="font-size:0; padding: 10px 0;"><!--[if mso]>
                                    <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                                    <tr>
                                    <td align="left" valign="middle" width="200">
                                    <![endif]-->
                        
                        <div style="display:inline-block; margin: 0 -2px; max-width: 200px; min-width:160px; vertical-align:middle; width:100%;" class="stack-column">
                          <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                              <td dir="ltr" style="padding: 15px 15px 15px 15px; vertical-align: middle"><img src="http://www.mmt.com.au/articles/nikon/170406-nikon360/img/brand.png" width="170" height="40" border="0" alt="particle resistant" class="center-on-narrow" style="vertical-align: middle; width: 100%; max-width: 200px; height: auto; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
                            </tr>
                          </table>
                        </div>
                        
                        <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="460">
                                    <![endif]--> 
                        <!--https://www.vecteezy.com/free-vector/blue-background-design -->
                        
                        <div style="display:inline-block; margin: 0 -2px; max-width:60%; min-width:380px; vertical-align:top;" class="stack-column">
                          <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                              <td dir="ltr" style="text-align: left; padding: 0px 0px; font-family:Helvetica, Arial, 'sans-serif'; font-size: 15px; line-height: 17px; color: #555555;" class="center-on-narrow"><br> 
                              Imagine being able to capture not just the view in front of your eyes, but the entire world around you—in every direction—as lifelike 360° 4K Ultra HD video. You'd be able to tell stories that make your friends and family feel like they were there. <br></td>
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
              <!-- logo Text : END -->
              
           
            </table>
            <!--[if mso]>
                            </td>
                            </tr>
                            </table>
                            <![endif]--> 
          </div>
          
          <!--[if gte mso 9]>
                        </v:textbox>
                        </v:rect>
                        <![endif]--></td>
      </tr>
      <!-- Background Image with Text : END --> 
      
    

      <tr>
      
        <td bgcolor="#ffffff" align="center" height="100%" valign="top" width="100%"><!--[if mso]>
                        <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                        <tr>
                        <td align="center" valign="top" width="660">
                        <![endif]-->
          
          <table role="presentation" border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="max-width:660px;">
            <tr>
              <td align="center" valign="top" style="font-size:0; padding: 10px 0;"><!--[if mso]>
                                    <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                                    <tr>
                                    <td align="left" valign="top" width="330">
                                    <![endif]-->
               
                <div style="display:inline-block; margin: 0 -2px; width:100%; min-width:200px; max-width:330px; vertical-align:top;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td style="padding: 10px 10px;"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-size: 14px;text-align: left;">
                          <tr>
                            <td align="center"><a href="http://www.mmt.com.au/search/product/?name=09N-KEYMISSION360"><img src="http://www.mmt.com.au/articles/nikon/170406-nikon360/img/Nikon360.jpg" width="186" height="186" border="0" alt="FZ N1 Image" class="center-on-narrow" style="width: 60%; max-width: 210px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; text-align: center"></a></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table>
                </div>
                
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="330">
                                    <![endif]-->
                
                <div style="display:inline-block; margin: 0 -2px; width:100%; min-width:200px; max-width:330px; vertical-align:top;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td style="padding: 10px 10px;"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="font-size: 14px;text-align: left;">
                         <tr>
                         <td style="font-family: sans-serif; font-size: 20px; line-height: 20px; color: #555555; padding-top: 10px;" class="stack-column-center">KeyMission 360</td>
                         </tr>
                          <tr>
                            <td style="font-family: sans-serif; font-size: 13px; line-height: 20px; color: #555555; padding-top: 10px;" class="stack-column-center">&bull; Ultra 4K - 23.9 Million Pixels (7,744 x 3,872)<br>
                              &bull; x2 1.6mm Lens<br>                             
                              &bull; ISO  100   - 1,600 <br>
                              &bull; Shutter Speed 1/8000–1 sec<br>
                              &bull; Waterproof up to 30m<br>
                              &bull; Freezeproof up to -10C<br>
                              &bull; Shockproof up to 2m<br>
                            &bull; Dustproof <br>
                            </td>
                          </tr>
                          
                          <tr>
                          <td>
                           <!-- Button : BEGIN -->
                              
                              <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto">
                                <tr>
                                  <td style="border-radius: 3px; background:#2199d6; text-align: center;" class="button-td"><a href="http://www.mmt.com.au/search/product/?name=09N-KEYMISSION360" style="background: #2199d6; border-bottom-color: #0042ff; /* [disabled]border-bottom-style: solid; */ font-family: Helvetica, Arial, 'sans-serif'; font-size: 20px; line-height: 1.3; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold; border-width: 5px 5px 3px;" class="button-a"> <span style="color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buy Now&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </a></td>
                                </tr>
                              </table>
                              
                              <!-- Button : END --> 
                          </td>
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
      <!-- 2 Even Columns : END --> 
            <!-- Hero Image, Flush : BEGIN -->
      <tr>
        <td bgcolor="#ffffff"><a href="https://www.youtube.com/watch?v=uZ9senPdCkY&t=1s&index=2&list=PLhHE_OzamjBEDe8ivuEaBaqaqnC2FIveL"><img src="http://www.mmt.com.au/articles/nikon/170406-nikon360/img/banner2.jpg" width="680" alt="banner" border="0" align="center" style="width: 100%; max-width: 680px; text-align:center; height: auto; background: #dddddd; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"/></a></td>
      </tr>
      <!-- Hero Image, Flush : END --> 
            <!-- Thumbnail Left, Text Right : BEGIN -->
      <tr> 
        <!-- dir=ltr is where the magic happens. This can be changed to dir=rtl to swap the alignment on wide while maintaining stack order on narrow. -->
        <td dir="ltr" bgcolor="#ffffff" align="center" height="100%" valign="top" width="100%" style="padding-top: 2px; padding-bottom: 2px"><!-- Thumbnail Even Columns Header : BEGIN -->
          
          <p style="text-align: left; padding-left: 10px"> <strong><span style="font-family:Helvetica, Arial, 'sans-serif'; font-size: 22px">Learn more about Nikon KeyMission 360</span></strong></p>
          
          <!-- Thumbnail Even Columns Header : END --> 
          
          <!--[if mso]>
                        <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                        <tr>
                        <td align="center" valign="top" width="660">
                        <![endif]-->
          
          <table role="presentation" border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="max-width:660px;">
            <tr>
              <td align="center" valign="top" style="font-size:0; padding: 10px 0; background-color: #FFFFFF;"><!--[if mso]>
                                    <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                                    <tr>
                                    <td align="left" valign="top" width="220">
                                    <![endif]-->
                
                <div style="display:inline-block; margin: 0 -2px; max-width: 230px; min-width:160px; vertical-align:top; width:100%;" class="stack-column">
                  <span style="padding: 0 10px 10px 10px;"><img src="http://www.mmt.com.au/articles/nikon/170406-nikon360/img/inforowsmall4.jpg" width="200" height="170" border="0" alt="application image" class="center-on-narrow" style="border: 0px solid #111111;width: 100%; max-width: 200px; height: auto; background: #dddddd; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></span>
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">

                  </table>
                </div>
                
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="440">
                                    <![endif]-->
                
                <div style="display:inline-block; margin: 0 -2px; max-width:60%; min-width:290px; vertical-align:top;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td dir="ltr" style="font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #222222; padding: 0px 0px 0; text-align: left;" class="center-on-narrow"><strong style="color: #111111; font-size: 20px;">A POCKET FULL OF SURPRISES.</strong><br> 
                      You’ll never miss a single moment with the KeyMission 360. Featuring an image sensor and our NIKKOR ultra-wide angle, fixed focal length lens on both sides of the camera, two images are seamlessly combined in-camera into an equidistant cylindrical image. What you get is sharp and properly aligned video and still imagery that accurately portray the beauty you intended.<br></td>
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
      <!-- Thumbnail Left, Text Right : END --> 
      
      <!-- Thumbnail Right, Text Left : BEGIN -->
      <tr> 
        <!-- dir=rtl is where the magic happens. This can be changed to dir=ltr to swap the alignment on wide while maintaining stack order on narrow. -->
        <td dir="rtl" bgcolor="#ffffff" align="center" height="100%" valign="top" width="100%" style="padding-top: 2px; padding-bottom: 2px"><!--[if mso]>
                        <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                        <tr>
                        <td align="center" valign="top" width="660">
                        <![endif]-->
          
          <table role="presentation" border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="max-width:660px;">
            <tr>
              <td align="center" valign="top" style="font-size:0; padding: 10px 0;background-color: #FFFFFF;"><!--[if mso]>
                                    <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                                    <tr>
                                    <td align="left" valign="top" width="220">
                                    <![endif]-->
                
                <div style="display:inline-block; margin: 0 -2px; max-width: 230px; min-width:160px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td dir="ltr" style="padding: 0 10px 10px 10px;"><img src="http://www.mmt.com.au/articles/nikon/170406-nikon360/img/inforowsmall2.jpg" width="200" height="170" border="0" alt="ip67" class="center-on-narrow" style="border: 0px solid #111111;width: 100%; max-width: 200px; height: auto; background: #dddddd; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
                    </tr>
                  </table>
                </div>
                
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="440">
                                    <![endif]-->
                
                <div style="display:inline-block; margin: 0 -2px; max-width:60%; min-width:290px; vertical-align:top;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td dir="ltr" style="font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #222222; padding: 0px 0px 0; text-align: left;" class="center-on-narrow"><strong style="color: #111111; font-family:Helvetica, Arial, 'sans-serif'; font-size: 20px;">YOUR FELLOW ADRENALINE JUNKIE. </strong><br>
                        <table style="" border="0" cellspacing="0" cellpadding="0">
                                <td>Take your KeyMission 360 wherever your heart desires. Waterproof down to 30m, shockproof to a drop of 2.0m, freezeproof down to -10°C and dustproof, you can now immerse yourself in every experience you seek.  The possibilities are endless.<br></td>
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
          </table></td>
      </tr>
      <!-- Thumbnail Right, Text Left : END --> 
      
      <!-- Thumbnail Left, Text Right : BEGIN -->
      <tr> 
        <!-- dir=ltr is where the magic happens. This can be changed to dir=rtl to swap the alignment on wide while maintaining stack order on narrow. -->
        <td dir="ltr" bgcolor="#ffffff" align="center" height="100%" valign="top" width="100%" style="padding-top: 2px; padding-bottom: 2px"><!--[if mso]>
                        <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                        <tr>
                        <td align="center" valign="top" width="660">
                        <![endif]-->
          
          <table role="presentation" border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="max-width:660px;">
            <tr>
              <td align="center" valign="top" style="font-size:0; padding: 10px 0;background-color: #FFFFFF;"><!--[if mso]>
                                    <table role="presentation" border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                                    <tr>
                                    <td align="left" valign="top" width="220">
                                    <![endif]-->
                
                <div style="display:inline-block; margin: 0 -2px; max-width: 230px; min-width:160px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td dir="ltr" style="padding: 0 10px 10px 10px;"><img src="http://www.mmt.com.au/articles/nikon/170406-nikon360/img/inforowsmall3.jpg" width="200" height="170" border="0" alt="vibration resistant" class="center-on-narrow" style="border: 0px solid #111111;width: 100%; max-width: 200px; height: auto; background: #dddddd; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
                    </tr>
                  </table>
                </div>
                
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="440">
                                    <![endif]-->
                
                <div style="display:inline-block; margin: 0 -2px; max-width:60%; min-width:290px; vertical-align:top;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td dir="ltr" style="color: #222222; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; padding: 0px 0px 0; text-align: left;" class="center-on-narrow"><strong style="color: #11111; font-size: 20px;">STORYTELLING. IN YOUR OWN TIME</strong><br>
                        <table border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td>Building on our heritage of innovation in the imaging field, the new SnapBridge 360/170 app places the KeyMission 360 in the centre of your smart devices’ ecosystem.SnapBridge 360/170 enables continuous and seamless sharing of all your adventures from the KeyMission to a smart device as they are captured in real time. </td>
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
      <!-- Thumbnail Left, Text Right : END --> 
      
      
      
      <!-- 4 Even Columns : BEGIN -->
      <tr>
        <td bgcolor="#ffffff" align="center" height="100%" valign="top" width="100%" style="padding: 0px 0;"><!-- 4 Even Columns Header : BEGIN --> 
          
          <!-- 4 Even Columns Header : END --> 
          
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
                                    <td align="left" valign="top" width="165">
                                    <![endif]--> 
                <div style=" padding-top: 2px; padding-bottom: 2px;  display:inline-block; margin: 0 -2px; max-width:25%; min-width:165px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td style=" padding: 8px 8px;"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #FFFFFF; font-size: 14px;text-align: left;">
                          <tr>
                            <td align="center"><img src="http://www.mmt.com.au/articles/nikon/170406-nikon360/img/3rowsmall1.jpg" width="140" height="130" border="0" alt="temperature resistant" class="center-on-narrow" style="width: 100%; max-width: 140px;border: 0px solid #111111; height: auto; background: #FFFFFF; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table>
                </div>
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="165">
                                    <![endif]--> 
                <div style=" padding-top: 2px; padding-bottom: 2px;  display:inline-block; margin: 0 -2px; max-width:25%; min-width:165px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td style=" padding: 8px 8px;"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #FFFFFF;font-size: 14px;text-align: left;">
                          <tr>
                            <td align="center"><img src="http://www.mmt.com.au/articles/nikon/170406-nikon360/img/3rowsmall2.jpg" alt="temperature resistant" width="140" height="130" border="0" class="center-on-narrow" style="width: 100%; max-width: 140px;border: 0px solid #111111; height: auto; background: #FFFFFF; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table>
                </div>
 
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="165">
                                    <![endif]--> 
                <div style=" padding-top: 2px; padding-bottom: 2px; display:inline-block; margin: 0 -2px; max-width:25%; min-width:165px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td style=" padding: 8px 8px;"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #FFFFFF;font-size: 14px;text-align: left;">
                          <tr>
                            <td align="center"><img src="http://www.mmt.com.au/articles/nikon/170406-nikon360/img/3rowsmall3.jpg" width="140" height="130" border="0" alt="temperature resistant" class="center-on-narrow" style="width: 100%; max-width: 140px;border: 0px solid #111111; height: auto; background: #FFFFFF; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table>
                </div>
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="165">
                                    <![endif]--> 
                <div style=" padding-top: 2px; padding-bottom: 2px; display:inline-block; margin: 0 -2px; max-width:25%; min-width:165px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td style=" padding: 8px 8px;"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #FFFFFF; font-size: 14px;text-align: left;">
                          <tr>
                            <td align="center"><img src="http://www.mmt.com.au/articles/nikon/170406-nikon360/img/3rowsmall4.jpg" width="140" height="130" border="0" alt="temperature resistant" class="center-on-narrow" style="width: 100%; max-width: 140px;border: 0px solid #111111; height: auto; background: #FFFFFF; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
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
      <!-- 4 Even Columns : END --> 
      <tr>
      <td align="center" style="background-color: #FFFFFF; font-family: Helvetica, Arial, 'sans-serif'; font-size: 22px; line-height: 2; text-align: center; text-decoration: none; display: block; color: #111111; text-align: center; font-weight: bold;">
 Check Out What Others Have Brought</td>
      </tr>
      

        <!-- 4 Even Columns : BEGIN -->
      <tr>
        <td bgcolor="#ffffff" align="center" height="100%" valign="top" width="100%" style="padding: 0px 0;"><!-- 4 Even Columns Header : BEGIN --> 
          
          <!-- 4 Even Columns Header : END --> 
          
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
                                    <td align="left" valign="top" width="165">
                                    <![endif]--> 
                <a style="text-decoration: none"  href="http://www.mmt.com.au/search/product/?name=09N-KEYMISSION170">
                <div style=" padding-top: 2px; padding-bottom: 2px;  display:inline-block; margin: 0 -2px; max-width:25%; min-width:165px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                             <tr>
                            <td style="font-family:Helvetica, Arial, 'sans-serif'; font-size: 12px; line-height: 17px; color: #555555; padding-top: 10px; text-align: center" class="stack-column-center"><strong style="color: #000; font-size: 14px;">KeyMission 170</strong></td>
                          </tr>
                    <tr>
                      <td style=" padding: 8px 8px;"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #FFFFFF; font-size: 14px;text-align: left;">
                          <tr>
                            <td align="center"><img src="http://www.mmt.com.au/articles/nikon/170406-nikon360/img/2rowsmall1.jpg" width="140" height="119" border="0" alt="temperature resistant" class="center-on-narrow" style="width: 100%; max-width: 140px;border: 0px solid #000000; height: auto; background: #FFFFFF; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
                          </tr>

                        </table>
                        <br></td>
                    </tr>
                  </table>
                </div>
                </a> 
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="165">
                                    <![endif]--> 
                
                <a style="text-decoration: none"  href="http://www.mmt.com.au/search/product/?name=16DCS4602EV">
                <div style=" padding-top: 2px; padding-bottom: 2px;  display:inline-block; margin: 0 -2px; max-width:25%; min-width:165px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                              <tr>
                            <td style="font-family:Helvetica, Arial, 'sans-serif'; font-size: 12px; line-height: 17px; color: #555555; padding-top: 10px; text-align: center" class="stack-column-center"><strong style="color: #000; font-size: 14px;">KeyMission 90</strong></td>
                          </tr>
                    <tr>
                      <td style=" padding: 8px 8px;"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #FFFFFF;font-size: 14px;text-align: left;">
                          <tr>
                            <td align="center"><img src="http://www.mmt.com.au/articles/nikon/170406-nikon360/img/2rowsmall2.jpg" width="140" height="119" border="0" alt="temperature resistant" class="center-on-narrow" style="width: 100%; max-width: 140px;border: 0px solid #000000; height: auto; background: #FFFFFF; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"><br></td>
                          </tr>

                        </table></td>
                    </tr>
                  </table>
                </div>
                </a> 
                
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="165">
                                    <![endif]--> 
                
                <a style="text-decoration: none"  href="http://www.mmt.com.au/search/?manufacturer=&category=09M&search=micro&stype=1">
                <div style=" padding-top: 2px; padding-bottom: 2px; display:inline-block; margin: 0 -2px; max-width:25%; min-width:165px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                          <tr>
                            <td style="font-family:Helvetica, Arial, 'sans-serif'; font-size: 12px; line-height: 17px; color: #555555; padding-top: 10px; text-align: center" class="stack-column-center"><strong style="color: #000; font-size: 14px;">Mirco SD Cards</strong></td>
                          </tr>
                    <tr>
                      <td style=" padding: 8px 8px;"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #FFFFFF;font-size: 14px;text-align: left;">
                          <tr>
                            <td align="center"><img src="http://www.mmt.com.au/articles/nikon/170406-nikon360/img/2rowsmall3.jpg" width="140" height="119" border="0" alt="temperature resistant" class="center-on-narrow" style="width: 100%; max-width: 140px;border: 0px solid #000000; height: auto; background: #FFFFFF; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
                          </tr>
                   
                        </table>
                        <br></td>
                    </tr>
                  </table>
                </div>
                </a> 
                <!--[if mso]>
                                    </td>
                                    <td align="left" valign="top" width="165">
                                    <![endif]--> 
                
                <a style="text-decoration: none"  href="http://www.mmt.com.au/search/product/?name=09N-VAW25301">
                <div style=" padding-top: 2px; padding-bottom: 2px; display:inline-block; margin: 0 -2px; max-width:25%; min-width:165px; vertical-align:top; width:100%;" class="stack-column">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                  <td style="font-family:Helvetica, Arial, 'sans-serif'; font-size: 12px; line-height: 17px; color: #555555; padding-top: 10px; text-align: center" class="stack-column-center"><strong style="color: #000; font-size: 14px;">KeyMission Handy Rod</strong></td>
                    <tr>
                      <td style=" padding: 8px 8px;"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background-color: #FFFFFF; font-size: 14px;text-align: left;">
                          <tr>
                            <td align="center"><img src="http://www.mmt.com.au/articles/nikon/170406-nikon360/img/2rowsmall5.jpg" width="140" height="119" border="0" alt="temperature resistant" class="center-on-narrow" style="width: 100%; max-width: 140px;border: 0px solid #000000; height: auto; background: #FFFFFF; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
                          </tr>
                          <tr>

                          </tr>
                        </table>
                        <br></td>
                    </tr>
                  </table>
                </div>
                </a> 
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
      <!-- 4 Even Columns : END --> 
      <br>
<br>

      <!-- 1 Column Text + Button : BEGIN -->
      <tr>
        <td bgcolor="#ffffff"><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
            <tr>
              <td bgcolor="#ffffff"><img src="http://www.mmt.com.au/articles/nikon/170406-nikon360/img/askmmt.jpg" width="680" height="" alt="ask multimedia footer" border="0" align="center" style="width: 100%; max-width: 680px; height: auto; background: #dddddd; font-family:Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;" class="g-img fluid"></td>
            </tr>
          </table></td>
      </tr>
      <!-- 1 Column Text + Button : BEGIN -->
      
    </table>
    
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
                      <td dir="ltr" style="padding: 0 50px 0px 10px;"><img src="http://www.mmt.com.au/articles/nikon/170406-nikon360/img/logo.png" width="90" height="" border="0" alt="particle resistant" class="center-on-narrow" style="width: 100%; max-width: 90px; height: auto; font-family: Helvetica, Arial, 'sans-serif'; font-size: 13px; line-height: 17px; color: #555555;"></td>
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
                      <td dir="ltr" style="font-family:Helvetica, Arial, 'sans-serif'; font-size: 10px; line-height: 15px; color: #555555; padding: 10px 10px 0; text-align: center;" class="center-on-narrow"><table align="center" cellpadding="0" cellspacing="0" border="0" style="text-align: center">
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