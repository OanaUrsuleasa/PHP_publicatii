<div class="ui container" style="padding-top: 50px; padding-bottom: 50px;">
    <div class="ui vertical segment">
       <div class="ui stackable grid" >
          <div class="column">
        <h1 class="ui dividing header"> <?php echo $titlu;?></h1>
              
        <p><?php echo $sumar;?></p>
        <div class="ui divider"></div>

       
         <div class="ui feed">
           <div class="event">
            <div class="label">
              <img src="https://semantic-ui.com/images/avatar/small/helen.jpg">
            </div>
            <div class="content">
                <div class="date">
                    3 days ago
                </div>
                <div class="summary">
                    <?php echo $autor;?>
                </div>
                <?php
                if ($tip_asociat == 'Articol') {
                    ?>
                <div class="extra text">
                    <p>Revista in care a aparut : <?php echo $revista; ?></p>
                    <p>Pagini : <?php echo $paginceput.'-'.$pagfinal;?></p>
                </div>
                <?php }else if( $tip_asociat == 'Client report'){
                    ?>
                    <div class="extra text">
                       <p>Nume client: <?php echo $client; ?></p>
                        <p>Nume proiect : <?php echo $proiect;?></p>
                    </div>
                    <?php
                }else if( $tip_asociat == 'Monograf'){
                    ?>
                    <div class="extra text">
                       <p>Subiect tratat: <?php echo $subiect; ?></p>
                        <p>Numar pagini : <?php echo $nr_pag;?></p>
                    </div>
                    <?php
                }?>
            </div>
           </div>
        </div>

              <div class="ui divider"></div>
       </div>
    </div>
  </div>
</div>