<?php require_once("gzipstart.php"); ?>
<html>
<head>
<title>Final Thoughts</title>
<?php require_once('head.php'); ?>
</head>
<body onload="load(['fastdev','smile'])">
<div class="cntr">
<?php require_once('menu.php'); ?>
<h1>Don't Obsess</h1>
<p>With all of these optimizations and techniques, its really easy to get caught up scrutinizing every last bit or tyring to get as many frames per second in an animation. Worse yet, we can start putting harmful limits or bounds on us to prevent us from making a site that reaches it's full potential. Don't. Yes we need fast sites, yes we need to be mindful of the Critical Rendering path, but we also need to remember that making a web page is as much an art as it is a science.
<p>How we choose to format content, what content we put on, which libraries we use, it's all an art and it allows us to express ourselves. When we use jQuery over Angular or React, it's our own way of expressing ourselves, whether it be it's our preferred library, or it's "smaller" or "faster", all of those are statements about what we want the experience of the site to be and how we want to express ourselves. Remember, the main reason for a fast site is to allow more people to experience our self-expression how we want them to experience it.
<h1>Fast Development</h1>
<span id="fastdev"></span>
<p>I'm probably going to get scolded for saying this, but there are plenty of times when fast development is more important than a fast web page. Now, what do I mean? If it's going to take you ten times as long to write a site without using libraries to keep it as small as possible since using libraries is "too big", then maybe you should reconsider what's important. Honestly, my advice would be to use libraries but to be smart with them (i.e. avoid render blocking loads). When I make a site for personal use, I'm not getting paid for doing it and I still want to do other things on my weekends, so I'm not going to reinvent the wheel everytime I want to add a feature; instead, I'll use libraries. At work, it's important that we hit our milestones on time, so instead of writing a library that will show ten different types of graphs on an HTML canvas element, and then writing a series of unit tests to make sure it works, and then adding it to the rest of the site (with writing documentation on it in there somewhere to be helpful to futuer developer), I'm just going to find a library online (with proper licences, functionality, and support that matches company policy) and use it. Don't reinvent the code when you don't need to.
<p>Remember, a big part of this whole process is prioritizing, and your own time and sanity are invaluable assets that need to be prioritized as well.
<h1>Have Fun</h1>
<p>Need I say more?
<span id="smile"></span>
<p>I personally enjoy website building, I enjoy challenges, and I have fun when working with code. Remember that at the end of the day, having fun while working is also important.
</div>
<?php require_once ('foot.php'); ?>
</body>
</html>
<?php require_once("gzipend.php"); ?>