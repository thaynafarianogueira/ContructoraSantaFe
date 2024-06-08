<?php
function validate() {
    if(empty($_POST['fullName'])
    || empty($_POST['yourAddress'])
    || empty($_POST['PhoneNumber'])
    || empty($_POST['email'])) {
        throw new Exception("Error: fill in all fields");
    }
    return true;
}

