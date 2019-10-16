<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="css/style.css">
    <title>Weather Forecast Application </title>
</head>

<body>


<div class="weather-container"> 
   <h2> Weather Forcaste App </h2>
    
    <form method="post">
    
    Enter City: <input type="text" name="city" Placholder="insert city name">
    <input type="submit" name="submit" value="submit">
   </form><br>

    <div img class="icon"> </div>
    <div img class="name"> </div>
    <div class="weather">  </div>
    <div class="temp"> </div> 

</div>

<?php 

if(isset($_POST['submit'])){
    $city = $_POST['city'];
   
}

?>

<!-- Loading the map-->
<center>
<div class="mapouter">
    <div class="gmap_canvas">
        <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q= <?php echo $city ?> &t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
            
        </iframe>
    </div>
    <style>
    .mapouter{position:relative;text-align:right;height:500px;width:100%;}
    .gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}
    </style>
</div>
</center>


</body>


<script type ="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"> </script>
<script type="text/javascript">


//Insert City name to check the weather
    var city = "<?php echo $city ;?>";
    console.log(city);
    
    
//get the json code
    $.getJSON("http://api.openweathermap.org/data/2.5/weather?q=" + city +"&units=metric&APPID=5d80ad505ac74b74b94248617a4ec1fa",function(data)
    {
       
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

</script>
</html>












