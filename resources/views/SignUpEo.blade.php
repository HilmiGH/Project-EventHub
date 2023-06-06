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
        <div class="col-12 mt-5 pt-5">
    <div class="card">
      <h3 style="font-size: larger;font-family: serif;font-weight: bold; text-align:center;margin-top: 10px;margin-bottom: 0px;">Sign up to Event Hub as Event Organizer</h3>
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
          <div class="form-group">
            <label class="custom-label" for="password">Company Name</label>
            <input type="password" class="form-control custom-input" id="password" placeholder="Enter your fullname in here">
          </div>
          <div class="form-group">
            <label class="custom-label" for="username">Contact Person</label>
            <input type="text" class="form-control custom-input" id="username" placeholder="Enter your phone number in here">
          </div>
          <div class="form-group">
            <label class="custom-label" for="exampleSelect">Company Type</label>
            <select class="form-control custom-input" id="exampleSelect">
              <option value="">Choose your company type here</option>
              <option value="1">Opsi 1</option>
              <option value="2">Opsi 2</option>
              <option value="3">Opsi 3</option>
            </select>
          </div>
          <div class="form-group">
            <label class="custom-label" for="password">City</label>
            <input type="password" class="form-control custom-input" id="password" placeholder="Enter your city in here">
          </div>
          <div class="form-group">
            <label class="custom-label" for="exampleSelect">Event Category</label>
            <select class="form-control custom-input" id="exampleSelect">
              <option value="">Wedding</option>
              <option value="1">Opsi 1</option>
              <option value="2">Opsi 2</option>
              <option value="3">Opsi 3</option>
            </select>
          </div>
          <button type="submit" class="btn btn-danger custom-button">Sign up</button>
        </form>
      </div>
    </div>
  </div>
  </div>
  </div>
  <p class="custom-text">
    Already have a account? <span>Login</span>.
  </p>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
