@extends('layouts.admin')




@section('content')


{{Form::open(array('action'=>'AdminUserController@store', 'method'=>'POST','files'=>'true'))}}


<div class="form-group">
{{Form::label('name')}}
{{Form::text('name',null,['class' => 'form-control'])}}
</div>
<div class="form-group">
{{Form::label('role_id')}}
{{Form::select('role_id',[''=>'Choose options']+$roles,null,['class'=>'form-control'])}}
</div>
<div class="form-group">
{{Form::label('email')}}

{{Form::text('email',null,['class' => 'form-control'])}}
</div>
<div class="form-group">
{{Form::label('password')}}
{{Form::password('password',['class' => 'form-control'])}}
</div>
<div class="form-group">
{{Form::label('status',"status:")}}
{{Form::select('status',array(2 => 'choose',1 => 'Active', 0 =>'Not Active'),null,['class'=>'form-control'])}}
</div>
<div class="form-group">
{{Form::file('file',['class'=>'form-control'])}}
</div>

<div class="form-group">
{{Form::submit('Create',['class'=>'btn btn-primary'])}}
</div>
{{Form::close()}}

@include('includes/form-errors')

@endsection