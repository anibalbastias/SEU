
$(document).ready(function(){


       
       
	/* ---- Countdown timer ---- */

//	var sec = 5,	/*-- segundos --*/
//		min = 0,	/*-- minutos --*/
//		hr = 0,		/*-- horas --*/
//		dia = 0;    /*-- dias --*/
	
        var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
        var f=new Date();
        
	var sec, min, hr, dia;
        
            sec = 5;
            min = 1;
            hr = 2;
            
            dia = 3;
            
            
//            if(diasSemana[f.getDay()] == 'Lunes'){ dia = 3; }
//            if(diasSemana[f.getDay()] == 'Martes'){ dia = 2; }
//            if(diasSemana[f.getDay()] == 'Miércoles'){ dia = 1; }
//            if(diasSemana[f.getDay()] == 'Jueves'){ dia = 0; }
//            if(diasSemana[f.getDay()] == 'Viernes'){ dia = 6; }
//            if(diasSemana[f.getDay()] == 'Sábado'){ dia = 5; }
//            if(diasSemana[f.getDay()] == 'Domingo'){ dia = 4; }
        
       
        
        
	$('#counter').countdown({
	
		/*
		timestamp : (new Date()).getTime() + 2*24*60*60*1000
		*/
		timestamp : (new Date()).getTime() + (sec*1000) + (min*60*1000) + (hr*60*60*1000) + (dia*24*60*60*1000)
		
	});


	/* ---- Animations ---- */

	$('#links a').hover(
		function(){ $(this).animate({ left: 3 }, 'fast'); },
		function(){ $(this).animate({ left: 0 }, 'fast'); }
	);

	$('footer a').hover(
		function(){ $(this).animate({ top: 3 }, 'fast'); },
		function(){ $(this).animate({ top: 0 }, 'fast'); }
	);


	/* ---- Using Modernizr to check if the "required" and "placeholder" attributes are supported ---- */

	if (!Modernizr.input.placeholder) {
		$('.email').val('Input your e-mail address here...');
		$('.email').focus(function() {
			if($(this).val() == 'Input your e-mail address here...') {
				$(this).val('');
			}
		});
	}

	// for detecting if the browser is Safari
	var browser = navigator.userAgent.toLowerCase();

	if(!Modernizr.input.required || (browser.indexOf("safari") != -1 && browser.indexOf("chrome") == -1)) {
		$('form').submit(function() {
			$('.popup').remove();
			if(!$('.email').val() || $('.email').val() == 'Input your e-mail address here...') {
				$('form').append('<p class="popup">Please fill out this field.</p>');
				$('.email').focus();
				return false;
			}
		});
		$('.email').keydown(function() {
			$('.popup').remove();
		});
		$('.email').blur(function() {
			$('.popup').remove();
		});
	}


});

