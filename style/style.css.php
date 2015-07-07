<?php
//header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
//header("Pragma: no-cache"); //HTTP 1.0
header("Expires: ".gmdate("D, d M Y H:i:s", time() + 180) ." GMT"); // Date in the past
header('Content-type: text/css');

$colors = Array(
Array("name"=>"red","rgb"=>"#e30613"),
Array("name"=>"green","rgb"=>"#3aaa35"),
Array("name"=>"blue","rgb"=>"#009fe3")
);
/*
 * 
.yellow{
color:#ffde00;
}
 * 
 */
 $color=$colors[rand(0, 2)];
?>

@charset 'UTF-8';

/*********************************************************************************/
/* Basic                                                                         */
/*********************************************************************************/

	@font-face {
		font-family: 'OCR';
		font-style: normal;
		font-weight: 300;
		src: url(/misc/ocr_a_regular.ttf);
	}
	
	*{
		margin:0;
		padding:0;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}
	
	body, html{
		height:100%;
	}
	
	body, input, textarea, select, option
	{
		font-family: 'Source Sans Pro', sans-serif;
		font-weight: 300;
		color: #222;
	}
	
	strong, b{
		font-weight: 400;
		color: #363636;
	}

	h1, h2, h3, h4,h5, h6{
		font-family: 'OCR';
		font-weight: 400;
		color: #363636;
		margin-bottom:0.5em;
	}
	
	h2{
		padding-bottom:0.5em;
	}
	
	h3{
		text-transform:uppercase;
	}
	
	a{
		color:inherit;
	}
	
	blockquote
	{
		border-left: solid 0.5em #ddd;
		padding: 1em 0 1em 2em;
		font-style: italic;
	}
	
	em, i
	{
		font-style: italic;
	}
	
	hr
	{
		border: 0;
		border-top: solid 1px #ddd;
		padding: 1.5em 0 0 0;
		margin: 1.75em 0 0 0;
		clear:both;
	}
	
	sub
	{
		position: relative;
		top: 0.5em;
		font-size: 0.8em;
	}
	
	sup
	{
		position: relative;
		top: -0.5em;
		font-size: 0.8em;
	}
	
	table
	{
		width: 100%;
	}

	br.clear
	{
		clear: both;
	}
	
	p, ul, ol, dl, table, blockquote, form
	{
		margin-bottom: 2em;
	}
	
/*********************************************************************************/
/* Panels                                                                        */
/*********************************************************************************/

	#container{
		width: 100%;
		height:100%;
		margin:0;
		background:#F8F8F8;
	}
	
	#marx{
		min-width:130px;
		width:*;
		background: url("/img/marx_<?php echo $color["name"]; ?>.png") no-repeat right;
		background-size:cover;
	}
	
	#line{
		min-width:130px;
		width:*;
		background: url("/img/line_<?php echo $color["name"]; ?>.png") right;
		background-size:contain;
	}

	#main{
		background: #FFF;
		width:700px;
		height: 100vh;
		min-width:500px;
		border-right: 4px solid <?php echo $color["rgb"]; ?>;
		border-left: 4px solid <?php echo $color["rgb"]; ?>;
		position: relative;
	}
	
	#main>div{
		padding-top:130px;
		height: 100vh;
		overflow-x: hidden;
		overflow-y: auto;
	}
	
	#main article{
		padding-top:12px;
		padding-left:100px;
		padding-right:20px;
		height:100%;
		overflow-x: hidden;
		overflow-y: auto;
	 }

	.box{
		margin:10px;
		overflow:hidden;
	}


		
/*********************************************************************************/
/* Nav                                                                           */
/*********************************************************************************/
	
	#header
	{
	position:absolute;
	top:30px;
	height:100px;
	left:-120px;
	right:-70px;
	padding-left:50px;
	text-align:center;
	}
	
	#header h1
	{
	font-size:64px;
	}
	
	#nav
	{
	position:absolute;
	top:142px;
	left:-120px;
	width:200px;
	}
	
	#nav ul
	{
	list-style-type:none;
	}
	
	#nav li, header
	{
	border: 4px solid <?php echo $color["rgb"]; ?>;
	background: white;
	margin-bottom:12px;
	padding:4px;
	}
	
	#nav a{
		display: inline-block;
		width:100%
	}
	
		#nav a span
		{
			/*text-transform:*/
			background:url("/img/texture_<?php echo $color["name"]; ?>.png") no-repeat right bottom;
			background-size:70%;
			font-family:'OCR';
			display: inline-block;
			color: #000;
			font-size:1.3em;
			width:100%;
			line-height: 1.5em;
			padding-right:60px;
		}
	
		#nav .active span
		{
			text-decoration:underline;
		}
		

/*********************************************************************************/
/* Content                                                                       */
/*********************************************************************************/
	
		
		


/*********************************************************************************/
/* Footer                                                                        */
/*********************************************************************************/

	#footer
	{
		font-family:'OCR';
	}
		


