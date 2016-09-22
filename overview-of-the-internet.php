<?php require_once("gzipstart.php"); ?>
<html>
<head>
<title>Overview of the Internet</title>
<?php require_once('head.php'); ?>
</head>
<body onload="load(['request','response','partOfFile']);">
<div class="cntr">
<?php require_once('menu.php'); ?>
<h1>Internet 101</h1>
<p>I'm not going to give you a huge in-depth dive into the inner workings of the Internet and the differences between TCP and DNS and why IE5 is the bane of all web developers due to such and such reason. We're not going to worry about that, but we do need to know the overall picture of what happens when your computer loads a web page. Once you understand this, you'll understand why I say "small sites loads fast, fast sites loads smart".
<h2>The Request</h2>
<span id="request"></span>
<p>Anytime you want something from someone else, you ask. It's the same thing for computers: if a computer wants something on another computer it asks. That doesn't mean that it'll get it (humans don't always give you what you want either), but that's the basic idea. Loading a web page is a series of "Other computer, I want <i>this</i>, will you please give it to me". Anytime when a computer is loading a web page, if it finds out it needs something it doesn't have it'll try to ask someone so it can have it. This includes CSS files, JavaScript files, Images, iframes, etc. In the context of the web, the computer that's asking is the <i>client</i>, and the computer that's being asked is the <i>server</i>.
<h2>The Response</h2>
<span id="response"></span>
<p>Once we asked for something, we need to wait for that person to give it to us. They can say "no, you won't get that for reason <i>blah</i>", but we'll assume that they're being especially nice today and won't say "no". Let's say we ask for the home page of a website (usually called "index.html" or something similar). The server that hosts the website will look at all of its files to find the right one. Sometimes it has to do "magic" with a database to get everything (like the latest news for a news site). Eventually, it will get the file all ready and then send it over the network to our computer.
<h2>The Complication</h2>
<span id="partOfFile"></span>
<p>Great, so we got our home page, and we start looking at it, and we find that we need some CSS, JavaScript, and Images, and - wait, I only got part of the page. What's going on here? Well, as it turns out computers can only send so much data at a time. And, it can vary how much data is allowed to be sent over at a time, depending on the hardware. This means that if something is too large to send over in one message, it'll be split up and sent in multiple messages - just like a text message. When this happens, the client has to wait for the rest of the messages to come in so that it can read anything (it's hard for a computer to read only half an HTML file, it can only read the full file). This means that if something is too big, it'll take longer to load.
<h2>The Resolution</h2>
<p>Ok, we waited for another couple of milliseconds and got another message with the rest of the page. We put the messages together and now we can see what we really need to ask for. Well, it looks like I need <code>main.css</code> so I'll ask for that. Ok, it looks like I need <code>custom.css</code>, I'll ask for that. I need <code>main.js</code>, I'll ask for that. Wait, why am I asking for everything separately instead of all at once? If everything's small enough, wouldn't it be better to just get it all in one message rather than three or more?
<p>As it turns out, the client can't ask for more than one thing at a time because it was only told how to ask for one thing at a time. When we use a &lt;link&gt; or &lt;img&gt; or &lt;script&gt; tag, we're telling the client "You'll need to load a file by asking this server for this file". The client only knows how to load the file by asking the server there for the file it was told to ask for. If the client tries to ask any differently, the server may not understand, and then the client won't get the needed file. This means that each separate &lt;link&gt; or &lt;img&gt; or &lt;script&gt; will result in an additional request and wait for an additional response, even if it could all be sent back in one message. Eventually, the client will get everything it needs to, but too many linked files could slow the page down quite a bit, even if the total page size is small.
<p>Luckily, there are multiple ways to solve the problems presented here. 
<p>Up next, <a href="waiting-for-the-show.php">Waiting for the Show</a>.
</div>
<?php require_once ('foot.php'); ?>
</body>
</html>
<?php require_once("gzipend.php"); ?>