document.addEventListener("DOMContentLoaded", () => {
    const urlParams = new URLSearchParams(window.location.search);
    const teamName = urlParams.get("teamNameDisplay");

    const teamNameDisplay = document.getElementById('teamNameDisplay');
    if (teamNameDisplay) {
        teamNameDisplay.innerText = `Equipe : ${teamNameDisplay}`;
    } else {
        console.error("Elément inexistant !")
    }

})

let memberCount = 1;

function addMember() {
    if(memberCount >= 3) {
        alert("Le maximum de membres est de 3 !!");
        return;
    }

    memberCount++;
    const membersContainer = document.getElementById("membersContainer");
    const memberDiv = document.createElement("div");
    memberDiv.classList.add("member");
    memberDiv.innerHTML = `
        <h3>Membre${memberCount}</h3>
        <label for = "Nom${memberCount}">Nom</label>
        <input type="text" id="Nom${memberCount}" name="Nom[]" required placeholder="Entrez votre nom">
        <label for = "Prénom${memberCount}">Prénom</label>
        <input type="text" id="Prénom${memberCount}" name="Prénom[]" required placeholder="Entrez votre prénom">
    `;
    membersContainer.appendChild(memberDiv);
};

window.addMember = addMember;