

document.addEventListener("DOMContentLoaded", function(event) {
    let params = new URLSearchParams(window.location.search);
    let search = params.get('search');

    const title = document.getElementsByClassName("textresult")[0]
    title.textContent = search
    const newsearch = search.toUpperCase();


    for(var i = 0;i<film.length;i++){
        if(film[i].name.toUpperCase().includes(newsearch) ){
            const film_name = film[i].name
            const film_image = film[i].image
            const film_year = film[i].year
            
            const url = "../views/posterView.html?name=" + film_name +"&type=" + 'film';
            // Create a new div element with class "grid-item"
            var newDiv = document.createElement("div");
            newDiv.className = "grid-item";

            // Set the inner HTML content for the new div
            newDiv.innerHTML = `
                <div class="image-boxtv">
                    <a href="${url}">
                        <img src="${film_image}"alt="Image description">
                        <div class="image-text">
                            <h3>${film_name}</h3>
                            <p>${film_year}</p>
                        </div>
                    </a>
                </div>
            `;

            // Find the parent element where we want to add the new div
            var parentDiv = document.getElementsByClassName("grid-container")[0];

            // Append the new div to the parent div
            parentDiv.appendChild(newDiv);

        }
    }

    // searching tvseries
    for(var i = 0;i<tvseries.length;i++){
        if(tvseries[i].name.toUpperCase().includes(newsearch) ){
            const film_name = tvseries[i].name
            const film_image = tvseries[i].image
            const film_year = tvseries[i].year
            
            const url = "../views/posterView.html?name=" + film_name +"&type=" + 'tv';
            // Create a new div element with class "grid-item"
            var newDiv = document.createElement("div");
            newDiv.className = "grid-item";

            // Set the inner HTML content for the new div
            newDiv.innerHTML = `
                <div class="image-boxtv">
                    <a href="${url}">
                        <img src="${film_image}"alt="Image description">
                        <div class="image-text">
                            <h3>${film_name}</h3>
                            <p>${film_year}</p>
                        </div>
                    </a>
                </div>
            `;

            // Find the parent element where we want to add the new div
            var parentDiv = document.getElementsByClassName("grid-container")[0];

            // Append the new div to the parent div
            parentDiv.appendChild(newDiv);

        }
    }

})
