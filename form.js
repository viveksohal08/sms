function validateForm() {
	var id = document.getElementById("id");
	if (id.value.length == 0 ) {
		alert("Please enter id");
		id.focus();
		id.style.border = "solid 3px red";
		return false;
	}
	if (id.value <= 0 ) {
		alert("Please enter valid id");
		id.focus();
		id.style.border = "solid 3px red";
		return false;
	}
}