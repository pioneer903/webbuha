//set timeout is in milliseconds
 //setTimeout(simpleMessage, 1000);
 
 var myImage = document.getElementById("portfolioImage");

 var imageArray = ["images/portfolio_images/Cheap_Computer_Service_200x135.PNG",
                    "images/portfolio_images/Cheap_Computer_Service_200x135.png", 
                    "images/portfolio_images/Express_Computers_200x135.png",
                    "images/portfolio_images/Golf1_200x135.png",
                    "images/portfolio_images/Golf2_200x135.png",
                    "images/portfolio_images/JY_Computer_Services_200x135.png",
                    "images/portfolio_images/Oceanic_Taxi_200x135.png",
                    "images/portfolio_images/Webbuha_200x135.png",
                    "images/portfolio_images/Bayside-Skillet-200x135.png"]
   
 var imageIndex = 0;
 
 var imagePause = document.getElementById("imagePause");
 var imagePlay = document.getElementById("imagePlay");   
   function changeImage()
   {
      myImage.setAttribute("src", imageArray[imageIndex]);
      imageIndex++;
      if (imageIndex >= imageArray.length)
      {
          imageIndex = 0;
      }
      
   }
   //setInterval is also in milliseconds
   var intervalHandle = setInterval(changeImage, 2000);
   
   
  /*
    imagePause.onclick = function()
      {
       clearInterval(intervalHandle);
      }; 
   
   
  
    imagePlay.onclick = function()
      {
       setInterval(changeImage, 1000);
       
      };  */ 