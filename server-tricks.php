<?php require_once("gzipstart.php"); ?>
<html>
<head>
<title>Server Tricks</title>
<?php require_once('head.php'); ?>
</head>
<body>
<div class="cntr">
<?php require_once('menu.php'); ?>
<h1>Server Tricks</h1>
<p>Not everything needs to be done in your content; sometimes your server can do just as much to make things smaller if not more. Take this site, it's mostly text, and it's mostly repeatable text. I use normal ASCII, and of that I use English letters, basic punctuation, spaces, and HTML characters - that's not a lot. Also, English is fairly repeatable - just look at how many t's and e's that I used in this paragraph alone! This site would do really well if I did some basic compression, and since it doesn't change a lot it'd thrive from basic caching.
<h2>Compress</h2>
<p>Compression is one of those easy things to do that people forget about. It's easy in the sense that you change some server settings to do it. You'll need to check your server manual, but once you get it setup it'll compress almost all of your assets. GZip compression is the most common, and is the recommended option.
<p>Yes, I said almost. A lot of servers don't mess with what a script (like CGI or PHP) does. The reason is that the server has no idea what's coming out, and by compressing the scrypt it might break something (like, double compression on the server, but the client's only told to decompress once). This means that if you want to do compression of dynamically generated content, you'll need to do a little more work in your scripts.
<p>This site uses PHP to bring in the header, footer, menu, and to do GZip compression. I do my GZip compression as follows:
<pre>
&lt;?php
if(!ob_start("ob_gzhandler")) ob_start();
?&gt;
<i>...
Page content goes here
...</i>
&lt;?php
ob_flush();
?&gt;
</pre>
<p>Pretty simple, right? That's great for anything that's generated from PHP scripts (I usually run mine in Apache). For non-PHP script files (such as images), I use Apache compression settings instead. You'll need to check with your server technology to see what you need to do to enable compression for your site.
<h2>Caching</h2>
<p>Remember how the client requests the server for what it doesn't have? As it turns out, the client also has short term memory loss by default: it doesn't remember what it just saw. This is because clients are made to expect that the same asset will be different the next time it asks, and if it thinks it'll be different it won't remember. However, if we enable caching, then the server will tell clients that it should remember certain files and assets since they won't change that often. Once this is in place, clients will begin to remember files from your site, and this means it won't be spending as much time downloading large assets from your site over and over and over again.
<p>Back to sciens with <a href="measuring.php">Measuring</a>.
</div>
<?php require_once ('foot.php'); ?>
</body>
</html>
<?php require_once("gzipend.php"); ?>