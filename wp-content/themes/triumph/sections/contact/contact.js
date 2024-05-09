document.addEventListener( 'DOMContentLoaded', () => {
	'use strict'

	ymaps.ready( function(){
		const
			mapEl = document.getElementById( 'contact-map' ),
			markersEl = [...mapEl.closest( '.contact' ).querySelectorAll( '.contact-button-inner' )],
			zoomDefault = 15,
			map = new ymaps.Map( mapEl.id, {
				center: [55.751574, 37.573856],
				zoom: zoomDefault,
				behaviors: ['drag', 'multiTouch', 'dblClickZoom']
			} ),
			geoInitial = ymaps.geocode( markersEl[0].querySelector( 'address' ).innerHTML.trim() )

		// Just center map using first marker's geo.
		geoInitial.then( res => {
			map.setCenter( res.geoObjects.get( 0 ).geometry.getCoordinates(), zoomDefault )
		} )

		markersEl.forEach( ( marker, i, arr ) => {
			const geo = ymaps.geocode( marker.querySelector( 'address' ).innerHTML.trim() )

			geo.then( res => {
				const
					coords = res.geoObjects.get( 0 ).geometry.getCoordinates(),
					mark = new ymaps.Placemark( coords, {
						hintContent: '',
						balloonContent: marker.innerHTML
					}, {
						preset: 'islands#circleIcon',
						iconColor: '#E53724'
					} )

				map.geoObjects.add( mark )
				marker.addEventListener( 'click', () => {
					arr.forEach( m => m.closest( '.contact-button' ).classList.remove( 'active' ) )
					marker.closest( '.contact-button' ).classList.add( 'active' )
					map.setCenter( coords, zoomDefault, { duration: 1000 } )
				} )
			} )
		} )
	} );
} )