
<div class="text-center my-5" >
<h1 class="text-center my-5">Modifier un élément </h1>
<?= $this->Form->create($q) ?>

  <div class="mb-3">
  <?= $this->Form->control('content', ['label' => 'Contenu', 'class' => 'lasuperclass']) ?>
  </div>
  <div class="mb-3">
    
  <?= $this->Form->control('status',['type'=>'checkbox']) ?>
  </div>
 
  <?= $this->Form->button('Modifier') ?>

<?= $this->Form->end() ?>

</div>