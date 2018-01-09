<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Random Activity Picker</title>
    <link rel="stylesheet" href="css/activity_picker.css">
  </head>
  <body>
    <h1>What will you be doing tonight?!</h1>

    <p id="random_activity"></p>

    <div class="main">
        <button class="button-one" onclick="display_random_activity()">Click Me!</button>
      </div>

    <script>

      function display_random_activity(){

      var counter = 5;


      var activities = ['see a movie', 'find a new restauraunt', 'walk through the park','hit the gym','see a concert'];

      var activity = activities[Math.floor(Math.random()*activities.length)];

      document.getElementById('random_activity').innerHTML = "We will " + activity + "!";

      }
    </script>


  </body>
</html>
