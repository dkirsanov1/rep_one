<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-03 11:34:50
         compiled from "D:\web\server2go\htdocs\template\header_canvas.html" */ ?>
<?php /*%%SmartyHeaderCode:172505545eba18e6548-50916574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b27988b5b5a4d141647a4a99dfd695bbeb53acb' => 
    array (
      0 => 'D:\\web\\server2go\\htdocs\\template\\header_canvas.html',
      1 => 1430645688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172505545eba18e6548-50916574',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5545eba193dc25_51001830',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5545eba193dc25_51001830')) {function content_5545eba193dc25_51001830($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<title>Тег &lt;canvas&gt; | htmlbook.ru</title>
	<link rel="stylesheet" type="text/css" href="css/7.css">
  </head>
  <body>
    <header>
	  <a href="/" rel="home"><img src="img/logo.png" alt="htmlbook.ru" class="logo" width="184" height="66"></a>
	  <nav>
	    <ul id="topmenu">
		  <li class="hide"><a href="#main"><i class="icon icon-main"></i><br>Основное</a></li>
		  <li class="show"><a href="#html"><i class="icon icon-html"></i><br>HTML</a></li>
		  <li class="hide"><a href="#css"><i class="icon icon-css"></i><br>CSS</a></li>
		  <li class="hide"><a href="#site"><i class="icon icon-site"></i><br>Сайт</a></li>
		</ul>
        
		<div id="main" class="tile hide">
		  <ul>
		    <li><a href="/content" >Статьи</a></li>
		    <li><a href="/blog" >Блог</a></li>
			<li><a href="/practical" >Практикум</a></li>
			<li><a href="/test" >Тесты</a></li>
			<li><a href="http://htmlforum.ru" rel="nofollow">Форум</a></li>
		  </ul>
		</div>
		
		<div id="html" class="tile show">
		  <ul>
		    <li><a href="/samhtml" >Самоучитель HTML</a></li>
			<li><a href="/html" class="active">Справочник по HTML</a></li>
			<li><a href="/xhtml" >XHTML</a></li>
			<li><a href="/html5" >HTML5</a></li>
		  </ul>
		</div>
		
		<div id="css" class="tile hide">
		  <ul>
			<li><a href="/samcss" >Самоучитель CSS</a></li>
			<li><a href="/css" >Справочник по CSS</a></li>
			<li><a href="/faq" >Рецепты CSS</a></li>
			<li><a href="/css3" >CSS3</a></li>
		  </ul>
		</div>
		
		<div id="site" class="tile hide">
		  <ul>
			<li><a href="/samlayout" >Вёрстка веб-страниц</a></li>
			<li><a href="/layout" >Макеты</a></li>
			<li><a href="/webserver" >Веб-сервер</a></li>
		  </ul>
		</div>
	  </nav>
			
	  <form action="/search/" id="cse-search-box">
	    <input type="text" name="as_q" id="q" autocomplete="off" placeholder="Поиск по сайту">
		<input type="image" src="img/find.png" alt="Найти" class="find">
	  </form>
	</header><?php }} ?>
