<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <title>SMS</title>
</head>

<body>

  @if($layout=='index')
  <div class="container-fluid">
    <div class="row">
      <section class="col">
        @include("studentList")
      </section>
      <section class="col">

      </section>
    </div>
  </div>

  @elseif($layout=='create')
  @include("navbar")
  <div class="container-fluid">
    <div class="row">

      <section class="col-8">
        @include("studentList")
      </section>
      <section class="col-4">
        <form action="{{ url('/store') }}" method="post">
          @csrf
          <div class="mb-3">
            <label>CNE</label>
            <input name="cne" type="text" class="form-control" placeholder="Enter Cne">
          </div>
          <div class="mb-3">
            <label>First Name</label>
            <input name="firstname" type="text" class="form-control" placeholder="Enter theb First name">
          </div>
          <div class="mb-3">
            <label>Last Name</label>
            <input name="lastname" type="text" class="form-control" placeholder="Enter The Last Name">
          </div>
          <div class="mb-3">
            <label>age</label>
            <input name="age" type="number" class="form-control" placeholder="Enter Your Age">
          </div>
          <div class="mb-3">
            <label>Speciality</label>
            <input name="speciality" type="text" class="form-control" placeholder="Enter Speciality">
          </div>
           
          
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-warning">Reset</button>
        </form>

      </section>
    </div>
  </div>
  @elseif($layout=='show')
  <div class="container-fluid">
    <div class="row">
      <section class="col">
        @include("studentList")
      </section>
      <section class="col">

      </section>
    </div>
  </div>
  @elseif($layout=='edit')
  <div class="container-fluid">
    <div class="row">
      <section class="col-8">
        @include("studentList")
      </section>
      <section class="col-4">
        <form action="{{ url('/update/' .$student->id) }}" method="post">
          @csrf
          <div class="mb-3">
            <label>CNE</label>
            <input name="cne" value="{{ $student->cne }}" type="text" class="form-control" placeholder="Enter Control Number">
          </div>
          <div class="mb-3">
            <label>First Name</label>
            <input name="firstname" value="{{ $student->firstname }}" type="text" class="form-control" placeholder="Enter theb First name">
          </div>
          <div class="mb-3">
            <label>Last Name</label>
            <input name="lastname" value="{{ $student->lastname }}" type="text" class="form-control" placeholder="Enter The Last Name">
          </div>
          <div class="mb-3">
            <label>age</label>
            <input name="age" type="number" value="{{ $student->age }}" class="form-control" placeholder="Enter Your Age">
          </div>
          <div class="mb-3">
            <label>Speciality</label>
            <input name="speciality"  value="{{ $student->speciality }}" type="text" class="form-control" placeholder="Enter Speciality">
          </div>
           
          
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-warning">Reset</button>
        </form>
      </section>
    </div>
  </div>
  @endif


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>
<script>
  function onEditSelect() {
    console.log('hi');
  }
</script>
</html>