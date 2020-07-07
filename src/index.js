
// Add Styles
import style from "./style.scss";

// Add JS
import jQuery from 'jquery'
import 'bootstrap'

jQuery($ => {
	let scrolled = undefined
	const $window = $(window)
	const $body = $(document.body)


	// General UI
	$('[data-toggle="tooltip"]').tooltip()


	// Detect scrolling
	$window.scroll(function(e) {
		const top = $window.scrollTop()

		if (top > 100 && scrolled !== true) {
			$body.addClass('scrolled')
			scrolled = true
		} else if (top < 100 && scrolled === true) {
			$body.removeClass('scrolled')
			scrolled = false
		}
	})


})
