// SUPER ADMIN

$("#password, #confirm-password").on('keyup', function() {
    if ($("#password").val() == "" && $("#confirm-password").val() == "") {
        $("#message").html("").css('color', 'green');
    } else if ($("#password").val() === $("#confirm-password").val()) {
        $("#message").html("Password Match").css('color', 'green');
        document.getElementById('add_admin').disabled = false;
    } else {
        $("#message").html("Password Not Match").css('color', 'red');
        document.getElementById('add_admin').disabled = true;
    }
});


function showpass() {
    if (this.checked) {
        // alert("check");
        document.getElementById('password').setAttribute('type', 'text')
        document.getElementById('confirm-password').setAttribute('type', 'text')
    } else {
        // alert("ubcheck");
        document.getElementById('password').setAttribute('type', 'password')
        document.getElementById('confirm-password').setAttribute('type', 'password')
    }
}
document.getElementById('showpass').addEventListener('click', showpass);

function Toggle() {
    let temp = document.getElementById("password");
    let Cpass = document.getElementById("confirm-password");

    if (temp.type === "password" && Cpass.type === "password") {
        temp.type = "text";
        Cpass.type = "text";
    } else {
        temp.type = "password";
        Cpass.type = "password";
    }

}

// END SUPER ADMIN