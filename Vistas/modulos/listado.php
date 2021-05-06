	<br>
	<h1 align="center">Productos</h1>

	<table id="t1" border="1" align ="center" class="table table-bordered">
		
		<thead class="thead-dark">
			
			<tr>
				<th>Nombre</th>
				<th>Unidad</th>
				<th>Precio</th>
				<th>Stock</th>
				<th>Total</th>
				<th></th>
				<th></th>

			</tr>

		</thead>

		<tbody>
			
			

			<?php

				$mostrar = new ProductosC();
				$mostrar -> MostrarProductosC();

			?>

		</tbody>

	</table>

<?php

$eliminar = new ProductosC();
$eliminar -> BorrarProductoC();