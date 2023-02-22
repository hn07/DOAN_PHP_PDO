<form action="<?php echo BASE_URL ?>login" method="post">
    <?php
        if(isset($msg)){
            echo "<h1>".$msg."</h1>";
        }
        ?>
    <table>
    <tr>
            <td>User name</td>
            <td><input type="text" required="1" name="username"></td>
        </tr<tr>
            <td>Password</td>
            <td><input type="password" required="1" name="password"></td>
        </tr>
        <tr>   
            <td><input type="submit" name="login" value="Login"></td>
        </tr>
    </table>
 </form>