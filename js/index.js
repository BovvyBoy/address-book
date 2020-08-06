$(document).ready(function() {
	//show loader image
	$('#loaderImage').show();

	//Show contacts on page load
	showContacts();
});

//Show contacts
function showContacts() {
	console.log('showing contacts');
	setTimeout("$('#pageContent').load('contacts.php',function(){$('loaderImage').hide();})", 1000);
}
