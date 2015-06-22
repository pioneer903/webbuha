
//CHAPTER 6. FOCUS AND BLUR


 var emailField = document.getElementById("email");

 emailField.onfocus = function() {
 	if ( emailField.value == "your email") {
 		emailField.value = "";
 	}
 };

 emailField.onblur = function() {
 	if ( emailField.value == "") {
 		emailField.value = "your email";
 	}
 };


  var nameField = document.getElementById("name");

  nameField.onfocus = function() {
  	if ( nameField.value == "your name") {
  		nameField.value = "";
  	}
  };

  nameField.onblur = function() {
  	if ( nameField.value == "") {
  		nameField.value = "your name";
  	}
  };
  
 /*

   
   
   
   
  */