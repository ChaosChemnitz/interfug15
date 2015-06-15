<?php
header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
header("Pragma: no-cache"); //HTTP 1.0
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
$pageId=isset($_GET["page"])?$_GET["page"]:"home";
$pages=Array(
Array("name"=>"home","url"=>"/","title"=>"Home"),
Array("name"=>"cfp","url"=>"/cfp","title"=>"call for papers"),
Array("name"=>"tickets","url"=>"/tickets","title"=>"Tickets"),
Array("name"=>"anreise","url"=>"/anreise","title"=>"Anreise"),
Array("name"=>"kontakt","url"=>"/kontakt","title"=>"Kontakt")
);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>INTERFUG #1//2015</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link rel="shortcut icon" type="image/png" href="/img/icon.png">
		<link rel="stylesheet" type="text/css" href="/css/style.css">
	</head>
	<body>
		<table id="container" border="0" cellpadding="0" cellspacing="0">
			<tr><td id="marx"></td>
				<td id="main">
					<header id="header">
						<h1>INTERFUG #1//2015</h1>
					</header>
					<nav id="nav">
						<ul>
						<?php
						foreach($pages as $p)
							echo "<li><a href=\"".$p["url"]."\"".($pageId==$p["name"]?" class=\"active\"":"")."><span>".$p["title"]."</span></a></li>\n";
						?>
						</ul>
					</nav>
					<div>
					<article>
					<?php
					/*<p>id: <?php echo $pageId; ?></p>*/
					switch($pageId){
						
						case "cfp":
						echo file_get_contents("text/cfp.html");
						break;
						
						case "tickets":
						echo file_get_contents("text/tickets.html");
						break;
						
						case "anreise":
						echo file_get_contents("text/anreise.html");
						break;
						
						case "kontakt":
						echo file_get_contents("text/kontakt.html");
						break;
						
						default:
						echo file_get_contents("text/home.html");
						break;
					}
					?>
					<footer id="footer" class="box" style="color:#C0C0C0">
						<ul class="links">
							<li><a href="https://chaoschemnitz.de/ChaosChemnitz:Impressum">Impressum</a></li>
							<li>Design by ... + <a href="https://jdi.li/">/jdi/</a>.</li>
						</ul>
					</footer>
					</article>
					</div>
				</td><td id="line"></td>
			</tr>
		</table>
	</body>
</html>

