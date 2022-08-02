$(document).ready(function() {
	
	$('[data-toggle="tooltip"]').tooltip()

	$(".numberFormat11").mask("99999999999");
	$(".numberFormat6").mask("999999");
	$(".numberFormat5").mask("99999");
	$(".numberFormat3").mask("999");
	$(".numberFormat2").mask("99");
	$(".numberFormat1").mask("9");
	
	$(".tooltip-button").hover(function(){
		$(this).find(".tooltip-main").show();
	},function(){
		$(this).find(".tooltip-main").hide();	
	});	

	$('.currency').turkLirasi();

	$('.ustkategori > ol').hide();
		
	$('.sortable i.plus-minus').click(function() {
		if ($(this).hasClass("fa-plus")) {
			$(this).parent().next().show();
			$(this).attr("class","fa fa-minus");
		}else{
			$(this).parent().next().hide();
			$(this).attr("class","fa fa-plus");
		}
	});
	
	$("#secilikategori").parent().parent().parent().parent().show();
	$("#secilikategori").parent().parent().parent().show();
	$("#secilikategori").parent().parent().show();
	  

	$(".check-sec").click(function () {
		if(!$(this).is(':checked')){
			$(this).prev().attr("name","kategoriok[]");
		}else{
			$(this).prev().attr("name","");
		}
	});
	$(".kategori-slider-box").hide();
	$('#kategorisliderbuton').click(function() {
		$('.kategori-slider-box').show();
		
    });
	$(".urun-fotograf-box").hide();
	$('#urunfotografbuton').click(function() {
		$('.urun-fotograf-box').show();
    });

	$('.member-tab > li > a').click(function() {
		$('.kategori-slider-box').hide();
		$('.urun-fotograf-box').hide();
		$('.urun-video-box').hide();
		
    });

	
	// Multiple CheckBox Start

		$("#checkAll").change(function () {
			$(".spot2 input:checkbox").prop('checked', $(this).prop("checked"));
		});
		$("#checkAll3").change(function () {
			$(".spot3 input:checkbox").prop('checked', $(this).prop("checked"));
		});
		$("#checkAll4").change(function () {
			$(".spot4 input:checkbox").prop('checked', $(this).prop("checked"));
		});
		$("#checkAll5").change(function () {
			$(".spot5 input:checkbox").prop('checked', $(this).prop("checked"));
		});
		$("#checkAll6").change(function () {
			$(".spot6 input:checkbox").prop('checked', $(this).prop("checked"));
		});
		$("#checkAll7").change(function () {
			$(".spot7 input:checkbox").prop('checked', $(this).prop("checked"));
		});

	// Multiple CheckBox End
	
	$(".tarih").mask("99.99.9999", {reverse: true});	
	$(".tarih").attr('autocomplete', 'off');

	//Modal Static End
		
	$('#myModal').on('shown.bs.modal', function () {
		$('#myInput').focus()
	})

	
	// Color Picker Start
	var colpick = $('.demo').each( function() {
    $(this).minicolors({
		control: $(this).attr('data-control') || 'hue',
		inline: $(this).attr('data-inline') === 'true',
		letterCase: 'lowercase',
		opacity: false,
		change: function(hex, opacity) {
			if(!hex) return;
			if(opacity) hex += ', ' + opacity;
			try {
			  console.log(hex);
			} catch(e) {}
			$(this).select();
		  },
		  theme: 'bootstrap'
		});
	});
	// Color Picker End

	$("#addmoreozellik").click(function() {
        var lastname_id = $('.tr_input input[type=text]:nth-child(1)').last().attr('id');
		if(lastname_id){
			var split_id = lastname_id.split('_');
			var index = Number(split_id[1]) + 1;
			var html = "<div class='tr_input'><input type='hidden' class='form-control' name='ilkdegeridal[]' value='0'><div class='form-group'><label class='col-sm-2 text-right'>Değer</label><div class='col-sm-4'><input type='text' class='form-control' id='urunadi_"+index+"' placeholder='Özellik Değeri' name='deger[]'></div><label class='col-sm-2 text-right'>Sıra</label><div class='col-sm-3'><input type='text' class='form-control' id='sira_"+index+"' placeholder='Sıra' name='sira[]'></div><div class='col-sm-1'><a class='btn btn-danger btn-sm removefieldozellik'><i class='fa fa-times'></i></a></div></div></div>";
		}else{
			var html = "<div class='tr_input'><input type='hidden' class='form-control' name='ilkdegeridal[]' value='0'><div class='form-group'><label class='col-sm-2 text-right'>Değer</label><div class='col-sm-4'><input type='text' class='form-control' id='urunadi_1' placeholder='Özellik Değeri' name='deger[]'></div><label class='col-sm-2 text-right'>Sıra</label><div class='col-sm-3'><input type='text' class='form-control' id='sira_1' placeholder='Sıra' name='sira[]'></div><div class='col-sm-1'><a class='btn btn-danger btn-sm removefieldozellik'><i class='fa fa-times'></i></a></div></div></div>";
		}
		$('.eklenecekalana').append(html);	
		$(".removefieldozellik").click(function(){
			$(this).parent().parent().parent('.tr_input').remove();
		});	
	});	

	
	



	$("#addmoreozellikurun").click(function(e) {
		var lastname_sec = $('.ozellik-alani select').last().attr('data-sec');
		var index = parseInt(lastname_sec) + 1;
		$.ajax({
			url: "/kabin/urun_ozellik_gosterimi.php",
			data: {id:index},
			type: "post",
			success : function(text){
				$('#ozellikgetir').before('<div>'+text+'</div>');
				$(".removefieldurunozellik").click(function(){
					$(this).parent().parent(".form-group").hide();
					$(this).parent().parent(".form-group urun-ozellik").val(0);
				});

				$(".urun-ozellik").click(function(e) {
					var id = $(this).val();		
					var datasec = $(this).attr("data-sec");			
					$.ajax({
						url: "/kabin/urun_deger_gosterimi.php",
						data: {id:id,datasec:datasec},
						type: "post",
						success: function(e){
							$(".ozellikdeger_"+datasec).html(e);
						}
					})
				});
			}
		});		
	});

	$(".urun-ozellik").click(function(e) {
		var id = $(this).val();
		var datasec = $(this).attr("data-sec");
		var degerid = $(this).attr("data-degerid");
		$.ajax({
			url: "/kabin/urun_deger_gosterimi.php",
			data: {id:id,datasec:datasec,degerid:degerid},
			type: "post",
			success: function(e){
				$(".ozellikdeger_"+datasec).html(e);
			}
		})
	});


	$(document).on('change', '.baslikayari', function() {
		var baslikid = $(this).attr("data-id");
		var basliklanguage = $(this).attr("data-language");
		var baslikyenideger = $(this).val();
        $.ajax({
			url: '/kabin/ajax-dil-baslik.php',
			type: 'post',
			data: {baslikid,basliklanguage,baslikyenideger},
			success: function(data){
				$(this).val(data); 
				
			}						
		});
		
    });



});
