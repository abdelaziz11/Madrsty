@if($errors->count() > 0)
    <ul class="list-group">
        @foreach($errors->all() as $error)
            <li class="list-group">
                <div class="alert alert-danger">
                    {{$error}}
                </div>
            </li>
        @endforeach
    </ul>
@endif