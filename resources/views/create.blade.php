<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Laravel 5.7 CRUD Tutorial With Example </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <div class="container">
        <h2>Tambah artikel Baru</h2><br />
        <form method="post" action="{{url('artikels')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="Title">Judul Artikel:</label>
                    <input type="text" class="form-control" name="title">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="Description">deskripsi:</label>
                    <input type="text" class="form-control" name="description">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="content">content:</label>
                    <input type="text" class="form-control" name="content">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label>category:</label>
                    <select name="category">
                    @foreach($categories as $categorie)
                        <option value="{{$categorie->id}}">{{$categorie->id}}</option>
                    @endforeach
                        
                    </select>
                </div>
            </div>
            <input type="hidden" value="{{Auth::user()->name}}" name="username" hidden>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="Title">Foto</label>
                    <input type="file" class="form-control" name="foto">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4" style="margin-top:60px">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
