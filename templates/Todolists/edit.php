

<div class="text-center my-5" >
<h1 class="text-center my-5">Modifier la liste </h1>
<?= $this->Form->create($q,['enctype'=>'multipart/form-data']) ?>

  <div class="mb-3">
  <?= $this->Form->Control('picture',['label'=>'votre fichier','type'=>'file']) ?>
  </div>
  <div class="mb-3">
    
  <?= $this->Form->Control('title',['label'=>'title']) ?>
  </div>
  <div class="mb-3">
    
  <?= $this->Form->control('visibility',['type'=>'checkbox']) ?>
  </div>
  <?= $this->Form->button('Modifier') ?>


<?= $this->Form->end() ?>

</div>