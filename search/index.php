<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Search Result</title>
  <script src="https://kit.fontawesome.com/3d2f093b4a.js" crossorigin="anonymous"></script>
  </head>
  <link rel="stylesheet" href="search.css" />
  <body>
    
    <nav><a href="/">Go to home page</a></nav>
    <main class="main-search-result">
      <div class="movieInfo">
        <div class="imageContainer">
          <img src="#" alt="Loading..." class="moviePoster" />
        </div>
        <h1 data-moviename>
          <?php
      $a=$_POST['moviename'];
      echo $a;
      ?>
        </h1>

        <div class="genres"></div>
        <div class="plot"></div>
        <div class="castInfo">
          <div>Director:</div>
          <div>Writer:</div>
          <div>Actors:</div>
        </div>
        <div class="reviewContainer">
          <form method="post" action="./backend.php">
            <h2>SUBMIT A REVIEW</h2>
            <textarea name="review" id="review" cols="30" rows="10" placeholder="Write Something..."></textarea>
            <div class="stars">
             <svg xmlns='http://www.w3.org/2000/svg' class="starImage" viewBox='0 0 576 512'><path d='M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z'/></svg>
             <svg xmlns='http://www.w3.org/2000/svg' class="starImage" viewBox='0 0 576 512'><path d='M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z'/></svg>  <svg xmlns='http://www.w3.org/2000/svg' class="starImage" viewBox='0 0 576 512'><path d='M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z'/></svg>  <svg xmlns='http://www.w3.org/2000/svg' class="starImage" viewBox='0 0 576 512'><path d='M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z'/></svg>  <svg xmlns='http://www.w3.org/2000/svg' class="starImage" viewBox='0 0 576 512'><path d='M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z'/></svg>
            </div>
        <?php $str='<input type="hidden" name="noOfStars" class="noOfStars" />';
            echo $str?>
            <input type="hidden" name="id" class="id" id="movieId" /> 
            <div class="nameInput">
              <input
                type="text"
                id="userName"
                name="userName"
                placeholder="Your Name"
              />
            </div>
            <button
              class="PostButton"
              type="submit"
            >
              Submit
            </button>
          </form>
          
   

          <div class="reviews">
            <h2>Reviewed By Other People</h2>
        
            <?php
           

      include './../info.php';
          $conn=mysqli_connect($server,$username,$password,$dbname);
          if(!$conn){
              echo "failed to fetch reviews";
          }
          else{
            $id=$_COOKIE["imdbID"];
   
            $sql="SELECT * FROM reviews WHERE id='{$id}'";
      
            $result=mysqli_query($conn,$sql);


            if($result){
           
              while($data=mysqli_fetch_array($result,MYSQLI_NUM)){
                $name=$data[0];
                $review=$data[2];
                $stars=$data[3];
              $rev="<div class='review'><div class='header'><div class='userName'>$name</div><div class='stars' data-stars=$stars><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512'><path d='M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z'/></svg><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512'><path d='M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z'/></svg><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512'><path d='M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z'/></svg><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512'><path d='M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z'/></svg><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512'><path d='M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z'/></svg></div></div><div class='reviewContent'>$review</div></div>";
                echo $rev;
              }

            }
            else{
              echo "NO REVIEWS YET!";
            }
          }
           ?>
            
          </div>
        </div>
      </div>
      <div class="trailerContainer">
        <button>Watch Trailer<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg></button>
        <!-- <div class="trailer">

          <iframe src="https://www.youtube.com/embed/ufsrgE0BYf0" allowfullscreen frameborder="0"></iframe>
        </div> -->
      </div>
    </main>
    <div class="errContainer"></div>

    <script src='./search.js'></script>
  </body>
</html>


