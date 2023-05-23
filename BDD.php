<!DOCTYPE html>
<html>
<head>
	<title>Tabla OwO</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
	<style>
	body{
		background-color: #B6B0CD;
	}
		.tabla-instructores {
			margin: 50px auto;
			max-width: 800px;
			border-collapse: collapse;
			width: 100%;
			font-size: 16px;
			text-align: center;
		}

		.tabla-instructores th,
		.tabla-instructores td {
			padding: 12px;
			border: 1px solid #ddd;
		}

		.tabla-instructores th {
			background-color: #f2f2f2;
			color: #555;
			text-transform: uppercase;
			letter-spacing: 0.1em;
		}

		.tabla-instructores tr:hover {
			background-color: #f5f5f5;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1 class="text-center my-5">Estudiantes</h1>
		<div class="table-responsive">
			<table class="tabla-instructores table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Apellido</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$servername = "localhost";
					$username = "u217473";
					$password = "1913763";
					$dbname = "u217473";


					$conn = new mysqli($servername, $username, $password, $dbname);


					if ($conn->connect_error) {
					  die("Connection failed: " . $conn->connect_error);
					}

					$sql = "SELECT ID, Nombre, Apellido FROM personas";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {

					  while($row = $result->fetch_assoc()) {
					    echo "<tr><td class='table-primary'>" . $row["ID"]. "</td><td class='table-danger'>" . $row["Nombre"]. "</td><td class='table-warning'>" . $row["Apellido"]. "</td></tr>";
					  }
					} else {
					  echo "<tr><td colspan='4'>0 resultados</td></tr>";
					}
					$conn->close();
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>