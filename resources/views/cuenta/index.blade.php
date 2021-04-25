@extends('layouts.app')

@section('template_title')
    Cuenta
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cuenta') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cuentas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>No Cuentas</th>
										<th>Tipo Cuenta</th>
										<th>Fecha Apertura</th>
										<th>Nombre Cliente</th>
										<th>Saldo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cuentas as $cuenta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cuenta->no_cuentas }}</td>
											<td>{{ $cuenta->tipo_cuenta }}</td>
											<td>{{ $cuenta->fecha_apertura }}</td>
											<td>{{ $cuenta->nombre_cliente }}</td>
											<td>{{ $cuenta->saldo }}</td>

                                            <td>
                                                <form action="{{ route('cuentas.destroy',$cuenta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cuentas.show',$cuenta->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cuentas.edit',$cuenta->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $cuentas->links() !!}
            </div>
        </div>
    </div>
@endsection
