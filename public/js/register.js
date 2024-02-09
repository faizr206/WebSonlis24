const smp = [
    "Science Competition",
    "Smart and Quick",
    "Social Competition",
    "Mathematics Competition",
    "Speech Contest",
    "Cipta Baca Puisi",
    "Khitobah",
    "Monolog",
    "Story-telling",
    "Essay Writing Competition",
    "Photography",
    "Lomba Karya Inovasi",
    "Music Cover",
    "Mobile Legend",
    "Ratoeh Jaroe",
    "Pramuka",
];
const sma = [
    "LDBI",
    "NSDC",
    "Khitobah",
    "Monolog",
    "Story-telling",
    "Essay Writing Competition",
    "Short Movie",
    "Photography",
    "Music Cover",
    "Mobile Legend",
    "Soccer",
    "Ratoeh Jaroe",
];
const umum = ["Photography"];

function load() {
    const lomba = document.getElementById("lomba");
    var len = smp.length;
    for (i = 0; i < len; i++) {
        lomba.add(new Option(smp[i]));
    }
}

function change() {
    const lomba = document.getElementById("lomba");
    var i,
        l = lomba.options.length - 1;
    for (i = l; i >= 0; i--) {
        lomba.remove(i);
    }

    const jenjang = document.getElementById("jenjang");
    var tingkat = jenjang[jenjang.selectedIndex].text;

    if (tingkat == "SMP") {
        var len = smp.length;
        for (i = 0; i < len; i++) {
            lomba.add(new Option(smp[i]));
        }
    } else if (tingkat == "SMA") {
        var len = sma.length;
        for (i = 0; i < len; i++) {
            lomba.add(new Option(sma[i]));
        }
    } else {
        var len = umum.length;
        for (i = 0; i < len; i++) {
            lomba.add(new Option(umum[i]));
        }
    }
}
