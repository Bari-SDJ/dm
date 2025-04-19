<?php


$details = $_POST['1_8'];
$details = nl2br($details);

$html = <<< EOF

<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 15">
<link rel=File-List href="">

<style id="G-プライスボード_4297_Styles">
table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";
	padding: 2px;
	}
@page
	{margin:.12in .12in .12in .12in;
	mso-header-margin:.12in;
	mso-footer-margin:.12in;
	mso-page-orientation:landscape;
	mso-horizontal-page-align:center;
	mso-vertical-page-align:center;}
.font5
	{color:black;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"ＭＳ 明朝";
	mso-generic-font-family:auto;
	mso-font-charset:128;}
.font6
	{color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;}
.font7
	{color:red;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;}
tr
	{mso-height-source:auto;
	mso-ruby-visibility:none;}
col
	{mso-width-source:auto;
	mso-ruby-visibility:none;}
br
	{mso-data-placement:same-cell;}
.style0
	{mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	white-space:nowrap;
	mso-rotate:0;
	mso-background-source:auto;
	mso-pattern:auto;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"ＭＳ 明朝";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	border:none;
	mso-protection:locked visible;
	mso-style-name:標準;
	mso-style-id:0;}
td
	{mso-style-parent:style0;
	padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"ＭＳ 明朝";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:locked visible;
	white-space:nowrap;
	mso-rotate:0;}
.xl64
	{mso-style-parent:style0;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl65
	{mso-style-parent:style0;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl66
	{mso-style-parent:style0;
	font-size:75.0pt;
	font-weight:700;
	text-align:center;}
.xl67
	{mso-style-parent:style0;
	font-size:60.0pt;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;}
.xl68
	{mso-style-parent:style0;
	color:black;
	font-weight:700;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
  font-size:12.0pt;
  font-weight:bold;}
.xl69
	{mso-style-parent:style0;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;}
.xl70
	{mso-style-parent:style0;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl71
	{mso-style-parent:style0;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl72
	{mso-style-parent:style0;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl73
	{mso-style-parent:style0;
	vertical-align:top;
	background-color:white;
	mso-pattern:black none;}
.xl74
	{mso-style-parent:style0;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl75
	{mso-style-parent:style0;
	color:white;
	font-weight:700;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl76
	{mso-style-parent:style0;
	color:black;
	font-weight:700;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl77
	{mso-style-parent:style0;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl78
	{mso-style-parent:style0;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl79
	{mso-style-parent:style0;
	font-size:22.0pt;
	font-weight:700;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
  font-size:22.0pt;
  font-weight:bold;}
.xl80
	{mso-style-parent:style0;
	color:white;
	font-size:120.0pt;
	font-weight:700;

	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	text-align:center;
	background-color:red;
	mso-pattern:black none;
  font-weight:bold;
  }
.xl81
	{mso-style-parent:style0;
	font-size:100.0pt;
	font-weight:700;
	text-align:center;
	background-color:red;
	mso-pattern:black none;}
.xl82
	{mso-style-parent:style0;
	font-size:90.0pt;
	font-weight:700;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	border-top:1.0pt dot-dash-slanted #002060;
	border-right:none;
	border-bottom:1.0pt dot-dash-slanted #002060;
	border-left:1.0pt dot-dash-slanted #002060;
	background-color:yellow;
	mso-pattern:black none;
  font-weight:bold;}
.xl83
	{mso-style-parent:style0;
	font-size:90.0pt;
	font-weight:700;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	border-top:1.0pt dot-dash-slanted #002060;
	border-right:none;
	border-bottom:none;
	border-left:none;
	background-color:yellow;
	mso-pattern:black none;}
.xl84
	{mso-style-parent:style0;
	font-size:90.0pt;
	font-weight:700;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt dot-dash-slanted #002060;
	background-color:yellow;
	mso-pattern:black none;}
.xl85
	{mso-style-parent:style0;
	font-size:90.0pt;
	font-weight:700;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	background-color:yellow;
	mso-pattern:black none;}
.xl86
	{mso-style-parent:style0;
	font-size:90.0pt;
	font-weight:700;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt dot-dash-slanted #002060;
	border-left:1.0pt dot-dash-slanted #002060;
	background-color:yellow;
	mso-pattern:black none;}
.xl87
	{mso-style-parent:style0;
	font-size:90.0pt;
	font-weight:700;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt dot-dash-slanted #002060;
	border-left:none;
	background-color:yellow;
	mso-pattern:black none;}
.xl88
	{mso-style-parent:style0;
	font-size:90.0pt;
	font-weight:700;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	mso-number-format:"\#\,\#\#0_ ";
	text-align:center;
	border-top:1.0pt dot-dash-slanted #002060;
	border-right:1.0pt dot-dash-slanted #002060;
	border-bottom:1.0pt dot-dash-slanted #002060;
	border-left:none;
	background-color:yellow;
	mso-pattern:black none;
  font-weight:bold;}
.xl89
	{mso-style-parent:style0;
	font-size:90.0pt;
	font-weight:700;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	mso-number-format:"\#\,\#\#0_ ";
	text-align:center;
	border-top:1.0pt dot-dash-slanted #002060;
	border-right:1.0pt dot-dash-slanted #002060;
	border-bottom:none;
	border-left:none;
	background-color:yellow;
	mso-pattern:black none;}
.xl90
	{mso-style-parent:style0;
	font-size:90.0pt;
	font-weight:700;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	mso-number-format:"\#\,\#\#0_ ";
	text-align:center;
	background-color:yellow;
	mso-pattern:black none;}
.xl91
	{mso-style-parent:style0;
	font-size:90.0pt;
	font-weight:700;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	mso-number-format:"\#\,\#\#0_ ";
	text-align:center;
	border-top:none;
	border-right:1.0pt dot-dash-slanted #002060;
	border-bottom:none;
	border-left:none;
	background-color:yellow;
	mso-pattern:black none;}
.xl92
	{mso-style-parent:style0;
	font-size:90.0pt;
	font-weight:700;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	mso-number-format:"\#\,\#\#0_ ";
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt dot-dash-slanted #002060;
	border-left:none;
	background-color:yellow;
	mso-pattern:black none;}
.xl93
	{mso-style-parent:style0;
	font-size:90.0pt;
	font-weight:700;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	mso-number-format:"\#\,\#\#0_ ";
	text-align:center;
	border-top:none;
	border-right:1.0pt dot-dash-slanted #002060;
	border-bottom:1.0pt dot-dash-slanted #002060;
	border-left:none;
	background-color:yellow;
	mso-pattern:black none;}
.xl94
	{mso-style-parent:style0;
	color:black;
	font-weight:700;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background-color:#F2F2F2;
	mso-pattern:black none;
  font-size:12.0pt;
  font-weight:bold;
  text-align:center;}
.xl95
	{mso-style-parent:style0;
	color:black;
	font-weight:700;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background-color:#F2F2F2;
	mso-pattern:black none;}
.xl96
	{mso-style-parent:style0;
	color:white;
	font-weight:700;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background-color:red;
	mso-pattern:black none;
  font-weight:bold;
  font-size:12.0pt;
  height: 18px;}
.xl97
	{mso-style-parent:style0;
	color:white;
	font-weight:700;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background-color:red;
	mso-pattern:black none;}
.xl98
	{mso-style-parent:style0;
	color:black;
	font-weight:700;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	mso-number-format:"\#\,\#\#0_ ";
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background-color:#F2F2F2;
	mso-pattern:black none;
	  font-size:12.0pt;
  font-weight:bold;
  text-align:center;}
.xl99
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:top;
	background-color:#F2F2F2;
	mso-pattern:black none;
	color:black}
.xl100
	{mso-style-parent:style0;
	font-weight:700;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	font-size:12.0pt;
	font-weight:bold;}
.xl101
	{mso-style-parent:style0;
	font-weight:700;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl102
	{mso-style-parent:style0;
	color:black;
	font-weight:700;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;}
.xl103
	{mso-style-parent:style0;
	color:black;
	font-weight:700;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background-color:#F2F2F2;
	mso-pattern:black none;
  font-size:12.0pt;
  font-weight:bold;}
.xl104
	{mso-style-parent:style0;
	color:black;
	font-weight:700;
	font-family:"Meiryo UI";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background-color:#F2F2F2;
	mso-pattern:black none;}
ruby
	{ruby-align:left;}
rt
	{color:black;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"ＭＳ 明朝";
	mso-generic-font-family:auto;
	mso-font-charset:128;
	mso-char-type:katakana;
	display:none;}

</style>

</head>

<body link="#0563C1" vlink="#954F72">



<table border=0 cellpadding=0 cellspacing=0 width=809 style='border-collapse:
 collapse;table-layout:fixed;width:613pt'>
  

 <tr height=19>
  <td "height=20" colspan="29" rowspan="1" class="xl80" style="mso-height-source:userset;height:0.5pt;">FOR SALE</td>

 </tr>


 <tr height=29 style='mso-height-source:userset;height:22.5pt'>
  <td colspan="28" height=29 class="xl64" style='height:22.5pt'>　</td>
  <td class="xl65">　</td>
 </tr>


 <tr height=29 style='mso-height-source:userset;height:22.5pt'>
  <td height=29 class="xl64" style='height:22.5pt'>　</td>
  <td></td>
  <td colspan="4" rowspan="3" class="xl82" style='border-bottom:1.0pt dot-dash-slanted #002060'>￥</td>
  <td colspan="21" rowspan="3" class="xl88" style='border-right:1.0pt dot-dash-slanted #002060;
  border-bottom:1.0pt dot-dash-slanted #002060;'>{$_POST['1_0']}</td>
  <td></td>
  <td class="xl65">　</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.5pt'>
  <td height=29 class="xl64" style='height:22.5pt'>　</td>
  <td></td>
  <td></td>
  <td class="xl65">　</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.5pt'>
  <td height=29 class="xl64" style='height:22.5pt'>　</td>
  <td></td>
  <td></td>
  <td class="xl65">　</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.5pt'>
  <td colspan="28" height=29 class="xl64" style='height:22.5pt'>　</td>

  <td class="xl65">　</td>
 </tr>

 <tr height=29 style='mso-height-source:userset;height:22.5pt'>
  <td height=29 class="xl64" style='height:22.5pt'>　</td>
  <td colspan="7" class="xl96">車名</td>
  <td colspan="7" class="xl103" style="border-right:.5pt solid black">{$_POST['1_1']}</td>
  <td></td>
  <td colspan="3" class="xl100"><font class="font7">■</font>主な装備</td>
  <td class="xl70">　</td>
  <td class="xl70">　</td>
  <td class="xl70">　</td>
  <td class="xl70">　</td>
  <td class="xl70">　</td>
  <td class="xl70">　</td>
  <td class="xl70">　</td>
  <td class="xl70">　</td>
  <td class="xl71">　</td>
  <td class="xl65">　</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.5pt'>
  <td height=29 class="xl64" style='height:22.5pt'>　</td>
  <td colspan="7" class="xl96">車台番号</td>
  <td colspan="7" class="xl103" style="border-right:.5pt solid black">{$_POST['1_2']}</td>
  <td></td>
  <td class="xl64">　</td>
  <td colspan="10" rowspan="3" class="xl99">{$_POST['1_3']}</td>
  <td class="xl65">　</td>
  <td class="xl65">　</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.5pt'>
  <td height=29 class="xl64" style='height:22.5pt'>　</td>
  <td colspan="7" class="xl96">排気量</td>
  <td colspan="7" class="xl98" style="border-right:.5pt solid black">{$_POST['1_4']}</td>
  <td></td>
  <td class="xl64">　</td>
  <td class="xl65">　</td>
  <td class="xl65">　</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.5pt'>
  <td height=29 class="xl64" style='height:22.5pt'>　</td>
  <td colspan="7" class="xl96">年式</td>
  <td colspan="7" class="xl103" style="border-right:.5pt solid black">{$_POST['1_5']}</td>
  <td></td>
  <td class="xl64">　</td>
  <td class="xl65">　</td>
  <td class="xl65">　</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.5spt'>
  <td height=29 class="xl64" style='height:22.5pt'>　</td>
  <td colspan="7" class="xl96">走行距離</td>
  <td colspan="7" class="xl103" style="border-right:.5pt solid black">{$_POST['1_6']}</td>
  <td></td>
  <td class="xl64">　</td>
  <td class="xl73">　</td>
  <td class="xl73">　</td>
  <td class="xl73">　</td>
  <td class="xl73">　</td>
  <td class="xl73">　</td>
  <td class="xl73">　</td>
  <td class="xl73">　</td>
  <td class="xl73">　</td>
  <td class="xl73">　</td>
  <td class="xl73">　</td>
  <td class="xl65">　</td>
  <td class="xl65">　</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.5pt'>
  <td height=29 class="xl64" style='height:22.5pt'>　</td>
  <td colspan="7" class="xl96">初度登録</td>

  <td colspan="2" class="xl94" style="solid black; text-align: right;">{$_POST['1_7']}</td>
  <td colspan="1" class="xl94" style=' solid black; text-align: center;'>{$_POST['1_8']}</td>
  <td colspan="1" class="xl94" style='solid black; text-align: left;'>年</td>
  <td colspan="1" class="xl94" style=' solid black'>{$_POST['1_9']}</td>
  <td class="xl94">月</td>
  <td class="xl94" style="border-right:.5pt solid black"> </td>
  <td></td>
  <td colspan="12" class="xl79">☎{$_POST['1_10']}</td>
  <td class="xl65">　</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.5pt'>
  <td height=29 class="xl64" style='height:22.5pt'>　</td>
  <td colspan="7" class="xl96">車検証有効期限</td>
  <td colspan="2" class="xl94" style="solid black; text-align: right;">{$_POST['1_11']}</td>
  <td colspan="1" class="xl94" style=' solid black; text-align: center;'>{$_POST['1_12']}</td>
  <td colspan="1" class="xl94" style='solid black; text-align: left;'>年</td>
  <td colspan="1" class="xl94" style=' solid black'>{$_POST['1_13']}</td>
  <td class="xl94">月</td>
  <td class="xl94" style="border-right:.5pt solid black"> </td>
  <td></td>
  <td align=left valign=top rowspan="4"></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td class="xl65">　</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.5pt'>
  <td height=29 class="xl64" style='height:22.5pt'>　</td>
  <td colspan="7" class="xl96">修復歴</td>
  <td colspan="7" class="xl103" style="border-right:.5pt solid black">{$_POST['1_15']}</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td class="xl65">　</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.5pt'>
  <td height=29 class="xl64" style='height:22.5pt'>　</td>
  <td colspan="7" class="xl96">保証内容</td>
  <td colspan="7" class="xl94" style="border-right:.5pt solid black">{$_POST['1_16']}</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td class="xl65">　</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.5pt'>
  <td height=29 class="xl64" style='height:22.5pt'>　</td>
  <td colspan="7" class="xl96">整備内容</td>
  <td colspan="7" class="xl94" style="border-right:.5pt solid black">{$_POST['1_17']}</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td class="xl65">　</td>
 </tr>
</table>
</div>

<!----------------------------->
<!--Excel の Web ページとして発行 ウィザードのアウトプットの終わり-->
<!----------------------------->
</body>

</html>

EOF;

//echo $_POST['bm_text'];



//============================================================+
// File name   : example_033.php
// Begin       : 2008-06-24
// Last Update : 2013-05-14
//
// Description : Example 033 for TCPDF class
//               Mixed font types
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Mixed font types
 * @author Nicola Asuni
 * @since 2008-06-24
 * @group font
 * @group pdf
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', true);

// set document information
$pdf->setCreator(PDF_CREATOR);
$pdf->setAuthor('@DM Fujiba');
$pdf->setTitle('@DM Fujiba プライスボード');
$pdf->setSubject('@DM Fujiba プライスボード');
//$pdf->setKeywords('TCPDF, PDF, example, test, guide');

// set default header data
//$pdf->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 033', PDF_HEADER_STRING);

// set header and footer fonts
//$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
//$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
//$pdf->setMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetMargins(-5, 0, 0,true);
//$pdf->setHeaderMargin(PDF_MARGIN_HEADER);
//$pdf->setFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
//$pdf->setAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
//$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------
//$pdf->SetDisplayMode('fullpage', 'SinglePage', 'UseNone');

$pdf->SetPrintHeader(false);
$pdf->SetPrintFooter(false);

// add a page
//$pdf->AddPage();
$pdf->AddPage('L','A4');
//$pdf->Cell(0, 0, 'A4 PORTRAIT', 1, 1, 'C');


// set default font subsetting mode
$pdf->setFontSubsetting(false);

$pdf->setFont('meiryo', '', '16','');





//$html = file_get_contents('test.html', false);

//$pdf->writeHTMLCell($w=0,$h=0,$x=0,$y=0,$html,$border=0,$ln=0,$fill=false,$reseth=true,$align='L',$autopadding=false);

//https://stackoverflow.com/questions/44061583/what-are-the-parameter-of-the-image-in-tcpdf
//mage( filename, left, top, width, height, type, link, align, resize, dpi, align, ismask, imgmask, border, fitbox, hidden, fitonpage)
/*
$pdf->Image('https://picture1.goo-net.com/056/0561562/J/0561562A30241024W00205.jpg', 125, 190, 30, 25, '', 'http://www.tcpdf.org', '', false, 300);
$pdf->Image('https://picture1.goo-net.com/056/0561562/J/0561562A30241024W00205.jpg', 160, 190, 30, 25, '', 'http://www.tcpdf.org', '', false, 300);

$pdf->Image('https://picture1.goo-net.com/056/0561562/J/0561562A30241024W00205.jpg', 125, 216, 30, 25, '', 'http://www.tcpdf.org', '', false, 300);
$pdf->Image('https://picture1.goo-net.com/056/0561562/J/0561562A30241024W00205.jpg', 160, 216, 30, 25, '', 'http://www.tcpdf.org', '', false, 300);

$pdf->Image('https://picture1.goo-net.com/056/0561562/J/0561562A30241024W00205.jpg', 125, 241, 30, 25, '', 'http://www.tcpdf.org', '', false, 300);
$pdf->Image('https://picture1.goo-net.com/056/0561562/J/0561562A30241024W00205.jpg', 160, 241, 30, 25, '', 'http://www.tcpdf.org', '', false, 300);
*/



//$pdf->Image($_SERVER['DOCUMENT_ROOT'] . $_POST['uploadPath'] . '/html/upload/save_image/companyLogo/' . $_POST['customerId'] . '.png', 162.5, 156, 115.5, 25, '', 'http://www.tcpdf.org', '', false, 300);
$pdf->Image($_POST['1_14'], 162.5, 156, 115.5, 25, '', 'http://www.tcpdf.org', '', false, 300);

//$pdf->Image($_SERVER['DOCUMENT_ROOT'] . $_POST['uploadPath'] . '/html/upload/save_image/companyLogo/' . $_POST['customerId'] . '.png', 125, 190, 30, 20, '', 'http://www.tcpdf.org', '', false, 300);


//$pdf->Image($_POST['4_1'], 125, 190, 30, 25, '', 'http://www.tcpdf.org', '', false, 300);
//$pdf->Image($_POST['4_2'], 160, 190, 30, 25, '', 'http                                             ://www.tcpdf.org', '', false, 300);

//$pdf->Image($_POST['4_3'], 125, 216, 30, 25, '', 'http://www.tcpdf.org', '', false, 300);
//$pdf->Image($_POST['4_4'], 160, 216, 30, 25, '', 'http://www.tcpdf.org', '', false, 300);

//$pdf->Image($_POST['4_5'], 125, 241, 30, 25, '', 'http://www.tcpdf.org', '', false, 300);
//$pdf->Image($_POST['4_6'], 160, 241, 30, 25, '', 'http://www.tcpdf.org', '', false, 300);

//$pdf->Image('https://picture1.goo-net.com/056/0561562/J/0561562A30241024W00205.jpg', 100, 300, 40, 30, 'JPG', 'http://www.tcpdf.org', '', true, 150, '', false, false, 1, false, false, false);
$pdf->writeHTML($html, true, 0, true, 0);
//$pdf->Write(5, $html, '', 0, '', false, 0, false, false, 0);
//$pdf->Output($_SERVER['DOCUMENT_ROOT'] . '/eccube-mylocal/ec-cube/html/upload/invoice/' . $_POST['customerId'] . '/' . $_POST['pdfFileName'] . '.pdf', 'FI');

$pdf->Output($_SERVER['DOCUMENT_ROOT'] . $_POST['uploadPath'] . '/html/upload/priceboard/' . $_POST['customerId'] . '/' . $_POST['pdfFileName'] . '.pdf', 'FI');
//$pdf->Output($_SERVER['DOCUMENT_ROOT'] . '/eccube-mylocal/ec-cube/html/upload/contract/20002/test.pdf', 'FI');


