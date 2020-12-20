const validateForm = () => {
	var search = document.getElementById("search").value;
	let regex = new RegExp("^[a-zA-Z0-9_]{1,}[a-zA-Z]+[0-9]*$");
	
	  if (!regex.test(search)) {
	  alert(
		"Only characters A-Z, a-z and '_' are  accepted."
	  );
	  document.getElementById("search").focus();
	  return false;
	}
	return true;
  };
  