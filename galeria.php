<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>BestAnimes</title>
</head>

<body>
    <!-- Menu navegação -->
    <nav class="nav-extended red darken-1">
        <!-- Parte superior -->
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>BestAnimes</h1>
        </div>
        <!-- Parte inferior -->
        <div class="nav-content">
            <ul class="tabs tabs-transparent red darken-4">
                <li class="tab"><a class="active">Todos</a></li>
                <li class="tab"><a href="#test2">Assistidos</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>

    <div class="row">
        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="https://www.themoviedb.org/t/p/w300/ol0H2DGp4ifBHA4JDlCpwJWxnY2.jpg">
                    <a class="btn-floating halfway-fab waves-effect waves-light red">
                        <i class="material-icons">favorite_border</i></a>
                    </div>
                    <div class="card-content">
                        <p class="valign-wrapper">
                            <i class="material-icons amber-text">star</i>9.7
                        </p> 
                        <span class="card-title">My Hero Academia</span>
                    <p>Por toda a sua vida, Izuku sonhou ser um herói — um objetivo ambicioso para qualquer um, mas especialmente desafiador para um garoto sem superpoderes. Isso mesmo: em um mundo onde 80% da população tem algum tipo de Dom especial, Izuku teve a má sorte de nascer completamente normal. Mas isso não vai impedi-lo de se matricular em uma das academias de herois mais prestigiosas do mundo.</p>
                </div>
            </div>
        </div>

        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="https://www.themoviedb.org/t/p/w300/yvKrycViRMQcIgdnjsM5JGNWU4Q.jpg">
                    <span class="card-title">Atack on Titan</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red">
                        <i class="material-icons">favorite_border</i></a>
                </div>
                <div class="card-content">
                    <p class="valign-wrapper">
                        <i class="material-icons amber-text">star</i>9.7
                    </p> 
                    <p>Titãs estão quase exterminando a raça humana. Porém alguns estão dispostos a formar um exército de ataque aos seres assassinos. O jovem Eren, após ver sua mãe ser devorada por um titã, decide que não deixará nenhum deles vivo e buscará sua vingança completa.</p>
                </div>
            </div>
        </div>
    </div>

        


</body>

</html>