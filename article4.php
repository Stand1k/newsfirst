<!DOCTYPE html>
<html lang="eu">
<head>
<?php
$title = "Слегка злобный скрипт для проверки паролей на сложность"; 
require_once "bloks/head.php"; 
?>
</head>
<body >
<?php require_once "bloks/header.php" ?>

		
		<div id="wrapper">
		<div id="leftCol">
		<div id="bigArticle">
		<h1>Слегка злобный скрипт для проверки паролей на сложность</h1>
			<img id="img_article" src="img/pass-checker.png" alt="YСлегка злобный скрипт для проверки паролей на сложность" title="Слегка злобный скрипт для проверки паролей на сложность"><br>
			<p>Пользователь <a href="https://github.com/SirCmpwn">Drew DeVault </a> опубликовал на GitHub любопытный скрипт на Python для проверки сложности пароля, задаваемого при регистрации. <br><br>

Для проверки используются не только стандартные методы: </p>
				<div class="div_img">	
			<img id="img_article2" src="https://tproger2.azureedge.net/wp-content/uploads/2017/02/password-strength-checker.gif" alt="">
				</div>
			<p>
			Скрипт проверяет, не подходит ли вводимый пароль к другим популярным сервисам, таким как, например, Twitter, Facebook, GitHub и Reddit. Если пароль подходит, то не принимает его, как совпадающий с другим аккаунтом, что является некорректным с точки зрения безопасности — лучше использовать разные пароли на разных сайтах, чтобы в случае взлома одного из них, пароль не подошёл бы к другим.</p><br><br>

<article>Использование</article>
			
<p>Пожалуйста, не используйте этот скрипт на самом деле.</p>


<div id="code">



<div class="number">
<div class="n_1">1</div>
<div class="n_2">2</div>
<div class="n_1">3</div>
<div class="n_2">4</div>
</div>
<div class="global">
<div id="code_line1">
<span class="line"> >>> </span>
<span class="text_fr">from</span>
<span class="text_ev">evilpass</span>
<span class="text_im">import</span>
<span class="text_c_p">check_pass</span>
</div>

<div id="code_line2">
<span class="line"> >>> </span>
<span class="er">errors</span>
<span class="dor">=</span>
<span class="c_p">check_pass</span>
<span class="dus">(</span>
<span class="green">"password"</span>
<span>,</span>
<span class="green">"email address"</span>
<span>,</span>
<span class="green">"username"</span>
<span class="dus">)</span>
</div>


<div id="code_line3">
<span class="line"> >>> </span>
<span> errors </span>
</div>

<div id="code_line4">
	<span>[</span>
	<span class="green">"Your password must be at least 8 characters long"</span>
	<span>]</span>
</div>
</div>


</div>

<article>Использовать один пароль для нескольких аккаунтов — плохо</article><br>

<p>Просто перестаньте так делать. Используйте <a href="http://keepass.info/">менеджер паролей</a> .</p><br>		
		<article>Планы на будущее</article><br>


		<ul>
			<li>Использовать прокси для обхода ограничения количества попыток логина на внешних проверяемых сайтах.</li><br>
			<li>Добавить другие сервисы для проверки.</li><br>
			<li><del>Добавить сохранение логинов и паролей, которые подошли, в базе данных для дальнейших злобных целей.</del></li><br>
			
		</ul>

				<i>Источник: репозиторий <a href="https://github.com/SirCmpwn/evilpass">evilpass</a></i> <br>
	<div class="tab"></div>
		</div>
			
		<div class="clear"><br></div>

<!-- 	<div id="rightCol_4">
			<div class="banner">

				<img src="/img/banner_1.gif" alt="Баннер 1" title="Баннер">
			</div>
			<div class="banner">
				<img src="/img/banner_2.png" alt="Баннер 2" title="Баннер">
			</div>
			<div class="banner">
				<img src="http://sakhalife.ru/wp-content/uploads/2015/03/img9.jpg" alt="Баннер 2" title="Баннер">
			</div>
		</div> -->

	</div>
	</div>

		<?php require_once "bloks/footer.php" ?>



</body>
</html>