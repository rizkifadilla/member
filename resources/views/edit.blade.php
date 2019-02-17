<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Laravel 5.7 CRUD Tutorial With Example </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <div class="container">
        <h2>Edit Data artikel</h2><br />
        <form method="post" action="{{action('artikelController@update', $id)}}" entype="multipart/form-data">
            @csrf
            <input name="_method" type="hidden" value="PATCH">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="Title">Judul artikel:</label>
                    <input type="text" class="form-control" name="title" value="{{$artikel->title}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="Description">Keterangan:</label>
                    <input type="text" class="form-control" name="description" value="{{$artikel->description}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="content">content:</label>
                    <input type="text" class="form-control" name="content" value="{{$artikel->content}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label>Penerbit:</label>
                    <select name="category">
                        <option value="Tutorial" @if($artikel->category=="Tutorial") selected
                            @endif>Tutorial</option>
                        <option value="Artikel" @if($artikel->category=="Artikel") selected
                            @endif>Artikel</option>
                        <option value="Laravel" @if($artikel->category=="Laravel") selected @endif>Laravel</option>
                        <option value="PHP Native" @if($artikel->category=="PHP Native") selected @endif>PHP Native</option>
                    </select>
                </div>
            </div>
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
