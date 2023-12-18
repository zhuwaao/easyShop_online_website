<script>
src="https://code.jquery.com/jquery-1.11.1.min.js"
src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"
src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"

		
jQuery.validator.setDefaults({
	debug: true,
	success:  function(label){
		label.attr('id', 'valid');
	},
});
$( "#myform" ).validate({
	rules: {
		password: "required",
		comfirm_password: {
			equalTo: "#password"
		}
	},
	messages: {
		first_name: {
			required: "Please enter a firstname"
		},
		last_name: {
			required: "Please enter a lastname"
		},
		your_email: {
			required: "Please provide an email"
		},
		password: {
			required: "Please enter a password"
		},
		comfirm_password: {
			required: "Please enter a password",
			equalTo: "Wrong Password"
		}
	}
});

function validateUsername() {
      var username = document.getElementById("userName").value;
      var regex = /^[a-zA-Z0-9_]+$/;

      if (regex.test(username)) {
        alert("Valid username");
      } else {
        alert("Invalid username. Only alphabetical letters, numbers, and underscores are allowed.");
      }
    }
	function validateUsername() {
  var username = document.getElementById("userName").value;
  var regex = /^[a-zA-Z0-9_]+$/;
  var validationMsg = document.getElementById("username-validation-msg");

  if (regex.test(username)) {
    validationMsg.textContent = "Valid username";
  } else {
    validationMsg.textContent = "Invalid username. Only alphabetical letters, numbers, and underscores are allowed.";
  }
}
</script>
