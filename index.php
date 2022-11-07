<!DOCTYPE html>
<html lang="es">
  <head>
    <title>
       BanBif - Solicita tu tarjeta de crédito</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1">
    <meta name="description" content="BanBif solicita tu credito">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,500,600,700,900,900i&amp;display=swap" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,600,700,900,900i&amp;display=swap" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <!-- Google Tag Manager-->
    <!-- End Google Tag Manager-->
  </head>
  <body>
    <!-- Google Tag Manager (noscript)-->
    <!-- End Google Tag Manager (noscript)-->
    <div id="landing">
      <div class="loader centervh"></div>
      <div id="container">
        <div class="container-fluid">
          <div class="row">
            <header class="intro section" id="home">
              <div class="container">
                <nav class="nav-bar">
                  <div class="container-fluid">
                    <div class="logo-brand">
                      <picture>
                        <source srcset="images/Banbif_logo.webp" media="(min-width: 480px)"><img src="images/Banbif_logo.webp" alt="Banbif">
                      </picture>
                    </div>
                  </div>
                </nav>
                <div class="row justify-content-between align-items-center">
                  <div class="box-content col-12 col-sm-6 col-xl-6">
                    <h3>Solicita tu<span class="first">Tarjeta de Crédito</span><span class="last">y obten <strong>S/ 400 </strong> en puntos</span></h3><img src="images/tarjeta.webp" alt="Tarjeta" loading="lazy">
                  </div>
                  <div class="enis_block_coti col-12 col-sm-6 col-xl-6">
                    <div id="cotizar">
                      <div class="row">
                        <h4> <span>Descubre lo que tenemos  <strong>Para Tí</strong></span></h4>
                      </div>
                      <form class="container formPerformLead" id="frm_enviar" method="post" action="" onsubmit="return false;" target="frame">
                        <div class="row fields">
                          <div class="col-xs-6">
                            <div class="form-group">
                              <select class="form-control frm-doc" id="tdocumet" name="distrito" required="">
                                <option value="DNI" selected>DNI</option>
                                <option value="Carnet de extranjería">Carnet de extranjería</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-xs-6">
                            <div class="form-group">
                              <input class="form-control enis-input-group" type="text" placeholder="DNI" name="document">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12 col-xl-12">
                            <div class="form-group frm-email">
                              <input class="form-control enis-input-group" type="email" placeholder="Email *" name="email" required="">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12 col-xl-12">
                            <div class="form-group frm-mobile">
                              <input class="form-control enis-input-group" type="text" placeholder="Celular *" name="phone" required="" pattern="^(9)[0-9]{8}|^[4|5|6|7][0-9]{6}">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12 col-xl-12">
                            <div class="form-group linea">
                              <input class="enis-input-group" id="terms" name="acepto" type="checkbox" required="">
                              <label class="lbl" for="terms"><span></span> He leído y acepto los términos y condiciones. <a href="#">Ver aquí</a></label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12 col-xl-12">
                            <div class="form-group linea">
                              <label class="lbl" for="tratamiento"><span></span> He leído y acepto el uso del tratamiento de mis datos personales.<a href="#">Ver aquí</a>
                                <input class="enis-input-group" id="tratamiento" name="tratamiento" type="checkbox">
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12 col-xl-12">
                            <div class="form-group frm-item send">
                              <input class="btn btn-lg btn-block" id="send_form" type="button" value="Comencemos">
                            </div>
                          </div>
                        </div>
                      </form>
                      <div class="row">
                        <div class="col-xs-12">
                          <div class="tratamiento">
                            <h5>Tratamiento de datos personales</h5>
                            <p>La conectividad de BanBif APP depende del operador móvil del usuario, no siendo responsabilidad de BANBIF. El acceso al APP generará consumo de datos móviles del usuario. Información sobre los costos de nuestros productos o servicios disponibles en las oficinas de atención al público, a traves del tarifario y en nuestra página web w w w . b a n b i f . c o m . pe</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </header>
          </div>
        </div>
      </div>
    </div>
    <script src="js/main.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script>
      var sending = false,
      	btn_send = document.getElementById('send_form');
      $(document).ready(function() {
      	jQuery.validator.addMethod(
      	  "regex",
      	   function(value, element, regexp) {
      	       if (regexp.constructor != RegExp)
      	          regexp = new RegExp(regexp);
      	       else if (regexp.global)
      	          regexp.lastIndex = 0;
      	          return this.optional(element) || regexp.test(value);
      	   }, "Ingrese un número de celular correcto. No se permite el caracter '+'"
      	);
      
      	$("#frm_enviar").validate({
      		rules: {
      			document: {
      				required: true,
      				regex: /^[0-9]{8,12}$/
      			},
      			acepto: "required",
      			// captcha: "required",
      			email: {
      				required: true,
      				email: true
      			},
      			phone: {
      				required: true,
      				regex: /^(9)[0-9]{8}$|^[4|5|6|7][0-9]{6}$/
      			}
      		},
      		messages: {
      			document: "Campo requerido",
      			email: "El campo Email es requerido",
      			phone: "El campo Teléfono es requerido",
      			acepto: "Debe aceptar los términos y condiciones",
      		},
      		submitHandler: function(form) {
      			// some other code
      			// maybe disabling submit button
      			// then:
      			// console.log($(form).serialize());
      			console.log('enviando')
      			if (sending==false) {
      				btn_send.classList.add('sending');
      				btn_send.setAttribute('disabled', true);
      				sending = true;
      				$.post('verify.php', {code: $('#captcha_in').val()}, function(response, textStatus, xhr) {
      					console.log('enviando');
      					if (response=="success") {
      						// document.getElementById('frm_enviar').submit();
      						formData = $(form).serialize();
      						// SEND DB LEADS
      						$.post('sendmail.php', formData, function(response, textStatus, xhr) {
      							console.log(response);
      						});
      						//- return false;
      						$.post(app.myaction, formData, function(response, textStatus, xhr) {
      							console.log(response);
      							// $(form).submit();
      							$(location).attr('href', response.typ);
      						});
      						return false;
      					}
      					alert('El texto de la imagen no es el correcto');
      					sending = false;
      					btn_send.classList.remove('sending');
      					btn_send.removeAttribute('disabled');
      				});
      			}
      			else {
      				console.log('Se esta enviando el form!');
      			}
      		}
      	});
      
      	btn_send.onclick = function(){
      		if ($("#frm_enviar").valid()) {
      			console.log('enviando')
      			if (sending==false) {
      				btn_send.classList.add('sending');
      				btn_send.setAttribute('disabled', true);
      				sending = true;
      				$.post('verify.php', {code: $('#captcha_in').val()}, function(response, textStatus, xhr) {
      					console.log('enviando');
      					if (response=="success") {
      						// document.getElementById('frm_enviar').submit();
      						// form = $('#frm_enviar');
      						formData = $('#frm_enviar').serialize();
      						// SEND DB LEADS
      						$.post('sendmail.php', formData, function(response, textStatus, xhr) {
      							console.log(response);
      							// $(location).attr('href', app.typ);
      						});
      
      						$.post(app.myaction, formData, function(response, textStatus, xhr) {
      							console.log(response);
      							//[cdx] analytics js
      							ga('create', 'UA-141488115-7', 'auto');
      							ga('send', 'event', 'programa/carrera', $("#linea_interes").val(), $('#sede').val());
      
      							var linea_interes = document.querySelector('#linea_interes'),
      								tipo = "";
      							switch (linea_interes.selectedIndex) {
      								case 1:
      									tipo = "cocina"
      									break;
      								case 2:
      									tipo = "cocina"
      									break;
      								case 3:
      									tipo = "bar"
      									break;
      								case 4:
      									tipo = "panaderia"
      									break;
      								default:
      									tipo = ""
      									break;
      							}
      							query = (tipo!="") ? "?interes="+tipo:"";
      							// console.log(query);
      							var typ;
      							switch ($('#sede').val()) {
      								case "Magdalena del Mar":
      									typ = "./ThankYouPageMagdalena.php"
      									break;
      								case "Los Olivos":
      									typ = "./ThankYouPageLosOlivos.php"
      									break;
      								default:
      									typ = "./gracias.php"
      									break;
      							}
      							// $(location).attr('href', response.typ);
      							console.log(typ + query);
      							$(location).attr('href', typ + query);
      						});
      
      						$('#frm_enviar').submit();
      						return false;
      					}
      					alert('El texto de la imagen no es el correcto');
      					sending = false;
      					btn_send.classList.remove('sending');
      					btn_send.removeAttribute('disabled');
      				});
      			}
      			else {
      				console.log('Se esta enviando el form!');
      			}
      		}
      		else {
      			console.log("No Valid!!!");
      		}
      	}
      });
    </script>
  </body>
</html>