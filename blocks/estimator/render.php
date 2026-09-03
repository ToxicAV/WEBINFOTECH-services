<?php
/**
 * Server-side render for the meridian/estimator block.
 * The interactive behaviour is handled entirely by view.js (vanilla JS)
 * reading the data-* attributes rendered here — no build step required.
 *
 * @var array $attributes Block attributes (unused — this block has no attributes).
 */

$categories = array(
	array( 'id' => 'electrical', 'name' => 'Electrical', 'basePrice' => 140 ),
	array( 'id' => 'plumbing', 'name' => 'Plumbing', 'basePrice' => 120 ),
	array( 'id' => 'hvac', 'name' => 'Heating & Cooling', 'basePrice' => 165 ),
	array( 'id' => 'cleaning', 'name' => 'Deep Cleaning', 'basePrice' => 95 ),
	array( 'id' => 'landscaping', 'name' => 'Landscaping', 'basePrice' => 110 ),
	array( 'id' => 'handyman', 'name' => 'Handyman', 'basePrice' => 85 ),
	array( 'id' => 'roofing', 'name' => 'Roofing', 'basePrice' => 210 ),
	array( 'id' => 'painting', 'name' => 'Painting', 'basePrice' => 130 ),
);

$scopes = array(
	array( 'id' => 'small', 'label' => 'Quick fix', 'hint' => 'Under 2 hours, one visit', 'mult' => 1, 'icon' => '⚡' ),
	array( 'id' => 'standard', 'label' => 'Standard job', 'hint' => 'Half-day, parts included', 'mult' => 2.6, 'icon' => '🔧' ),
	array( 'id' => 'full', 'label' => 'Full project', 'hint' => 'Multi-day, may need a permit', 'mult' => 5.4, 'icon' => '🏠' ),
);

$wrapper_attributes = get_block_wrapper_attributes( array( 'class' => 'meridian-estimator' ) );
?>
<div <?php echo $wrapper_attributes; // phpcs:ignore ?>>
	<div class="meridian-estimator__card">

		<div class="meridian-estimator__head">
			<div>
				<p class="meridian-estimator__eyebrow">Build your estimate</p>
				<h3 class="meridian-estimator__title">Tell us about your project</h3>
			</div>
		</div>

		<fieldset class="meridian-estimator__fieldset">
			<legend>What do you need?</legend>
			<div class="meridian-estimator__chips" data-role="categories">
				<?php foreach ( $categories as $i => $c ) : ?>
					<button type="button"
						class="meridian-estimator__chip<?php echo 0 === $i ? ' is-active' : ''; ?>"
						data-id="<?php echo esc_attr( $c['id'] ); ?>"
						data-name="<?php echo esc_attr( $c['name'] ); ?>"
						data-price="<?php echo esc_attr( $c['basePrice'] ); ?>"
						aria-pressed="<?php echo 0 === $i ? 'true' : 'false'; ?>">
						<?php echo esc_html( $c['name'] ); ?>
					</button>
				<?php endforeach; ?>
			</div>
		</fieldset>

		<fieldset class="meridian-estimator__fieldset" style="margin-top:1.75rem">
			<legend>Project size</legend>
			<div class="meridian-estimator__scopes" data-role="scopes">
				<?php foreach ( $scopes as $s ) : ?>
					<button type="button"
						class="meridian-estimator__scope<?php echo 'standard' === $s['id'] ? ' is-active' : ''; ?>"
						data-id="<?php echo esc_attr( $s['id'] ); ?>"
						data-label="<?php echo esc_attr( $s['label'] ); ?>"
						data-mult="<?php echo esc_attr( $s['mult'] ); ?>"
						aria-pressed="<?php echo 'standard' === $s['id'] ? 'true' : 'false'; ?>">
						<span class="meridian-estimator__scope-icon"><?php echo esc_html( $s['icon'] ); ?></span>
						<span class="meridian-estimator__scope-label"><?php echo esc_html( $s['label'] ); ?></span>
						<span class="meridian-estimator__scope-hint"><?php echo esc_html( $s['hint'] ); ?></span>
						<span class="meridian-estimator__scope-mult"><?php echo esc_html( $s['mult'] ); ?>&times; base</span>
					</button>
				<?php endforeach; ?>
			</div>
		</fieldset>

		<label class="meridian-estimator__zip-label">
			<span>Where is the project?</span>
			<input type="text" inputmode="numeric" maxlength="5" placeholder="Enter ZIP code" data-role="zip" class="meridian-estimator__zip-input" />
		</label>

		<div class="meridian-estimator__result">
			<div class="meridian-estimator__result-head">
				<div>
					<p class="meridian-estimator__result-eyebrow">Estimated range</p>
					<p class="meridian-estimator__result-sub" data-role="summary">Electrical · Standard job</p>
				</div>
				<span class="meridian-estimator__result-tag">ESTIMATE</span>
			</div>

			<div class="meridian-estimator__price" data-role="price">$0<span> – $0</span></div>

			<div class="meridian-estimator__confidence">
				<div class="meridian-estimator__confidence-row">
					<span>Estimate confidence</span>
					<span data-role="confidence-label">High</span>
				</div>
				<div class="meridian-estimator__confidence-bar">
					<div class="meridian-estimator__confidence-fill" data-role="confidence-fill" style="width:72%"></div>
				</div>
			</div>

			<div class="meridian-estimator__next">
				Next available: <span data-role="next-slot">—</span>
			</div>
		</div>

		<button type="button" class="meridian-estimator__submit" data-role="submit">
			<span data-role="submit-label">Request this estimate</span> →
		</button>

		<div class="meridian-estimator__success" data-role="success" hidden>
			<p>✓ Your estimate is ready</p>
			<p>A verified professional can review this estimate with you.</p>
		</div>

	</div>
</div>
