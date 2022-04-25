var custverf_pageurl = window.location.href;
var custverf = {
	'sentpopuptemp': function(json) {
 		var pophtml = '<div id="custverf_sentpopuptemp" class="modal fade" role="dialog"> <div class="modal-dialog"> <div class="modal-content">';
		pophtml += '<div class="modal-header"> <button type="button" class="close" data-dismiss="modal">&times;</button> </div>';
		pophtml += '<div class="modal-body">'+json['emailsentpopuptemp']+'</div>';
		pophtml += '</div>';
		$('body').append(pophtml);
	},
	'getParameterByName': function(name, url) {
		if (!url) url = window.location.href;
		name = name.replace(/[\[\]]/g, '\\$&');
		var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
			results = regex.exec(url);
		if (!results) return null;
		if (!results[2]) return '';
		return decodeURIComponent(results[2].replace(/\+/g, ' '));
	},
	'initjson': function(user_token) {
		$.ajax({
			url: 'index.php?route=extension/module/custverf/getcache&user_token='+user_token,
			dataType: 'json',
			cache: true,
			success: function(json) {
				if(json) {
					if(json['custverf_sendcustemail'] == 1) {
						custverf.sentpopuptemp(json);
						$('#custverf_sentpopuptemp').modal('show');
					}
 				}
			}

		});
	}
}
$(document).ready(function() {
user_token = custverf.getParameterByName('user_token');
if(user_token) { 
	custverf.initjson(user_token);
}
});