function openModal(
    datum,
    tijd,
    doel,
    instructeur,
    onderwerpen,
    locatie
){

    document.getElementById("modal").style.display = "block";

    document.getElementById("mDatum").innerText = datum;
    document.getElementById("mTijd").innerText = tijd;
    document.getElementById("mDoel").innerText = doel;
    document.getElementById("mInstructeur").innerText = instructeur;
    document.getElementById("mOnderwerpen").innerText = onderwerpen;
    document.getElementById("mLocatie").innerText = locatie;
}

function closeModal(){
    document.getElementById("modal").style.display = "none";
}

window.onclick = function(event){

    let modal = document.getElementById("modal");

    if(event.target == modal){
        modal.style.display = "none";
    }
}