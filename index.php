<!DOCTYPE html>
<html>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Merriweather:wght@300&family=Oswald:wght@600&display=swap" rel="stylesheet">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

* {
  box-sizing: border-box;
}
p{
  font-family: 'Anton', sans-serif;
font-family: 'Merriweather', serif;
font-family: 'Oswald', sans-serif;
}
h2{
  font-family: 'Anton', sans-serif;
font-family: 'Merriweather', serif;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header2 {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
 
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;

}
.adminlogo{
  padding-left: 20px;padding: top 28px;position: absolute;
}
.sidelogo{
  padding-right: 22px;
  width: 45px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
  padding-left: 40px;

 
}

.sidenav a:hover {
  color: #f1f1f1;
}
.admindp{
  border-radius: 50%;
}
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
.newlogo{
    padding-right: 97%;
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
@import url('https://fonts.googleapis.com/css2?family=Yaldevi:wght@400;600&display=swap');
body{
  margin: 0;
  padding: 0;
  font-family: 'Yaldevi', sans-serif;
}
span{
  color: black;
  font-weight:900;
 
}
 
footer{
  background: #f1f1f1;
  padding: 90px 0; 
  height: 150px;
}
 
.footer-container{
  max-width: 1300px;
  margin: auto;
  padding: 0 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap-reverse;
}
 
.logo{
  width: 180px;
}
 
.social-media{
  margin: 20px 0;
}
 
.social-media a{
  color: #001a21;
  margin-right: 25px;
  font-size: 22px;
  text-decoration: none;
  transition: .3s linear;
  Padding-bottom: 100px;
}
 
.social-media a:hover{
  color: #fc5c65;
}
 
.right-col h1{
  font-size: 26px;
}
 
.border{
  width: 230px;
  height: 4px;
  background: #370407;
}
 
.newsletter-form{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}
 
.txtb{
  flex: 1;
  padding: 18px 40px;
  font-size: 16px;
  color: #293043;
  background: #ddd;
  border: none;
  font-weight: 700;
  outline: none;
  border-radius: 30px;
  min-width: 260px;
}
 
.btn{
  padding: 18px 40px;
  font-size: 16px;
  color: #f1f1f1;
  background: #370407;
  border: none;
  font-weight: 700;
  outline: none;
  border-radius: 30px;
  margin-left: 20px;
  cursor: pointer;
  transition: opacity .3s linear;
}
 
.btn:hover{
  opacity: .7;
}
 
.page-content{
  min-height: 100vh;
  font-size: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
}
 
@media screen and (max-width:960px) {
  .footer-container{
    max-width: 600px;
  }
  .right-col{
    width: 100%;
    margin-bottom: 60px;
  }
 
  .left-col{
    width: 100%;
    text-align: center;
  }
}
 
 
@media screen and (max-width:700px){
  .btn{
    margin: 0;
    width: 100%;
    margin-top: 20px;
    }
}
</style>
</head>
<body>

    <div class="header2">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()" class="newlogo">&#9776;</span>
        <h2>The Adventure Story</h2>
      </div>
      
      <div class="row">
        <div class="leftcolumn">
          <div class="card">
            <h2>The Mountain biking</h2>
            <h5>Mar 2, 2023</h5>
            <div class="fakeimg"><img src="blogimg/b5.jpeg" width="100%"></div>
            <p>Mountain biking</p>
            <p> is a sport of riding bicycles off-road, often over rough terrain, usually using specially designed mountain bikes. Mountain bikes share similarities with other bikes but incorporate features designed to enhance durability and performance in rough terrain, such as air or coil-sprung shocks used as suspension, larger and wider wheels and tires, stronger frame materials, and mechanically or hydraulically actuated disc brakes.</p>
          </div>
          <div class="card">
            <h2>The Sunset Point</h2>
            <h5>3 April, 2023</h5>
            <div class="fakeimg"><img src="blogimg/b1.jpeg" width="100%"></div>
            <p>During a sunset</p>
            <p>Mountain peaks lose sunlight later than areas around them. From a viewer observing a mountain, a shadow can appear ascending from the base to the peak. And conversely, during a sunrise, mountain peaks get sunlight before the areas around them and a shadow can appear descending from the peak to the base.</p>
          </div>
        </div>
        <div class="rightcolumn">
          <div class="card">
            <h2>About Me</h2>
            <div class="fakeimg" ><Img src="dp.jpeg" width="100%"></div>
            <p>What started out as a little travel blog to keep friends and family up-to-date on our around the world trip has grown into something much bigger.</p>
          </div>
          <div class="card">
            <h3>Popular Post</h3>
            <div class="fakeimg"><img src="blogimg/b2.jpeg" width="100%"></div><br>
            <div class="fakeimg"><img src="blogimg/b3.jpeg" width="100%"></div><br>
            <div class="fakeimg"><img src="blogimg/b4.jpeg" width="100%"></div>
            <div class="fakeimg"><img src="blogimg/b6.jpeg" width="100%"></div>
          </div>
          <div class="card">
            <h3>Thought of the</h3>
            <p>Go to work. Open computer. Scroll for plane tickets for 6 hours. Close computer. Go home.</p>
          </div>
        </div>
      </div>
      <footer>
        <div class="footer-container">
          <div class="left-col">
            <img src="logo.png" alt="" class="logo">
            <div class="social-media">
              <a href="#"><img src="footericons/facebook.png" width="40px"></a>
              <a href="#"><img src="footericons/instagram.png" width="40px"></a>
              <a href="#"><img src="footericons/linkedin.png" width="40px"></a>
              <a href="#"><img src="footericons/youtube.png" width="40px"></a>
              <a href="#"><img src="footericons/email.png" width="40px"></a>
            </div>
            <p class="rights-text">© 2023 Created By <b>MukulDesigns</b>  All Rights Reserved.</p>
          </div>
   
          <div class="right-col">
            <h1>Our Blogs Update</h1>
            <div class="border"></div>
            <p>Enter Your Email to get our news and updates.</p>
            <form action="" class="newsletter-form">
              <input type="text" class="txtb" placeholder="Enter Your Email">
              <input type="submit" class="btn" value="submit">
            </form>
          </div>
        </div>
      </footer>   
   

      <div id="mySidenav" class="sidenav">
  <div class="adminlogo"></div>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="admin.html"><img src="sidebaricons/user.png" width="20px" class="sidelogo">Admin</a>
  <a href="newpost.php"><img src="sidebaricons/post.png" width="20px"class="sidelogo">New Post</a>
  <a href="new.php"><img src="sidebaricons/blog.png" width="20px"class="sidelogo">My Blogs</a>
  <a href="newcontact.html"><img src="sidebaricons/phone-call.png" width="20px"class="sidelogo">Contact</a>
</div>



<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   
</body>
</html> 