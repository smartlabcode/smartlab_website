function generatePassword() {
	event.preventDefault();

	var length = Math.floor(Math.random() * 4) + 8;
	document.getElementById('password').value = makePassword(length);
}

function makePassword(length) {
	var text = '';
	var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

	for (var i = 0; i < length; i++) text += possible.charAt(Math.floor(Math.random() * possible.length));

	return text;
}

/* Create blog */
function submitAddForm() {
	event.preventDefault();

	// change action route
	let form = document.getElementById('addBlogForm');

	// set content
	let content = form.getElementsByClassName('note-editable')[0];
	let text = content.innerHTML;
	document.getElementById('contentText').value = text;

	// check if blog image is set

	form.action = '/blogs';

	// enable form before sending post request
	document.getElementById('language').disabled = false;
	document.getElementById('tags').disabled = false;

	form.submit();
}

/* Edit blog */
function submitEditForm() {
	event.preventDefault();
	// get language
	let lang = document.getElementById('language').value;

	// get id
	let id = document.getElementById('idValue').value;

	// change action route
	let form = document.getElementById('editBlogForm');

	// set content
	let content = form.getElementsByClassName('note-editable')[0];
	let text = content.innerHTML;

	document.getElementById('contentText').value = text;

	form.action = '/blogs/' + id + '/' + lang;

	form.submit();
}

/* Menu */
function changeSiteLanguage(value) {
	document.getElementById('languageForm').submit();
}

/* Edit job */
function submitJobEditForm() {
	event.preventDefault();
	// get language
	//let lang = document.getElementById("language").value;

	// get id
	let id = document.getElementById('idValue').value;

	// change action route
	let form = document.getElementById('editCareerForm');

	// set content
	let content = form.getElementsByClassName('note-editable')[0];
	let text = content.innerHTML;

	document.getElementById('contentText').value = text;

	form.action = '/careers/' + id;

	form.submit();
}

/* Create job */
function submitJobAddForm() {
	event.preventDefault();

	// change action route
	let form = document.getElementById('addCareerForm');

	// set content
	let content = form.getElementsByClassName('note-editable')[0];
	let text = content.innerHTML;

	document.getElementById('contentText').value = text;

	// form.action = "/careers";

	form.submit();
}
