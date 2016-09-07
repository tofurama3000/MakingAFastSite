<?php require_once("gzipstart.php"); ?>
<html>
<head>
<title>Building Blocks</title>
<?php require_once('head.php'); ?>
</head>
<body>
<div class="cntr">
<?php require_once('menu.php'); ?>
<h1>Back to the Basics</h1>
<p>To speed up websites, you first need to understand how a page works, the components of it, and how they all interact. I do offer an <p><a href="into-html.php">HTML Primer</a>, but I'm more interested in making websites fast than making them from scratch (although I do that too).
<h1>Three Basic Building Blocks</h1>
<p>Ever heard of the <a href="https://en.wikipedia.org/wiki/Rule_of_three_(writing)">Rule of 3</a>? Basically, it is when things come in groups of three they're more effective and more memorable than groups of other sizes. Apparently, whoever designed the Internet understood this rule, so there are three basic components for even complex websites. These are:
<ul><ol>HTML</ol><ol>CSS</ol><ol>JavaScript</ol></ul>
<p><b>HTML</b> defines the basic structure of your web page. It allows you to say how it's organized, setup links to other pages, and do basic formatting such as create lists, bolds, and italics. Since it's the core of your page, the size of your HTML will affect the speed of your page.
<p><b>CSS</b> determines what your website looks like. It determines colors, fonts, text size, hovers, layout, some animations, etc. It also can affect page speed.
<p><b>JavaScript</b> gives action to your page. This can be countdown clocks, doing live updates/refreshes of the page (such as Google's quick search), animations, reacting to user input, etc. This affects page speed too.
<p>Everything above affects page speed. Images affect page speed too. Ths means we'll need to be smart about what we use, where we use it, and how we use it.
<p>Now, we're just <a href="waiting-for-the-show.php">Waiting for the show</a>.
</div>
<?php require_once ('foot.php'); ?>
</body>
</html>
<?php require_once("gzipend.php"); ?>