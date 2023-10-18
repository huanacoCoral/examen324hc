<style>
        body {
            background-color: #fbd2e6; /* Color de fondo tierno */
            font-family: Arial, sans-serif;
        }

        form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-top: 10px;
            color: #ff2d55; /* Color de etiqueta tierno */
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ff2d55; /* Borde tierno */
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #ff2d55; /* Color de fondo del botón tierno */
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #ff7a8a; /* Color de fondo del botón al pasar el ratón tierno */
        }
    </style>
</head>
<body>
    <form action="usuario.php" method="POST">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" value="">
        <br>
        <label for="contraseña">Contraseña</label>
        <input type="password" name="contraseña" id="contraseña" value="">
        <br>
        <input type="submit" name="aceptar" value="Aceptar">
    </form>
</body>
