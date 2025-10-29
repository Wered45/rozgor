<?php 
include 'temp/headr.php';
$sql_notif = 'select * from notifications where id_user = '.$_SESSION['id_user'];
$data_notif = $conect->query($sql_notif);
?>
<h2 class="text-center">Мои уведомление</h2>
<table class="table">
  <thead>
    <tr>
        <th>#</th>
      <th scope="col">Сообщение</th>
      <td>Статус</td>
    </tr>
  </thead>
  <tbody>
    
        <? $k=1; ?>
        <?php while($row = $data_notif->fetch_assoc()){?>
            <tr>
            <?

                $sql_update = 'update notifications set red = 1 where id_user = '.$_SESSION['id_user'];
                $conect->query($sql_update);
            ?>
            <td><?=$k?></td>
           <td><?=$row['message']?></td>
           <td>
            <? if($row['red'] == 0): ?>
                Не прочитана
            <? else: ?>
                Прочитана
            <? endif; ?>
           </td>
           <? $k++; ?>
           </tr>
        <?php }?>
    
  </tbody>
</table>

<?php 
include 'temp/footer.php';
?>