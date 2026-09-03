( function () {
	'use strict';

	function zipFactor( zip ) {
		if ( ! zip || zip.length < 3 ) return 1;
		var digits = zip.split( '' ).reduce( function ( sum, ch ) {
			var n = Number( ch );
			return sum + ( isNaN( n ) ? 0 : n );
		}, 0 );
		return 0.9 + ( digits % 10 ) * 0.02;
	}

	function nextSlot( categoryId, scopeId ) {
		var base = 2 + ( categoryId.length % 3 ) + ( scopeId === 'full' ? 3 : 0 );
		var d = new Date();
		d.setDate( d.getDate() + base );
		return d.toLocaleDateString( undefined, {
			weekday: 'long',
			month: 'short',
			day: 'numeric',
		} );
	}

	function initEstimator( root ) {
		var categoryButtons = root.querySelectorAll( '[data-role="categories"] .meridian-estimator__chip' );
		var scopeButtons = root.querySelectorAll( '[data-role="scopes"] .meridian-estimator__scope' );
		var zipInput = root.querySelector( '[data-role="zip"]' );
		var priceEl = root.querySelector( '[data-role="price"]' );
		var summaryEl = root.querySelector( '[data-role="summary"]' );
		var confidenceLabel = root.querySelector( '[data-role="confidence-label"]' );
		var confidenceFill = root.querySelector( '[data-role="confidence-fill"]' );
		var nextSlotEl = root.querySelector( '[data-role="next-slot"]' );
		var submitBtn = root.querySelector( '[data-role="submit"]' );
		var submitLabel = root.querySelector( '[data-role="submit-label"]' );
		var successEl = root.querySelector( '[data-role="success"]' );

		var state = {
			categoryId: categoryButtons.length ? categoryButtons[ 0 ].dataset.id : 'electrical',
			categoryName: categoryButtons.length ? categoryButtons[ 0 ].dataset.name : 'Electrical',
			basePrice: categoryButtons.length ? Number( categoryButtons[ 0 ].dataset.price ) : 140,
			scopeId: 'standard',
			scopeLabel: 'Standard job',
			mult: 2.6,
			zip: '',
			requested: false,
		};

		function render() {
			var factor = zipFactor( state.zip );
			var mid = state.basePrice * state.mult * factor;
			var low = Math.round( ( mid * 0.85 ) / 5 ) * 5;
			var high = Math.round( ( mid * 1.2 ) / 5 ) * 5;

			priceEl.innerHTML = '$' + low + '<span> – $' + high + '</span>';
			summaryEl.textContent = state.categoryName + ' · ' + state.scopeLabel;

			var highConfidence = state.zip.length >= 3;
			confidenceLabel.textContent = highConfidence ? 'High' : 'Good';
			confidenceFill.style.width = highConfidence ? '92%' : '72%';

			nextSlotEl.textContent = nextSlot( state.categoryId, state.scopeId );

			submitLabel.textContent = state.requested ? 'Estimate requested ✓' : 'Request this estimate';
			successEl.hidden = ! state.requested;
		}

		categoryButtons.forEach( function ( btn ) {
			btn.addEventListener( 'click', function () {
				categoryButtons.forEach( function ( b ) {
					b.classList.remove( 'is-active' );
					b.setAttribute( 'aria-pressed', 'false' );
				} );
				btn.classList.add( 'is-active' );
				btn.setAttribute( 'aria-pressed', 'true' );

				state.categoryId = btn.dataset.id;
				state.categoryName = btn.dataset.name;
				state.basePrice = Number( btn.dataset.price );
				state.requested = false;
				render();
			} );
		} );

		scopeButtons.forEach( function ( btn ) {
			btn.addEventListener( 'click', function () {
				scopeButtons.forEach( function ( b ) {
					b.classList.remove( 'is-active' );
					b.setAttribute( 'aria-pressed', 'false' );
				} );
				btn.classList.add( 'is-active' );
				btn.setAttribute( 'aria-pressed', 'true' );

				state.scopeId = btn.dataset.id;
				state.scopeLabel = btn.dataset.label;
				state.mult = Number( btn.dataset.mult );
				state.requested = false;
				render();
			} );
		} );

		if ( zipInput ) {
			zipInput.addEventListener( 'input', function () {
				var digitsOnly = zipInput.value.replace( /[^0-9]/g, '' ).slice( 0, 5 );
				zipInput.value = digitsOnly;
				state.zip = digitsOnly;
				state.requested = false;
				render();
			} );
		}

		if ( submitBtn ) {
			submitBtn.addEventListener( 'click', function () {
				state.requested = true;
				render();
			} );
		}

		render();
	}

	document.addEventListener( 'DOMContentLoaded', function () {
		document.querySelectorAll( '.meridian-estimator' ).forEach( initEstimator );
	} );
} )();
