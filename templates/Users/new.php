
<div class="text-center my-5" >
<h1 class="text-center my-5">Créer un compte</h1>
<?= $this->Form->create($new) ?>

  <div class="mb-3">
  <?= $this->Form->control('username') ?>
  </div>
  <div class="mb-3">
    
  <?= $this->Form->control('password') ?>
  </div>
  <?= $this->Form->button('Créer un compte') ?>


  <?= $this->Form->end() ?>

</div>