console.log("here")

function checkInput() {
  if(parseInt(document.getElementById("coffee").value)<=-1){
      alert("Cannot buy negative chairs")
      return false
  }
  else if(parseInt(document.getElementById('12').value)<=-1 ){
    console.log("here2")
    alert("Cannot buy negative chairs")
    return false
  }
  else if(parseInt(document.getElementById('13').value)<=-1){
    console.log("here2")
    alert("Cannot buy negative chairs")
    return false
  }
  else if(parseInt(document.getElementById('01').value)=="" ){
    console.log("here2")
    alert("Username Cannot Be Blank")
    return false
  }
  else if(parseInt(document.getElementById('02').value)==""){
    console.log("here2")
    alert("E-mail Cannot Be Blank")
    return false
  }
  else if(parseInt(document.getElementById('03').value)=="" ){
    console.log("here2")
    alert("Password Cannot Be Blank")
    return false
  }
  else if(!(document.getElementById('21').checked) && !(document.getElementById('22').checked) && !(document.getElementById('23').checked)){
    console.log("here2")
    alert("Must Choose a Shipping Option")
    return false
  }

}
