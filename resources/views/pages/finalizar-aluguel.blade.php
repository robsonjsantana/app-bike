<x-comp-layout>
    @section('title', 'Alugar Produto')
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
                  
                <a href="/listar-alugueis">
                    <x-comp-button-main>
                        VOLTAR
                    </x-comp-button-main>
                </a>
             
            </div>

            <div class="card-body">
                <x-comp-message>

                </x-comp-message>
                <hr>
                <div class="row">
                    <div class="col">
                        <h1 style="font-size:30px"> <strong>Total a Pagar:</strong>  R${{ $prodAluguel->valor }} </h1>
                    </div>
                   
                </div>
                <br>
                <hr>

                <form method="POST" action="{{ route('/produto-update', $prodAluguel->id) }}" enctype="multipart/form-data" >
                    @method('PUT')
                    @csrf
                    <div>
                        <label for="horas_patins">Status</label>
                       
                            <select name="status" id="status" class="form-control" value=" {{ $prodAluguel->status }} ">
                                <option selected disabled>Selecione o Status</option>
                                <option value="Finalizado">Finalizado</option>
                                <option value="Cancelado">Cancelado</option>
                               
                            </select>
                        
                    </div>
                    <hr>
                    <label for="qtd_bikes">Cliente</label>
                    <x-input id="cliente" class="form-control" type="text" name="cliente" value=" {{ $prodAluguel->cliente->name }} "  autofocus  disabled/>
                   
           
                    <hr>
                    <br><br>

                    <!-- EMAIL -->
                    <div>
                        <label for="qtd_bikes">Quantidade de Bikes</label>
                        <x-input id="qtd_bikes" class="form-control" type="text" name="qtd_bikes" value=" {{ $prodAluguel->qtd_bikes }} "  autofocus disabled/>
                           
                        
                    </div>

                    <!-- ENDEREÇO -->
                    <div>
                        <label for="horas-bike">Horas</label>

                        <x-input id="horas_bike" class="form-control" type="text" name="horas_bike" value=" {{ $prodAluguel->horas_bike }} "  autofocus disabled/>
                           

                    </div>

                    <!-- CPF -->
                    <div>
                        <label for="qtd-patins">Quantidade de Patins</label>
                        <x-input id="horas_bike" class="form-control" type="text" name="qtd_patins" value=" {{ $prodAluguel->qtd_patins }} "  autofocus disabled/>
                        
                    </div>

                    <!-- CELULAR -->
                    <div>
                        <label for="horas_patins">Horas</label>

                        <x-input id="horas_patins" class="form-control" type="text" name="horas_patins" value=" {{ $prodAluguel->horas_patins }} "  autofocus disabled/>
                    </div>
                    <br>
                    <hr>

                 
                    <br>
                    <hr>
                   
                    {{--  <h1>Total a Pagar:00.00</h1>  --}}
                    <hr>
                    <br>
                    <!-- button -->
                    <div class="text-center">
                        <x-comp-button-main>
                            FINALIZAR ALUGUEL
                        </x-comp-button-main>
                    </div>
                
                </form>
            
            </div>
        </div>
    {{--  END CONTENT  --}}

</x-comp-layout>