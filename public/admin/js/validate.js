var username = document.getElementById("username-login-form").value;
let regex = "^[a-zA-Z0-9_]{3,}[a-zA-Z]+[0-9]*$";

const validateForm = () => {
  if (!username.match(regex)) {
    alert(
      "Your first name is not valid. Only characters A-Z, a-z and '_' are  accepted."
    );
    document.getElementById("username-login-form").focus();
    return false;
  } 
};
