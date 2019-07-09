// TO-DO get session storage with description and image for outsourcing_profile page

let sessionGetImg = [];
let sessionGetDesc = [];

for (let i = 0; i < 10; i++) {
    sessionGetImg[i] = sessionStorage.getItem("teamImg" + i);
    sessionGetDesc[i] = sessionStorage.getItem("teamDesc" + i);
}
console.log(sessionGetImg, sessionGetDesc);
