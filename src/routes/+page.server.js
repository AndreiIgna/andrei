import { EDGE_CONFIG } from '$env/static/private';
import { createClient } from '@vercel/edge-config'

const edgeConfig = createClient(EDGE_CONFIG)

/** @type {import('@sveltejs/kit').PageServerLoad} */
export async function load({ locals, url }) {
	return {
		location: await edgeConfig.get('andrei-location'),
	}
}
