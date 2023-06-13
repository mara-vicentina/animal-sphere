function editClient(clienteId, data) {
    data = JSON.parse(data);
    $('#edicao-clientes input[name="client_id"]').val(clienteId);
    $('#edicao-clientes input[name="nome_completo"]').val(data.name);
    $('#edicao-clientes input[name="email"]').val(data.email);
    $('#edicao-clientes input[name="cpf"]').val(data.cpf);
    $('#edicao-clientes input[name="telefone"]').val(data.phone);
    $('#edicao-clientes input[name="cep"]').val(data.cep);
    $('#edicao-clientes input[name="rua"]').val(data.street);
    $('#edicao-clientes input[name="numero"]').val(data.number);
    $('#edicao-clientes input[name="complemento"]').val(data.complement);
    $('#edicao-clientes input[name="bairro"]').val(data.neighborhood);
    $('#edicao-clientes input[name="cidade"]').val(data.city);
    $('#edicao-clientes input[name="estado"]').val(data.state);

    const modalEdicao = new bootstrap.Modal($('#edicao-clientes'), {});
    modalEdicao.show();
}

function editAnimal(animalId, data) 
{
    data = JSON.parse(data);
    data_sex = data.sex;
    data_castrated_animal = data.castrated_animal;

    $('#edicao-animais input[name="animal_id"]').val(animalId);
    $('#edicao-animais input[name="nome_animal"]').val(data.name);
    $('#edicao-animais input[name="especie"]').val(data.species);
    $('#edicao-animais input[name="raca"]').val(data.race);

    if(data_sex == 0) {
        $('#edicao-animais input[name="sexo"]')[0].checked = true;
    } else {
        $('#edicao-animais input[name="sexo"]')[1].checked = true;
    }

    if(data_castrated_animal == 0) {
        $('#edicao-animais input[name="animal_castrado"]')[1].checked = true;
    } else {
        $('#edicao-animais input[name="animal_castrado"]')[0].checked = true;
    }
    
    $('#edicao-animais input[name="data_nascimento"]').val(data.birth_date);
    $('#edicao-animais select[name="cliente_id"]').val(data.client_id);

    const modalEdicao = new bootstrap.Modal($('#edicao-animais'), {});
    modalEdicao.show();
}

function editFluxoCaixa(fluxoCaixaId, data) 
{
    data = JSON.parse(data);
    data_type = data.type;

    $('#edicao-fluxo-caixa input[name="fluxo_caixa_id"]').val(fluxoCaixaId);
    $('#edicao-fluxo-caixa input[name="nome"]').val(data.name);

    if(data_type == 0) {
        $('#edicao-fluxo-caixa input[name="tipo"]')[1].checked = true;
    } else {
        $('#edicao-fluxo-caixa input[name="tipo"]')[0].checked = true;
    }
    
    $('#edicao-fluxo-caixa input[name="data"]').val(data.date);
    $('#edicao-fluxo-caixa input[name="valor"]').val(data.value);

    const modalEdicao = new bootstrap.Modal($('#edicao-fluxo-caixa'), {});
    modalEdicao.show();
}