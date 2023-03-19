function correctimg(name){
  let i =0;
   while(film.length >= i){
    if(film[i].name == name){
      return i;
    }
    i=i+1;
   }
}

function correctingtv(name){
  let j =0;
  while(tvseries.length >= j){
    if(tvseries[j].name == name){
      return j;
    }
    j=j+1;
   }
}

document.addEventListener("DOMContentLoaded", function(event) {
  let params = new URLSearchParams(window.location.search);
  let name = params.get('name');
    let type = params.get('type')

    
    let imgtitle = document.querySelector('.image-box.postimg img');
    let title = document.getElementsByClassName("post-title")[0];
    let youtubeTrail = document.querySelector('.viedoyt iframe')
    let downbtn = document.querySelector('.download-btn')

    if(type == 'film'){

      title.textContent = name;
      console.log(film.length)
      let number = correctimg(name)
  
      imgtitle.setAttribute('src',film[number].image)
      youtubeTrail.setAttribute('src',film[number].ytlink)
      console.log(film[number].link)
      downbtn.setAttribute('href',film[number].link)

    }
    
    if (type == 'tv') {

      title.textContent = name;
      let number1 = correctingtv(name)

      console.log("tv: "+ tvseries.length)

      imgtitle.setAttribute('src',tvseries[number1].image)
      youtubeTrail.setAttribute('src',tvseries[number1].ytlink)
      console.log(tvseries[number1].link)
      downbtn.setAttribute('href',tvseries[number1].link)

    }

  });



  