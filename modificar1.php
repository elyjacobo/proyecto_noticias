<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Modificar Noticia</title>
    </head>
    <body>
        <h1>Modificar noticia</h1>
        Titulo: <input type="text" name="nombres" size="40" maxlength="50"><br><br>
        <label for="entrada">Entrada: </label>
        <br>
        <textarea name="entrada" id="entrada" cols="40" rows="5">
        </textarea><br>
        <label for="cuerpo">Cuerpo: </label>
        <br>
        <textarea name="cuerpo" id="cuerpo" cols="40" rows="5">
        </textarea><br>
        Foto: <br>
        <img src="img/img_noticia.jpg"><br>
        Cambiar foto: <input name="cargarfoto" type="file"/><br><br>
        <input type="submit" value="Modificar">
        <input type="submit" value="Cancelar">
        <?php
        // put your code here
        ?>
    </body>
</html>
