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
<link href="Portfolio.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="wwb14.min.js"></script>
<script>
$(document).ready(function()
{
   $('#wb_Team1').addClass('visibility-hidden');
   $('#wb_Team2').addClass('visibility-hidden');
   $('#wb_Team3').addClass('visibility-hidden');
   $('#wb_Name1').addClass('visibility-hidden');
   $('#wb_Name2').addClass('visibility-hidden');
   $('#wb_Name3').addClass('visibility-hidden');
   function Team1Scroll()
   {
      var $obj = $("#wb_Team1");
      if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
      {
         $obj.addClass("in-viewport");
         AnimateCss('wb_Team1', 'transform-spring', 100, 1000);
      }
      else
      if ($obj.hasClass("in-viewport") && !$obj.inViewPort(true))
      {
         $obj.removeClass("in-viewport");
         AnimateCss('wb_Team1', 'animate-fade-out', 0, 0);
      }
   }
   if (!$('#wb_Team1').inViewPort(true))
   {
      $('#wb_Team1').addClass("in-viewport");
   }
   Team1Scroll();
   $(window).scroll(function(event)
   {
      Team1Scroll();
   });
   function Team2Scroll()
   {
      var $obj = $("#wb_Team2");
      if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
      {
         $obj.addClass("in-viewport");
         AnimateCss('wb_Team2', 'transform-spring', 100, 1000);
      }
      else
      if ($obj.hasClass("in-viewport") && !$obj.inViewPort(true))
      {
         $obj.removeClass("in-viewport");
         AnimateCss('wb_Team2', 'animate-fade-out', 0, 0);
      }
   }
   if (!$('#wb_Team2').inViewPort(true))
   {
      $('#wb_Team2').addClass("in-viewport");
   }
   Team2Scroll();
   $(window).scroll(function(event)
   {
      Team2Scroll();
   });
   function Team3Scroll()
   {
      var $obj = $("#wb_Team3");
      if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
      {
         $obj.addClass("in-viewport");
         AnimateCss('wb_Team3', 'transform-spring', 100, 1000);
      }
      else
      if ($obj.hasClass("in-viewport") && !$obj.inViewPort(true))
      {
         $obj.removeClass("in-viewport");
         AnimateCss('wb_Team3', 'animate-fade-out', 0, 0);
      }
   }
   if (!$('#wb_Team3').inViewPort(true))
   {
      $('#wb_Team3').addClass("in-viewport");
   }
   Team3Scroll();
   $(window).scroll(function(event)
   {
      Team3Scroll();
   });
   function Name1Scroll()
   {
      var $obj = $("#wb_Name1");
      if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
      {
         $obj.addClass("in-viewport");
         AnimateCss('wb_Name1', 'transform-scale-in', 100, 1000);
      }
      else
      if ($obj.hasClass("in-viewport") && !$obj.inViewPort(true))
      {
         $obj.removeClass("in-viewport");
         AnimateCss('wb_Name1', 'animate-fade-out', 0, 0);
      }
   }
   if (!$('#wb_Name1').inViewPort(true))
   {
      $('#wb_Name1').addClass("in-viewport");
   }
   Name1Scroll();
   $(window).scroll(function(event)
   {
      Name1Scroll();
   });
   function Name2Scroll()
   {
      var $obj = $("#wb_Name2");
      if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
      {
         $obj.addClass("in-viewport");
         AnimateCss('wb_Name2', 'transform-scale-in', 100, 1000);
      }
      else
      if ($obj.hasClass("in-viewport") && !$obj.inViewPort(true))
      {
         $obj.removeClass("in-viewport");
         AnimateCss('wb_Name2', 'animate-fade-out', 0, 0);
      }
   }
   if (!$('#wb_Name2').inViewPort(true))
   {
      $('#wb_Name2').addClass("in-viewport");
   }
   Name2Scroll();
   $(window).scroll(function(event)
   {
      Name2Scroll();
   });
   function Name3Scroll()
   {
      var $obj = $("#wb_Name3");
      if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
      {
         $obj.addClass("in-viewport");
         AnimateCss('wb_Name3', 'transform-scale-in', 100, 1000);
      }
      else
      if ($obj.hasClass("in-viewport") && !$obj.inViewPort(true))
      {
         $obj.removeClass("in-viewport");
         AnimateCss('wb_Name3', 'animate-fade-out', 0, 0);
      }
   }
   if (!$('#wb_Name3').inViewPort(true))
   {
      $('#wb_Name3').addClass("in-viewport");
   }
   Name3Scroll();
   $(window).scroll(function(event)
   {
      Name3Scroll();
   });
});
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
<div id="wb_LayoutGrid3">
<div id="LayoutGrid3">
<div class="row">
<div class="col-1">
<div id="wb_Text2">
<span style="color:#FFFFFF;font-family:'Trebuchet MS';font-size:24px;"><strong>MEET THE TEAM<br></strong></span><span style="color:#FFFFFF;font-family:'Trebuchet MS';font-size:15px;">Lorem ipsum dolor sit amet, consectetur.</span>
</div>
</div>
</div>
</div>
</div>
<div id="wb_team_grid">
<div id="team_grid">
<div class="row">
<div class="col-1">
<div id="wb_Team1" style="display:inline-block;width:56px;height:56px;text-align:center;z-index:3;">
<a href="#top" title="Top"><div id="Team1"><i class="fa fa-user-o"></i></div></a>
</div>
<div id="wb_Name1" style="display:inline-block;width:100%;z-index:4;">
<h3 id="Name1">Susan</h3>
</div>
<div id="wb_Text8">
<span style="color:#FFFFFF;font-family:'Trebuchet MS';font-size:13px;">Design</span>
</div>
<div id="wb_FontAwesomeIcon5" style="display:inline-block;width:16px;height:16px;text-align:center;z-index:6;">
<a href="./index.php"><div id="FontAwesomeIcon5"><i class="fa fa-twitter"></i></div></a>
</div>
<div id="wb_FontAwesomeIcon12" style="display:inline-block;width:16px;height:16px;text-align:center;z-index:7;">
<a href="./index.php"><div id="FontAwesomeIcon12"><i class="fa fa-facebook"></i></div></a>
</div>
<div id="wb_FontAwesomeIcon15" style="display:inline-block;width:16px;height:16px;text-align:center;z-index:8;">
<a href="./index.php"><div id="FontAwesomeIcon15"><i class="fa fa-linkedin"></i></div></a>
</div>
</div>
<div class="col-2">
<div id="wb_Team2" style="display:inline-block;width:56px;height:56px;text-align:center;z-index:9;">
<a href="#top" title="Top"><div id="Team2"><i class="fa fa-user-secret"></i></div></a>
</div>
<div id="wb_Name2" style="display:inline-block;width:100%;z-index:10;">
<h3 id="Name2">Jeremy</h3>
</div>
<div id="wb_Text10">
<span style="color:#FFFFFF;font-family:'Trebuchet MS';font-size:13px;">Programming</span>
</div>
<div id="wb_FontAwesomeIcon9" style="display:inline-block;width:16px;height:16px;text-align:center;z-index:12;">
<a href="./index.php"><div id="FontAwesomeIcon9"><i class="fa fa-twitter"></i></div></a>
</div>
<div id="wb_FontAwesomeIcon13" style="display:inline-block;width:16px;height:16px;text-align:center;z-index:13;">
<a href="./index.php"><div id="FontAwesomeIcon13"><i class="fa fa-facebook"></i></div></a>
</div>
<div id="wb_FontAwesomeIcon16" style="display:inline-block;width:16px;height:16px;text-align:center;z-index:14;">
<a href="./index.php"><div id="FontAwesomeIcon16"><i class="fa fa-linkedin"></i></div></a>
</div>
</div>
<div class="col-3">
<div id="wb_Team3" style="display:inline-block;width:56px;height:56px;text-align:center;z-index:15;">
<a href="#top" title="Top"><div id="Team3"><i class="fa fa-user"></i></div></a>
</div>
<div id="wb_Name3" style="display:inline-block;width:100%;z-index:16;">
<h3 id="Name3">Bob</h3>
</div>
<div id="wb_Text11">
<span style="color:#FFFFFF;font-family:'Trebuchet MS';font-size:13px;">Marketing</span>
</div>
<div id="wb_FontAwesomeIcon11" style="display:inline-block;width:16px;height:16px;text-align:center;z-index:18;">
<a href="./index.php"><div id="FontAwesomeIcon11"><i class="fa fa-twitter"></i></div></a>
</div>
<div id="wb_FontAwesomeIcon14" style="display:inline-block;width:16px;height:16px;text-align:center;z-index:19;">
<a href="./index.php"><div id="FontAwesomeIcon14"><i class="fa fa-facebook"></i></div></a>
</div>
<div id="wb_FontAwesomeIcon17" style="display:inline-block;width:16px;height:16px;text-align:center;z-index:20;">
<a href="./index.php"><div id="FontAwesomeIcon17"><i class="fa fa-linkedin"></i></div></a>
</div>
</div>
</div>
</div>
</div>
<form name="FlexContainer1" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="FlexContainer1">
</form>
<div id="wb_LayoutGrid2">
<div id="LayoutGrid2">
<div class="row">
<div class="col-1">
<div id="wb_Heading10" style="display:inline-block;width:100%;z-index:21;">
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
<div id="wb_CssMenu3" style="display:inline-block;width:100%;z-index:24;">
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
<div id="wb_CssMenu2" style="display:inline-block;width:100%;z-index:26;">
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
<div id="wb_Shape1" style="display:inline-block;width:100px;height:39px;z-index:28;position:relative;">
<a href="./Donat.php"><img src="images/img0010.png" id="Shape1" alt="" style="width:100px;height:39px;"></a>
</div>
</div>
</div>
</div>
</div>
</body>
</html>