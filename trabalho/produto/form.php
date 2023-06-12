
<?php require_once "consultar_por_id.php" ?>
<?php require_once "../template/cabecalho.php";?>


    <h1>Vendas</h1>
    <hr>

    <form 
    action="<?php echo isset($venda) ? 'atualizar.php' : 'inserir.php' ?>" 
    method="post"
    enctype="multipart/form-data"
    >

        <input type="hidden" name="id" id="id" value="<?php echo $venda['idvendas'] ?? ""; ?>"><br>    
    
        <label for="data">Data</label><br>
        <input type="date" name="data" id="data" value="<?php echo $venda['data'] ?? ""; ?>"><br>

        <label for="valor">Valor</label><br>
        <input type="number" step="0.01" name="valor" id="valor" value="<?php echo $venda['valor'] ?? "0.00"; ?>"><br>   
        
        <label for="produto">Produto</label><br>
        <textarea name="produto" id="produto"><?php echo $venda['produto'] ?? ""; ?></textarea><br>

        <label for="cliente">Cliente</label><br>
        <textarea name="cliente" id="cliente"><?php echo $venda['cliente'] ?? ""; ?></textarea><br>

        

    <br>
        <br>
        <button type="submit">Cadastrar</button>

    </form>
    <?php require_once "../template/rodape.php";?>