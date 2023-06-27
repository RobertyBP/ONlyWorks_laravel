
    <div class="container">
        <h2>Cadastro de novo trabalho</h2>
            <p id="indiceFormularios">Formulários:</p>
            <form action="/cadTrab" method="POST">
                @csrf
                <label for="tituloFormularios">Titulo:</label>
                <input type="text" name="tituloFormulario" id="tituloFormularios" required>

                <label for="descricaoFormularios">Descrição:</label>
                <textarea name="descricaoFormulario" cols="40" rows="10" id="descricaoFormularios" required></textarea>

                <label for="requisitosFormularios">Requisitos:</label>
                <input type="text" name="requisitosFormulario" id="requisitosFormularios" required>

                <label for="valorPagamentoFormularios">Pagamento:</label>
                <input type="text" name="valorPagamentoFormulario" id="valorPagamentoFormularios" required>

                <label for="dataEntregaFormularios">Data Entrega:</label>
                <input type="text" name="dataEntregaFormulario" id="dataEntregaFormularios" required>

                <input type="hidden" name="acao" value="cadastrar" style="position: relative;">
                
                <div style="position: relative; top: 50px;">
                    <button>Enviar</button>
                </div>
            </form>
    </div>