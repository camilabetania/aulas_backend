
<?php require_once "consultar_todos.php"; ?>
<?php require_once "../template/cabecalho.php";?>
   
<div class="container">
    <h1>Vendas</h1>
    <hr>
    <div class="text-end">
        <a href="form.php" class="btn btn-success">Inserir produto</a>
    </div>

    <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">Data</th>
      <th scope="col">Valor</th>
      <th scope="col">Produto</th>
      <th scope="col">Cliente</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach($vendas as $venda){ ?>
      <tr>
        <th scope="row"><?php echo $venda['nome'];?></th>
        <td><?php echo $venda['preco'];?></td>
        <td>
          <img src="../uploads/<?php echo $venda['foto'];?>" 
          height="30px" alt="">
        </td>
        <td>
          <a href="excluir.php?id=<?php echo $venda['idvenda'];?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Excluir</a>
          <a href="form.php?id=<?php echo $venda['idvenda'];?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Atualizar</a>
        </td>
    </tr>
    <?php } ?>

  </tbody>
</table>


</div>
   

<?php require_once "../template/rodape.php";?>