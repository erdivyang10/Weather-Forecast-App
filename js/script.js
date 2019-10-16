

//Insert City name
	var city = 'Ahmedabad,IN';
    
    
//get the json code
	$.getJSON("http://api.openweathermap.org/data/2.5/weather?q=" + city +"&units=metric&APPID=5d80ad505ac74b74b94248617a4ec1fa",function(data){
		console.log(data);
 
    var icon = "https://api.openweathermap.org/img/w/" + data.weather[0].icon +".png";
    var temp = Math.floor(data.main.temp);
    var weather = data.weather[0].main;
    var name = data.name;

   
     //display the data at frontend
    $('.icon').attr("src",icon);
       
    $('.temp').append(temp);
    $('.weather').append(weather);
    $('.name').append(name);
	});

