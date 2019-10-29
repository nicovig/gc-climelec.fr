<?php
    $from = $_POST['name'];
    $headers = $_POST['email'];
    $message = $_POST['message'];

    mail('ghislain@gc-climelec.fr', 'Contact de '.$from.' via gc-climelec.fr', $message, $headers);
    mail('geoffrey@gc-climelec.fr', 'Contact de '.$from.' via gc-climelec.fr', $message, $headers);
    header('Location: http://www.gc-climelec.fr');
