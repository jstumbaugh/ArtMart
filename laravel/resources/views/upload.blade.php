@extends('app')
@section('content')
 
    <form action="ImageUpload" method="post" enctype="multipart/form-data" style="margin-left:37%">
       <p > Artwork to Upload: <input type="file" name="filefield" required> </p>
       <p> Thumbnail Photo: <input type="file" name="Thumbnail"></p>
       <p> Name of Artwork: <input type="text" name="ArtworkName" placeholder="e.g. Solider Sprite" required></p>
       <p> Name of Artist: <input type="text" name="Artist" placeholder="e.g. Joe Smith"></p>
       <p> Description: <input type="text" name="Description" maxlength="400" placeholder="400 Char Maximum" required></p>
       <p> License Type: <select name="license" required>
       	<option value="1"> All Rights Reserved</option>
       	<option value="2"> Creative Commons Attribution</option>
       	<option value="3"> Creative Commons Arreibution-ShareAlike</option>
       	<option value="4"> Creative Commons Attribution-NoDerivs</option>
       	<option value="5"> Creative Commons Attribution-NonCommercial</option>
       	<option value="6"> Creative Commons Attribution-NonCommercial-ShareAlike</option>
       	<option value="7"> Creative Commons Attribution-NonCOmmercial-NoDerivs</option>
       	<option value="8"> Public Domain</option>
       </select>
       <p> Price: <input type="number" name="Price" min="0" mac="10000" placeholder="####.##" required></p>
       <p> Tags: <input type="text" name="tags"></p>
        <input type="submit" value="Upload">
    </form>


@endsection