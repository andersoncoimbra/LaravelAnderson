<h2>Register!</h2>
{!! Form::open(array('url' => '/eventos')) !!}
{!!  Form::select('size', $tipoEvento, null, ['placeholder' => 'Pick a size...']) !!}}
{!! Form::close !!}