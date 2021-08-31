@extends('adminlte::page')

@section('title' , 'Finanças')

@section('content')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">                
                <hr>            
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <i class="fa fa-list"></i>
            <h5>Listagem de Produtos</h5>        
    </div>

    <div class="card-body">
        <div class="row">

            <div class="col-md-6">
                 <form method="GET" action="{{ route('finances.index') }}">
                    <div class="input-group mb-3">
                        <input class="form-control" name="search" value="{{ request('search') ?? '' }}"
                            placeholder="Pesquisar...."/>
                        <div class="input-group-append">
                            <button class="btn btn-sm btn-primary" type="submit" >
                                <i class="fa fa-search"></i> Buscar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            
                <div class="col-md-6 text-right">
                    <a href="{{ route('finances.create') }}" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Novo Cadastro Financeiro
                    </a>
                </div>


            <hr>

            <div class="col-md-12 table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Mês</th>
                            <th>Valor inicial</th>
                            <th>Inflação</th>
                            <th>Depositos</th>                                                        
                            <th class="text-center w-15">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($finances as $finance)
                        <tr>
                            <td>{{ $finance->id }}</td>
                            <td>{{ $finance->mes }}</td>
                            <td>{{ $finance->initial }}</td>
                            <td>{{ $finance->inflation }}</td>
                            <td>{{ $finance->contribution }}</td>                                                     
                            <td class="text-center">

                         
                                    <a href="{{ route('finances.show', $finance) }}" class="btn btn-sm btn-secondary" data-toggle="tooltip" data-placement="top" title="Visualizar produto">
                                        <i class="fa fa-search"></i>
                                    </a>                         

                                    <a href="{{ route('finances.edit', $finance) }}" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Editar produto">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                               
                                    <a href="javascript:;" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $finance->id }})" data-toggle="tooltip" data-placement="top" title="Excluir produto">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <form id="btn-delete-{{ $finance->id }}" action="{{ route('finances.destroy', $finance) }}"
                                        method="post" class="hidden">

                                        @method('DELETE')
                                        @csrf
                                    </form>
                              
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">
                                <div class="alert alert-danger text-center">
                                    <i class="fa fa-exclamation-triangle"></i>
                                    Oops... nenhum registro encontrado!
                                </div>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
        
            </div>

        </div>
    </div>
</div>
@endsection