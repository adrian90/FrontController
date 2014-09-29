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
            foreach ($data as $value) {
                ?>
                <tr>
                    <td><?php echo $value['Id'] ?></td>
                    <td><?php echo $value['IATACode'] ?></td>
                    <td><?php echo $value['BookLocator'] ?></td>
                    <td><?php echo $value['TicketNumber'] ?></td>
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