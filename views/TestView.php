<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table>
            <tr>
                <th>ID</th>
                <th>City</th>
                <th>City</th>
            </tr>
            <?php
            foreach ($data as $value) {
                ?>
                <tr>
                    <td><?php echo $value['HashCode'] ?></td>
                    <td><?php echo $value['LargeFamily'] ?></td>
                    <td><?php echo $value['EmissionCharge'] ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>