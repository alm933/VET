<?php include('db.php') ?>
<?php

?>



<?php include('include/header.php')?>


                    <div class="col-md-10">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>IdRevision</th>
                        <th>IdCita</th>
                        <th>DniCliente</th>
                        <th>CodVeterinario</th<>
                        <div>
                        <th>Descripcion</th<>
                        <th>Fecha</th<></div>
                        <th>Hora</th<>
                        <th>Acciones</th<>
                    </tr>
                </thead>
                <tbody>
                      <tr>

                      <?php 
                        $query="SELECT revision.idRevision,revision.idCita , revision.DniCliente , revision.CodVeterinario , revision.descripcion , solicitarcita.Fecha , solicitarcita.hora FROM  revision , solicitarcita WHERE revision.idCita = solicitarcita.idSolicitarCita";
                        $result_taks = mysqli_query($conn,$query);
                        while($row = mysqli_fetch_array($result_taks)){?>


                                <td> <?php echo $row['idRevision'] ?></td>
                                <td> <?php echo $row['idCita'] ?></td>
                                <td> <?php echo $row['DniCliente'] ?></td>
                                <td> <?php echo $row['CodVeterinario'] ?></td>
                                <td> <?php echo $row['descripcion'] ?></td>
                                <td> <?php echo $row['Fecha'] ?></td>
                                <td> <?php echo $row['hora'] ?></td>
                                <td> 
                                <a href="editCitas.php?
idRevision=<?php echo  $row['
idRevision']?>" class="btn btn-secondary">
                                <i class="far fa-save"></i>
                                </a>
                                <a href="deleteCitas.php?
idRevision=<?php echo  $row['
idRevision']?>" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                                </td>
                            </tr>
                        <?php } ?>
                </tbody>
            </table>
            <a href="page.php" class="btn btn-info">Regresar</a>
            </div>
        </div>
    </div>
</div>



<?php include('include/footer.php')?>
 