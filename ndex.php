<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<form method ="POST" action="" style="width:500px ; margin:50px" >
        <div class="row w-100 d-flex text-center">
            <label class="col-sm-12 h2 form-label" for="Color">Color</label>
        </div>
        <div class="row w-100">
            <input class="form-control bg-secondary text-white border-0" name="Color" type="text" id="Color" placeholder="Color">
        </div>
        <div class="row w-100 mt-4 d-flex justify-content-center">
            <button tabindex="" class="col-4 col-sm-12 btn btn-primary" style="border-radius: 20px;" name="Valider" type="submit">SUBMIT</button>
        </div>
</form>
<?php
if (isset($_POST['Valider'])){
    setcookie("color",$_POST['Color'],time() + 86400);
    header('location:dex.php');
   }
?>
</body>
</html>