$(document).ready(function(e) {
	//show loader image
	$('#loaderImage').show();

	//Show contacts on page load
	showContacts();

	//Search Contacts
	$('#search').keyup(function() {
		$('#pageContent').show();
		let text = $(this).val();
		$.ajax({
			url: 'search.php',
			type: 'GET',
			data: 'txt=' + text,
			success: function(data) {
				console.log(data);
				$('#pageContent').html(data);
			}
		});
	});

	//Open Contact Info
	// $(document).on("click", "#c-click", function () {
	// 	let contact = $(this).attr('data-item');
	// 	$("#lineitem").attr("href","/orders/line-item-delete/"+itemid)
	//  });

	//Add Contact
	$(document).on('submit', '#addContact', function() {
		console.log('HELLO');
		//Show Loader Image
		$('#loaderImage').show();

		//Post Data From Form
		$.post('add_contact.php', $(this).serialize()).done(function(data) {
			console.log(data);
			$('#addModal').modal('toggle');
			showContacts();
		});
		return false;
	});

	//Edit Contact
	$(document).on('submit', '#editContact', function() {
		console.log('HELLO');
		//Show Loader Image
		$('#loaderImage').show();

		//Post Data From Form
		$.post('edit_contact.php', $(this).serialize()).done(function(data) {
			console.log(data);
			$('.editModal').modal('toggle');
			showContacts();
		});
		return false;
	});
});

//Show contacts
function showContacts() {
	console.log('showing contacts');
	setTimeout("$('#pageContent').load('contacts.php',function(){$('#loaderImage').hide();})", 1000);
}
