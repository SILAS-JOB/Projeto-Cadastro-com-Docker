<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Simples</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="apc.css" rel="stylesheet">
</head>
<body>
    <nav>
        <h1>Preencha seus dados:</h1>
            <p class="desc">Qualquer informação preenchida será utilizada apenas com intuitos de pesquisa</p>
    </nav>
    <form method="POST" action="save.php">
        <div class="container">
            <div class="row">
                <div class="col">
                    <label for="name" class="pergunta">Qual o seu nome ?</label>
                    <section class="space"></section>
                    <input id="name" name="name" type="text" placeholder="joão da silva..." maxlength="40" required />
                    <section class="space"></section>
                    <label for="number" class="pergunta">Qual seu telefone ?</label>
                    <section class="space"></section>
                    <input id="number" name="number" type="number" placeholder="(61) 9 9999-9999" required />
                    <section class="space"></section>
                    <label for="local" class="pergunta">Onde você mora ? </label>
                    <section class="space"></section>
                    <input id="local" name="local" type="text" placeholder="Itaquera/Sp" required />
                </div>
                <div class="col">
                    <section class="space"></section>
                    <label for="contact" class="pergunta">Como nos conheceu?</label>
                    <section class="space"></section>
                        <select id="contact" name="contact" required>
                            <option value="">-----</option>
                            <option value="linkedin">LinkedIn</option>
                            <option value="github">GitHub</option>
                            <option value="empregare">Empregare</option>
                            <option value="gupy">Gupy</option>
                            <option value="indeed">Indeed</option>
                            <option value="outros">Outros</option>
                        </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" type="submit" id="enviar">Enviar</button>                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>