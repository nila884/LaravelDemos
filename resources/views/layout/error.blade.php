@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($erros as $error)
        <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif