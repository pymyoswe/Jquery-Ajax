<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/3/17
 * Time: 8:51 AM
 */
include ('config.php');
$user=new User();
$showData=$user->showUser();

foreach ($showData as $row){
    ?>
        <tr>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['age']?></td>
            <td>
                <button class="btnDel btn-block btn-danger btn-sm" uid="<?php echo $row['id']?>"><span class="glyphicon glyphicon-trash"></span></button>
            </td>
        </tr>
    <?php
}