// TO-DO get session storage with description and image for outsourcing_profile page
document.addEventListener("DOMContentLoaded", function (event) {
    let sessionGetImg = [];
    let sessionGetDesc = [];
    let sessionGetDescLong = [];
    let sessionGetSkills = [];

    for (let i = 0; i < 9; i++) {
        sessionGetImg[i] = sessionStorage.getItem("teamImg" + i);
        sessionGetDesc[i] = sessionStorage.getItem("teamDesc" + i);
        sessionGetDescLong[i] = sessionStorage.getItem("teamDescLong" + i);
        sessionGetSkills[i] = sessionStorage.getItem("teamSkills" + i);
    }

    let description = document.querySelector(".team-description");
    let profileImg = document.querySelector(".profile-image");
    let descriptionLong = document.querySelector(".team-description-long");
    let skills = document.querySelector(".skills-container");
    if (location.search.substr(1) < sessionGetImg.length) {
        description.innerHTML = sessionGetDesc[location.search.substr(1)];
        profileImg.src = sessionGetImg[location.search.substr(1)];
        descriptionLong.innerHTML = sessionGetDescLong[location.search.substr(1)];
        skills.innerHTML = sessionGetSkills[location.search.substr(1)];
    } else {
        description.innerHTML = "<h5 class='h5-font'>These are not the Droids you are looking for</h5>";
        profileImg.parentElement.classList.toggle("blank");
        profileImg.src = "{{asset('/images/team/team-blank.svg')}}";
    }

    let line = document.querySelectorAll(".line-overlay");
    let counter = document.querySelectorAll(".counter");

    function increaseNumber(display, number) {
        let element = display,
            interval = 1000 / number,
            counter = 0;
        let increaseInterval = setInterval(() => {
            if (counter == number) {
                window.clearInterval(increaseInterval);
            }
            element.textContent = counter;
            counter++;
        }, interval);
    }
    for (let i = 0; i < line.length; i++) {
        line[i].width.baseVal.value = 230 * line[i].dataset.note / 100;
    }
    counter.forEach(display => {
        let int = display.dataset.note;
        increaseNumber(display, int);
    })

});
