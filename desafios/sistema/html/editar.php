<?php
include '../php/conexao.php';

//".$_GET['cpf']
// where cpf = '000.111.222-33'
//print_r($_GET['cpf']);

$sql = "SELECT * FROM clientes WHERE cpf = '".$_GET['cpf']."'";
if (!$result = $mysqli->query($sql)) {
  echo "query ". $sql . " failed";
}else{
    $row = $result->fetch_assoc();

}

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
        <div id="logo">
            <img src="../src/logo_horizonta_fundo_branco.png" width="109px" height="37px">
        </div>
        <div id="right">
            <span>Admin</span><img src="../src/user.png" height="30px">
        </div>
    </header>

    <section>
        <aside>
            <img src="../src/perfil_preto.png" width="18px"> <span id="span1">Clientes</span>
        </aside>
        <main>
            <section id="topo_main">
                <span>
                    <h2> Clientes</h2>
                </span>
                <span>
                    <a href="clientes.php">
                        <button class="btn adicionar">
                            ▶
                        </button>
                    </a>
                </span>
            </section>
            <section>
                <table>

                    <form action="../php/SalvarAlteracao.php" method="post">
                        <thead>
                            <tr style="width: 100%; text-align:left;">
                                <th class="tr_head th_form">VER</th>
                                <th></th>
                                <th></th>
                                <th class="tr_head_2"></th>
                            </tr>
                        </thead>
                        <tbody id="tbody_form">
                            <tr class="tr_form">
                                <td>
                                    <label>Nome completo</label>
                                    <input type="text" value="<?php echo $row['nome']; ?>" name="nome" placeholder="Nome completo">
                                </td>
                                <td>
                                    <label>Data de nascimento</label>
                                    <input type="text" value="<?php echo $row['data_nasc']; ?>" id="nasc" name="nasc" maxlength="10" placeholder="aaaa/mm/dd">
                                </td>
                                <td>
                                    <label>CPF</label>
                                    <input type="text" value="<?php echo $row['cpf']; ?>" id='cpf' name="cpf" maxlength="14" placeholder="123.456.789-10">
                                </td>
                                <td>
                                    <label>Gênero</label>
                                    <select name="genero" >
                                        <option value="<?php echo $row['genero']; ?>"><?php echo $row['genero']; ?></option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Feminino">Feminino</option>
                                        <option value="Não opinar">Prefiro não opinar</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="tr_form">
                                <td>
                                    <label>Celular</label>
                                    <input type="text" value="<?php echo $row['telefone']; ?>" id="cell" name="cell" maxlength="15"  placeholder="(DDD) 99999-9999">
                                </td>
                                <td>
                                    <label>E-mail</label>
                                    <input type="email" value="<?php echo $row['email']; ?>" name="email" placeholder="Exemplo@gmail.com">
                                </td>

                                <td>
                                    <label>Senha</label>
                                    <input type="text" value="<?php echo $row['senha']; ?>" id="senha" name="senha" placeholder="********">
                                </td>
                                <td>
                                    <label>Status</label>
                                    <select name="status"  placeholder="Status">
                                    <option value="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></option>
                                        <option value="Ativo">Ativo</option>
                                        <option value="Suspenso">Suspenso</option>
                                        <option value="Desligado">Desligado</option>
                                    </select>
                                </td>

                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                <input type="submit" class="btn" id="btn_submit" value="Salvar">
                                </td>
                            </tr>
                        </tbody>

                    </form>
                </table>
            </section>
        </main>
    </section>



<script src="../JS/script.js"></script>

</body>

</html>