@extends('layouts.admin')

@section('content')
<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Photo</th>
        <th>Role</th>
        <th>Email</th>
        <th>Active</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
      @if($user)
      @foreach($user as $item)
      <tr>  
        <td>{{$item->name}}</td>
        <td><img height="50px" src="{!!$item->file ? $item->photo->name : 'no user photo'!!}"></td>
        <td>{{$item->role->name}}</td>  
        <td>{{$item->email}}</td>
        <td>{{$item->is_active == 1 ? 'Active': 'Not Active'}}</td>
        <td>{{$item->password}}</td>

      </tr>
      <?php var_dump($item->photo); ?>
@endforeach

@endif
    </tbody>
  </table>
</div>


@endsection
</body>
</html>
