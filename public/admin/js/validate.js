const validateForm = () => {
  var username = document.getElementById("adminUsername").value;
  let regex = new RegExp("^[a-zA-Z0-9_]{3,}[a-zA-Z]+[0-9]*$");
	if (!regex.test(username)) {
    alert(
      "Your first name is not valid. Only characters A-Z, a-z and '_' are  accepted."
    );
    document.getElementById("adminUsername").focus();
    return false;
  }
  return true;
};
