
<div class="box box-primary">
	<div class="box-header with-border">
	  <h3 class="box-title">Identit&eacute;</h3>
	</div><!-- /.box-header -->
	<!-- form start -->
	<div class="form">
	  <div class="box-body">
		<input name="ID_PrimKey" value="<?php echo $ID_PrimKey?>" type="hidden" />
		
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<label></label>
					<select class="form-control">
						<option>Sexe</option>
						<option>Masculin</option>
						<option>F&eacute;minin</option>
					</select>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<label></label>
					<select class="form-control" name="titre" id="titre" onchange="change_sexe(this.value)" title="Modifie automatiquement le sexe, sauf pour Enfant"> 
						<option>Civilit&eacute;</option>
						<option <?php if ($envoyer=="Modifier" OR $envoyer=="Dupliquer") { if ($ligne2["FchPat_Titre"]=="Madame" or $ligne2["FchPat_Titre"]=="Mme") echo "selected='selected'";} ?>  value="Madame">
						Madame
						</option>
						<option <?php if ($envoyer=="Modifier" OR $envoyer=="Dupliquer") { if ($ligne2["FchPat_Titre"]=="Monsieur" or $ligne2["FchPat_Titre"]=="Mr") echo "selected='selected'";} ?> value="Monsieur">
						Monsieur
						</option>
						<option <?php if ($envoyer=="Modifier" OR $envoyer=="Dupliquer") { if ($ligne2["FchPat_Titre"]=="Mademoiselle" or $ligne2["FchPat_Titre"]=="Mlle") echo "selected='selected'"; }?> value="Mademoiselle">
						Mademoiselle
						</option>
						<option  <?php if ($envoyer=="Modifier" OR $envoyer=="Dupliquer") { if ($ligne2["FchPat_Titre"]=="Enft" or $ligne2["FchPat_Titre"]=="Enfant" or stripslashes($ligne2["FchPat_Titre"])=="L'enfant" ) echo "selected='selected'";} ?> value="L'enfant">
						Enfant
						</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input name="Nom" id="Nom" type="text" value ="<?php echo stripslashes($Nom) ?>" size="40" maxlength="50" class="form-control col-xs-5" placeholder="Nom">
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input name="Prenom" id="Prenom" type="text" value ="<?php echo stripslashes($Prenom) ?>" size="40" maxlength="30"  class="form-control col-xs-5" placeholder="Pr&eacute;nom">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input name="NomJF" id="NomJF" type="text" value ="<?php echo stripslashes($jeune_fille) ?>" size="40" maxlength="50" class="form-control" placeholder="Nom de JF">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<div class="input-group">
					  <div class="input-group-addon">
						<i class="fa fa-calendar"></i>
					  </div>
					  <input name="naissance" id="datepicker" type="text" value="<?php echo $Nee ?>" size="12" maxlength="10" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask="" placeholder="Date de naissance">
					</div><!-- /.input group -->
				</div>
			</div>
			<div class="col-xs-6">
				<div class="form-group">
					<div class="col-md-6">
					  <input type="text" class="form-control" placeholder="&agrave;ge">
					</div>
					<div class="col-xs-6">
					  <input type="text" class="form-control" placeholder="mois">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
		<div class="col-xs-6">
		<div class="form-group">
		 
		  <select class="form-control">
			<option>R.Gem</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
		  </select>
		</div>
		</div>
		</div>
		<div class="form-group">
			<div class="input-group">
			  <div class="input-group-addon">
				<i class="fa fa-tasks"></i>
			  </div>
			  <input name="Profession" id="Profession" type="text" value ="<?php echo stripslashes($profession) ?>" size="40" maxlength="48" class="form-control" placeholder="Profession">
			</div><!-- /.input group -->
		</div>
	  </div><!-- /.box-body -->
	</div>
  </div><!-- /.box -->