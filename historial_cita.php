<?php include('db.php')?>

<?php include('include/header.php');?>
<h1>Historial de Citas</h1>
                    <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>idSolicitarCita</th>
                        <th>DniCliente</th>
                        <th>codVeterinaria</th>
                        <th>Fecha</th<>
                        <th>Hora</th<>
                        <th>Acciones</th<>
                    </tr>
                </thead>
                <tbody>
                      <tr>

                      <?php 
                        $query="SELECT * FROM solicitarcita";
                        $result_taks = mysqli_query($conn,$query);
                        while($row = mysqli_fetch_array($result_taks)){?>


                                <td> <?php echo $row['idSolicitarCita'] ?></td>
                                <td> <?php echo $row['DniCliente'] ?></td>
                                <td> <?php echo $row['CodVeterinario'] ?></td>
                                <td> <?php echo $row['Fecha'] ?></td>
                                <td> <?php echo $row['hora'] ?></td>
                                <td> 
                                <a href="editCitas.php?idSolicitarCita=<?php echo  $row['idSolicitarCita']?>" class="btn btn-secondary">
                                <i class="far fa-save"></i>
                                </a>
                                <a href="deleteCitas.php?idSolicitarCita=<?php echo  $row['idSolicitarCita']?>" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                                </td>
                            </tr>
                        <?php } ?>
                </tbody>
            </table>

            </div>
        </div>
    </div>
</div>

    <?php include("include/footer.php");  ?>
