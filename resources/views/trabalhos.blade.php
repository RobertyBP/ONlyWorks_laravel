        
    <div class="container" id="containerlistatrabalhos">
            <h2>Trabalhos</h2>
            <div id="containercards">

                @foreach( $listaTrabalhos as $trabalho)        
                <div class="novotrabalho" style="margin: 0; margin-bottom: 5px;" >
                        <p class="tituloTrabalho" id="tituloTrabalho">titulo:{{ $trabalho->titulo}}</p>
                        <p class="dataPublicacaoTrabalho" id="dataPublicacaoTrabalho">Publicado: {{ $trabalho->datapublicacao }}</p>
                        <p class="dataEntregaTrabalho" id="dataEntregaTrabalho">Data entrega: {{ $trabalho->dataentrega }}</p>
                        <div id="containerdescricao">
                            <p id="txtDescricaoCadastro" class="txtDescricao">descrição: {{ $trabalho->descricao }}</p>
                        </div>
                        <p class="requisitosTrabalho" id="requisitosTrabalho">Requisitos: {{ $trabalho->requisitos }}</p>
                        <p class="valorPagamentoTrabalho" id="valorPagamentoTrabalho">Pagamento: R$ {{ $trabalho->pagamento }}</p>
                        <p class="autorTrabalho" id="autorTrabalho">Autor: {{ $trabalho->autor }}</p>
                    </div>
                @endforeach 
            </div>
        </div>
