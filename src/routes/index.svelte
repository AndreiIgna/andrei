<svelte:head>
	<title>andrei.net</title>

	<meta name="title" content="Andrei's website">
	<meta name="description" content="Tap this link to learn more about Andrei">

	<meta property="og:type" content="website">
	<meta property="og:url" content="https://andrei.net/">
	<meta property="og:title" content="Andrei's website">
	<meta property="og:description" content="Tap this link to learn more about Andrei">
	<meta property="og:image" content="https://andrei.net/andrei-reading.jpg">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:url" content="https://andrei.net/">
	<meta name="twitter:title" content="Andrei's website">
	<meta name="twitter:description" content="Tap this link to learn more about Andrei">
	<meta name="twitter:image" content="https://andrei.net/andrei-reading.jpg">
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
	max-width: 550px;
	margin: 0 auto;
	padding: 30px 0;
}

.photo {
	display: block;
	background-color: pink;
	width: 170px;
	height: 170px;
	border-radius: 100px;
	margin: 0 auto 20px;
}

h1 {
	font-size: 38px;
	margin: 0 0 20px;
}

p.location {
	margin: 0 0 30px;
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
	transform: perspective(10em) rotateY(1deg) scale(1.5);
	z-index: 50;
}

.linke {
	background-color: rgba(0, 0, 0, 0.04);
	border-radius: 5px;
	padding: 10px 15px;
	display: flex;
	margin-bottom: 10px;
	align-items: center;
	text-decoration: none;
	transition: background-color ease-in-out 0.1s;
}

.linke:hover {
	background-color: rgba(0, 0, 0, 0.1);
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

		<img src="/andrei.webp" alt="Andrei" width="200" height="200" class="photo" />

		<h1 class="text-center">Andrei Igna</h1>
		<p class="text-center">📍 Brasov, Romania</p>

		<h3>Current work</h3>
		<p><img src="/logo-heygov.webp" alt="HeyGov" width="20" height="20" /> I’m the CTO of <a href="https://heygov.com" rel="external">HeyGov</a>, a tech startup that builds software for local governments.</p>
		<p><img src="/logo-dmns.app.svg" alt="Domains App" width="20" height="20" /> I make <a href="https://dmns.app" rel="external">Domains App</a>, a web app that helps with searching, organizing and monitoring domain names.</p>

		<h3>Books I read</h3>
		<a href="https://www.goodreads.com/andreihere" rel="external" class="books">
			<img src="/books/the-three-body-problem.webp" alt="Book - The three body problem" loading="lazy" />
			<img src="/books/isaac-asimov.webp" alt="Book - Isaac Asimov" loading="lazy" />
			<img src="/books/atlas-shrugged.webp" alt="Book - Atlas Shrugged" loading="lazy" />
			<img src="/books/a-spy-among-friends.webp" alt="Book - A spy among friends" loading="lazy" />
			<img src="/books/the-dark-forest.webp" alt="Book - The dark forest" loading="lazy" />
			<img src="/books/the-taking-of-k129.webp" alt="Book - The taking of K129" loading="lazy" />
			<img src="/books/all-the-birds-in-the-sky.webp" alt="Book - All the birds in the sky" loading="lazy" />
			<img src="/books/creativity-inc.webp" alt="Book - Creativity Inc" loading="lazy" />
			<img src="/books/digital-heretic.webp" alt="Book - Digital Heretic" loading="lazy" />
			<img src="/books/lost-and-founder.webp" alt="Book - Lost and founder" loading="lazy" />
		</a>

		<h3>Follow me on the internet</h3>
		<a href="https://twitter.com/AndreiIgna" class="linke" rel="external">
			<img src="/icon-twitter.svg" alt="Andrei on Twitter" />
			<div>
				<p class="name">Twitter</p>
				<p class="label">@AndreiIgna</p>
			</div>
		</a>
		<a href="https://www.strava.com/athletes/andreihere" class="linke" rel="external">
			<img src="/icon-strava.svg" alt="Andrei on Strava" />
			<div>
				<p class="name">Strava</p>
				<p class="label">Sometimes I run, sometimes I bike</p>
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
