$(document).ready(function () {
    $('.ui.selection.dropdown').dropdown({
        clearable: true,
        onChange: function (value) {
            sessionStorage.setItem('tip_asociat', value);
            if (value == 'Articol') {
                $('#modal_articol').modal("show");
            } else if (value == 'Client report') {
                $('#modal_client').modal("show");
            } else if (value == 'Monograf') {
                $('#modal_monograf').modal('show');
            }
       }
    });  
});

function form_publicatie() {
    var titlu = $('#int_titlu').val();
    sessionStorage.setItem('titlu', titlu);

    var sumar = $('#continut_sumar').val();
    sessionStorage.setItem('sumar', sumar);

    var autor = $('#autor').val();
    sessionStorage.setItem('autor', autor);
   
    var path = location.href.split('/publicatie');
    $.ajax({
        method: 'POST',
        url: path[0] + '/publicatie/ajax.php',
        data:{
        actiune: 'form_publicatie',
            titlu: titlu,
            sumar: sumar,
            tip_asociat: sessionStorage.getItem('tip_asociat'),
            revista: sessionStorage.getItem('revista'),
            pag_inceput: sessionStorage.getItem('pag_inceput'),
            pag_final: sessionStorage.getItem('pag_final'),
            client: sessionStorage.getItem('client'),
            proiect: sessionStorage.getItem('proiect'),
            subiect: sessionStorage.getItem('subiect'),
            nr_pag: sessionStorage.getItem('nr_pag'),
            autor:autor
    },
        success: function (response) {
            $('#segment_publicatie').css('display', 'none');
            $('#continut_form').css('display', 'none');
            $('#afisare_publicatie').html(response);

        }
        });
}

function form_articol() {
    var revista = $('#int_revista').val();
    sessionStorage.setItem('revista', revista);

    var paginceput = $('#int_paginceput').val();
    sessionStorage.setItem('pag_inceput', paginceput);

    var pagfinal = $('#int_pagfinal').val();
    sessionStorage.setItem('pag_final', pagfinal);

    $('#modal_articol').modal("hide");
}

function form_client() {
    var client = $('#int_client').val();
    sessionStorage.setItem('client', client);

    var proiect = $('#int_proiect').val();
    sessionStorage.setItem('proiect', proiect);

    $('#modal_client').modal("hide");
}

function form_monograf() {
    var subiect = $('#int_subiect').val();
    sessionStorage.setItem('subiect', subiect);

    var nr_pag = $('#int_nrpag').val();
    sessionStorage.setItem('nr_pag', nr_pag);

    $('#modal_monograf').modal('hide');
}