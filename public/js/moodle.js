document.addEventListener('DOMContentLoaded', function(event) {
	const animation = document.querySelector('.section-one-animation');
	let animationData = lottie.loadAnimation({
		container: animation, // the dom element that will contain the animation
		renderer: 'svg',
		loop: true,
		autoplay: false,
		path: '/images/moodle-animation' // the path to the animation json
	});
	lottie.setQuality('medium');
	let ready = false;
	let loaderContainer = document.querySelector('.loader-container');
	animationData.addEventListener('DOMLoaded', function() {
		ready = true;
		lottie.play();
		loaderContainer.classList.add('loaderEnd');
		setTimeout(function() {
			loaderContainer.style.display = 'none';
		}, 1000);
	});
	const animationObserver = new IntersectionObserver(function(entries, animationObserver) {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				lottie.play();
			} else lottie.pause();
		});
	});
	animationObserver.observe(animation);

	let images = [ '/images/mockups/dl-fin-unsa-ba.jpg', '/images/mockups/edu-smartlab-ba.jpg' ];
	const header = [ 'Popup header 1', 'Popup header 2' ];
	const description = [ 'Popup description 1', 'Popup description 2' ];

	let popupClickLeft = document.querySelector('.popup-click-left');
	let popupClickRight = document.querySelector('.popup-click-right');
	let popupVideo = document.querySelector('.popup-content');
	let popupImage = document.querySelector('#popup-image');
	let popupImageBack = document.querySelector('#popup-image-back');
	let closePopup = document.querySelector('.close');
	let popup = document.querySelector('.popup');
	let popupOverlay = document.querySelector('.popup-overlay');

	closePopup.addEventListener('click', popupClose);
	popupOverlay.addEventListener('click', popupClose);

	let popupDescription = document.querySelector('#popup-description');
	let popupHeader = document.querySelector('#popup-header');
	let popupNext = document.querySelector('#popup-next');
	let popupPrev = document.querySelector('#popup-prev');
	let currentImage = 0;

	closePopup.addEventListener('click', popupClose);
	popupOverlay.addEventListener('click', popupClose);
	popupNext.addEventListener('click', () => {
		currentImage++;
		if (currentImage >= description.length) {
			popupContent(0, 'right');
		} else {
			popupContent(currentImage, 'right');
		}
	});
	popupPrev.addEventListener('click', () => {
		currentImage--;
		if (currentImage < 0) {
			popupContent(description.length - 1, 'left');
		} else {
			popupContent(currentImage, 'left');
		}
	});

	function popupClose() {
		popupImage.src = '';
		closePopup.style.display = 'none';
		popup.classList.remove('shadow-2');
		popupOverlay.style.width = '0vw';
		popupOverlay.style.height = '0vh';
	}

	function popupContent(imgIndex, side) {
		// privremeno ukinuto otvaranje novog taba umjesto popup-a na mobitelima
		let notDisabled = false;

		if (/*window.innerWidth < 768*/ notDisabled) {
			console.log(window.location.origin + images[imgIndex]);
			window.localStorage.setItem('imagePath', images[imgIndex]);
			window.localStorage.setItem('header', header[imgIndex]);
			window.localStorage.setItem('description', description[imgIndex]);
			window.open(window.location.origin + '/pages/project');
		} else {
			let cssClasName = 'slideFromLeft';
			currentImage = imgIndex;
			popupImage.src = images[imgIndex];
			if (side == 'right') {
				if (imgIndex >= 1) {
					popupImageBack.src = images[imgIndex - 1];
				}
				if (imgIndex == 0) {
					popupImageBack.src = images[images.length - 1];
				}
				if (imgIndex == images.length) {
					popupImageBack.src = images[0];
				}
			} else {
				if (imgIndex >= 0) {
					popupImageBack.src = images[imgIndex + 1];
				}
				if (imgIndex == images.length - 1) {
					popupImageBack.src = images[0];
				}
			}

			if (side == 'left') {
				popupImage.removeAttribute('style');
				popupImage.style.right = '-100%';

				popupImage.classList.remove('slideFromLeft');
				void popupHeader.offsetWidth;
				cssClasName = 'slideFromRight';
			} else {
				popupImage.removeAttribute('style');
				popupImage.style.left = '-100%';

				popupImage.classList.remove('slideFromRight');
				void popupHeader.offsetWidth;
				cssClasName = 'slideFromLeft';
			}
			popupHeader.classList.remove('fadeIn');
			popupDescription.classList.remove('fadeIn');
			popupImage.classList.remove(cssClasName);
			popupImage.classList.remove('fadeIn');
			void popupHeader.offsetWidth;
			void popupDescription.offsetWidth;
			void popupImage.offsetWidth;
			popupHeader.classList.add('fadeIn');
			popupDescription.classList.add('fadeIn');
			popupImage.classList.add(cssClasName);
			popupImage.classList.add('fadeIn');
			closePopup.style.display = 'inline-block';
			popup.classList.add('shadow-2');
			popupOverlay.style.width = '100vw';
			popupOverlay.style.height = '100vh';
			popupHeader.innerText = header[imgIndex];
			popupDescription.innerText = description[imgIndex];
		}
	}

	let rightImg = document.querySelector('#right-img');
	let leftImg = document.querySelector('#left-img');
	let leftImgOverlay = document.querySelector('#left-img-overlay');
	let rightImgOverlay = document.querySelector('#right-img-overlay');

	function clipPath(elem1, elem2) {
		elem1.classList.remove('circle-r');
		elem2.classList.remove('circle-l');
		void elem1.offsetWidth;
		void elem2.offsetWidth;
		elem1.classList.add('circle-r');
		elem2.classList.add('circle-l');
	}
	popupClickLeft.addEventListener('click', () => popupContent(imgOne, 'left'));
	popupClickRight.addEventListener('click', () => popupContent(imgTwo, 'right'));
	let prev = document.querySelector('#prev');
	let next = document.querySelector('#next');

	prev.addEventListener('click', function() {
		changeImage('previous');
		clipPath(rightImg, leftImg);
	});
	next.addEventListener('click', function() {
		changeImage('next');
		clipPath(rightImg, leftImg);
	});
	let currentPair = 0;

	function addIndicator(currentPair) {
		if (window.innerWidth > 768) {
			for (let i = 0; i < images.length / 2; i++) {
				sliderIndicator.childNodes[i].classList.remove('active-indicator');
				sliderIndicator.childNodes[currentPair].classList.add('active-indicator');
			}
		} else {
			for (let i = 0; i < images.length; i++) {
				sliderIndicator.childNodes[i].classList.remove('active-indicator');
				sliderIndicator.childNodes[currentPair].classList.add('active-indicator');
			}
		}
	}
	let imgOne = 0;
	let imgTwo = 1;
	let sliderIndicator = document.querySelector('.slider-indicator');
	if (window.innerWidth > 768) {
		for (let i = 0; i < images.length / 2; i++) {
			let span = document.createElement('span');
			sliderIndicator.appendChild(span);
		}
	} else {
		for (let i = 0; i < images.length; i++) {
			let span = document.createElement('span');
			sliderIndicator.appendChild(span);
		}
	}

	function changeImage(par) {
		let currentLeft, currentRight;
		leftImgOverlay.src = images[imgOne];
		rightImgOverlay.src = images[imgTwo];

		if (par == 'next') {
			if (window.innerWidth > 768) {
				imgOne = imgOne + 2;
				imgTwo = imgTwo + 2;
			} else {
				imgOne = imgOne + 1;
				imgTwo = imgTwo + 1;
			}

			if (imgOne > images.length - 1 && imgTwo > images.length - 1) {
				imgOne = 0;
				imgTwo = 1;
				currentPair = 0;
			} else if (imgTwo > images.length - 1) {
				imgOne = images.length - 1;
				imgTwo = 0;
				if (window.innerWidth > 768) {
					currentPair = Math.floor((images.length - 1) / 2);
				} else {
					currentPair = images.length - 1;
				}
			} else if (imgOne > images.length - 1) {
				imgOne = 0;
				imgTwo = 1;
				currentPair = 0;
			} else {
				currentPair++;
			}
		}
		if (par == 'previous') {
			if (window.innerWidth > 768) {
				imgTwo = imgTwo - 2;
				imgOne = imgOne - 2;
			} else {
				imgTwo = imgTwo - 1;
				imgOne = imgOne - 1;
			}

			if (imgOne < 0 && imgTwo < 0) {
				imgOne = images.length - 2;
				imgTwo = images.length - 1;
				if (window.innerWidth > 768) {
					currentPair = Math.floor((images.length - 1) / 2);
				} else {
					currentPair = images.length - 1;
				}
			} else if (imgTwo < 0) {
				imgOne = images.length - 2;
				imgTwo = images.length - 1;
				if (window.innerWidth > 768) {
					currentPair = Math.floor((images.length - 1) / 2);
				} else {
					currentPair--;
				}
			} else if (imgOne < 0) {
				imgOne = images.length - 1;
				imgTwo = 0;
				if (window.innerWidth > 768) {
					currentPair = Math.floor((images.length - 1) / 2);
				} else {
					currentPair = images.length - 1;
				}
			} else {
				currentPair--;
			}
		}
		addIndicator(currentPair);
		var imgOneSrc = images[imgOne];
		var imgTwoSrc = images[imgTwo];

		document.getElementById('left-img').src = imgOneSrc;
		document.getElementById('right-img').src = imgTwoSrc;
	}
	changeImage('demo');

	let schedule = document.querySelector('#schedule');
	let contact = document.querySelector('#contact');

	schedule.addEventListener('click', function() {
		if (contact.clientHeight != 80) {
			contact.style.height = 0;
		} else {
			if (window.innerWidth <= 600) {
				contact.style.height = 1270 + 'px';
			} else {
				contact.style.height = 940 + 'px';
			}
		}
	});
});
