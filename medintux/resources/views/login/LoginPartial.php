<div class="login-box">
            <div class="login-logo">
                <a href="../../index2.html"><b>Medin</b>TUX</a>
            </div><!-- /.login-logo -->
            <div class="login-box-body box box-primary box-solid" style="padding:0px;">
		        <div class="box-header with-border">
                    <h2 class="text-center">
			          MedWebTux - Dossier M&eacute;dical Patient
			        </h2>
		        </div>
                <div class="box-body">
                
                <form method="post" action="verifLogin.php" id="form_login" onsubmit="return verif_champ(this.select_sign.value,this.login.value,this.password.value);"><!-- login-mot de passe -->

			    <section class="content">
				    <div class="row">
				    <div class="col-md-6">
				      <!-- Widget: user widget style 1 -->
				      <div class="box box-widget widget-user">
					    <!-- Add the bg color to the header using any of the bg-* classes -->
					    <div class="widget-user-header bg-aqua-active">
					      <h3 class="widget-user-username">Connection</h3>
					      <h5 class="widget-user-desc">Founder &amp; CEO</h5>
					    </div>
					    <div class="widget-user-image">
					      <img class="img-circle" src="./dist/img/user1-128x128.jpg" alt="User Avatar">
					    </div>
					    <div class="box-footer" style="border: solid #00a7d0 1px;">
						    <label></label>
						    <div class="form-group has-feedback">
							    <input type="text" name="login" id="login" size="10"  class="form-control" placeholder="Identifiant">
							    <span class="glyphicon glyphicon-user form-control-feedback"></span>
						    </div>
						    <div class="form-group has-feedback">
							    <input type="password" name="password" id="password" size="10"  class="form-control" placeholder="Password">
							    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
						    </div>
						    <div class="form-group">
                                <select class="form-control" name="select_sign" id="select_sign" onclick="request(readData);">
	                                
	                            </select>
						    </div>
					    </div>
				      </div><!-- /.widget-user -->
				    </div><!-- /.col -->
				
				    <div class="col-md-6">
				

                  <div class="box box-primary border-solid">
                    <div class="box-header with-border">
                      <h3 class="box-title">D&eacute;marrer avec la page</h3>                  
                    </div><!-- /.box-header -->
                    <div class="box-body" style="display: block;">
                        <!-- Message to the right -->
                        <div class="direct-chat-msg right" style="margin:0">                                            
					      <div class="direct-chat-img" style="position: relative;    top: 7px;">
						      <input type="radio" name="page" class="flat-red" value="index" style="position: absolute; opacity: 0;" checked="">
						      <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
					      </div>
                          <div class="direct-chat-text">
                            Accueil
                          </div><!-- /.direct-chat-text -->
                        </div><!-- /.direct-chat-msg -->
                        <div class="direct-chat-msg right" style="margin:0">                                            
					      <div class="direct-chat-img" style="position: relative;    top: 7px;">
						      <input type="radio" name="page" class="flat-red" style="position: absolute; opacity: 0;" >
						      <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
					      </div>
                          <div class="direct-chat-text">
                            Agenda
                          </div><!-- /.direct-chat-text -->
                        </div><!-- /.direct-chat-msg -->                    
					    <div class="direct-chat-msg right" style="margin:0">                                            
					      <div class="direct-chat-img" style="position: relative;    top: 7px;">
						      <input type="radio" name="page" class="flat-red" style="position: absolute; opacity: 0;" >
						      <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
					      </div>
                          <div class="direct-chat-text">
                            Rendez-vous r&eacute;p&eacute;t&eacute;s
                          </div><!-- /.direct-chat-text -->
                        </div><!-- /.direct-chat-msg -->
					    <div class="direct-chat-msg right" style="margin:0">                                            
					      <div class="direct-chat-img" style="position: relative;    top: 7px;">
						      <input type="radio" name="page" class="flat-red" style="position: absolute; opacity: 0;">
						      <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
					      </div>
                          <div class="direct-chat-text">
                            Patients
                          </div><!-- /.direct-chat-text -->
                        </div><!-- /.direct-chat-msg -->
					    <div class="direct-chat-msg right" style="margin:0">
					      <div class="direct-chat-img" style="position: relative;    top: 7px;">
						      <input type="radio" name="page" class="flat-red" style="position: absolute; opacity: 0;">
						      <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
					      </div>
                          <div class="direct-chat-text">
                            Intervenants
                          </div><!-- /.direct-chat-text -->
                        </div><!-- /.direct-chat-msg -->                   
					    <div class="direct-chat-msg right" style="margin:0">                                            
					      <div class="direct-chat-img" style="position: relative;    top: 7px;">
						      <input type="radio" name="page" class="flat-red" style="position: absolute; opacity: 0;">
						      <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
					      </div>
                          <div class="direct-chat-text">
                            Vidal
                          </div><!-- /.direct-chat-text -->
                        </div><!-- /.direct-chat-msg -->                   
					    <div class="direct-chat-msg right" style="margin:0">                                            
					      <div class="direct-chat-img" style="position: relative;    top: 7px;">
						      <input type="radio" name="page" class="flat-red" style="position: absolute; opacity: 0;">
						      <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
					      </div>
                          <div class="direct-chat-text">
                            Interactions
                          </div><!-- /.direct-chat-text -->
                        </div><!-- /.direct-chat-msg -->
                  
                    </div><!-- /.box-body -->
                  </div><!-- /.box -->
	
			
				    </div>
				    </div><!-- /.row -->
				    <div class="row">
					    <div class="col-xs-3">
					      <div class="checkbox icheck">
						    <label>
						      <input type="checkbox"> Se souvenir de moi
						    </label>
					      </div>
					    </div><!-- /.col -->
					    <div class="col-xs-3">
					      <button type="submit" class="btn btn-primary btn-block btn-flat">Se connecter</button>
					    </div><!-- /.col -->
				    </div>
                </form>

                <a href="#">Mot de passe oubli&eacute;</a><br>
                </div>
            </div>
        </div>
	 </form>