<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap demo</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="./assets/css/style.css">
<style>
    .login {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
  </style>
</head>
<body style="background-color: rgb(226, 240, 243);">

    <section class="login ps-3 pe-3" style="width: 100%;">
        <div>
          <h1 class="fw-bold">Distributor Pilot Details</h1>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Enter Name">
            <label for="floatingInput"><i class="fa-regular fa-id-card"></i> Driver Name</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Vehicle Number">
            <label for="floatingInput"><i class="fa-solid fa-truck"></i> Vehicle  Number</label>
          </div>
          <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" placeholder="Enter Number">
            <label for="floatingInput"><i class="fa-solid fa-phone"></i> Mobile Number</label>
          </div>
          <div class="bttn text-center mb-3" style="width: 100%;">
            <a href="./DB_home.php" class="btn btn-primary" style="width: 100%; background: rgba(27, 154, 179, 1); padding: 12px 0px; border: 0; font-size: 20px;">Save Changes</a>
          </div>
          <div class="text-center">
            <h6>Share the Password with your Driver for Login Purpose</h6>
          </div>
        </div>
    </section>


    





    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>