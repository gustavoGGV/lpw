<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body class="mt-5 bg-dark text-light">
    <div class="p-5">
        <div class="d-flex justify-content-center bg-light w-50">
            <h1 class="text-dark">Informe o piloto</h1>
        </div>
        <form action="card.php" method="POST">
            <div class="d-flex justify-content-center w-50">
                Nome do piloto: <input type="text">
            </div>
            <div class="d-flex justify-content-center w-50">
                Nacionalidade: <input type="text">
            </div>
            <div class="d-flex justify-content-center w-50">
                Idade: <input type="number">
            </div>
            <div class="d-flex justify-content-center w-50">
                Tipo de automobilismo: <select name="tipo-piloto">
                    <option>-</option>
                    <option>Open Wheel</option>
                    <option>Stock</option>
                    <option>Endurance</option>
                    <option>Rally</option>
                    <option>Moto</option>
                </select>
            </div>
            <div class="d-flex justify-content-center w-50">
                Equipe: <input type="text">
            </div>
            <div class="d-flex justify-content-center w-50">
                Quantidade de corridas: <input type="number">
            </div>
            <div class="d-flex justify-content-center w-50">
                Imagem do piloto: <input type="text">
            </div>
            <div class="d-flex justify-content-center w-50">
                Imagem do automóvel: <input type="text">
            </div>
        </form>
    </div>
</body>
</html>
