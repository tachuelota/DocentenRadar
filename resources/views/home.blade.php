@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                      Select image to upload:
                      <input type="file" name="fileToUpload" id="fileToUpload">
                      <input type="submit" value="Upload Image" name="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
