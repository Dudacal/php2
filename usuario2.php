<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        ul{
            display: flex;
            list-style: none;
            background-color: black;
        }
        li{
            padding: 10px;
        }
        *{
            margin:0;
        }
        a{
            text-decoration: none;
            color: white;
        }
        a:hover{
            background-color: white;
            color: black;
            padding: 8px;
            transition: 250ms;

        }

        main{
            display: flex;
        }

        img{
            width: 70px;
            
        }
        
        
        #dados{
            width: "80%";
            height:"80%";
            color: green;
            border: 2px solid;
            border-radius: 2px solid;
            background-color: white;
            padding: 10px;

        }
        span{
            color: black;
            font-weight: bold ;
            border-bottom: 1px solid;
            margin: 2px;
        }
        p{
            background-color: palegreen;
            border:  1px dashed;
        }
        table{
            border-collapse: collapse;
            width: 100%;
        }
        th,td{
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even){
            background-color: lightgrey;
        }
        th{
            background-color: green;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Contatos</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="imagem">
        <img src="imagem.jpg">
    </div>
    <div id="dados">
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        <?php
        include "conecta.php";
        $sql = "SELECT id, nome, senha, email FROM usuario";
        $resultado = mysqli_query($conexao, $sql);
        while($registro = mysqli_fetch_assoc($resultado)) {      
                echo "<tr>";
                echo "<td>" . $registro["id"] . "</td>";
                echo "<td>" . $registro["nome"] . "</td>";
                echo "<td>" . $registro["email"] . "</td></tr>";
        }
                

            
            ?>
 

    </table>
 
</body>

</html>