 <form action="<?php echo BASE_URL ?>category/insertcategory" method="post">
    <?php
        if(isset($msg)){
            echo "<h1>".$msg."</h1>";
        }
    ?>
    <table>
        <tr>
            <td>TITEL</td>
            <td><input type="text" required="1" name="title"></td>
        </tr>
        <tr>   
            <td><input type="submit" name="addcategory" value="insert"></td>
        </tr>
    </table>
 </form>