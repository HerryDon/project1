<?php
@include('connect.php');


if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

//collect data in an aray
    $select= "SELECT * FROM forms WHERE name = '$name' && email = '$email' && phone = '$phone'";
    $result = mysqli_query($conn,$select);

    if(mysqli_num_rows($result)>0){
        echo "<p class = 'alert alert-danger col-sm-3'>User alrerady exists!!</p>";
    }
    else{
        $insert = "INSERT INTO forms(name,email,phone)VALUES('$name','$email','$phone')";
        $result1 = mysqli_query($conn,$insert);
        echo "<p class = 'alert alert-primary col-sm-3 mt-5'>Account created successfully!!</p>";
        echo '<meta http-equiv="refresh" content="0">';
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student managment system</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <nav>
        <label class = "logo">W-School</label>

        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="" class = "btn btn-primary">Login</a></li>
        </ul>
    </nav>


    <div class="section1">
        <img src="images/Classroom.jpeg" alt="" class = "pic1" >
        <h4>We teach students with care</h4>
    </div>

    <div class="container-fluid1">
       <div class="row">
           <div class="col-sm-6">
            <img src="images/pic3.jpg" alt="" class = "pic2">
           </div>
         <div class="col-sm-6 column">
            <h2>Welcome to W-School</h2>
            <br/>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem dolorum modi quae error labore magni animi! Modi et animi molestiae dolorum perferendis, a quia doloribus, mollitia sed, tempora eaque nostrum.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, dignissimos. Nostrum consequuntur deserunt, eum perferendis commodi officia nemo corrupti soluta magnam laboriosam autem quidem illo. Tempora harum nisi enim corrupti.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam vitae voluptas nostrum molestias soluta neque quae nemo magni reiciendis ratione rerum, natus quos nesciunt impedit voluptatibus architecto provident harum eius?
            </p>
         </div>
       </div>
    </div>

    <div class="container-fluid2">
        <h3 id = "header1">OUR TEACHERS</h3>

        <div class="row2">
            <div class="col-sm-4">
                <a href=""><video src="images/video1.mp4"></video><br>In a vibrant academic challenging and
                 encoraging environment where
                 manfold viewpoimts are prized and celenrated
            </a>
            </div>
            <div class="col-sm-4">
                <a href=""><video src="images/video2.mp4"></video><br>In a vibrant academic challenging and
                 encoraging environment where manfold viewpoimts are prized and celenrated 
                </a>
            </div>
            <div class="col-sm-4">
                <a href=""><video src="images/video3.mp4"></video><br>In a vibrant academic
                 challenging and encoraging environment where manfold viewpoimts are prized and celenrated 
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid3">
        <h3 id = "header2">OUR COURSES</h3>

        <div class="row3">
            <div class="col-sm-4">
                <a href=""><img src="images/img1.jpg" alt="Web developer">Web developer</a>
            </div>
            <div class="col-sm-4">
                <a href=""><img src="images/img2.jpg" alt="">Graphic design</a>
            </div>
            <div class="col-sm-4">
                <a href=""><img src="images/img3.jpg" alt="">Marketing</a>
            </div>
        </div>
    </div>

    <div class="container-fluid3">
        <h3>Admission Form</h3>
        <div class="forms">
            <form action="" method = "post">
                <label for="Name">Name:</label>
                <input type="text" name="name" placeholder=""><br>
                <label for="Email">Email:</label>
                <input type="text" name="email" placeholder=""><br>
                <label for="tel">Phone:</label>
                <input type="tel" name="phone" placeholder=""><br>
                
                
                <textarea name="textarea" id="" cols="28" rows="8" class="text">Message</textarea><br><br>
                <button class=" btn btn-primary" name="submit">submit</button><br>
            </form>
        </div>
    </div>
</body>
</html>