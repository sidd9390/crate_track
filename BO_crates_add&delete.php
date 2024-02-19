<?php
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap demo</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="./assets/css/style.css">
</head>
<body style="background-color: rgb(226, 240, 243);">


    <section class="status ms-2 me-2 p-3" style="background-color: white; margin-top: 90px; border-radius: 8px;">
        <div class="container">
            <h3 class="fw-bold">Present Holding Crates :- 3000</h3>
            <hr>
            <div class="row">
                <div class="col-8">

                    <h3>Enter No.of Crates</h3>
                    <div class="mb-3" style="width: 100%;">
                        <input type="number" class="form-control" style="width: 100%; text-align: center; border-top: none; border-left: none; border-right: none; border-radius: 0;" id="floatingInput" placeholder="Enter here">
                    </div>
                    <div class="d-flex flex-row">
                        <a href="./BO_home.php" class="btn btn-primary me-2 btn-sm" style="background-color: rgba(27, 154, 179, 1); font-size: 13px; border: 0;">Add Crates</a>
                        <a href="./BO_home.php" class="btn btn-primary btn-sm" style="background-color: rgba(27, 154, 179, 1); font-size: 13px; border: 0;">Delete Crates</a>
                    </div>
                </div>
                <div class="col-4 text-end d-flex align-items-center">
                    <img src="./assets/images/pngwing 1.png" class="img-fluid" style="width: 100px;" alt="">
                </div>
            </div>
        </div>
    </section>



    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>