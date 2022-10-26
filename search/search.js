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
  err.innerHTML = `ERROR NO SUCH MOVIE FOUND <br/>
  <a href="/">Go to home page</a>`;
  errContaier.appendChild(err);
  console.log(err);
  const movieInfo = document.querySelector(".movieInfo");
  movieInfo.style.display = "none";
}
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

//showing no review message
const reviewsContainer = document.querySelector(".reviewContainer .reviews");
if (!reviewsContainer.children[1]) {
  reviewsContainer.appendChild(document.createElement("div"));
  reviewsContainer.children[1].textContent = "NO REVIEWS YET";
  reviewsContainer.children[1].align = "center";
}
//trailer

const trailerContainer = document.querySelector(".trailerContainer");
const showTrailerButton = trailerContainer.children[0];
console.log(showTrailerButton);
showTrailerButton.addEventListener("click", handleShowTrailer);

async function handleShowTrailer(e) {
  e.target.disabled = true;
  e.target.textContent = "Loading...";
  let res = await fetch(
    `https://imdb-api.com/API/YouTubeTrailer/k_2dg4exfy/${getCookie("imdbID")}`
  );
  let { videoId } = await res.json();
  console.log({ imdbID: getCookie("imdbID"), videoId });
  const iframe = document.createElement("iframe");
  iframe.src = `https://www.youtube.com/embed/${videoId}?list=RD6FEsFvZ-hqY`;
  iframe.allowFullscreen = true;
  const iframeContainer = document.createElement("div");
  iframeContainer.classList.add("trailer");
  iframeContainer.append(iframe);
  e.target.parentElement.append(iframeContainer);
  iframeContainer.scrollIntoView({
    behavior: "smooth",
    block: "end",
  });
  e.target.textContent = getCookie("Title") + "- Trailer on youtube";
}
