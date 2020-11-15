document.getElementById('store').addEventListener('submit', ev =>{
    var username = document.getElementById('username').value;
    var password= document.getElementById('password').value;
    var gameQ=document.getElementById('game').value;
    var dice1Q=document.getElementById('6dice').value;
    var dice2Q=document.getElementById('20dice').value;
    var Free=document.getElementById("Free");
    var Overnight=document.getElementById("Overnight");
    var Three=document.getElementById("Three Days");
    console.log(Free.checked);
    console.log(Overnight);
    console.log(Three);
     if(/\@/.test(username)) {   
      }
      else{
        alert("Your Username is bad");
        ev.preventDefault();
      }
     if(password==""){
       alert("Your Password Needs literally anything");
       ev.preventDefault();
      }  
     if(gameQ=="" || dice1Q=="" || dice2Q==""){
       alert("You need to tell me everything you want");
       ev.preventDefault();
      }
     if(!Free.checked && !Overnight.checked && !Three.checked){
       alert("Please select a shipping option");
       ev.preventDefault();
      }
      
     
  });