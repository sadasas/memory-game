//@flow

	document.addEventListener('DOMContentLoaded', (event) => {
		const parameters = new URLSearchParams(window.location.search);
		let message = parameters.get('message');
		if(message != null)
		{
			window.alert(message);
		}
		parameters.set('message', null);
		parameters.toString();
		event.preventDefault();
	});


function Register(){
	window.location.replace('./register.php');
}

