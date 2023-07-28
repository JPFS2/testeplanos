<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Planos</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="container">
        <h1>Contrato de planos</h1>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Quandidade de beneficiários</label>
                <input type="number" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="name">Nome beneficiário</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Idade</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="country">Escolha o plano</label>
                <select id="country" name="country" required>
                    <option value="" disabled selected>Selecionar</option>
                    <option value="1">Bitix Customer Plano 1</option>
                    <option value="2">Bitix Customer Plano 2</option>
                    <option value="3">Bitix Customer Plano 3</option>
                    <option value="4">Bitix Customer Plano 4</option>
                    <option value="5">Bitix Customer Plano 5</option>
                    <option value="6">Bitix Customer Plano 6</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Contratar">
            </div>
        </form>
    </div>
    <script>
        function toggleForm() {
            var nameInput = document.getElementById('name');
            var emailInput = document.getElementById('email');

            // Check if the form elements are currently enabled or disabled
            var isDisabled = nameInput.disabled;

            // Toggle the disabled property
            nameInput.disabled = !isDisabled;
            emailInput.disabled = !isDisabled;
        }
    </script>
</body>

</html>