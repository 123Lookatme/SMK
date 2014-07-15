<div class="new_container">
    <h2 class="form-signin-heading">Регистрация</h2>
    <span id="error"></span>
    <form method="POST" class="form-horizontal" role="form" id="register" >
            <div class="form-group">
                <label for="FirstName" class="col-sm-2 control-label">Имя</label>
                <div class="col-sm-10">
                    <input  type="text" class="form-control" id="FirstName" placeholder="First name">
                    <span class="error"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="LastName" class="col-sm-2 control-label">Фамилия</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="LastName" placeholder="Last name">
                    <span class="error"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="Login" class="col-sm-2 control-label">Логин</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Login" placeholder="Login">
                    <span class="error"></span>
                </div>
            </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Введите ваш емэил</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" placeholder="Email">
                        <span class="error"></span>
                    </div>
                </div>
            <div class="form-group">
                <label for="pass" class="col-sm-2 control-label">Введите пароль</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pass" placeholder="Password" >
                    <span class="error"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="repass" class="col-sm-2 control-label">Повторите пароль</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="repass" placeholder="Password">
                    <span class="error"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="date" class="col-sm-2 control-label">Дата рождения</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="date" placeholder="yyyy-mm-dd">
                    <span class="error"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="phone" class="col-sm-2 control-label">Номер телефона</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="phone" placeholder="xxx-xxxxxxx">
                    <span class="error"></span>
                </div>
            </div>


             <button class="btn btn-info btn-block" type="submit"  >Зарегистрироватся</button>
    </form>
</div>