@extends('layouts.admin')

@section('content')


<body>

<div>

<div class="container">
  <div class="row mt-4">
    <div class="col-md mx-auto">
      <div class="card">
        <div class="card-header">
          Existing Users
        </div>
        
        <div class="card-body">
          <table class="table">
        <thead>
          <tr>
              <td>Name</td>
              <td>Email</td>
              <td>Date/Time Added</td>
              <td>User Roles</td>
              <td>Operations</td>
          </tr>
        </thead>
      <tbody>
        @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                    <td>{{ $user->roles()->pluck('name')->implode(' ') }}</td>
                    <td>
                      <ul class="">
                        <a href="{{ route('users.edit', $user->id) }}" class="fa fa-edit" aria-hidden="true"></a>
                        @if( Auth::user()->id  != $user->id)
                          <a href="{!! route('users_destroy', $user->id) !!}" class="fa fa-trash-o" aria-hidden="true"></a>
                        @endif
                      </ul>
                    </td>
                </tr>
                @endforeach
      </tbody>
    </table>

        </div>

        <div class="card-footer">
          <a href="{{ route('users.create')}}" class="uk-button uk-button-secondary">Sukurti vartotoją</a>
        </div>
      </div>
    </div>
  </div>
</div>
      
  </div>
</div>
</body>



@endsection
