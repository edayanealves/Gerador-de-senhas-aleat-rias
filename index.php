<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senhas</title>
</head>
<body>

<form action="processa.php" method="post"> 
    <label> Informe o tamanho que deseja a sua senha</label>
    <input type="number" name="tamanho" min="6" max="60">
    <label> Você deseja letras maiúsculas?</label>
    <select name="maiuscula">
        <option value="sim">
            sim 
        </option>
        <option value="não">
            não
        </option>
    </select>
    <label> Você deseja letras minúsculas?</label>
    <select name="minuscula">
        <option value="sim">
            sim 
        </option>
        <option value="não">
            não
        </option>
    </select>
    <label> Você deseja números?</label>
    <select name="numeros">
        <option value="sim">
            sim 
        </option>
        <option value="não">
            não
        </option>
    </select>
    <label> Você deseja caracteres especiais?</label>
    <select name="especiais">
        <option value="sim">
            sim 
        </option>
        <option value="não">
            não
        </option>
    </select>
    <button type="submit"> Gerar senha </button>
</form>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Sora", sans-serif;
    outline: none;
}

body{
    width: 100%;
    min-height: 100vh;
    padding: 32px 0 120px;
    background-color: #20986A30;
    transition: .32s;
}

.container{
    border-radius: 16px;
    width: 100%;
    max-width: 888px;
    background-color: #fff;
    margin: 0 auto;
    overflow: hidden;
    transition: .32s;
}

.container .header{
    width: 100%;
    height: 196px;
    background-color: #20986A;
    display: flex;
    align-items: center;
    gap: 32px;
    overflow: hidden;
    padding-left: 48px;
}

.container .header h1{
    color: #fff;
    font-size: 32px;
    line-height: 40px;
}

.container .header  img{
    min-height: 100%;
    width: 70%;
    margin-bottom: 80px;
}

.main{
    padding: 32px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    transition: .32s;
}

.main .inputs{
    width: 100%;
    display: flex;
    gap: 16px;
}

.main .inputs .content {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 4px;
}

.main .inputs .content label {
    font-size: 12px;
    color: #7f8182;
    position: absolute;
    line-height: 24px;
    top: 0;
}

.main .inputs .content .flex {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    position: relative;
    width: 100%;
}

.main .inputs .content .flex .btn-action {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 48px;
    min-width: 48px;
    height: 48px;
    border-radius: 50%;
    color: #0E6930;
    font-weight: 600;
    font-size: 20px;
    background-color: #808080;
    cursor: pointer;
    user-select: none;
    position: absolute;
}

.main .inputs .reload {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 56px;
    min-width: 56px;
    height: 56px;
    border-radius: 50%;
    color: #0E6930;
    font-weight: 600;
    font-size: 20px;
    background-color: #808080;
    cursor: pointer;
    user-select: none;
}

.reload p {
    display: none;
}

.main .inputs .content .flex .btn-action.menos {
    left: 4px;
}

.main .inputs .content .flex .btn-action.mais {
    right: 4px;
}

.main .inputs .input_sena{
    width: 100%;
    height: 56px;
    text-align: center;
    border: 1px solid #c4c4c4;
    border-radius: 32px;
    font-weight: 600;
    font-size: 18px;
    padding-top: 16px;
}

input[type=number]::-webkit-inner-spin-button { 
    -webkit-appearance: none; 
}

input[type=number] { 
    -moz-appearance: textfield;
    appearance: textfield;
}

.main .inputs .input_sena:focus {
    border-color: #20986A;
}

.btn {
    background-color: #808080;
    color: #fff;
    border: none;
    transition: .16s;
    cursor: pointer;
    font-size: 14px;
    width: 100%;
    height: 56px;
    text-align: center;
    border-radius: 32px;
    font-weight: 600;
}

.btn:hover,
.btn-action:hover,
.reload:hover {
    filter: brightness(112%);
}

.btn:active,
.btn-action:active,
.reload:active {
    transform: scale(.96);
}

.main .resultados {
    width: 100%;
}

.main .resultados .jogos {
    display: none;
    flex-direction: column;
    gap: 16px;
    width: 100%;
    margin-top: 48px;
}

</style>
    
</body>
</html>
