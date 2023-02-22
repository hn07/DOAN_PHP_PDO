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
            spl_autoload_register(function($class){
                include_once('system/libs/'.$class.'.php');
            });
            
            include_once('app/config/config.php');
            
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
                include_once('app/controllers/index.php');
                $ctrl = new index(); 
                $ctrl->homepage();
            }


            ?>
    </main>
    <footer>
        
    </footer>
</body>

</html>