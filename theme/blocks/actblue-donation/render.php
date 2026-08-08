<?php
$wrapper_attributes = get_block_wrapper_attributes( [
	'class' => 'actblue-donation-widget max-w-2xl font-sans text-foreground'
] );
$actblue_url        = $attributes['actblueUrl'] ?? 'https://secure.actblue.com/donate/jenkins4cheshirecountyattorney';
$disclaimer         = $attributes['disclaimerText'] ?? "You will be redirected to ActBlue's secure donation page. Paid for by the David Jenkins for County Attorney Committee.";
$preset_amounts     = [ 10, 25, 50, 100, 250, 500 ];
$default_amount    = 25;
?>

<div <?php echo $wrapper_attributes; ?> data-base-url="<?php echo esc_url( $actblue_url ); ?>">
	<div class="mb-8">
		<p class="mb-3 text-sm font-medium text-primary">Select an amount:</p>
		<div class="grid grid-cols-3 gap-2 sm:grid-cols-6">
			<?php foreach ( $preset_amounts as $amount ) : ?>
				<label class="cursor-pointer">
					<input
						type="radio"
						name="donation_amount"
						value="<?php echo esc_attr( $amount ); ?>"
						class="peer donation-radio sr-only"
						<?php checked( $amount, $default_amount ); ?>
					>
					<span class="flex items-center justify-center rounded-lg border border-primary/15 bg-secondary px-3 py-2.5 text-sm font-semibold text-primary transition-all peer-checked:border-accent peer-checked:bg-accent peer-checked:text-white peer-focus-visible:outline peer-focus-visible:outline-2 peer-focus-visible:outline-offset-2 peer-focus-visible:outline-accent hover:border-accent hover:text-accent peer-checked:hover:bg-red-700 peer-checked:hover:text-white">
			            $<?php echo esc_html( $amount ); ?>
			        </span>
				</label>
			<?php endforeach; ?>
		</div>
		<div class="mt-3 flex items-center gap-3">
			<label for="custom-amount-input" class="text-sm text-muted-foreground">
				Or enter a custom amount:
			</label>
			<div class="relative">
				<span class="absolute top-1/2 left-3 -translate-y-1/2 text-sm text-muted-foreground">$</span>
				<input
					id="custom-amount-input"
					type="number"
					placeholder="Other"
					aria-label="Custom donation amount in dollars"
					min="1"
					step="1"
					name="custom_amount"
					class="custom-amount-input w-28 rounded-lg border border-primary/15 bg-secondary py-2 pr-3 pl-7 text-sm text-foreground transition focus:ring-2 focus:ring-primary/25 focus:outline-none"
				>
			</div>
		</div>
	</div>

	<a
		href="<?php echo esc_url( $actblue_url . '?amount=' . $default_amount ); ?>"
		class="donate-action-btn flex w-full items-center justify-center gap-2 rounded-lg bg-accent p-5 text-xl font-semibold text-white no-underline transition-colors hover:bg-red-700"
		target="_blank"
		rel="noopener noreferrer"
	>
		<svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
		Donate <span class="display-amount" aria-live="polite" aria-atomic="true">$<?php echo esc_html( $default_amount ); ?></span> via ActBlue
		<svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
	</a>

	<p class="mt-4 text-center text-sm leading-relaxed text-muted-foreground">
		<?php echo esc_html( $disclaimer ); ?>
	</p>
</div>
