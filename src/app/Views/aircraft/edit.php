<!DOCTYPE html>
<html>

<head>
    <title>Codeigniter 4 CRUD - Edit Aircraft Demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 500px;
        }

        .error {
            display: block;
            padding-top: 5px;
            font-size: 14px;
            color: red;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <form method="post" id="update_aircraft" name="update_aircraft" action="<?= base_url('/aircraft/edit/' . $aircraft_obj['id']) ?>">
            <div class="form-group">
                <label>Modelo</label>
                <input type="text" name="model" class="form-control" value="<?php echo $aircraft_obj['model']; ?>">
            </div>

            <div class="form-group">
                <label>Marca</label>
                <input type="text" name="brand" class="form-control" value="<?php echo $aircraft_obj['brand']; ?>">
            </div>

            <div class="form-group">
                <label>Tipo</label>
                <select name="type" class="form-control" value="<?php echo $aircraft_obj['type']; ?>">
                    <option value="">Selecione...</option>
                    <?php
                        $aircraftTypes = [
                            'airplane' => 'Avião', 
                            'helicopter' => 'Helicóptero'
                        ];
                        foreach ($aircraftTypes as $key => $value) {
                    ?>
                        <option value="<?= $key ?>" <?php if ($aircraft_obj['type'] === $key) { echo 'selected'; } ?>><?= $value ?></option>
                    <?php
                        }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label>Número de motores</label>
                <input type="text" name="numberOfEngines" class="form-control" value="<?php echo $aircraft_obj['numberOfEngines']; ?>">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Enviar</button>
            </div>
            <div class="form-group">
                <button type="btn" class="btn btn-danger btn-block" onclick="location.href = '<?= base_url('/aircraft/list') ?>';">Voltar</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
    <script>
        if ($("#add_create").length > 0) {
            $("#add_create").validate({
                rules: {
                    model: {
                        required: true,
                    },
                    brand: {
                        required: true,
                    },
                    type: {
                        required: true,
                    },
                    numberOfEngines: {
                        required: true,
                    },
                },
                messages: {
                    model: {
                        required: "Modelo é obrigatório.",
                    },
                    brand: {
                        required: "Marca é obrigatório.",
                    },
                    type: {
                        required: "Tipo é obrigatório.",
                    },
                    numberOfEngines: {
                        required: "Número de motores é obrigatório.",
                    },
                },
            })
        }
    </script>
</body>

</html>