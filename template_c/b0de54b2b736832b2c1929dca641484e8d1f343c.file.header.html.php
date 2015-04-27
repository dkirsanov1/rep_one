<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-02 21:36:01
         compiled from "D:\web\server2go\htdocs\template\header.html" */ ?>
<?php /*%%SmartyHeaderCode:2915255451f34a69a87-46283192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0de54b2b736832b2c1929dca641484e8d1f343c' => 
    array (
      0 => 'D:\\web\\server2go\\htdocs\\template\\header.html',
      1 => 1430595358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2915255451f34a69a87-46283192',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55451f34ae2db9_38269730',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55451f34ae2db9_38269730')) {function content_55451f34ae2db9_38269730($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>HTML book</title>
	<link rel="stylesheet" type="text/css" href="css/6.1.css">
    <title>htmlbook.ru | Для тех, кто делает сайты</title>
  </head>
  <body>
    <header>
	  <a href="#"><img src="img/logo.png" alt="htmlbook.ru" class="logo" width="184" height="66"></a>
	  <nav>
	    <ul id="topmenu">
		  <li class="show"><a href="#"><i class="icon icon-main"></i><br>Основное</a></li>
		  <li class="hide"><a href="#"><i class="icon icon-html"></i><br>HTML</a></li>
		  <li class="hide"><a href="#"><i class="icon icon-css"></i><br>CSS</a></li>
		  <li class="hide"><a href="#"><i class="icon icon-site"></i><br>Сайт</a></li>
		</ul>

		<div id="main" class="tile show">
		  <ul>
		  	<li><a href="#">Статьи</a></li>
			<li><a href="#">Блог</a></li>
			<li><a href="#">Практикум</a></li>
			<li><a href="#">Тесты</a></li>
			<li><a href="#">Форум</a></li>
		  </ul>
		</div>
		
		<div id="html" class="tile hide">
		  <ul>
		    <li><a href="#">Самоучитель HTML</a></li>
			<li><a href="#">Справочник по HTML</a></li>
			<li><a href="#">XHTML</a></li>
			<li><a href="#">HTML5</a></li>
		  </ul>
		</div>
		
		<div id="css" class="tile hide">
		  <ul>
		    <li><a href="#">Самоучитель CSS</a></li>
			<li><a href="#">Справочник по CSS</a></li>
			<li><a href="#">Рецепты CSS</a></li>
			<li><a href="#">CSS3</a></li>
		  </ul>
		</div>
		
		<div id="site" class="tile hide">
		  <ul>
			<li><a href="#">Вёрстка веб-страниц</a></li>
			<li><a href="#">Макеты</a></li>
			<li><a href="#">Веб-сервер</a></li>
		  </ul>
		</div>
	  </nav>
    	
	  <form action="/search/" id="cse-search-box">
	    <input type="text" name="as_q" id="q" autocomplete="off" placeholder="Поиск по сайту"><input type="image" src="img/find.png" alt="Найти" class="find">
	  </form>
	</header><?php }} ?>
