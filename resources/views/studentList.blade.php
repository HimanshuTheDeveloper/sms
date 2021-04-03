<div class="col">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">CNE</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Speciality</th>
      <th scope="col">Opeartions</th>
   
    </tr>
  </thead>
  @foreach($students as $student)
  <tbody>
    <tr>
      <td>{{ $student->id }}</td>
      <th scope="row">{{ $student->cne }}</th>
      <td>{{ $student->firstname }}</td>
      <td>{{ $student->lastname }}</td>
      <td>{{ $student->age }}</td>
      <td>{{ $student->speciality}}</td>
      <td>
        <a href="#" class="btn btn-sm btn-info">Show</a>
        <a href="{{ url('/edit/' .$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
        <a href="" class="btn btn-sm btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>
</div>

