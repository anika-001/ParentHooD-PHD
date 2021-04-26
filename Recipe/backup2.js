
let searchButton = document.querySelector("#search")

//Add an event listener to the button that runs the function sendApiRequestwhen it is clicked
searchButton.addEventListener("click", () => {
  console.log("button pressed")
  sendApiRequest()
})

//An asynchronous function to fetch data from the API.
async function sendApiRequest() {
  let data;
  fetch("https://edamam-recipe-search.p.rapidapi.com/search?q=pizza", {
    "method": "GET",
    "headers": {
      "x-rapidapi-key": "d3dc0f7bf8msha851974edcf0685p1dc7fcjsn7172d55b9ed8",
      "x-rapidapi-host": "edamam-recipe-search.p.rapidapi.com"
    }
  })

    .then(response => response.json())
    .then(response => {
    data = console.log(response);
    })
    .catch(err => {
      console.error(err);
    }); 
    useApiData(data)
}

async function useApiData(data) {

  document.querySelector('#content').innerHTML = `
  
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="hits[0].recipe.image" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">"hits[0].recipe.label"</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  </div>
  `
}
