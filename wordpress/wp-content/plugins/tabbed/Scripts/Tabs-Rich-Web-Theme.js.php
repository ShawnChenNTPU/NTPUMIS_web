<?php
	if(!defined('ABSPATH')) exit;
	if(!current_user_can('manage_options'))
	{
		die('Access Denied');
	}
?>
<script type="text/javascript">
	function Rich_Web_Tabs_Added_Theme()
	{
	setTimeout(() => {
	jQuery('.RichWeb_Tabs_Themes_Buttons .Rich_Web_Tabs_Add_Theme').css('top','10px');
	jQuery('.RichWeb_Tabs_Themes_Buttons a').css('bottom','40px');
	jQuery('.RichWeb_Tabs_Themes_Buttons').css('padding-top','35px');
	jQuery('#RichWeb_Tabs_ProVersion_Info').fadeIn('slow');
	}, 500);
	}
	function Rich_Web_Tabs_Theme_Canceled()
	{
		location.reload();
	}


	function Rich_Web_Tabs_RangeSlider()
	{
		var slider = jQuery('.Rich_Web_Tabs_Range'), range = jQuery('.Rich_Web_Tabs_Range__range'), value = jQuery('.Rich_Web_Tabs_Range__value');
		slider.each(function()
		{ 
			value.each(function()
			{ 
				var value = jQuery(this).prev().attr('value');
				jQuery(this).html(value);
			});
			range.on('input', function()
			{
				jQuery(this).next(value).html(this.value);
			});
		});
	}

	
	function Rich_Web_Tabs_Edit_Theme(Theme_ID)
	{
		jQuery('.Rich_Web_Tabs_Update_Theme').addClass('RW_UpdateTime_Change');
		var ajaxurl = object.ajaxurl;
		var data = {
		action: 'Rich_Web_Tabs_Edit_Theme', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
		foobar: Theme_ID, // translates into $_POST['foobar'] in PHP
		};
		jQuery.post(ajaxurl, data, function(response) {
			var arr=Array();
			var spl=response.split('=>');
			for(var i=3;i<spl.length;i++) { arr[arr.length]=spl[i].split('[')[0].trim(); }
			arr[arr.length-1]=arr[arr.length-1].split(')')[0].trim();
			jQuery('#Rich_Web_Tabs_Upd_ID_Theme').val(arr[0]);
			jQuery('#Rich_Web_Tabs_T_T').val(arr[1]);
			jQuery('#Rich_Web_Tabs_T_Ty').val(arr[2]);
			jQuery('#Rich_Web_Tabs_T_Ty').hide();
			jQuery('.Rich_Web_Tabs_Content_Table3_Theme').hide();
			if(arr[2]=='Rich_Tabs_1')
			{
				jQuery('.Rich_Web_Tabs_Content_Table3_Theme_1').show();
				jQuery('#Rich_Web_Tabs_T_W').attr('value',arr[3]);  jQuery('#Rich_Web_Tabs_T_Al').val(arr[4]); jQuery('#Rich_Web_Tabs_T_CA').val(arr[5]); jQuery('#Rich_Web_Tabs_T_NavM').val(arr[6]); jQuery('#Rich_Web_Tabs_T_NavAl').val(arr[7]); jQuery('#Rich_Web_Tabs_T_N_S').val(arr[8]); jQuery('#Rich_Web_Tabs_T_N_MBgC').val(arr[9]); jQuery('#Rich_Web_Tabs_T_N_MBC').val(arr[10]); jQuery('#Rich_Web_Tabs_T_N_PB').attr('value',arr[11]);  jQuery('#Rich_Web_Tabs_T_N_IBSh').val(arr[12]); jQuery('#Rich_Web_Tabs_T_N_OBSh').val(arr[13]); jQuery('#Rich_Web_Tabs_T_N_FS').attr('value',arr[14]);  jQuery('#Rich_Web_Tabs_T_N_FF').val(arr[15]); jQuery('#Rich_Web_Tabs_T_N_IS').attr('value',arr[16]);   jQuery('#Rich_Web_Tabs_T_S_BgC').val(arr[17]); jQuery('#Rich_Web_Tabs_T_S_C').val(arr[18]); jQuery('#Rich_Web_Tabs_T_S_HBgC').val(arr[19]); jQuery('#Rich_Web_Tabs_T_S_HC').val(arr[20]); jQuery('#Rich_Web_Tabs_T_S_CBgC').val(arr[21]); jQuery('#Rich_Web_Tabs_T_S_CC').val(arr[22]); jQuery('#Rich_Web_Tabs_T_C_BgT').val(arr[23]); jQuery('#Rich_Web_Tabs_T_C_BgC').val(arr[24]); jQuery('#Rich_Web_Tabs_T_C_BgC2').val(arr[25]); jQuery('#Rich_Web_Tabs_T_C_BW').attr('value',arr[26]);  jQuery('#Rich_Web_Tabs_T_C_BC').val(arr[27]); jQuery('#Rich_Web_Tabs_T_C_BR').attr('value',arr[28]);    jQuery('#Rich_Web_Tabs_T_C_IBSC').val(arr[29]); jQuery('#Rich_Web_Tabs_T_C_OBSC').val(arr[30]);
				
				if( arr[6] == 'horizontal' || arr[6] == 'accordion' )
				{
					jQuery('.Rich_Web_Tabs_T_NavM_H').show(); jQuery('.Rich_Web_Tabs_T_NavM_V').hide();
				}
				else if( arr[6] == 'vertical' )
				{
					jQuery('.Rich_Web_Tabs_T_NavM_V').show(); jQuery('.Rich_Web_Tabs_T_NavM_H').hide();
				}
				jQuery(".Rich_Web_Tabs_T_N_S_Span").text('Main Border Color');
				jQuery(".Rich_Web_Tabs_T_N_S_PB_Span").show(); 
				jQuery(".Rich_Web_Tabs_T_N_S_PB_Span").show();
				jQuery('input.Rich_Web_Tab_Col').alphaColorPicker();
				jQuery('.wp-color-result').attr('title','Select');
				jQuery('.wp-color-result').attr('data-current','Selected');
				Rich_Web_Tabs_RangeSlider();
			}
			else if(arr[2]=='Rich_Tabs_2')
			{
				var ajaxurl = object.ajaxurl;
				var data = {
				action: 'Rich_Web_Tabs_Edit_Theme_ACD', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
				foobar: Theme_ID, // translates into $_POST['foobar'] in PHP
				};
				jQuery.post(ajaxurl, data, function(response) {
					var arr=Array();
					var spl=response.split('=>');
					for(var i=3;i<spl.length;i++) { arr[arr.length]=spl[i].split('[')[0].trim(); }
					arr[arr.length-1]=arr[arr.length-1].split(')')[0].trim();
					jQuery('#Rich_Web_Acd_border_col').val(arr[1]); jQuery('#Rich_Web_Acd_border_col_hover').val(arr[2]); jQuery('#Rich_Web_Acd_border_col_active').val(arr[3]); jQuery('#Rich_Web_Acd_border_style').val(arr[5]).prop('selected', true); jQuery('#Rich_Web_Acd_border_width').attr('value',arr[4]);  jQuery('#Rich_Web_Acd_border_radius').attr('value',arr[6]);  jQuery('#Rich_Web_Acd_border_bsh_style').val(arr[7]).prop('selected', true); jQuery('#Rich_Web_Tabs_bsh_act_col_ACD').val(arr[8]);
					jQuery('input.Rich_Web_Tab_Col').alphaColorPicker();
					jQuery('.wp-color-result').attr('title','Select');
					jQuery('.wp-color-result').attr('data-current','Selected');
					Rich_Web_Tabs_RangeSlider();
				});
				jQuery('.Rich_Web_Tabs_Content_Table3_Theme_1').hide();
				jQuery('.Rich_Web_Tabs_Content_Table3_Theme_2').show();
				jQuery('#Rich_Web_Tabs_T_W_ACD').attr('value',arr[3]); jQuery('#Rich_Web_Tabs_T_Al_ACD').val(arr[4]); jQuery('#Rich_Web_Tabs_T_CA_ACD').val(arr[5]); jQuery('#Rich_Web_Tabs_T_N_S_ACD').val(arr[8]).prop('selected', true);
				jQuery(".Rich_Web_Tabs_acd_sBg").show(); jQuery(".Rich_Web_Tabs_T_Stle_Col_ACD_div").show();
				jQuery(".Rich_Web_Tabs_acd_sBg").show(); jQuery(".Rich_Web_Tabs_T_Stle_Col_ACD_div").show();
				jQuery(".Rich_Web_Tabs_Cont_BR_ACD").show(); jQuery(".Rich_Web_Tabs_Cont_BR_Width_ACD").show(); jQuery(".Rich_Web_Tabs_Cont_BR_color_ACD").show();
				jQuery(".Rich_Web_Tabs_Cont_BR_ACD").show(); jQuery(".Rich_Web_Tabs_Cont_BR_Width_ACD").show(); jQuery(".Rich_Web_Tabs_Cont_BR_color_ACD").show();
				jQuery('#Rich_Web_Tabs_T_S_BgC_ACD').val(arr[17]); jQuery('#Rich_Web_Tabs_T_S_HBgC_ACD').val(arr[19]); jQuery('#Rich_Web_Tabs_T_N_MBgC_ACD').val(arr[9]); jQuery('#Rich_Web_Tabs_T_N_PB_ACD').attr('value',arr[11]); jQuery('#Rich_Web_Tabs_T_N_PB_Span_ACD').val(arr[11]); jQuery('#Rich_Web_Tabs_T_S_C_ACD').val(arr[18]); jQuery('#Rich_Web_Tabs_T_S_HC_ACD').val(arr[20]); jQuery('#Rich_Web_Tabs_T_AlTit_ACD').val(arr[7]).prop('selected', true); jQuery('#Rich_Web_Tabs_T_S_CC_ACD').val(arr[22]); jQuery('#Rich_Web_Tabs_T_S_CBgC_ACD').val(arr[21]); jQuery('#Rich_Web_Tabs_T_N_IBSh_ACD').val(arr[12]); jQuery('#Rich_Web_Tabs_T_N_OBSh_ACD').val(arr[13]); jQuery('#Rich_Web_Tabs_T_C_BgT_ACD').val(arr[23]).prop('selected', true); jQuery('#Rich_Web_Tabs_T_C_BgC_ACD').val(arr[24]); jQuery('#Rich_Web_Tabs_T_C_BgC2_ACD').val(arr[25]); jQuery('#Rich_Web_Tabs_T_C_BW_ACD').attr('value',arr[26]); jQuery('#Rich_Web_Tabs_T_C_BW_Span_ACD').val(arr[26]); jQuery('#Rich_Web_Tabs_T_C_BC_ACD').val(arr[27]); jQuery('#Rich_Web_Tabs_T_C_BR_ACD').attr('value',arr[28]); jQuery('#Rich_Web_Tabs_T_C_BR_Span').val(arr[28]); jQuery('#Rich_Web_Tabs_T_C_IBSC_ACD').val(arr[29]); jQuery('#Rich_Web_Tabs_T_C_OBSC_ACD').val(arr[30]); jQuery('#Rich_Web_Tabs_T_N_PB_2_ACD').attr('value',arr[31]); jQuery('#Rich_Web_Tabs_T_N_PB_2s_Span_ACD').val(arr[31]); jQuery('#Rich_Web_Tabs_T_N_SBG_ACD').val(arr[32]).prop('selected', true); jQuery('#Rich_Web_Tabs_T_S_AC_ACD').val(arr[33]); jQuery('#Rich_Web_Tabs_T_AlTit_style_ACD').val(arr[34]).prop('selected', true); jQuery('#Rich_Web_Tabs_T_N_IBSh_active_ACD').val(arr[35]); jQuery('#Rich_Web_Tabs_T_N_IS_ACD').attr('value',arr[36]); jQuery('#Rich_Web_Tabs_T_S_CC_2_ACD').val(arr[37]); jQuery('#Rich_Web_Tabs_T_S_CBgC_2_ACD').val(arr[38]); jQuery('#Rich_Web_Tabs_T_N_IBSh_active_2_ACD').val(arr[39]); jQuery('#Rich_Web_Tabs_T_N_IS_2_ACD').attr('value',arr[40]);  jQuery('#Rich_Web_Tabs_T_N_Title_S_2_ACD').attr('value',arr[6]);  jQuery('#Rich_Web_Tabs_T_Stle_Col_ACD').val(arr[10]); jQuery('#Rich_Web_Tabs_T_Icon_style_ACD').val(arr[14]).prop('selected', true); jQuery('#Rich_Web_Tabs_T_N_FF_ACD').val(arr[15]).prop('selected', true);
			}
		})
		setTimeout(function(){
			jQuery('.Rich_Web_Tabs_Content_Data1_Theme').css('display','none');
			if (jQuery('#RichWeb_Tabs_ProVersion_Info').is(':visible')) {
				jQuery('#RichWeb_Tabs_ProVersion_Info').css('display','none');
				jQuery('.RichWeb_Tabs_Themes_Buttons').css('padding-top','0px');
				jQuery('.RichWeb_Tabs_Themes_Buttons a').css('bottom','5px');
				} 
			jQuery('.RichWeb_Tabs_Themes_Buttons a').css({'left':'0px','right':'initial',});
			jQuery('.nav_bar_tabs').css('display','none');
			jQuery('.underline').css('display','none');
			jQuery('.Rich_Web_Tabs_Add_Theme').addClass('Rich_Web_Tabs_AddAnim_Theme');
			jQuery('.Rich_Web_Tabs_Content_Data2_Theme').css('display','block');
			jQuery('.Rich_Web_Tabs_Update_Theme').addClass('Rich_Web_Tabs_SaveAnim_Theme');
			jQuery('.Rich_Web_Tabs_Cancel_Theme').addClass('Rich_Web_Tabs_CancelAnim_Theme');
			
		},500)
	}

	function Rich_Web_Tabs_Delete_Theme(Theme_ID)
	{	
		event.preventDefault();
		jQuery('.IconTab_Name' + Theme_ID).html('<i class="Rich_Web_Tabs_Del_Trash rich_web rich_web-trash"></i>Are you sure you want to remove ?');
		jQuery('.IconTab_Name' + Theme_ID).addClass('rw_tabs_name_dis');
		jQuery('.IconTab' + Theme_ID).css('top','60%');
		jQuery('.IconTab' + Theme_ID).html('<button class="tab_icon_cancel" onclick="Rich_Web_Tabs_Delete_Theme_No('+Theme_ID+')" >Cancel</button><button class="tab_icon_delete" onclick="Rich_Web_Tabs_Delete_Theme_Yes('+Theme_ID+')" > Delete</button>');
        jQuery('.IconTab' + Theme_ID).parent().addClass('rw_tabs_icons_dis');
        jQuery('.IconTab' + Theme_ID).parent().prev().addClass('rw_tabs_tab_image_dis');
	}
	function Rich_Web_Tabs_Delete_Theme_No(Theme_ID)
	{
		event.preventDefault();
		var themename = jQuery('.IconTab' + Theme_ID).parent().prev().attr('alt');
		var themehtml = "<div class='tab_icon' onclick='Rich_Web_Tabs_Edit_Theme(" + Theme_ID +")'><i class='Rich_Web_Tabs_Edit rich_web rich_web-pencil'></i></div><div class='tab_icon'onclick='Rich_Web_Tabs_Copy_Theme(" +Theme_ID +")'><i class='Rich_Web_Tabs_Copy rich_web rich_web-files-o'></i></div><div class='tab_icon'onclick='Rich_Web_Tabs_Delete_Theme(" +Theme_ID + ")'><i class='Rich_Web_Tabs_Del rich_web rich_web-trash'></i></div>";
		jQuery('.IconTab_Name' + Theme_ID).html(themename);
		jQuery('.IconTab' + Theme_ID).html(themehtml);
		jQuery('.IconTab' + Theme_ID).css('top','37%');
		jQuery('.IconTab_Name' + Theme_ID).removeClass('rw_tabs_name_dis');
		jQuery('.IconTab' + Theme_ID).parent().removeClass('rw_tabs_icons_dis');
        jQuery('.IconTab' + Theme_ID).parent().prev().removeClass('rw_tabs_tab_image_dis');
	}
	function Rich_Web_Tabs_Delete_Theme_Yes(Theme_ID)
	{
	event.preventDefault();
	jQuery('.IconTab' + Theme_ID).children('.tab_icon_cancel').hide();
	jQuery('.IconTab' + Theme_ID).children('.tab_icon_delete').css('opacity','1');
	jQuery('.IconTab' + Theme_ID).children('.tab_icon_delete').html('<i class="Rich_Web_Tabs_Deleting rich_web rich_web-refresh  rich_web_tabs-spin"></i> Deleting');
	var ajaxurl = object.ajaxurl;
	var data = {
	action: 'Rich_Web_Tabs_Del_Theme', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
	foobar: Theme_ID, // translates into $_POST['foobar'] in PHP
	};
	jQuery.post(ajaxurl, data, function(response) {

		jQuery('.IconTab' + Theme_ID).children('.tab_icon_delete').html('<i class="Rich_Web_Tabs_Install rich_web rich_web-check"></i> Deleted');
		jQuery('.IconTab'+Theme_ID).parent().parent().remove();
	})				
	}
	
	
	function Rich_Web_Tabs_T_NavM_Ch()
	{
		var Rich_Web_Tabs_T_NavM = jQuery('#Rich_Web_Tabs_T_NavM').val();

		if( Rich_Web_Tabs_T_NavM == 'horizontal' || Rich_Web_Tabs_T_NavM == 'accordion' )
		{
			jQuery('.Rich_Web_Tabs_T_NavM_H').show();
			jQuery('.Rich_Web_Tabs_T_NavM_V').hide();
			jQuery('#Rich_Web_Tabs_T_NavAl').val('left');
		}
		else if( Rich_Web_Tabs_T_NavM == 'vertical' )
		{
			jQuery('.Rich_Web_Tabs_T_NavM_V').show();
			jQuery('.Rich_Web_Tabs_T_NavM_H').hide();
			jQuery('#Rich_Web_Tabs_T_NavAl').val('top');
		}
	}
	function Rich_Web_Tabs_T_Ty_Changed()
	{
		var Rich_Web_Tabs_T_Ty=jQuery('#Rich_Web_Tabs_T_Ty').val();
		jQuery('.Rich_Web_Tabs_Content_Table3_Theme').hide();
		if(Rich_Web_Tabs_T_Ty=='Rich_Tabs_1')
		{
			jQuery('.Rich_Web_Tabs_Content_Table3_Theme_1').show();
		}
		else if(Rich_Web_Tabs_T_Ty=='Rich_Tabs_2')
		{
			jQuery('.Rich_Web_Tabs_Content_Table3_Theme_2').show();
		}
	}
	jQuery("#Rich_Web_Tabs_T_N_S").change(function() {
		var value = jQuery( this ).val();
		jQuery(".Rich_Web_Tabs_T_N_S_Span").text('Main Border Color');
		jQuery(".Rich_Web_Tabs_T_N_S_PB_Span").show();
	});
	jQuery("#Rich_Web_Tabs_T_N_S_ACD").change(function() {
		var value = jQuery( this ).val();
		if(value == 'Rich_Web_Tabs_acd_none'){
			jQuery(".Rich_Web_Tabs_acd_sBg").hide(); jQuery(".Rich_Web_Tabs_T_Stle_Col_ACD_div").hide();
		}else{
			jQuery(".Rich_Web_Tabs_acd_sBg").show(); jQuery(".Rich_Web_Tabs_T_Stle_Col_ACD_div").show();
		}
	jQuery(".Rich_Web_Tabs_Cont_BR_ACD").show(); jQuery(".Rich_Web_Tabs_Cont_BR_Width_ACD").show(); jQuery(".Rich_Web_Tabs_Cont_BR_color_ACD").show();
	});

	function Rich_Web_Tabs_T_T_Available(){
		var RW_Tabs_Theme_Tit = jQuery('#Rich_Web_Tabs_T_T').val();
		if (jQuery('.Rich_Web_Tabs_Update_Theme').hasClass('RW_UpdateTime_Change')) {
			var RW_Tabs_Theme_Upd_ID = jQuery('#Rich_Web_Tabs_Upd_ID_Theme').val();
			var ajaxurl = object.ajaxurl;
				var data = {
				action: 'Rich_Web_Tabs_T_T_Available', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
				RW_Tabs_Theme_Upd_ID: RW_Tabs_Theme_Upd_ID, 
				RW_Tabs_Theme_Tit: RW_Tabs_Theme_Tit,
				};
				jQuery.post(ajaxurl, data, function(response) {
					if (response == 'Avaible') {
						jQuery('.Rich_Wen_Tabs_Error_TT').css('display','none');
						jQuery('#Rich_Web_Tabs_T_T').removeClass('Rich_Web_Tabs__InputError');
						jQuery(".Rich_Web_Tabs_SaveAnim_Theme").attr("disabled", false);
					}else{
						jQuery('.Rich_Wen_Tabs_Error_TT').css('display','block');
						jQuery('#Rich_Web_Tabs_T_T').addClass('Rich_Web_Tabs__InputError');
						jQuery(".Rich_Web_Tabs_SaveAnim_Theme").attr("disabled", true);
					}
				})
		}
	}
</script>