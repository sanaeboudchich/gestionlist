
    <div class="text-center my-5" >
<h1 >Modifier mon profile</h1>
<?= $this->Form->create($q,['enctype'=>'multipart/form-data']) ?>

  <div class="mb-3">
  <?= $this->Form->control('avatar',['label'=>'Ajouter une photo de profile','type'=>'file']) ?>
  </div>
  <div class="mb-3">
    
  <?= $this->Form->control('username',['label'=>'username']) ?>
  </div>
  <div class="mb-3">
    
  <?= $this->Form->control('newpassword',['label'=>'password','type'=>'password']) ?>
    </div>
    <?= $this->Form->button('Modifier') ?>

<?= $this->Form->end() ?>

</div>