<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) 
    {
        $_SESSION['error'] = 'Please fill in all fields';
    }

}