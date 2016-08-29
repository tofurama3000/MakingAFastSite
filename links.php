<?php require_once("gzipstart.php"); ?>
<html>
<head>
<title>Links</title>
<?php require_once('head.php'); ?>
<style>
.schema{
	color:#8f8;
}
.host{
	color:#8bf;
}
.path{
	color:#f88;
}
.query{
	color:#ff8;
}
.frag{
	color:#8ff;
}
</style>
<script>
function turn(c,sz,dec){
	var es = document.getElementsByClassName(c);
	for(var e in es)
	{
		if(es[e] && typeof(es[e]) == "object")
		{
			es[e].style.fontWeight = sz;
			es[e].style.textDecoration = dec;
		}
	}
}
function smo(){
	var cssClasses = ["schema","host","path","query","frag"];
	for(var i = 0; i < cssClasses.length; ++i) {
		var curClass = cssClasses[i];
		var elems = document.getElementsByClassName(curClass);
		for(var e in elems) {
			elems[e].onmouseover = function() {
				turn(this.className,700,"underline");
			};
			elems[e].onmouseout = function() {
				turn(this.className,400,"none");
			};
		}
	};
};
</script>
</head>
<body onload="smo()">
<div class="cntr">
<?php require_once('menu.php'); ?>
<h1>Understanding URLs</h1>
<p>Before we go any further, we need to discuss a very important topic that we have neglected. This is URLs (Uniform Resource Locator). If you have ever browsed the web, then you have worked with URLs, even if you didn't know it. We usually call these "links", "sites", "pages", etc. Its all of the text in the bar at the top of your web browser (sometimes it's at the bottom, and on mobile it' often hidden until you pull it up). Basically, what it does is it tells the browser where to go on the interenet to get something and then show it to you. URLs have five basic components:
<ul>
<li class="schema">schema</li>
<li class="host">host</li>
<li class="path">path</li>
<li class="query">query</li>
<li class="frag">fragments</li>
</ul>
<p>Below is an example URL.
<pre style="font-size:12pt;">
<span class="schema">https://</span><span class="host">www.tofusoftware.com</span><span class="path">/mazeRun</span><span class="query">?useFlash=true</span><span class="frag">#end</span>
</pre>
<p>When specifying a URL, you can start at any segment, but you must declare segments in order (you can't say the host after the path it must be host and then path). However, there are a few things to note:
<ul>
<li>The schema will default to "http://" unless "//" is used, then it will default to the current schema</li>
<li>The host will default to the current host unless specefied</li>
<li>If the schema is specified the host needs to be specefied as well</li>
<li>If the path starts with "/", it will be an absolute path on the host, otherwise it's relative to the current page</li>
<li>Having a "../" at the start of the path means that the browser should go up one directory from the current page.<br>These can be stacked (you can have "../../" or "../../../", etc)</li>
<li>If the query and/or fragment is all that's specefied, the browser will use the current page as the destination (ex. "?test" gives "<current page url>?test")</li>
</ul>
<h1>Link Tag</h1>
<p>By now you have an awesome web-page. But, it's only one web page. You can always create another page, but then you have to open that page manually. Wouldn't it be nice to be able to be able to click on some text to move to another page? Well, we can by using links or anchors.
<p>The &lt;a&gt; tag (also called the link or anchor tag) does just that. This tag works differently than other tags we've used so far, because it uses a <i>property</i>.
<h2>Property Tags</h2>
<p>A property is a way to tell the browser more information about a tag. Most tags don't require properties, but sometimes they do. With the &lt;a&gt; tag, we need to tell the browser more information than just what text to click on; we need to tell it where to link to! Tags with properties are formatted as follows:
<pre>
&lt;<var>tagname</var> <var>property_name</var>="<var>property_value</var>" ...&gt;
</pre>
<p>The <var>tagname</var> is the name of the tag, the <var>property_name</var> is the name of the property, the <var>property_value</var> is the value of the property. The "..." means that a tag can have more than one property. This is great if we have a lot of extra information for the browser.
<h2>The <code>href</code> property</h2>
<p>The &lt;a&gt; tag uses the href property, which tells the browser where to go when the text inside the link is clicked on. This follows the rules above.
<p>It's good practice to come up with a standard and then stick with that standard. On this website, all menu links use absolute paths on the host, while all on-page links use paths relative to the current page. Coming up with a standard for your site is a great idea.
<h2>The <code>target</code> property</h2>
<p>Sometimes you want a link to open in a new window or tab, that way users can still see what's on your site. This can be done with the target property. Below is a list of some of the different values:
<ul><li><b>_blank</b> opens in a new window or tab</li><li><b>_self</b> opens in the current window or frame - default</li><li><b>_full</b> opens in the current window</li></ul>
<p>Try creating another html file called "page2.html" and add a link to it on your website.
<p>Congratulations! You finished our tutorial! To learn more, see <a href="continue-html.php">Continuing with HTML</a>.
</div>
<?php require_once ('foot.php'); ?>
</body>
</html>
<?php require_once("gzipend.php"); ?>
