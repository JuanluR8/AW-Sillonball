<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sillonball</title>
    <link id="favicon" rel="icon" href="../assets/imagenes/iconos/favicon.png" type="image/png">
</head>

<body>
    <h1>Nueva serie</h1>
    <form>
        <p>Carátula:</p>
        <input type="file"/>
        
        <p>Titulo:</p>
        <input type="text"/>
        
        <p>Año:</p>
        <input type="text"/>
        
        <p>Género:</p>
        <input type="text"/>
        
        <p>Sinopsis: </p>
        <textarea></textarea>
        
        <p>Duración capítulos aprox:</p>    
        <p><input type="text"/></p>
        
        <div>
            <input type="button" name="Aceptar" value="Aceptar" onclick="location.href='./catalogo.php'">
            <!-- el tipo de boton de Aceptar se tiene que cambiar a Summit-->
            <button type="reset">Limpiar</button>
            <input type="button" name="Cancelar" value="Cancelar" onclick="location.href='./catalogo.php'">
        </div>
    </form>
</body>
</html>