<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    

<div class="container my-5">
    <div class="row justify-content-center">
        <div  class="col-md-5 bg-success">



          
        <!-- php code goes here -->

            <?php 
            
                if(isset($_POST['upload'])){
                    //get form data
                  $file = $_FILES['file'];

                  //get file info

                 $file_name = time()."_". rand()."_" .$file['name'];
                 $file_tmp_name = $file['tmp_name'];
                 $file_type = $file['type'];

                 if( $file_type == 'image/jpeg' || $file_type == 'image/zip' || $file_type == 'image/png'){

                    move_uploaded_file($file_tmp_name,'img/'. $file_name);
                 }else{

                    echo "Invalid File Formate";
                 }
                  
                };
            ?>
            

                   
        <!-- php code goes here -->

        <div class="card shadow ">
                <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">

                         <div class="mb-3">
                            <label style="cursor:pointer;" for="file" class="form-label">Upload File <br><br><br>

   
                                 <img style="width:100px;" src="https://www.freeiconspng.com/uploads/pictures-icon-22.gif" alt="">
                             </label>

                            <input style="display:none;" type="file" name="file" class="form-control" id="file">
                         </div>
                         <div class="mb-3" id="preview_photo"  >
                             <img src="" alt="">
                         </div>
            
                         <div class="mb-3">
                             <input name="upload" type="submit" value="Upload File" class="btn btn-primary">
                         </div>
                </form>

                </div>
            </div>

        </div>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>

$("#preview_photo img").hide();
 
$("#file").change(function(event) {


    let file_url = URL.createObjectURL(event.target.files[0]);

    $("#preview_photo img").show();

    $("#preview_photo img").attr('src', file_url);

});





</script>

</body>
</html>