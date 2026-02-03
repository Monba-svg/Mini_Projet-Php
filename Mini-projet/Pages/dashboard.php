
 <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body fs-5">Nombre de Total tâche : 
                                        <div class="text-center fs-1 me-4"><?php echo $total; ?> </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="text-white stretched-link" href="index.php?page=indexTache">Voir Tâches</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body fs-5">Total de tâches terminées : 
                                        <div class="text-center fs-1 me-4"><?php echo $end ;?> </div> </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="text-white stretched-link" href="index.php?page=indexTache">Voir tâches</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body fs-5">Pourcentage des tâches finies : 
                                      <div class="text-center fs-1 me-4">  <?php echo $purcent; ?> %</div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="text-white stretched-link" href="index.php?page=indexTache">Voir tâches</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body fs-5">Nombre de tâches en retard : 
                                        <div class="text-center fs-1 me-4"><?php echo $late ;?> </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="index.php?page=indexTache">Voir tâches</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
