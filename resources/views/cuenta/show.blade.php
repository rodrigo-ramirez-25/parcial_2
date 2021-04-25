@extends('layouts.app')

@section('template_title')
    {{ $cuenta->name ?? 'Show Cuenta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cuenta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cuentas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>No Cuentas:</strong>
                            {{ $cuenta->no_cuentas }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Cuenta:</strong>
                            {{ $cuenta->tipo_cuenta }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Apertura:</strong>
                            {{ $cuenta->fecha_apertura }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Cliente:</strong>
                            {{ $cuenta->nombre_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Saldo:</strong>
                            {{ $cuenta->saldo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
