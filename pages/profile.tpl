<?php

$data=$this->get_profile($_SESSION['id']);

?>

<div class="new_container">
    <span class="profile">
    <img height="300px" src="img/<?=$data['image']?>">
    <span class="left"><strong>Имя: </strong><?=$data['fname']?><br/>
    <strong>Фамилия: </strong><?=$data['lname']?><br/>
    <strong>Емэйл: </strong><?=$data['mail']?><br/>
    <strong>Дата пождения: </strong><?=$data['birthdate']?><br/>
    <strong>Телефон: </strong><?=$data['phone']?></span>
        </span>


    <form action="index.php?nav=profile" method='POST' onsubmit="return removeUser()">
        <button type='submit' width="300px" class="btn btn-lg btn-danger btn-block" name='delete'>Удалить профиль</button>
    </form>

</div>


<script>
    function removeUser(){
        if(confirm('Вы точно хотите удалить свой профиль?'))
        {
            return true;
        }
        return false;
    }
</script>