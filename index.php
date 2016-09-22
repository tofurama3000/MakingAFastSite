<?php require_once("gzipstart.php"); ?>
<html>
<head>
<title>Making A Fast Site</title>
<?php require_once('head.php'); ?>
</head>
<body onload="load(['speedometer','lightbulb']);">
<div class="cntr">
<?php require_once('menu.php'); ?>
<h1>The High-Speed Dilemma</h1>
<span id="speedometer">
</span>
<p>Being able to quickly browse the internet is great; we get to see what movies we can stream, the latest news, get homework/work done, it's great! Except for the fact that sites are really big, and we may be on a slow phone, with bad 3G. Then, it's not so great since it takes a long time to load the content you want, and to display it. I'd rather leave the site and go elsewhere than wait 20 seconds for it to load.
<p>So, why is it that the same website can take so much longer to load on a phone than it does on a desktop? There are multiple reasons. First, phones don't have as much power as a laptop, and so things will naturally be slower because of that. In addition, phones are often used to browse the internet while away from home, meaning that mobile surfers are using data plans which offer lower speeds than many wifi locations. When both are combined, it makes for a slow browsing experience that can lead to frustration.
<h1>The Root Cause</h1>
<p>Alright, it's not the phone's fault that the internet is so slow. In reality, the developers are at fault for not designing websites that work well on mobile devices and slow internet connections. Us developers enjoy fast browsing on computers and many of us still remember Dial-Up, and so we get super excited when we can add in 50MB of assets to a website and it loads in less than two seconds with the business internet connection. 
<p>That doesn't mean we don't try to make things fast, we love speed, but we sometimes test with the wrong tools or use the wrong techniques. I've done it before where I only partially test site speed, usually by using a laptop with network throttling or using a phone with super fast internet. Neither simulates the person in the grocery store in the middle-of-nowhere who only has 2G for their Galaxy S3. 
<h1>The Remedy</h2>
<span id="lightbulb">
</span>
<p>So, to cope with that we need to convince our manager that we should get dial-up so that we can test on the slowest internet possible to make sure our sites are fast, right? I hope you didn't say yes to that question. The real answer is we need new tricks. I've seen super fast sites that load tons of information, they just prioritize information ordering and when things are loaded. I've seen smaller sites that take forever to load or are just too slow to use.
<p>The basic tricks aren't all that hard, they're rather simple. I'll go over the essentials, but that won't cover everything. Before you ask "Why won't you tell us all of the secrets? Are you hoarding them for yourself, you selfish ..." it's not because I'm being selfish. First, the basics will solve most of the issues and will help you out. Second, the internet is constantly changing and evolving (I still remember when HTML5 was brand new and not every browser supported &lt;canvas&gt;). This means that the more "advanced" techniques will change. Third, once you understand the basics you can start using your knowledge and other resources to get better on your own.
<p>So, let's get started with <a href="optimization-basics.php">Optimization Basics</a> for any website.
</div>
<?php require_once ('foot.php'); ?>
</body>
</html>
<?php require_once("gzipend.php"); ?>