$(document).ready(function() {
    const checkbox = document.querySelector('#checkbox-password');
    const pass = document.querySelector("#password");
    checkbox.addEventListener("click", (event) => {
        if (pass.type === "password") {
            pass.type = "text"
        } else {
            pass.type = "password"
        }
    })
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }


});