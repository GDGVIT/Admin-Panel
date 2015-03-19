var xmlHttp = createXmlHttpRequestObject();

function createXmlHttpRequestObject() {
	if (window.ActiveXObject){
		try{
			xmlHttp = new ActiveXObject("Microsofot.XMLHTTP");
		} catch (e) {
			xmlHttp = false;
		}
	}else{
		try{
			xmlHttp = new XMLHttpRequest();
		} catch (e) {
			xmlHttp = false;
		}
	}

	if (!xmlHttp) {
		alert("Could not create XML Object");
	} else {
		return xmlHttp;
	}
}

function event_body(flag) {
	document.getElementById("event_body").innerHTML = "";
		xmlHttp.onreadystatechange = function() {
		if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
			document.getElementById("event_body").innerHTML += xmlHttp.responseText;
		}
		}
		xmlHttp.open("GET", "view_event.php", true);
		xmlHttp.send();
}