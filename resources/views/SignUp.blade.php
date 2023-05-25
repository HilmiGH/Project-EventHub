<!DOCTYPE html>
<html>
<head>
  <title>Centered Text</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .button-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-direction: column;
  gap: 10px;
  height: 140px; /* Sesuaikan dengan kebutuhan */
}

.round-button {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background-color: white;
  border: black;
}

.round-button:nth-child(1) {
  background-color: black;
}

.round-button:nth-child(2) {
  background-color: black;
}

.round-button:nth-child(3) {
  background-color: black;
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
  </style>
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-12 text-center mt-5 pt-5">
        <h3 style="font-size: larger;font-family: serif;font-weight: bold;">Sign up to Event Hub as</h3>
        <h3 style="font-size: medium;font-family: serif;text-align: center;color:gray;">Enter your username and password below</h3>
      </div>
    </div>
  </div>
  <div class="button-container">
    <div class="row">
    <div class="col-12 text-center">
    <button class="round-button"></button>
    <button class="round-button"></button>
    <button class="round-button"></button>
  </div>
</div>
</div>

  <div class="container">
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
        </form>
      </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
