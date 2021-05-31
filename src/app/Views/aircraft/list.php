<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Codeigniter 4 Add Aircraft With Validation Demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-4">
        <div class="d-flex justify-content-end">
            <a href="<?php echo base_url('/aircraft-form') ?>" class="btn btn-success mb-2">Novo</a>
        </div>
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
        }
        ?>
        <div class="mt-3">
            <table class="table table-bordered" id="aircrafts-list">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Modelo</th>
                        <th>Marca</th>
                        <th>Tipo</th>
                        <th>Número de Motores</th>
                        <th>Criado em</th>
                        <th>Atualizado em</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($aircrafts) : ?>
                        <?php foreach ($aircrafts as $aircraft) : ?>
                            <tr>
                                <td><?php echo $aircraft['id']; ?></td>
                                <td><?php echo $aircraft['model']; ?></td>
                                <td><?php echo $aircraft['brand']; ?></td>
                                <td><?php echo $aircraft['type']; ?></td>
                                <td><?php echo $aircraft['numberOfEngines']; ?></td>
                                <td><?php echo $aircraft['createdAt']; ?></td>
                                <td><?php echo $aircraft['updatedAt']; ?></td>
                                <td>
                                    <a href="<?php echo base_url('edit-view/' . $aircraft['id']); ?>" class="btn btn-primary btn-sm">Editar</a>
                                    <a href="<?php echo base_url('delete/' . $aircraft['id']); ?>" class="btn btn-danger btn-sm">Deletar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#aircrafts-list').DataTable();
        });
    </script>
</body>

</html>