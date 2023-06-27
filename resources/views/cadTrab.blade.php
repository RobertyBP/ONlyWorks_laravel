
    <div class="container">
        <h2>Cadastro de novo trabalho</h2>
                <div class="card" style="background-color:lightblue; border-color:darkblue;">
                    <form action="/cadTrab" method="POST">
                        @csrf
                        <div class="card" style=" border-top-left-radius: 0; padding: 10% ; text-align: center;">
                            <label for="tituloFormularios">Titulo:</label>
                            <input type="text" name="tituloFormulario" id="tituloFormularios" required><br>
                       
                            <label for="descricaoFormularios">Descrição:</label>
                            <textarea name="descricaoFormulario" id="descricaoFormularios" required></textarea><br>
                       
                            <label for="requisitosFormularios">Requisitos:</label>
                            <input type="text" name="requisitosFormulario" id="requisitosFormularios" required><br>
                    
                            <label for="valorPagamentoFormularios">Pagamento:</label>
                            <input type="text" name="valorPagamentoFormulario" id="valorPagamentoFormularios" required><br>
                       
                            <label for="dataEntregaFormularios">Data Entrega:</label>
                            <input type="text" name="dataEntregaFormulario" id="dataEntregaFormularios" required><br>
                        </div>
                        
                        <div style="position: relative; top: 50px;">
                            <button>Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
            
    </div>