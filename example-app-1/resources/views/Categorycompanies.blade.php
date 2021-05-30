<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand" href="#">Brand</a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active d-md-flex justify-content-md-start" href="/companies">Companies</a></li>
                    <li class="nav-item d-md-flex justify-content-md-start"><a class="nav-link d-md-flex justify-content-md-start" href="/trainers">Trainer</a></li>
                    <li class="nav-item d-md-flex justify-content-md-start"><a class="nav-link d-md-flex justify-content-md-start" href="/search">Search</a></li>
                    <li class="nav-item d-md-flex justify-content-md-start"><a class="nav-link d-md-flex justify-content-md-start" href="/categories">Category</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="d-flex justify-content-center">
        <form action="/search" method="get">
            <input type="search" name="search" />
            <button type="submit">search</button>
            <div class="form-group">
            </div>
        </form>
    </nav>

</body>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>category_id</th>
                <th>category_name</th>
            </tr>
        </thead>

        <tbody>

            @foreach($categories as $category)
            <tr>
                <td>{!! $category->category_id !!}</td>
                <td>{!! $category->category_name !!}</td>
                <td>
                    <div>
                        <table>
                            <thead>
                                <tr>
                                    <th>company_id</th>
                                    <th>company_name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($category->categoriesCompanies as $company)
                                <tr>
                                    <td>{!! $company->company_id !!}</td>
                                    <td>{!! $company->company_name !!}</td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $categories->links() !!}
</div>

</html>