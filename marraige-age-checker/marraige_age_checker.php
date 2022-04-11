<?php

include_once("./functions.php");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marraige age checker</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- main css -->
<link rel="stylesheet" href="style.css">

</head>
<body>


<?php 

if(isset($_POST['submit'])){

     $name = $_POST['name'];
     $birth_year = $_POST['birth_year'];
     $gender = $_POST['gender'] ?? '';
     $submit = $_POST['submit'];

     if(empty($gender) || empty($birth_year) || empty($name)){
 
       $alert =   warning_massage('All feilds are required','danger');

     }else{

        $result =  marraige_age_calc($name , $birth_year, $gender);
         
     }


}


?>


<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow p-5">
                <h3>Check Your Maraige Age</h3>

                <?php 
                echo $alert ?? '';
                echo $result ?? '';
                
                ?>

                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data	">
                        <div class="my-3">
                            <div class="form-label">Name</div>
                            <input class="form-control" type="text" name="name" id="name">
                        </div>
                         <div class="my-3">
                            <div class="form-label">Birth Year</div>
                            <input class="form-control" type="text" name="birth_year" id="b-year">
                        </div> 
                        <div class="my-3">
                            <div class="form-label">Gender</div>
                            <input type="radio" name="gender" id="male"  value="male" > <label for="male">Male</label>
                            <input type="radio" name="gender" id="female" value="female"  > <label for="female">Female</label>
                            
                        </div>
                        <div class="my-3">
                            <input name="submit" type="submit" value="Check Now" class="btn btn-primary">
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    






<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>