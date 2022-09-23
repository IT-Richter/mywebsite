<!doctype html>
<html lang="de">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Kai Richter</title>
</head>
<body>
<div class="container">
    <header class="d-flex justify-content-center py-4">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="?page=home" class=<?php echo $_GET['page'] == 'home' ?  '"active nav-link"' :   '"nav-link"'?>>Home</a></li>
            <li class="nav-item"><a href="?page=projects" class=<?php echo $_GET['page'] == 'projects' ?  '"active nav-link"' :   '"nav-link"'?>>Projekte</a></li>
            <li class="nav-item"><a href="?page=guestbook" class=<?php echo $_GET['page'] == 'guestbook' ?  '"active nav-link"' :   '"nav-link"'?>>Gästebuch</a></li>
            <?php if(empty($_SESSION)): ?>
                <li class="nav-item"><a href="?page=login" class=<?php echo $_GET['page'] == 'login' ?  '"active nav-link"' :   '"nav-link"'?>>Login</a></li>
            <?php endif; ?>
            <?php if(!empty($_SESSION)): ?>
                <li class="nav-item"><a href="?page=logout" class=<?php echo $_GET['page'] == 'logout' ?  '"active nav-link"' :   '"nav-link"'?>>Logout</a></li>
            <?php endif;?>

        </ul>
    </header>
</div>
<?php if (!empty($message)): ?>
<p class="col-lg-5 p-2 mb-4 mx-auto bg-warning text-dark rounded text-center">
    <?php echo $message;?>
</p>
<?php endif; ?>