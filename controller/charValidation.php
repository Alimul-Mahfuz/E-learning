<?php
/*This funciton will remove any special charecter and any unnecessary space and slash 
form input data to enter database*/
function validate_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
