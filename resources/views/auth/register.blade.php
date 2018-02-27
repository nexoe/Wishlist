@extends('layouts.app')

@section('content')
  <div class="section">
    <div class="container">
      @include('util.errors')
      <div class="box">
        <h1 class="title">{{_i('Create new user')}}</h1>
        <form action="{{Route('register')}}" method="POST">
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

          <div class="field">
            <label for="password" class="label">{{_i('Repeat password')}}</label>
            <div class="control has-icons-left">
              <input name="password_confirmation" class="input is-primary" type="password" placeholder="Repeat password">
              <span class="icon is-small is-left">
                <i class="fa fa-lock"></i>
              </span>
            </div>
          </div>
          <div class="buttons is-right">
            <button class="button is-primary">{{_i('Create')}}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
