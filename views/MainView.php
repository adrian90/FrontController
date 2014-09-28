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
                <th>Building</th>
                <th>Building</th>
                <th>Building</th>
            </tr>
            <?php
            foreach ($building as $value) {
                ?>
                <tr>
                    <td><?php echo $value['idBuilding'] ?></td>
                    <td><?php echo $value['Name'] ?></td>
                    <td><?php echo $value['Floors'] ?></td>
                    <td><?php echo $value['idCity'] ?></td>
                    <td>
                        <form method="POST" action="index.php?command=Test">
                            <input class="prueba" type="submit" name="prueba" value="Pulsa">
                            <input type="hidden" name="prueba" value="Hola">
                        </form>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>