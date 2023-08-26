<?php
    $result;

    function pass() {

        global $result;

        $digits = $_POST["digits"];

        switch ($digits) {
            case '4':
                $result = substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTVWXYZ"), 0 , $digits);     
                break;
        
            case '8':
                $result = substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTVWXYZ"), 0 , $digits);     
                break;

            case '12':
                $result = substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTVWXYZ"), 0 , $digits);     
                break;
        }
    }

    if (isset($_POST["submit"])) {
        pass();
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pass Generator</title>
  </head>
  <body>

    <div class="container">
        <div class="row text-center mt-5 mb-5">
            <div class="col">
                <h1>PASSWORD GENERATOR</h1>
            </div>
        </div>
    </div>

    <!-- Generate Section -->
    <div class="container">
        <div class="row text-center justify-content-center mb-5">
            <div class="col-7">

                <h3>Choose Your Digits</h3>

                <form action="" method="POST">
                    <select class="form-select" id="digits" name="digits" aria-label="Disabled select example">
                        <option value="4">4</option>
                        <option value="8">8</option>
                        <option value="12">12</option>
                    </select>
                    <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            
            </div>
        </div>
    </div>

    <!-- Result -->
    <div class="container">
        <div class="row text-center justify-content-center mb-1">
            <div class="col-5">
                
                <h3>Result</h3>
                
            </div>
        </div>
    </div>

    <?php if (isset($_POST["submit"])) { ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5 text-center">
                    <h1><?= $result?></h1>
                </div>
            </div> 
        </div>     
    <?php } ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>