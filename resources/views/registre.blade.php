<!DOCTYPE html>
<html>
<head><title>R</title></head>
<body>
    <center>
        Cadastro de Produtos<br><br>
        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
             {{ csrf_field() }}
        Nome do produto: <input type="text" name="name"><br><br><br>
        Descricao<input type="text" name="desc"><br><br><br>
        Foto <input type='file' id="primaryImage" name="primaryImage" accept="image/*" /><br><br>

            <input type="submit" value="Cadastrar_Produto">

        </form>
    </center>


</body>
</html>
