<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola</title>
</head>
<body>

    <div class="contenedor">
        <h1>HOLA</h1> 
        @can('ver tareas')
            <h1>PUEDES EDITAR TAREAS</h1>
        @endcan
    </div>

</body>
</html>

<style>
    /* Estilos básicos para centrar todo y dar un diseño moderno */
    body {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #74ebe7 0%, #86a8e7 50%, #91eae4 100%);
        color: #333;
    }
    /* Tarjeta blanca con sombra suave */
    .contenedor {
        text-align: center;
        background-color: rgba(255, 255, 255, 0.85);
        padding: 3rem 5rem;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10px);
    }
    /* Estilo para el texto principal */
    h1 {
        font-size: 4rem;
        margin: 0;
        letter-spacing: 5px;
        background: linear-gradient(45deg, #3a7bd5, #3a6073);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>
