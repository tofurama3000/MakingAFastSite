<?php require_once("gzipstart.php"); ?>
<html>
<head>
<title>Asset Management</title>
<?php require_once('head.php'); ?>
</head>
<body onload="load(['freelib'])">
<div class="cntr">
<?php require_once('menu.php'); ?>
<h1>Assets</h1>
<p>We all have assets like CSS files, Images, and sometimes fonts or Flash. But these can take up a lot of space if we're not careful. So, what do we do to work with this?
<h2>CSS and JavaScript</h2>
<span id="freelib"></span>
<p>These two are sometimes the biggest culprits of our day. The code is written in text files and we assume text files are so small that it's free. Due to that belief, we write a lot of code, import a ton of libraries, and write a lot more code, generally splitting things into different files for reuse. Sure, it'll probably stay under 4MB, but we forget that file size isn't what really slows us down with text files, it's the requesting for them. When we see the load times, we tend to scratch our heads and wonder why it takes so long.
<p>The truth is, there are no "free" assets or "free" resources. Everything costs space, time, and are sometimes blocking critical render paths. This means we need to be careful. At the same time, please use assets!. I don't want to scare you out of using CSS or JavaScript, or even 3rd party libraries; they're all great, I use them a lot, and they make web development easier. I just want you to think before you start loading jQuery, Angular, React, Bootstrap, and Backbone all on one page. When you're making decisions about what techniques and libraries to use on a web page, take time to answer the following questions:
<ol><li>What am I trying to accomplish?</li><li>How does _____ accomplish that?<br>(importing library/writing JS code/writing CSS code)</li><li>What resources are already available to me on that page?<br>(ex. what libraries are already being used? how is it structured? Am I able to use server-side scripts like PHP instead?)</li><li>What other ways could I do this with what I have?<br>(ex. iframes, HTML, server-side scripts, delayed loading, web sockets)</li><li>What is the best way I could do this with what I now have and know</li></ol>
<p>Answering these questions will save you grief and headache. The times I failed to answer these questions first, I often made big mistakes that I could have avoided had I answered these questions. Usually, the mistakes were "I included excess libraries instead of using the ones I already had".
<h2>Images</h2>
<p>You knew this was coming. Everyone on the internet seems to pound their fist and their Holy Code Bible on how space consuming and slow images are, and how you can't use large images since it will deter people who are using data plans to browse the internet. But, there are ways to make images smaller in file size and not pixel size, and there are ways to optimize images so that data people using a smartphone will load a smaller copy than desktop browsers. The first trick is to properly compress images. This is more than just another JPG vs PNG - I believe both have their place on a web page. This is more of what settings you use when compressing, and understanding the advantages and disadvantages of each format. When in doubt, I usually will use JPG for anything without transparency, and I'll test my site against PageSpeed Insights. The reason is PageSpeed Insights will have a link that I can click to download properly compressed/minified JS, CSS, and Images. Image scaling I'll usually do on my own.
<p>Additionally, you can use the <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/picture" target="_blank">&lt;picture&gt;</a> element to set different sized images and have the browser only load the image big enough for what it needs. There are plenty of tutorials on how to do this, and I recommend that you start practicing with it to see how it works.
<p>Also, look into SVG images. They use vector graphics and can sometimes be smaller and faster; you can also animate them with CSS and Javascript to avoid using monolithic gifs. Below is an example of how an SVG image will look in your browser (if you don't see it, it means your browser doesn't support SVG rendering):
<div style="height:400px">
<svg version="1.2" baseProfile="tiny" style="width:300px;height:400px;" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 100" xml:space="preserve">
<g><g><circle fill="blue" stroke="white" stroke-width="2" stroke-miterlimit="10" cx="100" cy="50" r="40"/></g><g><circle fill="green" stroke="white" stroke-width="2" stroke-miterlimit="10" cx="80" cy="80" r="40"/></g>
<g><circle fill="red" stroke="white" stroke-width="2" stroke-miterlimit="10" cx="50" cy="50" r="40"/></g><g><circle fill="white" stroke="white" stroke-width="2" stroke-miterlimit="10" cx="75" cy="65" r="40"/></g></g>
</svg>
</div>
<h2>Fonts</h2>
<p>Using custom fonts is becoming more and more popular with websites. However, fonts aren't always small - especially if they come packed with Unicode support. You'll definitely want to make sure you have GZip compression enabled for fonts, and if you don't include more Unicode that what you need (I doubt every site will need full Hebrew, Klingon and Deseret alphabets). Finally, try using fonts that most machines have preinstalled, and then default to the machine's own default for serif/sans-serif - depending on the font style of your site (that's what this site does).
<h2>Misc</h2>
<p>Alright, this is where we'll address any other asset type - including Flash and Java applets. Currently, the web trend is to move away from assets that aren't mentioned above, and there are differing reasons for this. That doesn't mean things like "Flash" or things requiring third-party plugins are "bad", they're just less and less often the "best" or even the "mediocre" choice.
<p>Flash has been branded as a "security nightmare" a lot, and while you may or may not agree, big browsers have been lowering and dropping support for it, and many have turned it off by default.
<p>Java applets have also been going through their phase-out phases and are rather rare to see. Plugins and other technologies have also seen similar trends.
<p>This isn't just since people mark them as "bad", but it's also due to better alternatives being more popular and more consistent with the advent of HTML5. HTML5 allow cross-browser capabilities for complex animations, games, and 3D graphics without plugins and with fewer security concerns, so major browsers are using it by default. I strongly recommend looking into these technologies and setup a phase-out timeline for your current content.
<p>If you're still insistent, then answer the questions in the CSS and JavaScript section regarding the technologies you're using and look into the different ways to optimize that form of media.
<p>Coming up Next, <a href="server-tricks.php">Server Tricks</a>.
</div>
<?php require_once ('foot.php'); ?>
</body>
</html>
<?php require_once("gzipend.php"); ?>