@extends('master')
@section('content')
    <!-- Page Header -->
 <header class="masthead" style="background-image: url({{asset('templateassets/img/home-bg.jpg')}}">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>All Student</h1>
            <span class="subheading">A Blog Theme by Start Bootstrap</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
          <form action="{{route('student.store')}}" method="post">
            @csrf
              <div class="form-group row">
                  <div class="col-md-6">
                    <label for="roll">Roll No</label>
                    <input type="text" name="roll" class="form-control @error('roll') is-invalid @enderror" value="{{old('roll')}}">
                    @error('roll')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-md-6">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                  </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="email">Email</label>
                  <input type="text" name="email" class="form-control @error('roll') is-invalid @enderror">
                </div>
                <div class="col-md-6">
                  <label for="ph">Phone No</label>
                  <input type="text" name="ph" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label>Address</label>
                <textarea name="address" id="address" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="btnsubmti" value="Save" class="btn btn-info btn-block">
            </div>
          </form>
      </div>
    </div>
  </div>
@endsection