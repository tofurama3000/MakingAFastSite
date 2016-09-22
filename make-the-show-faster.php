<?php require_once("gzipstart.php"); ?>
<html>
<head>
<title>Make the Show Faster</title>
<?php require_once('head.php'); ?>
</head>
<body onload="load(['jshero']);">
<div class="cntr">
<?php require_once('menu.php'); ?>
<h1>Remove Render Blocks</h1>
<p>We already discussed the <code>async</code> property for JavaScript. Unfortunately, we don't have that option for CSS. This means we have a few options:
<ul>
<li>Combine files server side</li>
<li>Use JavaScript to asynchronously load</li>
<li>Use the media attribute in &lt;link&gt; to make CSS be conditionally render blocking instead of permanently render blocking</li>
</ul>
<h1>Combine files server side</h1>
<p>This doesn't do too much, but it's by far the easiest. Basically, you take the CSS that you're going to send and have it be taken from multiple requests to a single request. It probably won't be done in one response, but it'll probably be faster than 5 or 6 distinct requests.
<h1>JavaScript To the Rescue?</h1>
<span id="jshero"></span>
<p>A simple way to solve this problem is to use JavaScript to load CSS asynchronously. This can be done by simply having a script that adds a &lt;link&gt; tag to the page. This will need to be after the page is loaded or through an asynchronous JavasScript script. But, we have a problem: not everyone can use JavaScript! That means you'll need to add a &lt;noscript&gt; tag to your page that has a &lt;link&gt; tag.
<p>Another issue is you are deferring the loading of your CSS. Your page is loading without CSS - except the inline stuff. The solution (which will be the case for all solutions that really help with page speed) is to prioritize which CSS should be loaded initially and be render blocking, and which CSS should be deferred for loading. This can be relatively easy if you're pages are so big that the footer is never visible, or you have elements that are hidden until user interaction; you just don't load all the CSS that makes those pretty initially (but do load enough that hidden elements aren't visible).
<p>Overall, it's a good choice to defer your CSS loading, but it does require some consideration in how you do it, and what you do it with.
<h1>Media Attribute</h1>
<p>This is the recommended method for most cases. Remember how CSS needs to be parsed before anything is displayed? That includes all CSS, including CSS that only applies to printing. Wait, even CSS that only applies to printing has to be loaded and parsed? Couldn't the browser only load what's needed to show the screen? The answer: sure, if you tell it. Remember, the client only knows what you tell it, and it doesn't like to deviate concerning file loading with the fear that it may not get what's needed. This means that in order for it to only block rendering for what's needed, we need to tell it what it can ignore and when.
<h2>The <code>media</code> property</h2>
<p>If you have media queries in your CSS, it's fairly easy to split it out. You probably have a series of <code>print</code> elements, and if your site is responsive you probably have some CSS based off of different screen sizes. You would then take the CSS for each media query, but it in its own file, and then add the same query in the media property in the link tag. The browser will then look, and only block rendering for resources that are required for current media matches; otherwise, it will work on that CSS when it's not doing something critical - like working on the critical rendering path.
<p>Ex. Let's say I had the following:
<pre>
media print{
	color: red;
}
</pre>
<p>I could then put that CSS in print.css, and my link tag would look like the following:
<pre>
&lt;link href="print.css" media="print"&gt;
</pre>
<p>That's all that there is to it.
<p>Now it's time to <a href="grow-small.php">Grow Small</a>
</div>
<?php require_once ('foot.php'); ?>
</body>
</html>
<?php require_once("gzipend.php"); ?>
