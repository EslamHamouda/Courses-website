<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>P.O.Courses | Services</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="img/programming-vector-icon.jpg">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">P.O.</span> Courses</h1>
        </div>
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li class="current"><a href="services.php">Services</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="newsletter">
      <div class="container">
        <h1>Subscribe To Get Our Newcourses</h1>
        <form>
          <input type="email" placeholder="Enter Email..." required>
          <button type="submit" class="button_1">Subscribe</button>
        </form>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <form action="send.php" method="post"> 
        <article id="main-col">
          <h1 class="page-title">Upload Your Course To Our Website</h1>
          <ul id="services">
            <li>
              <h3>Please enter your data and we are contact you to upload your course soon...</h3>
              <label>Name</label><br>
              <input type="text" name="name" id="name" placeholder="Enter Name..." required ><br>
              <label>Email</label><br>
              <input type="email" name="email" id="email" placeholder="Enter Email..." required><br>
              <label>Phone number</label><br>
              <input type="number" name="phone" id="phone" placeholder="Enter Your Phone..." required><br>
              <label>Age</label><br>
              <input type="number" name="age" id="age" placeholder="Enter Your Age..." required><br>
              <label>Type Of Course</label><br>
              <input type="text" name="type" id="type" placeholder="Enter Here..." required><br>
              <label>Enter Duration</label><br>
              <input type="number" name="duration" id="duration" placeholder="Enter Here..." required><br>
              <br>
              <button type="submit" name="btn" class="button_1">Submit</button>
             
            </li>
           
          </ul>
        </article>
      </form>
        <aside id="sidebar">
          <div class="dark">
            <h3>ASK A Question</h3>
            <form class="quote">
  						<div>
  							<label>Name</label><br>
  							<input type="text" placeholder="Name">
  						</div>
  						<div>
  							<label>Email</label><br>
  							<input type="email" placeholder="Emial Address">
  						</div>
  						<div>
  							<label>Message</label><br>
  							<textarea placeholder="Message"></textarea>
  						</div>
              <a href="https://mail.google.com/mail/u/0/?pli=1"><button type="submit" name="btn" class="button_1">Send</button></a>
					</form>
          </div>
        </aside>
      </div>
    </section>

    <footer>
      <p>P.O. Courses, Copyright &copy; 2021</p>
    </footer>
  </body>
</html>
