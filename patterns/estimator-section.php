<?php
/**
 * Title: Estimator Section
 * Slug: meridian-home-services/estimator-section
 * Categories: meridian
 */
?>
<!-- wp:group {"tagName":"section","backgroundColor":"panel","style":{"border":{"bottom":{"width":"1px","color":"#D8DAD3"}},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<section id="estimate" class="wp-block-group has-panel-background-color has-background" style="border-bottom-color:#D8DAD3;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"3rem"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"38%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:38%">

			<!-- wp:paragraph {"className":"meridian-badge"} -->
			<p class="meridian-badge"><span class="meridian-dot"></span>Instant estimate</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(1.875rem,4vw,3rem)"}}} -->
			<h2 class="wp-block-heading" style="font-size:clamp(1.875rem,4vw,3rem)">Know the price before the work begins.</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"ink-faint"} -->
			<p class="has-ink-faint-color has-text-color">Build your project in seconds and get an estimated price range based on service, project size and location.</p>
			<!-- /wp:paragraph -->

			<!-- wp:columns {"style":{"spacing":{"margin":{"top":"1.5rem"},"blockGap":{"left":"0.75rem"}}}} -->
			<div class="wp-block-columns" style="margin-top:1.5rem">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"className":"meridian-card","backgroundColor":"canvas","layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group meridian-card has-canvas-background-color has-background">
						<!-- wp:paragraph {"textColor":"teal"} --><p class="has-teal-color has-text-color">✓</p><!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.875rem"}}} --><p style="font-weight:600;font-size:0.875rem">No account required</p><!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:group {"className":"meridian-card","backgroundColor":"canvas","layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group meridian-card has-canvas-background-color has-background">
						<!-- wp:paragraph {"textColor":"brass"} --><p class="has-brass-color has-text-color">⚡</p><!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.875rem"}}} --><p style="font-weight:600;font-size:0.875rem">Instant pricing</p><!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"62%"} -->
		<div class="wp-block-column" style="flex-basis:62%">
			<!-- wp:meridian/estimator /-->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</section>
<!-- /wp:group -->
