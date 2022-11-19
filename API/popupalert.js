	document.addEventListener('DOMContentLoaded', (event) => {
		const parameters = new URLSearchParams(window.location.search);
		const message = parameters.get('message');
		window.alert(message);
		event.preventDefault();
	});

