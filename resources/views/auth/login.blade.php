

{!! Form::open(['url' => 'auth/login']) !!}

    <div>
        {!! Form::label('email', 'email',['class' => 'awsome']) !!}
        {!! Form::email('email') !!}
    </div>

    <div>
        {!! Form::label('password','password',['class' => 'awsome']) !!}
        {!! Form::password('password')!!}
    </div>

    <div>
        {!! Form::submit('Login')!!}
    </div>

{!! Form::close() !!}
