window.onload = function () {
  aboutUS();
}
    function aboutUS() {
      var endpoint="http://www.ie-wallpapers.com/data/out/154/36122285-manchester-united.jpg";
  
      let container = document.getElementById('background-image');
      let imageDiv = document.getElementById("image-con");
      let img = document.createElement('img');
      img.src = endpoint;
      let aboutUs = document.getElementById('About-Us');
      let header = document.createElement('h1');
      let WeAdvance = document.getElementById('Page-desc');
      let par = document.createElement('p');
      par.innerHTML="We provide all the latest football feed";
         header.classList.add("About-Us");
         header.innerHTML="About Us";
         imageDiv.appendChild(img);
         container.appendChild(imageDiv); 
         aboutUs.appendChild(header);
         WeAdvance.appendChild(par);
               
}

