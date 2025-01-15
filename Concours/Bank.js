function bank () {
    const nom_equipe = document.getElementById('nom_equipe').value;
    const paiement = document.getElementById('paiement').value;

    if (nom || paiement) {
        alert ("Vérifiez que tous les champs sont pleins !");
        return;
    };
    document.getElementById('temp-nom_equipe').innerText=`Nom_equipe : ${nom_equipe}`;
    document.getElementById('temp-paiement').innerText=`Paiement : ${paiement}`;
    
    document.getElementById('temp-data').style.display='block';

    sessionStorage.setItem('Register-data', JSON.stringify({nom_equipe, paiement}));
}