(function ($) {
  "use strict";
  
  // Preloader
  $(window).on('load', function () {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('slow', function () {
        $(this).remove();
      });
    }
  });

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
    return false;
  });
  
	var nav = $('nav');
	var navHeight = nav.outerHeight();

	/*--/ ScrollReveal /Easy scroll animations for web and mobile browsers /--*/
	window.sr = ScrollReveal();
	sr.reveal('.foo', { duration: 1000, delay: 15 });

	/*--/ Carousel owl /--*/
	$('#carousel').owlCarousel({
		loop: true,
		margin: -1,
		items: 1,
		nav: true,
		navText: ['<i class="ion-ios-arrow-back" aria-hidden="true"></i>', '<i class="ion-ios-arrow-forward" aria-hidden="true"></i>'],
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true
	});

	/*--/ Animate Carousel /--*/
	$('.intro-carousel').on('translate.owl.carousel', function () {
		$('.intro-content .intro-title').removeClass('zoomIn animated').hide();
		$('.intro-content .intro-price').removeClass('fadeInUp animated').hide();
		$('.intro-content .intro-title-top, .intro-content .spacial').removeClass('fadeIn animated').hide();
	});

	$('.intro-carousel').on('translated.owl.carousel', function () {
		$('.intro-content .intro-title').addClass('zoomIn animated').show();
		$('.intro-content .intro-price').addClass('fadeInUp animated').show();
		$('.intro-content .intro-title-top, .intro-content .spacial').addClass('fadeIn animated').show();
	});

	/*--/ Navbar Collapse /--*/
	$('.navbar-toggle-box-collapse').on('click', function () {
		$('body').removeClass('box-collapse-closed').addClass('box-collapse-open');
	});
	$('.close-box-collapse, .click-closed').on('click', function () {
		$('body').removeClass('box-collapse-open').addClass('box-collapse-closed');
		$('.menu-list ul').slideUp(700);
	});

	/*--/ Navbar Menu Reduce /--*/
	$(window).trigger('scroll');
	$(window).bind('scroll', function () {
		var pixels = 50;
		var top = 1200;
		if ($(window).scrollTop() > pixels) {
			$('.navbar-default').addClass('navbar-reduce');
			$('.navbar-default').removeClass('navbar-trans');
		} else {
			$('.navbar-default').addClass('navbar-trans');
			$('.navbar-default').removeClass('navbar-reduce');
		}
		if ($(window).scrollTop() > top) {
			$('.scrolltop-mf').fadeIn(1000, "easeInOutExpo");
		} else {
			$('.scrolltop-mf').fadeOut(1000, "easeInOutExpo");
		}
	});

	/*--/ Property owl /--*/
	$('#property-carousel').owlCarousel({
		loop: true,
		margin: 30,
		responsive: {
			0: {
				items: 1,
			},
			769: {
				items: 2,
			},
			992: {
				items: 3,
			}
		}
	});

	/*--/ Property owl owl /--*/
	$('#property-single-carousel').owlCarousel({
		loop: true,
		margin: 0,  
		nav: true,
		navText: ['<i class="ion-ios-arrow-back" aria-hidden="true"></i>', '<i class="ion-ios-arrow-forward" aria-hidden="true"></i>'],
		responsive: {
			0: {
				items: 1,
			}
		}
	});

	/*--/ News owl /--*/
	$('#new-carousel').owlCarousel({
		loop: true,
		margin: 30,
		responsive: {
			0: {  
				items: 1,
			},
			769: {
				items: 2,
			},
			992: {
				items: 3,
			}
		}
	});

	/*--/ Testimonials owl /--*/
	$('#testimonial-carousel').owlCarousel({
		margin: 0,
		autoplay: true,
		nav: true,
		animateOut: 'fadeOut',
		animateIn: 'fadeInUp',
		navText: ['<i class="ion-ios-arrow-back" aria-hidden="true"></i>', '<i class="ion-ios-arrow-forward" aria-hidden="true"></i>'],
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1,
			}
		}
	});

})(jQuery);


// ------ Adding new service type options based on service group options -------


// ------ for income tax services
$(document).ready(function () {
	$("#income").click(function () {
		$('#service_type')
			.find('option')
			.remove()
			.end()
			.append('<option value="return">Tax Return of various entities</option>')
			.append('<option value="ScruitinyAssessment">Scruitiny Assessment</option>')
			.append('<option value="response142_1">Response of 142(1)</option>')
			.append('<option value="response143_1">Response of 143(1)</option>')
			.append('<option value="refunds">Refunds</option>')
			.append('<option value="legal_consultancy">Legal Consultancy</option>')
			.append('<option value="response_defective_returns_139_9">Response of Defective Returns 139(9)</option>')
			.append('<option value="rectification154">Rectification under 154</option>')
			.append('<option value="various_forms_15CA_10BA">Various Forms like form 15CA, form 10BA</option>')
			.append('<option value="cit_appeals_250_4">CIT appeals under 250(4)</option>')
			.append('<option value="Eassessment">E Assessment</option>')
			.append('<option value="trust_12A">Trust under 12A/12AA (809)</option>')
			.append('<option value="other">Other</option>')


	});
});

// ------ for gst services
$(document).ready(function () {
	$("#gst").click(function () {
		$('#service_type')
			.find('option')
			.remove()
			.end()
			.append('<option value="New/Amendment of Registration">New/Amendment of Registration</option>')
			.append('<option value="Surrender/Cancellation of GST">Surrender/Cancellation of GST</option>')
			.append('<option value="GST Returns">GST Returns</option>')
			.append('<option value="Refunds">GST Refunds</option>')
			.append('<option value="E-way Bill">E-way Bill</option>')
			.append('<option value="Legal Consultancy">Legal Consultancy</option>')
			.append('<option value="Revocation of Cancellation">Revocation of Cancellation</option>')
			.append('<option value="Compliance to Notices">Compliances to Notices</option>')
			.append('<option value="Departmental Cases">Departmental Cases/Matters</option>')
			.append('<option value="Other">Other</option>')
		
	});
});

// ------ for tds services
$(document).ready(function () {
	$("#tds").click(function () {
		$('#service_type')
			.find('option')
			.remove()
			.end()
			.append('<option value="Return">TDS Returns</option>')
			.append('<option value="TDS Refunds">TDS Refunds</option>')
			.append('<option value="Certificates form 16/16A/16B">TDS Certificates - Form 16/16A/16B</option>')
			.append('<option value="Justification Report">Justification Report</option>')
			.append('<option value="TDS Corrections">TDS Corrections</option>')
			.append('<option value="Waiver Certificate under 197( Form 13)">Waiver Certificate under 197( Form 13)</option>')
			.append('<option value="Legal Consultancy">Legal Consultancy</option>')
			.append('<option value="Other">Other</option>')
	});
});

// ------ for company services
$(document).ready(function () {
	$("#company").click(function () {
		$('#service_type')
			.find('option')
			.remove()
			.end()
			.append('<option value="Incorporation">Company Incorporation</option>')
			.append('<option value="Change in particulars">Change in particulars</option>')
			.append('<option value="Closure/Liquidtion">Closure/Liquidtion</option>')
			.append('<option value="Submission of ROC forms">Submission/Resubmission of ROC forms</option>')
			.append('<option value="Annual e-filing">Annual E-filing</option>')
			.append('<option value="Legal Drafting">Legal Drafting</option>')
			.append('<option value="Compliance Notice from RBI and ROC">Compliance Notice from RBI and ROC</option>')
			.append('<option value="Transfer/Sale-Purchase of Companies">Transfer/Sale-Purchase of Companies</option>')
			.append('<option value="Legal Consultancy">Legal Consultancy</option>')
			.append('<option value="Other">Other</option>')
		
	});
});

// ------ for accounting services
$(document).ready(function () {
	$("#accounting").click(function () {
		$('#service_type')
			.find('option')
			.remove()
			.end()
			.append('<option value="Book Keeping - Tally,Busywin">Book Keeping - Tally, Busywin</option>')
			.append('<option value="Financial Statements">Financial Statements</option>')
			.append('<option value="Day to Day Stock/Inventories">Day to Day Stock/Inventories</option>')
			.append('<option value="Projected Financial Statements">Projected Financial Statements</option>')
			.append('<option value="Provisional Financial Statements">Provisional Financial Statements</option>')
			.append('<option value="Deferred Tax Assets/ Liability">Deferred Tax Assets/ Liability</option>')
			.append('<option value="Other">Other</option>')
	});
});

// ------ for import/export services
$(document).ready(function () {
	$("#import").click(function () {
		$('#service_type')
			.find('option')
			.remove()
			.end()
			.append('<option value="Issuance, Modification, Surrender(IEC)">Issuance, Modification and Surrender(IEC)</option>')
			.append('<option value="Shipping/ Bill of Lading">Shipping/ Bill of Lading</option>')
			.append('<option value="FIRC/ BIRC">FIRC/ BIRC</option>')
			.append('<option value="Export Realisation">Export Realisation</option>')
			.append('<option value="Any Notice - RBI/ DGFT">Any Notice - RBI/ DGFT</option>')
			.append('<option value="Disinvestment in any country">Disinvestment in any country</option>')
			.append('<option value="Legal Consultancy">Legal Consultancy</option>')
			.append('<option value="Other">Other</option>')
		
	});
});

// ------ for others services
$(document).ready(function () {
    $("#others").click(function () {
        $('#service_type')
            .find('option')
            .remove()
            .end()
            .append('<option type="radio" value="Digital Signature">Digital Signature</option>')
            .append('<option value="Drafting of Legal Documents - Partnership Deed/ Idemnity Bond">Drafting of Legal Documents - Partnership Deed/ Idemnity Bond</option>')
			.append('<option value="Issuance/ Correction of PAN, TAN">Issuance/ Correction of PAN, TAN</option>')
			.append('<option value="Other">Other</option>')

    });
});





//  contact form validation//
