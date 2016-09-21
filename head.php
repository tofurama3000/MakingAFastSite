<style>
body{
	font-family: Calabri, Arial, Sans-Serif;
}
h2{clear:both;}
#bg{
	 width:100%;
	 position:absolute;
	 z-index:-9999;
	 top:0;
	 left:0;
	 background:#040;
	 height:50px;
}
.cntr{
	margin:auto;
}
@media (min-width: 1200px){
	.cntr{
		width:50%;
	}
}
@media (max-width: 1199px){
	.cntr{
		width:60%;
	}
}
@media (max-width: 899px){
	.cntr{
		width:80%;
	}
}
@media (max-width: 500px){
	.cntr{
		width:90%;
	}
}
#nav, #navm{
	height:20px;
	font-size:18pt;
	font-family: Gregoria, Times New Roman, Serif;
}
#navm{display:none;}
@media (max-width: 700px){
	#nav{display:none;}
	#navm{display:block;}
}
.cl{clear:both;}
.c1{
	float:left;
	width:100%;
}
#navm div,.c2, .c2Med{
	float:left;
	width:48%;
	padding:1%;
}
.c3{width:30%;float:left;padding:1%;}
.r{float:right;}
@media (max-width: 700px){
	.c2Med{width:100% !important;padding:0;}
	.topOffset{position:relative;}
}
#nav div,.c4{
	float:left;
	width:23%;
	padding:1%;
}
a{
	text-decoration:none;
	color:green;
	font-weight:700;	
}
a:hover{
	text-decoration:underline;
}
#navm a,#nav a{
	color:#eee;
}
#navm a:hover{,#nav a:hover{
	color:#000;
	text-decoration:none;
}
#foot{
	padding-top:50px;
}
</style>