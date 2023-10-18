<?php
     session_start();//
    if(!isset($_SESSION["usuario"]))// si ususario esta definido
    {
        header("Location: ingreso.php");
        exit;
    }
    else{
        if($_SESSION["usuario"]=="nohay")
        {
            header("Location: ingreso.php");
            exit;
        }
    }
?>


<head>
   
    <style>
        body {
            background-color: #fbd2e6; /* Color de fondo tierno */
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        div {
            width: 100%;
            min-height: 100px;
            background-color: #dbdaf2;
            text-align: center;
            padding: 10px;
        }

        div a {
            color: #ff2d55; /* Color de enlace tierno */
            text-decoration: none;
            margin-left: 20px;
        }

        table {
            margin: 20px;
            border-collapse: collapse;
            width: 100%;
        }

        table, td, th {
            border: 1px solid #ff2d55; /* Borde tierno */
        }

        th {
            background-color: #ff2d55; /* Color de fondo de encabezado tierno */
            color: #fff;
        }

        td {
            text-align: center;
            padding: 10px;
        }
    </style>
</head>


<div >
    usuario: 
        <?php echo $_SESSION["usuario"]; ?>

    <a href="salir.php">salir</a>
</div>
<body style="background-color: <?php echo $_SESSION["color"]; ?>; margin: 0; padding: 0; font-family: Arial, sans-serif;">
    
<table>
        <tr>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Promedio</th>
        </tr>
        <?php 
            include "conexion.php";
            $resultado = mysqli_query($con, "select nombre, paterno, promedio from estudiante");
            while($registro = mysqli_fetch_array($resultado))
            {
                echo "<tr>";
                echo "<td>".$registro["nombre"]."</td>";
                echo "<td>".$registro["paterno"]."</td>";
                echo "<td>".$registro["promedio"]."</td>";
            }
        ?>
    </table>
</body>
