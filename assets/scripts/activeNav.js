// highlight the active page on the navigation bar
function setActive() {
	active = document.getElementById('dropbar').getElementsByTagName('a');
	for(i = 0; i < active.length; i++) {
		if(document.location.href.indexOx(active[i].href) >= 0) {
			active.className = 'active';
		}
	}
}