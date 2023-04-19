(function ( $ ) {

    $.fn.ufs = function(options) {

        var select = $(this);

        var settings = $.extend({
            'default': select.attr('default'),
            'onChange': function(uf){}
        }, options );

        $.get(APP_URL+"/ufs", null, function (json) {

            $.each(json, function (key, value) {
                select.append('<option value="' + value.uf + '" '+(settings.default==value.uf?'selected':'')+'>' + value.uf + '</option>');
            })

            settings.onChange(select.val());

        }, 'json');

        select.change(function(){
            settings.onChange(select.val());
        });
    };


    $.fn.cidades = function(options) {

        var select = $(this);

        var settings = $.extend({
            'default': select.attr('default'),
            'onChange': function(cidade){}
        }, options );


        if(settings.uf == null)
            console.warn('Nenhuma UF informada');
        else{

            select.html('<option>Carregando..</option>');

            $.get(APP_URL+"/cidades/"+settings.uf, null, function (json) {
                select.html('<option value="">Selecione</option>');

                $.each(json, function (key, value) {
                    select.append('<option value="' + value.nome + '" '+(settings.default==value.nome?'selected':'')+'>' + value.nome + '</option>');
                })

            }, 'json');

        }
    };

}( jQuery ));
