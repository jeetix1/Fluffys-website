<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Hell">
	<meta name="theme-color">
  <title>Fluffy's funky website</title>
	<link rel="icon" type="image/x-icon" href="images/fluffy.png">
	<!-- Style -->
	<link rel="stylesheet" href="stylesheet.css">
</head>
<body>

  <nav>
		<img src="images/fluffy.png">
		<div>
			<a href="https://twitter.com/fluffybeanUwU">Twitter</a>
			<a href="http://t.me/Fluffy_Bean">Telegram</a>
			<a href="https://github.com/Fluffy-Bean">Github</a>
			<p>Discord:&nbsp;Fluffy&nbsp;Bean#5212</p>
		</div>
  </nav>

	<main>
		<section id="intro">
			<h1>Fluffy's Swagger Website</h1>
			<p>This is supposed to be a descriptive intro line, but I don't feel like writing this</p>
		</section>

		<section id="about">
			<h2>About me</h2>
			<p>Hi! I'm <span class="fluffyColour">Fluffy Bean</span>. I'm a 17 year old who found himself on the internet one day and became a furry! (And a developer)</p>
		</section>

		<section id="interests">
			<h2>My interests</h2>
			<p>Appart from the obvious, I am interested in computers, specifically the programming aspect of them and the freedom it gives me to express myself</p>
			<p>I also enjoy using Linux (Arch btw) which gives me access to do things such as custormise my entire system!</p>
			<p>Another thing I enjoy doing is playing games, some of my favroute tiles are, The Witcher 3, Minecraft, Beat Saber and Spin Rhythm XD</p>
		</section>

		<section id="experiance">
			<h2>Experiance in programming</h2>
			<p>I have a decently wide range of knowlage on computers and programming </p>
			<p>Since I was young I delved into computers head first, and breaking a lot on the way. I started with Scratch, then progressed to Python in Secondary School where I really started my programming adventure!</p>
			<p>Since then I tried many programming languages and programming-related stuff, I currently know Python, HTML and CSS but am also learning PHP and C#</p>
			<p>I also got into Linux since, the start was rough with me breaking a bunch of stuff. But since then I've been using Arch (btw) and happily configuring Rofi, Polybar, fish and even theming Discord, Spotify and Firefox!</p>
			<img src="https://github-readme-stats.vercel.app/api/top-langs/?username=Fluffy-Bean&layout=compact">
		</section>

		<section>
			<h2>Special Thanks</h2>
			<p>To <span class="jeetixColour">Jeetix</span> for helping me with learning how to make websites and keeping the original site up and running!</p>
			<p>And to <span class="cartyColour">Carty</span> for teaching me how to run servers and the networking required to keep sites online!</p>
		</section>

		<section id="gallery">
			<h2>Random pictures lol</h2>
			<img src="gallery/vrc_christmas_meetup_2021.webp" class="gallery-image">
			<div class="gallery" draggable="false">
				<?php
				$images = glob("gallery/*.{jpg,jpeg,png,webp,gif}", GLOB_BRACE);
				foreach ($images as $i) {
					printf('<img src="gallery/%s" draggable="false"/>',
						basename($i)
					);
				}
				?>
			</div>
			<script src="scripts/gallery.js"></script>
		</section>

		<section id="refsheet">
			<h2>Refsheet</h2>
			<img src="images/ref.png" alt="Refsheet containing an orange anthro Maned Wolf.">
			<h3>Bandana</h3>
			<p>#FF7700 - #FFDC00 - #00D621 - #0088FF</p>
			<h3>Fur</h3>
			<p>#ff851b - #fff3bb - #613700</p>
			<h3>Beans / Eyes</h3>
			<p>#febbec - #c859c9</p>
		</section>

		<section id="jokes">
			<h2>Funny jokes!</h2>
			<h3>Cow joke</h3>
			<p>What did the cow say to the other cow that took up all the space? "Mooooove over"!</p>
			<h3>Eel joke</h3>
			<p>Why can't electric eels get depresed? Because they're always positive!</p>
		</section>

		<section id="pc">
			<h2>System configuration</h2>
			<h3>Operating system</h3>
			<img src="images/sussywussy.png" alt="Screenshot of Linux desktop enviroment">
			<p>My main operating system is Arch Linux, in this screenshot you can see a "rice" of Rofi and Polybar! Which you can see <a href="https://github.com/Fluffy-Bean/dots">here</a>!</p>
			<p>My secondary system is Windows 10 Pro just for VR</p>

			<h3>Hardware</h3>
			<p>For my PC case, I'm using an NZXT H510 (white) covered with a bunch of stickers and magnets.</p>
			<p>But for whats inside is a bit more interesting. I am using a Gigabyte X570 AORUS ELITE motherboard, pared with an AMD 5 3600. Cooling that is a be quiet! Pure Rock 2.</p>
			<p>Thats with 16GBs (2x8) of DDR4-3600 ram from Corsair, with an Nvidia GTX1060 (6gb) Zotac AMP edition.</p>
			<p>Which is all powered by a Corsair 550W 80+ Gold power supply.</p>
			<p>For storage I am using a Hitachi Deskstar that has 2TBs of storage for my games and larger files. For my boot SSD I am using a Samsung 980 1TB M.2 NVMe.</p>

			<h3>Equipment</h3>
			<p>My keyboard is a Razer Blackwiddow X Chroma that has been through too much. To go with that I have a Logitech g502 mouse with a Hyena Agenda mousemat.</p>
			<p>For my monitor I have a BenQ MOBIUZ EX2510. For VR I have a normal CV1 with 2 cameras.</p>

			<h3>Server</h3>
			<p>My server is a simple Zotac ZBOX-CI527.</p>
			<p>It still has the base 8GBs of ram and i5-7200U CPU. But I upgraded it with a 120GB SSD.</p>
			<p>And it is running a Proxmox server with many many LXC containters because why not :3</p>
		</section>

		<section id="spotify">
			<h2>Mah Spotify playlist!</h2>
			<iframe src="https://open.spotify.com/embed/playlist/5e4iqBdioVN56hz1KCYWNi?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
			<iframe src="https://open.spotify.com/embed/playlist/37vWcad8w7GBvNIZUkDxEi?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
		</section>
	</main>

	<footer>
		<div>
			<h3>Direct Contact</h3>
			<a href="http://t.me/Fluffy_Bean">Telegram</a>
			<a href="https://twitter.com/fluffybeanUwU">Twitter</a>
		</div>
		<div>
			<h3>Page status</h3>
			<p>Last updated 15 Jun 2022</p>
			<p>Made and designed by Fluffy</p>
		</div>
		<div>
			<h3>Other works</h3>
			<a href="https://github.com/Fluffy-Bean">Github</a>
			<a href="https://testing.fluffybean.gay">Testing Page</a>
		</div>
	</footer>

</body>
</html>
