@include('affiche')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://bootswatch.com/5/sketchy/bootstrap.css">

    <title>la liste des taches </title>

</head>

</html>

<body>
    <nav class="navbar navbar-expand-lg bg-light" data-bs-theme="light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">taches</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">nouvelle
                        </a>

                    <li class="nav-item">
                        <a class="nav-link" href="#">A propos</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-sm-2" type="search" placeholder="rechercher quelques choses">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">rechercher</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            @for($i=1; $i<8; $i++)
            <div class="col -12 col-md-4 my-1">
                <div class="card">
                    <div class="card-header">
                        nom de la tache
                    </div>
                    <div class="card-body ">
                        <h5 class="card-title">description</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">voir liste des taches</a>
                    </div>
                </div>

            </div>
            @endfor
        </div>
    </div>

</body>