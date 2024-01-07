<x-layout>
    <div class="container">

    <form action="" method="POST">
        @csrf

  <div class="form-group my-3">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{ old('email') }}">
    
  </div>
  @error('email')
    <i class="text-danger">{{ $message }}</i>
  @enderror

  <div class="form-group my-3">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="{{ old('password') }}">
  </div>
  @error('password')
      <i class="text-danger">{{ $message }}</i>
    @enderror
  <div class="my-3">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
</x-layout>