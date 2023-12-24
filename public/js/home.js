function enterSaintek() {
    document.getElementById("one-one").style.transform =
        "translateX(10vw) rotateZ(0deg) translateY(1vw)";
    document.getElementById("one-two").style.transform = "translateY(1vw)";
    document.getElementById("one-three").style.transform =
        "translateX(-10vw) rotateZ(0deg) translateY(1vw) rotateY(0)";
}
function leaveSaintek() {
    document.getElementById("one-one").style.transform =
        "translateX(0) rotateZ(12deg) translateY(0)";
    document.getElementById("one-two").style.transform = "translateY(0)";
    document.getElementById("one-three").style.transform =
        "translateX(0) rotateZ(-12deg) translateY(0)";
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
