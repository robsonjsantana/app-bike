<x-comp-layout>
   
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

        {{-- BEGIN CARD 1 --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1> <strong>Alugados Recentemente</strong> </h1>
            </div>
            <div class="card-body">
                <hr>
                <x-comp-message>
                    
                </x-comp-message>
                <hr>
                <div class="table-responsive">

                    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                        
                        <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nome Cliente</th>
                              <th scope="col">QTD de Bikes</th>
                              <th scope="col">Horas</th>
                              <th scope="col">QTD de Patins</th>
                              <th scope="col">Horas</th>
                              <th scope="col">Valor</th>
                              <th scope="col">Data</th>
                              <th scope="col">Status</th>
                              <th scope="col">Ações</th>
                              </tr>
                        </thead>

                        <tbody>

                              @foreach ($aluguels as $aluguel)
                              <tr>
                                <th scope="row"> {{ $aluguel->id }} </th>
                                <td class="text-center"> {{ $aluguel->cliente->name }} </td>
                                <td class="text-center"> {{ $aluguel->qtd_bikes }} </td>
                                <td class="text-center"> {{ $aluguel->horas_bike }}h </td>
                                <td class="text-center"> {{ $aluguel->qtd_patins }} </td>
                                <td class="text-center"> {{ $aluguel->horas_patins }}h </td>
                                <td class="text-center"> <strong>R${{ $aluguel->valor }}</strong> </td>
                                <td class="text-center"> {{ date('d/m/Y', strtotime($aluguel->created_at)) }} </td>
                                <td class="text-center"> {{ $aluguel->status }} </td>
                                <td class="text-center">
                                    
                                    <a href="/show-aluguel">
                                        <x-buttonblue>
                                            DETALHES
                                        </x-buttonblue>
                                    </a>
                                    
                                    <a href="/encerrar-aluguel/{{ $aluguel->id }}" class="btn btn-danger btn-icon-split">
                                        <span class="text">ENCERRAR</span>
                                    </a>
                                    
                                
                                </td>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                              </tr>
                            @endforeach
                      
                        
                      
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- //. END  CARD 1 --}}

        {{-- BEGIN CARD 2 --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1> <strong>Aluguéis Finalizados</strong> </h1>
            </div>
            <div class="card-body">
                <hr>
                
                <hr>
                <div class="table-responsive">

                    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                        
                        <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nome Cliente</th>
                              <th scope="col">QTD de Bikes</th>
                              <th scope="col">Horas</th>
                              <th scope="col">QTD de Patins</th>
                              <th scope="col">Horas</th>
                              <th scope="col">Valor</th>
                              <th scope="col">Data</th>
                              <th scope="col">Status</th>
                              <th scope="col">Ações</th>
                              </tr>
                        </thead>

                        <tbody>

                              @foreach ($alugueisFinalizados as $aluguelF)
                              <tr>
                                <th scope="row"> {{ $aluguelF->id }} </th>
                                <td class="text-center"> {{ $aluguelF->cliente->name }} </td>
                                <td class="text-center"> {{ $aluguelF->qtd_bikes }} </td>
                                <td class="text-center"> {{ $aluguelF->horas_bike }}h </td>
                                <td class="text-center"> {{ $aluguelF->qtd_patins }} </td>
                                <td class="text-center"> {{ $aluguelF->horas_patins }}h </td>
                                <td class="text-center"> <strong>R${{ $aluguelF->valor }}</strong> </td>
                                <td class="text-center"> {{ date('d/m/Y', strtotime($aluguelF->created_at)) }} </td>
                                <td class="text-center"> {{ $aluguelF->status }} </td>
                                <td class="text-center">
                                    
                                    <a href="/show-aluguel">
                                        <x-buttonblue>
                                            DETALHES
                                        </x-buttonblue>
                                    </a>
                                                                    
                                </td>
                              </tr>
                            @endforeach
                      
                        
                      
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- //. END  CARD 2 --}}

    </div>

    {{--  END CONTENT  --}}

</x-comp-layout>