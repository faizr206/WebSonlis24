let participants = document.getElementById("participants");

function TambahPeserta(csrf, userId)
{
    let addParticipant = new XMLHttpRequest();
    addParticipant.onload = ()=>{
        let getParticipant = new XMLHttpRequest();
        getParticipant.onload = () => {
            participants.innerHTML = getParticipant.responseText;
        };
        getParticipant.open("POST", "/getParticipant");
        getParticipant.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        getParticipant.setRequestHeader("X-CSRF-Token", csrf);
        getParticipant.send("user_id=" + userId);
    };

    addParticipant.open("POST", "/addParticipant");
    addParticipant.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    addParticipant.setRequestHeader("X-CSRF-Token", csrf);
    addParticipant.send("user_id=" + userId);
}

function GantiNama(csrf, peserta)
{
    let changeName = new XMLHttpRequest();
    changeName.onload = ()=>{
        
    };

    let nama = document.getElementById("participant" + peserta);
    //let kartuPelajar = document.getElementById("kartuPelajar" + peserta);

    changeName.open("POST", "/addParticipant");
    changeName.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    changeName.send();
}