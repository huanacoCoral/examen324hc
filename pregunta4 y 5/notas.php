<!DOCTYPE html>
<html lang="es">
<head>
   <title>BaseInf</title>
   <style>
      body {
         font-family: Arial, sans-serif;
      }

      h2 {
         background-color: #6a5acd;
         color: white;
         padding: 10px;
      }

      .tabla-div {
         margin-bottom: 20px;
      }

      .estudiantes, .customers {
         width: 100%;
         border-collapse: collapse;
      }

      .estudiantes th, .estudiantes td,
      .customers th, .customers td {
         border: 1px solid #ddd;
         padding: 8px;
         text-align: left;
      }

      .estudiantes th, .customers th {
         background-color: #6a5acd;
         color: white;
      }

      .estudiantes tr:nth-child(even),
      .customers tr:nth-child(even) {
         background-color: #f2f2f2;
      }
   </style>
</head>
<body>
   <div class="pregunta45">
      <?php 
      echo "<h2>DATOS DE LA BD</h2>";
      include "conexion.inc.php";

      $consulta = mysqli_query($con, "SELECT nombre, paterno, 
         CASE departamento
            WHEN '01' THEN 'Chuquisaca' 
            WHEN '02' THEN 'La Paz' 
            WHEN '03' THEN 'Cochabamba'
            WHEN '04' THEN 'Oruro'
            ELSE 'Otro' 
         END AS departamento,
         promedio
         FROM estudiante
         ORDER BY departamento;");

      echo "<div class='tabla-div'>";
      echo "<table class='estudiantes'>
               <tr>
                  <th>NOMBRE</th>
                  <th>PATERNO</th>
                  <th>DEPARTAMENTO</th>
                  <th>PROMEDIO</th>
               </tr>";

      while ($registro = mysqli_fetch_array($consulta)) {
         echo "<tr>";
         echo "<td>" . $registro["nombre"] . "</td>";
         echo "<td>" . $registro["paterno"] . "</td>";
         echo "<td>" . $registro["departamento"] . "</td>";
         echo "<td>" . $registro["promedio"] . "</td>";
         echo "<tr>";
      }

      echo "</table>";
      echo "</div>";

      echo "<h2>PROMEDIO POR DEPARTAMENTOS NORMAL</h2>";
      $consulta = mysqli_query($con, "SELECT 
         CASE departamento
            WHEN '01' THEN 'Chuquisaca' 
            WHEN '02' THEN 'La Paz' 
            WHEN '03' THEN 'Cochabamba'
            WHEN '04' THEN 'Oruro'
            ELSE 'Otro' 
         END AS departamento,
         SUM(promedio) AS promedio
         FROM estudiante
         WHERE promedio > 51
         GROUP BY departamento;");

      echo "<div class='tabla-div'>";
      echo "<table class='estudiantes'>
               <tr>
                  <th>DEPARTAMENTO</th>
                  <th>PROMEDIO</th>
               </tr>";

      while ($registro = mysqli_fetch_array($consulta)) {
         echo "<tr>";
         echo "<td>" . $registro["departamento"] . "</td>";
         echo "<td>" . $registro["promedio"] . "</td>";
         echo "<tr>";
      }

      echo "</table>";
      echo "</div>";

      echo "<h2>PROMEDIO POR DEPARTAMENTOS CON CASE</h2>";
      $consulta = mysqli_query($con, "SELECT 
         SUM(CASE WHEN departamento='01' THEN promedio ELSE 0 END) AS Chuquisaca,
         SUM(CASE WHEN departamento='02' THEN promedio ELSE 0 END) AS La_Paz,
         SUM(CASE WHEN departamento='03' THEN promedio ELSE 0 END) AS Cochabamba,
         SUM(CASE WHEN departamento='04' THEN promedio ELSE 0 END) AS Oruro
         FROM estudiante;");

      echo "<div class='table-container'>";
      echo "<table class='customers'>
               <tr>
                  <th>Chuquisaca</th>
                  <th>La_Paz</th>
                  <th>Cochabamba</th>
                  <th>Oruro</th>
               </tr>";

      while ($registro = mysqli_fetch_array($consulta)) {
         echo "<tr>";
         echo "<td>" . $registro["Chuquisaca"] . "</td>";
         echo "<td>" . $registro["La_Paz"] . "</td>";
         echo "<td>" . $registro["Cochabamba"] . "</td>";
         echo "<td>" . $registro["Oruro"] . "</td>";
         echo "<tr>";
      }

      echo "</table>";
      echo "</div>";

      echo "<h2>PROMEDIO POR DEPARTAMENTOS CON ARRAYS</h2>";
      $consulta = mysqli_query($con, "SELECT 
         CASE departamento
            WHEN '01' THEN 'Chuquisaca' 
            WHEN '02' THEN 'La Paz' 
            WHEN '03' THEN 'Cochabamba'
            WHEN '04' THEN 'Oruro'
            ELSE 'Otro' 
         END AS departamento,
         SUM(promedio) AS promedio
         FROM estudiante
         WHERE promedio > 51
         GROUP BY departamento;");

      echo "<div class='tabla-div'>";
      echo "<table class='customers'>
               <tr>
                  <th>Chuquisaca</th>
                  <th>Cochabamba</th>
                  <th>La_Paz</th>
                  <th>Oruro</th>
               </tr>";
      $promedios = array();
      while ($registro = mysqli_fetch_array($consulta)) {
         $promedios[] = $registro;
      }
      echo "<tr>";
      foreach ($promedios as $promedio) {
         echo "<td>" . $promedio["promedio"] . "</td>";
      }
      echo "<tr>";
      echo "</table>";
      echo "</div>";
      ?>
   </div>
</body>
</html>
