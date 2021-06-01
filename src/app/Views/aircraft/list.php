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
            <a href="<?php echo base_url('/aircraft/create') ?>" class="btn btn-success mb-2">Novo</a>
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
                                <td>
                                    <?php
                                    $aircraftTypes = [
                                        'airplane' => 'Avião',
                                        'helicopter' => 'Helicóptero'
                                    ];
                                    echo $aircraftTypes[$aircraft['type']];
                                    ?>
                                </td>
                                <td><?php echo $aircraft['numberOfEngines']; ?></td>
                                <td>
                                    <?php
                                    $createdAt = new DateTime($aircraft['createdAt']);
                                    echo $createdAt->format('d/m/Y H:i:s');
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $updatedAt = new DateTime($aircraft['updatedAt']);
                                    echo $updatedAt->format('d/m/Y H:i:s');
                                    ?>
                                </td>
                                <td>
                                    <a href="<?php echo base_url('aircraft/edit/' . $aircraft['id']); ?>" class="btn btn-primary btn-sm">Editar</a>
                                    <a href="<?php echo base_url('aircraft/delete/' . $aircraft['id']); ?>" class="btn btn-danger btn-sm">Deletar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>

</html>