
function laden(){
    inp = document.getElementById("inp");
    inp.value = sessionStorage.getItem("B");
}

function speichern() {
    inp = document.getElementById("inp");
    sessionStorage.setItem("B", inp.value);
}