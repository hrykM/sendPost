// JavaScript Document
function sendPost(action, data,method){
	
	// フォームの生成
 	var form = document.createElement("form");
	form.setAttribute("action", action);
	form.setAttribute("method", method);
	form.style.display = "none";
	document.body.appendChild(form);

	if (data !== undefined) {
		for (var paramName in data) {
			var input = document.createElement('input');
			input.setAttribute('type', 'hidden');
			input.setAttribute('name', paramName);
			input.setAttribute('value', data[paramName]);
			form.appendChild(input);
		}
	}
	// submit
	               
	form.submit();
}