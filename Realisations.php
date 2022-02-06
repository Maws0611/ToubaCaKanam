<?php require_once "header.php" ?>
    <!-- Touba ca kanam  -->
    <section>
        <div class="container">
            <div class="row d-flex justify-content-center ">
                <div class=" py-5">
                    <div class="ratio ratio-4x3  Otheroverlay">
                        <iframe width="100" height="100" src="https://www.youtube.com/embed/70BJfZdO9W4"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mx-auto  containeurCarte">
                        <div class="pb-5">
                            <a class="nav-link text-dark" href="Realisation2.php">
                                <div class="card   ms-5 realisation" style="width: 18rem;">
                                    <img src="img/realisations.png" class=" overlayrealisation card-img" alt="...">
                                    <div class="card-img-overlay pt-5">
                                        <h5 class="titreRealisation card-title">Poste de santé LANSAR</h5>
                                        <h5 class="titreRealisation card-title">27 janvier 2020</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"> les aspects qui ont favorisé la mise en place urgente de
                                            cette
                                            structure qui fonctionne avec des cotisations volontaires et dirigée par
                                            Serigne
                                            Habib Ibn Seigne Fallilou Mbacké qui a toute la confiance du Khalife Serigne
                                            Mouhamadoul Mountakha
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="pb-5">
                            <a class="nav-link text-dark" href="Realisation2.php">
                                <div class="card   ms-5 realisation" style="width: 18rem;">
                                    <img src="img/realisations.png" class=" overlayrealisation card-img" alt="...">
                                    <div class="card-img-overlay pt-5">
                                        <h5 class="titreRealisation card-title">Poste de santé LANSAR</h5>
                                        <h5 class="titreRealisation card-title">27 janvier 2020</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"> les aspects qui ont favorisé la mise en place urgente de
                                            cette
                                            structure qui fonctionne avec des cotisations volontaires et dirigée par
                                            Serigne
                                            Habib Ibn Seigne Fallilou Mbacké qui a toute la confiance du Khalife Serigne
                                            Mouhamadoul Mountakha
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="pb-5">
                            <a class="nav-link text-dark" href="Realisation2.php">
                                <div class="card   ms-5 realisation" style="width: 18rem;">
                                    <img src="img/realisations.png" class=" overlayrealisation card-img" alt="...">
                                    <div class="card-img-overlay pt-5">
                                        <h5 class="titreRealisation card-title">Poste de santé LANSAR</h5>
                                        <h5 class="titreRealisation card-title">27 janvier 2020</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"> les aspects qui ont favorisé la mise en place urgente de
                                            cette
                                            structure qui fonctionne avec des cotisations volontaires et dirigée par
                                            Serigne
                                            Habib Ibn Seigne Fallilou Mbacké qui a toute la confiance du Khalife Serigne
                                            Mouhamadoul Mountakha
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="py-3 d-flex justify-content-end">
                        <h5>Voire plus <img src="img/Plus.png " type="button" id="boutonVoirPlus"></h5>
                        <!-- code javascript -->
                        <!-- <script type="text/javascript">
                        let realisationCacher = document.querySelectorAll(".realisationCacher");
                        realisationCacher.style.visibility = 'hidden';
                        let boutonVoirPlus = document.getElementById('boutonVoirPlus')
                            boutonVoirPlus.addEventListener('click', ()=> {
                              alert('ok')
                            })
                    </script> -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container ">
        <h1 class="text-center pb-5">En cour </h1>
        <div class="  d-flex justify-content-center ">
            <div class="col-6 me-5 pb-5">
                <div class="card   ">
                    <img src="img/imageRéalisation.png" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Réalisation d’un champ de 20 ha</h5>
                        <div class="d-flex justify-content-center ">
                            <!-- Button  modal -->
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                class="btn btn-light "><strong>Participer</strong></button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Veuillez remplir le
                                                formulaire</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="  pb-4 ms-5   pt-3">
                                                <input type="text" class="form-control shadow-none bg-light rounded"
                                                    placeholder="Prénom * " aria-label="First name"><br>
                                                <input type="text" class="form-control shadow-none bg-light rounded "
                                                    placeholder="Nom * " aria-label="First name"><br>
                                                <input type="text" class="form-control shadow-none bg-light rounded"
                                                    placeholder="Téléphone * " aria-label="First name"><br>
                                                <input type="text" class="form-control shadow-none bg-light rounded "
                                                    placeholder="E-mail * " aria-label="First name"><br>
                                                <textarea class="form-control shadow-none bg-light rounded "
                                                    placeholder="Message" id="floatingTextarea2"
                                                    style="height: 100px"></textarea>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <button class="btn_Deposer btn ">Envoyer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 ">
                <p>
                    les aspects qui ont favorisé la mise en place urgente de cette structure qui fonctionne avec des
                    cotisations volontaires et dirigée par Serigne Habib Ibn Seigne Fallilou Mbacké qui a toute la
                    confiance du Khalife Serigne Mouhamadoul Mountakha
                    les aspects qui ont favorisé la mise en place urgente de cette structure qui fonctionne avec des
                    cotisations volontaires et dirigée par Serigne Habib Ibn Seigne Fallilou Mbacké qui a toute la
                    confiance du Khalife Serigne Mouhamadoul Mountakha
                    les aspects qui ont favorisé la mise en place urgente de cette structure qui fonctionne avec des
                    cotisations volontaires et dirigée par Serigne Habib Ibn Seigne Fallilou Mbacké qui a toute la
                    confiance du Khalife Serigne Mouhamadoul Mountakha
                </p>
            </div>
        </div>

        <div class="   d-flex justify-content-center ">
            <div class="col-6 me-5">
                <p>
                    les aspects qui ont favorisé la mise en place urgente de cette structure qui fonctionne avec des
                    cotisations volontaires et dirigée par Serigne Habib Ibn Seigne Fallilou Mbacké qui a toute la
                    confiance du Khalife Serigne Mouhamadoul Mountakha
                    les aspects qui ont favorisé la mise en place urgente de cette structure qui fonctionne avec des
                    cotisations volontaires et dirigée par Serigne Habib Ibn Seigne Fallilou Mbacké qui a toute la
                    confiance du Khalife Serigne Mouhamadoul Mountakha
                    les aspects qui ont favorisé la mise en place urgente de cette structure qui fonctionne avec des
                    cotisations volontaires et dirigée par Serigne Habib Ibn Seigne Fallilou Mbacké qui a toute la
                    confiance du Khalife Serigne Mouhamadoul Mountakha
                </p>


            </div>
            <div class="col-6 pb-5">
                <div class="card   ">
                    <img src="img/image 2.png" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Réalisation d’un champ de 20 ha</h5>
                        <div class="d-flex justify-content-center ">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            class="btn btn-light "><strong>Participer</strong></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="   d-flex justify-content-center ">
            <div class="col-6 me-5 pb-5">
                <div class="card   ">
                    <img src="img/imageRéalisation.png" class="card-img " alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Réalisation d’un champ de 20 ha</h5>
                        <div class="d-flex justify-content-center ">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            class="btn btn-light "><strong>Participer</strong></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 ">
                <p>
                    les aspects qui ont favorisé la mise en place urgente de cette structure qui fonctionne avec des
                    cotisations volontaires et dirigée par Serigne Habib Ibn Seigne Fallilou Mbacké qui a toute la
                    confiance du Khalife Serigne Mouhamadoul Mountakha
                    les aspects qui ont favorisé la mise en place urgente de cette structure qui fonctionne avec des
                    cotisations volontaires et dirigée par Serigne Habib Ibn Seigne Fallilou Mbacké qui a toute la
                    confiance du Khalife Serigne Mouhamadoul Mountakha
                    les aspects qui ont favorisé la mise en place urgente de cette structure qui fonctionne avec des
                    cotisations volontaires et dirigée par Serigne Habib Ibn Seigne Fallilou Mbacké qui a toute la
                    confiance du Khalife Serigne Mouhamadoul Mountakha
                </p>
            </div>
        </div>
        <div class="py-3 d-flex justify-content-end">
            <h5>Voire plus <img src="img/Plus.png " type="button" id="boutonVoirPlus"></h5>
        </div>
    </div>
    <?php require_once "footer.php" ?>