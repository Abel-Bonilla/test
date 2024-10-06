<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>Laravel</title>
</head>

<body>
    <div class="container mt-5 mb-3">
        <h2 class="text-center">Catalogo de Juegos</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card" style="width: 18rem;">
                    <img src="https://dummyimage.com/180x120/dbdbdb/787878.png&text=Image+cap" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="{{ route('Ruta1') }}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="width: 18rem;">
                    <img src="https://dummyimage.com/180x120/dbdbdb/787878.png&text=Image+cap" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>