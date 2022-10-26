const queryTitle = document.querySelector("h1[data-moviename]");
const data = document.cookie;
function getCookie(name) {
  function escape(s) {
    return s.replace(/([.*+?\^$(){}|\[\]\/\\])/g, "\\$1");
  }
  var match = document.cookie.match(
    RegExp("(?:^|;\\s*)" + escape(name) + "=([^;]*)")
  );
  return match ? match[1] : null;
}
const Title = getCookie("Title");
const Genre = getCookie("Genre");
const Director = getCookie("Director");
const Writer = getCookie("Writer");
const Actors = getCookie("Actors");
const Plot = getCookie("Plot");
const Poster = getCookie("Poster");
const imdbRating = getCookie("imdbRating");
const imdbID = getCookie("imdbID");
const Response = getCookie("Response");
const Type = getCookie("Type");
const BoxOffice = getCookie("BoxOffice");
const Language = getCookie("Language");
const Runtime = getCookie("Runtime");
if (Response == "True") {
  const img = document.querySelector("img.moviePoster");
  img.src = Poster;
  const h1 = document.querySelector("h1[data-moviename]");
  h1.textContent = Title;
  const genres = document.querySelector(".genres");
  let genresArray = Genre.split(",");
  for (let i = 0; i < genresArray.length; i++) {
    let genre = document.createElement("div");
    genre.textContent = genresArray[i];
    genres.append(genre);
  }
  const plot = document.querySelector(".plot");
  plot.textContent = Plot;
  const castInfo = document.querySelector(".castInfo");
  castInfo.children[0].textContent += Director;
  castInfo.children[1].textContent += Writer;
  castInfo.children[2].textContent += Actors;

  //for setting imdb id of the movie to send to the database
  const idInput = document.querySelector("input.id");
  idInput.value = imdbID;
  document.cookie = `id=${imdbID};`;
} else {
  const errContaier = document.querySelector(".errContainer");
  let err = document.createElement("div");
  err.style =
    "position:fixed;inset:0;background:crimson;height:calc(100vh - 70px);width:100vw;color:white;display:grid;place-items:center;top:70px;font-size:2rem";
  err.textContent = "Error !! No Such Movie Found";
  errContaier.appendChild(err);
  console.log(err);
  const movieInfo = document.querySelector(".movieInfo");
  movieInfo.style.display = "none";
}

const reviews = `<?php include './../info.php';
  $conn=mysqli_connect($server,$username,$password,$dbname);
  if(!$conn){
  echo "failed to fetch reviews";
  }
  else{
  $sql="SELECT * FROM reviews WHERE id='${imdbID}'";
  $result=mysqli_query($conn,$sql);
  $data=mysqli_fetch_assoc($result);
  if($data){
  while($data=mysqli_fetch_assoc($result)){

  $name=$data['userName'];
  $review=$data['message'];
  $stars=$data['noOfStars'];
  echo $name, $review, $stars;
  }

  }
  else{
  echo "NO REVIEWS YET!";
  }
  }
  ?>`;

function preventReload(e) {
  e.preventDefault();
}

//todo

//for star click
const starImg = document.querySelectorAll("svg.starImage");

const noOfStarsInput = document.querySelector("input.noOfStars");
for (let i = 0; i < 5; i++) {
  starImg[i].addEventListener("click", (e) => {
    handleStarClick(i, starImg);
  });
}
function handleStarClick(i, imgArray) {
  for (j = 0; j <= i; j++) {
    imgArray[j].dataset.dark = "true";
  }
  for (j = i + 1; j <= 4; j++) {
    imgArray[j].dataset.dark = "false";
  }
  console.log(i + 1);
  noOfStarsInput.value = i + 1;
}
// for validating submit data

const submitbtn = document.querySelector(".reviewContainer form button");
function handleValidateForm(e) {
  const text = document.querySelector(".reviewContainer form textarea").value;
  const name = document.getElementById("userName").value;
  if (!name) {
    alert("Enter Your Name");
    e.preventDefault();
  }
  if (!text) {
    alert("Please add review");
    e.preventDefault();
  }
}
submitbtn.addEventListener("click", handleValidateForm);

// mainSearchResult = document.querySelector(".main-search-result");
// const movieInfo = document.createElement("div");
// movieInfo.classList.add("movieInfo");
// mainSearchResult.appendChild(movieInfo);
// const imageContainer = document.createElement("div");
// imageContainer.classList.add("imageContainer");
// const img = document.createElement("img");
// img.src =
//   "https://m.media-amazon.com/images/M/MV5BMTAzODc3NjU1NzNeQTJeQWpwZ15BbWU4MDk5NTQ4NTMx._V1_SX300.jpg";
// imageContainer.appendChild(img);
// movieInfo.appendChild(imageContainer);
// const h1 = document.createElement("h1");
// h1.setAttribute("data-moviename");
// h1.textContent = queryTitle;
// movieInfo.appendChild(h1);
// const genres = document.createElement("div");
// genres.classList.add("genres");
// for (let i = 0; i < 3; i++) {
//   let genre = document.createElement("div");
//   genre.textContent = "Action" + i;
//   genres.append(genre);
// }
// movieInfo.appendChild(genres);
// const plot = document.createElement("div");
// plot.classList.add("plot");
// plot.textContent =
//   "For his final assignment, a top temporal agent must pursue the oncriminal that has eluded him throughout time. The chase turns into aunique, surprising and mind-bending exploration of love, fate,identity and time travel taboos";
// movieInfo.appendChild(plot);
// const castInfo = document.createElement("div");
// castInfo.classList.add("castInfo");
// const Director = document.createElement("div");
// Director.textContent = "direction, action, writing persons";
// Writer.textContent = "direction, action, writing persons";
// Actors.textContent = "direction, action, writing persons";
// const Writer = document.createElement("div");
// const Actors = document.createElement("div");
// castInfo.append(Director, Writer, Actors);
// movieInfo.appendChild(castInfo);
// const reviewContainer = document.createElement("div");
// reviewContainer.classList.add("reviewContainer");
// const textarea = document.createElement("textarea");
// textarea.id = "review";
// textarea.name = "review";
// textarea.cols = 30;
// textarea.rows = 10;
// const postButton = document.createElement("btn");
// postButton.classList.add("postButton");
// postButton.textContent = "Post";
// const reviews = document.createElement("div");
// mainSearchResult.appendChild(movieInfo);
