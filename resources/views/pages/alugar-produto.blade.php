<x-comp-layout>
    @section('title', 'Alugar Produto')
    <x-slot name="title">
        @yield('title')
    </x-slot>


    {{--  BEGIN CONTENT  --}}
    

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"> @yield('title') </h1>


        <a href="/listar-cliente">
            <x-buttonblue>
                LISTAR CLIENTE
            </x-buttonblue>
        </a>

        <a href="/listar-aluguel">
            <x-buttonblue>
                PRODUTOS ALUGADOS
            </x-buttonblue>
        </a>



        <div class="card shadow mb-12">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center ">
                <h6 class="m-0 font-weight-bold text-primary">
                
                </h6>
                
                <div>                        
                    <x-buttonblue type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        CADASTRAR CLIENTE
                    </x-buttonblue>
                </div>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Cliente</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <hr>
                                    {{-- Mensagens de alerta para o usuario --}}
{{--                                     <x-comp-message />
                                    <x-comp-message-alerta />
                                    <x-comp-message-erro /> --}}
                        
                                    {{-- Mensagens de alerta para o usuario --}}
                        
                                    <hr>
                                        
                                        <form method="POST" action="{{ route('cliente-modal-store') }}" enctype="multipart/form-data">
                                            @csrf
                                            <!-- NOME -->
                                            <div class="mb-8">
                                                <label for="name">Nome</label>
                        
                                                <x-input id="name" class="form-control" type="text" name="name" :value="old('name')"  autofocus />
                                                
                                            </div>
                        
                                            <!-- EMAIL -->
                                            <div>
                                                <label for="email">Email</label>
                        
                                                <x-input id="email" class="form-control" type="text" name="email" :value="old('email')"  autofocus />
                                                
                                            </div>
                        
                                            <!-- ENDEREÇO -->
                                            <div>
                                                <label for="endereco">Endereço</label>
                        
                                                <x-input id="endereco" class="form-control" type="text" name="endereco" :value="old('endereco')"  autofocus />
                                                
                                            </div>
                        
                                            <!-- CPF -->
                                            <div>
                                                <label for="cpf">CPF</label>
                        
                                                <x-input id="cpf" class="form-control" type="text" name="cpf" :value="old('cpf')"  autofocus />
                                                
                                            </div>
                        
                                            <!-- CELULAR -->
                                            <div>
                                                <label for="celular">Celular</label>
                        
                                                <x-input id="phone" class="form-control" type="text" name="celular" :value="old('celular')"  autofocus />
                                                
                                            </div>
                        
                                            <br>
                                            <!-- button -->
                                            <div class="text-center">
                                                <x-comp-button-main>
                                                    {{ __('Cadastrar') }}
                                                </x-comp-button-main>
                                            </div>
                                        
                                        </form>


                                </div>
                            <div class="modal-footer">
        

                                   
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- END Modal -->
             
            </div>

            <div class="card-body">
                <x-comp-message>

                </x-comp-message>
                <hr>
                <div class="row">
                    <div class="col">
                        <h2> <strong>Hora Bike:</strong>  R$10,00</h2>
                    </div>
                    <div class="col">
                        <h2> <strong>Hora Patins:</strong>  R$15,00</h2>
                    </div>
                </div>
                <br>
                <label for="bucar Cliente">Selecione o Cliente</label>
               

                <hr>

                <form method="POST" action="{{ route('produto-store') }}" enctype="multipart/form-data" >
                    @csrf
                     
                    <select name="cliente_id" id="" class="form-control" value="old('name')">
                        <option>Selecione o Cliente...</option>
                        @foreach ($clientes as $cliente)
                            <option value=" {{ $cliente->id }} ">{{ $cliente->name }}</option>
                      
                        @endforeach
                    </select>
           
                    <hr>
                    <br><br>

                    <!-- EMAIL -->
                    <div>
                        <label for="qtd_bikes">Quantidade de Bikes</label>
                        <form action="" method="post">
                            <select name="qtd_bikes" id="qtd_bikes" class="form-control" value=" old('qtd_bikes') ">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                            </select>
                        
                    </div>

                    <!-- ENDEREÇO -->
                    <div>
                        <label for="horas-bike">Horas</label>
                        
                            <select name="horas_bike" id="horas_bike" class="form-control" value=" old('horas_bike') ">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                            </select>

                    </div>

                    <!-- CPF -->
                    <div>
                        <label for="qtd-patins">Quantidade de Patins</label>
                       
                            <select name="qtd_patins" id="qtd_patins" class="form-control" value=" old('qtd_patins') ">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                            </select>
                        
                    </div>

                    <!-- CELULAR -->
                    <div>
                        <label for="horas_patins">Horas</label>
                       
                            <select name="horas_patins" id="horas_patins" class="form-control" value=" old('horas_patins') ">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                            </select>
                        
                    </div>
                    <br>
                    <hr>
                   
                    {{--  <h1>Total a Pagar:00.00</h1>  --}}
                    <hr>
                    <br>
                    <!-- button -->
                    <div class="text-center">
                        <x-comp-button-main>
                            ALUGAR
                        </x-comp-button-main>
                    </div>
                
                </form>
            
            </div>
        </div>
    {{--  END CONTENT  --}}

</x-comp-layout>