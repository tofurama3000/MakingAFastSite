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
&lt;b&gt;Welcome&lt;/b&gt; &lt;strong&gt;zombie&lt;/strong&gt; &lt;i&gt;survivors&lt;/i&gt;
&lt;em&gt;Our&lt;/em&gt; &lt;small&gt;team&lt;/small&gt; &lt;mark&gt;will&lt;/mark&gt; &lt;del&gt;help&lt;/del&gt; &lt;ins&gt;guarantee&lt;/ins&gt; &lt;sub&gt;your&lt;/sub&gt; survival of &lt;sup&gt;any&lt;/sup&gt; zombie apocalypse!
</pre>
<h1>Sections</h1>
<p>At times our content is split into sections and has different levels of importance. For example, we may have a section about creating a survival base, and then inside that we may have a section about creating a survival base in urban areas and another about rural areas. These different levels of sections can be represented with header tags.
<h2>Header Tags</h2>
<p>Header tags are done with &lt;h#&gt; where the # is a number from 1 to 6. The number represents the level of importance, with 1 being the most important (or outermost). Think of it as the 1 is what you should read first, and then the 2, and then the 3.
<p>An example is the following:
<pre>
&lt;h1&gt;Welcome zombie survivors&lt;/h1&gt;
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
<p>Paragraphs split your text into paragraphs, and add space afterwards. However, they do not indent your paragraph (you may or may not like this). We'll discuss indenting paragraphs when we talk about CSS. Below is an example of how to use a paragraph:
<pre>
&lt;p&gt;Our goal is to survive the zombie apocalypse and save humanity. We do this by building bases, organizing anti-zombie strikes, and being cool while we do it.&lt;/p&gt;
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
<p>Try adding a header to your zombie-apocalypse page, followed by a paragraph or two about how to survive the apocalypse or describing your zombie-fighting squad. Use formatting to emphasize different parts of your text.
<p>Continue with <a href="advanced-formatting.php">Advanced Formatting</a>.
</div>
<?php require_once ('foot.php'); ?>
</body>
</html>
<?php require_once("gzipend.php"); ?>