<?php
include 'inc/config.php';
include 'inc/header.php';
$sql = "SELECT * FROM blog where id= ".$_GET['url']."";
//var_dump($sql);
$result = $link->query($sql);
?>


<?php 
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // var_dump($row);
        echo '
      <section class="site-section" style="padding: 1rem 0;">
        <div class="container">
          <div class="row">
            <div class="col-md-8 blog-content">
            <p> <img src="'.$row['image'].'" width="100%" height=auto> </p>
            <h2>'.$row['title'].'</h2>
            <p>'.$row['ex-decp'].'</p>
            <div class="pt-5">
                <p>Categories:  <a href="#">Design</a>, <a href="#">Events</a>  Tags: <a href="#">#html</a>, <a href="#">#trends</a></p>
              </div>
            </div>
            <div class="col-md-4 sidebar">
              <div class="sidebar-box">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle">
                <h3 class="text-black">About The Author</h3>
                <p>I\'m '.$row['author'].'. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                <p><a href="#" class="btn btn-primary btn-md text-white">Read More</a></p>
              </div>

              <div class="sidebar-box">
                <h3>Paragraph</h3>
                <p style="font-size:1.2rem;">'.$row['description'].'</p>
              </div>
            </div>
          </div>
        </div>
      </section>';
    }
}
else{
  echo "Can't Find ";
}

include 'inc/footer.php';
?>