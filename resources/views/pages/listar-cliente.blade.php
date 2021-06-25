<x-comp-layout>
    @section('title', 'Listar Clientes')
    <x-slot name="title">
        @yield('title')
    </x-slot>


    {{--  BEGIN CONTENT  --}}

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"> @yield('title') </h1>
        
        <a href="/cadastrar-cliente">
            <x-buttonblue>
                NOVO CLIENTE
            </x-buttonblue>
        </a>

        <a href="/alugar-produto">
            <x-buttonblue>
                ALUGAR PRODUTO
            </x-buttonblue>
        </a>

        <a href="/listar-aluguel">
            <x-buttonblue>
                PRODUTOS ALUGADOS
            </x-buttonblue>
        </a>

        <div class="card shadow mb-4">
            <div class="card-headerpy- }}3">
            </div>
            <form class="d-flex">
            <div class="card-body">
                <div class="table-responsive">



                    <hr>
                    {{--  BEGIN Mensagens para o Usuário  --}}
                    <x-comp-message>

                    </x-comp-message>
                    {{--  END Mensagens para o Usuário  --}}
                   
                    <hr>


                    <form action="" method="post">
                       <div class="row">
                            <div class="col">
                                <x-input id="search" class="form-control" type="text" name="search" :value="old('search')"  autofocus placeholder="Buscar Cliente" />
                            </div>
                            <div class="col">
                            
                                <x-comp-button-submit>
                                    BUSCAR
                                </x-comp-button-submit>
                            </div>
                       </div>
                    </form> 
                    <hr>
                    <br>
                    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Email</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">CPF</th>
                                <th scope="col">Celular</th>
                                <th scope="col">Detalhes</th>
                                <th scope="col">Deletar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clientes as $cliente)
                            <tr>
                                <th scope="row"> {{ $cliente->id }} </th>
                                <td> {{ $cliente->name }} </td>
                                <td> {{ $cliente->email }} </td>
                                <td> {{ $cliente->endereco }} </td>
                                <td>{{ $cliente->cpf }}</td>
                                <td>{{ $cliente->celular }}</td>
                                <td> 
                                    <a href="/show-cliente/{{ $cliente->id }}" class="btn btn-primary btn-icon-split">
                                            <span class="text">DETALHES</span>
                                    </a>
                                </td>
                                <td>                                    
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        DELETAR
                                    </button>
                                </td>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Excluir Cliente</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                Tem certeza que deseja excluir esse cliente de forma permanente?
                                                </div>
                                                <div class="modal-footer">
                        
                                                    <x-buttonblue type="button" data-bs-dismiss="modal">
                                                        NÃO
                                                    </x-buttonblue>
                        
                        
                                                    <form action=" {{ route('/destroycliente', $cliente->id) }} " method="POST">
                                                        @csrf
                                                        @method('POST')
                                                        <x-buttonred type="submit" class="btn btn-danger">
                                                            SIM
                                                        </x-buttonred>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    {{--  END CONTENT  --}}

</x-comp-layout>