document.addEventListener('DOMContentLoaded', function(event) {
	const animation = document.querySelector('.section-one-animation');
	let animationData = lottie.loadAnimation({
		container: animation, // the dom element that will contain the animation
		renderer: 'svg',
		loop: true,
		autoplay: false,
		path: '/images/edu-video-animation' // the path to the animation json
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
	lottie.setQuality('medium');

	const animationObserver = new IntersectionObserver(function(entries, animationObserver) {
		entries.forEach((entry) => {
			if (entry.isIntersecting && window.innerWidth > 425) {
				lottie.play();
			} else lottie.pause();
		});
	});
	animationObserver.observe(animation);

	var imgOne = 0;
	var imgTwo = 1;

	const images = [
		'https://www.youtube.com/embed/Q3cZOOmbJdE', // 0
		'https://www.youtube.com/embed/s5xDYxh2SAw', // 1
		'https://www.youtube.com/embed/V25yh0oI_y8', // 2
		'https://www.youtube.com/embed/xN1Uf4GtwIs', // 3
		'https://www.youtube.com/embed/Vh49p4JyE9s',
		'https://www.youtube.com/embed/W65Ywt3a04c',
		'https://www.youtube.com/embed/yoY-Hba4sZk'
	];
	const header = [
		'Popup header 1',
		'Popup header 2',
		'Popup header 3',
		'Popup header 4',
		'Popup header 5',
		'Popup header 6',
		'Popup header 7'
	];
	const description = [
		'Popup description 1',
		'Popup description 2',
		'Popup description 3',
		'Popup description 4',
		'Popup description 5',
		'Popup description 6',
		'Popup description 7'
	];
	let youtube_video_id = [];
	let video_thumbnail = [];
	for (let i = 0; i < images.length; i++) {
		youtube_video_id[i] = images[i].match(/youtube\.com.*(\?v=|\/embed\/)(.{11})/).pop();
		if (youtube_video_id[i].length == 11) {
			video_thumbnail[i] = '//img.youtube.com/vi/' + youtube_video_id[i] + '/hqdefault.jpg';
		}
	}
	let popupClickLeft = document.querySelector('.popup-click-left');
	let popupClickRight = document.querySelector('.popup-click-right');
	let popupVideo = document.querySelector('#popup-image');
	let popupImageBack = document.querySelector('#popup-image-back');
	let closePopup = document.querySelector('.close');
	let popup = document.querySelector('.popup');
	let popupOverlay = document.querySelector('.popup-overlay');

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
		popupVideo.src = '';
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
			popupVideo.src = images[imgIndex];

			/*if (imgIndex >= 1) {
				popupImageBack.src = video_thumbnail[imgIndex - 1];
			}
			if (imgIndex == 0) {
				popupImageBack.src = video_thumbnail[images.length - 1];
			} else if (imgIndex == images.length) {
				popupImageBack.src = video_thumbnail[0];
			}*/

			/*if (side == "left") {
				popupVideo.removeAttribute("style");
				popupVideo.style.right = "-100%";
	
				popupVideo.classList.remove("slideFromLeft");
				void popupVideo.offsetWidth;
				cssClasName = "slideFromRight";
	
			} else {
				popupVideo.removeAttribute("style");
				popupVideo.style.left = "-100%";
	
				popupVideo.classList.remove("slideFromRight");
				void popupVideo.offsetWidth;
				cssClasName = "slideFromLeft";
			}*/
			popupHeader.classList.remove('fadeIn');
			popupDescription.classList.remove('fadeIn');
			//popupVideo.classList.remove(cssClasName);
			//popupVideo.classList.remove("fadeIn");
			void popupHeader.offsetWidth;
			void popupDescription.offsetWidth;
			//void popupVideo.offsetWidth;
			popupHeader.classList.add('fadeIn');
			popupDescription.classList.add('fadeIn');
			//popupVideo.classList.add(cssClasName);
			//popupVideo.classList.add("fadeIn");
			closePopup.style.display = 'inline-block';
			popup.classList.add('shadow-2');
			popupOverlay.style.width = '100vw';
			popupOverlay.style.height = '100vh';
			popupHeader.innerText = header[imgIndex];
			popupDescription.innerText = description[imgIndex];
		}
	}
	popupClickLeft.addEventListener('click', () => popupContent(imgOne));
	popupClickRight.addEventListener('click', () => popupContent(imgTwo));
	let prev = document.querySelector('#prev');
	let next = document.querySelector('#next');
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
	prev.addEventListener('click', function() {
		changeImage('previous');
		clipPath(rightImg, leftImg);
	});
	next.addEventListener('click', function() {
		changeImage('next');
		clipPath(rightImg, leftImg);
	});

	/*function addIndicator(left, right) {
        for (let i = 0; i < images.length; i++) {
            sliderIndicator.childNodes[i].classList.remove("active-indicator");
            sliderIndicator.childNodes[left].classList.add("active-indicator");
            if (window.innerWidth > 768) {
                sliderIndicator.childNodes[right].classList.add("active-indicator");
            }
        }
    }*/
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
	let sliderIndicator = document.querySelector('.slider-indicator');
	/*for (let i = 0; i < images.length; i++) {
        let span = document.createElement("span");
        sliderIndicator.appendChild(span);
	}*/
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

	/*function changeImage(par) {
        let currentLeft, currentRight;
        leftImgOverlay.src = video_thumbnail[imgOne];
        rightImgOverlay.src = video_thumbnail[imgTwo];


        if (par == "next") {

            if (imgTwo == images.length - 1) {
                imgOne = imgTwo;
                imgTwo = 0;
            } else {
                imgOne = imgTwo;
                imgTwo = imgTwo + 1;
            }
        }
        if (par == "previous") {
            if (imgOne == 0) {
                imgTwo = imgOne;
                imgOne = images.length - 1;

            } else {
                imgTwo = imgOne;
                imgOne = imgOne - 1;
            }

        }
        addIndicator(imgOne, imgTwo);
        var imgOneSrc = video_thumbnail[imgOne];
        var imgTwoSrc = video_thumbnail[imgTwo];

        document.getElementById("left-img").src = imgOneSrc;
        document.getElementById("right-img").src = imgTwoSrc;
        //leftImgOverlay.style.width = document.querySelector(".slider-left").offsetWidth - 20;


    }*/
	function changeImage(par) {
		// todo prev par preskače ponekad
		let currentLeft, currentRight;
		leftImgOverlay.src = video_thumbnail[imgOne];
		rightImgOverlay.src = video_thumbnail[imgTwo];

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
		var imgOneSrc = video_thumbnail[imgOne];
		var imgTwoSrc = video_thumbnail[imgTwo];

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
