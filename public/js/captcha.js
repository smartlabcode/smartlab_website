document.addEventListener('DOMContentLoaded', function(event) {
	let recaptcha = document.querySelector('.g-recaptcha');
	recaptcha.dataset.badge = 'bottomleft';
	recaptcha.style.zIndex = 100;
});
