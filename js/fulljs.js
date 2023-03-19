


let i = 0;


function textloop(i){

    for(postcount =0;postcount<6;postcount++){
        let post = document.getElementsByClassName("image-box");

        let imgsrc = post[postcount].querySelector("img")
        let texttitle = post[postcount].querySelector("h3")
        let titleyear = post[postcount].querySelector("p")
        let filmlink = post[postcount].querySelector("a")



        if(film.length > i){
            texttitle.textContent =  film[i].name
            titleyear.textContent = film[i].year
            imgsrc.setAttribute('src', film[i].image);
            const name = film[i].name;
            const url = "./views/posterView.html?name=" + name+"&type=" + 'film'; ;
            filmlink.setAttribute("href", url);
            i++;
        }else{
            
            var x = i % film.length
            console.log("x: " + x) 
            console.log("i: " + i) 

            texttitle.textContent =  film[x].name
            titleyear.textContent = film[x].year
            imgsrc.setAttribute('src', film[x].image);
            
            const name = film[x].name;
            const url = "./views/posterView.html?name=" + name+"&type=" + 'film'; ;
            filmlink.setAttribute("href", url);
            i++;

        }

    }

}
textloop(i)


const newxtbtn = document.querySelector('.container .next');
newxtbtn.addEventListener('click', function() {
    console.log('The "next" button was clicked.');
    i = i + 1;
    textloop(i)
    
});


const backbtn = document.querySelector('.container .back');
backbtn.addEventListener('click', function() {
    console.log('The "back" button was clicked.');
    i = i - 1;
    textloop(i)
    // add your code here to perform an action when the button is clicked
});



//tvseries
let j = 0;
function texttvseries(j){

    for(postcountv = 0;postcountv < 6;postcountv++){

        const posttv = document.getElementsByClassName("image-boxtv");
        const imgsrctv = posttv[postcountv].querySelector("img")
        const texttitletv = posttv[postcountv].querySelector("h3")
        const titleyeartv = posttv[postcountv].querySelector("p")
        let filmlinktv = posttv[postcountv].querySelector("a")


        if(tvseries.length > j){
            texttitletv.textContent =  tvseries[j].name
            titleyeartv.textContent = tvseries[j].year
            imgsrctv.setAttribute('src', tvseries[j].image);

            const name = tvseries[j].name;
            const url = "./views/posterView.html?name=" + name +"&type=" + 'tv';
            filmlinktv.setAttribute("href", url);
            j++
        }else{
            
            var xx = j % tvseries.length
            console.log("x: " + xx) 
            console.log("i: " + j) 

            texttitletv.textContent =  tvseries[xx].name
            titleyeartv.textContent = tvseries[xx].year
            imgsrctv.setAttribute('src', tvseries[xx].image);

            const name = tvseries[xx].name;
            const url = "./views/posterView.html?name=" + name +"&type=" + 'tv';
            filmlinktv.setAttribute("href", url);
            j++

        }
    }


}

texttvseries(j)


const newxtbtntv = document.querySelector('.containertv .next')
newxtbtntv.addEventListener('click', function() {
    console.log('The  tvseries"next" button was clicked.');
    j = j+1
    texttvseries(j)

});


const backbtntv = document.querySelector('.containertv .back')
backbtntv.addEventListener('click', function() {
    console.log('The tvseries "back" button was clicked.');
    j = j-1;
    texttvseries(j)
});



