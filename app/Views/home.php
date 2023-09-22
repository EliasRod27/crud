<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Home</title>
    <style>
        body{
            width: 100vw;
            height: 100vh;

            min-width: 470px;
            min-height: 400px;

            padding: 0;
            margin: 0;

            background-color: white;

            position: relative;

            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 20px;
        }

        .container{
            width: 370px;
            height: 280px;

            padding: 30px;

            display: flex;
            flex-direction: column;

            border-radius: 10px;
            margin: 0px;

            border: 1px solid #E6E6E6;

            box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.05);
        }

        .text{
            margin: 0px;
            font-family: Inter;
            color: #1B1B1B;
        }

        #Form_style{
            margin-top: 20px;

            display: flex;
            flex-direction: column;
            gap: 4px;
        }
        
        .input{
            width: calc(100% - 20px);
            height: 35px;

            padding: 0px 10px;

            border-radius: 5px;
            border: 1px solid #E6E6E6;

            font-family: Inter;
            font-size: 13px;

            outline: none;
        }

        #button {
            width: 100%;
            height: 40px;

            margin-top: 20px;
            border-radius: 5px;
            border: none;

            font-family: Inter;
            font-size: 16px;
            font-weight: 600;

            color: white;
            background-color: #1B1B1B;

            cursor: pointer;
        }

        #button:hover{
            background-color: #2B2B2B;
        }

        #table {
            width: 100%;
            height: 212px;

            margin-top: 20px;

            border-spacing: 0px;
            border-radius: 5px;
            border: 1px solid #E6E6E6;
        }

        #thead {
            width: 100%;
            height: 45px;

            border-radius: 5px 5px 0px 0px;
            padding: 0px 10px;
            
            color: white;
            background-color: #1B1B1B;
        }

        #tbody {
            width: 100%;
            height: 100%;

            display: flex;
            flex-direction: column;
            
            color: #1B1B1B;

            overflow: auto;
        }

        .tline {
            width: calc(100% - 20px);
            min-height: 34px;

            padding: 0px 10px;

            display: flex;
            flex-direction: row;
            align-items: center;

            font-family: Inter;
            font-size: 13px;
            font-weight: 500;

            border-bottom: 1px solid #E6E6E6;
        }

        #tinput{
            width: calc(100% - 40px);
            height: 25px;

            padding: 0px 5px;

            border-radius: 3px;
            border: none;

            font-family: Inter;
            font-size: 13px;

            background-color: #454545;
            color: #E6E6E6;

            outline: none;
        }

        #tinput::placeholder {
            color: #AEAEAE;
        }

        #tbutton {
            width: 30px;
            height: 25px;

            border-radius: 5px;
            border: none;

            font-family: Inter;
            font-size: 15px;
            font-weight: 500;

            display: flex;
            justify-content: center;
            align-items: center;

            color: white;
            background-color: #454545;

            cursor: pointer;
        }

        #tbutton:hover{
            background-color: #606060;
        }

        .delete {
            width: 25px;
            height: 25px;

            border-radius: 5px;
            border: none;

            margin-right: 1.1px;

            font-family: Inter;
            font-size: 15px;
            font-weight: 500;

            display: flex;
            justify-content: center;
            align-items: center;

            color: white;
            background-color: #FD3434;

            cursor: pointer;
        }

        .delete:hover{
            background-color: #DE3636;
        }

        #edit {
            width: 25px;
            height: 25px;

            border-radius: 5px;
            border: none;

            font-family: Inter;
            font-size: 15px;
            font-weight: 500;

            display: flex;
            justify-content: center;
            align-items: center;

            color: white;
            background-color: #FFCE22;

            cursor: pointer;
        }

        #edit:hover{
            background-color: #EAC02B;
        }

        #modal {
            width: 370px;
            height: 270px;

            padding: 30px;
            border-radius: 10px;

            border: 1px solid #E6E6E6;

            display: flex;
            flex-direction: column;

            position: relative;

            background-color: white;
        }

        #filter {
            position: absolute;

            width: 100%;
            height: 100%;

            display: none;
            justify-content: center;
            align-items: center;

            background-color: rgba(0, 0, 0, 0.50);
        }

        #button_exit {
            width: 25px;
            height: 25px;

            border: none;

            display: flex;
            justify-content: center;
            align-items: center;

            cursor: pointer;

            position: absolute;
            right: 30px;

            background-color: white;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1 class="text" style="font-size: 26px; font-weight: 600;">Cadastrar usuário</h1>
        <p class="text" style="font-size: 14px; font-weight: 400; color: #888888">Adicione um novo usuário</p>
        <form action="<?php echo url_to('register') ?>" method="post" id="Form_style">
            <label class="text" style="font-size: 14px; font-weight: 500;" trq>Usuário</label>
            <input type="text" maxlength="10" name="user" placeholder="Digite um nome para o usuário" class="input">
            <label class="text" style="font-size: 14px; font-weight: 500;">Senha</label>
            <input type="password" maxlength="10" name="password" placeholder="Digite uma senha" class="input">
            <input type="submit" id="button" value="Cadastrar">
        </form>
        <?php 
            $msg = session ()->getFlashData('msg');

            if (!empty($msg)){
                $cor = ($msg === "^⁠_⁠^ Usuário registrado!") ? 'green' : 'red';
                echo '<p class="text" style="font-size: 13px; font-weight: 400; color: ' . $cor . '; margin-top: 10px;">' . $msg . '</p>'; 
            }
        ?>
    </div>
    <div class="container">
        <h1 class="text" style="font-size: 26px; font-weight: 600;">Pesquisar usuário</h1>
        <p class="text" style="font-size: 14px; font-weight: 400; color: #888888">Verifique os usuário</p>

        <table id="table">
            <thead>
                <tr>
                    <td colspan="2" id="thead">
                        <form action="<?php echo url_to('filter') ?>" style="display: flex; flex-direction: row; gap: 5px;" method="post">
                            <input type="text" name="search" placeholder="Filtrar..." id="tinput">
                            <button type="submit" id="tbutton" value=""><image src="https://uploaddeimagens.com.br/images/004/616/530/original/search.png?1695404544"></button>
                        </form>
                    </td>
                </tr>
                <tr class="tline" style="min-height: 25px; color: #888888;">
                    <td style="width: 30%;">Usuário</td>
                    <td style="width: 72%;">Senha</td>
                </tr>
            </thead>
            <tbody id="tbody">
                <?php 
                    $search = session ()->getFlashData('search');
                    $users = ($search) ? $search : $users;
                    if($users){
                        for ($i = 0; $i <= count($users) - 1; $i++){
                            echo '
                                <tr class="tline">
                                    <td style="width: 30%;">'. $users[$i]['user'] .'</td>
                                    <td style="width: 55%;">'. $users[$i]['password'] .'</td>
                                    <td>
                                        <form action='.url_to('delete').' method="post">
                                            <button type="submit" class="delete" name="user" value='.$users[$i]['user'].'><image src="https://uploaddeimagens.com.br/images/004/616/523/original/Vector.png?1695404369"></button>
                                        </form>
                                    </td>
                                    <td>
                                        <button id="edit" onclick={modal_control(["flex","'.$users[$i]['user'].'"])} style="margin-left: 2px" ><image src="https://uploaddeimagens.com.br/images/004/616/546/full/editar.png?1695405902"></button>
                                    </td>
                                </tr>
                            ';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
    <?php 
        $msg = session ()->getFlashData('modal');

        if (!empty($msg)){
            $cor = ($msg === "^⁠_⁠^ Usuário alterado!") ? 'green' : 'red';
            echo '<p class="text" style="font-size: 13px; font-weight: 400; color: ' . $cor . '; margin-top: 10px;">' . $msg . '</p>'; 
        }
    ?>
    <div id="filter">
        <div id="modal">
            <button id="button_exit" onclick="modal_control(['none'])" style="margin-left: 2px" ><image src="https://uploaddeimagens.com.br/images/004/616/632/full/cancelar_%281%29.png?1695410260"></button>
            <h1 class="text" style="font-size: 26px; font-weight: 600;">Editar usuário</h1>
            <p class="text" id="p_modal" style="font-size: 14px; font-weight: 400; color: #888888">Edite o usuário</p>
            <form action="<?php echo url_to('edit') ?>" method="post" id="Form_style">
                <input type="text" id="user_default" name="user_default" value="Elias" style="display: none;">
                <label class="text" style="font-size: 14px; font-weight: 500;">Novo nome de usuário</label>
                <input type="text" maxlength="10" name="user" placeholder="Digite o novo nome de usuário" class="input">
                <label class="text" style="font-size: 14px; font-weight: 500;">Nova senha</label>
                <input type="password" maxlength="10" name="password" placeholder="Digite a nova senha" class="input">
                <input type="submit" id="button" value="Alterar">
            </form>
        </div>
    </div>
    <script>
        function modal_control(content){
            document.getElementById('filter').style.display = content[0];

            var paragrafo = document.getElementById("p_modal");
            paragrafo.textContent = "Editando o usuário: "+content[1];
            
            var inputElement = document.getElementById("user_default");
            inputElement.value = content[1];
        }
    </script>
</body>
</html>