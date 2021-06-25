<x-comp-layout>
    @section('title', 'Cadastrar Cliente')
    <x-slot name="title">
        @yield('title')
    </x-slot>

        

        
    {{--  BEGIN CONTENT  --}}

    <div class="container-fluid">


        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"> @yield('title') </h1>

        <a href="/listar-cliente">
            <x-buttonblue>
                LISTAR CLIENTES
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

        <div class="card shadow mb-12">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Formulário de Cadastro</h6>
                <div class="dropdown no-arrow">
                    
                </div>
            </div>

            <div class="card-body">

                

            <hr>


            {{-- Mensagens de alerta para o usuario --}}
            <x-comp-message-alerta />
            <x-comp-message/>
            <x-comp-message-erro />

           
            {{-- Mensagens de alerta para o usuario --}}

            <hr>


                
                <form method="POST" action="{{ route('cliente-store') }}" enctype="multipart/form-data">
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
        </div>
    </div>
    {{--  END CONTENT  --}}

</x-comp-layout>