@extends('layout.master')

@section('content')
    <div class="row text-center mt-3">
        <span class="display-4">
            Filling-Data
        </span>
        <p>Falling-Data é um projeto pessoal voltado para facilitar e ajudar no teste e desenvolvimento de API(s)</p>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sml-12 mt-4">
            <div class="card">
                <div class="card-header text-center">
                    <h4>
                        Livros - Books
                    </h4>
                </div>
                <div class="card-body"></div>
                <div class="card-footer text-center">
                    <a href="{{ url('/books') }}" class="btn btn-success">Acessar</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sml-12 mt-4">
            <div class="card">
                <div class="card-header text-center">
                    <h4>
                        Produtos - Products
                    </h4>
                </div>
                <div class="card-body"></div>
                <div class="card-footer text-center">
                    <a href="{{ url('/products') }}" class="btn btn-success">Acessar</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sml-12 mt-4">
            <div class="card">
                <div class="card-header text-center">
                    <h4>
                        Notas - Notes
                    </h4>
                </div>
                <div class="card-body"></div>
                <div class="card-footer text-center">
                    <a href="{{ url('/notes') }}" class="btn btn-success">Acessar</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sml-12 mt-4">
            <div class="card">
                <div class="card-header text-center">
                    <h4>
                        Tarefas - Tasks
                    </h4>
                </div>
                <div class="card-body"></div>
                <div class="card-footer text-center">
                    <a href="{{ url('/tasks') }}" class="btn btn-success">Acessar</a>
                </div>
            </div>
        </div>

    </div>
@endsection
