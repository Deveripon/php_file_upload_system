
<?php 

    include_once("./db.php");
    include_once("./functions.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">

    <title>Log In Or Sign Up</title>
</head>
<body>
<?php
                            if(isset($_POST['submit'])){

                                 $name = $_POST['name'];
                                 $id_num = $_POST['id_num'];
                                 $email = $_POST['email'];
                                 $cell = $_POST['cell'];
                                 $address = $_POST['address'];


                                if(empty($name) || empty($email) || empty($id_num) || empty($cell) || empty($address)){

                               $msg = " <p class='alert alert-danger d-flex justify-content-between'> All Feilds are required <button class='btn-close' data-bs-dismiss='alert' ></button> </p>";
                                }else{

                                    $connection-> query("INSERT INTO users (name,id_num,email,cell,address) VALUES('$name','$id_num','$email','$cell','$address') ");
                                    $msg = " <p class='alert alert-success d-flex justify-content-between'> Data Submitted <button class='btn-close' data-bs-dismiss='alert' ></button> </p>";

                                }

                            }
                            
                            ?>



    <div class="container-fluid my-5 ">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card shadow">
                    <div class="card-body">
                        <h4>Create Your Account</h4>
                      <?php echo $msg ?? '' ?>

                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input name="name" type="text" class="form-control">
                                </div>
                                 <div class="mb-3">
                                    <label for="id_num" class="form-label">Id Number</label>
                                    <input name="id_num" type="text" class="form-control">
                                </div>
                                 <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input name="email" type="text" class="form-control">
                                </div>
                                 <div class="mb-3">
                                    <label for="cell" class="form-label">Cell number</label>
                                    <input name="cell" type="text" class="form-control">
                                </div>
                                 <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input name="address" type="text" class="form-control">
                                </div>
                                <div class="mb-3">                          
                                   <input name="submit" type="submit" value="Submit" class="btn btn-primary">
                                </div>
                                
                            </form>



                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body">

                    <h3>All Students </h3>
                            <table class="table">
                                <thead>
                                   <tr>
                                   <td>Serial</td>
                                    <td>Name</td>
                                    <td>Id Number</td>
                                    <td>Email</td>
                                    <td>Cell</td>
                                    <td>Address</td>
                                    <td>Action</td>
                                   </tr>
                                </thead>
                                    <tbody>


                            <?php 
                            
                          $data =  $connection-> query("SELECT * FROM users");
                          $i = 1;
                            while( $data_value = $data->fetch_object()):
                            
                            ?>


                                    <tr>
                                    <td><?php echo $i; $i++?></td>
                                    <td><?php echo $data_value->name ?></td>
                                    <td><?php echo $data_value->id_num ?></td>
                                    <td><?php echo $data_value->email ?></td>
                                    <td><?php echo $data_value->cell ?></td>
                                    <td><?php echo $data_value->address ?></td>
                                    <td>
                                        <a href="#" class='btn btn-danger'>Delete</a>
                                        <a href="#" class='btn btn-primary'>View</a>
                                        <a href="#" class='btn btn-warning'>Edit</a>
                                    
                                    
                                    </td>
                                </tr>  

<?php endwhile; ?>


                                    </tbody>
                            </table>

                    </div>
                </div>
            </div>
        </div>
    </div>










<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>