<!DOCTYPE html>
<html>
<head>
  <title>Centered Text</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
.card {
      border-width: 3px;
      border-color: black;
}
    .btn-container {
  text-align: center;
}
    .custom-input {
      border: 2px solid black;
      border-radius: 5px;
      padding: 5px;
    }
    .custom-label {
      font-weight: bold;
      color: red;
    }
    .custom-button {
      display: block;
      margin:  auto;
      margin-top: 40px;
      text-align: center;
      width: 150px;
      height: 50px;
      border-radius: 50px;
      font-family: serif;
      font-weight: bolder;
      color: aliceblue;
      font-size: x-large;
    }
    .custom-input::placeholder {
      color: #999;
    }
    .custom-text{
      margin-top: 20px;
      text-align: center;
    }
    .custom-text span {
      color: pink;
    }
    .btn-container {
  text-align: center;
  margin-top: 40px;
}
  .input {
    margin-top: 70px;
  }

  </style>
</head>
<body>

  <div class="container">
    <div class="card">
    <div class="row">
      <div class="col-12 text-center mt-5 pt-5">
        <h3 style="font-size: larger;font-family: serif;font-weight: bold;">to Event Hub as</h3>
        <h3 style="font-size: medium;font-family: serif;text-align: center;color:gray;">Enter your username and password below</h3>
      </div>
    </div>
  <div class="btn-container">
 <form action="/action_page.php">
    <div class="form-check-inline">
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1">MC
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Event Organizer
      </label>
   </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio3">
        <input type="radio" class="form-check-input" id="radio3" name="optradio" value="option3">Public
      </label>
    </div>
    </form>
  </div>
  <div class="container">
    <div class="input">
        <form>
          <div class="form-group">
            <label class="custom-label" for="username">Username</label>
            <input type="text" class="form-control custom-input" id="username" placeholder="Enter your username in here">
          </div>
          <div class="form-group">
            <label class="custom-label" for="password">Password</label>
            <input type="password" class="form-control custom-input" id="password" placeholder="Enter your correct password in here">
          </div>
          <button type="submit" class="btn btn-danger custom-button">Sign up</button>
          <p class="custom-text">
            Already have a account? <span>Login</span>.
          </p>
      </div>
    </div>
  </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

