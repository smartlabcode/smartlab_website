// TO-DO set session storage with description and image for outsourcing_profile page


let button = document.querySelectorAll(".button");
let profileImg = document.querySelectorAll(".profile-image");
let description = document.querySelectorAll(".team-description");
let team = [];
let sessionImg = [];
let sessionDesc = [];
class Team {
    constructor(image, description) {
        this.image = image;
        this.description = description;
    }
}


for (let i = 0; i < button.length - 1; i++) {
    team[i] = new Team(profileImg[i].src, description[i].innerHTML);
    sessionImg[i] = sessionStorage.setItem("teamImg" + i, team[i].image);
    sessionDesc[i] = sessionStorage.setItem("teamDesc" + i, team[i].description);
}
//export default team;
