  function function1(p1, p2){
    return p1 * p2;
  }
  document.getElementById("demo3").innerHTML = function1(4,3);


  document.getElementById("demo5").innerHTML =
  "The temperature is " + toCelsius(77) + " Celsius";

  function toCelsius(fahrenheit) {
      return (5/9) * (fahrenheit-32);
