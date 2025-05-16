<?php


foreach ($_POST as $key => $value) {
  $_POST[$key] = preg_replace('/^￥/u', '', $value);
}

$html = <<< EOF

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
      <meta name="author" content="" />
      <meta name="company" content="Microsoft Corporation" />
    <style type="text/css">
      html { font-family:meiryo, Calibri, Arial, Helvetica, sans-serif; font-size:9pt;pt; background-color:white }
      a.comment-indicator:hover + div.comment { background:#ffd; position:absolute; display:block; border:0.5px solid black; padding:0.5em }
      a.comment-indicator { background:red; display:inline-block; border:0.5px solid black; width:0.5em; height:0.5em }
      div.comment { display:none }
     # table { border-collapse:collapse; page-break-after:always }
      .gridlines td { border:0.5px dotted black }
      .gridlines th { border:0.5px dotted black }
      .b { text-align:center }
      .e { text-align:center }
      .f { text-align:right }
      .inlineStr { text-align:left }
      .n { text-align:right }
      .s { text-align:left }
      td.style0 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      th.style0 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      td.style1 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      th.style1 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:0.5px solid; color:#000000;  font-size:8pt; background-color:white }
      td.style2 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      th.style2 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      td.style3 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      th.style3 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      td.style4 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      th.style4 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      td.style5 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      th.style5 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      td.style6 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      th.style6 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      td.style7 { vertical-align:middle; text-align:right; padding-right:3px; border-bottom:none; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      th.style7 { vertical-align:middle; text-align:right; padding-right:3px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      td.style8 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      th.style8 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      td.style9 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:#779f78 }
      th.style9 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:#779f78 }
      td.style10 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      th.style10 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      td.style11 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:#1a6d45 }
      th.style11 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:#1a6d45 }
      td.style12 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:7pt; background-color:#ffffff }
      th.style12 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:7pt; background-color:#ffffff }
      td.style13 { vertical-align:left; text-align:right; padding-right:2px; border-bottom:none; border-top:0.5px solid #40544bfc !important;  border-left:0.5px solid #40544bfc !important; border-right:none; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      th.style13 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:none; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #ffffff; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      td.style14 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      th.style14 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      td.style15 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:white }
      th.style15 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:white }
      td.style16 { vertical-align:middle; text-align:center; border-bottom:none; border-top:0.5px solid #40544bfc !important;  border-left:0.5px solid #40544bfc !important; border-right:none; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      th.style16 { vertical-align:middle; text-align:center; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      td.style17 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important;  color:#000000;  font-size:8pt; background-color:#ffffff }
      th.style17 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#000000;  font-size:8pt; background-color:#ffffff }
      td.style18 { vertical-align:middle; text-align:left; padding-left:3px; border-bottom:0.15px solidrgba(36, 61, 50, 0.99) !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:9pt; background-color:white }
      th.style18 { vertical-align:middle; text-align:left; padding-left:3px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:9pt;pt; background-color:white }
      td.style19 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none; border-top:0.5px solid #40544bfc !important; border-left:none; border-right:0.5px solid #40544bfc !important;  color:#000000;  font-size:9pt;pt; background-color:white }
      td.style20 { vertical-align:middle; text-align:right; padding-right:0.5px; border-bottom:none; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      th.style20 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #ffffff; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      td.style21 { vertical-align:middle; text-align:right; padding-left:15px; border-bottom:0.5px solid #ffffff !important; border-top:0.5px solid #ffffff !important; border-left:0px solid #ffffff !important; border-right:0.5px solid #ffffff !important; color:#000000;  font-size:8pt; background-color:white }
      th.style21 { vertical-align:middle; text-align:right; padding-left:15px; border-bottom:0.5px solid #ffffff !important; border-top:0.5px solid #ffffff !important; border-left:0.5px solid #ffffff !important; border-right:none #000000;  color:#000000;  font-size:8pt; background-color:white }
      td.style22 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:9pt;pt; background-color:#1a6d45 }
      th.style22 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:9pt;pt; background-color:#1a6d45 }
      td.style23 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:white }
      th.style23 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:white }
      td.style24 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:none #000000; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      th.style24 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:none #000000; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      td.style25 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:none #000000; border-left:none #000000; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:white }
      th.style25 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:none #000000; border-left:none #000000; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:white }
      td.style26 { vertical-align:middle; text-align:left; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#000000;  font-size:12pt; background-color:white }
      th.style26 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#000000;  font-size:12pt; background-color:white }
      td.style27 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      th.style27 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      td.style28 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      th.style28 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      td.style29 { vertical-align:middle; text-align:left; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      th.style29 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      td.style30 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:none; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      th.style30 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      td.style31 { vertical-align:middle; text-align:left; border-bottom:none; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important;  color:#000000;  font-size:9pt;pt; background-color:white }
      th.style31 { vertical-align:middle; text-align:left; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#000000;  font-size:9pt;pt; background-color:white }
      td.style32 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; font-weight:bold; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      th.style32 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; font-weight:bold; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      td.style33 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      th.style33 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      td.style34 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      th.style34 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      td.style35 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:white }
      th.style35 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:white }
      td.style36 { vertical-align:middle; text-align:center; border-bottom:0.5px solid #40544bfc !important;  border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important;  font-weight:bold; color:#000000;  font-size:12pt; background-color:#ffffff; line-height:30px; }
      th.style36 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; font-weight:bold; color:#000000;  font-size:12pt; background-color:#ffffff }
      td.style37 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:none; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      th.style37 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      td.style38 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none; color:#000000;  font-size:9pt;pt; background-color:white }
      th.style38 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#000000;  font-size:9pt;pt; background-color:white }
      td.style39 { vertical-align:middle; text-align:left; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#000000;  font-size:9pt;pt; background-color:white }
      th.style39 { vertical-align:middle; text-align:center; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#000000;  font-size:9pt;pt; background-color:white }
      td.style40 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:8pt;pt; background-color:#1a6d45;}
      th.style40 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:8pt;pt; background-color:#1a6d45;}
      td.style41 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:9pt;pt; background-color:#1a6d45 }
      th.style41 { vertical-align:middle; text-align:left; padding-right:2px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:9pt;pt; background-color:#1a6d45 }
      td.style242 { vertical-align:middle; text-align:center; border-bottom:0px solid #ffffff !important; border-top:0px solid #ffffff !important; border-left:0px solid #ffffff !important; border-right:none #ffffff; color:#ffffff;  font-size:8pt; background-color:#ffffff; font-weight:bold;}
      th.style242 { vertical-align:middle; text-align:center; border-bottom:0px solid #ffffff !important; border-top:0px solid #ffffff !important; border-left:0px solid #ffffff !important; border-right:none #ffffff; color:#ffffff;  font-size:8pt; background-color:#ffffff }
      td.style43 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #000000 !important; border-top:0.5px solid #000000 !important; border-left:none #000000; border-right:0.5px solid #000000 !important; color:#000000;  font-size:8pt; background-color:white }
      th.style43 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #000000 !important; border-top:0.5px solid #000000 !important; border-left:none #000000; border-right:0.5px solid #000000 !important; color:#000000;  font-size:8pt; background-color:white }
      td.style44 { vertical-align:middle; text-align:center; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:9pt;pt; background-color:#1a6d45 }
      th.style44 { vertical-align:middle; text-align:center; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:9pt;pt; background-color:#1a6d45 }
      td.style45 { vertical-align:middle; text-align:center; border-bottom:none; border-top:0.5px solid #40544bfc !important;  border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      th.style45 { vertical-align:middle; text-align:center; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      td.style46 { vertical-align:middle; text-align:center; border-bottom:none #366092; border-top:none #366092; border-top:0.5px solid #366092 !important; border-left:0.5px solid  #366092; border-right:none #366092; color:#ffffff;  font-size:20pt; background-color:#041F30 }
      th.style46 { vertical-align:middle; text-align:center; border-bottom:none #366092; border-top:none #366092; border-left:none #366092; border-right:none #366092; color:#ffffff;  font-size:20pt; background-color:#041F30 }
      td.style47 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      th.style47 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      td.style48 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #366092 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      th.style48 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #366092 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      td.style49 { vertical-align:middle; text-align:left; padding-left:5px; border-bottom:0px solid #ffffff !important; border-top:0.5px solid #ffffff !important; border-left:0.5px solid #ffffff !important; border-right:none #ffffff; color:#000000;  font-size:13pt; background-color:#ffffff }
      th.style49 { vertical-align:middle; text-align:left; padding-left:5px; border-bottom:0px solid #ffffff !important; border-top:0.5px solid #ffffff !important; border-left:0.5px solid #ffffff !important; border-right:none #ffffff; color:#ffffff;  font-size:13pt; background-color:#ffffff }
      td.style50 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #000000 !important; border-top:0.5px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      th.style50 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #000000 !important; border-top:0.5px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      td.style51 { vertical-align:middle; text-align:center; border-bottom:0.5px solid #366092 !important; border-top:0.5px solid #366092 !important; border-left:0.5px solid #366092 !important; border-right:none #366092; color:#ffffff;  font-size:18pt; background-color:#1a6d45; height: 25px;line-height:30px;}
      th.style51 { vertical-align:middle; text-align:center; border-bottom:0.5px solid #366092 !important; border-top:0.5px solid #366092 !important; border-left:0.5px solid #366092 !important; border-right:none #366092; color:#ffffff;  font-size:18pt; background-color:#1a6d45 }
      td.style52 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#000000;  font-size:9pt;pt; background-color:white }
      th.style52 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#000000;  font-size:9pt;pt; background-color:white }
      td.style53 { vertical-align:middle; text-align:center; border-bottom:none; border-top:0.5px solid #40544bfc !important;  border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      th.style53 { vertical-align:middle; text-align:center; border-bottom:none; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      td.style54 { vertical-align:top; text-align:left; border-bottom:none; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:white }
      th.style54 { vertical-align:top; text-align:center; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      td.style55 { vertical-align:bottom; text-align:left; padding-left:0px;  border-top:none #000000; border-left:none #000000; border-bottom:0.5px solid #40544bfc !important; color:#000000;  font-size:7pt;pt; background-color:#ffffff }
      th.style55 { vertical-align:bottom; text-align:left; padding-left:0px;  border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:7pt;pt; background-color:#ffffff }
      td.style56 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      th.style56 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      td.style57 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#000000;  font-size:9pt;pt; background-color:white }
      th.style57 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#000000;  font-size:9pt;pt; background-color:white }
      td.style58 { vertical-align:middle; text-align:right; padding-right:3px; border-bottom:none; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#ffffff;  font-size:9pt; background-color:#779f78 }
      th.style58 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; font-weight:bold; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      td.style59 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:white }
      th.style59 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      td.style60 { vertical-align:middle; text-align:right; padding-right:3px; border-bottom:none; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      th.style60 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; font-weight:bold; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      td.style61 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none; border-top:0.5px solid #40544bfc !important; border-right:none #000000; color:#FF0000;  font-size:9pt;pt; background-color:white }
      th.style61 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#FF0000;  font-size:9pt;pt; background-color:white }
      td.style62 { vertical-align:middle; text-align:left; padding-left:3px; border-bottom:none; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important;  border-right:0.5px solid #40544bfc !important; color:#FF0000;  font-size:9pt;pt; background-color:white }
      th.style62 { vertical-align:middle; text-align:left; padding-left:3px; borderf-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#FF0000;  font-size:9pt;pt; background-color:white }
      td.style63 { vertical-align:middle; text-align:right; padding-right:3px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      th.style63 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      td.style64 { vertical-align:middle; text-align:center; border-bottom:none; border-top:0.5px solid #40544bfc !important;  border-left:0.5px solid #40544bfc !important; border-right:none; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
 

      th.style64 { vertical-align:middle; text-align:center; border-bottom:none; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      td.style65 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:white }
      th.style65 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:white }
      td.style66 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:none #000000; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:white }
      th.style66 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:none #000000; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:white }
      td.style67 { vertical-align:middle; text-align:center; border-bottom:none; border-top:0.5px solid #40544bfc !important;  border-left:0.5px solid #40544bfc !important; border-right:none; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      th.style67 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      td.style68 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:none;  border-top:0.5px solid #40544bfc !important;  border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      th.style68 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      td.style69 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      th.style69 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      td.style70 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:white }
      th.style70 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:white }
      td.style71 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      th.style71 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      td.style72 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      th.style72 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      td.style73 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:white }
      th.style73 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:white }
      td.style74 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      th.style74 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      td.style75 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      th.style75 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      td.style76 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:white }
      th.style76 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:white }
      td.style77 { vertical-align:middle; text-align:right; padding-right:3px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      th.style77 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      td.style78 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:white }
      th.style78 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:white }
      td.style79 { vertical-align:middle; text-align:right; padding-right:3px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      th.style79 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      td.style80 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:white }
      th.style80 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:white }
      td.style81 { vertical-align:middle; text-align:right; padding-right:3px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; font-weight:bold; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      th.style81 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; font-weight:bold; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      td.style82 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:white }
      th.style82 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:white }
      td.style83 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:1pt; background-color:white }
      th.style83 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:1pt; background-color:white }
      td.style84 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:0.5px solid #ffffff !important; color:#000000;  font-size:8pt; background-color:white }
      th.style84 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:0.5px solid #ffffff !important; color:#000000;  font-size:8pt; background-color:white }
      td.style85 { vertical-align:top; text-align:center; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      th.style85 { vertical-align:top; text-align:center; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      td.style86 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:#ffffff }
      th.style86 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:#ffffff }
      td.style87 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      th.style87 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      td.style88 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:0.5px solid #072633 !important; color:#000000;  font-size:8pt; background-color:white }
      th.style88 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:0.5px solid #072633 !important; color:#000000;  font-size:8pt; background-color:white }
      td.style89 { vertical-align:top; text-align:center; border-bottom:0.5px solid #40544bfc !important;  border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt; background-color:#ffffff }
      th.style89 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:#000000 }
      td.style90 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      th.style90 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      td.style91 { vertical-align:middle; text-align:left; padding-left:4px; border-bottom:0.5px solid #40544bfc !important;  border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important;  color:#000000;  font-size:8pt; background-color:#DBE5F1 }
      th.style91 { vertical-align:middle; text-align:left; padding-left:4px; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#000000;  font-size:8pt; background-color:#DBE5F1 }
      td.style92 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#17365D;  font-size:8pt; background-color:white }
      th.style92 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#17365D;  font-size:8pt; background-color:white }
      td.style93 { vertical-align:middle; text-align:center; border-bottom:0.5px solid #40544bfc !important;  border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#ffffff;  font-size:8pt; background-color:#1a6d45 }
      th.style93 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#ffffff;  font-size:8pt; background-color:#1a6d45 }
      td.style94 { vertical-align:middle; text-align:center; border-bottom:0.5px solid #40544bfc !important;  border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important;  color:#000000;  font-size:8pt; background-color:#1a6d45 }
      th.style94 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#000000;  font-size:8pt; background-color:#1a6d45 }
      td.style95 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      th.style95 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      td.style96 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:none #000000; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      th.style96 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:0.5px solid #40544bfc !important; border-top:none #000000; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      td.style97 { vertical-align:middle; text-align:center; border-bottom:0.5px solid #40544bfc !important;  border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important;  color:#ffffff;  font-size:8pt; background-color:#1a6d45 }
      th.style97 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:8pt; background-color:#1a6d45 }
      td.style98 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:7pt; background-color:#000000 }
      th.style98 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:7pt; background-color:#000000 }
      td.style99 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      th.style99 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      td.style100 { vertical-align:middle; text-align:center; border-bottom:0.5px solid #40544bfc !important;  border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:0.5px solid #40544bfc !important;  color:#000000;  font-size:8pt; background-color:#DBE5F1 }
      th.style100 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:#DBE5F1 }
      td.style101 { vertical-align:middle; text-align:center; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      th.style101 { vertical-align:middle; text-align:center; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:8pt; background-color:white }
      td.style102 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important;  border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      th.style102 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      td.style103 { vertical-align:middle; text-align:center; border-bottom:none; border-top:none;  border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      th.style103 { vertical-align:middle; text-align:center; border-bottom:none; border-top:none; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      td.style104 { vertical-align:middle; text-align:center; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important;  border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      th.style104 { vertical-align:middle; text-align:center; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important;  border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      td.style105 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#FF0000;  font-size:9pt;pt; background-color:#779f78 }
      th.style105 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#FF0000; font-family:'Hgs教科書体n'; font-size:9pt;pt; background-color:#779f78 }

      td.style200 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#ffffff;  font-size:9pt; background-color:#779f78 }
      th.style200 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#ffffff;  font-size:9pt; background-color:#779f78 }

      td.style201 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:8pt;pt; background-color:#ffffff }
      th.style201 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:9pt;pt; background-color:#ffffff }

      td.style203 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#ffffff;  font-weight:bold; font-size:8pt; background-color:#1a6d45; }
      th.style203 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#ffffff;  font-weight:bold; font-size:8pt; background-color:#1a6d45; }

      td.style204 { vertical-align:middle; text-align:center; padding-left:4px; border-bottom:0.5px solid #40544bfc !important;  border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important;  color:#000000;  font-size:8pt;  background-color:#DBE5F1; }
      th.style204 { vertical-align:middle; text-align:center; padding-left:4px; border-bottom:none #000000; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #000000; color:#000000;  font-size:8pt;  background-color:#DBE5F1 }

      td.style205 { vertical-align:middle; text-align:left; padding-left:15px; border-bottom:0.5px solid #40544bfc !important; color:#000000;  font-size:9pt; background-color:white ;line-height:20px;}
      th.style205 { vertical-align:middle; text-align:left; padding-left:15px; border-bottom:0.5px solid #40544bfc !important; border-top:0px solid #40544bfc !important; border-left:0px solid #40544bfc !important; border-right:none #40544bfc;  color:#000000;  font-size:10pt; background-color:white }

      td.style206 { vertical-align:middle; text-align:right; padding-left:15px;  color:#000000;  font-size:9pt; background-color:white ;line-height:20px;}
      th.style206 { vertical-align:middle; text-align:right; padding-left:15px;  color:#000000;  font-size:12pt; background-color:white }

      td.style207 { vertical-align:middle; text-align:left; padding-left:12px;  border-bottom:1.1px solid #40544bfc !important; color:#000000;  font-size:14pt; font-weight:bold; background-color:white ;line-height:22px;}
      th.style207 { vertical-align:middle; text-align:left; padding-left:12px;  border-bottom:0.5px solid #40544bfc !important; color:#000000;  font-size:12pt; background-color:white }

      td.style208 { vertical-align:middle; text-align:right; padding-left:3px; border-bottom:0.15px solidrgba(36, 61, 50, 0.99) !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:9pt;pt; background-color:white; font-family:'Times New Roman'; }
      th.style208 { vertical-align:middle; text-align:left; padding-left:3px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#000000;  font-size:9pt;pt; background-color:white }

      td.style209 { vertical-align:middle; text-align:right; padding-right:0.5px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }
      th.style209 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:none #ffffff; color:#ffffff;  font-size:9pt;pt; background-color:#779f78 }

      td.style210 { vertical-align:middle; text-align:right; padding-right:3px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:none; border-right:0.5px solid #40544bfc !important; color:#ffffff;  font-size:8pt; background-color:#779f78 }
      th.style210 { vertical-align:middle; text-align:right; padding-right:3px; border-bottom:0.5px solid #40544bfc !important; border-top:0.5px solid #40544bfc !important; border-left:0.5px solid #40544bfc !important; border-right:0.5px solid #40544bfc !important; color:#ffffff;  font-size:8pt; background-color:#779f78 }

      table.sheet0 col.col0 { width:3.38888885pt }
      table.sheet0 col.col1 { width:22.19999986pt }
      table.sheet0 col.col2 { width:12.19999986pt }
      table.sheet0 col.col3 { width:12.19999986pt }
      table.sheet0 col.col4 { width:12.19999986pt }
      table.sheet0 col.col5 { width:12.19999986pt }
      table.sheet0 col.col6 { width:12.19999986pt }
      table.sheet0 col.col7 { width:12.19999986pt }
      table.sheet0 col.col8 { width:12.19999986pt }
      table.sheet0 col.col9 { width:12.19999986pt }
      table.sheet0 col.col10 { width:12.19999986pt }
      table.sheet0 col.col11 { width:12.19999986pt }
      table.sheet0 col.col12 { width:12.19999986pt }
      table.sheet0 col.col13 { width:12.19999986pt }
      table.sheet0 col.col14 { width:12.19999986pt }
      table.sheet0 col.col15 { width:12.19999986pt }
      table.sheet0 col.col16 { width:12.19999986pt }
      table.sheet0 col.col17 { width:12.19999986pt }
      table.sheet0 col.col18 { width:12.19999986pt }
      table.sheet0 col.col19 { width:12.19999986pt }
      table.sheet0 col.col20 { width:12.19999986pt }
      table.sheet0 col.col21 { width:15.19999986pt }
      table.sheet0 col.col22 { width:12.19999986pt }
      table.sheet0 col.col23 { width:15.19999986pt }
      table.sheet0 col.col24 { width:12.19999986pt }
      table.sheet0 col.col25 { width:12.19999986pt }
      table.sheet0 col.col26 { width:12.19999986pt }
      table.sheet0 col.col27 { width:12.19999986pt }
      table.sheet0 col.col28 { width:12.19999986pt }
      table.sheet0 col.col29 { width:12.19999986pt }
      table.sheet0 col.col30 { width:12.19999986pt }
      table.sheet0 col.col31 { width:12.19999986pt }
      table.sheet0 col.col32 { width:12.19999986pt }
      table.sheet0 col.col33 { width:12.19999986pt }
      table.sheet0 col.col34 { width:12.19999986pt }
      table.sheet0 col.col35 { width:12.19999986pt }
      table.sheet0 col.col36 { width:12.19999986pt }
      table.sheet0 col.col37 { width:12.19999986pt }
      table.sheet0 col.col38 { width:12.19999986pt }
      table.sheet0 col.col39 { width:12.19999986pt }
      table.sheet0 col.col40 { width:12.19999986pt }
      table.sheet0 col.col41 { width:12.19999986pt }
      table.sheet0 col.col42 { width:12.19999986pt }
      table.sheet0 tr { height:15pt }
      table.sheet0 tr.row0 { height:25.5pt }
      table.sheet0 tr.row1 { height:60pt }
      table.sheet0 tr.row2 { height:7.5pt }
      table.sheet0 tr.row3 { height:14.25pt }
      table.sheet0 tr.row4 { height:12pt }
      table.sheet0 tr.row5 { height:12pt }
      table.sheet0 tr.row6 { height:12pt }
      table.sheet0 tr.row7 { height:12pt }
      table.sheet0 tr.row8 { height:12.75pt }
      table.sheet0 tr.row9 { height:12.75pt }
      table.sheet0 tr.row10 { height:12.75pt }
      table.sheet0 tr.row11 { height:7.5pt }
      table.sheet0 tr.row12 { height:12.75pt }
      table.sheet0 tr.row13 { height:12.75pt }
      table.sheet0 tr.row14 { height:12.75pt }
      table.sheet0 tr.row15 { height:12.75pt }
      table.sheet0 tr.row16 { height:12.75pt }
      table.sheet0 tr.row17 { height:12.75pt }
      table.sheet0 tr.row18 { height:12.75pt }
      table.sheet0 tr.row19 { height:12.75pt }
      table.sheet0 tr.row20 { height:12.75pt }
      table.sheet0 tr.row21 { height:12.75pt }
      table.sheet0 tr.row22 { height:12.75pt }
      table.sheet0 tr.row23 { height:12.75pt }
      table.sheet0 tr.row24 { height:12.75pt }
      table.sheet0 tr.row25 { height:12.75pt }
      table.sheet0 tr.row26 { height:12.75pt }
      table.sheet0 tr.row27 { height:12.75pt }
      table.sheet0 tr.row28 { height:12.75pt }
      table.sheet0 tr.row29 { height:12.75pt }
      table.sheet0 tr.row30 { height:12.75pt }
      table.sheet0 tr.row31 { height:12.75pt }
      table.sheet0 tr.row32 { height:12.75pt }
      table.sheet0 tr.row33 { height:12.75pt }
      table.sheet0 tr.row34 { height:12.75pt }
      table.sheet0 tr.row35 { height:12.75pt }
      table.sheet0 tr.row36 { height:12.75pt }
      table.sheet0 tr.row37 { height:12.75pt }
      table.sheet0 tr.row38 { height:12.75pt }
      table.sheet0 tr.row39 { height:12.75pt }
      table.sheet0 tr.row40 { height:12.75pt }
      table.sheet0 tr.row41 { height:12pt }
      table.sheet0 tr.row42 { height:7.5pt }
      table.sheet0 tr.row43 { height:12.75pt }
      table.sheet0 tr.row44 { height:12.75pt }
      table.sheet0 tr.row45 { height:12.75pt }
      table.sheet0 tr.row46 { height:7.5pt }
      table.sheet0 tr.row47 { height:12.75pt }
      table.sheet0 tr.row48 { height:12.75pt }
      table.sheet0 tr.row49 { height:12.75pt }
      table.sheet0 tr.row50 { height:12.75pt }
      table.sheet0 tr.row51 { height:12.75pt }
      table.sheet0 tr.row52 { height:7.5pt }
      table.sheet0 tr.row53 { height:12.75pt }
      table.sheet0 tr.row54 { height:12.75pt }
      table.sheet0 tr.row55 { height:12.75pt }
      table.sheet0 tr.row56 { height:12.75pt }
      table.sheet0 tr.row57 { height:12.75pt }
      table.sheet0 tr.row58 { height:12pt }
      table.sheet0 tr.row59 { height:12pt }
      table.sheet0 tr.row60 { height:12pt }
      table.sheet0 tr.row61 { height:12pt }
      table.sheet0 tr.row62 { height:12pt }
      table.sheet0 tr.row63 { height:12pt }
      table.sheet0 tr.row64 { height:12pt }
      table.sheet0 tr.row65 { height:12pt }
      table.sheet0 tr.row66 { height:12pt }
      table.sheet0 tr.row67 { height:12pt }
      table.sheet0 tr.row68 { height:12pt }
      table.sheet0 tr.row69 { height:12pt }
      table.sheet0 tr.row70 { height:12pt }
      table.sheet0 tr.row71 { height:12pt }
      table.sheet0 tr.row72 { height:12pt }
      table.sheet0 tr.row73 { height:12pt }
      table.sheet0 tr.row74 { height:12pt }
      table.sheet0 tr.row75 { height:12pt }
      table.sheet0 tr.row76 { height:12pt }
      table.sheet0 tr.row77 { height:12pt }
      table.sheet0 tr.row78 { height:12pt }
 
 #partners {
  /*background-color: #eee;*/
  white-space: nowrap;
}

.logo-image {
  vertical-align: middle;
  padding: 2px;
  display: table-cell;
}

.logo-image img {
  max-width: 100%;
}

td input, td button {

  width:100%;
  height:100%;
}
.xl82
	{mso-style-parent:style0;
	font-size:10.0pt;
;
/* input[type=number] start */
input[type=number] {text-align: right;}
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
/* input[type=number] end */


    </style>
  </head>

  <body>
<style>
@page { margin-left: 0.59055118110236in; margin-right: 0.59055118110236in; margin-top: 0.59055118110236in; margin-bottom: 0.59055118110236in; }
body { margin-left: 0.59055118110236in; margin-right: 0.59055118110236in; margin-top: 0.59055118110236in; margin-bottom: 0.59055118110236in; }
</style>
<style> td{height: 15px;line-height:15px;}</style>
<style>
    .english {
        font-family: sans-serif;
        font-size: 10pt;
    }
    .japanese {
        font-family: notojp;
        font-size: 12pt;
    }
    .bold {
        font-weight: bold;
    }
    .small {
        font-size: 119pt;
    }
</style>
    <table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0" style="margin-left: auto; margin-right: auto;">
        <col class="col0">
        <col class="col1">
        <col class="col2">
        <col class="col3">
        <col class="col4">
        <col class="col5">
        <col class="col6">
        <col class="col7">
        <col class="col8">
        <col class="col9">
        <col class="col10">
        <col class="col11">
        <col class="col12">
        <col class="col13">
        <col class="col14">
        <col class="col15">
        <col class="col16">
        <col class="col17">
        <col class="col18">
        <col class="col19">
        <col class="col20">
        <col class="col21">
        <col class="col22">
        <col class="col23">
        <col class="col24">
        <col class="col25">
        <col class="col26">
        <col class="col27">
        <col class="col28">
        <col class="col29">
        <col class="col30">
        <col class="col31">
        <col class="col32">
        <col class="col33">
        <col class="col34">
        <col class="col35">
        <col class="col36">
        <col class="col37">

        <tbody>

          <tr class="row0">
            
            <td class="column1 style51 s style43-bk" colspan="36">御見積書</td>
            <td class="column37 style2 null"></td>

          </tr>
          <tr class="row1">
            <td class="column0">&nbsp;</td>

            <td class="column1 style207 s style43-bk" colspan="20" ><br><br>{$_POST['1_1']}</td>
            
            <td class="column4 style21 null" colspan="15" rowspan="5">
              <br>{$_POST['serialNoId']}<br><br>
              <br><b>{$_POST['0_2']}</b>&nbsp;&nbsp;&nbsp;&nbsp;<br />
              {$_POST['0_3']}&nbsp;&nbsp;&nbsp;&nbsp;<br>
              TEL:{$_POST['0_4']} FAX:{$_POST['0_5']}&nbsp;&nbsp;&nbsp;&nbsp;<br>
              Mail:{$_POST['0_6']}&nbsp;&nbsp;&nbsp;&nbsp;<br>
              {$_POST['0_7']}&nbsp;&nbsp;&nbsp;&nbsp;
            </td>
            <td class="column37 style2 null"></td>

          </tr>
          <tr class="row2">
            <td class="column0">&nbsp;</td>
            <td class="column1 style206 s" colspan="4">住所：</td>
            <td colspan="17" class="style205">&nbsp;{$_POST['1_5']}</td>
          </tr>
          <tr class="row2">
            <td class="column0">&nbsp;</td>
            <td class="column1 style206 s" colspan="4">メール：</td>
            <td colspan="17" class="style205 english">&nbsp;{$_POST['1_9']}</td>
          </tr>
          <tr class="row2">
            <td class="column0">&nbsp;</td>
            <td class="column1 style206 s" colspan="4">電話：</td>
            <td colspan="7" class="style205 english">&nbsp;{$_POST['1_13']}</td>
            <td class="column1 style206 s " colspan="4">&nbsp;&nbsp;&nbsp;Fax：</td>
            <td colspan="8" class="style205 english">&nbsp;{$_POST['1_16']}</td>
          </tr>
          <tr class="row2">
            <td class="column0">&nbsp;</td>
            <td class="column1 style206 s" colspan="4">有効期限：</td>
            <td colspan="7" class="style205 english">&nbsp;{$_POST['1_3']}</td>

          </tr>
          <tr class="row2">
            <td class="column1 style55 s style34" colspan="36" ><br><br>下記の通りお見積り申し上げます </td>
            <td class="column37 style2 null"></td>
          </tr>




          
          <tr class="row3">

            <td class="column15 style103 s style104-bk" colspan="29">ご検討の車種</td>
            <td class="column15 style103 s style104-bk" colspan="7">登録番号</td>

          </tr>
          <tr class="row5">
            
            <td class="column15 style20 s style15" colspan="3">車台番号&nbsp;&nbsp;</td>
            <td class="column19 english style18 s style15" colspan="12">&nbsp;{$_POST['1_6']}</td>
            <td class="column23 style37 s style15" colspan="4">&nbsp;車体色&nbsp;&nbsp;</td>
            <td class="column27 style18 f style15" colspan="10">&nbsp;{$_POST['1_4_1']}</td>
            <td class="column32 style201 f style15" colspan="7">&nbsp;{$_POST['10_1']}</td>


          </tr>
          <tr class="row6">
            
            <td class="column15 style20 s style15" colspan="3">車種&nbsp;&nbsp;</td>
            <td class="column19 style18 s style15" colspan="26">&nbsp;{$_POST['1_4']}</td>
            <td class="column32 style200 f style25333" colspan="7">古物商許可</td>
            <td class="column37 style2 null"></td>
          </tr>
          <tr class="row7">
            
            <td class="column15 style20 s style15" colspan="3">排気量&nbsp;&nbsp;</td>
            <td class="column19 style18 s style15" colspan="12">&nbsp;{$_POST['1_7']}</td>
            <td class="column23 style30 s style15" colspan="4">メーカー&nbsp;&nbsp;</td>
            <td class="column27 style18 s style15" colspan="10">&nbsp;{$_POST['1_8']}</td>
            <td class="column32 style201 f style15" colspan="7">&nbsp;{$_POST['10_2']}</td>
            <td class="column37 style2 null"></td>
          </tr>
          <tr class="row8">
            
            <td class="column15 style20 s style15" colspan="3">年式&nbsp;&nbsp;</td>
            <td class="column19 style18 s style15" colspan="12">&nbsp;{$_POST['1_10']}</td>
            <td class="column23 style30 s style15" colspan="4">走行距離&nbsp;&nbsp;</td>
            <td class="column27 style18 s style15" colspan="10">&nbsp;{$_POST['1_11']}</td>
            <td class="column32 style203 f style25-bk" colspan="7"><br>ご請求予定金額</td>
            <td class="column37 style2 null"></td>
          </tr>
          <tr class="row9">
            
            <td class="column15 style20 s style15" colspan="3">ドア数&nbsp;&nbsp;</td>
            <td class="column19 style18 s style15" colspan="12">&nbsp;{$_POST['1_14']}</td>
            <td class="column23 style30 s style15" colspan="4">修復歴&nbsp;&nbsp;</td>
            <td class="column27 style18 s style15" colspan="10">&nbsp;{$_POST['1_15']}</td>
            <td class="column32 style36 f style25" colspan="7" rowspan="2">￥<span style="font-family: sans-serif;font-size: 14pt;">{$_POST['1_12']}</span></td>
            <td class="column37 style2 null"></td>
          </tr>
          <tr class="row10">
            
            <td class="column15 style209 s style15" colspan="3" style="border-right:none">車検&nbsp;&nbsp;</td>
            <td class="column19 style59 s style15" colspan="12">&nbsp;{$_POST['1_17']}</td>
            <td class="column23 style209 s style15" colspan="4" style="border-right:none" >保証内容&nbsp;&nbsp;</td>
            <td class="column27 style59 s style15" colspan="10">&nbsp;{$_POST['1_18']}</td>
            <td class="column37 style2 null"></td>
          </tr>


          <tr class="row2">
            <td class="column1 style55 s style34" colspan="36" ><br>&nbsp;</td>
            <td class="column37 style2 null"></td>
          </tr>

          <tr class="row13">
            
            <td class="column1 style102 s style25-bk" colspan="2" rowspan="5">車両販売価格(内税)</td>
            <td class="column3 style18 s style15" colspan="11">&nbsp;車両体価格</td>
            <td class="column14 style208 n style15" colspan="9">{$_POST['2_1']}&nbsp;&nbsp;</td>

            <td class="column23 style53 s style15" colspan="14">&nbsp;下取車種</td>

            <td class="column37 style4 null"></td>

          </tr>
          <tr class="row14">
            
            <td class="column3 style18 s style15" colspan="11">&nbsp;追加明細合計</td>
            <td class="column14 style208 s style15" colspan="9">{$_POST['2_2']}&nbsp;&nbsp;</td>
            <td class="column23 style13 s style15-bk" colspan="4">下取車名&nbsp;&nbsp;</td>
            <td class="column27 style18 s style15" colspan="10">&nbsp;{$_POST['2_3']}</td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row15">
            
            <td class="column3 style18 s style15" colspan="11">&nbsp;車陸送代</td>
            <td class="column14 style208 s style15" colspan="9">{$_POST['2_4']}&nbsp;&nbsp;</td>
            <td class="column23 style13 s style15-bk" colspan="4">色&nbsp;&nbsp;</td>
            <td class="column27 style18 s style15" colspan="10">&nbsp;{$_POST['2_5']}</td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row16">
            
            <td class="column3 style18 s style15" colspan="11">&nbsp;陸送費用</td>
            <td class="column14 style208 s style15" colspan="9">{$_POST['2_6']}&nbsp;&nbsp;</td>
            <td class="column23 style13 s style15-bk" colspan="4">車体番号&nbsp;&nbsp;</td>
            <td class="column27 style18 s style15" colspan="10">&nbsp;{$_POST['2_7']}</td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row17">
            
            <td class="column3 style45 s style15" colspan="11">車両価格①</td>
            <td class="column14 style58 f style15" colspan="9">￥<span class="english">{$_POST['2_30']}</span>&nbsp;&nbsp;</td>
            <td class="column23 style13 s style15-bk" colspan="4">走行距離&nbsp;&nbsp;</td>
            <td class="column27 style18 s style15" colspan="10">&nbsp;{$_POST['2_8']}</td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row18">
            
            <td valign="middle" class="column1 style209 s style66-bk" rowspan="24" style="text-align:center;">諸費用内訳</td>
            <td class="column2 style64 s style66-bk" rowspan="5">非課税分</td>
            <td class="column3 style18 s style15-bk" colspan="11">&nbsp;環境性能割</td>
            <td class="column14 style208 s style15" colspan="9">{$_POST['2_9']}&nbsp;&nbsp;</td>
            <td class="column23 style53 s style15" colspan="14">下取車価格(内税)</td>
            <td class="column37 style2 null"></td>
          </tr>
          <tr class="row19">
            
            <td class="column3 style18 s style15" colspan="11">&nbsp;自動車税</td>
            <td class="column14 style208 s style15" colspan="9">{$_POST['2_10']}&nbsp;&nbsp;</td>
            <td class="column23 style13 s style15-bk" colspan="4">車両本体価格&nbsp;</td>
            <td class="column27 style208 s style15" colspan="10">{$_POST['2_11']}&nbsp;&nbsp;</td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row20">
            
            <td class="column3 style18 s style15" colspan="11">&nbsp;非課税分 自賠責保険料</td>
            <td class="column14 style208 s style15" colspan="9">{$_POST['2_12']}&nbsp;&nbsp;</td>
            <td class="column23 style13 s style15-bk" colspan="4">陸送代&nbsp;&nbsp;</td>
            <td class="column27 style208 s style15" colspan="10">{$_POST['2_13']}&nbsp;&nbsp;</td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row21">
            
            <td class="column3 style18 s style15" colspan="11">&nbsp;重量税</td>
            <td class="column14 style208 s style15" colspan="9">{$_POST['2_14']}&nbsp;&nbsp;</td>
            <td class="column23 style13 s style15-bk" colspan="4" rowspan="3" style="line-height:40px;" >その他&nbsp;&nbsp;</td>
            <td class="column27 style208 s style15" colspan="10">{$_POST['2_15']}&nbsp;&nbsp;</td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row22">
            
            <td class="column3 style18 s style15" colspan="11">&nbsp;リサイクル預託金</td>
            <td class="column14 style208 s style15" colspan="9">{$_POST['2_16']}&nbsp;&nbsp;</td>
            <td class="column27 style208 s style15" colspan="10">{$_POST['2_17']}&nbsp;&nbsp;</td>
            <td class="column37 style2 null"></td>
            
            
            
            <td class="column41 style6 null"></td>
            
          </tr>
          <tr class="row23">
            
            <td class="column2 style64 s style66-bk" rowspan="3">値引き</td>
            <td class="column3 style18 s style15-bk" colspan="11">&nbsp;車両本体価格(-)</td>
            <td class="column14 style208 n style15-bk" colspan="9">{$_POST['2_18']}&nbsp;&nbsp;</td>
            <td class="column27 style208 s style15" colspan="10">{$_POST['2_19']}&nbsp;&nbsp;</td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row24">
            
            <td class="column3 style18 s style15" colspan="11">&nbsp;{$_POST['5_1']}</td>
            <td class="column14 style208 s style15" colspan="9">{$_POST['2_20']}&nbsp;&nbsp;</td>
            <td class="column23 style209 s style15-bk" colspan="9" style="border-bottom:none">（内消費税・10%）</td>
            <td class="column32 style7 f" colspan="5">￥<span class="english">{$_POST['2_21']}</span>&nbsp;&nbsp;</td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row25">
            
            <td class="column3 style18 s style15" colspan="11">&nbsp;{$_POST['5_2']}</td>
            <td class="column14 style208 s style15" colspan="9">{$_POST['2_22']}&nbsp;&nbsp;</td>
            <td class="column23 style209 s style15-bk" colspan="9">下取り車合計&nbsp;&nbsp;</td>
            <td class="column32 style210 f" colspan="5">￥<span class="english">{$_POST['2_23']}</span>&nbsp;&nbsp;</td>


            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row26">
            
            <td class="column2 style45 s style15" colspan="12">非課税分小計②</td>
            <td class="column14 style60 f style15" colspan="9">￥<span class="english">{$_POST['2_24']}</span>&nbsp;&nbsp;</td>
            <td class="column23 style86 s style88-bk" colspan="14">


            </td>


            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row27">
            
            <td class="column2 style67 s style66" rowspan="13">税対象(内税)</td>
            <td class="column3 style18 s style15" colspan="11">&nbsp;登録代行費用</td>
            <td class="column14 style208 s style15" colspan="9">{$_POST['3_1']}&nbsp;&nbsp;</td>
            <td class="column23 style89 null style25" colspan="14" rowspan="19">


<table border="0" cellpadding="5">
    <tr>
        <td style="width: 50%;"><div class="logo-image"><img id="img1" style="width: 120px; height: 85px; display: table-cell;" src="{$_POST['14_1']}" border="0"></div></td>
        <td style="width: 50%;"><div class="logo-image"><img id="img1" style="width: 120px; height: 85px; display: table-cell;" src="{$_POST['14_2']}" border="0"></div></td>
    </tr>
    <tr>
        <td style="width: 50%;"><div class="logo-image"><img id="img1" style="width: 120px; height: 85px; display: table-cell;" src="{$_POST['14_3']}" border="0"></div></td>
        <td style="width: 50%;"><div class="logo-image"><img id="img1" style="width: 120px; height: 85px; display: table-cell;" src="{$_POST['14_4']}" border="0"></div></td>
    </tr>
    <tr>
        <td style="width: 50%;"><div class="logo-image"><img id="img1" style="width: 120px; height: 85px; display: table-cell;" src="{$_POST['14_5']}" border="0"></div></td>
        <td style="width: 50%;"><div class="logo-image"><img id="img1" style="width: 120px; height: 85px; display: table-cell;" src="{$_POST['14_6']}" border="0"></div></td>
    </tr>
</table>
            </td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row28">
            
            <td class="column3 style18 s style15" colspan="11">&nbsp;車庫証明代行費用</td>
            <td class="column14 style208 s style15" colspan="9">{$_POST['3_2']}&nbsp;&nbsp;</td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row29">
            
            <td class="column3 style18 s style15" colspan="11">&nbsp;納車点検費用</td>
            <td class="column14 style208 s style15" colspan="9">{$_POST['3_3']}&nbsp;&nbsp;</td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row30">
            
            <td class="column3 style18 s style15" colspan="11">&nbsp;納車費用</td>
            <td class="column14 style208 s style15" colspan="9">{$_POST['3_4']}&nbsp;&nbsp;</td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row31">
            
            <td class="column3 style18 s style15" colspan="11">&nbsp;下取車諸手続き代行費用</td>
            <td class="column14 style208 s style15" colspan="9">{$_POST['3_5']}&nbsp;&nbsp;</td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row32">
            
            <td class="column3 style18 s style15" colspan="11">&nbsp;整備、車検、登錄諸費用</td>
            <td class="column14 style208 s style15" colspan="9">{$_POST['3_6']}&nbsp;&nbsp;</td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row33">
            
            <td class="column3 style18 s style15" colspan="11">&nbsp;名義変更費用</td>
            <td class="column14 style208 s style15" colspan="9">{$_POST['3_7']}&nbsp;&nbsp;</td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row34">
            
            <td class="column3 style18 s style15" colspan="11">&nbsp;希望ナンバー費用</td>
            <td class="column14 style208 s style15" colspan="9">{$_POST['3_8']}&nbsp;&nbsp;</td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row35">
            
            <td class="column3 style18 s style15" colspan="11">&nbsp;{$_POST['30_1']}</td>
            <td class="column14 style208 n style15" colspan="9">{$_POST['3_9']}&nbsp;&nbsp;</td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row36">
            
            <td class="column3 style18 s style15" colspan="11">&nbsp;{$_POST['30_2']}</td>
            <td class="column14 style208 n style15" colspan="9">{$_POST['3_10']}&nbsp;&nbsp;</td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row37">
            
            <td class="column3 style18 s style15" colspan="11">&nbsp;{$_POST['30_3']}</td>
            <td class="column14 style208 s style15" colspan="9">{$_POST['3_11']}&nbsp;&nbsp;</td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row38">
            
            <td class="column3 style18 s style15" colspan="11">&nbsp;{$_POST['30_4']}</td>
            <td class="column14 style208 s style15" colspan="9">{$_POST['3_12']}&nbsp;&nbsp;</td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row39">
            
            <td class="column3 style18 s style15" colspan="11">&nbsp;{$_POST['30_5']}</td>
            <td class="column14 style208 s style15" colspan="9">{$_POST['3_13']}&nbsp;&nbsp;</td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row40">
            
            <td class="column2 style68 f style15" colspan="12">諸費用（ 課税分）  小計③&nbsp;&nbsp;</td>
            <td class="column14 style68 f style15" colspan="9">￥<span class="english">{$_POST['3_14']}</span>&nbsp;&nbsp;</td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row41">
            
            <td class="column2 style209 s style15-bk" colspan="12">諸費用合計②+③&nbsp;&nbsp;</td>
            <td class="column14 style209 f style15-bk" colspan="9">￥<span class="english">{$_POST['3_15']}</span>&nbsp;&nbsp;</td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row42">
            
            <td class="column1 style83 f style84-bk" colspan="22"></td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row43">
            
            <td class="column1 style68 s style70-bk" colspan="13">小計＝①＋②＋③&nbsp;&nbsp;</td>
            <td class="column14 style68 f style78-bk" colspan="9">￥<span class="english">{$_POST['3_16']}</span>&nbsp;&nbsp;</td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row44">
            
            <td class="column1 style68 s style73-bk" colspan="13">（内消費税①と③の10%）</td>
            <td class="column14 style68 f style80-bk" colspan="9">￥<span class="english">{$_POST['3_17']}</span>&nbsp;&nbsp;</td>
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row45">
            
            <td class="column1 style209 s style76-bk" colspan="13">支払合計金額（ 税込）</td>
            <td class="column14 style209 f style82-bk " colspan="9">￥<span class="english">{$_POST['3_18']}</span>&nbsp;&nbsp;</td>
            <td class="column37 style2 null"></td>
            
            

            
            
          </tr>
          <tr class="row46">
            
            <td class="column1 style92-bk null style84-bk" colspan="36"></td>
            <td class="column37 style1 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row47">
            <td class="column1 style93 s style66" rowspan="3" style="line-height:18px;}">振込先</td>
            <td class="column2 style91 s style25" colspan="15" rowspan="3" style="line-height:20px;">{$_POST['4_1']}</td>
            <td class="column21 style97 s style24" rowspan="3"  style="line-height:14px;}">&nbsp;特記事項</td>
            <td class="column22 style204 s style25-bk" colspan="19" rowspan="3" style="line-height:20px;">
<br>表題の通り、見積もり書をお送りいたしますので、ご査収ください。<br />
ご不明点がございましたら、{$_POST['4_3']}までお問合せください。<br />
今後ともどうぞよろしくお願いいたします。</td>
            <td class="column37 style2 null"></td>
          </tr>

          <tr class="row49">
            
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>
          <tr class="row50">
            
            <td class="column37 style2 null"></td>
            
            
            
            
            
          </tr>

        </tbody>
    </table>
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
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->setPDFVersion('1.4');
// set document information
$pdf->setCreator(PDF_CREATOR);
$pdf->setAuthor('@DM Fujiba');
$pdf->setTitle('@DM Fujiba 見積書');
$pdf->setSubject('@DM Fujiba 見積書');
//$pdf->setKeywords('TCPDF, PDF, example, test, guide');

// set default header data
//$pdf->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 033', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
//$pdf->setMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->setHeaderMargin(PDF_MARGIN_HEADER);
$pdf->setFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->setAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------
//$pdf->SetDisplayMode('fullpage', 'SinglePage', 'UseNone');

//$pdf->SetPrintHeader(false);
//$pdf->SetPrintFooter(false);

// add a page
//$pdf->AddPage();
$pdf->AddPage('P','A4');
//$pdf->Cell(0, 0, 'A4 PORTRAIT', 1, 1, 'C');


// set default font subsetting mode
$pdf->setFontSubsetting(false);
// convert TTF font to TCPDF format and store it on the fonts folder
//$fontname = TCPDF_FONTS::addTTFfont('/Applications/MAMP/htdocs/eccube-mylocal/ec-cube/src/tcpdf/fonts/fujiba//meiryo-bold.ttf', 'TrueTypeUnicode', '', 96);

// use the font
//$pdf->SetFont($fontname, '', 14, '', false);

//$pdf->SetCompression(true); 
$pdf->setFont('cid0jp', '', '12','');
//$pdf->setFont('meiryo', '', '12','');



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


//hanko
$pdf->Image($_SERVER['DOCUMENT_ROOT'] . $_POST['uploadPath'] . '/html/upload/hanko/' . $_POST['customerId'] . '.png',  175, 40, 15, 15, '', 'http://www.tcpdf.org', '', false, 300);
//$pdf->Image('http://localhost:8888/eccube-mylocal/ec-cube/html/upload/hanko/20003.png', 175, 40, 15, 15, '', 'http://www.tcpdf.org', '', false, 300);

//Logo
//$pdf->Image($_SERVER['DOCUMENT_ROOT'] . $_POST['uploadPath'] . '/html/upload/save_image/companyLogo/' . $_POST['customerId'] . '.png', 14.5, 28, 10, 10, '', 'http://www.tcpdf.org', '', false, 300);
//$pdf->Image('http://localhost:8888/eccube-mylocal/ec-cube/html/upload/save_image/companyLogo/20003.png', 14.5, 28, 10, 10, '', 'http://www.tcpdf.org', '', false, 300);



//$pdf->Image($_SERVER['DOCUMENT_ROOT'] . '/eccube-mylocal/ec-cube/html/upload/save_image/companyLogo/20002.png', 155, 11, 22, 18, '', 'http://www.tcpdf.org', '', false, 300);

//$pdf->Image($_SERVER['DOCUMENT_ROOT'] . $_POST['uploadPath'] . '/html/upload/save_image/companyLogo/' . $_POST['customerId'] . '.png', 125, 190, 30, 20, '', 'http://www.tcpdf.org', '', false, 300);

/*
$pdf->Image('https://picture1.goo-net.com/056/0561562/J/0561562A30241024W00205.jpg', 125, 151, 34, 25, '', 'http://www.tcpdf.org', '', false, 300);
$pdf->Image('https://picture1.goo-net.com/056/0561562/J/0561562A30241024W00205.jpg', 160, 151, 34, 25, '', 'http://www.tcpdf.org', '', false, 300);

$pdf->Image('https://picture1.goo-net.com/056/0561562/J/0561562A30241024W00205.jpg', 125, 177.5, 34, 25, '', 'http://www.tcpdf.org', '', false, 300);
$pdf->Image('https://picture1.goo-net.com/056/0561562/J/0561562A30241024W00205.jpg', 160, 177.5, 34, 25, '', 'http://www.tcpdf.org', '', false, 300);

$pdf->Image('https://picture1.goo-net.com/056/0561562/J/0561562A30241024W00205.jpg', 125, 204, 34, 25, '', 'http://www.tcpdf.org', '', false, 300);
$pdf->Image('https://picture1.goo-net.com/056/0561562/J/0561562A30241024W00205.jpg', 160, 204, 34, 25, '', 'http://www.tcpdf.org', '', false, 300);//
*/
//$pdf->Image('https://picture1.goo-net.com/056/0561562/J/0561562A30241024W00205.jpg', 100, 300, 40, 30, 'JPG', 'http://www.tcpdf.org', '', true, 150, '', false, false, 1, false, false, false);

/*
$pdf->Image($_POST['14_1'], 125, 151, 34, 25, '', 'http://www.tcpdf.org', '', false, 300);
$pdf->Image($_POST['14_2'], 160, 151, 34, 25, '', 'http://www.tcpdf.org', '', false, 300);

$pdf->Image($_POST['14_3'], 125, 177.5, 34, 25, '', 'http://www.tcpdf.org', '', false, 300);
$pdf->Image($_POST['14_4'], 160, 177.5, 34, 25, '', 'http://www.tcpdf.org', '', false, 300);

$pdf->Image($_POST['14_5'], 125, 204, 34, 25, '', 'http://www.tcpdf.org', '', false, 300);
$pdf->Image($_POST['14_6'], 160, 204, 34, 25, '', 'http://www.tcpdf.org', '', false, 300);
*/

$pdf->writeHTML($html, true, 0, true, 0);
//$pdf->Write(5, $html, '', 0, '', false, 0, false, false, 0);
//$pdf->Output($_SERVER['DOCUMENT_ROOT'] . '/eccube-mylocal/ec-cube/html/upload/quotation/' . $_POST['customerId'] . '/' . $_POST['pdfFileName'] . '.pdf', 'FI');

$pdf->Output($_SERVER['DOCUMENT_ROOT'] . $_POST['uploadPath'] . '/html/upload/quotation/' . $_POST['customerId'] . '/' . $_POST['pdfFileName'] . '.pdf', 'FI');

//$pdf->Output($_SERVER['DOCUMENT_ROOT'] . '/eccube-mylocal/ec-cube/html/upload/contract/20002/test.pdf', 'FI'); //for debug
//$pdf->Output($_SERVER['DOCUMENT_ROOT'] . '/dm/html/upload/quotation/1/test.pdf', 'FI'); //for debug

