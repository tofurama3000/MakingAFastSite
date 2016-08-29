<?php require_once("gzipstart.php"); ?>
<html>
<head>
<title>Into HTML</title>
<?php require_once('head.php'); ?>
</head>
<body>
<div class="cntr">
<?php require_once('menu.php'); ?>
<h1>Purpose of HTML</h1>
<p>The point of a website is to give information - or basically it tells the computer how to structure whatever a human wants to share with other humans. Some information is funny, such as pervasive memes or YouTube videos. Sometimes it's full of opinions and experiences, such as Tweets on Twitter or comments on Facebook. It also can be very helpful, such as locations of bases during the zombie apocalypse.
<p>But browsers don't understand human languages very well (if they did, then we'd be in danger of a robot uprising). So, us humans must tell computers how to structure the information for display. We must tell it where a paragraph starts and ends, where to put the menu, what is news and where that goes, what's a list, and so on.
<p>This structuring of information is done with HTML. HTML is done with tags. A tag is angle brackets &lt; &gt; with a word(s) in-between. Some tags have end tags, or tags that have a slash (/) right after the &lt; (end tags just say "this is the end of the tag's content"). Each browser only understands certain tags, and will ignore any tags it doesn't understand. A standard of tags and what they do have been made, and revised, and revised some more. This is why we have "versions" of HTML, it's basically the latest standard that different people have agreed on. Currently, the latest standard is HTML5. (This site will cover many of them, but not all of them. If you want a complete list, you can go to <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">MDN's reference</a>.)
<h1>Getting Started</h1>
<p>To get started, open up a text editor. On Windows, you can use Notepad. On Mac, you can use TextEdit. On Linux (I'll assume Ubuntu), you can use gEdit. Once you open your editor, enter the following:
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
Save this file as "index.html". Then, open it up in a web browser (this is done by double-clicking the file you just saved). Congratulations! You made a web page!
<p>We'll talk about what you did in <a href="understand-your-first-html.php">Understanding Your First HTML</a>.
</div>
<?php require_once ('foot.php'); ?>
</body>
</html>
<?php require_once("gzipend.php"); ?>
