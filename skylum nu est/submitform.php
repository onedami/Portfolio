<?php if($_REQUEST['need']=="contact")
		{
		$surname=$_POST['surname'];
		$surname=strtoupper($surname);
		$firstname=$_POST['firstname'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
/*		$requesttype=$_POST['requesttype'];
		$requesttype=strtoupper($requesttype);
		$message="<H1><B>$requesttype</B></H1> </br> Name: $surname , $firstname </br> Email: $email </br> Phone: $phone </br>".$_POST['message'];	
		mail("info@skylumng.com",$requesttype,$message);
		$status="success";
		$messagesent=$message;
		$message="Your message was Successfully sent as Follows: </br> $messagesent";*/
		}

?>


<html>
<head>
<title>newskylum</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-color: #EAEAEA;
	background-image: url(images/newskylum_02.gif);
	background-repeat: repeat-x;
}
#Table_01 .style3 {
	background-image: url(images/ruler_vert_top.gif);
	background-repeat: repeat-y;
}
.cellcss {
	padding: 10px;
	border: 0.12em dashed #66CCFF;
	line-height: 20px;
}
-->
	
</style>

<style type="text/css">
		body { background-color: #EAEAEA; padding: 0 25px; color:#fff; font: 13px/18px Arial, sans-serif; }
		a { color: #360; }
		h3 { padding-top: 0px; }
		ol { margin:5px 0 15px 16px; padding:0; list-style-type:square; }
	.style1 {color: #666666}
body,td,th {
	color: #333333;
}
.style2 {font-size: 9px}
.style3 {
	font-size: 12px;
	color: #666666;
}
.style15 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.buttoncss {	background-color: #FFFFCE;
	border: 1px solid #3399CC;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #29527A;
	height: 25px;
	font-weight: bold;
	cursor: hand;
}
.legendcss {	background-color: #FF9966;
	padding: 5px;
	border: 1px solid #102840;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-style: normal;
	color: #FFFFFF;
}
.tablecss {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #000000;
}
.textareacss {	background-color: #FFFFCE;
	border: 1px solid #3399CC;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #336699;
	height: 36px;
}
.textboxcss {	background-color: #FFFFCE;
	border: 1px solid #3399CC;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #336699;
	height: 18px;
}
.style40 {
	color: #FF0000;
	font-size: 12px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style105 {
	color: #339900;
	font-size: 12px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
</style>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- ImageReady Slices (newskylum.psd) -->
<table width="844" height="876" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
	<tr>
		<td height="114" colspan="3">
			<img src="images/newskylum_03.gif" width="855" height="114" alt=""></td>
	</tr>
	<tr>
		<td height="66" colspan="3"><img src="images/contact-us_03.gif" alt="" width="855" height="66" border="0" usemap="#Map"></td>
	</tr>
	<tr>
	  <td height="73" colspan="3" bgcolor="#EAEAEA"><p>
	<div id="container"><a href="http://www.macromedia.com/go/getflashplayer">Get the Flash Player</a> to see this rotator.</div>
	<script type="text/javascript" src="rotator/swfobject.js"></script>
	<script type="text/javascript">
		var s1 = new SWFObject("rotator/imagerotator.swf","rotator","855","200","7");
		s1.addParam("allowfullscreen","false");
		s1.addVariable("file","rotator/madrid.xml");
		s1.addVariable("width","858");
		s1.addVariable("height","200");
		s1.addVariable("screencolor","0xEAEAEA");
		s1.addVariable('backcolor', "0xEAEAEA"); 
		s1.addParam("wmode","transparent");
		s1.write("container");
	</script>		</td>
	</tr>
	<tr>
	  <td height="15" colspan="3" bgcolor="#FFFFFF"><img src="images/newskylum_08 - Copy.gif" width="855" height="15"></td>
  </tr>
	<tr>
	  <td width="9" height="237" background="images/ruler_vert_top.gif"  bgcolor="#FFFFFF"><p class="style3">&nbsp;</p>
	    <p class="style1">&nbsp;</p>
	    <p class="style1">&nbsp;</p>
      <p class="style1">&nbsp;</p>
      <p class="style1">&nbsp;</p>
      <p class="style1">&nbsp;</p>
      <p>&nbsp;</p></td>
      <td width="842" colspan="2" valign="top"  bgcolor="#F9F9F9"><?php if(isset($status)){ ?>
        <table width="483" border="0" align="center" bgcolor="#FFFFFF">
          <tr>
            <td width="395"><div align="center" class="<?php  if ($status=="success")echo "style105";
										  else echo "style40";?>" >
                <?php if ($status!=""){ ?>
              </div>
                <div align="center" class="<?php  if ($status=="success")echo "style105";
										  else echo "style40";?>" > &nbsp;
                    <div align="left"><img src="img/<?php echo $status ?>.png" width="15" height="15" align="absmiddle" /> <span> <?php echo $message ?>. </span></div>
                </div>
              <div align="right">
                  <?php }?>
                  <br />
              </div></td>
          </tr>
        </table>
        <?php } ?></td>
    </tr>
	
	<tr>
		<td height="15" colspan="3">
			<img src="images/newskylum_08.gif" width="855" height="15" alt=""></td>
	</tr>
	<tr>
		<td height="28" colspan="3"><div align="right" class="style2">Copyright @ 2010 site designed by Damilare -onedami@yahoo.com</div></td>
	</tr>
</table>
<!-- End ImageReady Slices -->
<map name="Map">
<area shape="rect" coords="2,3,138,34" href="index.html">
<area shape="rect" coords="145,3,284,34" href="aboutus.html">
<area shape="rect" coords="287,4,423,33" href="services.html">
<area shape="rect" coords="431,3,568,33" href="products.html">
<area shape="rect" coords="574,4,711,34" href="projects.html">
<area shape="rect" coords="718,3,850,33" href="contactus.html">

<map name="Map"><area shape="rect" coords="4,3,139,34" href="index.html">
<area shape="rect" coords="145,3,282,33" href="aboutus.html">
<area shape="rect" coords="288,3,424,33" href="services.html">
<area shape="rect" coords="429,3,566,33" href="products.html">
<area shape="rect" coords="716,-2,852,34" href="contactus.html">
</map></body>
</html>
