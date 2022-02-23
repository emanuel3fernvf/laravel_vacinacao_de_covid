
function confirmDelPac(event) {
    event.preventDefault();
    //console.log(event.target.parentNode.href);
    let token = document.getElementsByName("_token")[0].value;
    if (confirm("Deseja mesmo apagar? Ao apagar este paciente, as doses também serão apagadas!")) {
        let ajax = new XMLHttpRequest();
        ajax.open("DELETE", event.target.parentNode.href);
        ajax.setRequestHeader('X-CSRF-TOKEN', token);
        ajax.onreadystatechange = function () {
            if (ajax.readyState === 4 && ajax.status === 200) {
                var index = window.location.href.indexOf("pacientes");
                window.location.href = window.location.href.substring(0, index + 9);
            }
        };
        ajax.send();
    } else {
        return false;
    }
}


function confirmDelVac(event) {
    event.preventDefault();
    //console.log(event.target.parentNode.href);
    let token = document.getElementsByName("_token")[0].value;
    if (confirm("Deseja mesmo apagar esta dose?")) {
        let ajax = new XMLHttpRequest();
        ajax.open("DELETE", event.target.parentNode.href);
        ajax.setRequestHeader('X-CSRF-TOKEN', token);
        ajax.onreadystatechange = function () {
            if (ajax.readyState === 4 && ajax.status === 200) {
                window.location.href = '';
            }
        };
        ajax.send();
    } else {
        return false;
    }
}



