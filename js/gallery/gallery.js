
window.onload = function(){
	var placeholder = document.createElement("img");
	placeholder.setAttribute("id", "placeholder");
	placeholder.setAttribute("src", "images/hawk.jpg");
	placeholder.setAttribute("alt", "hawk");
	var description = document.createElement("p");
	description.setAttribute("id", "description");
	var desctext = document.createTextNode("I am hawk.hhaha");
	description.appendChild(desctext);

	document.body.appendChild(placeholder);
	document.body.appendChild(description);
	var aa = document.getElementById("aa");
	aa.parentNode.insertBefore(description,aa);
}

