/*typical NRecoSite front-end client-side routines */

window.NRecoCommon = {
	labels : null,
	
	dateFormatString : 'dd/mm/yyyy',
	
	valid8Options : { },
	
	showModal : function($dialog) {
		var overlay = $dialog.overlay({ api: true, closeOnClick: false, expose: {color: '#999', loadSpeed: 200, opacity: 0.5 } }).load();
		return overlay;
	},
	
	readForm : function(elem) {
		var res = {};
		elem.find('input,textarea,select').each(function() {
			var val = $(this).val();
			if ($(this).hasClass('date_input')) {
				val = NRecoCommon.stringToDate(val);
			}
			if ($(this).hasClass('int_input'))
				val = val!=null && val!='' ? parseInt(val) : null;
			if ($(this).hasClass('bool_input')) {
				if ($(this).attr('type')=='checkbox')
					val = $(this).is(':checked');
				else
					val = val=='1' || val=='true' || val=='True' ? true : false;
			}
			var fldName = $(this).attr('name');
			if (fldName && fldName!="")
				res[ fldName ] = val;
		});
		return res;
	},
	
	dateToString : function(date) {
		var fmtStr = NRecoCommon.dateFormatString;
		var month = (date.getMonth() + 1).toString();
		var dom = date.getDate().toString();
		var year = date.getFullYear();
		return fmtStr.replace('mm', month).replace('m',month).replace('dd',dom).replace('d',dom).replace('yyyy',year).replace('yy',year);
	},
	
	stringToDate : function(string) {
		var yearMatches;
		var monthMatches;
		var dayMatches;
		var fmtStr = NRecoCommon.dateFormatString;
		var fmtRegexYearStr = '^'+fmtStr.replace(/[.]/g, '[.]').replace(/(mm|m|dd|d)/g,'[0-9]{1,2}').replace(/(yyyy|yy)/g, '([0-9]{4})')+'$';
		var fmtRegexMonthStr = '^'+fmtStr.replace(/[.]/g, '[.]').replace(/(mm|m)/g,'([0-9]{1,2})').replace(/(dd|d)/g,'[0-9]{1,2}').replace(/(yyyy|yy)/g, '[0-9]{4}')+'$';
		var fmtRegexDayStr = '^'+fmtStr.replace(/[.]/g, '[.]').replace(/(mm|m)/g,'[0-9]{1,2}').replace(/(dd|d)/g,'([0-9]{1,2})').replace(/(yyyy|yy)/g, '[0-9]{4}')+'$';
		if ((yearMatches = string.match( new RegExp(fmtRegexYearStr) )) && 
			(monthMatches = string.match( new RegExp(fmtRegexMonthStr) )) &&
			(dayMatches = string.match( new RegExp(fmtRegexDayStr) ))) {
		  return new Date(parseInt(yearMatches[1]), parseInt(monthMatches[1])-1, parseInt(dayMatches[1]), 12, 00);
		} else {
		  return null;
		}; 		
	},
	
	initForm : function(elem) {
		if ($.fn.date_input)
			elem.find('input.date_input').date_input({
				month_names : this.labels.monthNames,
				short_day_names : this.labels.dayNamesMin,
				dateToString : this.dateToString,
				stringToDate : this.stringToDate
			});
	},
	fillForm : function(elem,fields) {
		if (fields) for (var fldName in fields) {
			var val = fields[fldName];
			if (val!=null) {
				if (val!=null && typeof(val)=='object' && val.format)
					val = val.format(NRecoCommon.dateFormatString.replace(/(mm|m)/g,'M').replace('dd','d') );
				else if (typeof(val)!='Array' && typeof(val)!='object')
					val = val.toString();
				else 
					val = val.toString();
			}
			elem.find('input[name='+fldName+'],textarea[name='+fldName+'],select[name='+fldName+']').val( val );
			elem.find('input[name='+fldName+']:checkbox').attr('checked', val=='true' || val=='1' || val=='True' );
			elem.find('label.value.'+fldName).text(val);
		}
	},
	validateForm : function(elem, customValidations) {
		customValidations = $.extend({}, customValidations);
		elem.find('input,textarea,select').each( function() {
			var $ctrl = $(this);
			$ctrl.removeClass("valid8");
			var validationRegexes = [];
			var validationFunctions = [];
			if ($ctrl.hasClass("email")) 
				validationRegexes.push( { expression: /^([a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?){0,1}$/i, errormessage: NRecoCommon.labels.invalidEmailMsg} );
			if ($ctrl.hasClass("required")) {
				if ($ctrl.attr('type')!='checkbox' ) 
					validationRegexes.push( {expression: /^.+$/m, errormessage: NRecoCommon.labels.requiredMsg} );
				else
					validationFunctions.push( {
						'function' : function(chkBox) { return chkBox.is(':checked') ? {valid:true} : {valid:false}; },
						'values' : function() { return $ctrl; }
					} );
			}
			if ($ctrl.hasClass("minlength")) {
				var minLengthVal = $ctrl.attr('minlength');
				validationRegexes.push( {expression: new RegExp('^(.{'+minLengthVal+',250}){0,1}$'), errormessage: NRecoCommon.labels.tooShortMsg.replace(/[{]0[}]/g, minLengthVal) } );
			}
			if ($ctrl.hasClass("maxlength")) {
				var maxLengthVal = $ctrl.attr('maxlength');
				validationRegexes.push( {expression: new RegExp("^[\\w\\s\\W]{0,"+maxLengthVal+'}$'), errormessage: NRecoCommon.labels.tooLongMsg.replace(/[{]0[}]/g, maxLengthVal)  } );
			}
			if ($ctrl.hasClass("date_input")) {
				var fmtStr = NRecoCommon.dateFormatString;
				var fmtRegexStr = '^('+fmtStr.replace(/[.]/g,'[.]').replace(/(mm|m|dd|d)/g,'[0-9]{1,2}').replace(/(yyyy|yy)/g, '[0-9]{4}')+'){0,1}$';
				validationRegexes.push( {expression: new RegExp(fmtRegexStr), errormessage: NRecoCommon.labels.invalidDateFormatMsg} );
			}
			if ($ctrl.hasClass("int_input") && $ctrl.attr('type')=='text' ) {
				validationRegexes.push( {expression: /^[0-9]*$/, errormessage: NRecoCommon.labels.invalidIntFormatMsg} );			
			}
			var ctrlName = $ctrl.attr('name');
			if (validationRegexes.length>0 || validationFunctions.length>0 || customValidations[ctrlName]) {
				if (customValidations[ctrlName]) {
					if (customValidations[ctrlName].regularExpressions)
						$.each( customValidations[ctrlName].regularExpressions, function(idx,elem) { validationRegexes.push(elem); });
					if (customValidations[ctrlName].jsFunctions)
						$.each( customValidations[ctrlName].jsFunctions, function(idx,elem) { validationFunctions.push(elem); });
				}
				$ctrl.valid8( $.extend( NRecoCommon.valid8Options, {
					'regularExpressions' : validationRegexes,
					'jsFunctions' : validationFunctions
				}) );
				$ctrl.addClass("valid8");
			}
		});
	},
	isValidForm : function(elem) {
		return elem.find('.valid8').isValid();
	},
	
	jsonSerialize : function(data) {
		if (typeof(Sys)!='undefined' && Sys.Serialization)
			return Sys.Serialization.JavaScriptSerializer.serialize(data);
		if (typeof(JSON)!='undefined')
			return JSON.stringify(data);
		alert('JSON serializer not found');
	},
	jsonDeserialize : function(s) {
		if (typeof(Sys)!='undefined' && Sys.Serialization)
			return Sys.Serialization.JavaScriptSerializer.deserialize(s);
		if (typeof(JSON)!='undefined')
			return JSON.parse(s);
		return eval(s);
	},
	setStatusText : function(s) {
		if (ajaxLoadingText)
			ajaxLoadingText.startStatus("status", s);	
	},
	
	initAjaxLoadingText : function(msgId) {
		// ajax loading
		window.ajaxLoadingText = {
			loadingStarted : false,
			start : function() {
				window.ajaxLoadingText.end(); /*hide current status*/
				window.ajaxLoadingText.loadingStarted = true;
				setTimeout( function() {
					if (window.ajaxLoadingText.loadingStarted)
						window.ajaxLoadingText.show("loading", NRecoCommon.labels.ajaxLoadingMsg);
				},200);
			},
			end : function() {
				if (window.ajaxLoadingText.loadingStarted) {
					window.ajaxLoadingText.loadingStarted = false;
					$('#'+msgId).hide();
				}
			},
			show : function(cssClass, text) {
				$('#'+msgId).show().html('<span class="'+cssClass+'">'+text+'</span>');
				return $('#'+msgId).find('span');
			},
			startStatus : function(cssClass, text) {
				window.ajaxLoadingText.end();  /*hide current status*/
				var $msg = window.ajaxLoadingText.show(cssClass, text);
				setTimeout( function() { 
					$msg.parent().hide();
				}, 5000);
			}
		};
		
		$(document).ajaxStart(window.ajaxLoadingText.start);
		$(document).ajaxStop(window.ajaxLoadingText.end);
		$(document).ajaxError( function(event, XMLHttpRequest, ajaxOptions, thrownError) {
			var errorMsg = XMLHttpRequest.statusText;
			if (XMLHttpRequest.status==403) 
				window.ajaxLoadingText.startStatus("error", NRecoCommon.labels.notEnoughPermissionsMsg);
			else if (XMLHttpRequest.status==500) /*.net exception*/
				window.ajaxLoadingText.startStatus("error",errorMsg);
			else if (XMLHttpRequest.status == 510) {
				window.ajaxLoadingText.startStatus("error", XMLHttpRequest.responseText);
			}				
		});
			
		// updatepanel
		Sys.WebForms.PageRequestManager.getInstance()._updatePanelBase = Sys.WebForms.PageRequestManager.getInstance()._updatePanel;
		Sys.WebForms.PageRequestManager.getInstance()._updatePanel = function(updatePanelElement, rendering) {
			this._updatePanelBase(updatePanelElement, rendering);
			/* Eval JS patch */
			var scriptElements = updatePanelElement.getElementsByTagName('script');
			for (var veryUniqueIndex = 0; veryUniqueIndex < scriptElements.length; veryUniqueIndex++) {
				if (scriptElements[veryUniqueIndex].innerHTML.length > 0)
					eval(scriptElements[veryUniqueIndex].innerHTML);
			}
			/* End Eval JS patch */
		}
		Sys.WebForms.PageRequestManager.getInstance().add_beginRequest( function(sender, args) {
			window.ajaxLoadingText.start();
		});
		Sys.WebForms.PageRequestManager.getInstance().add_endRequest(function(sender, args) {
			if (window.ajaxLoadingText.loadingStarted)
				window.ajaxLoadingText.end();
			if (args.get_error() != undefined && args.get_error().httpStatusCode == '500') {
				var errorMessage = args.get_error().message;
				if (errorMessage.indexOf(':') >= 0)
					errorMessage = errorMessage.substr(errorMessage.indexOf(':') + 1);

				args.set_errorHandled(true);
				window.ajaxLoadingText.startStatus("error", errorMessage);
			}
		});

		
	}

};