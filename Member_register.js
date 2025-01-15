const urlParams = new URLSearchParams(window.location.search);
const teamName = urlParams.get('teamName');
document.getElementById('teamNameDisplay').innerText = `Equipe : ${teamName}`;

let memberCount = 1;

function addMember() {
    if(memberCount >= 3) {
        alert("Le maximum de membres est de 3 !!");
        return;
    }

    memberCount++;
    const membersContainer = document.getElementById('membersContainer');
    const memberDiv = document.createElement('div');
    memberDiv.classList.add('member');
    memberDiv.innerHTML = `
        <label for = "Nom${memberCount}">Nom</label>
        <input type="text" id="Nom${memberCount}" name="Nom[]" required placeholder="Entrez votre nom">
        <label for = "Prénom${memberCount}">Prénom</label>
        <input type="text" id="Prénom${memberCount}" name="Prénom[]" required placeholder="Entrez votre prénom">
    `;
    membersContainer.appendChild(memberDiv);
}

document.getElementById('membersForm').onsubmit= function(e) {
    e.preventDefault();

    const formData = new FormData(this);
    fetch('Register.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert("Membres enregistrés avec succès !");
        console.log(data);

        window.location.href = "confirmation.html";
    })
    .catch(error => console.error('Erreur :', error));
}