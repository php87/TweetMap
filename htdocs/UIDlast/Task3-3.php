<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/temp1.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- InstanceEndEditable -->
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background: #42413C;
	margin: 0;
	padding: 0;
	color: #000;
}

/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
	padding-right: 15px;
	padding-left: 15px; /* adding the padding to the sides of the elements within the divs, instead of the divs themselves, gets rid of any box model math. A nested div with side padding can also be used as an alternate method. */
}
a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
	border: none;
}
/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
	color: #42413C;
	text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #6E6C64;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: none;
}

/* ~~ this fixed width container surrounds the other divs ~~ */
.container {
	width: 960px;
	background: #FFF;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout */
}

/* ~~ the header is not given a width. It will extend the full width of your layout. It contains an image placeholder that should be replaced with your own linked logo ~~ */
.header {
	background: #ADB96E;
}

/* ~~ This is the layout information. ~~ 

1) Padding is only placed on the top and/or bottom of the div. The elements within this div have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

*/

.content {

	padding: 10px 0;
}

/* ~~ The footer ~~ */
.footer {
	padding: 10px 0;
	background: #CCC49F;
}

/* ~~ miscellaneous float/clear classes ~~ */
.fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the #container) if the #footer is removed or taken out of the #container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
-->
</style>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div class="container">
  <div class="header">
    <table width="957" border="0">
      <tr>
        <td width="391"><a href="#"><img src="images/mtnl_logo.png" alt="Insert Logo Here" name="Insert_logo" width="391" height="66" id="Insert_logo" style="background: #C6D580; display:block;" /></a></td>
        <td width="248">&nbsp;</td>
        <td width="304"><table width="298" border="1">
          <tr>
            <td><p><font size="2">Welcome Sita, You last logged in on 5th Dec 2011</font>  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
             &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;
              <input type="submit" name="logout" id="logout" value="Log out" />
            </p>
              </td>
          </tr>
        </table></td>
      </tr>
    </table>
  
  <!-- end .header --></div>
  <div class="content">
    <div id="TabbedPanels1" class="TabbedPanels">
      <ul class="TabbedPanelsTabGroup">
        <li class="TabbedPanelsTab" tabindex="0">My Account</li>
        <li class="TabbedPanelsTab" tabindex="0">Individual</li>
        <li class="TabbedPanelsTab" tabindex="0">Business</li>
      </ul>
      <div class="TabbedPanelsContentGroup">
        <div class="TabbedPanelsContent">
          <div id="TabbedPanels2" class="TabbedPanels">
            <ul class="TabbedPanelsTabGroup">
              <li class="TabbedPanelsTab" tabindex="0"><a href="Task1-Account summary.php" target="_self">Account Summary</a></li>
              <li class="TabbedPanelsTab" tabindex="0"> Account Usage</li>
              <li class="TabbedPanelsTab" tabindex="0">Pay Your Bills</li>
              <li class="TabbedPanelsTab" tabindex="0">Billig History</li>
              <li class="TabbedPanelsTab" tabindex="0">Services</li>
              <li class="TabbedPanelsTab" tabindex="0">Profile</li>
            </ul>
            <div class="TabbedPanelsContentGroup">
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="ASEdit" -->
                <p>Makes Changes in the ASEdit Blue coloured box ( this is editable region ) </p>
              <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="AUEdit" -->
                <div id="breadcrumbs"> <a href="#">Home</a> &gt; <a href="#">Individual</a> &gt; <a href="#">Mobile</a> &gt; <a href="#">3G </a>&gt;Prepaid</div>
                <table width="915" border="0" style="font:x-small">
                  <tr>
                    <td width="230" height="290"><table width="164" border="0" style="font:x-small; font-size: 12px;">
                      <tr>
                        <td width="158"><u><b>3G</b></u></td>
                      </tr>
                      <tr>
                        <td><i>Prepaid</i></td>
                      </tr>
                      <tr>
                        <td><table width="200" border="1">
  <tr>
    <td>Trump common 3G</td>
  </tr>
  <tr>
    <td>Trump vidyarthi 3G</td>
  </tr>
</table>
&nbsp;</td>
                      </tr>
                      <tr>
                        <td><i>Postpaid</i></td>
                      </tr>
                      <tr>
                        <td><table width="200" border="1">
                          <tr>
                            <td>Pay per sec</td>
                          </tr>
                          <tr>
                            <td>One India</td>
                          </tr>
                          <tr>
                            <td>Super Freedom</td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                    </table></td>
                    <td width="454"><table width="392" style="font:x-small">
                      <tr>
                        <td width="380"><h3>Trump common 3G</h3></td>
                       
                      </tr>
                      <tr>
                        <td height="209"><table width="378" rules="cols" frame="box" style="font:x-small; font-size: 12px;"\>
                          <tr>
                            <td width="202">SIM Name</td>
                            <td width="164">Trump Prepaid Starter</td>
                          </tr>
                          <tr>
                            <td>Local call charges</td>
                            <td>Rs. 1 per min</td>
                          </tr>
                          <tr>
                            <td>STD call charges</td>
                            <td>Rs. 1.25 per min</td>
                          </tr>
                          <tr>
                            <td>Data usage charges</td>
                            <td>Rs. 0.01/20 KB</td>
                          </tr>
                          <tr>
                            <td height="40">SMS Charges</td>
                            <td>Local Rs. 0.5 , ISD Rs. 4.5</td>
                          </tr>
                        </table></td>
                      
                      </tr>
                    </table></td>
                    <td width="217"><table width="217" border="1">
                      <tr>
                        <td width="207" height="88">&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="108"><label></label>&nbsp;<label style="font:small"><b>Quick Links</b></label><br><input name="" type="button" value="Instant Pay" /><br><input name="" type="button" value="Recharge Online" /></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="51">&nbsp;</td>
                    <td><input type="submit" name="button" id="button" value="Back to smart search" style="float:left" />                      <input type="submit" name="button2" id="button2" value="Apply" style="float:right"/></td>
                    <td>&nbsp;</td>
                  </tr>
                </table> 
                <p>&nbsp;</p>
                <p>&nbsp; </p>
              <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="BPEdit" -->Makes Changes in the BPEdit Blue coloured box ( this is editable region ) <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="BHEdit" -->Makes Changes in the BHEdit Blue coloured box ( this is editable region ) <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="SerEdit" -->Makes Changes in the SerEdit Blue coloured box ( this is editable region ) <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="ProEdit" -->Makes Changes in the ProEdit Blue coloured box ( this is editable region ) <!-- InstanceEndEditable --></div>
            </div>
          </div>
        </div>
        <div class="TabbedPanelsContent">
          <div id="TabbedPanels3" class="TabbedPanels">
            <ul class="TabbedPanelsTabGroup">
              <li class="TabbedPanelsTab" tabindex="0">Mobile</li>
              <li class="TabbedPanelsTab" tabindex="0">Internet</li>
              <li class="TabbedPanelsTab" tabindex="0">Fixed Line</li>
              <li class="TabbedPanelsTab" tabindex="0">RightPlan</li>

            </ul>
            <div class="TabbedPanelsContentGroup">
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="MobEdit" -->Makes Changes in the MobEdit Blue coloured box ( this is editable region ) <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="InterEdit" -->Makes Changes in the InterEdit Blue coloured box ( this is editable region ) <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="FixedEdit" -->Makes Changes in the FixedEdit Blue coloured box ( this is editable region ) <!-- InstanceEndEditable --></div>
               <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="FindPlan" -->Makes Changes in the FixedEdit Blue coloured box ( this is editable region ) <!-- InstanceEndEditable --></div>
            </div>
          </div>
        </div>
        <div class="TabbedPanelsContent"> </div>
      </div>
    </div>
    
  <!-- end .content --></div>
  <div class="footer">
  <table width="958" border="1">
    <tr>
      <td width="221" height="29"> <div align="center">About Us</div></td>
      <td width="272"><div align="center">SiteMap</div></td>
      <td width="248"><div align="center">Careers</div></td>
      <td width="189"><div align="center">Contact Us</div></td>
    </tr>
  </table>
  <!-- end .footer --></div>
  <!-- end .container --></div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2", {defaultTab:0});
var TabbedPanels3 = new Spry.Widget.TabbedPanels("TabbedPanels3");
</script>
</body>
<!-- InstanceEnd --></html>