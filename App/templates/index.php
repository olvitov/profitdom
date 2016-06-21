
<?php include __DIR__ . '/index/header.php'; ?>


<section id="tables">
  <div class="page-header">
    <h1>Таблица Пользователей</h1>
  </div>
  
  <table class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Пользователь</th>
        <th>EMAIL</th>
        <th>Пароль</th>
      </tr>
    </thead>
    <?php foreach ($this->userlist as $user) :?>
    <tbody>
      <tr>
        <td><?php echo $user->id;?></td>
        <td><?php echo $user->user;?></td>
        <td><?php echo $user->email;?></td>
        <td><?php echo $user->pass;?>


    <?php endforeach; ?>
    </tbody>
  </table>
</section>

     <hr>




    <?php include __DIR__ . '/index/footer.php'; ?>


