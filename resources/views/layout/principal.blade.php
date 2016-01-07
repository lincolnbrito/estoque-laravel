<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Controle de estoque</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/custom.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-default">
        <div class="container-fluid">

            <div class="navbar-header">
                <a class="navbar-brand" href="/produtos">
                    Estoque Laravel
                </a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/produtos">Listagem</a>
                </li>
            </ul>

        </div>
    </nav>

    @yield('conteudo')

    <footer class="footer">
        <p>(c) Livro de Laravel Casa do Código</p>
    </footer>
</div>
</body>
</html>