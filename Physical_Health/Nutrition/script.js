let searchButton = document.querySelector("#search")

//Add an event listener to the button that runs the function sendApiRequestwhen it is clicked
searchButton.addEventListener("click", () => {
  var x = document.getElementById("myInput").value;
  console.log(x)
  console.log("button pressed")
  sendApiRequest(x)
})

//An asynchronous function to fetch data from the API.
async function sendApiRequest(x) {
  console.log(x);
  const response = await fetch("https://edamam-recipe-search.p.rapidapi.com/search?q=" + x + "", {
    "method": "GET",
    "headers": {
      "x-rapidapi-key": "d3dc0f7bf8msha851974edcf0685p1dc7fcjsn7172d55b9ed8",
      "x-rapidapi-host": "edamam-recipe-search.p.rapidapi.com"
    }
  });
  const data = await response.json();
  console.log(data);
  useApiData(data);
}

function useApiData(data) {

document.querySelector('#content').innerHTML = `

    <div class="card-group" style="width: 95rem;"> 
        <div class="card" >
          <img class="card-img-top" src="${data.hits[0].recipe.image}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">${data.hits[0].recipe.label}</h5>
            <p class="card-text">${data.hits[0].recipe.healthLabels}</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="${data.hits[0].recipe.url}" class="btn btn-primary">See More</a>
          </div>
          </div>
        </div>

        <div class="card" >
          <img class="card-img-top" src="${data.hits[1].recipe.image}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">${data.hits[1].recipe.label}</h5>
            <p class="card-text">${data.hits[1].recipe.healthLabels}</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="${data.hits[1].recipe.url}" class="btn btn-primary">See More</a>
          </div>
        </div>
        </div>

        <div class="card" >
          <img class="card-img-top" src="${data.hits[2].recipe.image}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">${data.hits[2].recipe.label}</h5>
            <p class="card-text">${data.hits[2].recipe.healthLabels}</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="${data.hits[2].recipe.url}" class="btn btn-primary">See More</a>
          </div>
        </div>
        </div>

        <div class="card" >
          <img class="card-img-top" src="${data.hits[3].recipe.image}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">${data.hits[3].recipe.label}</h5>
            <p class="card-text">${data.hits[3].recipe.healthLabels}</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="${data.hits[3].recipe.url}" class="btn btn-primary">See More</a>
          </div>
        </div>
        </div>

        <div class="card" >
          <img class="card-img-top" src="${data.hits[4].recipe.image}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">${data.hits[4].recipe.label}</h5>
            <p class="card-text">${data.hits[4].recipe.healthLabels}</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="${data.hits[4].recipe.url}" class="btn btn-primary">See More</a>
          </div>
        </div>
        </div>


    </div>

    <div class="card-group" style="width: 95rem;">

      <div class="card" >
        <img class="card-img-top" src="${data.hits[5].recipe.image}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">${data.hits[5].recipe.label}</h5>
          <p class="card-text">${data.hits[5].recipe.healthLabels}</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a href="${data.hits[5].recipe.url}" class="btn btn-primary">See More</a>
        </div>
      </div>
      </div>

      <div class="card" >
        <img class="card-img-top" src="${data.hits[6].recipe.image}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">${data.hits[6].recipe.label}</h5>
          <p class="card-text">${data.hits[6].recipe.healthLabels}</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a href="${data.hits[6].recipe.url}" class="btn btn-primary">See More</a>
        </div>
      </div>
      </div>

      <div class="card" >
        <img class="card-img-top" src="${data.hits[7].recipe.image}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">${data.hits[7].recipe.label}</h5>
          <p class="card-text">${data.hits[7].recipe.healthLabels}</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a href="${data.hits[7].recipe.url}" class="btn btn-primary">See More</a>
        </div>
      </div>
      </div>

      <div class="card">
        <img class="card-img-top" src="${data.hits[8].recipe.image}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">${data.hits[8].recipe.label}</h5>
          <p class="card-text">${data.hits[8].recipe.healthLabels}</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end"  >
          <a href="${data.hits[8].recipe.url}" class="btn btn-primary">See More</a>
        </div>
        </div>
      </div>


      <div class="card" >
        <img class="card-img-top" src="${data.hits[9].recipe.image}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">${data.hits[9].recipe.label}</h5>
          <p class="card-text">${data.hits[9].recipe.healthLabels}</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end"  >
          <a href="${data.hits[9].recipe.url}" class=" btn btn-primary" >See More</a>
        </div>
        </div>
      </div>
</div>
  
    `
}
