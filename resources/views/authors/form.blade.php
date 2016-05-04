<div>
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name') !!}
</div>
<div>
    {!! Form::label('email', 'Email:') !!}
    {!! Form::textArea('email') !!}
</div>
{!! Form::submit($submitButtonText) !!}
