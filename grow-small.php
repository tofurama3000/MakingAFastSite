<?php require_once("gzipstart.php"); ?>
<html>
<head>
<title>Grow Small</title>
<?php require_once('head.php'); ?>
</head>
<body>
<div class="cntr">
<?php require_once('menu.php'); ?>
<h1>Growing Small</h1>
<p>As the internet's matured, pages have gotten bigger and bigger. This means more messages needing to be sent, more time waiting for important content, and more loads on both clients and servers. Yet, fast sites tend to grow larger slower than contemporaries - for the initial loads at least. You don't have to get small all at once, but there are some tricks that you can use to decrease the size of downloads for clients.
<h2>Remove Duplicate Duplicate Data</h2>
<p>We're all guilty of creating duplicate code, and duplicate data, and duplicate content, including me. Yet, we sometimes forget how much that duplication costs us. Just look at the above header. I have the word "duplicate" twice. How much does that cost? Each letter in that word is a character, and we'll say each character is 1 byte. So, by writing "duplicate" twice in the header, I cost myself an extra 10 bytes! (remember to count the extra whitespace).
<p>You might be saying, "10 bytes, that's nothing!". Now, count how many bytes were spent on this page alone with the word "duplicate" (you don't need to count variants like "duplication"). Now look at your CSS. Do you repeat a class name a lot? Do multiple classes share identical definitions? Do you use really big class names like "theclassforallfooterdivs" instead of short names like "all"? If you said "yes" to any of those questions, you're not alone; I've done those too.
<p>We all make duplicate data, and sometimes it's not bad. We are constrained by the quirks of the language we have. This means we sometimes need to choose between the lesser of two sets of dupllicated data, such as 15 lines of code that varies by 3 words. In those situations, "best" thing to do changes since it depends on policies, guildlines, code size, readability, etc.
<p>Below are some guildlines I've found have helped me in determining what to change and when to change something to make stuff smaller:
<ol><li>Our final file size is significantly smaller</li><li>We don't break anything</li><li>It's still easy to maintain</li></ol>
<p>For example, which of the following is smaller?
<pre>
.really-long-class-name{
	font-size:18pt;
	font-weight:bold;
	color:red;
	height:5px;
}
.really-long-class-name-2{
	font-size:18pt;
	font-weight:bold;
	color:blue;
	height:15px;
}
</pre>
<pre>
.really-long-class-name,.really-long-class-name-2{
	font-size:18pt;
	font-weight:bold;
}
.really-long-class-name{
	color:red;
	height:5px;
}
.really-long-class-name-2{
	color:blue;
	height:15px;
}
</pre>
<p>The answer is that the first option is less bytes, even though we combined two duplicate properties. The reason is, our class names are way too long; if we shortened them then the second would be smaller.
<p>But, will we break anything by doing it? In this example, probably not. But in a more complete CSS file, we'd have to check the rest of the file and make sure we test it.
<p>What about maintainability? The first one wins since it's easy to see what affects what, and if you ever need to change the font size of only one of the classes, it'll be easier in the first one.
<p>Next we'll go over <a href="asset-management.php">Asset Management</a>.
</div>
<?php require_once ('foot.php'); ?>
</body>
</html>
<?php require_once("gzipend.php"); ?>