document.addEventListener('DOMContentLoaded', function(event) {
	const firstNavItem = document.querySelector('.first');
	const backgroundImg = document.querySelector('.background-img');
	const whatWeDo = document.querySelector('#whatWeDo');
	try {
		if (window.innerWidth > 900) {
			if (firstNavItem.getBoundingClientRect().left < backgroundImg.getBoundingClientRect().left + 100) {
				backgroundImg.style.right = '-200px';
			}
		}
	} catch (err) {
		console.log(err);
	}

	let navButton = document.querySelector('#nav-button');
	let navButtonInner = document.querySelector('#nav-button-inner');
	let navButtonInnerAfter = document.querySelector('#nav-button-inner-after');
	let navButtonInnerBefore = document.querySelector('#nav-button-inner-before');
	let nav = document.querySelector('#nav-list');
	let navTop = document.querySelector('#nav-top');
	let navTopP = document.querySelector('.nav-top p');
	let navTopA = document.querySelectorAll('.nav-top a');
	let navTopLabel = document.querySelectorAll('.nav-top label');
	let grey = document.querySelectorAll('.grey');
	let arrow = document.querySelectorAll('.arrow');
	let expandable = document.querySelectorAll('.expandable');
	let navLi = document.querySelectorAll('.nav-li');
	let navLiContainer = document.querySelector('#nav-li-container');
	let samePageLinks = document.querySelectorAll('.same-page-link');
	let clicked = 0;
	let navBot = document.querySelector('.nav-bot');
	for (let i = 0; i < samePageLinks.length; i++) {
		samePageLinks[i].addEventListener('click', function(event) {
			navLiContainer.classList.toggle('height-js');
			navButtonInner.style.animationName = 'navBtnReverse';
			navButtonInnerAfter.style.animationName = 'navBtnAfterReverse';
			navButtonInnerBefore.style.animationName = 'navBtnBeforeReverse';
			clicked = 0;
		});
	}
	navButton.addEventListener('click', function(event) {
		clicked++;
		if (clicked % 2 != 0) {
			navButtonInner.style.animationName = 'navBtn';
			navButtonInnerAfter.style.animationName = 'navBtnAfter';
			navButtonInnerBefore.style.animationName = 'navBtnBefore';
		} else {
			navButtonInner.style.animationName = 'navBtnReverse';
			navButtonInnerAfter.style.animationName = 'navBtnAfterReverse';
			navButtonInnerBefore.style.animationName = 'navBtnBeforeReverse';
		}
		navLiContainer.classList.toggle('height-js');
		navTop.style.display = 'none';
	});

	function navTopHide(scrollDown) {
		if (scrollDown) {
			nav.style.backgroundColor = 'white';
			nav.classList.add('shadow');
			navTop.style.height = '0px';
			navTop.style.marginTop = '0px';
			navBot.style.padding = '10px 0';

			for (let i = 0; i < arrow.length; i++) {
				arrow[i].classList.remove('arrow');
				arrow[i].classList.add('arrow-js');
			}
			for (let i = 0; i < grey.length; i++) {
				grey[i].style.color = '#14213d';
			}
			for (let i = 0; i < expandable.length; i++) {
				expandable[i].style.top = '46px';
			}
			for (let i = 0; i < navLi.length; i++) {
				navLi[i].classList.add('nav-li-js');
			}
			navTopP.classList.add('nav-top-color');
			for (let i = 0; i < navTopLabel.length; i++) {
				navTopLabel[i].classList.add('nav-top-color');
			}
			for (let i = 0; i < navTopA.length; i++) {
				navTopA[i].classList.add('nav-top-color');
			}
		} else if (!scrollDown) {
			if (window.pageYOffset < 100) {
				nav.style.backgroundColor = 'transparent';
				for (let i = 0; i < arrow.length; i++) {
					arrow[i].classList.add('arrow');
					arrow[i].classList.remove('arrow-js');
				}
				for (let i = 0; i < grey.length; i++) {
					grey[i].style.color = 'white';
				}
				for (let i = 0; i < expandable.length; i++) {
					expandable[i].style.top = '40px';
				}
				for (let i = 0; i < navLi.length; i++) {
					navLi[i].classList.remove('nav-li-js');
				}
				navTopP.classList.remove('nav-top-color');
				for (let i = 0; i < navTopLabel.length; i++) {
					navTopLabel[i].classList.remove('nav-top-color');
				}
				for (let i = 0; i < navTopA.length; i++) {
					navTopA[i].classList.remove('nav-top-color');
				}
				navBot.style.padding = '0 0';
				nav.classList.remove('shadow');
			}
			navTop.style.height = '30px';
			navTop.style.marginTop = '15px';
		}
	}
	if (window.innerWidth > 900) {
		navTopHide();
	}
	navTopHide();
	if (window.innerWidth > 900) {
		window.addEventListener(
			'scroll',
			function(event) {
				navTopHide(this.oldScroll < this.scrollY);
				this.oldScroll = this.scrollY;
			},
			{
				passive: true
			}
		);
	}
});
