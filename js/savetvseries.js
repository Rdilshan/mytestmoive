
    const tvseries = [];
    const xhr = new XMLHttpRequest();
    xhr.open('GET', './php/connecttvseries.php');
    xhr.onload = function() {
        if (xhr.status === 200) {
            const response1 = JSON.parse(xhr.responseText);
            response1.forEach(function(tvserie) {
                tvseries.push({ 
                    id:tvserie.id,
                    name: tvserie.name, 
                    year: tvserie.year,
                    image:tvserie.image,
                    link:tvserie.link,
                    ytlink:tvserie.ytlink
                    
            });
            });
            console.log(response1)
            let i = 0;
            let count = 6;

            
            function loadfilm(i,count){
                let postcount = 0;
                while(postcount < count){
                    const post = document.getElementsByClassName("image-box");
        
                    const imgsrc = post[postcount].querySelector("img")
                    const texttitle = post[postcount].querySelector("h3")
                    const titleyear = post[postcount].querySelector("p")
                    
                    if(response1[count] === undefined){
                        i = i - 1;
                        postcount = postcount + 1;
                        texttitle.textContent =  response1[i].name
                        titleyear.textContent = response1[i].year
                        imgsrc.setAttribute('src', response1[i].image);
                        
                    }else{
                        texttitle.textContent =  response1[i].name
                        titleyear.textContent = response1[i].year
                        imgsrc.setAttribute('src', response1[i].image);
                        i = i + 1;
                        postcount = postcount + 1;
                    }
                }
            }

            loadfilm(i,count);

            //imgsrc.setAttribute('src', response1[0].image);

            const newxtbtn = document.querySelector('.container .next');
            newxtbtn.addEventListener('click', function() {
                console.log('The "next" button was clicked.');
                i = i + 1;
                count = count + 1;
                loadfilm(i,count);
                // add your code here to perform an action when the button is clicked
            });
            

            const backbtn = document.querySelector('.container .back');
            backbtn.addEventListener('click', function() {
                console.log('The "back" button was clicked.');
                i = i - 1;
                count = count - 1;
                loadfilm(i,count);
                // add your code here to perform an action when the button is clicked
            });
            

        
        }else {
        console.log('Request failed.  this is tvseries Returned status of ' + xhr.status);
        }
    };
    xhr.send();




