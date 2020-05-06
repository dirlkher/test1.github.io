<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta charset="utf-8">
<title>Dir Lkher</title>
<meta name="description" content="dir lkher web">
<meta name="keywords" content="dir lkher">
<meta name="author" content="badre">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="1 day">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="lkher2.css" rel="stylesheet">
<link href="donor.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script>
var maps;
var geocoder;

function init() 
{
   maps = [];
   geocoder = new google.maps.Geocoder();

   var styles = 
   {
      'Normal': [
	  {
         featureType: 'all',
         stylers: [{saturation:0}]
      }]
   };

   for (var s in styles) 
   {
      var opt = {
	      mapTypeControlOptions: {
		  mapTypeIds: [s]
	     },
         disableDefaultUI: false,
         navigationControl: true,
         scrollwheel: false,
         center: new google.maps.LatLng(40.770401, -73.9735114),
         zoom: 8,
         mapTypeId: s
      };
      var div = document.getElementById('wb_maps');
      var map = new google.maps.Map(div, opt);
      var styledMapType = new google.maps.StyledMapType(styles[s], {name: s});
      map.mapTypes.set(s, styledMapType);
   }
}
init();
</script>		
</head>
<body>
<div id="wb_LayoutGrid1">
<div id="LayoutGrid1">
<div class="row">
<div class="col-1">
<div id="wb_Breadcrumb2" style="display:inline-block;width:100%;z-index:0;vertical-align:top;">
<ul id="Breadcrumb2">
<li><a href="./index.php"><i class="fa fa-puzzle-piece">&nbsp;</i> LOGO</a></li>
</ul>

</div>
</div>
<div class="col-2">
</div>
<div class="col-3">
<div id="wb_Breadcrumb3" style="display:inline-block;width:100%;z-index:1;vertical-align:top;">
<ul id="Breadcrumb3">
<li><a href="./login.php"><i class="fa fa-address-card-o">&nbsp;</i>&nbsp; Login &amp; sign in</a></li>
</ul>

</div>
</div>
</div>
</div>
</div>
<div id="Divider4">
</div>
<form name="FlexContainer1" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="FlexContainer1">
<div id="Html2" style="display:inline-block;width:100px;height:100px;z-index:2">
</div>
</form>
<div id="wb_LayoutGrid3">
<div id="LayoutGrid3">
<div class="row">
<div class="col-1">
<div id="wb_ThreeColumns">
<div id="ThreeColumns-overlay"></div>
<div id="ThreeColumns">
<div class="row">
<div class="col-1">
</div>
<div class="col-2">
<table style="display:table;width:100%;height:282px;z-index:3;" id="StripedTable">
<tr>
<th class="cell0"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;"><strong>Rank</strong></span></th>
<th class="cell0"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;"><strong>Name</strong></span></th>
<th class="cell0"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;"><strong>Year</strong></span></th>
<th class="cell0"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;"><strong>Rating</strong></span></th>
<th class="cell0"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;"><strong>Votes</strong></span></th>
</tr>
<tr>
<td class="cell1"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;">1</span></td>
<td class="cell1"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;">Lorem ipsum</span></td>
<td class="cell1"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;">1977</span></td>
<td class="cell1"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;">8.8</span></td>
<td class="cell1"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;">777,100</span></td>
</tr>
<tr>
<td class="cell1"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;">2</span></td>
<td class="cell1"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;">Integer nec odio</span></td>
<td class="cell1"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;">1978</span></td>
<td class="cell1"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;">7.4</span></td>
<td class="cell1"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;">888,800</span></td>
</tr>
<tr>
<td class="cell1"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;">3</span></td>
<td class="cell1"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;">Praesent libero</span></td>
<td class="cell1"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;">1983</span></td>
<td class="cell1"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;">7.5</span></td>
<td class="cell1"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;">425,250</span></td>
</tr>
<tr>
<td class="cell1"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;">4</span></td>
<td class="cell1"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;">Duis sagittis ipsum</span></td>
<td class="cell1"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;">1986</span></td>
<td class="cell1"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;">8.5</span></td>
<td class="cell1"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;">515,500</span></td>
</tr>
<tr>
<td class="cell1"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;">5</span></td>
<td class="cell1"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;">Praesent mauris</span></td>
<td class="cell1"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;">1992</span></td>
<td class="cell1"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;">7.8</span></td>
<td class="cell1"><span style="color:#34495E;font-family:Arial;font-size:13px;line-height:16px;">750,125</span></td>
</tr>
</table>
<div id="wb_Pagination1" style="display:inline-block;width:349px;height:92px;z-index:4;">
<ul id="Pagination1">
<li><a href="./merchant.php">&laquo; Prev</a></li>
<li><a href="">1</a></li>
<li><a href="">2</a></li>
<li><a href="">3</a></li>
<li><a href="">4</a></li>
<li><a href="./About_Us.php">Next &raquo;</a></li>
</ul>

</div>
</div>
<div class="col-3">
</div>
</div>
</div>
</div>
</div>
<div class="col-2">
<div id="wb_maps_grid">
<div id="maps_grid">
<div class="row">
<div class="col-1">
</div>
<div class="col-2">
<div id="wb_maps">
&nbsp;
</div>
</div>
<div class="col-3">

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid2">
<div id="LayoutGrid2">
<div class="row">
<div class="col-1">
<div id="wb_Heading10" style="display:inline-block;width:100%;z-index:11;">
<h1 id="Heading10">Dir lkher </h1>
</div>
<div id="wb_Text1">
<span style="color:#FFFFFF;">The ultimate happy world</span>
</div>
</div>
<div class="col-2">
<div id="wb_Text7">
<span style="color:#FFFFFF;"><strong>Information</strong></span>
</div>
<div id="wb_CssMenu3" style="display:inline-block;width:100%;z-index:14;">
<ul role="menubar">
<li class="firstmain"><a role="menuitem" href="./About_Us.php" target="_self">About&nbsp;Us</a>
</li>
<li><a role="menuitem" href="./Services.php" target="_self">Services</a>
</li>
<li><a role="menuitem" href="./Portfolio.php" target="_self">Portfolio</a>
</li>
<li><a role="menuitem" href="./Contact.php" target="_self">Contact</a>
</li>
</ul>

</div>
</div>
<div class="col-3">
<div id="wb_Text3">
<span style="color:#FFFFFF;"><strong>Legal </strong></span>
</div>
<div id="wb_CssMenu2" style="display:inline-block;width:100%;z-index:16;">
<ul role="menubar">
<li class="firstmain"><a role="menuitem" href="#" target="_self">Privacy&nbsp;Policy</a>
</li>
<li><a role="menuitem" href="#" target="_self">Terms&nbsp;&amp;&nbsp;Conditions</a>
</li>
<li><a role="menuitem" href="#" target="_self">Cookie&nbsp;Policy</a>
</li>
</ul>

</div>
</div>
<div class="col-4">
<div id="wb_Text4">
<span style="color:#FFFFFF;"><strong>Support</strong></span>
</div>
<div id="wb_Shape1" style="display:inline-block;width:100px;height:39px;z-index:18;position:relative;">
<a href="./Donat.php"><img src="images/img0005.png" id="Shape1" alt="" style="width:100px;height:39px;"></a>
</div>
</div>
</div>
</div>
</div>
</body>
</html>