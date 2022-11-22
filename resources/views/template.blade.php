<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giant Book Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</head>
<body>
    <div class="bg-warning text-center text-light p-4 fs-1">
        Giant Book Supplier
    </div>
    <div class="d-flex justify-content-center bg-light">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                        <li class="nav-item">
                            <a class="nav-link text-primary" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle text-primary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                  Category
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    @foreach ($category as $item)
                                        <li><a class="dropdown-item" href="/category/{{$item->id}}">{{$item->name}}</a></li>
                                    @endforeach

                                </ul>
                              </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="/publisher">Publisher</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    @yield('content')

    <div class="bg-primary text-center text-light p-1 fs-7">
        © Happy Book Store 2022
    </div>

</body>
</html>
