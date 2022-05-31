<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <img src="../../public/asset/twt_logo.png" class="rounded mx-auto " width="50" alt="logo Twitter">
                <button class="btn-close" style="margin: 0px;" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <h3 class="fw-bold">Créer votre compte</h3>
                </div>
                <div class="row">
                    <input type="text" class="form-control" id="username" maxlength="50" placeholder="Nom et prénom">
                </div>
                <div class="row login">
                    <input type="tel" class="form-control tel" id="tel" placeholder="Téléphone">
                </div>
                <div class="row link">
                    <span class="btn text-info text-start txtLink">Utiliser un email</span>
                </div>
                <div class="row">
                    <span class="fw-bold">Date de naissance</span>
                </div>
                <div class="row">
                    <span class="fw-light">Cette information ne sera pas affichée publiquement.
                        Confirmez votre âge, même si ce compte est pour une entreprise, un
                        animal de compagnie ou autre chose.</span>
                </div>
                <div class="row">
                    <div class="col">
                        <select name="" id="month" class="form-select" id="">
                            <option value="">Mois</option>
                            <option value="01">Janvier</option>
                            <option value="02">Février</option>
                            <option value="03">Mars</option>
                            <option value="04">Avril</option>
                            <option value="05">Mai</option>
                            <option value="06">Juin</option>
                            <option value="07">Juillet</option>
                            <option value="08">Août</option>
                            <option value="09">Septembre</option>
                            <option value="10">Octobre</option>
                            <option value="11">Novembre</option>
                            <option value="12">Décembre</option>
                        </select>
                    </div>
                    <div class="col">
                        <select name="day" id="day" class="form-select">
                            <option value="">Jour</option>
                        </select>
                    </div>
                    <div class="col">
                        <select name="year" id="year" class="form-select">
                            <option value="">Année</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="modal-footer justify-content-center">
                <button class="btn-lg rounded-pill bg-secondary white" data-bs-toggle="modal"
                    data-bs-target="#myModal_P2" id="modal_1_btn_P1" disabled>Suivant</button>
            </div>

        </div>
    </div>
</div>
