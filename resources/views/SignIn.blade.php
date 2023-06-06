<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .card {
      border-width: 3px;
      border-color: black;


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
      color: red;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-lg"></div>
      <div class="col-lg">
        <h3 style="font-size: larger; font-family: serif; font-weight: bold; text-align: right; margin-top:40px">Hi There Welcome to</h3>
      </div>
      <div class="col-lg">
        <img src="img/eventhub.png"style="width:230px;height:100px">
      </div>
      <div class="col-lg"></div>
    </div>
  </div>

  <div class="container">
    <div class="card">
      <h3 style="font-size: larger;font-family: serif;font-weight: bold; text-align: center;margin-top: 50px;margin-bottom: 0px;">Log In to Event Hub</h3>
      <h3 style="font-size: medium;font-family: serif;text-align: center;color:gray;">Enter your username and password below</h3>
      <div class="card-body">
        <form>
          <div class="form-group">
            <label class="custom-label" for="username">Username</label>
            <input type="text" class="form-control custom-input" id="username" placeholder="Enter your username in here">
          </div>
          <div class="form-group">
            <label class="custom-label" for="password">Password</label>
            <input type="password" class="form-control custom-input" id="password" placeholder="Enter your correct password in here">
          </div>
          <button type="submit" class="btn btn-danger custom-button">Sign in</button>
          <p class="custom-text">
            Dont have an account? <span>Sign up first</span>.
          </p>
        </form>
      </div>
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
