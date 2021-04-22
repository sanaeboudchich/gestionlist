    
    <h1 class="text-center my-5" >Les listes publique</h1>

    
    <?php foreach ($imgs as $img): ?>
        <div class="row my-5" style="width: 25em; ">
    <?php if ($img->visibility == 1) :?>

    <?php if ($img->picture != null) : ?>
        
    <?= $this->Html->image('data/todolists/'.$img->picture,['alt'=>$img->title]) ?>
    <?php endif; ?>
    <?php if ($img->picture == null) : ?>
        <img src="https://images-ext-1.discordapp.net/external/tvwG0a8im3V7mGl9HzPJmKQQfmEsCFI32W6cJwLR3Zo/https/bulma.io/images/placeholders/128x128.png">
    <?php endif; ?>



    <p>liste de : <?= $img->user->username ?></p>
    <?= $this->Form->postLink('Voir le profil', ['controller'=>'Users','action' => 'index', $img->user->id]) ?> 

    <p>Creer le : <?= $img->created ?></p>
    <p>Modifier le : <?= $img->modified ?></p>





    
    <h4>elements (<?= count($img->items) ?> )  </h4>
    <?php foreach ($img->items as $c ): ?>

    <p> Deadline :  <?= $c->deadline ?>   </p>
    <?php if ($c->status == 1) : ?>
          <div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
  <p> <?= $c->content  ?>   </p> 
</div>
<?php endif; ?>
<?php if ($c->status == 0) : ?>
          <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>
  <p> <?= $c->content  ?>   </p> 
</div>
<?php endif; ?>
   
    <?php endforeach ?>

    <?= $this->Form->postLink('Copier', ['controller'=>'Todolists','action' => 'add',$img->id]) ?> 

   

    <?php endif; ?>
    </div>
    <?php endforeach ?>







    
