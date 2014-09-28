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
                <th>City</th>
            </tr>
            <?php
            echo $_SESSION['user'];
            foreach ($city as $value) {
                ?>
                <tr>
                    <td><?php echo $value['idCity'] ?></td>
                    <td><?php echo $value['Name'] ?></td>
                    <td><?php echo $value['Population'] ?></td>
                    <td><?php echo $value['idCountry'] ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>