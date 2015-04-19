@extends('app')
@section('content')
 
    <form action="ImageUpload" method="post" enctype="multipart/form-data">
      <p>Artwork to Upload:  <input type="file" name="filefield"> </p>
       <p> Name of Artwork: <input type="text" name="Artwork Name"></p>
       <p>  Name of Artist: <input type="text" name="Artist"></p>
       <p>Price:  <input type="text" name="Price"></p>
       <p>Tags: <input type="text" name="tags"></p>
        <input type="submit">
    </form>

@endsection
@stopx