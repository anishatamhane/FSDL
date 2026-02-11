function validateForm() {

    // Access elements using DOM
    let username = document.getElementById("username").value.trim();
    let email = document.getElementById("email").value.trim();
    let phone = document.getElementById("phone").value.trim();
    let password = document.getElementById("password").value;
    let cpassword = document.getElementById("cpassword").value;

    // Empty field validation
    if (username === "" || email === "" || phone === "" || password === "" || cpassword === "") {
        document.getElementById("msg").innerHTML = "All fields are mandatory";
        document.getElementById("msg").style.color = "red";
        return;
    }

    // Phone validation
    let phonePattern = /^[0-9]{10}$/;
    if (!phonePattern.test(phone)) {
        document.getElementById("msg").innerHTML = "Phone number must be 10 digits";
        return;
    }

    // Email validation
    let emailPattern = /^[a-zA-Z]+@[a-zA-Z]{3}\.[a-zA-Z]{2,3}$/;
    if (!emailPattern.test(email)) {
        document.getElementById("msg").innerHTML = "Invalid Email Address";
        return;
    }

    // Password validation
    let passPattern = /^(?=.*[A-Z])(?=.*[0-9])(?=.*[&$#@]).{7,}$/;
    if (!passPattern.test(password)) {
        document.getElementById("msg").innerHTML =
            "Password must contain capital letter, digit & special character";
        return;
    }

    // Confirm password
    if (password !== cpassword) {
        document.getElementById("msg").innerHTML = "Passwords do not match";
        return;
    }

    document.getElementById("msg").style.color = "green";
    document.getElementById("msg").innerHTML = "Registration Successful!";
}

// Change image using DOM
function changeImage() {
    document.getElementById("img1").src = "img2.jpg";
}

/* DOM: Add and delete node */
let p = document.createElement("p");
let text = document.createTextNode("Welcome to Web Technologies Lab");
p.appendChild(text);
document.body.appendChild(p);

/* jQuery Section */
$(document).ready(function () {

    // Change button text
    $("#jqBtn").text("jQuery Activated");

    // Change background image
    $("body").css("background-image", "url('bg.jpg')");

    // Access form data using jQuery
    $("#submitBtn").click(function () {
        console.log($("#username").val());
    });

    // Add attribute using jQuery
    $("#username").attr("placeholder", "Enter Username");
});
