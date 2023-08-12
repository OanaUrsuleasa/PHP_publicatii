
<div class="ui middle aligned center aligned grid" id='continut_log'>
    <div class="column" id='column' style="display:grid">
        <h2 class="ui header" id='segment_h2'>
            <div class="content" id='titlu'>
                Publicatie
            </div>
        </h2>
        <form id='myForm' class="ui large form" autocomplete="off" action=''>
            <div class="ui stacked segment">
                <div class="field">
                    <label>Titlu</label>
                        <input id='titlu' type="text" name="titlu" placeholder="Titlu" />
                </div>
                
                <div class="field">
                    <label>Sumar</label>
                    <textarea></textarea>
                </div>

                <div class="field">
                  <label>Tip asociat</label>
                  <div class="ui selection dropdown">
                      <input type="hidden" name="gender">
                      <i class="dropdown icon"></i>
                      <div class="default text">tip</div>
                      <div class="menu">
                          <div class="item" data-value="0">Articol</div>
                          <div class="item" data-value="1">Client report</div>
                          <div class="item" data-value="2">Monograf</div>
                      </div>
                  </div>
                </div>
                  <div class="field">
                       <label>Fiser</label>
                       <input type="file" multiple>
                  </div>
                    <div class="field">
                        <label>Autor</label>
                            <input id='autor' type="text" name="autor" placeholder="Autor" />
                        </div>
                    </div>
                <div id='btn_salvare' class="ui fluid large teal submit button" onclick='salvare_cont()'>Salvare</div>
                    <div class="ui error message"></div>
            </div>
        </form>       
    </div>
</div>
