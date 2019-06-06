
//var weatherTemprature;
//weatherTemprature = 5;
//console.log(weatherTemprature)
//if(weatherTemprature < 10)
  //console.log("it is cold")
//elseif(weatherTemprature > 20)
  //console.log("it is warm")
//else(weatherTemprature > 10 && weatherTemprature < 20)
 //console.log("it is nice")
function weather(weatherTemprature){
  if(weatherTemprature < 10){
    return ("it is cold")
  }
  else if(weatherTemprature > 20){
   return ("it is warm")
  }
  else(weatherTemprature > 10 && weatherTemprature < 20)
  return ("it is nice")
  
}
console.log( weather(5) )
