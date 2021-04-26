






let searchButton = document.querySelector("#search")

//Add an event listener to the button that runs the function sendApiRequestwhen it is clicked
searchButton.addEventListener("click", () => {
    console.log("button pressed")
    sendApiRequest()
})

//An asynchronous function to fetch data from the API.
async function sendApiRequest(){
    let APP_ID = "9158a977"
    let API_KEY = "db9879cb607133fa80f6be97996d70cf"
    let response = await fetch('https://api.edamam.com/search?q=chicken&app_id=${APP_ID}&app_key=${db9879cb607133fa80f6be97996d70cf}' );
    console.log(response)
    let data = await response.json()
    console.log(data)   
}

//Function that does something with the data received from the API.
//The name of the function should be customized to whatever you are doing
function useApiData(data) {
  /*  document.querySelector('#content').innerHTML = ` 
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    `
*/
}