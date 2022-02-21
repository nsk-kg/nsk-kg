let open = document.getElementsByClassName('office-block');
let modal = document.getElementById("officeModal");
let close = document.querySelector(".closeModal");

for(let i = 0; i < open.length; i++) {
    open[i].addEventListener('click', () => {
        modal.style.display = "flex";
    });
}

if(close != null) {
    close.onclick = function() {
        modal.style.display = "none";
    }
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
