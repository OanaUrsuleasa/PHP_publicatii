$(document).ready(function () {
    sessionStorage.clear();
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
    $('#add_document').on('click', function () {
        $('#modal_upload').modal('show');
    });

   /* $('#modal_articol').modal({
        closable: false,
        onApprove: function () {
            $('#frm_articol').submit();
        }
    });*/


});

function form_publicatie() {
    
    if ($('#frm_publicatie').form('is valide')) {
        var titlu = $('#int_titlu').val();
        sessionStorage.setItem('titlu', titlu);

        var sumar = $('#continut_sumar').val();
        sessionStorage.setItem('sumar', sumar);

        var autor = $('#autor').val();
        sessionStorage.setItem('autor', autor);

        var path = location.href.split('/publicatie');

        var doc = sessionStorage.getItem('document').split('C:\\xampp\\htdocs\\publicatie/upload/');
        var document = doc[1];
        $.ajax({
            method: 'POST',
            url: path[0] + '/publicatie/ajax.php',
            data: {
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
                autor: autor,
                document: document
            },
            success: function (response) {
                $('#afisare_publicatie').html(response);
                $('#segment_publicatie').css('display', 'none');
                $('#continut_form').css('display', 'none');
            }
        });
        1
    } else {
        $('#frm_publicatie')
            .form({
                inline: true,
                on: 'blur',
                fields: {
                    titlu: {
                        identifier: 'titlu_publicatie',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Va rugam sa introduceti un titlu!'
                            }
                        ]
                    },
                    sumar: {
                        identifier: 'sumar',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Va rugam sa introduceti un sumar!'
                            },
                            {
                                type: 'maxLength[100]',
                                prompt: 'Va rugam sa introduceti un sumar de maxim 100 de caractere!'
                            }
                        ]
                    },
                    dropdown: {
                        identifier: 'tip_asociat',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Please select a dropdown value'
                            }
                        ]
                    },
                    autor: {
                        identifier: 'nume_autor',
                        rules: [
                            {
                                type: 'empty',
                                prompt: 'Va rugam sa introduceti un autor!'
                            }
                        ]
                    },

                }
            });
    }
}

function form_articol() {
      var revista = $('#int_revista').val();
    var paginceput = $('#int_paginceput').val();
    var pagfinal = $('#int_pagfinal').val();
    sessionStorage.setItem('revista', revista);
    sessionStorage.setItem('pag_inceput', paginceput);
    sessionStorage.setItem('pag_final', pagfinal);
    $('#modal_articol').modal("hide");

                /*$('#frm_articol')
                    .form({
                        inline: true,
                        on: 'blur',
                        fields: {
                            revista: {
                                identifier: 'revista',
                                rules: [
                                    {
                                        type: 'empty',
                                        prompt: 'Va rugam sa introduceti revista in care a aparut!'
                                    }
                                ]
                            },
                            pag_inceput: {
                                identifier: 'pag_inceput',
                                rules: [
                                    {
                                        type: 'number',
                                        prompt: 'Va rugam sa introduceti pagina de inceput'
                                    }
                                ]
                            },
                            pag_final: {
                                identifier: 'pag_final',
                                rules: [
                                    {
                                        type: 'number',
                                        prompt: 'Va rugam sa introduceti pagina de final!'
                                    }
                                ]
                            },
                        },
                        onSuccess: function(){
                            console.log('valid');
                            
                            }
                    });*/
            
    
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

function upload() {
    var fd = new FormData();
    var files = $('#fisier')[0].files[0];
    fd.append('file', files);

    var path = location.href.split('/publicatie');
    $.ajax({
        method: 'POST',
        url: path[0] + '/publicatie/upload/upload.php',
        data: fd,
        contentType: false,
        processData: false,
        success: function (response) {
            if (response != 0) {
                sessionStorage.setItem('document', response);
                $('#modal_upload').modal('hide');
                $('#add_document').css('display', 'none');
                var doc = sessionStorage.getItem('document').split('C:\\xampp\\htdocs\\publicatie/upload/');
                $('#denumire_doc').val(doc);
                alert('Fisier incarcat!');
 
            } else {
                alert('Fisierul NU se poate incarca!!');
            }
        }
    });
}
