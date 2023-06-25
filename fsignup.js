function validateSignupForm() {
	var mail = document.getElementById("signEmail").value;
	var name = document.getElementById("signName").value;
	var password = document.getElementById("signPassword").value;
	var confirmpassword = document.getElementById("confirmpassword").value;

	if (mail == "" || name == "" || password == "" || confirmpassword == "") {
		document.getElementById("errorMsg").innerHTML = "Please fill the required fields"
		return false;
	}

	else if (password.length < 8) {
		document.getElementById("errorMsg").innerHTML = "Your password must include atleast 8 characters"
		return false;
	}
	else if (password != confirmpassword) {
		document.getElementById("errorMsg").innerHTML = "password doesn't match. Please try again!";
		return false;
	}
	else {
		alert("Successfully signed up");
		return true;
	}
}