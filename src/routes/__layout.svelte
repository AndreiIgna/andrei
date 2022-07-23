<script>
import { webVitals } from '$lib/vitals';
import { browser } from '$app/env';
import { page } from '$app/stores';
import '../app.css';

let id1 = import.meta.env.VERCEL_ANALYTICS_ID;
let id2 = process.env.VERCEL_ANALYTICS_ID;
const analyticsId = id1 || id2

console.log({
	path: $page.url.pathname,
	params: $page.params,
	analyticsId,
	id1,
	id2
})

$: if (browser && analyticsId) {
	webVitals({
		path: $page.url.pathname,
		params: $page.params,
		analyticsId
	})
}
</script>

<div class="site">
	<slot></slot>
</div>
