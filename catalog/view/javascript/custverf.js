var custverf_pageurl = window.location.href;
var custverf = {
	'sentpopuptemp': function(json) {
 		var pophtml = '<div id="custverf_sentpopuptemp" class="modal fade" role="dialog"> <div class="modal-dialog"> <div class="modal-content">';
		pophtml += '<div class="modal-header"> <button type="button" class="close" data-dismiss="modal">&times;</button> </div>';
		pophtml += '<div class="modal-body">'+json['emailsentpopuptemp']+'</div>';
		pophtml += '</div>';
		$('body').append(pophtml);
	},
	'successpopuptemp': function(json) {
 		var pophtml = '<div id="custverf_successpopuptemp" class="modal fade" role="dialog"> <div class="modal-dialog"> <div class="modal-content">';
		pophtml += '<div class="modal-header"> <button type="button" class="close" data-dismiss="modal">&times;</button> </div>';
		pophtml += '<div class="modal-body">'+json['verisuccesspopuptemp']+'</div>';
		pophtml += '</div>';
		$('body').append(pophtml);
	},
	'initjson': function() {
		$.ajax({
			url: 'index.php?route=extension/custverf/getcache',
			dataType: 'json',
			cache: true,
			success: function(json) {
				if(json) {
					if(json['custverf_sendcustemail'] == 1) {
						custverf.sentpopuptemp(json);
						$('#custverf_sentpopuptemp').modal('show');
					}
					if(json['custverf_successpop'] == 1) {
						custverf.successpopuptemp(json);
						$('#custverf_successpopuptemp').modal('show');
					}
 				}
			}

		});
	}
}
$(document).ready(function() {
custverf.initjson();
});