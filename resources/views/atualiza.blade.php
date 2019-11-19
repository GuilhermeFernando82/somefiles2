<!DOCTYPE html>
<html>
<head><title>R</title></head>
<body>
    <center>
        Cadastro de Produtos<br><br>
        <form method="POST" action="{{ route('products.update', $cadastros->id) }}" enctype="multipart/form-data">
             {{ csrf_field() }} {!! method_field('PUT') !!}
        Nome do produto: <input type="text" name="name"><br><br><br>
        Descricao<input type="text" name="desc"><br><br><br>
        Foto <input type='file' id="primaryImage" name="primaryImage" accept="image/*" /><br><br>

            <input type="submit" value="Alterar">

        </form>
    </center>


</body>
</html>
