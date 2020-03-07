url = window.location.href;

var pattern = /https?:\/\//;
var result = url.replace(pattern, "");
var host = result.split("/", 2)[0];

var certificate = url.match(/https?/)[0];
var main = certificate + "://" + host + "/";
switch (url) {
    case main:
        var elem = getElem("li.home").className += " active";
        break;
    case main + "login":
        var elem = getElem("li.login").className += " active";
        break;
    case main + "register":
        var elem = getElem("li.register").className += " active";
        break;
    case main + "catalog":
        var elem = getElem("li.catalog").className += " active";
        break;
    case main + "feedback":
        var elem = getElem("li.feedback").className += " active";
        break;
    case main + "advertise":
        var elem = getElem("li.advertise").className += " active";
        break;
    case main + "privacy-policy":
        var elem = getElem("li.privacy-policy").className += " active";
        break;
}

function getElem(elem)
{
    return document.querySelector(elem);
}