const ppData = window.podcastPlayerData || {};
let podcastVariables = {
	podcastPlayerData: jQuery.extend(true, {}, ppData),
	currentlyPlaying: false,

	/**
	 * Enable scroll on the element that scrolls the document.
	 * 
	 * @since 1.2.3
	 */
	isStyleSupport(style, item) {
		const supported = window.ppmejsSettings.stSup || false;
		if (! supported || ! style) return false;
		return supported[style].includes(item);
	},

	/**
	 * Check if element is currently in viewport.
	 * 
	 * @since 5.2.0
	 */
	isInViewport(elem) {
		if (! elem || ! elem.length) return;
		const top_of_element = elem.offset().top;
		const bottom_of_element = elem.offset().top + elem.outerHeight();
		const bottom_of_screen = jQuery(window).scrollTop() + jQuery(window).innerHeight();
		const top_of_screen = jQuery(window).scrollTop();

		return bottom_of_screen > top_of_element && top_of_screen < bottom_of_element;
	},

	/**
	 * Enable scroll on the element that scrolls the document.
	 * 
	 * @since 5.2.0
	 */
	stickyonScroll() {
		if (this.currentlyPlaying) this.currentlyPlaying();
	}
};
export default podcastVariables;