// Quick feature detection
function isTouchEnabled() {
	return (('ontouchstart' in window)
		|| (navigator.MaxTouchPoints > 0)
		|| (navigator.msMaxTouchPoints > 0));
}

$(function(){
	addEvent('map_1');
	addEvent('map_2');
	addEvent('map_3');
	addEvent('map_4');
	addEvent('map_5');
	addEvent('map_6');
	addEvent('map_7');
	addEvent('map_8');
	addEvent('map_9');
	addEvent('map_10');
	addEvent('map_11');
	addEvent('map_12');
	addEvent('map_13');
	addEvent('map_14');
	addEvent('map_15');
	addEvent('map_16');
	addEvent('map_17');
	addEvent('map_18');
	addEvent('map_19');
	addEvent('map_20');
	addEvent('map_21');
	addEvent('map_22');
	addEvent('map_23');
	addEvent('map_24');
	addEvent('map_25');
	addEvent('map_26');
	addEvent('map_27');
	addEvent('map_28');
	addEvent('map_29');
	addEvent('map_30');
	addEvent('map_31');
	addEvent('map_32');
	addEvent('map_33');
	addEvent('map_34');
	addEvent('map_35');
	addEvent('map_36');
	addEvent('map_37');
	addEvent('map_38');
	addEvent('map_39');
	addEvent('map_40');
	addEvent('map_41');
	addEvent('map_42');
	addEvent('map_43');
	addEvent('map_44');
	addEvent('map_45');
	addEvent('map_46');
	addEvent('map_47');
	addEvent('map_48');
	addEvent('map_49');
	addEvent('map_50');
	addEvent('map_51');
	addEvent('map_52');
	addEvent('map_53');
	addEvent('map_54');
	addEvent('map_55');
	addEvent('map_56');
	addEvent('map_57');
	addEvent('map_58');
	addEvent('map_59');
	addEvent('map_60');
	addEvent('map_61');
	addEvent('map_62');
	addEvent('map_63');
	addEvent('map_64');
	addEvent('map_65');
	addEvent('map_66');
	addEvent('map_67');
	addEvent('map_68');
	addEvent('map_69');
	addEvent('map_70');
	addEvent('map_71');
	addEvent('map_72');
	addEvent('map_73');
	addEvent('map_74');
	addEvent('map_75');
	addEvent('map_76');
	addEvent('map_77');
	addEvent('map_78');
	addEvent('map_79');
	addEvent('map_80');
	addEvent('map_81');
	addEvent('map_82');
	addEvent('map_83');
	addEvent('map_84');
	addEvent('map_85');
	addEvent('map_86');
	addEvent('map_87');
	addEvent('map_88');
	addEvent('map_89');
	addEvent('map_90');
	addEvent('map_91');
	addEvent('map_92');
	addEvent('map_93');
	addEvent('map_94');
	addEvent('map_95');
	addEvent('map_96');
	addEvent('map_97');
	addEvent('map_98');
	addEvent('map_99');
	addEvent('map_100');
	addEvent('map_101');
	addEvent('map_102');
	addEvent('map_103');
	addEvent('map_104');
	addEvent('map_105');
	addEvent('map_106');
	addEvent('map_107');
	addEvent('map_108');
	addEvent('map_109');
	addEvent('map_110');
	addEvent('map_111');
	addEvent('map_112');
	addEvent('map_113');
	addEvent('map_114');
	addEvent('map_115');
	addEvent('map_116');
	addEvent('map_117');
	addEvent('map_118');
	addEvent('map_119');
	addEvent('map_120');
	addEvent('map_121');
	addEvent('map_122');
	addEvent('map_123');
	addEvent('map_124');
	addEvent('map_125');
	addEvent('map_126');
	addEvent('map_127');
	addEvent('map_128');
	addEvent('map_129');
	addEvent('map_130');
	addEvent('map_131');
	addEvent('map_132');
	addEvent('map_133');
	addEvent('map_134');
	addEvent('map_135');
	addEvent('map_136');
	addEvent('map_137');
	addEvent('map_138');
	addEvent('map_139');
	addEvent('map_140');
	addEvent('map_141');
	addEvent('map_142');
	addEvent('map_143');
	addEvent('map_144');
	addEvent('map_145');
	addEvent('map_146');
	addEvent('map_147');
	addEvent('map_148');
	addEvent('map_149');
	addEvent('map_150');
	addEvent('map_151');
	addEvent('map_152');
	addEvent('map_153');
	addEvent('map_154');
	addEvent('map_155');
	addEvent('map_156');
	addEvent('map_157');
	addEvent('map_158');
	addEvent('map_159');
	addEvent('map_160');
	addEvent('map_161');
	addEvent('map_162');
	addEvent('map_163');
	addEvent('map_164');
	addEvent('map_165');
	addEvent('map_166');
	addEvent('map_167');
	addEvent('map_168');
	addEvent('map_169');
	addEvent('map_170');
	addEvent('map_171');
	addEvent('map_172');
	addEvent('map_173');
	addEvent('map_174');
	addEvent('map_175');
	addEvent('map_176');
	addEvent('map_177');
	addEvent('map_178');
	addEvent('map_179');
	addEvent('map_180');
})
$(function(){

	$('#map-tip').css({
		'box-shadow':'1px 2px 4px '+map_config['default']['hoverShadow'],
		'-moz-box-shadow':'2px 3px 6px '+map_config['default']['hoverShadow'],
		'-webkit-box-shadow':'2px 3px 6px '+map_config['default']['hoverShadow'],
	});

});

function addEvent(id,relationId){
	var _obj = $('#'+id);
	var _Textobj = $('#'+id+','+'#'+map_config[id]['namesId']);

	_obj.attr({'fill':map_config[id]['upColor'],'stroke':map_config['default']['borderColor']});
	_Textobj.attr({'cursor':'default'});
	if(map_config[id]['enable'] == true){
		if (isTouchEnabled()) {
			//clicking effect
			_Textobj.on('touchstart', function(e){
				var touch = e.originalEvent.touches[0];
				var x=touch.pageX+10, y=touch.pageY+15;
				var tipw=$('#map-tip').outerWidth(), tiph=$('#map-tip').outerHeight(), 
				x=(x+tipw>$(document).scrollLeft()+$(window).width())? x-tipw-(20*2) : x
				y=(y+tiph>$(document).scrollTop()+$(window).height())? $(document).scrollTop()+$(window).height()-tiph-10 : y
				$('#'+id).css({'fill':map_config[id]['downColor']});
				$('#map-tip').show().html(map_config[id]['hover']);
				$('#map-tip').css({left:x, top:y})
			})
			_Textobj.on('touchend', function(){
				$('#'+id).css({'fill':map_config[id]['upColor']});
				if(map_config[id]['target'] == 'new_window'){
					window.open(map_config[id]['url']);	
				}else if(map_config[id]['target'] == 'same_window'){
					window.parent.location.href=map_config[id]['url'];
				}
			})
		}
		_Textobj.attr({'cursor':'pointer'});
		_Textobj.hover(function(){
			//moving in/out effect
			$('#map-tip').show().html(map_config[id]['hover']);
			_obj.css({'fill':map_config[id]['overColor']})
		},function(){
			$('#map-tip').hide();
			$('#'+id).css({'fill':map_config[id]['upColor']});
		})
		//clicking effect
		_Textobj.mousedown(function(){
			$('#'+id).css({'fill':map_config[id]['downColor']});
		})
		_Textobj.mouseup(function(){
			$('#'+id).css({'fill':map_config[id]['overColor']});
			if(map_config[id]['target'] == 'new_window'){
				window.open(map_config[id]['url']);	
			}else if(map_config[id]['target'] == 'same_window'){
				window.parent.location.href=map_config[id]['url'];
			}
		})
		_Textobj.mousemove(function(e){
			var x=e.pageX+10, y=e.pageY+15;
			var tipw=$('#map-tip').outerWidth(), tiph=$('#map-tip').outerHeight(), 
			x=(x+tipw>$(document).scrollLeft()+$(window).width())? x-tipw-(20*2) : x
			y=(y+tiph>$(document).scrollTop()+$(window).height())? $(document).scrollTop()+$(window).height()-tiph-10 : y
			$('#map-tip').css({left:x, top:y})
		})
	}	
}

//The pins code
$(function(){
	if($('#pin-shadow').find('path').eq(0).attr('fill') != 'undefined'){
		var pinShadowOpacity = pin_config['default']['pinShadowOpacity'];
		var pinShadowOpacity = parseInt(pinShadowOpacity);
		if (pinShadowOpacity >=100){pinShadowOpacity = 1;}else if(pinShadowOpacity <=0){pinShadowOpacity =0;}else{pinShadowOpacity = pinShadowOpacity/100;}

		$('#pin-shadow').find('path').attr({'fill':pin_config['default']['pinShadow']}).css({'fill-opacity':pinShadowOpacity})
};


	var points_len = pin_config['points'].length;
	if( points_len > 0){
		var xmlns = "http://www.w3.org/2000/svg";
		var tsvg_obj = document.getElementById("map_points");
		var svg_circle,svg_rect;
		for(var i=0;i<points_len;i++){
			if (pin_config['points'][i]['shape']=="circle"){
				svg_circle = document.createElementNS(xmlns, "circle");
				svg_circle.setAttributeNS(null, "cx", pin_config['points'][i]['pos_X']+1);
				svg_circle.setAttributeNS(null, "cy", pin_config['points'][i]['pos_Y']+1);
				svg_circle.setAttributeNS(null, "r", pin_config['points'][i]['diameter']/2);
				svg_circle.setAttributeNS(null, "fill", pin_config['default']['pinShadow']);
				svg_circle.setAttributeNS(null, "style",'fill-opacity:'+pinShadowOpacity);
				svg_circle.setAttributeNS(null, "id",'map_points_shadow_'+i);
				tsvg_obj.appendChild(svg_circle);
				svg_circle = document.createElementNS(xmlns, "circle");
				svg_circle.setAttributeNS(null, "cx", pin_config['points'][i]['pos_X']);
				svg_circle.setAttributeNS(null, "cy", pin_config['points'][i]['pos_Y']);
				svg_circle.setAttributeNS(null, "r", pin_config['points'][i]['diameter']/2);
				svg_circle.setAttributeNS(null, "fill", pin_config['points'][i]['upColor']);
				svg_circle.setAttributeNS(null, "stroke",pin_config['points'][i]['outline']);
				svg_circle.setAttributeNS(null, "stroke-width",pin_config['points'][i]['thickness']);
				svg_circle.setAttributeNS(null, "id",'map_points_'+i);
				tsvg_obj.appendChild(svg_circle);
				dynamicAddEvent(i);
			}
			else if(pin_config['points'][i]['shape']=="rectangle"){
				svg_rect = document.createElementNS(xmlns, "rect");
				svg_rect.setAttributeNS(null, "x", pin_config['points'][i]['pos_X']- pin_config['points'][i]['width']/2+1);
				svg_rect.setAttributeNS(null, "y", pin_config['points'][i]['pos_Y']- pin_config['points'][i]['height']/2+1);
				svg_rect.setAttributeNS(null, "width", pin_config['points'][i]['width']);
				svg_rect.setAttributeNS(null, "height", pin_config['points'][i]['height']);
				svg_rect.setAttributeNS(null, "fill", pin_config['default']['pinShadow']);
				svg_rect.setAttributeNS(null, "style",'fill-opacity:'+pinShadowOpacity);
				svg_rect.setAttributeNS(null, "id",'map_points_shadow_'+i);
				tsvg_obj.appendChild(svg_rect);
				svg_rect = document.createElementNS(xmlns, "rect");
				svg_rect.setAttributeNS(null, "x", pin_config['points'][i]['pos_X']- pin_config['points'][i]['width']/2);
				svg_rect.setAttributeNS(null, "y", pin_config['points'][i]['pos_Y']- pin_config['points'][i]['height']/2);
				svg_rect.setAttributeNS(null, "width", pin_config['points'][i]['width']);
				svg_rect.setAttributeNS(null, "height", pin_config['points'][i]['height']);
				svg_rect.setAttributeNS(null, "fill", pin_config['points'][i]['upColor']);
				svg_rect.setAttributeNS(null, "stroke",pin_config['points'][i]['outline']);
				svg_rect.setAttributeNS(null, "stroke-width",pin_config['points'][i]['thickness']);
				svg_rect.setAttributeNS(null, "id",'map_points_'+i);
				tsvg_obj.appendChild(svg_rect);
				dynamicAddEvent(i);
			}
		}
	}
});

function dynamicAddEvent(id){
	var obj = $('#map_points_'+id);

	if(pin_config['points'][id]['enable'] == true){
		if (isTouchEnabled()) {
			obj.on('touchstart', function(e){
				var touch = e.originalEvent.touches[0];
				var x=touch.pageX+10, y=touch.pageY+15;
				var tipw=$('#map-tip').outerWidth(), tiph=$('#map-tip').outerHeight(),
				x=(x+tipw>$(document).scrollLeft()+$(window).width())? x-tipw-(20*2) : x
				y=(y+tiph>$(document).scrollTop()+$(window).height())? $(document).scrollTop()+$(window).height()-tiph-10 : y
				$('#'+id).css({'fill':pin_config['points'][id]['downColor']});
				$('#map-tip').show().html(pin_config['points'][id]['hover']);
				$('#map-tip').css({left:x, top:y})
			})
			obj.on('touchend', function(){
				$('#'+id).css({'fill':pin_config['points'][id]['upColor']});
				if(pin_config['points'][id]['target'] == 'new_window'){
					window.open(pin_config['points'][id]['url']);
				}else if(pin_config['points'][id]['target'] == 'same_window'){
					window.parent.location.href=pin_config['points'][id]['url'];
				}
			})
		}
		obj.attr({'cursor':'pointer'});
		obj.hover(function(){
			$('#map-tip').show().html(pin_config['points'][id]['hover']);
			obj.css({'fill':pin_config['points'][id]['overColor']})
		},function(){
			$('#map-tip').hide();
			obj.css({'fill':pin_config['points'][id]['upColor']});
		})
		//clicking effect
		obj.mousedown(function(){
			obj.css({'fill':pin_config['points'][id]['downColor']});
		})
		obj.mouseup(function(){
			obj.css({'fill':pin_config['points'][id]['overColor']});
			if(pin_config['points'][id]['target'] == 'new_window'){
				window.open(pin_config['points'][id]['url']);	
			}else if(pin_config['points'][id]['target'] == 'same_window'){
				window.parent.location.href=pin_config['points'][id]['url'];
			}
		})
		obj.mousemove(function(e){
				var x=e.pageX+10, y=e.pageY+15;
				var tipw=$('#map-tip').outerWidth(), tiph=$('#map-tip').outerHeight(), 
				x=(x+tipw>$(document).scrollLeft()+$(window).width())? x-tipw-(20*2) : x
				y=(y+tiph>$(document).scrollTop()+$(window).height())? $(document).scrollTop()+$(window).height()-tiph-10 : y
				$('#map-tip').css({left:x, top:y})
		})
	}	
}
