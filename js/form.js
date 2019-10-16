

//Fetch form
var x = document.getElementById("form_sample");
var createform = document.createElement('form'); // Create New Element Form
createform.setAttribute("action", ""); // Setting Action Attribute on Form
createform.setAttribute("method", "post"); // Setting Method Attribute on Form
x.appendChild(createform);


//input field of city
var namelabel = document.createElement('label'); // Create Label for Name Field
namelabel.innerHTML = "City : "; // Set Field Labels
createform.appendChild(namelabel);

var inputelement = document.createElement('input'); // Create Input Field for Name
inputelement.setAttribute("type", "text");
inputelement.setAttribute("city", "dcity");
createform.appendChild(inputelement);

var linebreak = document.createElement('br');
createform.appendChild(linebreak);


var submitelement = document.createElement('input'); // Append Submit Button
		submitelement.setAttribute("type", "submit");
		submitelement.setAttribute("city", "dcity");
		submitelement.setAttribute("value", "Submit");
		createform.appendChild(submitelement);