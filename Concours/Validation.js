function validateAndSubmit() {
    const teamName = document.getElementById('teamName').value;
    const paiement = document.getElementById('paiement').value;

    if(paiement>=3000) {
        const url = `Member_register.html?teamName=${encodeURIComponent(teamName)}`;
        window.location.href = "Member_register.html";
    } else {
        alert("Le montant n'est pas suffisant pour vous enregistrer !");
    }
}