<x-comp-layout>
    @section('title', 'Editar Cliente')
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
                <h6 class="m-0 font-weight-bold text-primary">Formulário de Cadastro</h6>
                <div class="dropdown no-arrow">
                    
                </div>
            </div>

            


            <div class="card-body">

                

                <hr>

            {{-- Mensagens de erro para o usuario --}}
            @if(count($errors) > 0)
            <div class="card-panel ef5350 red lighten-1">
                <ul>
                    @foreach($errors->all() as $error)

                    <div class="alert alert-danger mb-4" role="alert"><strong>Error!</strong>  {!!$error!!} </div>

                    @endforeach
                </ul>
            </div>
            @endif

            {{-- Mensagens de erro para o usuario --}}


            {{-- Mensagens de alerta para o usuario --}}
            @if(Session::has('message'))
            <div class="alert alert-danger" role="alert">
                <h5 style="color: #da0b0b;"><strong>Error!</strong> {!! Session::get('message') !!}</h5>
            </div>
            @endif
            {{-- Mensagens de alerta para o usuario --}}

        <hr>


                
            
        <form method="POST" action="{{ route('/atualizar-cliente', $cliente->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf


                    <!-- NOME -->
                    <div class="mb-8">
                        <label for="name">Nome</label>

                        <x-input id="name" class="form-control" type="text" name="name" value=" {{ $cliente->name }} "  autofocus />
                        
                    </div>

                    <!-- EMAIL -->
                    <div>
                        <label for="email">Email</label>

                        <x-input id="email" class="form-control" type="text" name="email" value=" {{ $cliente->email }} "  autofocus />
                        
                    </div>

                    <!-- ENDEREÇO -->
                    <div>
                        <label for="endereco">Endereço</label>

                        <x-input id="endereco" class="form-control" type="text" name="endereco" value=" {{ $cliente->endereco }} "  autofocus />
                        
                    </div>

                    <!-- CPF -->
                    <div>
                        <label for="cpf">CPF</label>

                        <x-input id="cpf" class="form-control" type="text" name="cpf" value=" {{ $cliente->cpf }} "  autofocus />
                        
                    </div>

                    <!-- CELULAR -->
                    <div>
                        <label for="celular">Celular</label>

                        <x-input id="celular" class="form-control" type="text" name="celular" value=" {{ $cliente->celular }} "  autofocus />
                        
                    </div>

                    <br>
                    <!-- button -->
                    <div class="text-center">
                        <x-comp-button-main>
                            {{ __('ATUALIZAR') }}
                        </x-comp-button-main>
                    </div>
                
                </form>
            
            </div>
        </div>
    </div>
    {{--  END CONTENT  --}}

</x-comp-layout>