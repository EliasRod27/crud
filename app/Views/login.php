<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Login</title>
    <style>
        body{
            width: 100vw;
            height: 100vh;

            min-width: 470px;
            min-height: 400px;

            padding: 0;
            margin: 0;

            background-color: white;

            display: flex;
            justify-content: center;
            align-items: center;
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
            font-size: 17px;
            font-weight: 600;

            color: white;
            background-color: #1B1B1B;

            cursor: pointer;
        }

        #button:hover{
            background-color: #2B2B2B;
        }

    </style>
</head>
<body>
    <div class='container'>
        <h1 class="text" style="font-size: 26px; font-weight: 600;">Login system</h1>
        <p class="text" style="font-size: 14px; font-weight: 400; color: #888888">Faça login com seu usuário e senha</p>
        <form action="<?php echo url_to('signin') ?>" method="post" id="Form_style">
            <label class="text" style="font-size: 14px; font-weight: 500;" trq>Usuário</label>
            <input type="text" name="user" placeholder="Digite seu nome de usuário" class="input">
            <label class="text" style="font-size: 14px; font-weight: 500;">Senha</label>
            <input type="password" name="password" placeholder="Digite sua senha" class="input">
            <input type="submit" id="button" value="Entrar">
        </form>
        <?php $msg = session ()->getFlashData('msg') ?>
        <?php if (!empty($msg)): ?>
            <?php echo '<p class="text" style="font-size: 13px; font-weight: 400; color: red; margin-top: 10px;" >' . $msg . '</p>'; ?>
        <?php endif; ?>
    </div>
</body>
</html>