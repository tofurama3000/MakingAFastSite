<?php require_once("gzipstart.php"); ?>
<html>
<head>
<title>Building Blocks</title>
<?php require_once('head.php'); ?>
</head>
<body>
<div class="cntr">
<?php require_once('menu.php'); ?>
<h1>Three Basic Building Blocks</h1>
<p>Ever heard of the <a href="https://en.wikipedia.org/wiki/Rule_of_three_(writing)">Rule of 3</a>? Basically, it is when things come in groups of three they're more effective and more memorable than groups of other sizes. Apparently, whoever designed the Internet understood this rule, so there are three basic components for even complex websites. These are:
<ul><ol>HTML</ol><ol>CSS</ol><ol>JavaScript</ol></ul>
<p><b>HTML</b> defines the basic structure of your web page. It allows you to say how it's organized, setup links to other pages, and do basic formatting such as create lists, bolds, and italics.
<p><b>CSS</b> determines what your website looks like. It determines colors, fonts, text size, hovers, layout, some animations, etc.
<p><b>JavaScript</b> gives action to your page. This can be countdown clocks, doing live updates/refreshes of the page (such as Google's quick search), animations, reacting to user input, etc. 
<p>However, when you're working with limited space, say 10KB, you start looking at the browser to do more of the heavy lifting, and you have to make compromises. If your site is mostly text based, like this one, you care more that the text is there legibly than you do about really cool animations. Please note this doesn't mean you have to loose functionality, you just might need to change how you do it. If you have a search bar, you may decide it's just fine to redirect to a results page via a form submission instead of doing 4KB+ of JavaScript to have Ajax load it dynamically. You still have search functionality, but it's just different.
<p>So, lets' get started with <a href="optimization-basics.php">Optimizing Basics</a>.	
</div>
<?php require_once ('foot.php'); ?>
</body>
</html>
<?php require_once("gzipend.php"); ?>