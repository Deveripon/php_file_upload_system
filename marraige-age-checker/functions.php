
<?php 
function warning_massage($txt , $type="warning"){

return " <p class=' d-flex justify-content-between alert alert-{$type}'>{$txt} <button class='btn-close' data-bs-dismiss='alert'></button> </p> ";

}


function marraige_age_calc($name,$byear,$gender){


    switch ($gender) {
        case 'male':
            $marraige_age = 21;
            break;
              case 'female':
            $marraige_age = 18;
            break;
        
        default:
        $marraige_age = 18;  
            break;
    }

    $age = date('Y')-$byear;
    $wait = $marraige_age-$age;
    if($age >= $marraige_age){

        return " <p class=\"alert alert-success\"> Congratulations ! {$name} . You are {$age} Years Old and You are Ready For Maraige</p> ";

    }
    else{
        return " <p class=\"alert alert-danger\"> Sorry ! {$name} . You are {$age} Years Old and You have to wait {$wait} years For Maraige</p> ";
 
    }

}