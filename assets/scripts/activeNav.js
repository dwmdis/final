// highlight the active page on the navigation bar
var active = document.getElementById('default');

function setActive(ele) {
	if(active != null) {
		active.className = "";
	}
	ele.className = 'highlight';
	active = ele;	
}