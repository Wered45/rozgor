<?php
include 'temp/headr.php';
$sql_user = 'select * from users where id_role = 2';
$works = $conect->query($sql_user);

if (isset($_POST['tesk'])) {
    $name_task = $_POST['name_task'];
    $opic = $_POST['opic'];
    $date_srart = $_POST['date_srart'];
    $date_end = $_POST['date_end'];
    $user = $_POST['user'];
    
    $sql = 'insert into new_task (name_task, opic, date_srart, date_end, id_user) values ("'.$name_task.'", "'.$opic.'", "'.$date_srart.'", "'.$date_end.'", "'.$user.'")';
    $conect->query($sql);
    $task_id = $conect->insert_id;
    
    $message = 'Уведомление от руководителя '.$_SESSION['name'].' на задание '. $name_task.' ';
    $sql = 'insert into notifications (message,id_user ) values ("'.$message.'", '.$user.')';
    $conect->query($sql);

    header('Location: meneger_task.php');
    exit;
}

$sql_task = 'select * from new_task 
join users on new_task.id_user = users.id_user';
$task = $conect->query($sql_task);

if (isset($_POST['delet'])) {
  $id_task = $_POST['id_task'];
 
  $sql_delet = 'delete from new_task where id_task = "'.$id_task.'"';
  $conect->query($sql_delet);
  header('Location: meneger_task.php');
  exit;
}

if(isset($_POST['edit_task'])){
  $name_task = $_POST['name_task']; 
  $opic = $_POST['opic'];
  $date_srart = $_POST['date_srart'];
  $date_end = $_POST['date_end'];
  $id_user = $_POST['id_user'];
  $status = $_POST['status'];
  $id_tast = $_POST['id_task'];

  $sql_edit_task = 'update new_task set name_task="'.$name_task.'", opic="'.$opic.'", date_srart="'.$date_srart.'", date_end="'.$date_end.'", id_user="'.$id_user.'", status="'.$status.'" where id_task='.$id_tast;
  $conect->query($sql_edit_task);
  header('Location: meneger_task.php');
  exit;
}
?>
<div class="container mt-4 mb-3 border border-primary border-3 rounded">
    <h3 class="text-center">Добавить задание</h3>
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Название задания</label>
                <input type="text" name="name_task" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Описание задания</label>
                <input type="text" name="opic" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Дата начала</label>
                <input type="date" name="date_srart" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Дата завершения</label>
                <input type="date" name="date_end" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <select class="form-select" name="user" aria-label="Default select example">
                    <?php while($row = $works->fetch_assoc()){ ?>
                    <option value='<?=$row['id_user']?>'><?=$row['fio']?></option>
                    <?php }?>
                </select>
            </div>
            <button type="submit" name="tesk" class="btn btn-primary text-warning">Добавить задание</button>
        </form>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Название задание</th>
      <th scope="col">Описание задание</th>
      <th scope="col">Дата начала</th>
      <th scope="col">Дата завершения</th>
      <th scope="col">Сотрудник</th>
      <th scope="col">Статус</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = $task->fetch_assoc()){?>
      <? $works_new = $conect->query($sql_user); ?>
    <tr>
      <form  method="post">
      <th scope="row">
        <input type='text' name='name_task' value="<?=$row['name_task']?>">
      </th>
      <th scope="row">
    <input type='text' name='opic' value="<?=$row['opic']?>">
    </th>
      <th scope="row">
        <input type='date' name='date_srart' value="<?=$row['date_srart']?>">

    </th>
      <th scope="row">
        <input type='date' name='date_end' value="<?=$row['date_end']?>">

    </th>
      <th scope="row">
        <select name="id_user">
          <? while($row2=$works_new->fetch_assoc()): ?>
            
            <?php if($row['id_user'] == $row2['id_user']): ?>
                  <option selected value="<?=$row2['id_user']?>"><?=$row2['fio']?></option>
            <?php else: ?>
                  <option value="<?=$row2['id_user']?>"><?=$row2['fio']?></option>
            <?php endif; ?>
            <?php endwhile; ?>
        </select>

    </th>
      <th scope="row">
        <input type='text' name='status' value="<?=$row['status']?>">
                      

    </th>

      <th scope="row">
          <input type="submit" name='edit_task' class="btn btn-primary text-warning" value="Редактировать">

        <form method="post">
        <input type="hidden" name="id_task" value="<?=$row['id_task']?>">
        <input type="submit" name="delet" class="btn btn-danger" value="Удалить">
    </form>
  </th>
    </form>
    </tr>
    <?php }?>
  </tbody>
</table>
<?php
include 'temp/footer.php';
?>