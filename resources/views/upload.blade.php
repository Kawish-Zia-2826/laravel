<form action="{{route(upload.store)}}" method="POST" enctype="multipart/form-data">
@csrf
<input type="file" name="upload" accept=".jpg,.png" >
<input type="submit" value="Submit">
@error('upload')
  <div>{{$message}}</div>
@enderror
</form>
<div>
  @foreach ($upload as $uploads )
    <img src="{{$uploads}}" alt="">
    <form action="">
      @csrf
      @method('DELETE')
      <a href="">delete</a>
    </form>
    <a href="">update</a>
  @endforeach
</div>

<div>
  @if (session('status'))
  <div>{{session('status')}}</div>
    
  @endif
</div>