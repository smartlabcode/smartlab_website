// TO-DO set session storage with description and image for outsourcing_profile page

let button = document.querySelectorAll(".button");
let profileImg = document.querySelectorAll(".profile-image");
let description = document.querySelectorAll(".team-description");
let descriptionLong = document.querySelectorAll(".team-description-long");
let skills = document.querySelectorAll(".team-skills");
let team = [];
let sessionImg = [];
let sessionDesc = [];
let sessionDescLong = [];
let sessionSkills = [];

class Team {
    constructor(image, description, descriptionLong, skills) {
        this.image = image;
        this.description = description;
        this.descriptionLong = descriptionLong;
        this.skills = skills;
    }
}

for (let i = 0; i < profileImg.length; i++) {
    team[i] = new Team(
        profileImg[i].src,
        description[i].innerHTML,
        descriptionLong[i].innerHTML,
        skills[i]
    );
    sessionImg[i] = localStorage.setItem("teamImg" + i, team[i].image);
    sessionDesc[i] = localStorage.setItem("teamDesc" + i, team[i].description);
    sessionDescLong[i] = localStorage.setItem(
        "teamDescLong" + i,
        team[i].descriptionLong
    );
    sessionSkills[i] = localStorage.setItem(
        "teamSkills" + i,
        team[i].skills.innerHTML
    );
}
