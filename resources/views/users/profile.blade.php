@extends('layouts.app')

@section('content')

<div class="container">
    @if(session('success.up'))
        <div class="alert alert-success">
            {!! session('success.up') !!}
        </div>
    @endif
 <div class="card">
  <div class="container">
    <form action="{{ route('user.data.update', $user->id) }}" method="post">
        @csrf
        @method('post')
        <p></p>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="{{ old('name', $user->name) }}" placeholder="{{ $user->name }}">
        </div>

        <div class="form-group">
            <label for="pin">PIN</label>
            <input type="text" class="form-control" id="pin" name="pin" aria-describedby="pin" value="{{ old('pin', $user->pin) }}" placeholder="{{ $user->pin }}">
        </div>
        
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" placeholder="{{ $user->email }}">
        </div>
        
        <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" id="address" name="address" aria-describedby="addressHelp" placeholder="{{ $user->address }}">{{ old('address', $user->address) }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number', $user->phone_number) }}" aria-describedby="phone_number" placeholder="{{ $user->phone_number }}">
        </div>
       
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
       
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="agreeCheck" required>
            <label class="form-check-label" for="agreeCheck">I agree to change my data</label>
        </div>
        
        <p></p>
        <button type="submit" class="btn btn-primary">Update</button>
        <p></p>
    </form>
  </div>
 </div>
</div>
@endsection