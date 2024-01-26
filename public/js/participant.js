let participants = document.getElementById("participants");
let tambahPeserta = document.getElementById("tambahPeserta");
let lomba = document.getElementById("lomba")

function TambahPeserta(csrf, userId)
{
    let addParticipant = new XMLHttpRequest();
    addParticipant.onload = ()=>{
        tambahPeserta.disabled = true;
        let getParticipant = new XMLHttpRequest();
        getParticipant.onload = () => {
            let response = getParticipant.responseText;
            participants.innerHTML = response.substring(0, response.length-1);
            tambahPeserta.disabled = false;

            window.location = window.location.protocol + "//" + window.location.host + "/dashboard#participant" + response.substring(response.length-1, response.length+1);
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
    changeName.setRequestHeader("X-CSRF-Token", csrf);
    changeName.send();
}

function GantiLomba(csrf, lombaSekarang)
{
    if(confirm("Ingin mengganti lomba menjadi " + lomba.value + "?\n(Semua peserta yang sudah ditambahkan akan dihapus!)"))
    {
        let changeCompetition = new XMLHttpRequest();
        changeCompetition.onload = ()=>{
            
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