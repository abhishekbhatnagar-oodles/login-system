( function( api ) {

	// Extends our custom "hairstyle" section.
	api.sectionConstructor['hairstyle'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );