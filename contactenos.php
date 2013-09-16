

<?php
	include("header.php"); 
	$headerTable = "<table class=table>
		  		<caption></caption>
		  		<thead>
		  			<tr>
		  				<th>Nombre</th><th>Posicion</th><th>Telefono</th><th>Fax</th>
		  			</tr>
		  		</thead>
		  		<tbody>
		  			<tr>";
    $footerTable ="</tr>
		  		</tbody>
		  	</table>";
?>
<script>
    jQuery(document).ready(function($) {
		$("#ajax-contact-form").submit(function() {
			var str = $(this).serialize();
			$.ajax({
				type: "POST",
				url: "<?php echo THEMEROOT; ?>/contact/includes/contact-process.php",
				data: str,
				success: function(msg) {
	    			// Message Sent? Show the 'Thank You' message and hide the form
	    			if(msg == 'OK') {
	    				result = '<div class="notification_ok alert alert-success">Your message has been sent. Thank you!</div>';
	    				$("#fields").hide();
	    			} else {
	    				result = msg;
	    			}
	    			$('#note').html(result);
				}
			});
			return false;
		});
	});
</script>

<div class="row">
	<div class="span12">
		<h2>Comuniquese con nosotros</h2>
		<div class="span7">
			<p>Por favor, diligencie los siguientes datos para el envio de un correo a nuestras 
			oficinas, para que un especialista se contacte con usted los mas pronto posible.</p>
			<div id="note"></div>
	        <div id="fields" class="contact-form">             	
	            <form id="ajax-contact-form" action="">
	                <div class="controls controls-row">
	                  <input class="span3" type="text" name="name" placeholder="Nombre (requerido)">
	                  <input class="span3" type="text" name="email" placeholder="Correo Electronico (requerido)">
	                </div> 
	                <div class="controls controls-row">  
	                  <input class="span7" type="text" name="subject" placeholder="Asunto (opcional)">
	                </div>  
	                <div class="controls controls-row">  
	                  <textarea class="span7" name="message" placeholder="Ingrese el contenido del mensaje aquí." rows="10"></textarea>
	                </div>
	                <input type="submit" class="btn btn-large color-bg" name="submit" value="Enviar mensaje">
	            </form>
	        </div><!--/contact-form-->	
		</div>
		<div class="span4">
			<div class="map-container">
                <div class="dummy"></div>
                <div class="element">	
                    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=Tanta,+Egypt&amp;daddr=&amp;hl=en&amp;geocode=Fc3D1QEdOAfZASk18PyqXcn3FDFCroxeDIIhdA&amp;sll=30.786509,31.000376&amp;sspn=0.001307,0.002642&amp;doflg=ptk&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=30.786509,31.000376&amp;spn=0.001307,0.002642&amp;output=embed"></iframe>
                </div>
            </div>
            <section>
               	<address>
                  <strong>Oficina Principal</strong><br/>
                  <i class="icon-home marR10" pop="Address"></i> 795 Folsom Ave, Suite 600, 
                      San Francisco, CA 94107<br/>
                  <i class="icon-phone marR10" pop="Phone"></i> (123) 456-7890 <br/>
                  <i class="icon-print marR10" pop="Fax"></i> (125) 488-7790 <br/>
                  <i class="icon-time marR10" pop="Time"></i> Mon. - Fri. 10:00 - 21:00 <br/>
                  <i class="icon-envelope-alt marR10" pop="E-mail"></i> <a href="mailto:#">first.last@gmail.com</a>
                </address>
            </section>	
		</div>		
	</div>

	<div class="span12">
		<h2>Información de nuestros empleados</h2>
		<ul class="nav nav-tabs" id="myTab">
		  <li class="active"><a href="#administracion">Administración</a></li>
		  <li><a href="#financiamiento_primas">Financiamiento Primas</a></li>
		  <li><a href="#cheques_posfechados">Cheques Posfechados</a></li>
		  <li><a href="#gestion_cartera">Gestion Cartera</a></li>
		  <li><a href="#custodia_contragarantias">Custodia Contragarantias</a></li>
		  <li><a href="#gerencia">Gerencia</a></li>
		</ul>
		 
		<div class="tab-content">
		  <div class="tab-pane active" id="administracion">
		  	<?php echo $headerTable;?>
		  		<td>Sandra Sanchez</td><td>Coordinadora Administrativa</td><td>6222962 ext:111</td><td>6223953</td>
		  	<?php echo $footerTable?>
		  </div>
		  <div class="tab-pane" id="financiamiento_primas">
		  	<?php echo $headerTable;?>
		  		<td>Paula García</td><td>Coordinadora Financiaciones</td><td>6222962 ext:109</td><td>6223953</td>		  			 	 	 
		  	<?php echo $footerTable?>
		  </div>
		  <div class="tab-pane" id="cheques_posfechados">
		  	<?php echo $headerTable;?>
		  		<td>Clara Mendez</td><td>Asistente Cheques Posfechados</td><td>6222962 ext:110</td><td>6223953</td>		  			  	 	 
		  	<?php echo $footerTable?>
		  </div>
		  <div class="tab-pane" id="gestion_cartera">
		  	<?php echo $headerTable;?>		  		 	 	 
		  		<td>Katerim Bejarano</td><td>Coordinadora Cartera</td><td>6222962 ext:104</td><td>6223953</td>
		  	<?php echo $footerTable?>
		  </div>
		  <div class="tab-pane" id="custodia_contragarantias">
		  	<?php echo $headerTable;?>
		  		<td>Laura Perez</td><td>Coordinadora Contragarantías</td><td>6222962 ext:113</td><td>6223953</td>		  			 	 	 
		  	<?php echo $footerTable?>
		  </div>
		  <div class="tab-pane" id="gerencia">
		  	<?php echo $headerTable;?>
		  		<td>Tatiana Medina</td><td>Gerente</td><td>6222962</td><td>6223953</td>
		  	<?php echo $footerTable?>
		  </div>
		</div>	
	</div>	
</div>


<?php 
	include("footer.php");
?>

<script>
	$(document).ready(function(){
		PageModule.activeTabs();	
	});	
</script>