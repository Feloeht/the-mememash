<!-- Barre latérale et menu haut -->
	<nav class="sidebar bar-block white animate-left text-grey collapse top center" style="z-index:3;width:300px;font-weight:bold" id="Sidebar"><br>
		<h1 class="padding-64 center"><b>MemeMash</b></h1>
			<a href="index.php" onclick="w3_close()" class="bar-item button">HOME</a>
			<a href="mememash.php" onclick="w3_close()" class="bar-item button">MEMEMASH</a> 
			<a href="leaderboard.php" onclick="w3_close()" class="bar-item button">LEADER BOARD</a> 
			<a href="apropos.php" onclick="w3_close()" class="bar-item button">A PROPOS</a> 
			<a href="contact.php" onclick="w3_close()" class="bar-item button">CONTACT</a>
				<br />
			<a href="javascript:void(0)" onclick="w3_close()" class="bar-item button padding hide-large">FERMER MENU</a>
			<div id="footer">MemeMash &copy 2018</div>
	</nav>

<!-- Top menu sur petits écrans -->
	<header class="container top hide-large white xlarge padding-16">
		<span class="left padding">MemeMash</span>
		<a href="javascript:void(0)" onclick="w3_open()" class="right button white">☰</a>
	</header>

<!-- Overlay effect sur petits écrans-->
	<div class="overlay hide-large animate-opacity" onclick="w3_close()" style="cursor:pointer" title="Cliquer pour fermer le menu" id="Overlay">
	</div>