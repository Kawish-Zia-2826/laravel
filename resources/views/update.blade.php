<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Hello, world!</h1>

    <form action="{{ route('store.update',$user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <div class="col-3">
        <img id="imagee" src="{{ asset('storage/' . $user->file_name) }}" >
      </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" 
            onchange="document.querySelector('#imagee').src = window.URL.createObjectURL(this.files[0])" 
            name="photo" id="photo" accept=".png,.jpeg">
          </div>
          @error('photo')
              <div class="alert alert-danger">{{$message}}</div>
          @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      <div>
     @if (session('status'))
     <div class="alert alert_success">
        {{ session('status') }}
     </div>
         
     @endif
      </div>

     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>