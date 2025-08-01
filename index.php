<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to TT Havenschools</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css"> <!-- Make sure this file exists -->
<link rel="icon" type="image/png" href="images/loogo.png">
</head>
<body class="body-home"> <!-- Fixed body tag -->

  <div class="black-fill">
    <div class="container">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg bg-light" id="homeNov">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="images/LOGO.png" alt="icon" width="50"> <!-- Corrected image path -->
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                  aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
              <li class="nav-item"><a class="nav-link " href="#about">About us</a></li>
              <li class="nav-item"><a class="nav-link " href="#contact">Contact</a></li>
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Welcome Section -->
      <section class="welcome-text d-flex justify-content-center align-items-center flex-column">
        <img src="images/LOGO.png" alt="TT Logo"> <!-- Corrected image path -->
        <h4>Welcome to TT Havenschools</h4>
        <p>
          We are delighted to have you here. Our school is dedicated to providing a <br>nurturing and inspiring environment for learners of all ages. <br>Whether you are a learner, parent, or educator, we are committed to fostering...
        </p>
      </section>
        <section id="about" 
                  class="d-flex justify-content-center align-items-center flex-column">
       <div class="card mb-3 card-1">
         <div class="row g-0">
    <div class="col-md-4">
      <img src="images/LOGO.png" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">About Us</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-body-secondary">T&T HavenSchools</small></p>
      </div>
    </div>
  </div>
</div>
      </section>

      <section id="contact" 
                  class="d-flex justify-content-center align-items-center flex-column">
                <form>
                  <h3>Contact Us</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Message</label>
    <textarea class="form-control" rows="5"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Send</button>
                </form>
      </section>
      <div class="text-center text-light">
        Copyright &copy; 2025 T&T HavenSchools. All rights reserved.
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
