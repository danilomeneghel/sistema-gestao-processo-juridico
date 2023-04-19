$('#uf').ufs({
    onChange: function(uf){
        $('#cidade').cidades({uf: uf});
    }
});
