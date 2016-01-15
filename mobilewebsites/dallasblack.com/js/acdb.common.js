window.AcdbCommon = {
	recaptchaSitekey: null,

    ajaxRequest: function (url, data, callback, append) {
        $.ajax({
            type: "POST",
            url: url,
            data: data,
            success: function (result) {
                if (result != "") {
                    if (callback)
                        callback(result, append);
                }
            }
        });
    },
    showInviteForm: function (url, itemId, type, initial) {
    	var $dialog = $('#inviteForm').processTemplate(initial ? initial : false).find('.modal');
    	$dialog.find('.modal-footer').find('.btn').show();
    	$dialog.find('.modal-footer').find('.processing').hide();
    	initEmailsBlock($dialog);
    	var $dialogOverlay = NRecoCommon.showModal($dialog);
    	// init
    	NRecoCommon.initForm($dialog);
    	// validation
    	var validateEmailsProvided = function(values){
    		if (!values.emails || values.emails.length==0)
    			return {valid:false, message:'At least one email must be provided'};

    		for(i=0;i<values.emails.length;i++){
    			if (values.emails[i]!='')
    				return {valid:true};
    		}

    		return {valid:false, message:'At least one email must be provided'};
    	}
    	var validation = new Object();
    	validation.jsFunctions = [
				{ 'function': validateEmailsProvided, values: function() {
					return { emails: $dialog.find('.email').val()}
				}
				}
    	];
    	var validations = new Array();
    	NRecoCommon.validateForm($dialog);

    	window.AcdbCommon.addRecaptchaWidget('invintationRecap');

    	$dialog.find('button.submit,a.submit').click(function () {
    		$dialog.find('.error').hide();

    		if (!grecaptcha.getResponse()) {
    			$dialog.find('.captchaErorMsg').show();
    			return;
    		}

    		if (NRecoCommon.isValidForm($dialog)) {
    			var fields = NRecoCommon.readForm($dialog);
    			var emails = [];
    			$('#emailsList .email').each(function () {
    				emails.push($(this).val());
    			});
				if(type = 'event')
					fields["source"] = 'events_view';
    			fields["item_id"] = itemId;
    			fields["emails"] = emails;
    			$dialog.find('.modal-footer').find('.btn').hide();
    			$dialog.find('.modal-footer').find('.processing').show();
    			$.ajax({
    				type: "POST",
    				async: true,
    				url: url,
    				data: {
    					data: NRecoCommon.jsonSerialize(fields)
    				},
    				success: function (res) {
    					if (res.exitCode=='0'){
    						$dialogOverlay.close();
    						window.AcdbCommon.showInviteResultForm(res);
    					}
    				},
    				error: function (XMLHttpRequest, textStatus, errorThrown) {                            
    					$dialog.find('.error').html("Error on trying to invite friends").show('fast');
    				},
    				complete: function(){
    					$dialog.find('.modal-footer').find('.btn').show();
    					$dialog.find('.modal-footer').find('.processing').hide();
    				}
    			});
    		}
    	});

    },
    showInviteResultForm: function (resultData) {
    	var $dialog = $('#inviteResultForm').processTemplate(resultData).find('.modal');
    	var $dialogOverlay = NRecoCommon.showModal($dialog);
    	NRecoCommon.initForm($dialog);
    },

	addRecaptchaWidget: function (contaiderId) {
		recapWidget = grecaptcha.render(contaiderId, {
			'sitekey': window.AcdbCommon.recapSitekey,
			'theme': 'light'
		});
	}
};