<x-comp-layout>
    @section('title', 'Detalhes do Cliente')
    <x-slot name="title">
        @yield('title')
    </x-slot>

        

        
    {{--  BEGIN CONTENT  --}}

    <div class="container-fluid">

        

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"> @yield('title') </h1>

        
        <div class="card shadow mb-12">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Formulário do Cliente</h6>
                <div class="dropdown no-arrow">
                    
                </div>
            </div>
            
            <div class="card-body">
                
                <hr>
                    
                {{-- Mensagens de alerta para o usuario --}}
                @if(Session::has('message'))
                    <div class="alert alert-danger" role="alert">
                        <h5 style="color: #da0b0b;"><strong>Error!</strong> {!! Session::get('message') !!}</h5>
                    </div>
                @endif
                {{-- Mensagens de alerta para o usuario --}}
                
                    <hr>
                        <strong><label for="id">ID</label></strong>
                        <label for=""> {{ $cliente->id }} </label>
                    <hr>    
                    
                    <hr>
                        <strong><label for="nome">Nome</label></strong>
                        <label for=""> {{ $cliente->name }} </label>
                    <hr>

                    <hr>
                        <strong><label for="Email">Email</label></strong>
                        <label for=""> {{ $cliente->email }} </label>
                    <hr>    

                    <hr>
                        <strong><label for="Endereco">Endereço</label></strong>
                        <label for=""> {{ $cliente->endereco }} </label>
                    <hr>    
                    
                    <hr>
                        <strong><label for="CPF">CPF</label></strong>
                        <label for=""> {{ $cliente->cpf }} </label>
                    <hr>    
                    
                    <hr>
                        <strong><label for="Celular">Celular</label></strong>
                        <label for=""> {{ $cliente->celular }} </label>
                    <hr>
                    
                    <br>
                    
                        <a href="/listar-cliente" class="btn btn-success btn-icon-split">
                            <span class="text">VOLTAR</span>
                        </a>

                        <a href="/edit-cliente/{{ $cliente->id }}" class="btn btn-primary btn-icon-split">
                            <span class="text">EDITAR</span>
                        </a>
                    
                </form>
                
            </div>
        </div>
    </div>
    {{--  END CONTENT  --}}

</x-comp-layout>