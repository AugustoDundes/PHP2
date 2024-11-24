<x-app-layout>

    <h5>Novo rota</h5>

    <form action="/rota" method="POST">
        @CSRF
        <div class="row">
            <div class="col">
            <label for="estado_inicio" class="form-label">Informe o estado de início:</label>
<select name="estado_inicio" id="estado_inicio" class="form-control">
    <option value="" selected disabled>Selecione o estado</option>
    <option value="AC">Acre (AC)</option>
    <option value="AL">Alagoas (AL)</option>
    <option value="AP">Amapá (AP)</option>
    <option value="AM">Amazonas (AM)</option>
    <option value="BA">Bahia (BA)</option>
    <option value="CE">Ceará (CE)</option>
    <option value="DF">Distrito Federal (DF)</option>
    <option value="ES">Espírito Santo (ES)</option>
    <option value="GO">Goiás (GO)</option>
    <option value="MA">Maranhão (MA)</option>
    <option value="MT">Mato Grosso (MT)</option>
    <option value="MS">Mato Grosso do Sul (MS)</option>
    <option value="MG">Minas Gerais (MG)</option>
    <option value="PA">Pará (PA)</option>
    <option value="PB">Paraíba (PB)</option>
    <option value="PR">Paraná (PR)</option>
    <option value="PE">Pernambuco (PE)</option>
    <option value="PI">Piauí (PI)</option>
    <option value="RJ">Rio de Janeiro (RJ)</option>
    <option value="RN">Rio Grande do Norte (RN)</option>
    <option value="RS">Rio Grande do Sul (RS)</option>
    <option value="RO">Rondônia (RO)</option>
    <option value="RR">Roraima (RR)</option>
    <option value="SC">Santa Catarina (SC)</option>
    <option value="SP">São Paulo (SP)</option>
    <option value="SE">Sergipe (SE)</option>
    <option value="TO">Tocantins (TO)</option>
</select>
                <label for="cidade_inicio" class="form-label">Informe a cidade de inicio:</label>
                <input type="text" name="cidade_inicio" id="cidade_inicio" class="form-control"/>
                <label for="estado_final" class="form-label">Informe o estado final:</label>
                <select name="estado_final" id="estado_final" class="form-control">
    <option value="" selected disabled>Selecione o estado</option>
    <option value="AC">Acre (AC)</option>
    <option value="AL">Alagoas (AL)</option>
    <option value="AP">Amapá (AP)</option>
    <option value="AM">Amazonas (AM)</option>
    <option value="BA">Bahia (BA)</option>
    <option value="CE">Ceará (CE)</option>
    <option value="DF">Distrito Federal (DF)</option>
    <option value="ES">Espírito Santo (ES)</option>
    <option value="GO">Goiás (GO)</option>
    <option value="MA">Maranhão (MA)</option>
    <option value="MT">Mato Grosso (MT)</option>
    <option value="MS">Mato Grosso do Sul (MS)</option>
    <option value="MG">Minas Gerais (MG)</option>
    <option value="PA">Pará (PA)</option>
    <option value="PB">Paraíba (PB)</option>
    <option value="PR">Paraná (PR)</option>
    <option value="PE">Pernambuco (PE)</option>
    <option value="PI">Piauí (PI)</option>
    <option value="RJ">Rio de Janeiro (RJ)</option>
    <option value="RN">Rio Grande do Norte (RN)</option>
    <option value="RS">Rio Grande do Sul (RS)</option>
    <option value="RO">Rondônia (RO)</option>
    <option value="RR">Roraima (RR)</option>
    <option value="SC">Santa Catarina (SC)</option>
    <option value="SP">São Paulo (SP)</option>
    <option value="SE">Sergipe (SE)</option>
    <option value="TO">Tocantins (TO)</option>
</select>
                <label for="cidade_final" class="form-label">Informe o cidade final:</label>
                <input type="text" name="cidade_final" id="cidade_final" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">
                    Salvar
                </button>
            </div>
        </div>
    </form>

</x-app-layout>