jQuery(function() {
    if(jQuery) {console.log("jQuery");}
    $("select[name='select-casa'], select[name='select-visitante'], input[name='input-resultado-confronto-casa'], input[name='input-resultado-confronto-visitante']").on("keyup keyupress blur change", function(e) {
        e.stopImmediatePropagation();
        e.preventDefault();
        e.stopPropagation();
        $(':focus').blur();

        let obj = $(this).parents(".getResultado");
        let confronto = obj.attr("id");
        let casa = obj.find("select[name='select-casa']");
        let visitante = obj.find("select[name='select-visitante']");
        let golscasa = obj.find("input[name='input-resultado-confronto-casa']");
        let golsvisitante = obj.find("input[name='input-resultado-confronto-visitante']");
        let objeto = [{
            "confronto": confronto,
            "golscasa": golscasa.val(),
            "user": localStorage.getItem('user'),
            "casa": casa.find(":selected").val(),
            "golsvisitante": golsvisitante.val(),
            "visitante": visitante.find(":selected").val(),
        }];

        if(objectLength(objeto) == 0) {
            console.log("submetendo", objeto);
            submitObjeto(objeto);
        }
    });
});

/**
 ***************************************
 ***************************************
 ***************************************
 */
function submitObjeto(objeto) {
    $.ajax({
        type: "POST", data: (objeto[0]),
        url: 'http://127.0.0.1:4800/api/confrontos-palpites',
        success: function(response)
        {
            let jsonData = response.data;
            // if (jsonData.success == "1") { console.log("1"); }
            // if (jsonData.error == "1") { console.log("2"); }
            return true;
        }
    });
}

/**
 ***************************************
 ***************************************
 ***************************************
 */
function objectLength(object) {
    let contador = 0;
    object.forEach(el => {
        if(el.conforto == ""){contador++}
        if(el.casa == ""){contador++}
        if(el.golscasa == ""){contador++}
        if(el.visitante == ""){contador++}
        if(el.golsvisitante == ""){contador++}
    }); return contador;
}
