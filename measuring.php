<?php require_once("gzipstart.php"); ?>
<html>
<head>
<title>Measuring</title>
<?php require_once('head.php'); ?>
</head>
<body>
<div class="cntr">
<?php require_once('menu.php'); ?>
<h1>Measuring</h1>
<div class="c2 r"><svg viewBox="0 0 500 250" width="100%" xmlns="http://www.w3.org/2000/svg"><g stroke="#000" transform="translate(0 -802.36216)"><path d="m12.86329 851.08264h471.41629v152.13055h-471.41629z" fill="#ffe680" stroke-linecap="round" stroke-width="1.012292"/><path d="m52.142857 977.50502v23.57148" fill="none" fill-rule="evenodd"/><path d="m104.28571 977.86213v23.57147" fill="none" fill-rule="evenodd"/><path d="m177.50001 977.68358v23.57152" fill="none" fill-rule="evenodd"/><path d="m229.64286 978.04069v23.57151" fill="none" fill-rule="evenodd"/><path d="m294.35714 975.96928v23.57152" fill="none" fill-rule="evenodd"/><path d="m346.49999 976.32639v23.57151" fill="none" fill-rule="evenodd"/><path d="m398.21429 977.25499v23.57151" fill="none" fill-rule="evenodd"/><path d="m450.35714 977.6121v23.5715" fill="none" fill-rule="evenodd"/><path d="m78.571429 961.07645v40.00005" fill="none" fill-rule="evenodd"/><path d="m142.85714 961.07642v40.00008" fill="none" fill-rule="evenodd"/><path d="m201.42857 961.07644v40.00006" fill="none" fill-rule="evenodd"/><path d="m265.71429 961.07641v40.00009" fill="none" fill-rule="evenodd"/><path d="m310 959.64786v40.00004" fill="none" fill-rule="evenodd"/><path d="m374.28572 959.64783v40.00007" fill="none" fill-rule="evenodd"/><path d="m420.71429 961.79072v40.00008" fill="none" fill-rule="evenodd"/><path d="m68.749999 877.00502v-23.57148" fill="none" fill-rule="evenodd"/><path d="m120.89286 876.64791v-23.57147" fill="none" fill-rule="evenodd"/><path d="m194.10715 876.82646v-23.57152" fill="none" fill-rule="evenodd"/><path d="m246.25 876.46935v-23.57151" fill="none" fill-rule="evenodd"/><path d="m310.96428 878.54076v-23.57152" fill="none" fill-rule="evenodd"/><path d="m363.10713 878.18365v-23.57151" fill="none" fill-rule="evenodd"/><path d="m414.82143 877.25505v-23.57151" fill="none" fill-rule="evenodd"/><path d="m466.96428 876.89794v-23.5715" fill="none" fill-rule="evenodd"/><path d="m95.178579 893.43359v-40.00005" fill="none" fill-rule="evenodd"/><path d="m159.46429 893.43362v-40.00008" fill="none" fill-rule="evenodd"/><path d="m218.03571 893.4336v-40.00006" fill="none" fill-rule="evenodd"/><path d="m282.32143 893.43363v-40.00009" fill="none" fill-rule="evenodd"/><path d="m326.60715 894.86218v-40.00004" fill="none" fill-rule="evenodd"/><path d="m390.89286 894.86221v-40.00007" fill="none" fill-rule="evenodd"/><path d="m437.32143 892.71932v-40.00008" fill="none" fill-rule="evenodd"/></g></svg></div>
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