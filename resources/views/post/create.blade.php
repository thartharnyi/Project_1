<x-layout>

    <form action="" method="POST">@csrf
    <div class="form-group my-3">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{ old('email') }}">
    
  </div>
  @error('email')
      <i class="text-danger">{{ $message }}</i>
    @enderror

   <div class="form-group my-3">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username" name="username" value="{{ old('username') }}">
    
  </div>
  @error('username')
      <i class="text-danger">{{ $message }}</i>
    @enderror

  <div class="form-group my-3">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="{{ old('password') }}">
  </div>
@error('password')
      <i class="text-danger">{{ $message }}</i>
    @enderror


  <div class="form-group">
    <label for="exampleFormControlFile1">Enter Your Favorite Photo</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
  </div>
  @error('file')
    <i class="text-danger">{{ $message }}</i>
  @enderror

    <div class="my-3">
  <button type="submit" class="btn btn-primary">Post</button>
</div>
</form>
</x-layout>


