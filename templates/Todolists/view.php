
<h1 class="text-center my-5" >Mes listes</h1>

<?php foreach ($user as $t)  : ?>
  <div class="row my-5" style="width: 25em; ">
<?php if ($t->visibility == 1) : ?>
<?php if ($t->picture != null) : ?>
    
    <?= $this->Html->image('data/todolists/'.$t->picture,['alt'=>$t->title]) ?>
    <?php endif; ?>
    <?php if ($t->picture == null) : ?>
        <img src="https://images-ext-1.discordapp.net/external/tvwG0a8im3V7mGl9HzPJmKQQfmEsCFI32W6cJwLR3Zo/https/bulma.io/images/placeholders/128x128.png" >
    <?php endif; ?>
    <?php endif; ?>
    <div class="card-body">
    <h3 class="card-text"><?= $t->title ?></h3>
  
    
 <?php foreach ($t as $items)  : ?>
   
        <h5>l'element : </h5>
        <p class="card-text">Deadline :  <?= $items->deadline ?>   </p>
        <?php if ($items->status == 1) : ?>
          <div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
  <p> <?= $items->content  ?>   </p> 
</div>
<?php endif; ?>
<?php if ($items->status == 0) : ?>
          <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>
  <p> <?= $items->content  ?>   </p> 
</div>
<?php endif; ?>
     
</div>

 
<?php endforeach; ?>
</div>
</div>
<?php endforeach; ?>