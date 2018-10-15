<?php
session_start();

# ---------- Adjust settings here ----------

$loginRequired = FALSE;
$title = "Atlas Wheeled Laptop Backpack";
$products = array('');

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
    td {
        vertical-align: middle;
    }
		
		#pagetext p, #pagetext dl, #pagetext hr, #pagetext h1, #pagetext h2, #pagetext h3, #pagetext h4, #pagetext h5, #pagetext h6, #pagetext ol, #pagetext ul, #pagetext pre, #pagetext table, #pagetext address, #pagetext fieldset {
				margin-bottom:0px;
				line-height: 1.3;
		}
-->
</style>
');
$page->createHeader($user->isAuthenticated(), $user->firstName(), $user->salesRep(), $user->retrieveOrder());
?>
<div id="pagetext" style="background-color:#e5e5e5">
  <br />
  <table width="600" border="0" cellpadding="0" cellspacing="0" style="background-color:#ffffff; margin:0 auto">
     <tr>
    <td><table width="580" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr height="200" valign="middle">
          <td><a href="http://www.mmt.com.au/search/product/?name=EKS662"><img src="http://www.mmt.com.au/articles/everki/161125-bikemessenger/img/banner.jpg" width="580" height="180" border="0" alt="Venue"></a></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table width="580" border="0" cellspacing="0" cellpadding="0" align="center" style="font-family:Arial, Helvetica, sans-serif ; font-size:14px ; color:#000000 ; font-style:normal ; line-height:18px">
        <tr height="1">
          <td></td>
        </tr>
        <tr>
          <td height="55"><table width="570" border="0"  align="center">
              <tr>
                <td  style="font-family:helvetica, sans-serif; font-size:13px ; color:#000000 ; font-style:normal ; line-height:18px"><p><span style="font-family:Helvetica, sans-serif ; font-size:13px ; color:#000000 ; font-style:normal ; line-height:18px"><strong>Multimedia Technology&nbsp;</strong>are proud to introduce the new range of <strong>Everki</strong> ContemPro Bags to Australia.</span><br>
                  <br>
                The hipster Laptop Bike Messenger from <strong>EVERKI</strong> offers durability, stability, comfort and protection for urban cyclists and commuters alike. This bag offers a large, open space in the main compartment for quick and easy access, and lots of organizational options too. Your commute to the office just got a lot cooler.</p></td>
              </tr>
            </table></td>
        </tr>
        <tr height="5">
          <td></td>
        </tr>
        <tr height="10">
          <td></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table width="580" border="0" cellspacing="0" cellpadding="0" align="center" style="font-family:Arial, Helvetica, sans-serif ; font-size:15px ; color:#000000 ; font-style:normal ; line-height:18px">
        <tr>
          <td align="center"><a href="http://www.mmt.com.au/search/?manufacturer=&category=&search=Contempro&stype=1"><img src="http://www.mmt.com.au/articles/everki/161125-bikemessenger/img/lifestyle.jpg" width="627" height="389" border="0" alt="Bike Messsenger"><br></a></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table width="580" border="0" cellspacing="0" cellpadding="0" align="center"  style="font-family:Arial, Helvetica, sans-serif ; font-size:13px ; color:#666666 ; font-style:normal ; line-height:18px">
        <tr>
          <td colspan="2" align="left"><img src="http://www.mmt.com.au/articles/everki/161125-bikemessenger/img/title.jpg" width="530" height="43" border="0" alt="Everki's New Mini Messenger"><br>
            <font style="color:#000000 ; font-weight:bold">&nbsp;&nbsp; </font></td>
        </tr>
        <tr height="10">
          <td colspan="2"></td>
        </tr>
        <tr>
          <td width="327" valign="top"><ul>
              <li>The Laptop Bike Messenger</li>
              <li>Dedicated pockets for laptop and tablet</li>
              <li>Personalizable window</li>
              <li>Loops and strips for safety and security</li>
              <li>Stabilizing cross-body strap</li>
              <li>Trolley handle pass-through</li>
              <li>Padded carry handle</li>
              <li>High-contrast lining</li>
              <li>Everki Limited Lifetime Warranty</li>
            </ul>
            <table width="296" border="0" cellspacing="0" cellpadding="0" align="center">
              <tr>
                <td colspan="3" style="font-family:Arial, Helvetica, sans-serif ; font-size:17px ; font-weight:bold ; color:#000000">&nbsp;&nbsp;&nbsp;&nbsp;Also available:</td>
              </tr>
              <tr height="10">
                <td colspan="2"></td>
              </tr>
              <tr valign="top">
                <td width="106"><table width="101" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                      <td width="75" rowspan="2" valign="top" align="center"><img src="http://www.mmt.com.au/articles/everki/161125-bikemessenger/img/regfront.jpg" width="96" height="96" border="0" alt="Bike Messsenger"></td>
                    </tr>
                    <tr> </tr>
                  </table></td>
                <td  width="428"><table width="224" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="134" style="font-family:Arial, Helvetica, sans-serif ; font-size:13px ; color:#666666 ; font-style:normal ; line-height:18px"  align="left"><a href="http://www.mmt.com.au/search/?manufacturer=&category=&search=15EKP161&stype=1" >Roll Top Backpack </a></td>
                       <td width="90"  style="font-family:Arial, Helvetica, sans-serif ; font-size:13px ; color:#666666 ; font-style:normal ; line-height:18px" align="left"><a href="http://www.mmt.com.au/search/?manufacturer=&category=&search=15EKP161&stype=1" >$122.00ex</a></td>                    
                    </tr>
                    <tr>
                      <td width="134" style="font-family:Arial, Helvetica, sans-serif ; font-size:13px ; color:#666666 ; font-style:normal ; line-height:18px"  align="left"><a href="http://www.mmt.com.au/search/?manufacturer=&category=&search=15EKP160&stype=1" >Commuter Backpack</a></td>
                       <td width="90"  style="font-family:Arial, Helvetica, sans-serif ; font-size:13px ; color:#666666 ; font-style:normal ; line-height:18px" align="left"><a href="http://www.mmt.com.au/search/?manufacturer=&category=&search=15EKP160&stype=1" >$122.00ex</a></td>                    
                    </tr>
                    <tr>
                      <td width="134" style="font-family:Arial, Helvetica, sans-serif ; font-size:13px ; color:#666666 ; font-style:normal ; line-height:18px"  align="left"><a href="http://www.mmt.com.au/search/?manufacturer=&category=&search=15EKF861S13&stype=1" >Laptop Sleeve</a></td>
                      <td width="90"  style="font-family:Arial, Helvetica, sans-serif ; font-size:13px ; color:#666666 ; font-style:normal ; line-height:18px" align="left"><a href="http://www.mmt.com.au/search/?manufacturer=&category=&search=15EKF861S13&stype=1" >$50.50ex</a></td>
                    </tr>
                </table></td>
              </tr>
            </table></td>
          <td width="207" valign="middle"><table width="282" border="0" cellspacing="0" cellpadding="0" align="center">
              <tr>
                <td width="282" align="center"><p><img src="http://www.mmt.com.au/articles/everki/161125-bikemessenger/img/regside.jpg" width="178" height="178" border="0" alt="Bike Messsenger"><br>
                  <span style="font-family: Helvetica, sans-serif ; font-size:13px ; color:#000000 ; font-style:normal ; "><strong style="color:#F00; font-size:22px">$122.00 ex</strong><br>
                  <strong style="color:#090; font-size:14px">RRP 149.95</strong></span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #000000"><br>
                  <font face="Arial, helvetica, sans-serif" size="2"><a href="http://www.mmt.com.au/search/?manufacturer=&category=&search=15EKS660&stype=1"><img src="http://www.mmt.com.au/articles/buttons/button.png" width="110" height="35"><br>
Black- 15EKS660</a></font></span><font face="Arial, helvetica, sans-serif" size="2"><a href="https://www.mmt.com.au/search/product/?name=15EKS660N"><br>
Navy- 15EKS660N</a></font></p>
                  </td>
              </tr>
            </table></td>
        </tr>
        <tr height="20">
          <td colspan="2"></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td align="center" style="padding-bottom:20px"><img src="http://www.mmt.com.au/articles/seagate/130725-nas-hdd/img/underline-gray.gif" width="580" height="5" border="0" alt="separator line"></td>
  </tr>
  <tr>
    <td><table width="570" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td width="350"><img src="http://www.mmt.com.au/articles/everki/161125-bikemessenger/img/thelaptop.jpg" width="274" height="196" border="0" alt="Bike Messsenger"></td>
          <td  style="font-family:Arial, Helvetica, sans-serif ; font-size:13px ; color:#363636 ; font-style:normal ; line-height:18px"><font style="font-family:Arial, Helvetica, sans-serif ; font-size:17px ; font-weight:bold ; color:#a7a7a7; font-family:Helvetica,neue, Open sans, sans-serif">The Laptop Bike Messenger</font><br>
            <br>
            The Laptop Bike Messenger from EVERKI has a stylish, metropolitan flair and is perfect for carrying multiple 
devices. The cross-body design gives complete hands-free capability. Along with multi-functioning side pockets that accommodate 
a water bottle &amp; keys along with a quick-access pocket and a large main compartment. </td>
        </tr>
      </table></td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="570" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td style="font-family:Arial, Helvetica, sans-serif ; font-size:13px ; color:#363636 ; font-style:normal ; line-height:18px"><font style="font-family:Arial, Helvetica, sans-serif ; font-size:17px ; font-weight:bold ; color:#a7a7a7; font-family:Helvetica,neue, Open sans, sans-serif">Dedicated pockets for laptop and tablet</font><br>
            <br>
            The Laptop Bike Messenger is designed with functionality in mind. The bag offers an individual pocket for 
a laptop, as well as a dedicated slot for today’s larger tablets. The laptop pocket is padded on the bottom, 
front and back to safely secure your device from bumps and knocks – and the tablet pocket is also padded to 
prevent scratches. <br>
          <br></td>
            <td width="350"><img src="http://www.mmt.com.au/articles/everki/161125-bikemessenger/img/pockets.jpg" width="309" height="195" border="0" align="right" alt="Dedicated Pockets"></td>
        </tr>
      </table></td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="570" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td width="350"><img src="http://www.mmt.com.au/articles/everki/161125-bikemessenger/img/personalise.jpg" width="223" height="223" border="0" alt="Personalizable window"></td>
          <td style="font-family:Arial, Helvetica, sans-serif ; font-size:13px ; color:#363636; padding-left:10px ; font-style:normal ; line-height:18px"><font style="font-family:Arial, Helvetica, sans-serif ; font-size:17px ; font-weight:bold ; color:#a7a7a7; font-family:Helvetica,neue, Open sans, sans-serif">Personalizable window</font><br>
            <br>
            Like every bag in the ContemPRO series, the Laptop Bike Messenger 
has a personalizable window on the front of the bag that can be customized. The bag comes with a set 
of images to choose from, however still giving the option to design your own.<br>
            <br>
          <br></td>
        </tr>
      </table></td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="570" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td style="font-family:Arial, Helvetica, sans-serif ; font-size:13px ; color:#363636 ; font-style:normal ; line-height:18px"><font style="font-family:Arial, Helvetica, sans-serif ; font-size:17px ; font-weight:bold ; color:#a7a7a7; font-family:Helvetica,neue, Open sans, sans-serif">Loops and strips for safety and security</font><br>
            <br>
            Designed with a place on the Laptop Bike Messenger to 
conveniently hang a U-lock for easy storage, the bag allows to seperatly secure a lock so no harm can be done in the main compartment.  There’s also a light holder 
on the bottom of the bag for night time riding, along with a reflective strips on the front flap and straps for 
improved visibility when riding at night.<br>
          <br></td>
            <td width="350"><img src="http://www.mmt.com.au/articles/everki/161125-bikemessenger/img/loops.jpg" align="right" width="240" height="240" border="0" alt="loops"></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td align="center"><img src="http://www.mmt.com.au/articles/seagate/130725-nas-hdd/img/underline-gray.gif" width="580" height="5" border="0" alt="separator line"></td>
  </tr>
  <tr>
    <td><table width="570" border="0" cellspacing="0" cellpadding="0" align="center">
        
          <td width="221"><table width="188" border="0" cellspacing="0" cellpadding="0" align="center">
              <tr valign="middle">
                <td><img src="http://www.mmt.com.au/articles/everki/150709-venuebag/img/Warranty.jpg" width="188" height="170" border="0" alt="Lifetime Warranty"></td>
              </tr>
            </table></td>
          <td width="303" style="font-family:Arial, Helvetica, sans-serif ; font-size:13px ; color:#000000 ; font-style:normal ; line-height:18px"><font style="font-family:Arial, Helvetica, sans-serif ; font-size:17px ; font-weight:bold ; color:#000000">Everki Limited Lifetime Warranty</font><br>
            <br>
            <font style="color:#666666">Everki warrants, to the original owner, its products against defect in material or workmanship. Everki will repair or replace a defective product free of charge. If the product is no longer available, Everki reserves the right to replace it with a similar product of equal value.<br>
            <br>
            </font></td>
        </tr>
      </table></td>
  </tr>
  
  <tr>
    <td align="center"><img src="http://www.mmt.com.au/articles/seagate/130725-nas-hdd/img/underline-gray.gif" width="580" height="5" border="0" alt="separator line"></td>
  </tr>
  
  <tr>
    <td><table width="570" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td style="text-align:center;"><font style="font-family:Arial, Helvetica, sans-serif ; font-size:17px ;text-align:center; font-weight:bold ; color:#a7a7a7; font-family:Helvetica,neue, Open sans, sans-serif"><img src="http://www.mmt.com.au/articles/everki/161125-bikemessenger/img/crossbody.jpg" alt="stabilizing" width="153" height="112"><br>
          Stabilizing <br>
          cross-body strap</font></td>
            <td style="text-align:center;"><font style="font-family:Arial, Helvetica, sans-serif ;text-align:center; font-size:17px ; font-weight:bold ; color:#a7a7a7; font-family:Helvetica,neue, Open sans, sans-serif"><img src="http://www.mmt.com.au/articles/everki/161125-bikemessenger/img/trollypass.jpg" alt="trolloy handle" width="153" height="112"><br>Trolley handle pass-through</font></td>
          <td style="text-align:center;"><font style="font-family:Arial, Helvetica, sans-serif ;text-align:center; font-size:17px ; font-weight:bold ; color:#a7a7a7; font-family:Helvetica,neue, Open sans, sans-serif"><img src="http://www.mmt.com.au/articles/everki/161125-bikemessenger/img/carryhandle.jpg" alt="padded handle" width="153" height="112"><br>
          Padded <br>
          carry handle </font></td>
            <td style="text-align:center;"><font style="font-family:Arial, Helvetica, sans-serif ;text-align:center; font-size:17px ; font-weight:bold ; color:#a7a7a7; font-family:Helvetica,neue, Open sans, sans-serif"><img src="http://www.mmt.com.au/articles/everki/161125-bikemessenger/img/highcontrast.jpg" alt="high contrast lining" width="153" height="112"><br>
          High-contrast lining </font></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td style="padding-top:20px"><table width="570" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr valign="middle">
          <td><a href="https://www.youtube.com/watch?v=hzNlnaxlMVk"><img src="http://www.mmt.com.au/articles/everki/161125-bikemessenger/img/vid.jpg" width="649" height="283" border="0" alt="Contempro Video"></a></td>
        </tr>
        <tr height="10">
          <td colspan="2"></td>
        </tr>
        <tr height="5">
          <td align="center"><img src="http://www.mmt.com.au/articles/seagate/130725-nas-hdd/img/underline-gray.gif" width="580" height="5" border="0" alt="separator line"></td>
        </tr>
        <tr height="10">
          <td></td>
        </tr>
        <tr>
          <td><table width="580" border="0" cellspacing="0" cellpadding="0" align="center">
              <tr height="70" valign="middle">
                <td><img src="http://www.mmt.com.au/articles/everki/150709-venuebag/img/ask-mm.jpg" width="650" height="43" border="0" alt="Ask Multimedia"></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
</table>
    <table width="600" border="0" cellpadding="0" cellspacing="0" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;	color: #747682;	text-align: left; margin:0 auto">
      <tr>
        <td width="500">
          <div align="center" style="font-family: Arial, Helvetica, sans-serif;
            font-size: 10px;
            font-style: normal;
            font-weight: normal;
            color: #747682;">
            Please note that all pricing quoted is EXCLUDING GST.<br>
            All care has been taken to ensure the accuracy of the information provided within.<br>
            Errors and omissions excepted.
          </div>
        </td>
        
      </tr>
    </table><br />
<br />

    <map name="Map">
        <area shape="circle" coords="46,19,17" href="http://www.facebook.com/AskMultimedia" alt="Join Us on Facebook">
        <area shape="circle" coords="86,19,17" href="https://twitter.com/AskMultimedia" alt="Twitter">
        <area shape="circle" coords="128,19,17" href="http://www.youtube.com/user/mmtcomau" alt="YouTube">
    </map>
</div>
<?php
$page->createFooter($user->isAuthenticated());
?>