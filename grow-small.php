<?php require_once("gzipstart.php"); ?>
<html>
<head>
<title>Grow Small</title>
<?php require_once('head.php'); ?>
</head>
<body onload="load(['losinginches'])">
<div class="cntr">
<?php require_once('menu.php'); ?>
<h1>Growing Small</h1>
<span id="losinginches"></span>
<p>As the internet's matured, pages have gotten bigger and bigger. This means more messages needing to be sent, more time waiting for important content, and more loads on both clients and servers. Yet, fast sites tend to grow larger slower than contemporaries - for the initial loads at least. You don't have to get small all at once, but there are some tricks that you can use to decrease the size of downloads for clients.
<h2>Remove Duplicate Duplicate Data</h2>
<p>We're all guilty of creating duplicate code, and duplicate data, and duplicate content, including me. Yet, we sometimes forget how much that duplication costs us. Just look at the above header. I have the word "duplicate" twice. How much does that cost? Each letter in that word is a character, and we'll say each character is 1 byte. So, by writing "duplicate" twice in the header, I cost myself an extra 10 bytes! (remember to count the extra whitespace).
<p>You might be saying, "10 bytes, that's nothing!". Now, count how many bytes were spent on this page alone with the word "duplicate". Now look at your CSS. Do you repeat a class name a lot? Do multiple classes share identical definitions? Do you use really big class names like "the_class_for_all_footer_divs" instead of short names like "all"? What about your JavaScript? Do you needlessly duplicate code? Are you using really big variable and function names? If you said "yes" to any of those questions, you're not alone; I've done those too.
<p>We all make duplicate data, and sometimes it's not bad. We are constrained by the quirks of the language we have. This means we sometimes need to choose between the lesser of two sets of duplicated data, such as 15 lines of code that varies by 3 words. In those situations, "best" thing to do changes since it depends on policies, guidelines, code size, readability, etc.
<p>Below are some guidelines I've found have helped me in determining what to change and when to change something to make stuff smaller:
<ol><li>Only make the change if the final file size is significantly smaller</li><li>Only make the change if it doesn't break anything</li><li>Only make the change if the code is easy to maintain</li></ol>
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
<p>The answer is that the first option is fewer bytes, even though we combined two duplicate properties. The reason is, our class names are way too long; if we shortened them then the second would be smaller.
<p>Let's say we're trying to change from one of them to the other, what thought process would we go through for the change? We'll, let's go over the questions in order.
<ol><li>Is it significantly smaller? For neither is this true; the examples are off by a few bytes so we don't really care; we want to find the elephants in the room, not the fleas.</li>
<li>2) Does it break anything? Maybe for some reason our CSS only works with the second example, then we'll need to stay with it. Likewise, if our CSS only works with the first example for some reason, then we'll need to stay with it. If it works with both, it doesn't matter. This requires experimentation to decide.</li>
<li>3) What about maintainability? With the first one it's easy to see what code affects what elements and it's really easy to make a change that affects only one class. However, the second example includes the nicity that the classes are grouped together, so if we want to make a change that affects both it's really simple. It all depends on if the classes are supposed to be similar in their CSS or not.</li></ol>
<p>Going small is a strange combination of art and science. Small code isn't always the "best" option since it can cause maintainability issues or reliability issues. At the same point, we do want code to be small enough that we can keep the load times for a site low. The trick is to think about what you're doing and understand its potential impact.
<p>Now let's get organized with <a href="asset-management.php">Asset Management</a>.
</div>
<?php require_once ('foot.php'); ?>
</body>
</html>
<?php require_once("gzipend.php"); ?>