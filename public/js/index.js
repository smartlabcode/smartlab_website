document.addEventListener('DOMContentLoaded', function(event) {
	if (window.innerWidth <= 425) {
		document.querySelector('.section-two').setAttribute('id', 'about');
	}
	var browser = (function() {
		var test = function(regexp) {
			return regexp.test(window.navigator.userAgent);
		};
		switch (true) {
			case test(/edge/i):
				return 'edge';
			case test(/opr/i) && (!!window.opr || !!window.opera):
				return 'opera';
			case test(/chrome/i) && !!window.chrome:
				return 'chrome';
			case test(/trident/i):
				return 'ie';
			case test(/firefox/i):
				return 'firefox';
			case test(/safari/i):
				return 'safari';
			default:
				return 'other';
		}
	})();
	if (browser == 'edge') {
		let teamImg = document.querySelectorAll('.team-img img');
		document.querySelector('.join').style = 'transform: translateX(0)';
		for (let i = 0; i < teamImg.length - 1; i++) {
			teamImg[i].style =
				'border-radius:170% 90% 150% 130%; height:300px; object-fit: cover; object-position: unset;';
		}
	}
	//blogs
	const animation = document.querySelector('.section-one-animation');
	lottie.setQuality('low');
	let animationData = lottie.loadAnimation({
		container: animation, // the dom element that will contain the animation
		renderer: 'svg',
		loop: true,
		autoplay: false,
		path: '/images/home-animation' // the path to the animation json
	});

	let ready = false;
	let loaderContainer = document.querySelector('.loader-container');
	animationData.addEventListener('DOMLoaded', function() {
		ready = true;
		lottie.stop();
		if (window.innerWidth > 425) {
			lottie.play();
		}

		loaderContainer.classList.add('loaderEnd');
		setTimeout(function() {
			loaderContainer.style.display = 'none';
		}, 1000);
	});
	const options = {
		root: null,
		threshold: 0,
		rootMargin: '0px'
	};
	const animationObserver = new IntersectionObserver(function(entries, animationObserver) {
		entries.forEach((entry) => {
			if (entry.isIntersecting && window.innerWidth > 425) {
				lottie.play();
			} else lottie.pause();
		});
	});

	animationObserver.observe(animation);
	let blogValue = document.querySelectorAll('.blog-value');
	let blogText = document.querySelectorAll('.blog-text');
	let temp;
	for (let i = 0; i < blogValue.length; i++) {
		temp = blogValue[i].value.replace(/(<([^>]+)>)/gi, '');
		blogText[i].innerHTML = temp;
	}
	const optionsTeam = {
		root: null,
		threshold: 0.1,
		rootMargin: '300px'
	};

	let teamImages = document.querySelectorAll('.team-img img');
	const teamImagesObserver = new IntersectionObserver(function(entries, observer) {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				entry.target.src = entry.target.dataset.src;
				teamImagesObserver.unobserve(entry.target);
			}
		});
	}, optionsTeam);
	for (let i = 0; i < teamImages.length; i++) {
		teamImagesObserver.observe(teamImages[i]);
	}
	let partnerLogos = document.querySelectorAll('.partners-images img');
	const partnerLogosObserver = new IntersectionObserver(function(entries, observer) {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				entry.target.src = entry.target.dataset.src;
				partnerLogosObserver.unobserve(entry.target);
			}
		});
	}, optionsTeam);
	for (let i = 0; i < partnerLogos.length; i++) {
		partnerLogosObserver.observe(partnerLogos[i]);
	}
	//blogs end
	// about us circle animation start
	const aboutUs = document.querySelector('#aboutUs');
	let i = 0;
	const displays = document.querySelectorAll('.note-display');
	const transitionDuration = 900;

	const observer = new IntersectionObserver(function(entries, observer) {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				for (i = i; i <= 1; i++) {
					displays.forEach((display) => {
						let int = Number(display.dataset.note);
						strokeTransition(display, int);
						increaseNumber(display, int);
						observer.unobserve(display);
					});
				}
			}
		});
	}, options);

	observer.observe(aboutUs);

	function strokeTransition(display, number) {
		let progress = display.querySelector('.circle__progress--fill');
		let radius = progress.r.baseVal.value;
		let circumference = 2 * Math.PI * radius;
		let offset = circumference * (100 - number) / 100;

		progress.style.setProperty('--initialStroke', circumference);
		progress.style.setProperty('--transitionDuration', `${transitionDuration}ms`);

		setTimeout(() => (progress.style.strokeDashoffset = offset), 100);
	}

	function increaseNumber(display, number) {
		let element = display.querySelector(`.percent__int`),
			interval = transitionDuration / number,
			counter = 0;

		let increaseInterval = setInterval(() => {
			if (counter === number) {
				window.clearInterval(increaseInterval);
			}
			element.textContent = counter;
			counter++;
		}, interval);
	}
	// about us circle animation end
	let blogImages = document.querySelectorAll('.blog-image');
	const blogImagesObserer = new IntersectionObserver(function(entries, observer) {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				entry.target.src = entry.target.dataset.src;
				blogImagesObserer.unobserve(entry.target);
			}
		});
	}, options);
	for (let i = 0; i < blogImages.length; i++) {
		blogImagesObserer.observe(blogImages[i]);
	}
	let partnersText = document.querySelector('#partners-text');
	let partnersImage = document.querySelector('#partners-image');
	let partnersName = document.querySelector('#partners-name');
	let partnersCompany = document.querySelector('#partners-company');
	let indicators = document.querySelectorAll('.indicator');
	let partnersTextContainer = document.querySelector('.partners-text');

	let partners = [
		{
			text:
				'“SmartLab team created a fantastic web-based quiz for Afrika Presents with a downloadable badge. Incredible attention to details. Better than anticipated and they had a true understanding and delivered just what we were looking for. We look forward to working together again in the future.”',
			image: '/images/partners-images/Mara.png',
			name: 'Mara Menzies',
			company: 'Afrika Presents Ltd'
		},
		{
			text:
				'“I worked with SmartLab on a new website conceptualisation and development, finding their team to be efficient, effective and responsive as we worked through the iterations. Rizah in particular generated some strong ideas and ensured that tight timelines were adhered to.”',
			image: '/images/partners-images/paul.png',
			name: 'Paul Mallee',
			company: 'MaisonPrive Holiday Homes LLC'
		},
		{
			text:
				'“The Training Terminal was in need of an experienced elearning developer. We tried several compaines, however, SmartLab team with their skills, dedication and ability stood out from the rest. Highly recommended.”',
			image: '/images/partners-images/mark.png',
			name: 'Mark Illingworth ',
			company: 'The Training Terminal'
		},
		{
			text:
				'“It’s a great pleasure to be working with Smartlab – they are exactly how international collaboration should work to the benefit of agencies and customers; and they form an essential part of our future client offer”.',
			image: '/images/partners-images/Nick.png',
			name: 'Nick Saalfeld',
			company: 'Wells Park Communications'
		}
	];
	let j = 0;

	function testemonialsChange() {
		if (j == indicators.length) {
			indicators[j - 1].classList.remove('indicator-opacity');
			j = 0;
		}
		indicators[j].classList.add('indicator-opacity');
		if (j > 0) {
			indicators[j - 1].classList.remove('indicator-opacity');
		}
		partnersChange(partners[j]);
		j++;
	}
	let interval;
	const observer2 = new IntersectionObserver(function(entries, observer2) {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				interval = setInterval(testemonialsChange, 5000);
			} else {
				window.clearInterval(interval, 5000);
			}
		});
	}, options);
	observer2.observe(partnersTextContainer);

	function partnersChange(partners) {
		partnersText.innerText = partners.text;
		partnersImage.src = partners.image;
		partnersName.innerText = partners.name;
		partnersCompany.innerText = partners.company;
	}
	for (let i = 0; i < indicators.length; i++) {
		indicators[i].addEventListener('click', function() {
			for (let m = 0; m < indicators.length; m++) {
				indicators[m].classList.remove('indicator-opacity');
			}
			j = i;
			indicators[i].classList.add('indicator-opacity');
			partnersChange(partners[j]);
		});
	}
	let testemonials = document.querySelector('.testemonials');

	let xDown = null;
	let yDown = null;

	function getTouches(evt) {
		return (
			evt.touches || evt.originalEvent.touches // browser API
		); // jQuery
	}
	testemonials.addEventListener('touchstart', handleTouchStart, {
		passive: true
	});
	testemonials.addEventListener('touchmove', handleTouchMove, {
		passive: true
	});
	testemonials.addEventListener('touchend', handleTouchEnd, {
		passive: true
	});

	function handleTouchEnd(evt) {
		interval = setInterval(testemonialsChange, 5000);
	}

	function handleTouchStart(evt) {
		const firstTouch = getTouches(evt)[0];
		xDown = firstTouch.clientX;
		yDown = firstTouch.clientY;
	}

	function handleTouchMove(evt) {
		if (!xDown || !yDown) {
			return;
		}

		var xUp = evt.touches[0].clientX;
		var yUp = evt.touches[0].clientY;

		var xDiff = xDown - xUp;
		var yDiff = yDown - yUp;

		if (Math.abs(xDiff) > Math.abs(yDiff)) {
			window.clearInterval(interval, 5000);
			/*most significant*/
			if (xDiff > 0) {
				/* left swipe */

				j++;
				if (j < indicators.length) {
					for (let m = 0; m < indicators.length; m++) {
						indicators[m].classList.remove('indicator-opacity');
					}
					indicators[j].classList.add('indicator-opacity');
					partnersChange(partners[j]);
				} else {
					j = 0;
					for (let m = 0; m < indicators.length; m++) {
						indicators[m].classList.remove('indicator-opacity');
					}
					indicators[j].classList.add('indicator-opacity');
					partnersChange(partners[j]);
				}
			} else {
				/* right swipe */
				window.clearInterval(interval, 5000);
				if (j >= 1) {
					j--;
					for (let m = 0; m < indicators.length; m++) {
						indicators[m].classList.remove('indicator-opacity');
					}
					indicators[j].classList.add('indicator-opacity');
					partnersChange(partners[j]);
				} else {
					j = indicators.length - 1;
					for (let m = 0; m < indicators.length; m++) {
						indicators[m].classList.remove('indicator-opacity');
					}
					indicators[j].classList.add('indicator-opacity');
					partnersChange(partners[j]);
				}
			}
		} else {
			if (yDiff > 0) {
				/* up swipe */
			} else {
				/* down swipe */
			}
		}
		/* reset values */
		xDown = null;
		yDown = null;
	}
	const sectionTwoItems = document.querySelectorAll('.section-two-item');
	const options2 = {
		root: null,
		threshold: 0.1,
		rootMargin: '0px'
	};
	const sectionTwoItemsObserver = new IntersectionObserver(function(entries, sectionTwoItemsObserver) {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				entry.target.style.opacity = 1;
				sectionTwoItemsObserver.unobserve(entry.target);
			}
		});
	}, options2);
	sectionTwoItems.forEach((item) => {
		sectionTwoItemsObserver.observe(item);
	});
});
