<div class="card">

    <div class="card-header">
        <div class="card-header-title">
        {{_i('Create new wishlist')}}
        </div>
    </div>

    <div class="card-content">
        <form action="{{url('wis  hlist/create')}}" method="post" >
        @csrf <!-- {{ csrf_field() }} -->
            <div class="field">
                <label for="Name">{{_i('Name')}}</label>
                <div class="control">
                    <input class="input is-centered is-primary" name="name" type="text" placeholder="{{_i('What do you want to call this wishlist?')}}">
                </div>
            </div>

            <div class="field">
                <label for="Description">{{_i('Description')}}</label>
                <div class="control">
                    <textarea class="textarea is-primary" name="description" id="description" cols="30" rows="5" placeholder="{{_i('Write a description for this wishlist')}}"></textarea>
                </div>
            </div>

            <div class="field is-left">
                <label for="isPublic">{{_i('Privacy')}}</label>
                <div class="control">
                    <div class="select is-primary">
                        <select name="isPublic" id="isPublic">
                            <option value=0>{{_i('Private')}}</option>
                            <option value=1>{{_i('Public')}}</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="field is-right">
                <div class="control">
                    <button class="button">{{_i('Create')}}</button>
                </div>
            </div>

        </form>
    </div>

</div>