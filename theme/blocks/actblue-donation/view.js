const initActBlueWidgets = () => {
	const widgets = document.querySelectorAll('.actblue-donation-widget');

	widgets.forEach((widget) => {
		if (widget.dataset.initialized === 'true') return;
		widget.dataset.initialized = 'true';

		const baseUrl =
			widget.dataset.baseUrl ||
			'https://secure.actblue.com/donate/jenkins4cheshirecountyattorney';
		const radioButtons = widget.querySelectorAll(
			'input[type="radio"][name="donation_amount"]'
		);
		const customInput = widget.querySelector('.custom-amount-input');
		const donateLink = widget.querySelector('.donate-action-btn');
		const displayAmount = widget.querySelector('.display-amount');

		const updateDonateLink = (amount) => {
			if (!amount || isNaN(amount) || amount <= 0) return;
			const formattedAmount = `$${parseFloat(amount).toLocaleString('en-US')}`;
			if (displayAmount) displayAmount.textContent = formattedAmount;
			if (donateLink) {
				donateLink.href = `${baseUrl}?amount=${encodeURIComponent(amount)}`;
			}
		};

		radioButtons.forEach((radio) => {
			radio.addEventListener('change', (e) => {
				if (customInput) customInput.value = '';
				updateDonateLink(e.target.value);
			});
		});

		if (customInput) {
			customInput.addEventListener('input', (e) => {
				const value = e.target.value;
				if (value && value > 0) {
					radioButtons.forEach((r) => (r.checked = false));
					updateDonateLink(value);
				} else {
					const defaultRadio = widget.querySelector(
						'input[type="radio"][value="25"]'
					);
					if (defaultRadio) {
						defaultRadio.checked = true;
						updateDonateLink(defaultRadio.value);
					}
				}
			});
		}
	});
};

// Execute immediately if DOM is already ready, otherwise wait for DOMContentLoaded
if (document.readyState === 'loading') {
	document.addEventListener('DOMContentLoaded', initActBlueWidgets);
} else {
	initActBlueWidgets();
}
