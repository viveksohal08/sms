function validateLoginForm() {
	var username = document.getElementById("username");
	var pass = document.getElementById("pass");
	if (username.value.length == 0 ) {
		alert("Please enter username");
		username.focus();
		username.style.border = "solid 3px red";
		return false;
	}
	if (pass.value.length == 0 ) {
		alert("Please enter password");
		pass.focus();
		username.style.border = "";
		pass.style.border = "solid 3px red";
		return false;
	}
}