let participants = document.getElementById("participants");
let tambahPeserta = document.getElementById("tambahPeserta");
let lomba = document.getElementById("lomba")

function TambahPeserta(csrf, userId)
{
    let addParticipant = new XMLHttpRequest();
    addParticipant.onload = ()=>{
        UpdateParticipant();
    };

    addParticipant.open("POST", "/addParticipant");
    addParticipant.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    addParticipant.setRequestHeader("X-CSRF-Token", csrf);
    addParticipant.send();
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
    changeName.setRequestHeader("X-CSRF-Token", csrf);
    changeName.send();
}

function GantiLomba(csrf, lombaSekarang)
{
    if(confirm("Ingin mengganti lomba menjadi " + lomba.value + "?\n(Semua peserta yang sudah ditambahkan akan dihapus!)"))
    {
        let changeCompetition = new XMLHttpRequest();
        changeCompetition.onload = ()=>{
            UpdateParticipant();
        };
        changeCompetition.open("POST", "/changeCompetition");
        changeCompetition.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        changeCompetition.setRequestHeader("X-CSRF-Token", csrf);
        changeCompetition.send("competition=" + lomba.value);
    }
    else
    {
        lomba.value = lombaSekarang;
    }
}

function SaveParticipant(csrf, participantId)
{
    let participantName = document.getElementById("participant" + participantId).value;

    let saveParticipant = new XMLHttpRequest();
    saveParticipant.onload = ()=>{
        UpdateParticipant();
    }
    saveParticipant.open("POST", "/saveParticipant");
    saveParticipant.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    saveParticipant.setRequestHeader("X-CSRF-Token", csrf);
    saveParticipant.send("participantId=" + participantId + "&participantName=" + participantName);
}

function DeleteParticipant(csrf, participantId)
{
    let xHttp = new XMLHttpRequest();
    xHttp.onload = ()=>{
        UpdateParticipant();
    }
    xHttp.open("POST", "/deleteParticipant");
    xHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xHttp.setRequestHeader("X-CSRF-Token", csrf);
    xHttp.send("participantId=" + participantId);
}

function UpdateParticipant()
{
    let getParticipant = new XMLHttpRequest();
    getParticipant.onload = () => {
        participants.innerHTML = getParticipant.responseText;
    };
    getParticipant.open("GET", "/getParticipant");
    getParticipant.send();
}