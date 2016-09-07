<?php require_once("gzipstart.php"); ?>
<html>
<head>
<title>Understanding your First HTML</title>
<?php require_once('head.php'); ?>
</head>
<body>
<div class="cntr">
<?php require_once('menu.php'); ?>
<h1>Your First HTML</h1>
<p>As a recap, here's the html you just wrote
<pre>
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;My First Page&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
My first web page!
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Let's go over what's going on in this code.
<h1>Under the Hood</h1>
<p>We start and end with &lt;html&gt; and &lt;/html&gt;. This says we're using HTML. Next, we have the &lt;head&gt; tag, which gives header information for the page. This information isn't shown on the page itself but is very important for how the page works and operates.
<p>We have the &lt;title&gt; tag, which sets the name of the page. This is shown in the browser at the top, in browser history, and is the default name for bookmarks. We then have the &lt;body&gt; tag which is the content to display on the page.
<p>The sentance "My first web page!" is text that the browser displays. You can change this text to change what the browser shows.
<p>Try to make the page say "Welcome to my site! My name is: <i>your name here</i>". Next, change the title of the page to be your name.
<p>Time to organize your sentances with <a href="format-your-text.php">Formatting your Text</a>.
</div>
<?php require_once ('foot.php'); ?>
</body>
</html>
<?php require_once("gzipend.php"); ?>
