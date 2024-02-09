var a, b, c, d, ds, ismobile, under, under2;

window.mobileAndTabletCheck = function () {
    let check = false;
    (function (a) {
        if (
            /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(
                a
            ) ||
            /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(
                a.substr(0, 4)
            )
        )
            check = true;
    })(navigator.userAgent || navigator.vendor || window.opera);
    return check;
};

window.onload = load;
function load() {
    ismobile = window.mobileAndTabletCheck();
    resize();
    ds =
        "drop-shadow(0 20px 13px rgb(0 0 0 / 0.03)) drop-shadow(0 8px 5px rgb(0 0 0 / 0.08))";
    smp();
}

const adasmp = [
    "one-one",
    "one-two",
    "one-three",
    "one-four",
    "three-five",
    "four-five",
];
const adasma = [
    "four-six",
    "two-one",
    "three-one",
    "three-three",
    "four-seven",
];
const adasmpsma = [
    "four-one",
    "four-four",
    "four-three",
    "four-two",
    "two-four",
    "two-two",
    "three-two",
    "three-four",
];
const adaumum = ["two-three"];
const adaall = [
    "one-one",
    "one-two",
    "one-three",
    "one-four",
    "two-one",
    "two-two",
    "two-three",
    "two-four",
    "three-one",
    "three-two",
    "three-three",
    "three-four",
    "three-five",
    "four-one",
    "four-two",
    "four-three",
    "four-four",
    "four-five",
    "four-six",
    "four-seven",
];

function enable(str) {
    document.getElementById(str).style.filter = "brightness(100%)" + ds;
    document.getElementById(str).style.setProperty("--angle", "180deg");
    document.getElementById(str + "-d").style.display = "none";
}
function disable(str) {
    document.getElementById(str).style.filter = "brightness(60%)" + ds;
    document.getElementById(str).style.setProperty("--angle", "0deg");
    document.getElementById(str + "-d").style.display = "block";
}

function ceksmp(value) {
    if (adasmp.indexOf(value) != -1 || adasmpsma.indexOf(value) != -1) {
        enable(value);
    } else {
        disable(value);
    }
}
function ceksma(value) {
    if (adasma.indexOf(value) != -1 || adasmpsma.indexOf(value) != -1) {
        enable(value);
    } else {
        disable(value);
    }
}
function cekumum(value) {
    if (adaumum.indexOf(value) != -1) {
        enable(value);
    } else {
        disable(value);
    }
}

function smp() {
    adaall.forEach(ceksmp);
    document.getElementById("psmp").style.borderColor = "#2a4b9b";
    document.getElementById("psma").style.borderColor = "white";
    document.getElementById("pumum").style.borderColor = "white";
}
function sma() {
    adaall.forEach(ceksma);
    document.getElementById("psmp").style.borderColor = "white";
    document.getElementById("psma").style.borderColor = "#2a4b9b";
    document.getElementById("pumum").style.borderColor = "white";
}
function umum() {
    adaall.forEach(cekumum);
    document.getElementById("psmp").style.borderColor = "white";
    document.getElementById("psma").style.borderColor = "white";
    document.getElementById("pumum").style.borderColor = "#2a4b9b";
}

window.onresize = resize;
function resize() {
    var width = window.innerWidth > 0 ? window.innerWidth : screen.width;
    if (width < 640) {
        a = 20;
        b = 26;
        c = 48;
        d = 25;
        under = true;
        under2 = true;
    } else if (width < 768) {
        a = 15;
        b = 23;
        c = 42;
        d = 23;
        under = false;
        under2 = true;
    } else if (width < 1024) {
        a = 13;
        b = 20;
        c = 38;
        d = 20;
        under = false;
        under2 = true;
    } else {
        a = 11;
        b = 17;
        c = 33;
        d = 20;
        under = false;
        under2 = false;
    }
}

function enterSaintek() {
    document.getElementById("one-one").style.transform =
        "translateX(-" + (a / 2 + a).toString() + "vw) rotateZ(0deg)";
    document.getElementById("one-two").style.transform =
        "translateX(-" + (a / 2).toString() + "vw) rotateZ(0deg)";
    document.getElementById("one-three").style.transform =
        "translateX(" + (a / 2).toString() + "vw) rotateZ(0deg) rotateY(0)";
    document.getElementById("one-four").style.transform =
        "translateX(" + (a / 2 + a).toString() + "vw) rotateZ(0deg) rotateY(0)";
}
function leaveSaintek() {
    document.getElementById("one-one").style.transform =
        "translateX(0) rotateZ(-12deg)";
    document.getElementById("one-two").style.transform =
        "translateX(0) rotateZ(-4deg) ";
    document.getElementById("one-three").style.transform =
        "translateX(0) rotateZ(4deg) ";
    document.getElementById("one-four").style.transform =
        "translateX(0) rotateZ(12deg) ";
}

function enterJournal() {
    document.getElementById("two-one").style.transform =
        "translateX(-" + (a / 2 + a).toString() + "vw) rotateZ(0deg)";
    document.getElementById("two-two").style.transform =
        "translateX(-" + (a / 2).toString() + "vw) rotateZ(0deg)";
    document.getElementById("two-three").style.transform =
        "translateX(" + (a / 2).toString() + "vw) rotateZ(0deg) rotateY(0)";
    document.getElementById("two-four").style.transform =
        "translateX(" + (a / 2 + a).toString() + "vw) rotateZ(0deg) rotateY(0)";
}
function leaveJournal() {
    document.getElementById("two-one").style.transform =
        "translateX(0) rotateZ(-12deg)";
    document.getElementById("two-two").style.transform =
        "translateX(0) rotateZ(-4deg) ";
    document.getElementById("two-three").style.transform =
        "translateX(0) rotateZ(4deg) ";
    document.getElementById("two-four").style.transform =
        "translateX(0) rotateZ(12deg) ";
}

function enterSac() {
    if (ismobile || under) enterSacMobile();
    else enterSacDesktop();
}
function enterSacMobile() {
    document.getElementById("three-one").style.transform =
        "translateX(-" + a.toString() + "vw) rotateZ(0deg)";
    document.getElementById("three-two").style.transform =
        "translateX(-" +
        (a / 2).toString() +
        "vw) translateY(" +
        b.toString() +
        "vw) rotateZ(0deg)";
    document.getElementById("three-three").style.transform =
        "translateX(0) rotateZ(0deg) rotateY(0)";
    document.getElementById("three-four").style.transform =
        "translateX(" +
        (a / 2).toString() +
        "vw) translateY(" +
        b.toString() +
        "vw) rotateZ(0deg)";
    document.getElementById("three-five").style.transform =
        "translateX(" + a.toString() + "vw) rotateZ(0deg) rotateY(0)";
    document.getElementById("sacBorder").style.paddingTop = c.toString() + "vw";
}
function enterSacDesktop() {
    document.getElementById("three-one").style.transform =
        "translateX(-" + (2 * a).toString() + "vw) rotateZ(0deg)";
    document.getElementById("three-two").style.transform =
        "translateX(-" + a.toString() + "vw) rotateZ(0deg)";
    document.getElementById("three-three").style.transform =
        "translateX(0) rotateZ(0deg) rotateY(0)";
    document.getElementById("three-four").style.transform =
        "translateX(" + a.toString() + "vw) rotateZ(0deg)";
    document.getElementById("three-five").style.transform =
        "translateX(" + (2 * a).toString() + "vw) rotateZ(0deg) rotateY(0)";
}
function leaveSac() {
    document.getElementById("three-one").style.transform =
        "translateX(0) rotateZ(-16deg)";
    document.getElementById("three-two").style.transform =
        "translateX(0) translateY(0) rotateZ(-8deg) ";
    document.getElementById("three-three").style.transform =
        "translateX(0) rotateZ(0deg) ";
    document.getElementById("three-four").style.transform =
        "translateX(0) translateY(0) rotateZ(8deg) ";
    document.getElementById("three-five").style.transform =
        "translateX(0) rotateZ(16deg) ";
    document.getElementById("sacBorder").style.paddingTop = d.toString() + "vw";
}

function enterLang() {
    if (ismobile || under2) enterLangMobile();
    else enterLangDesktop();
}
function enterLangMobile() {
    document.getElementById("four-one").style.transform =
        "translateX(-" + ((a * 3) / 2).toString() + "vw) rotateZ(0deg)";
    document.getElementById("four-two").style.transform =
        "translateX(-" +
        a.toString() +
        "vw) translateY(" +
        b.toString() +
        "vw) rotateZ(0deg)";
    document.getElementById("four-three").style.transform =
        "translateX(-" + (a / 2).toString() + "vw) rotateZ(0deg) rotateY(0)";
    document.getElementById("four-four").style.transform =
        "translateX(0vw) translateY(" + b.toString() + "vw) rotateZ(0deg)";
    document.getElementById("four-five").style.transform =
        "translateX(" + (a / 2).toString() + "vw) rotateZ(0deg) rotateY(0)";
    document.getElementById("four-six").style.transform =
        "translateX(" +
        a.toString() +
        "vw) translateY(" +
        b.toString() +
        "vw) rotateZ(0deg)";
    document.getElementById("four-seven").style.transform =
        "translateX(" +
        ((a * 3) / 2).toString() +
        "vw) rotateZ(0deg) rotateY(0)";
    document.getElementById("langBorder").style.paddingTop =
        c.toString() + "vw";
}

function enterLangDesktop() {
    document.getElementById("four-one").style.transform =
        "translateX(-" + (3 * a).toString() + "vw) rotateZ(0deg)";
    document.getElementById("four-two").style.transform =
        "translateX(-" + (2 * a).toString() + "vw) rotateZ(0deg)";
    document.getElementById("four-three").style.transform =
        "translateX(-" + a.toString() + "vw) rotateZ(0deg) rotateY(0)";
    document.getElementById("four-four").style.transform =
        "translateX(0vw) rotateZ(0deg)";
    document.getElementById("four-five").style.transform =
        "translateX(" + a.toString() + "vw) rotateZ(0deg) rotateY(0)";
    document.getElementById("four-six").style.transform =
        "translateX(" + (2 * a).toString() + "vw) rotateZ(0deg)";
    document.getElementById("four-seven").style.transform =
        "translateX(" + (3 * a).toString() + "vw) rotateZ(0deg)";
}
function leaveLang() {
    document.getElementById("four-one").style.transform =
        "translateX(0) rotateZ(-24deg)";
    document.getElementById("four-two").style.transform =
        "translateX(0) translateY(0) rotateZ(-16deg) ";
    document.getElementById("four-three").style.transform =
        "translateX(0) rotateZ(-8deg) ";
    document.getElementById("four-four").style.transform =
        "translateX(0) translateY(0) rotateZ(0deg) ";
    document.getElementById("four-five").style.transform =
        "translateX(0) rotateZ(8deg) ";
    document.getElementById("four-six").style.transform =
        "translateX(0) translateY(0) rotateZ(16deg) ";
    document.getElementById("four-seven").style.transform =
        "translateX(0) translateY(0) rotateZ(24deg) ";
    document.getElementById("langBorder").style.paddingTop =
        d.toString() + "vw";
}
(function () {
    const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

    //I'm adding this section so I don't have to keep updating this pen every year :-)
    //remove this if you don't need it
    let today = new Date(),
        dd = String(today.getDate()).padStart(2, "0"),
        mm = String(today.getMonth() + 1).padStart(2, "0"),
        yyyy = today.getFullYear(),
        nextYear = yyyy + 1,
        dayMonth = "04/15/",
        birthday = dayMonth + yyyy;

    today = mm + "/" + dd + "/" + yyyy;
    if (today > birthday) {
        birthday = dayMonth + nextYear;
    }
    //end

    const countDown = new Date(birthday).getTime(),
        x = setInterval(function () {
            const now = new Date().getTime(),
                distance = countDown - now;

            (document.getElementById("days").innerText = Math.floor(
                distance / day
            )),
                (document.getElementById("hours").innerText = Math.floor(
                    (distance % day) / hour
                )),
                (document.getElementById("minutes").innerText = Math.floor(
                    (distance % hour) / minute
                )),
                (document.getElementById("seconds").innerText = Math.floor(
                    (distance % minute) / second
                ));

            //do something later when date is reached
            if (distance < 0) {
                document.getElementById("headline").innerText =
                    "It's my birthday!";
                document.getElementById("countdown").style.display = "none";
                document.getElementById("content").style.display = "block";
                clearInterval(x);
            }
            //seconds
        }, 0);
})();

const hamburger = document.querySelector(".nav-sm-right");
const navLeft = document.querySelector(".nav-left");
const navRight = document.querySelector(".nav-right");

hamburger.addEventListener("click", () => {
    navLeft.classList.toggle("hidden");
    navRight.classList.toggle("hidden");
});
