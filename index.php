<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        
    </header>
    <main><?php
            include_once('system/libs/Main.php');
            include_once('system/libs/Dcontroller.php');
            include_once('system/libs/Load.php');
            include_once('system/libs/Database.php');
            include_once('system/libs/Dmodel.php');

            $url = (isset($_GET['url']) ? $_GET['url'] : NULL);
            if ($url !== NULL) {
                $url = rtrim($url, '/');
                //kieem tra gia tri dua vao phai la duong dan
                $url = explode("/", filter_var($url, FILTER_SANITIZE_URL));
            } else {
                unset($url);
            }

            if (isset($url[0])) {
                include_once('app/controler/' . $url[0] . '.php');
                $ctrl = new $url[0](); 
                if (isset($url[2])) {
                    $ctrl->{$url[1]}($url[2]);
                } else {
                    if (isset($url[1])) {
                        $ctrl->{$url[1]}();
                    } else {
                    }
                }
            } else {
                include_once('app/controler/index.php');
                $ctrl = new index(); 
                $ctrl->home();
            }


            ?>
    </main>
    <footer>
        
    </footer>
</body>

</html>