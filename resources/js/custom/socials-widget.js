let social_trigger = false;
let social_items = document.getElementsByClassName("social-contacts-item");
let social_body = document.getElementById("social-body");
let bvi_body = document.getElementsByClassName("bvi-body");
let social_pull = document.getElementById("cl-phone-0555904888");
let fast_frame = document.getElementById("fast_frame");
let social_hide = document.getElementById("social-hide");

let jivo = document.getElementsByClassName("__jivoMobileButton");
let tool_text = document.getElementsByClassName("tooltiptext").item(0);

let coef = 80;
let bottom = (-coef * (social_items.length - 1)) + "px";

function pull_socials(call) {

    if (social_trigger) {
        if (jivo.length) {
            jivo[0].setAttribute('style', "bottom: 0 !important");
            social_body.style.paddingBottom = "105px";
        }
        if (bvi_body.length) {
            social_body.style.border = "1px solid";
        }

        social_hide.style.display = "block";
        social_body.style.bottom = (jivo.length ? "-15" : "0") + "px";
        social_body.style.background = "rgba(255, 255, 255, 0.9)";
        social_body.style.boxShadow = "0 0 10px rgba(0,0,0,0.5)";

        social_pull.style.marginBottom = "20px";
        tool_text.style.opacity = "1";
        tool_text.style.display = "unset";
        setTimeout(() => {
            tool_text.style.opacity = "0";
            tool_text.style.display = "none";
        }, 3000)
    } else {
        social_hide.style.display = "none";
        if (jivo.length) {
            jivo[0].style.bottom = "-100px";
            social_body.style.paddingBottom = "20px";
        }
        let jivo_window_is_exists = document.getElementsByClassName('mobileContainer_bd9a');
        if (jivo_window_is_exists.length) {
            social_body.style.paddingBottom = "20px";
        }

        social_body.style.bottom = bottom;
        social_body.style.background = "none";
        social_body.style.boxShadow = "none";
        social_body.style.border = "none";


        if (window.innerWidth >= 768) {
            social_pull.style.marginBottom = "60px";
        } else {
            social_pull.style.marginBottom = "30px";
        }

        if (call) {
            window.location.href = "tel:0555904888";
        }

    }
    social_trigger = !social_trigger;
}

setTimeout(() => {
    tool_text.style.opacity = "0";
    tool_text.style.display = "none";
}, 3000);

window.addEventListener('scroll', function (e) {
    if (!social_trigger) {
        pull_socials();
    }
});

window.addEventListener("click", function (e) {
    if (!social_trigger) {
        pull_socials();
    }
});

if (fast_frame) {
    fast_frame.addEventListener("click", function () {
        if (!social_trigger) {
            pull_socials();
        }
    });
}

social_pull.addEventListener("click", function (e) {
    e.stopPropagation();
    pull_socials(true);
});

function jivo_onLoadCallback(){
    setTimeout(function (){
        jivo_api.open();
        document.getElementById('jcont').click();
    }, 10000);
}
