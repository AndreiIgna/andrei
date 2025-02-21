/** @type {import('@sveltejs/kit').PageServerLoad} */
export async function load({ locals, url }) {
	return {
		location: 'Brasov, Romania',
	}
}
