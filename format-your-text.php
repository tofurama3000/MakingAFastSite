<?php require_once("gzipstart.php"); ?>
<html>
<head>
<title>Formatting Your Text</title>
<?php require_once('head.php'); ?>
</head>
<body>
<div class="cntr">
<?php require_once('menu.php'); ?>
<h1>Text Formatting</h1>
<p>At times you want to add specific formats to text, such as bolds, italics, strikethroughs, etc. This can be done with different tags. Each of these tags have a start tag, followed by the text to format, and then an end tag. If the end tag is left off, then text that you don't want to have that format will have it.
<ul>
<li>&lt;b&gt; - This will <b>bold</b> text.</li>
<li>&lt;strong&gt; - This will mark text as <strong>strong</strong></li>
<li>&lt;i&gt; - This will <i>italicize</i> text</li>
<li>&lt;em&gt; - This will <em>emphasize</em> text</li>
<li>&lt;small&gt; - This will make text <small>small</small></li>
<li>&lt;mark&gt; - This will <mark>highlight</mark> text</li>
<li>&lt;del&gt; - This will <del>strikethrough</del> text</li>
<li>&lt;ins&gt; - This will make text <ins>underlined</ins></li>
<li>&lt;sub&gt; - This will mark text as <sub>subscripted</sub>
<li>&lt;sup&gt; - This will mark text as <sub>superscripted</sub>
</ul>
<p>Below is an example
<pre>
&lt;b&gt;Welcome&lt;/b&gt; to &lt;i&gt;my &lt;strong&lt;/i&gt;&gt;website&lt;/strong&gt;
&lt;em&gt;I&lt;/em&gt; &lt;small&gt;love&lt;/small&gt; &lt;mark&gt;videogames&lt;/mark&gt;, &lt;del&gt;pizza&lt;/del&gt;, &lt;ins&gt;soda&lt;/ins&gt;, and &lt;sub&gt;cool&lt;/sub&gt; things! &lt;sup&gt;Please&lt;/sup&gt; have fun!
</pre>
<h1>Sections</h1>
<p>At times our content is split into sections and has different levels of importance. For example, if we're making a home page for a sports team, we'll want a section for the team bio, a section for awards, and a section for athletes. In the team bio, we might have a mission statement, history, recent and upcoming games, etc.
<h2>Header Tags</h2>
<p>Header tags are done with &lt;h#&gt; where the # is a number from 1 to 6. The number represents the level of importance, with 1 being the most important (or outermost). Think of it as the 1 is what you should read first, and then the 2, and then the 3.
<p>An example is the following:
<pre>
&lt;h1&gt;Welcome to My Site&lt;/h1&gt;
</pre>
<p>Header tags look like the following:
<h1>Header 1</h1>
<h2>Header 2</h2>
<h3>Header 3</h3>
<h4>Header 4</h4>
<h5>Header 5</h5>
<h6>Header 6</h6>
<p>As you can see, header tags get smaller the bigger the number.
<h1>Paragraphs</h1>
<p>Paragraphs split your text into paragraphs and add space afterward. They do not indent your paragraph (you may or may not like this). Paragraphs have a start tag (&lt;p&gt;) and an end tag (&lt;p&gt;). The end tag specifies when a paragraph should end. Below is an example of how to use a paragraph:
<pre>
&lt;p&gt;Our goal is to provide great sports entertainment for our fans. We do this by teamwork, playing hard, and being cool while we do it.&lt;/p&gt;
</pre>
<h1>Line Breaks</H1>
<p>At times we just want to add in a line break without adding in extra space afterwards,<br> like so. This is done with the &lt;br&gt; tag. This tag doesn't need any content or end tag. You can optionally add in a slash before the "&gt;" like so: "&lt;br/&gt;"
<h1>Lists</h1>
<p>To make a list of items, you use the &lt;ul&gt; or &lt;ol&gt; tags. The ul tag does dots for your tags, while the ol tag does incrementing numbers (ol is for ordered-list, ul is for unordered list). Inside the ul or ol tag you will use the &lt;li&gt; tag for each item in the list (li is for list-item). Below is an example:
<pre>
&lt;ul&gt;
&lt;li&gt;
This is an item without a number
&lt;/li&gt;
&lt;/ul&gt;
&lt;ol&gt;
&lt;li&gt;
This is an item with a number
&lt;/li&gt;
&lt;/ol&gt;
</pre>
<p>Try adding a header to your page, followed by a paragraph or two about who you are and what you like to do. Use formatting to emphasize different parts of your text.
<p>Continue with <a href="advanced-formatting.php">Advanced Formatting</a>.
</div>
<?php require_once ('foot.php'); ?>
</body>
</html>
<?php require_once("gzipend.php"); ?>