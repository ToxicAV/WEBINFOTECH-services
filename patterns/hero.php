<?php
/**
 * Title: Hero
 * Slug: meridian-home-services/hero
 * Categories: meridian
 * Block Types: core/template-part/front-page
 */
?>
<!-- wp:group {"tagName":"section","className":"meridian-decor","style":{"border":{"bottom":{"width":"1px","color":"#D8DAD3"}},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"canvas","layout":{"type":"constrained","contentSize":"1240px"}} -->
<section id="top" class="wp-block-group meridian-decor has-canvas-background-color has-background" style="border-bottom-color:#D8DAD3;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

	<div class="meridian-glow brass" style="width:22rem;height:22rem;top:-8rem;right:-8rem"></div>
	<div class="meridian-glow teal" style="width:22rem;height:22rem;bottom:-10rem;left:-10rem"></div>

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"3rem"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">

			<!-- wp:paragraph {"className":"meridian-badge"} -->
			<p class="meridian-badge"><span class="meridian-dot"></span>Trusted home services</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(2.5rem,5vw,3.75rem)","lineHeight":"1.02","textTransform":"uppercase"}}} -->
			<h1 class="wp-block-heading" style="font-size:clamp(2.5rem,5vw,3.75rem);line-height:1.02;text-transform:uppercase">Home repairs,<br /><span style="color:var(--wp--preset--color--teal)">handled right.</span></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.6"}},"textColor":"ink-faint"} -->
			<p class="has-ink-faint-color has-text-color" style="font-size:1.125rem;max-width:34rem">Find trusted professionals for repairs, maintenance, renovations, and everything your home needs.</p>
			<!-- /wp:paragraph -->

			<!-- wp:html -->
			<form class="meridian-hero-search" style="margin-top:2rem;background:#fff;border:1px solid #D8DAD3;border-radius:0.75rem;padding:0.5rem;display:flex;flex-wrap:wrap;gap:0.5rem;max-width:40rem;box-shadow:0 1px 0 0 rgba(27,36,48,0.06)" onsubmit="document.getElementById('estimate')?.scrollIntoView({behavior:'smooth'});return false;">
				<label style="flex:1 1 200px;display:flex;align-items:center;gap:0.5rem;padding:0.6rem 0.75rem">
					<span class="screen-reader-text">What do you need done?</span>
					<input type="text" placeholder="What do you need done?" style="width:100%;border:none;outline:none;background:transparent;font-size:0.9375rem" />
				</label>
				<label style="flex:0 0 9rem;display:flex;align-items:center;gap:0.5rem;padding:0.6rem 0.75rem;border-left:1px solid #D8DAD3">
					<span class="screen-reader-text">ZIP code</span>
					<input type="text" inputmode="numeric" placeholder="ZIP code" style="width:100%;border:none;outline:none;background:transparent;font-size:0.9375rem" />
				</label>
				<button type="submit" style="padding:0.75rem 1.5rem;border-radius:0.6rem;background:#C98A34;color:#1B2430;font-weight:700;font-size:0.9375rem;border:none;cursor:pointer">Find pros</button>
			</form>
			<!-- /wp:html -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"},"spacing":{"margin":{"top":"1.5rem"}}},"textColor":"ink-faint"} -->
			<p class="has-ink-faint-color has-text-color" style="font-size:0.875rem;margin-top:1.5rem">Popular: <a href="/#categories">Electrical</a> · <a href="/#categories">Plumbing</a> · <a href="/#categories">Heating &amp; Cooling</a> · <a href="/#categories">Deep Cleaning</a></p>
			<!-- /wp:paragraph -->

			<!-- wp:columns {"style":{"spacing":{"margin":{"top":"1.75rem"},"blockGap":{"left":"1.75rem"}}}} -->
			<div class="wp-block-columns" style="margin-top:1.75rem">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem","fontWeight":"700"}}} --><p style="font-size:1.5rem;font-weight:700">32K+</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"}},"textColor":"ink-faint"} --><p class="has-ink-faint-color has-text-color" style="font-size:0.75rem">Verified pros</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem","fontWeight":"700"}}} --><p style="font-size:1.5rem;font-weight:700">4.9/5</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"}},"textColor":"ink-faint"} --><p class="has-ink-faint-color has-text-color" style="font-size:0.75rem">Average rating</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem","fontWeight":"700"}}} --><p style="font-size:1.5rem;font-weight:700">120K+</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"}},"textColor":"ink-faint"} --><p class="has-ink-faint-color has-text-color" style="font-size:0.75rem">Jobs completed</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis:45%">
			<!-- wp:group {"style":{"border":{"radius":"1.25rem"},"spacing":{"padding":{"top":"3rem","bottom":"3rem","left":"1.5rem","right":"1.5rem"}}},"backgroundColor":"ink","textColor":"canvas","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
			<div class="wp-block-group has-canvas-color has-ink-background-color has-text-color has-background" style="border-radius:1.25rem;padding-top:3rem;padding-bottom:3rem;padding-left:1.5rem;padding-right:1.5rem;min-height:26rem">

				<!-- wp:group {"className":"meridian-card meridian-float","style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"1rem","right":"1rem"}}},"backgroundColor":"panel","layout":{"type":"flex"}} -->
				<div class="wp-block-group meridian-card meridian-float has-panel-background-color has-background" style="padding-top:0.75rem;padding-bottom:0.75rem;padding-left:1rem;padding-right:1rem;align-self:flex-end">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem","fontWeight":"700"}}} --><p style="font-size:0.8125rem;font-weight:700">✓ Verified Pro — License checked</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"meridian-card","style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"1rem","right":"1rem"},"margin":{"top":"1.5rem"}}},"backgroundColor":"panel","layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group meridian-card has-panel-background-color has-background" style="margin-top:1.5rem;padding-top:0.75rem;padding-bottom:0.75rem;padding-left:1rem;padding-right:1rem;align-self:flex-start">
					<!-- wp:paragraph {"textColor":"brass"} --><p class="has-brass-color has-text-color">★★★★★</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem","fontWeight":"600"}}} --><p style="font-size:0.8125rem;font-weight:600">4.9 average rating — from 18,000+ homeowners</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"meridian-card","style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"1rem","right":"1rem"},"margin":{"top":"1.5rem"}}},"backgroundColor":"panel","layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group meridian-card has-panel-background-color has-background" style="margin-top:1.5rem;padding-top:0.75rem;padding-bottom:0.75rem;padding-left:1rem;padding-right:1rem;align-self:flex-end">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8125rem","fontWeight":"700"}}} --><p style="font-size:0.8125rem;font-weight:700">Today's demand — Plumbing 82% · Electrical 67%</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</section>
<!-- /wp:group -->
