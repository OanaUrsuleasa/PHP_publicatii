
<div class="ui middle aligned center aligned grid" id='continut_form' style="display: grid;">
    <div class="column" id='column' style="display:grid">
        <h2 class="ui header" id='segment_h2'>
            <div class="content" id='titlu'>
                Publicatie
            </div>
        </h2>
        <form id='frm_publicatie' class="ui large form" autocomplete="off">
            <div class="ui stacked segment">
                <div class="field">
                    <label>Titlu</label>
                        <input id='int_titlu' type="text" name="titlu_publicatie" placeholder="Titlu" />
                </div>
                
                <div class="field">
                    <label>Sumar</label>
                    <textarea id="continut_sumar" name="sumar"></textarea>
                </div>

                <div class="field">
                  <label>Tip asociat</label>
                  <div class="ui selection dropdown">
                      <input type="hidden" name="tip_asociat">
                      <i class="dropdown icon"></i>
                      <div class="default text"> Selecteaza tip</div>
                      <div class="menu">
                          <div class="item" data-value="Articol">Articol</div>
                          <div class="item" data-value="Client report">Client report</div>
                          <div class="item" data-value="Monograf">Monograf</div>
                      </div>
                  </div>
                </div>
                  <div class="field">
                       <label>Fiser</label>
                       <div class="ui teal labeled icon button" id="add_document">
                            Adauga un document
                            <i class="add icon"></i>
                       </div>
                      <input id="denumire_doc" typpe="text" disabled/>
                  </div>
                    <div class="field">
                        <label>Autor</label>
                            <input id='autor' type="text" name="nume_autor" placeholder="Autor" />
                        </div>
                    </div>
                <div id='btn_salvare' class="ui fluid large teal submit button" onclick='form_publicatie()'>Salvare</div>     
                <div class="ui error message"></div>
            </div>
        </form>       
    </div>
</div>
<div class="ui middle aligned center aligned grid" id="afisare_publicatie"></div>



<div class="ui modal" id="modal_articol" style="display:none;">
  <i class="close icon"></i>
  <div class="header">
    Adauga detalii despre articol :
  </div>
  <div class="content">
        <form class="ui form" id='frm_articol'>            
                    <div calss="field">
                       <label>Revista in care a aparut</label>
                       <input id='int_revista' type="text" name="revista" placeholder="Titlu revista" />
                    </div> 
                    <div calss="field">
                       <label>Pagina de inceput</label>
                       <input id='int_paginceput' type="number" name="pag_inceput" step="1" min="1" />
                    </div>
                    <div calss="field">
                       <label>Pagina de final</label>
                       <input id='int_pagfinal' type="number" name="pag_final" step="1" min="1"/>
                    </div>       
        </form>
  </div>

  <div class="actions">
    <div class="ui button submit" id="btn_articol" onclick="form_articol();">Salveaza</div>
      
  </div>
</div>

<div class="ui modal" id="modal_client" style="display:none;">
  <i class="close icon"></i>
  <div class="header">
    Adauga detalii despre client :
  </div>
  <div>
        <form class="ui form segment" id='frm_client'>

            <div calss="field modal">
               <label>Nume client</label>
               <input id='int_client' type="text" name="client" placeholder="Nume client" />
            </div> 
            <div calss="field modal">
               <label>Nume proiect</label>
               <input id='int_proiect' type="text" name="proiect" placeholder="Nume proiect" />
            </div> 
            
               
        </form>
  </div>

  <div class="actions">
    <div class="ui button">Renunta</div>
    <div class="ui button" id="btn_client" onclick="form_client();">Salveaza</div>
  </div>
</div>


<div class="ui modal" id="modal_monograf" style="display:none;">
  <i class="close icon"></i>
  <div class="header">
    Adauga detalii despre monograf :
  </div>
  <div>
        <form class="ui form segment" id='frm_monograf'>

            <div calss="field modal">
               <label>Subiect tratat</label>
               <input id='int_subiect' type="text" name="subiect" placeholder="Subiect" />
            </div> 
            <div calss="field modal">
               <label>Numar pagini</label>
               <input id='int_nrpag' type="number" name="nr_pag" step="1" min="1" />
            </div>           
        </form>
  </div>

  <div class="actions">
    <div class="ui button">Renunta</div>
    <div class="ui button" id="btn_monograf" onclick="form_monograf();">Salveaza</div>
  </div>
</div>

<div class="ui modal" id="modal_upload" style="display:none;">
  <i class="close icon"></i>
  <div class="header">
    Adauga document :
  </div>
  <div class="ui content Upload">
    <input type="file" id="fisier" name="file" />                
  </div>

  <div class="actions">
   <input type="button" class="ui fluid large submit button" value="Upload" id="btn_upload" onclick="upload();"/>
  </div>
</div>