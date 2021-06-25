<x-comp-layout>
    @section('title', 'Dashboard')
    <x-slot name="title">
        @yield('title')
    </x-slot>

    {{--  BEGIN CONTENT  --}}

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"> @yield('title') </h1>
        
        <div class="">
            {{--  Essa Classe é padrão para todas as views da aplicação, ela não pode sair  --}}
            <div class="card shadow mb-12">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                    <div class="dropdown no-arrow">
                        
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
            
                   <div class="card text-center">
                    <div class="card-body">
                      <h5 class="card-title">Olá {{ Auth::user()->name }}. Bem Vindo! O que deseja fazer?</h5>
                      <a href="/casdastrar-cliente" class="btn btn-primary">CADASTRAR CLIENTE</a>
                      <a href="/listar-cliente" class="btn btn-primary">LISTAR CLIENTES</a>
                      <a href="/alugar-produto" class="btn btn-primary">ALUGAR PRODUTO</a>
                      <a href="/listar-alugueis" class="btn btn-primary">PRODUTOS ALUGADOS</a>
                    </div>
                  </div>
                  
                </div>
            </div>
        </div>

    </div>

    {{--  END CONTENT  --}}

</x-comp-layout>