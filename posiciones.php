<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body style="background: url(img/f1.png) no-repeat center center fixed;
	background-size: cover;">
	<div class="row">
		<div class="col-12 bg-dark" >
                   	<ul class="nav justify-content-center navbar  navbar-expand-lg navbar-dark bg-dark ">
                   		 <li class="nav-item active">
        <a class="nav-link m-1" href="index.html">            
        	 <span class="sr-only">(current)</span><i class="fas fa-home fa-2x font-weight-bold font-italic" style="color: #ff6b6b;" ></i> </a>
      </li>
  <li class="nav-item">
    <h3><a class="nav-link active text-white font-weight-bold font-italic" href="registrarse.html">REGISTRO</a></h3>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li>
  <li class="nav-item">
     <h3><a class="nav-link text-white font-weight-bold  font-italic" href="posiciones.php">POSICIONES</a></h3>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
  </li>
</ul>
			</div>
	</div>
<div class="row" align="">
  <div class="col-2"></div>
	<div class="col-8 mt-3">
	<table class="table   table-hover">
  <thead class="bg-danger">
    <tr>
    	<th scope="col">#</th>
      <th scope="col">CLUB</th>
      <th scope="col">PJ</th>
      <th scope="col">G</th>
      <th scope="col">E</th>
      <th scope="col">P</th>
      <th scope="col">GF</th>
      <th scope="col">GC</th>
      <th scope="col">DG</th>
      <th scope="col">Pts</th>
          </tr>
  </thead>
  <tbody class="bg-light">
    <?php
	$con=mysqli_connect("localhost","root","","tablafutbol");
	$res=$con->query("select * from posiciones order by acumulapuntos desc, diferenciaGoles desc");

	$contador=0;
	while ($r=mysqli_fetch_row($res))
	{	
		$contador=$contador+1;
		?>
		<tr>
			<td><?php echo $contador;?></td>
			<td><?php echo $r[1];?></td>
			<td><?php echo $r[2];?></td>
			<td><?php echo $r[3];?></td>
			<td><?php echo $r[4];?></td>
			<td><?php echo $r[5];?></td>
			<td><?php echo $r[6];?></td>
			<td><?php echo $r[7];?></td>
			<td><?php echo $r[8];?></td>
			<td><?php echo $r[9];?></td>
			
		</tr>
		<?php	
	}
	$con->close();
	?>
  </tbody>
</table>
	
	</div>
	 <div class="col-2"></div>
</div> 
<div class="row">
      <div class="col-12 text-white text-center bg-dark">
           <br><p>Autor: Piminchumo Olivos Gustavo Enrique</p>
            <p >© Copyright 2019 </p>
      </div>
    </div>
</body>
</html>