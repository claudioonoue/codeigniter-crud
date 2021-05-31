<!DOCTYPE html>
<html>

<head>
    <title>Codeigniter 4 Add Aircraft With Validation Demo</title>
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
        <form method="post" id="add_create" name="add_create" action="<?= base_url('/submit-form') ?>">
            <div class="form-group">
                <label>Modelo</label>
                <input type="text" name="model" class="form-control">
            </div>

            <div class="form-group">
                <label>Marca</label>
                <input type="text" name="brand" class="form-control">
            </div>

            <div class="form-group">
                <label>Tipo</label>
                <select name="type" class="form-control">
                    <option value="">Selecione...</option>
                    <option value="airplane">Avião</option>
                    <option value="helicopter">Helicóptero</option>
                </select>
            </div>

            <div class="form-group">
                <label>Número de motores</label>
                <input type="text" name="numberOfEngines" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Enviar</button>
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