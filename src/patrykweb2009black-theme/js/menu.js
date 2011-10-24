function apri_menu(id){
	var menu = document.getElementById(id)
	if (menu.style.display == 'none') {
		menu.style.display = 'block';
	} else {
		menu.style.display = 'none';
	}
}
