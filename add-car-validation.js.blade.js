$(document).ready((e)=>{

    console.log('Validation - Ready !');
	$('#car-add-form').validate({
		rules: {
			name: 'required',
		},
		messages: {
			name: 'Please enter your First Name',
			lastName: 'Please enter your Last Name',
			emailAddress: 'Please enter a valid Email Address',
			userName: {
				required: 'Please enter a User Name',
				minlength: 'Your User Name must consist of at least 6 characters'
			},
			password: {
				required: 'Please provide a Password',
				minlength: 'Your Password must be at least 8 characters long'
			},
			confirmPassword: {
				required: 'Please provide a Password',
				minlength: 'Your Password must be at least 8 characters long',
				equalTo: 'Please enter the same Password as above'
			}
		}

	});

})