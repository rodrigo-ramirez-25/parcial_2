<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('no_cuenta') }}
            {{ Form::text('no_cuentas', $cuenta->no_cuentas, ['class' => 'form-control' . ($errors->has('no_cuentas') ? ' is-invalid' : ''), 'placeholder' => 'No Cuentas']) }}
            {!! $errors->first('no_cuentas', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_cuenta') }}
            {{ Form::text('tipo_cuenta', $cuenta->tipo_cuenta, ['class' => 'form-control' . ($errors->has('tipo_cuenta') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Cuenta']) }}
            {!! $errors->first('tipo_cuenta', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_apertura') }}
            {{ Form::date('fecha_apertura', $cuenta->fecha_apertura, ['class' => 'form-control' . ($errors->has('fecha_apertura') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Apertura']) }}
            {!! $errors->first('fecha_apertura', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_cliente') }}
            {{ Form::text('nombre_cliente', $cuenta->nombre_cliente, ['class' => 'form-control' . ($errors->has('nombre_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cliente']) }}
            {!! $errors->first('nombre_cliente', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('saldo') }}
            {{ Form::text('saldo', $cuenta->saldo, ['class' => 'form-control' . ($errors->has('saldo') ? ' is-invalid' : ''), 'placeholder' => 'Saldo Q']) }}
            {!! $errors->first('saldo', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>