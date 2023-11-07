<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <label for="nome">Número</label>
        <input type="number" name="numero">
        <br>
        <label for="nome">Agência</label>
        <input type="number" name="agencia">
        <br>        
        <label for="nome">Proprietário</label>
        <input type="text" name="proprietario">
        <br>        
        <label for="nome">Saldo</label>
        <input type="text" name="saldo">
        <br>        
        <label for="nome">Limite</label>
        <input type="text" name="limite">
        <br>
        <input type="submit" value="Salvar">
    </form>
    
    <?php
        include("conta.php")
        
        $conta = new Conta(); //instanciando um objeto da classe Cachorro
        $conta->create("0001", "1234", "Joselito", 1000, 2000);

        if (isset($_GET["conta"]))
        {
            $conta = new Conta();
            
            $conta->create($_GET["numero"], $_GET["agencia"], $_GET["proprietario"], 
                            $_GET["saldo"], $_GET["limite"]);
</body>
</html>