const navData = {
	"date": "2023-02-24",
	"items": [
		{
			"id": 1,
			"url": "uninav1.html",
			"label": "Website"
		},
		{
			"id": 2,
			"url": "uninav2.html",
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
const body = document.body;
// body.setAttribute("style", "margin-top: calc(" + navData.height + " + 1rem)");
const navDiv = document.getElementById('uninav');
const siteId = navDiv.getAttribute('data-site');
const firstItem = document.createElement('li');
const linkIcon = document.createElement('img');
linkIcon.src = 'link.svg';
linkIcon.alt = 'link icon';
firstItem.textContent = 'DUC';
firstItem.appendChild(linkIcon);
navDiv.appendChild(firstItem);

for (let item of navData.items) {
	const menuItem = document.createElement('li');
	const menuItemLink = document.createElement('a');
	menuItemLink.textContent = item.label;
	menuItemLink.href = item.url;
	if (item.id == siteId) {
		menuItemLink.className = 'active';
	}
	menuItem.appendChild(menuItemLink);
	navDiv.appendChild(menuItem);
}
if (navData.message) {
	const msgItem = document.createElement('li');
	msgItem.className = 'message';
	msgItem.textContent = navData.message;
	navDiv.appendChild(msgItem);
}