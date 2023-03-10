const navData = {
	"date": "2023-02-24",
	"items": [
		{
			"id": 1,
			"url": "https://datausecommunity.org",
			"label": "Website"
		},
		{
			"id": 2,
			"url": "https://forum.datausecommunity.org",
			"label": "Forum"
		},
		{
			"id": 3,
			"url": "https://wiki.ohie.org/pages/viewpage.action?spaceKey=SUB&title=Data+Use+Community",
			"label": "Wiki"
		},
		{
			"id": 4,
			"url": "https://guides.ohie.org/duc/",
			"label": "Technology Intervention Framework"
		}
	],
	"message": ""
}
var body = document.body;
var navDiv = document.getElementById('uninav');
console.log('un start');
if(navDiv!=null) {
	// const siteId = navDiv.getAttribute('data-site');
	var siteId = navDiv.dataset.site;
	var firstItem = document.createElement('li');
	var linkIcon = document.createElement('img');
	linkIcon.src = 'https://datausecommunity.org/assets/link.svg';
	linkIcon.alt = 'link icon';
	firstItem.textContent = 'DUC';
	firstItem.appendChild(linkIcon);
	navDiv.appendChild(firstItem);

	for (let item of navData.items) {
		var menuItem = document.createElement('li');
		var menuItemLink = document.createElement('a');
		menuItemLink.textContent = item.label;
		menuItemLink.href = item.url;
		if (item.id == siteId) {
			menuItemLink.className = 'active';
		}
		menuItem.appendChild(menuItemLink);
		navDiv.appendChild(menuItem);
	}
	if (navData.message) {
		var msgItem = document.createElement('li');
		msgItem.className = 'message';
		msgItem.textContent = navData.message;
		navDiv.appendChild(msgItem);
	}
	body.classList.add('uninav');
	console.log('uninav initialized!');
}