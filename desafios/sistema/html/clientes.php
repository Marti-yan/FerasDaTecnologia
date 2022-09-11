 <?php
include '../php/conexao.php';

?> 
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/cliente.css">
    <title>Clientes</title>
</head>

<body>

    <header>
        <div id="logo" >
            <img src="../src/logo_horizonta_fundo_branco.png" title="Sair?" width="109px" height="37px " >
        </div>
        <div id="right">
            <span>Admin</span>  <img src="../src/user.png" height="30px" >
            <span id='sair'>
                <a href="../php/deslogar.php">
                <button class="btn">
                    sair
                </button>
            </a>
            </span>
        </div>
    </header>

    <section>
        <aside>
            <img src="../src/perfil_preto.png" width="18px"> <span>Clientes</span>
        </aside>
        <main>
            <section id="topo_main">
                <span>
                    <h2> Clientes</h2>
                </span>
                <span>
                    <a href="adicionar.php">
                        <button class="btn adicionar" >
                            +
                        </button>
                    </a>
                </span>
            </section>
            <section>
                <table>
                    <thead>
                        <tr>
                            <th class="tr_head">NOME COMPLETO</th>
                            <th>CPF</th>
                            <th>CELULAR</th>
                            <th>E-MAIL</th>
                            <th>STATUS</th>
                            <th class="tr_head_2">AÇÃO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                            <td>Yan Martins Lourenço Fraga</td>
                            <td>170.806.177-07</td>
                            <td>(22) 98871-8656</td>
                            <td>yanloufraga@gmail.com</td>
                            <td>Ativo</td>
                            <td>
                                <a href="editar.html">
                                    <button class="btn ver">
                                        VER
                                    </button>
                                </a>
                            </td>
                        </tr> -->
                         <?php 
                            $sql = "SELECT * FROM clientes ORDER BY nome DESC";
                            if ($result = $mysqli->query($sql)) {
                                while ($row = $result->fetch_assoc()){
                                    echo "
                                        <tr>
                                            <td>".$row['nome']."</td>
                                            <td>".$row['cpf']."</td>
                                            <td>".$row['telefone']."</td>
                                            <td>".$row['email']. "</td>
                                            <td>".$row['status']. '</td>
                                            <td>
                                                <a href="editar.php?cpf='.$row['cpf'].'">
                                                    <button class="btn ver">VER</button>
                                                </a>
                                            </td>
                                        </tr>';
                                }
                                $result->close();
                            }                                    
                        ?>                     
                    </tbody>
                </table>
            </section>
        </main>
    </section>




</body>

</html>