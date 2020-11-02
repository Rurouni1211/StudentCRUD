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
        <div class="col-md-12">
            <a href="{{route('student.create')}}" class="btn btn-info">Add New</a>
        </div>
      <div class="col-lg-8 col-md-10 mx-auto">
          @foreach ($student as $row)
              <p>
                <form action="{{route('student.destroy',$row->id)}}" onsubmit="return confirm('Are You Sure')" class="d-inline-block" method="post">
                  @csrf
                  @method('DELETE')
                  <input type="submit" name="btnsubmit" class="btn btn-danger btn-sm" value="Delete">
                </form>
                {{$row->id}} | {{$row->rollno}} | {{$row->name}} | {{$row->email}} | {{$row->phno}} | {{$row->address}}
              </p>
          @endforeach
      </div>
    </div>
  </div>
@endsection