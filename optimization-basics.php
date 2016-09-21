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
<div class="c2 r"><svg style="width:100%" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 600 400"><style>.s0{fill:#7ac8e8;stroke-linejoin:round;stroke-width:2.8;stroke:#000;}.s1{fill:#3aa7c5;stroke-linejoin:round;stroke-width:2.8;stroke:#000;}.s2{fill:#14ccff;stroke-linejoin:round;stroke-width:2.8;stroke:#000;}.s3{fill:#51bef1;stroke-linejoin:round;stroke-width:2.8;stroke:#000;}.s4{fill:none;stroke-linejoin:round;stroke-width:2.8;stroke:#000;}</style><g transform="translate(0,-652.36216)"><path d="m466.4 829.5 0 155 57.7 15.5 52.4-30.3 0-155.2" class="s0"/><path d="m41.2 961.8 0 45 57.7 15.5 52.4-30.3 0-45.2" class="s1"/><path d="m321.9 741.8 0 245 57.7 15.5 52.4-30.3 0-245.2" class="s2"/><path d="m191.2 923.5 0 79 57.7 15.5 52.4-30.3 0-79.2" class="s3"/><path d="m321.6 741.4 57.5 13.9 52.2-29.4-57.9-11.1z" class="s2"/><path d="m378.7 754.9 0 246.4" class="s4"/><path d="m466.2 830 57.5 13.9 52.2-29.4-57.9-13.1z" class="s0"/><path d="m523.1 843.9 0 154.3" class="s4"/><path d="m190.7 924.5 57.5 13.9 52.2-29.4-57.9-13.1z" class="s3"/><path d="m247.9 938.1 0 80.4" class="s4"/><path d="M42.4 962.8 100 976.7 152.1 947.3 94.2 934.2Z" class="s1"/><path d="m99.6 976.4 0 46.4" class="s4"/></g></svg></div>
<p>You'll hear me say this a lot before we're done. But the key really is to prioritize. Prioritize content, prioritize features, prioritize load order. It's very important to prioritize. If you do it right, you can have a beautiful, fully functional site that users will love. You do it wrong and you'll be tearing your hair out.
<p>I'm going to assume you want to achieve one of two things: make your site really small, or make your site really fast. They are sort of similar, but there are times you'll do very different things to get the results that you want.
<p>I've made several different sites, each with different priorities. I've worked on sites where we don't care about anything but PageSpeed Insight rankings; whatever we do just has to render the fastest and work across all devices, and beat all competitors on PageSpeed Insights (we did that, and we got 100% on usability and 91-95% on speed rankings). I've also worked on sites where the priority is full images taking up the whole screen to showcase products.
<p>And then I've worked on this site, where the initial load size must be less than 10 KB.
<p>Each one had different priorities and because of that, each one had a different approach. For PageSpeed Insights, I went through a ton of tutorials put out by Google, read a lot of documentation, and spent several months optimizing templates, images, rewriting backends for maintainability, testing and retesting, changing server configurations, and so forth. But, once we got it down and we knew what to do, it was a ton easier when I had to do the same thing to another site since I already knew what to prioritize, what tools to use, and what to look for when I didn't get my desired results.
<h1>Small vs Fast</h1>
<p>Small sites load fast, fast sites load smart. At first, you might say, "The fastest sites I know of are really, really small, so if I can go small I can go fast". Not quite. Some of the fastest sites I know of are quite big; they just do things in such a way that you don't realize that it's still loading. When you get it so that your customers are using the site and you're loading what they need before they notice that it wasn't there, that's loading smart.
<p>Here's and example. Take Facebook, Pinterest, Twitter. They all deal with large amounts of data. They also show large amounts of data. But, you can view a stream of data without loading all of the data, and sometimes it loads the rest before you finish scrolling to the bottom. They aren't small by any means, but they're pretty fast there. Google Images does a similar thing; it'll only load part of the results, and it'll only load small versions of images. It'll load the rest either in the background or once you want it (ex. "view full sized image"). This makes it so you can view gigabytes worth of images very quickly.
<p>Then there's this site, which loads almost everything at once, but it's very small so it gets away with it. If I quadrupled the size, you'd start to notice on a slower connection. If I increased the site size by a magnitude of ten, you'd really start to notice. This site's only fast because it's small, but that's ok only because it's meant to be extremely small. The techniques for this site won't work for Facebook, but how Facebook does stuff isn't really needed or wanted for this site. It really depends on your needs and wants.
<p>Once you figure out what you want, we'll have an <a href="overview-of-the-internet.php">Overview of the Internet</a>.
</div>
<?php require_once ('foot.php'); ?>
</body>
</html>
<?php require_once("gzipend.php"); ?>
