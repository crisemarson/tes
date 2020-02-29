
<?php 

        $path = "C:/xampp/htdocs/tes/pages";
?>

<?php 
    //include "admin_includes/header.php";
    include dirname($path) . "../../tes/include/header.php";

?>
  
<?php 
    //include "admin_includes/header.php";
    include dirname($path) . "../../tes/include/nav.php";

?>

<?php 
   // include "admin_includes/navigation.php";
    include dirname($path) . "../../tes/include/body.php";
?>


<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
<?php 

    $sql = "SELECT * FROM `report`";
    $res = mysqli_query($connection,$sql);


 ?>
<!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        LIST OF EVALUATE TEACHER
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>View</th>
                                    <th>Print</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php while($row = mysqli_fetch_assoc($res)){ ?>
                                    <td><?php echo $row['identitynumber']; ?></td>
                                    <td><button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#largeModal"><?php echo $row['name']; ?></button></td>
                                    <td><a href="report_view.php?id=<?php echo $row['identitynumber'];?>">Select</a></td>
                                    <td><a href="">Print</a></td>
                                <?php } ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Examples -->
    <!-- Large Size -->
    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="largeModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
    					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    					    <div class="card">
    					        <div class="header">
    					            <h2>
    					                TITLE
    					            </h2>
    					        </div>
    					        <div class="body table-responsive">
    					            <table class="table table-bordered js-exportable">
    					                <thead>
    					                    <tr>
    					                        <th>#</th>
    					                        <th>Question</th>
    					                        <th>total</th>
    					                    </tr>
    					                </thead>
    					                <tbody>
    					                    <tr>
    					                        <th scope="row">1</th>
    					                        <td><p class="list-group-item-text">
    					           		            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
    					           		            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
    					           		            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
    					           		            sadipscing mel.

    					           		        </p></td>
    					                        <td>Otto</td>
    					                    </tr>
    					                    <tr>
    					                        <th scope="row">2</th>
    					                        <td><p class="list-group-item-text">
    					           		            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
    					           		            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
    					           		            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
    					           		            sadipscing mel.

    					           		        </p></td>
    					                        <td>Thornton</td>
    					                    </tr>
    					                    <tr>
    					                        <th scope="row">3</th>
    					                        <td><p class="list-group-item-text">
    					           		            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
    					           		            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
    					           		            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
    					           		            sadipscing mel.

    					           		        </p></td>
    					                        <td>the Bird</td>
    					                    </tr>
    					                    <tr>
    					                        <th scope="row">4</th>
    					                        <td><p class="list-group-item-text">
    					           		            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
    					           		            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
    					           		            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
    					           		            sadipscing mel.

    					           		        </p></td>
    					                        <td>Jellybean</td>
    					                    </tr>
    					                    <tr>
    					                        <th scope="row">5</th>
    					                        <td><p class="list-group-item-text">
    					           		            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
    					           		            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
    					           		            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
    					           		            sadipscing mel.

    					           		        </p></td>
    					                        <td>Kikat</td>
    					                    </tr>
    					                </tbody>
    					            </table>
    					        </div>
    					    </div>
    					</div>
    				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
           </div>
        </div>
    </div>


<!-- ------------------------------------------------------------------------------------------------------------------------------- -->
<?php 
    //include "admin_includes/header.php";
    include dirname($path) . "../../tes/include/footer.php";

?>