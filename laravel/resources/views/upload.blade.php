@extends('app')

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
@endsection