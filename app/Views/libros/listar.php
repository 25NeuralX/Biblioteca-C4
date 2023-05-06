<?$cabecera ?>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <td>Imagen</td>
                    <td>Nombre</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($libros as $libro): ?>
                <tr>
                    <td><?=$libro['id'];?>ID</td>
                    <td><?=$imagen['imagen'];?></td>
                    <td><?=$nombre['nombre'];?></td>
                   <td>Editar/Borrar</td>
                <?php endforeach; ?>
                </tr>
            </tbody>
        </table>
<?=$pie?>
