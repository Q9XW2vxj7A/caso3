<?php
session_start();
$_SESSION['Pregunta1'] = $_POST['preg1'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Pregunta 2</title>
    <link href="estilo.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php include 'encabezado.php'; ?>
    </header>
    <section>
        <form method="POST" action="pregunta2.php">
            <table border="1" width="700" cellspacing="10" cellpadding="0">
                <tr>
                    <th colspan="2">2. ¿Qué característica de los smartphones Samsung te gusta más?</th>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="radio" name="preg2" value="a) Calidad de la cámara" />a) Calidad de la cámara<br />
                        <input type="radio" name="preg2" value="b) Duración de la batería" />b) Duración de la batería<br />
                        <input type="radio" name="preg2" value="c) Pantalla AMOLED" />c) Pantalla AMOLED<br />
                        <input type="radio" name="preg2" value="d) Rendimiento del procesador" />d) Rendimiento del procesador<br />
                        <input type="radio" name="preg2" value="e) Almacenamiento" />e) Almacenamiento<br />
                        <input type="radio" name="preg2" value="f) Ecosistema" />f) Ecosistema
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="< Anterior" onclick="this.form.action='pregunta1.php'" />
                        <input type="submit" value="Siguiente >" onclick="this.form.action='pregunta3.php'" />
                    </td>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <?php include 'pie.php'; ?>
    </footer>
</body>

</html>