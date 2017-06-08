jQuery(function($){
    correios.init( 'N6wIyrrU4nOeE2bLWHA0F3yHhQpnVSAc', 'yi1KPDccnKoCnSIEe8W8tHhv6pKet0i3bHvopHL5Dlvjtmng' );
    $('#cep').correios( '#logradouro', '#bairro', '#cidade', '#uf', '#loading', '#numero' );

    //MASCARAS DE ENTRADA
    $("#cep").mask("99999-999"); 
    $("#data_nascimento").mask("99/99/9999"); 

    jQuery("#telefone_celular")
        .mask("(99) 9999-9999?9")
        .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);  
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-999?9");  
            } else {  
                element.mask("(99) 9999-9999?9");  
            }  
        });
});