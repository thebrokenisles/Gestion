@extends('master')

@section('content')
<section class="content-header">
   
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Calendar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <!-- /.col -->
       <div class="col-sm-12">

            <!--      Wizard container        -->
            <div class="wizard-container">

                <div class="card wizard-card" data-color="orange" id="wizardProfile">
                    <form action="" method="">
                <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                    	<div class="wizard-header">
                        	<h3>
                        	   <b>Ajouter Un Dossier Juridique</b>  
                        	   
                        	</h3>
                        	<br><br>
                    	</div>

						<div class="wizard-navigation">
							<ul>
	                            <li><a href="#about" data-toggle="tab">Entreprise</a></li>
	                            <li><a href="#account" data-toggle="tab">Responsable</a></li>
	                            <li><a href="#address" data-toggle="tab">Dossier Juridique</a></li>
	                        </ul>

						</div>

                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                             <h4 class="info-text"> Informations sur l'entreprise </h4>
                              <div class="row">
                                  
                                
                                  <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                        <label>Nom</label>
                                        <input name="nomEntreprise" type="text" class="form-control" placeholder="Entrez le nom de l'entreprise">
                                      </div>
                                      </div>
                                      <div class="col-sm-5">
                                      <div class="form-group">
                                        <label>Activité</label>
                                        <input name="activiteEntreprise" type="text" class="form-control" placeholder="Entrez l'activité de l'entreprise">
                                      </div>
                                  </div>
                                     <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                        <label>Fix</label>
                                        <input name="fixEntreprise" type="text" class="form-control" placeholder="Entrez le fix de l'entreprise">
                                      </div>
                                      </div>
                                      <div class="col-sm-5">
                                      <div class="form-group">
                                        <label>Fax</label>
                                        <input name="faxEntreprise" type="text" class="form-control" placeholder="Entrez le fax de l'entreprise">
                                      </div>
                                  </div>
                                 <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                        <label>Email</label>
                                        <input name="emailEntreprise" type="email" class="form-control" placeholder="Entrez l'email de l'entreprise">
                                      </div>
                                      </div>
                                      <div class="col-sm-5">
                                      <div class="form-group">
                                        <label>Capital</label>
                                        <input name="capitalEntreprise" type="text" class="form-control" placeholder="Entrez le capital de l'entreprise">
                                      </div>
                                  </div>
                                      <div class="col-sm-5 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>Date de création</label>
                                            <input type="date" class="form-control" placeholder="">
                                          </div>
                                    </div>
                                    <div class="col-sm-5">
                                         <div class="form-group">
                                            <label>Forme juridique</label><br>
                                             <select name="formeJuridique" class="form-control">
                                                <option value="SA"> SA </option>
                                                <option value="SARL"> SARL </option>
                                               
                                            </select>
                                          </div>
                                    </div>
                                  <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Adresse</label>
                                          <input name="adresseEntreprise" type="text" class="form-control" placeholder="Entrez l'adresse de l'entreprise">
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="account">
                                <h4 class="info-text"> Informations sur le responsable </h4>
                                <div class="row">

                                   <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                        <label>Nom</label>
                                        <input name="nomResponsable" type="text" class="form-control" placeholder="Entrez le nom du responsable">
                                      </div>
                                      </div>
                                      <div class="col-sm-5">
                                      <div class="form-group">
                                        <label>CIN</label>
                                        <input name="cinResponsable" type="text" class="form-control" placeholder="Entrez le CIN du responsable">
                                      </div>
                                  </div>
                                  <div class="col-sm-5 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>Date de naissance</label>
                                            <input type="date" class="form-control" placeholder="">
                                          </div>
                                    </div>
                                    <div class="col-sm-5">
                                         <div class="form-group">
                                           <label>Telephone</label>
                                        <input name="telResponsable" type="text" class="form-control" placeholder="Entrez le telephone du responsable">
                                          </div>
                                    </div>
                              
                                 <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                        <label>Email</label>
                                        <input name="emailResponsable" type="email" class="form-control" placeholder="Entrez l'email du responsable">
                                      </div>
                                      </div>
                                      <div class="col-sm-5">
                                      <div class="form-group">
                                        <label>Adresse</label>
                                        <input name="adresseResponsable" type="text" class="form-control" placeholder="Entrez l'adresse du responsable">
                                      </div>
                                  </div>
                                      
                                

                                </div>
                            </div>
                            <div class="tab-pane" id="address">
                                <div class="row">
                                   
                                        <h4 class="info-text"> Informations sur le dossier juridique </h4>
                                    
                                  
                                    <div class="col-sm-5 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>Etat du certificat négatif</label><br>
                                             <select name="certificatNegatif" class="form-control">
                                                <option value="Déposé"> Déposé </option>
                                                <option value="Refusé"> Refusé </option>
                                                <option value="Validé"> Validé </option>
                                              
                                            </select>
                                          </div>
                                    </div>
                                    <div class="col-sm-5">
                                         <div class="form-group">
                                            <label>Etat du statut</label><br>
                                             <select name="statut" class="form-control">
                                                <option value="En cours de rédaction"> En cours de rédaction </option>
                                                <option value="En cours de légalisation"> En cours de légalisation </option>
                                                <option value="Enregistré"> Enregistré </option>
                                                
                                            </select>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer height-wizard">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Suivant' />
                                <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Terminer' />

                            </div>

                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Précedent' />
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@endsection