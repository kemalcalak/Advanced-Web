<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Document</title>
</head>

<body>
  <div class="home">
    <div class="header">
      <div class="container">
        <div class="homeLeft">
          <h2>
            <a href="#" id="title1">Circult Analysis</a>
          </h2>

          <a href="#" id="title1">English</a>
          <a href="#" id="title1">Türkçe</a>
        </div>
        <div class="homeRight">
          <form method="POST" action="http://localhost/Advanced-Web/ileriWebUni/odev1/index2.php">
            <div class="subForm">
              <div class="form-group">
                <label>E-Mail</label>
                <input type="text" name="email" />
                <input type="checkbox" />
                <label>Keep Me Signed in</label>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" />
                <a href="#">Forget Password</a>
              </div>
              <div class="form-group">
                <input type="submit" value="Log in" id="btn2" />
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="content">
      <div class="container">
        <div class="homeLeft">asöjdkjasdöjksajdlkasjdlds</div>
        <div class="homeRight">
          <form action="">
            <div class="form">
              <h3>Sign Up</h3>
              <h4>It's Quck And Easy</h4>
              <div class="form-group2">
                <input class="forminp" type="email" placeholder="E-Mail Adress" id="width100" />
              </div>
              <div class="form-group2">
                <select class="forminp" placeholder="Job" name="job" id="width100">
                  <option>Job</option>
                  <option value="software">Software Enginering</option>
                  <option value="civil">Civil Enginering</option>
                </select>
              </div>
              <div class="form-group2">
                <input class="forminp" type="password" placeholder="Password" id="width100" />
              </div>
              <div class="form-group2">
                <input class="forminp" type="password" placeholder="Confirm Password" id="width100" />
              </div>
              <div class="form-group2">
                <input type="submit" value="Sıgn Up" id="btn" />
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php
  
  
  ?>

</body>

</html>
