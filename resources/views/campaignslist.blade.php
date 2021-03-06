<div class="card mb-3">
 
  <div class="card-body">
    <h5 class="card-title">List of Campaign</h5>
    
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Title</th>
      <th scope="col">First Name</th>
      <th scope="col">Second Name</th>
      <th scope="col">Date of birth</th>
      <th scope="col">Company</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    @foreach($campaigns as $campaign)
    <tr>
      <td>{{ $campaign->cne }}</td>
      <td>{{ $campaign->firstName }}</td>
      <td>{{ $campaign->secondName}}</td>
      <td>{{ $campaign->dob}}</td>
      <td>{{ $campaign->speciality}}</td>
      <td>
        
        <a href="{{ url('/edit/'.$campaign->id) }}" class="btn btn-sm btn-warning">Edit</a> <a href="{{ url('/destroy/'.$campaign->id) }}" class="btn btn-sm btn-danger">Delete</a>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>


  </div>
</div>




