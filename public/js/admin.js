var lomba, jenjang, statuss;

function load() {
    filterJenjang();
    filterLomba();
    filterStatus();
}
function filter() {
    var table, tr;
    table = document.getElementById("table");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        tr[i].style.display = "";
    }
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[3];
        if (td && jenjang != "all") {
            if (td.textContent != jenjang) {
                tr[i].style.display = "none";
            }
        }
        td = tr[i].getElementsByTagName("td")[6];
        if (td && statuss != "all") {
            if (td.textContent != statuss) {
                tr[i].style.display = "";
            }
        }
        td = tr[i].getElementsByTagName("td")[5];
        if (td && lomba != "all") {
            if (td.textContent != lomba) {
                tr[i].style.display = "none";
            }
        }
    }
}

function filterLomba() {
    var f = document.getElementById("fLomba");
    lomba = f.options[f.selectedIndex].text;
    filter();
}
function filterJenjang() {
    var f = document.getElementById("fJenjang");
    jenjang = f.options[f.selectedIndex].text;
    filter();
}
function filterStatus() {
    var f = document.getElementById("fStatus");
    statuss = f.options[f.selectedIndex].text;
    filter();
}
