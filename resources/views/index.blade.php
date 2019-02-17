
<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

</head>

<body>
    <div class="container">
        <br />
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br/>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul Artikel</th>
                    <th>description</th>
                    <th>content</th>
                    <th>category</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach($artikels as $artikel)
                <tr>
                    <td>{{$artikel['id']}}</td>
                    <td>{{$artikel['title']}}</td>
                    <td>{{$artikel['description']}}</td>
                    <td>{{$artikel['content']}}</td>
                    <td>{{$artikel['category']}}</td>
                    <td><a href="{{action('artikelController@edit', $artikel['id'])}}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form action="{{action('artikelController@destroy', $artikel['id'])}}" method="post">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</body>

</html>
