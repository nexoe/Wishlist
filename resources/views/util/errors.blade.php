@if($errors->any())
  @foreach($errors->all() as $error)
    <div class="notification is-danger">
      <button class="delete" v-on:click="hideParent"></button>
      {{$error}}
    </div>
  @endforeach
@endif
