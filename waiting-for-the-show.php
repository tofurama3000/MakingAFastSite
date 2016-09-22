<?php require_once("gzipstart.php"); ?>
<html>
<head>
<title>Waiting for the Show</title>
<?php require_once('head.php'); ?>
</head>
<body onload="load(['tv','tree'])">
<div class="cntr">
<?php require_once('menu.php'); ?>
<h1 class="c2Med r">No Light, No Camera, No Action</h1>
<span id="tv"></span>
<p>Once we get the HTML page, we don't immediately pop it up on screen. No matter how much fun that sounds, doing that would be a nightmare for a user! Immagine if Google's homepage looked indistinguishable from a text file, or Amazon was just a long list of text links. Most users would be pretty upset (I say most since some are reminiscent of the DOS era). So, the browser has to wait, but what's it waiting for?
<h1 style="clear:none;">Critical Rendering Path</h1>
<p>This is just a quick, summary where we gloss over just enough that you get the main idea. I strongly recommend reading <a href="https://developers.google.com/web/fundamentals/performance/critical-rendering-path/?hl=en">Google's documentation</a> on this since it's A+ material.
<h2>Trees</h2>
<span id="tree"></span>
<p>No, it's not trees that we plant or fake trees from <i>Dr. Suess' The Lorax</i> (the movie anyway). This is a way of structuring and storing data and is used by browsers to represent HTML and CSS once it's read the files. Basically, before we can render, we need to represent all HTML and CSS being used, and before we can do that we have to load all HTML and CSS we're told to. If we have 5 CSS file we're told to load, then we need to load all 5 files before we can display the page. If our HTML file takes five messages to receive we need to wait for all five messages. 
<p>Once we've made both the HTML and the CSS-trees, we can combine them to create the HTML elements that are now formatted how we want. We then go through the rendering process which has its own process.
<h2 style="clear:none;">JavaScript</h2>
<p>JavaScript itself can be a performance gremlin. If you aren't careful, it'll eat up the speed of your page. By default, any time JavaScript is encountered on a page, the browser will stop, parse and run the JS, and then continue (Microsoft Edge has some <a href="https://blogs.windows.com/msedgedev/2016/06/22/javascript-performance-updates-anniversary-update/#4M4CESQQmaxSxA2w.97" target="_blank">Deferred Parsing</a>, but only for very special cases). This blocking happens at the occurrence of any &lt;script&gt; tag, and if JavaScript is in an external file it'll wait for that file to load too.
<p>Luckily, the workaround for external files is you add the <code>async</code> property to the &lt;script&gt; tag. Unluckily, this makes it asynchronous, and if you've worked with asynchronous programming you know it means that you never know <i>when</i> something happens. This has been a hurdle for me when I need to load Angular, jQuery, and custom files in a specific order, since once the async tag is introduced there is no guarantee what order they'll come in. To work with this, I combined the files into one file on the server side so that the JavaScript could be loaded asynchronously and the requisite order could be matched at the same time.
<p>Let's <a href="make-the-show-faster.php">Make the Show Faster</a>.
</div>
<?php require_once ('foot.php'); ?>
</body>
</html>
<?php require_once("gzipend.php"); ?>