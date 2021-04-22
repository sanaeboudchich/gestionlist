
<h1 class="text-center my-5" >Mes listes</h1>
<?php foreach ($user->todolists as $t)  : ?>
<div class="row my-5" style="width: 25em; ">
<?php if ($t->picture != null) : ?>
     <?= $this->Html->image('data/todolists/'.$t->picture,['alt'=>$t->title]) ?>
    <?php endif; ?>
    <?php if ($t->picture == null) : ?>
        <img src="https://images-ext-1.discordapp.net/external/tvwG0a8im3V7mGl9HzPJmKQQfmEsCFI32W6cJwLR3Zo/https/bulma.io/images/placeholders/128x128.png" class="rounded mx-auto d-block">
    <?php endif; ?>
  
  <div class="card-body">
    <h3 class="card-text"><?= $t->title ?></h3>
  <?= $this->Form->postLink('X',['controller'=>'Todolists','action'
=>'delete',$t->id], ['class'=> 'button'],['confirm'=>'sur?']) ?>



<?= $this->Html->link('M',['controller'=>'Todolists','action'
=>'edit',$t->id], ['class'=> 'button'],['confirm'=>'sur?']) ?>
 
 <?php foreach ($t->items as $item)  : ?>
        <h5>l'element : </h5>
        <p class="card-text">Deadline :  <?= $item->deadline ?>   </p>
        <?php if ($item->status == 1) : ?>
          <div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
  <p> <?= $item->content  ?>   </p> 
</div>
<?php endif; ?>
<?php if ($item->status == 0) : ?>
          <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>
  <p> <?= $item->content  ?>   </p> 
</div>
<?php endif; ?>
        
<?= $this->Form->postLink('M', ['controller'=>'Items','action' => 'edit', $item->id]) ?> 
<?= $this->Form->postLink('X', ['controller'=>'Items','action' => 'delete', $item->id]) ?> 


 
<?php endforeach; ?>
</div>
</div>

        <div class="text-center my-5" >
<h1 class="text-center my-5">Ajouter un element</h1>
<?= $this->Form->create($newItem, ['url'=>['controller'=>'Items','action'=>'new']]) ?>
<?= $this->Form->hidden('todolist_id',['value'=>$t->id]) ?>
  <div class="mb-3">
  <?= $this->Form->control('content', ['label'=>'Ajouter un element']) ?>
  </div>
  <div class="mb-3">
    
  <?= $this->Form->control('deadline', ['label'=>'deadline d element']) ?>
  </div>
  <div class="mb-3">
    
  <?= $this->Form->control('status',['type'=>'checkbox']) ?>
  </div>
  <?= $this->Form->button('Ajouter') ?>
        <?= $this->Form->end() ?>

</div>
<?php endforeach; ?>