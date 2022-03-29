<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista</title>

</head>
<body>
    <table>
        <thead>
            <tr>
                <td>#</td>
                <td>Titulo</td>
                <td>Autor</td>
                <td>Fecha</td>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "conexion.php";
            foreach ($datos as $row) {
                echo '<tr>
                <td>
                    '.$row['id'].'
                </td>
                <td>
                    '.$row['titulo'].' 
                </td>
                <td>
                    '.$row['autor'].'
                </td>
                <td>
                    '.$row['fecha'].'
                </td>
                </tr>';   
            }
            ?>
        </tbody>
    </table>
</body>
</html>

