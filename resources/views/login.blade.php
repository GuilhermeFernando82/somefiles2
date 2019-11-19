<!DOCTYPE html>
<html>
<head><title>Login_Adm</title></head>
<body>
    <center>
        <form method="POST" action="{{ url('/admin/login') }}">
             {{ csrf_field() }}
        Email<input type="text" name="email"><br>
        Senha<input type="password" name="senha"><br>
        <input type="submit" value="Logar">


        </form>
    </center>


</body>
</html>
