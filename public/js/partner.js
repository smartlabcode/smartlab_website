document.addEventListener('DOMContentLoaded', function(event) {
	document.getElementById('uploadFileArea').addEventListener('click', function() {
		openUploadWindow();
	});

	function openUploadWindow() {
		document.getElementById('inputFile').click();
	}

	let loaderContainer = document.querySelector('.loader-container');
	loaderContainer.classList.add('loaderEnd');
	setTimeout(function() {
		loaderContainer.style.display = 'none';
	}, 1000);

	function fileUploaded() {
		// TODO check if file is selected
		let uploadText = document.getElementById('uploadText');
		uploadText.innerHTML = "<img id='verifiedIcon' src='/images/icons/verified.svg' />";
	}

	let courseButton = document.querySelector('#button-course');
	let moodleButton = document.querySelector('#button-moodle');
	let serviceButton = document.querySelector('#button-service');
	let bussinessCategory = document.querySelector('#bussiness_category');
	courseButton.addEventListener('click', function() {
		bussinessCategory.options[1].selected = true;
	});
	moodleButton.addEventListener('click', function() {
		bussinessCategory.options[2].selected = true;
	});
	serviceButton.addEventListener('click', function() {
		bussinessCategory.options[3].selected = true;
	});

	let partnersText = document.querySelector('#partners-text');
	let partnersImage = document.querySelector('#partners-image');
	let partnersLogo = document.querySelector('#partners-logo');
	let partnersName = document.querySelector('#partners-name');
	let partnersCompany = document.querySelector('#partners-company');
	let indicators = document.querySelectorAll('.indicator');
	let partnersTextContainer = document.querySelector('.partners-text');

	let partners = [
		{
			text:
				'“We found SmartLab very professional to work with. They quickly understood the brief, they were proactive and easy to communicate with during the build phase and delivered a final product that met fully with our expectations.”',
			image: '/images/partners-images/nick-r.jpg',
			logo: '/images/partners-logo/risk-crew.png',
			name: 'Nick Roberts',
			company: 'Risk Crew'
		},
		{
			text:
				'“We have been working with smartlab since 2017 and really appreciate the cooperation with them.Our requests have been quickly processed and our demands realized according to our desires. Smartlab is also knownfor flexibility and maintaining short - term deadlines.They react and realize projects quickly and successfully.Working with them also is really enjoyable because they are people who understand people.”',
			image: '/images/partners-images/vanessa.png',
			logo: '/images/partners-logo/FKC-22.png',
			name: 'Vanessa Ernst',
			company: 'Fischer, Knoblauch & Co.'
		}
	];
	let j = 1;

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
	const options = {
		root: null,
		threshold: 0,
		rootMargin: '0px'
	};
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
		partnersLogo.src = partners.logo;
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
});
