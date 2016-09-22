<?php require_once("gzipstart.php"); ?>
<html>
<head>
<title>Measuring</title>
<?php require_once('head.php'); ?>
</head>
<body onload="load(['ruler']);">
<div class="cntr">
<?php require_once('menu.php'); ?>
<h1>Measuring</h1>
<span id="ruler"></span>
<p>In most tutorials, this comes first since this is what you do first; I chose to do it last to get you thinking about optimization techniques - that way you'll know what to look for. The truth is, you won't be needing all of the techniques you've learned about to speed up a site that takes 10s to load by 2s. The reason is due to Amdahl's Law, which basically says: the total effect of optimizing a piece of something is limited by how big or small that piece is. In other words, if you have a website that's 10KB in size, and your CSS is only 1KB in size, by focusing on just the CSS the biggest possible size decrease is 1KB!
<p>This is huge, since if your site is running really slowly, you'll just need to work on the biggest culprits to get the most dramatic speed increase.
<p>Measuring will help us figure out why something is slow, or why it's big, or why it doesn't even work so that we can focus our time and efforts on the hidden 8KB JavaScript file instead of the insignificant 1KB file.
<h2>Measuring Tools</h2>
<p>There are a ton of measuring tools that we can use to figure out what's wrong. Debuggers are great for figuring out why something doesn't work or why it doesn't work as expected by letting you view the code and memory as a program executes. Profilers are great for finding out why a program runs slow; this is usually done by measuring memory usage, processor usage, sampling, and other techniques while a program is running. Several tools are available for free for different platforms, and there are also commercial ones available. I'll discuss several different tools that I've come across.
<h3>Browser-Based</h3>
<p>At times we want to know why a page is slow when it's on the client side, or just how to make it load faster. For these situations, we'll be using browser-based tools. Most browsers come with "Developer Tools", which generally have a view for seeing network requests, a JavaScript debugger, and a profiler. Plugins are available which can give better insights or extend built-in tools. I personally use the Chrome developer tools, and I'm experimenting with the tools in Microsoft Edge. I've also used the Firebug plugin for Firefox. Tutorials and documentation should be available for each major browser's tools and commonly used plugins.
<h3>Server Based</h3>
<p>Sometimes pages take too long to respond because of server-based code, or it just isn't working as expected. In these situations, we'll need to get debuggers and profilers running on a test server to see what's wrong. For PHP, I usually use <a href="https://xdebug.org/index.php">XDebug</a> for both profiling and debugging. For Node.JS there's <a href="https://github.com/joyent/node-stackvis">stackvis</a> (I haven't used it yet personally). You may need to look around to find a solution that works for you, but there are plenty for any mainstream technology out there.
<h3>Database Based</h3>
<p>This site really hasn't talked about databases, and that's since it's really beyond the scope of this. However, I feel like it's worth mentioning here since I've seen plenty of situations where people just don't use a Database Profiler. For MySQL and Maria DB, there are options like <a href="http://www.jetprofiler.com/">JetProfiler</a> and <a href="http://www.profilesql.com/">Profile SQL</a>, and other databases should have other solutions. Do remember that if your DB is taking up most of your response time, that's a good indication that you should work on that.
<p><a href="final-thoughts.php">Final Thoughts</a>.
</div>
<?php require_once ('foot.php'); ?>
</body>
</html>
<?php require_once("gzipend.php"); ?>