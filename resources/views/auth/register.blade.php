<!-- resources/views/auth/register.blade.php -->

{!! Form::open(['url' => 'auth/register']) !!}

    <div>
        {!! Form::label('name', 'Name',['class' => 'awsome']) !!}
        {!! Form::text('name') !!}
    </div>

    <div>
        {!! Form::label('email', 'Email',['class' => 'awsome']) !!}
        {!! Form::email('email') !!}
    </div>

    <div>
        {!! Form::label('password','Password',['class' => 'awsome']) !!}
        {!! Form::password('password')!!}
    </div>

    <div>
        {!! Form::label('password_confirmation','Confirm Password',['class' => 'awsome']) !!}
        {!! Form::password('password_confirmation')!!}
    </div>

    <div>
        {!! Form::submit('Register')!!}
    </div>

{!! Form::close() !!}



