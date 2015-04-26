@extends('app')
<<<<<<< HEAD
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


=======

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Upload Art</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" method="POST" action="ImageUpload" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}" />
						
						<div class="form-group">
							<label class="col-md-4 control-label">Artwork to Upload:</label>
							<div class="col-md-6">
								<input type="file" class="form-control" name="filefield" />
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Title:</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="title" />
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Description:</label>
							<div class="col-md-6">
								<textarea class="form-control" rows="3" name="description"></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Price:</label>
							<div class="col-md-6">
								<div class="input-group">
									<div class="input-group-addon">$</div>
										<input type="number" class="form-control input-numeric" min="0" step="1" class="form-control name="price" />
									<div class="input-group-addon">.00</div>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">License:</label>
							<div class="col-md-6">
								<select class="form-control" name="license">
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Tags:</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="tags" />
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary" style="margin-right: 15px;">
									Upload
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
>>>>>>> origin/master
@endsection