   // JavaScript code
   var slider = document.querySelector('.slider');
   var images = slider.getElementsByTagName('img');
   var currentIndex = 0;
   
   function showSlide(index) {
     for (var i = 0; i < images.length; i++) {
       if (i === index) {
         images[i].style.display = 'block';
       } else {
         images[i].style.display = 'none';
       }
     }
   }
   
   function nextSlide() {
     currentIndex++;
     if (currentIndex >= images.length) {
       currentIndex = 0;
     }
     showSlide(currentIndex);

   }
   
   setInterval(nextSlide, 5000); // Change image every 5 seconds