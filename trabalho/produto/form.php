
<?php require_once "consultar_por_id.php" ?>
<?php require_once "../template/cabecalho.php";?>


    <h1>Vendas</h1>
    <hr>

    <form 
    action="<?php echo isset($venda) ? 'atualizar.php' : 'inserir.php' ?>" 
    method="post"
    enctype="multipart/form-data"
    >

        <label for="nome">Nome</label><br>
        <input type="text" name="nome" id="nome" value="<?php echo $venda['nome'] ?? ""; ?>"><br>
        <input type="hidden" name="id" id="id" value="<?php echo $venda['idvendas'] ?? ""; ?>"><br>

        <label for="descricao">Descrição</label><br>
        <textarea name="descricao" id="descricao"><?php echo $venda['descricao'] ?? ""; ?></textarea><br>

        <label for="preco">Preço</label><br>
        <input type="number" step="0.01" name="preco" id="preco" value="<?php echo $venda['preco'] ?? "0.00"; ?>"><br>

    <br>
        <br>
        <button type="submit">Cadastrar</button>

    </form>
    <?php require_once "../template/rodape.php";?>