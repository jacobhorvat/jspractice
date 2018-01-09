<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Trips and Cars</title>
  </head>
  <body>

    <h1>Let's Build a Car</h1>

    <p id="car_demo"></p>

    <h1>Tell us about your trip!</h1>

    <p id="short_trip"></p>

    <script>
    var car = {
                type:"Tesla",
                model:"Roadster",
                color:"Blue",
                fullCar: function() {
                  return this.color + " " + this.type + " " + this.model;
                }
              };
    var person = {
                  fname:"Jacob",
                  lname:"Horvat",
                  fullname: function() {
                      return this.fname + " " + this.lname;
                  }
              };
    var shortTrip = {
                      tripName: "Mount Tamilpias Journey",
                      tripLocation: "California",
                      tripDescription: "My trip to Mount Tam was mostly up or down hill and a combination of walking on and off the trail. The sun was out and beat down upon my body. My advice is to wear sunscreen, bring water and be mentally ready for a good workout.",
                      tripDetails: function() {
                        return this.tripName;
                      }
                    };
    document.getElementById("car_demo").innerHTML = person.fullname() + " would like to own a " + car.fullCar() + " " + "someday.";

    document.getElementById("short_trip").innerHTML = shortTrip.tripDetails();
    </script>



</body>
</html>


<!-- Check Text -->
<div id="disappear">
    <h1>Javascript Button</h1>

    <p id="demo">Change this text</p>

    <button type="button" onclick='document.getElementById("demo").innerHTML = "Hello JavaScript!"'>Click Me!</button>

<!-- Change Images -->

    <h1>Change images</h1>

    <button type="button" onclick="document.getElementById('bronze_image').src='images/gold.jpg'">Silver</button>

    <img id="bronze_image" src="images/bronze.jpg" alt="Bronze" style="width:100px">

    <button type="button" onclick="document.getElementById('bronze_image').src='images/silver.jpg'">Gold</button>

<!--  Change Font Sizes with JS-->

    <p id="p_demo">Change the style of this text</p>

    <button type="button" onclick="document.getElementById('p_demo').style.fontSize='35px'">Click Me</button>
</div>
</div>
<!-- Make Everything Disappear  -->

    <p>Make Everything Disappear</p>

    <button type="button" onclick="document.getElementById('disappear').style.display='none'">Make all disappear</button>

    <p id="new_demo"></p>

<!-- Changed by a function in the Script-->

    <p id="change_text">This will be changed</p>

    <button type="button" onclick="myFunction()">Change the text</button>

    <script>
      document.getElementById('new_demo').innerHTML = "My First Javascript within script tags!"

      function myFunction(){
        document.getElementById("change_text").innerHTML = "This paragraph has been changed by innerHTML";
      }

    </script>

<!-- External JS Script -->

    <p id="text_change">This will be changed by external JS file</p>

    <button type="button" onclick="externalJS()">Press this button</button>





<!-- Testing Purposes -->

    <script>
      document.write(5+6);
    </script>

<!-- Erase all content with document.write -->

    <button type="button" onclick="document.write(10+6)">Add this!</button>

<!-- Display Data in an alertbox -->


<!-- Test window.alert and Console.log with the external js/script2.js file -->




<!-- time for some Functions and variables! -->

    <p id="solution"></p>

    <button type="button" onclick="display_z()">Display answer</button>

    <p id="display_price"></p>

    <button type="button" onclick="total_price()">Display price</button>

    <p id="demo3"></p>

    <p id="demo4"></p>

    <p id="demo5"></p>


    <script src = "js/functions.js"></script>
    <script src = "js/myScript2.js"></script>
    <script src="js/myScript.js"></script>

  </body>
</html>
