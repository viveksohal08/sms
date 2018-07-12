function validateContactForm() {
	var name = document.getElementById("name");
	var email = document.getElementById("email");
	var subject = document.getElementById("subject");
	var message = document.getElementById("message");
	if (name.value.length == 0 ) {
		alert("Please enter name");
		name.focus();
		name.style.border = "solid 3px red";
		return false;
	}
	var alpha = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/
	if(!name.value.match(alpha)){
		alert("Please enter valid name");
		name.focus();
		name.style.border = "solid 3px red";
		return false;
	}
	if (email.value.length == 0 ) {
		alert("Please enter E-mail address");
		name.style.border="";
		email.focus();
		email.style.border = "solid 3px red";
		return false;
	}
	var em = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	if (em.test(email.value) == false) {
		alert("Please enter valid E-mail address");
		name.style.border="";
		email.focus();
		email.style.border = "solid 3px red";
		return false;
	}
	if (subject.value.length == 0 ) {
		alert("Please enter subject");
		name.style.border = "";
		email.style.border = "";
		subject.focus();
		subject.style.border = "solid 3px red";
		return false;
	}
	if (message.value.length == 0 ) {
		alert("Please enter message");
		name.style.border = "";
		email.style.border = "";
		subject.style.border = "";
		message.focus();
		message.style.border = "solid 3px red";
		return false;
	}
}