<svelte:head>
	<title>andrei.net</title>
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Andrei's website" />
	<meta property="og:description" content="Tap on the link to learn more about Andrei" />
	<meta property="og:url" content="https://andrei.net" />
	<meta property="og:site_name" content="Andrei's website" />
	<meta property="og:image" content="https://andrei.net/andrei-reading.jpg" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@AndreiIgna" />
</svelte:head>

<style labg="css">

.page-welcome {
	background: url(/background-3.svg) center center;
	background-size: cover;
	padding: 0;
	margin: 0;
	min-height: 100vh;
}

.box {
	width: 90%;
	max-width: 600px;
	margin: 0 auto;
	padding: 30px 0;
}

.photo {
	display: block;
	background-color: pink;
	width: 200px;
	height: 200px;
	border-radius: 100px;
	margin: 0 auto 30px;
}

h1 {
	font-size: 44px;
	margin: 0 0 40px;
}

h3 {
	font-size: 22px;
	margin: 30px 0 15px;
}

a {
	color: #5b21b6;
	text-decoration: none;
}

.books {
	background: rgba(0, 0, 0, 0.04);
	border-radius: 5px;
	padding: 10px;
	display: grid;
    grid-template-columns: repeat(10,1fr);
    column-gap: 1px;
}

.books img {
	border-radius: 1px;
	background-color: pink;
	width: 100%;
	height: auto;

	transform: perspective(10em) rotateY(11deg);
	transition: transform ease-in-out 0.2s;
}

.books img:hover {
	border-radius: 3px;
	transform: perspective(10em) rotateY(1deg) scale(1.4);
}

.linke {
	background: rgba(0, 0, 0, 0.04);
	border-radius: 5px;
	padding: 10px 15px;
	display: flex;
	margin-bottom: 10px;
	align-items: center;
	text-decoration: none;
}

.linke img {
	width: 32px;
	margin-right: 15px;
}

.linke p {
	padding: 0;
	margin: 0;
}

.linke .name {
	font-size: 18px;
}

.linke .label {
	font-size: 14px;
	color: #64748b;
}
</style>

<div class="page-welcome">
	
	<div class="box">

		<img src="/andrei.png" alt="Andrei" width="200" height="200" class="photo" />

		<h1 class="text-center">Andrei Igna</h1>

		<h3>Current work</h3>
		<p><img src="https://files.heygov.com/assets/heygov-logo.png" alt="HeyGov" width="20" height="20" /> I’m the CTO of <a href="https://heygov.com" rel="external">HeyGov</a>, a tech startup that builds software for local governments.</p>
		<p><img src="https://dmns.app/images/domains-app-icon.svg" alt="Domains App" width="20" height="20" /> I make <a href="https://dmns.app" rel="external">Domains App</a>, a web app that helps with searching, organizing and monitoring domain names.</p>

		<h3>Books I read</h3>
		<a href="https://www.goodreads.com/andreihere" rel="external" class="books">
			<img src="/books/the-three-body-problem.jpg" alt="Book - The three body problem" />
			<img src="/books/isaac-asimov.jpg" alt="Book - Isaac Asimov" />
			<img src="/books/atlas-shrugged.jpg" alt="Book - Atlas Shrugged" />
			<img src="/books/a-spy-among-friends.jpg" alt="Book - A spy among friends" />
			<img src="/books/the-dark-forest.jpg" alt="Book - The dark forest" />
			<img src="/books/the-taking-of-k129.jpg" alt="Book - The taking of K129" />
			<img src="/books/all-the-birds-in-the-sky.jpg" alt="Book - All the birds in the sky" />
			<img src="/books/creativity-inc.jpg" alt="Book - Creativity Inc" />
			<img src="/books/digital-heretic.jpg" alt="Book - Digital Heretic" />
			<img src="/books/lost-and-founder.jpg" alt="Book - Lost and founder" />
		</a>

		<h3>Follow me on the internet</h3>
		<a href="https://twitter.com/AndreiIgna" class="linke" rel="external">
			<img src="/icon-twitter.svg" alt="Andrei on Twitter" />
			<div>
				<p class="name">Twitter</p>
				<p class="label">@AndreiIgna</p>
			</div>
		</a>
		<a href="https://www.linkedin.com/in/andreiigna/" class="linke" rel="external">
			<img src="/icon-linkedin.svg" alt="Andrei on LinkedIn" />
			<div>
				<p class="name">LinkedIn</p>
				<p class="label">@AndreiIgna</p>
			</div>
		</a>
		<a href="https://github.com/AndreiIgna" class="linke" rel="external">
			<img src="/icon-github.svg" alt="Andrei on GitHub" />
			<div>
				<p class="name">GitHub</p>
				<p class="label">@AndreiIgna</p>
			</div>
		</a>

	</div>

</div>
