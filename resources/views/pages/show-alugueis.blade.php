<x-comp-layout>
    @section('title', 'Detalhes do Pedido')
    <x-slot name="title">
        @yield('title')
    </x-slot>


    {{--  BEGIN CONTENT  --}}

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"> @yield('title') </h1>

        <div class="card shadow mb-12">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center ">
                <h6 class="m-0 font-weight-bold text-primary">
                
                </h6>
                  
                <a href="/cadastrar-cliente">
                    <x-comp-button-main>
                        CADASTRAR CLIENTE
                    </x-comp-button-main>
                </a>
             
            </div>

            <div class="card-body">
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
                     
                    <input type="text" class="form-control" value=" {{ $aluguels->cliente->name }} " disabled>
                    
             
                    <hr>
                    <br><br>

                    <!-- EMAIL -->
                    <div>
                        <label for="qtd_bikes">Quantidade de Bikes</label>
                        <input type="text" class="form-control" value=" {{ $aluguels->qtd_bikes }} " disabled>
                    </div>

                    <!-- ENDEREÇO -->
                    <div>
                        <label for="horas-bike">Horas</label>
                        <input type="text" class="form-control" value=" {{ $aluguels->horas_bike }} " disabled>
                        
                    </div>

                    <!-- CPF -->
                    <div>
                        <label for="qtd-patins">Quantidade de Patins</label>
                        <input type="text" class="form-control" value=" {{ $aluguels->qtd_patins }} " disabled>
                           
                        
                    </div>

                    <!-- CELULAR -->
                    <div>
                        <label for="horas_patins">Horas</label>
                        <input type="text" class="form-control" value=" {{ $aluguels->horas_patins }} " disabled>
                        
                    </div>
                    <br>
                    <hr>
                   
                    <h1>Total a Pagar: {{ $aluguels->valor }} </h1>
                    <hr>
                    <br>
                    <!-- button -->
                    <div class="text-center">
                        <x-comp-button-main>
                            CONFIRMAR PEDIDO
                        </x-comp-button-main>
                    </div>
                
                </form>
            
            </div>
        </div>
    {{--  END CONTENT  --}}

</x-comp-layout>