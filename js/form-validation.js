
   //handle the form submit event
   function prepareEventHandlers(){
      document.getElementById("feedback").onsubmit = function(){
          if (document.getElementById("email").value == ""){
              document.getElementById("errorMessage").innerHTML = "Please provide at least an email address!";
              //to STOP the form from submitting
              return false;
          }else{
              //reset and allow the form to submit
              document.getElementById("errorMessage").innerHTML = "";
              return true;
          }
      };
   }
   
   //when the document loads
   window.onload = functiom(){
      prepareEventHandlers();
   }
   