# Making A Fast Site

This hosts a submission to the [10K Apart](https://a-k-apart.com/) challenge.

##Site Purpose

The site's purpose is to give an overview of how to make a small or fast site. It does this while each page stays under 10K. It uses minimal Javascript, and all features work without Javascript. The code tester uses iFrames, but has the ability to run a slightly modified tester without iFrames.

##Site Architecture

The site uses PHP for the server, which allows including a header and footer php file. GZipping is done at the PHP level to avoid having to configure services. All images - except embedded SVG images - use the <picture> element, and the text tries to remain independant from images for browsers that don't support images to be able to get the full context and message.
