const currentsite = window.location.href
const a = document.querySelectorAll(".navbar-brand")
a.forEach((element, index) => {
    if (element.href == currentsite) {
        a[index].className = "link navbar-brand active";
    }
    else {
        a[index].className = "link navbar-brand";
    }
});