@extends('layouts.app')

@section('content')
<div class="section">
  <div class="container">
@if($errors->any())
  @foreach($errors->all() as $error)
    <div>
      {{$error}}
    </div>
  @endforeach
@endif

    <div class="box">
      <h1 class="title">{{_i('Login')}}</h1>
      <form action="{{Route('login')}}" method="POST">
        {{ csrf_field() }}

        <div class="field">
          <label class="label">{{_i('Email')}}</label>
          <div class="control has-icons-left has-icons-right">
            <input name="email" class="input is-primary" type="email" placeholder="Email">
            <span class="icon is-small is-left">
              <i class="fa fa-user"></i>
            </span>
          </div>
        </div>

        <div class="field">
          <label for="password" class="label">{{_i('Password')}}</label>
          <div class="control has-icons-left">
            <input name="password" class="input is-primary" type="password" placeholder="Password">
            <span class="icon is-small is-left">
              <i class="fa fa-lock"></i>
            </span>
          </div>
        </div>

        <button class="button is-primary is-pulled-right">{{_i('Login')}}</button>
        <div class="buttons has-addons is-left">
            <a href="{{Route('register')}}" class="button is-primary is-outlined">{{_i('Create new user')}}</a>
            <a href="#" class="button is-primary is-outlined">{{_i('Forgot password?')}}</a>

        </div>

      </form>
    </div>
  </div>
</div>
@endsection
