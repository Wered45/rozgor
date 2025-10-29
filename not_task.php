<?php
include 'temp/headr.php';
$sql = 'select * from new_task where id_user = "'.$_SESSION['id_user'].'"';
$task = $conect->query($sql);
if(isset($_POST['edit_status'])){
    $id_task = $_POST['id_task'];
    $status = $_POST['status'];
    $sql = 'update new_task set status = "'.$status.'" where id_task = '.$id_task;
    $conect->query($sql);
    header('Location: not_task.php');
    exit;
}
?>
<h2 class="text-center">Мои задания</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Название задание</th>
      <th scope="col">Описание</th>
      <th scope="col">Дата начала</th>
      <th scope="col">Дата завершения</th>
      <th scope="col">Статус</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php while($row = $task->fetch_assoc()){?>
 
            <? if(date('Y-m-d') > $row['date_end'] && $row['status'] == 'в работе'): ?>
                 <th scope="row"><?=$row['name_task']?></th>
                <th scope="row"><?=$row['opic']?></th>
                <th scope="row"><?=$row['date_srart']?></th>
                <th scope="row"><?=$row['date_end']?></th>
                <th scope="row"><?=$row['status']?></th>
                <th scope="row">
                    Просрочена
                </th>
            <? else: ?>
                  <th scope="row"><?=$row['name_task']?></th>
                <th scope="row"><?=$row['opic']?></th>
                <th scope="row"><?=$row['date_srart']?></th>
                <th scope="row"><?=$row['date_end']?></th>
                <th scope="row"><?=$row['status']?></th>
                <th scope="row"><form method="POST">
                    <input type="hidden" name="id_task" value="<?=$row['id_task']?>">
                    <select name="status">
                        <? if($row['status'] == 'в работе'): ?>
                            <option selected value="в работе">в работе</option>
                            <option  value="выполнена">выполнена</option>
                        <? else: ?>
                            <option  value="в работе">в работе</option>
                            <option selected value="выполнена">выполнена</option>
                        <? endif; ?>
                    </select>
                <input type="submit" name="edit_status" class="btn btn-warning" value="Изменит">
                </form></th>
            <? endif; ?>
          
        <?php }?>
    </tr>
    </tr>
  </tbody>
</table>
<?php
include 'temp/footer.php';
?>