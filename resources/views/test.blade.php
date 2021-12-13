@extends('layouts.app')

@section('content')
<div class="container">
</div>
<script>
    fetch('http://127.0.0.1:8000/users',  {
          method: "GET",
          headers: {'Accept': 'application/json'},
        })
    .then(response => response.json())
    .then(data => {
      console.log('Success:', data)
    })
    .catch((error) => {
      console.error('Error:', response);
    });
</script>
@endsection
