<?php require_once("gzipstart.php"); ?><html>
<head>
<title>Advanced Formatting</title>
<?php require_once('head.php'); ?>
</head>
<body>
<div class="cntr">
<?php require_once('menu.php'); ?>
<h1>Computer Code and Interactions</h1>
<p>At times we want to format computer code, or keyboard input and computer output. This is great for technical information, such as how to login to a computer, how to setup an Arduino, or even tutorials on how to make a website.
<p>There are several tags, which tend to give the same formatting result in most browsers (which is why people will use them interchangably). However, browsers <i>may</i> display them differently, and some might even do special things to try to be helpful. For that reason, all of them will be listed here.
<p>Below is a list of these tags and what they're used for:
<ul>
<li>&lt;kbd&gt; - This is for <kbd>Keyboard Input</kbd></li>
<li>&lt;samp&gt; - This is for <samp>Sample Computer Output</samp></li>
<li>&lt;code&gt; - This is for <code>computer code</code></li>
</ul>
<h1>Preformatted Text</h1>
<p>Preformatted text is for text that is already formatted with whitespace. This means that it will keep all spaces and linebreaks that are in the inside text, whereas in normal HTML linebreaks are ignored and extra whitespace is removed. It is done by using the "&lt;pre&gt;" tag, and using the "&lt;/pre&gt;" end tag to define where to stop. This is often used to wrap the tags in the above section, since you don't have to manually specify line breaks - you just add a newline. It can be used on it's own, and will often be formatted similar to the above code. In fact, all code examples use this tag! Below is an example:
<pre>
&lt;pre&gt;
This   text
Is Preformatted
     Using the
pre tag
&lt;/pre&gt;
</pre>
<p>Please note that tags inside will still be evaluated, so if you wrap a word with the &lt;b&gt; tag it will bold the text, like so:
<pre>
This preformatted text has
    <b>BOLD</b> text
</pre>
<h1>Marking Variables</h1>
<p>In math and code we have variables. Sometimes we want to specify these variables. We do this by use the &lt;var&gt; tag. This tag will tell the browser to format the variable. The formatting can depend on the browser. Below is an example
<pre>
5&lt;var&gt;x&lt;/var&gt; + 3 = 28
</pre>
<p>Try adding some preformatted text to your web page.
<p>Next we'll learn how to <a href="links.php">Link Pages</a>.
</div>
<?php require_once ('foot.php'); ?>
</body>
</html><?php require_once("gzipend.php"); ?>