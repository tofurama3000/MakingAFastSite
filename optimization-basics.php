<?php require_once("gzipstart.php"); ?>
<html>
<head>
<title>Optimization Basics</title>
<?php require_once('head.php'); ?>
</head>
<body>
<div class="cntr">
<?php require_once('menu.php'); ?>
<h1>Prioritize</h1>
<p>You'll hear me say this a lot before we're done. But the key really is to prioritize. Prioritize content, prioritize features, prioritize load order. It's very important to prioritize. If you do it right, you can have a beautiful, fully functional site that users will love. You do it wrong and you'll be tearring your hair out.
<p>I'm going to assume you want to achieve one of two things: make your site really small, or make your site really fast. They are sort of similar, but there are times you'll do very different things to get the results that you want.
<p>I've made several different sites, each with different priorities. I've worked on sites where we don't care about anything but PageSpeed Insight rankings; whatever we do just has to render the fastest and work across all devices, and beat all competitors on PageSpeed Insights (we did that, and we got 100% on usability and 91-95% on speed rankings). I've also worked on sites where the priority is full images taking up the whole screen to showcase products.
<p>And then I've worked on this site, where the initial load size must be less than 10 KB.
<p>Each one had different priorities and because of that each one had a different approach. For PageSpeed Insights, I went through a ton of tutorials put out by Google, read a lot of documentation, and spent several months optimizing templates, images, rewriting backends for maintainability, testing and retesting, changing server configurations, and so forth. But, once we got it down and we knew what to do, it was a ton easier when I had to do the same thing to another site since I already knew what to prioritize, what tools to use, and what to look for when I didn't get my desired results.
<h1>Small vs Fast</h1>
<p>Small sites loads fast, fast sites loads smart. At first you might say, "The fastest sites I know of are really, really small, so if I can go small I can go fast". Not quite. Some of the fastest sites I know of are quite big; they just do things in such a way that you don't realize that its still loading. When you get it so that your customers are using the site and you're loading what they need before they notice that it wasn't there, that's loading smart.
<p>Here's and example. Take Facebook, Pinterest, Twitter. They all deal with large amounts of data. They also show large amounts of data. But, you can view a stream of data without loading all of the data, and sometimes it loads the rest before you finish scrollig to the bottom. They aren't small by any means, but they're pretty fast there. Google Images does a similar thing; it'll only load part of the results, and it'll only load small versions of images. It'll load the rest either in the background, or once you want it (ex. "view fullsized image"). This makes it so you can view gigabytes worth of images very quickly.
<p>Then there's this site, which loads almost everything at once, but it's very small so it gets away with it. If I quadrupled the size, you'd start to notice on a slower connection. If I increased the site size by a magnitude of ten, you'd really start to notice. This site's only fast because it's small, but that's ok only because it's meant to be extremely small. The techniques for this site won't work for Facebook, but how Facebook does stuff isn't really needed or wanted for this site. It really depends on your needs and wants.
<p>Once you figure out what you want, we'll have an <a href="overview-of-the-internet.php">Overview of the Internet</a>.
</div>
<?php require_once ('foot.php'); ?>
</body>
</html>
<?php require_once("gzipend.php"); ?>
