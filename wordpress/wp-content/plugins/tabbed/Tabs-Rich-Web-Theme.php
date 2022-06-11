<?php
	if(!defined('ABSPATH')) exit;
	if(!current_user_can('manage_options'))
	{
		die('Access Denied');
	}
	
	global $wpdb;
	$table_name  = $wpdb->prefix . "rich_web_font_family";
	$table_name5 = $wpdb->prefix . "rich_web_tabs_effects_data";
	$table_name6 = $wpdb->prefix . "rich_web_tabs_effect_1";
	$table_name7 = $wpdb->prefix . "rich_web_tabs_effect_2";

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if (check_admin_referer( 'edit-menu_', 'Rich_Web_Tabs_Nonce' ))
		{
			$Rich_Web_Tabs_T_T = sanitize_text_field($_POST['Rich_Web_Tabs_T_T']); $Rich_Web_Tabs_T_Ty = sanitize_text_field($_POST['Rich_Web_Tabs_T_Ty']); $Rich_Web_Tabs_T_W = sanitize_text_field($_POST['Rich_Web_Tabs_T_W']); $Rich_Web_Tabs_T_Al = sanitize_text_field($_POST['Rich_Web_Tabs_T_Al']); $Rich_Web_Tabs_T_CA = sanitize_text_field($_POST['Rich_Web_Tabs_T_CA']); $Rich_Web_Tabs_T_NavM = sanitize_text_field($_POST['Rich_Web_Tabs_T_NavM']); $Rich_Web_Tabs_T_NavAl = sanitize_text_field($_POST['Rich_Web_Tabs_T_NavAl']); $Rich_Web_Tabs_T_N_S = sanitize_text_field($_POST['Rich_Web_Tabs_T_N_S']); $Rich_Web_Tabs_T_N_MBgC = sanitize_text_field($_POST['Rich_Web_Tabs_T_N_MBgC']); $Rich_Web_Tabs_T_N_MBC = sanitize_text_field($_POST['Rich_Web_Tabs_T_N_MBC']); $Rich_Web_Tabs_T_N_PB = sanitize_text_field($_POST['Rich_Web_Tabs_T_N_PB']); $Rich_Web_Tabs_T_N_IBSh = sanitize_text_field($_POST['Rich_Web_Tabs_T_N_IBSh']); $Rich_Web_Tabs_T_N_OBSh = sanitize_text_field($_POST['Rich_Web_Tabs_T_N_OBSh']); $Rich_Web_Tabs_T_N_FS = sanitize_text_field($_POST['Rich_Web_Tabs_T_N_FS']); $Rich_Web_Tabs_T_N_FF = sanitize_text_field($_POST['Rich_Web_Tabs_T_N_FF']); $Rich_Web_Tabs_T_N_IS = sanitize_text_field($_POST['Rich_Web_Tabs_T_N_IS']); $Rich_Web_Tabs_T_S_BgC = sanitize_text_field($_POST['Rich_Web_Tabs_T_S_BgC']); $Rich_Web_Tabs_T_S_C = sanitize_text_field($_POST['Rich_Web_Tabs_T_S_C']); $Rich_Web_Tabs_T_S_HBgC = sanitize_text_field($_POST['Rich_Web_Tabs_T_S_HBgC']); $Rich_Web_Tabs_T_S_HC = sanitize_text_field($_POST['Rich_Web_Tabs_T_S_HC']); $Rich_Web_Tabs_T_S_CBgC = sanitize_text_field($_POST['Rich_Web_Tabs_T_S_CBgC']); $Rich_Web_Tabs_T_S_CC = sanitize_text_field($_POST['Rich_Web_Tabs_T_S_CC']); $Rich_Web_Tabs_T_C_BgT = sanitize_text_field($_POST['Rich_Web_Tabs_T_C_BgT']); $Rich_Web_Tabs_T_C_BgC = sanitize_text_field($_POST['Rich_Web_Tabs_T_C_BgC']); $Rich_Web_Tabs_T_C_BgC2 = sanitize_text_field($_POST['Rich_Web_Tabs_T_C_BgC2']); $Rich_Web_Tabs_T_C_BW = sanitize_text_field($_POST['Rich_Web_Tabs_T_C_BW']); $Rich_Web_Tabs_T_C_BC = sanitize_text_field($_POST['Rich_Web_Tabs_T_C_BC']); $Rich_Web_Tabs_T_C_BR = sanitize_text_field($_POST['Rich_Web_Tabs_T_C_BR']); $Rich_Web_Tabs_T_C_IBSC = sanitize_text_field($_POST['Rich_Web_Tabs_T_C_IBSC']); $Rich_Web_Tabs_T_C_OBSC = sanitize_text_field($_POST['Rich_Web_Tabs_T_C_OBSC']);

			$Rich_Web_Tabs_T_W_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_W_ACD']); $Rich_Web_Tabs_T_Al_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_Al_ACD']); $Rich_Web_Tabs_T_CA_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_CA_ACD']); $Rich_Web_Tabs_T_S_BgC_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_S_BgC_ACD']); $Rich_Web_Tabs_T_N_S_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_N_S_ACD']); $Rich_Web_Tabs_T_S_HBgC_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_S_HBgC_ACD']); $Rich_Web_Tabs_T_N_MBgC_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_N_MBgC_ACD']); $Rich_Web_Tabs_T_N_PB_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_N_PB_ACD']); $Rich_Web_Tabs_T_S_C_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_S_C_ACD']); $Rich_Web_Tabs_T_S_HC_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_S_HC_ACD']); $Rich_Web_Tabs_T_AlTit_ACD = ''; $Rich_Web_Tabs_T_S_CC_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_S_CC_ACD']); $Rich_Web_Tabs_T_S_CBgC_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_S_CBgC_ACD']); $Rich_Web_Tabs_T_N_IBSh_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_N_IBSh_ACD']); $Rich_Web_Tabs_T_N_OBSh_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_N_OBSh_ACD']); $Rich_Web_Tabs_T_C_BgT_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_C_BgT_ACD']); $Rich_Web_Tabs_T_C_BgC_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_C_BgC_ACD']); $Rich_Web_Tabs_T_C_BgC2_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_C_BgC2_ACD']); $Rich_Web_Tabs_T_C_BW_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_C_BW_ACD']); $Rich_Web_Tabs_T_C_BC_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_C_BC_ACD']); $Rich_Web_Tabs_T_C_BR_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_C_BR_ACD']); $Rich_Web_Tabs_T_C_IBSC_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_C_IBSC_ACD']); $Rich_Web_Tabs_T_C_OBSC_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_C_OBSC_ACD']); $Rich_Web_Tabs_T_N_PB_2_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_N_PB_2_ACD']); $Rich_Web_Tabs_T_N_SBG_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_N_SBG_ACD']); $Rich_Web_Tabs_T_S_AC_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_S_AC_ACD']); $Rich_Web_Tabs_T_AlTit_style_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_AlTit_style_ACD']); $Rich_Web_Tabs_T_N_IBSh_active_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_N_IBSh_active_ACD']); $Rich_Web_Tabs_T_N_IS_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_N_IS_ACD']); $Rich_Web_Tabs_T_S_CC_2_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_S_CC_2_ACD']); $Rich_Web_Tabs_T_S_CBgC_2_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_S_CBgC_2_ACD']); $Rich_Web_Tabs_T_N_IBSh_active_2_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_N_IBSh_active_2_ACD']); $Rich_Web_Tabs_T_N_IS_2_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_N_IS_2_ACD']); $Rich_Web_Tabs_T_N_OBSh_active_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_N_OBSh_active_ACD']); $Rich_Web_Tabs_T_N_Title_S_2_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_N_Title_S_2_ACD']); $Rich_Web_Tabs_T_Stle_Col_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_Stle_Col_ACD']); $Rich_Web_Tabs_T_Icon_style_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_Icon_style_ACD']); $Rich_Web_Tabs_T_N_FF_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_T_N_FF_ACD']); $Rich_Web_Acd_border_col = sanitize_text_field($_POST['Rich_Web_Acd_border_col']); $Rich_Web_Acd_border_col_hover = sanitize_text_field($_POST['Rich_Web_Acd_border_col_hover']); $Rich_Web_Acd_border_col_active = sanitize_text_field($_POST['Rich_Web_Acd_border_col_active']); $Rich_Web_Acd_border_width = sanitize_text_field($_POST['Rich_Web_Acd_border_width']); $Rich_Web_Acd_border_style = sanitize_text_field($_POST['Rich_Web_Acd_border_style']); $Rich_Web_Acd_border_radius = sanitize_text_field($_POST['Rich_Web_Acd_border_radius']); $Rich_Web_Acd_border_bsh_style = sanitize_text_field($_POST['Rich_Web_Acd_border_bsh_style']); $Rich_Web_Tabs_bsh_act_col_ACD = sanitize_text_field($_POST['Rich_Web_Tabs_bsh_act_col_ACD']);

			if(isset($_POST['Rich_Web_Tabs_Save_Theme']))
			{
				$wpdb->query($wpdb->prepare("INSERT INTO $table_name5 (id, Rich_Web_Tabs_T_T, Rich_Web_Tabs_T_Ty) VALUES (%d, %s, %s)", '', $Rich_Web_Tabs_T_T, $Rich_Web_Tabs_T_Ty));
				$Rich_Web_Tabs_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name5 WHERE Rich_Web_Tabs_T_T = %s", $Rich_Web_Tabs_T_T));
				if($Rich_Web_Tabs_T_Ty == 'Rich_Tabs_1')
				{
					$wpdb->query($wpdb->prepare("INSERT INTO $table_name6 (id, Tabs_T_ID, Rich_Web_Tabs_T_T, Rich_Web_Tabs_T_Ty, Rich_Web_Tabs_T_W, Rich_Web_Tabs_T_Al, Rich_Web_Tabs_T_CA, Rich_Web_Tabs_T_NavM, Rich_Web_Tabs_T_NavAl, Rich_Web_Tabs_T_N_S, Rich_Web_Tabs_T_N_MBgC, Rich_Web_Tabs_T_N_MBC, Rich_Web_Tabs_T_N_PB, Rich_Web_Tabs_T_N_IBSh, Rich_Web_Tabs_T_N_OBSh, Rich_Web_Tabs_T_N_FS, Rich_Web_Tabs_T_N_FF, Rich_Web_Tabs_T_N_IS, Rich_Web_Tabs_T_S_BgC, Rich_Web_Tabs_T_S_C, Rich_Web_Tabs_T_S_HBgC, Rich_Web_Tabs_T_S_HC, Rich_Web_Tabs_T_S_CBgC, Rich_Web_Tabs_T_S_CC, Rich_Web_Tabs_T_C_BgT, Rich_Web_Tabs_T_C_BgC, Rich_Web_Tabs_T_C_BgC2, Rich_Web_Tabs_T_C_BW, Rich_Web_Tabs_T_C_BC, Rich_Web_Tabs_T_C_BR, Rich_Web_Tabs_T_C_IBSC, Rich_Web_Tabs_T_C_OBSC) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $Rich_Web_Tabs_ID[0]->id, $Rich_Web_Tabs_T_T, $Rich_Web_Tabs_T_Ty, $Rich_Web_Tabs_T_W, $Rich_Web_Tabs_T_Al, $Rich_Web_Tabs_T_CA, $Rich_Web_Tabs_T_NavM, $Rich_Web_Tabs_T_NavAl, $Rich_Web_Tabs_T_N_S, $Rich_Web_Tabs_T_N_MBgC, $Rich_Web_Tabs_T_N_MBC, $Rich_Web_Tabs_T_N_PB, $Rich_Web_Tabs_T_N_IBSh, $Rich_Web_Tabs_T_N_OBSh, $Rich_Web_Tabs_T_N_FS, $Rich_Web_Tabs_T_N_FF, $Rich_Web_Tabs_T_N_IS, $Rich_Web_Tabs_T_S_BgC, $Rich_Web_Tabs_T_S_C, $Rich_Web_Tabs_T_S_HBgC, $Rich_Web_Tabs_T_S_HC, $Rich_Web_Tabs_T_S_CBgC, $Rich_Web_Tabs_T_S_CC, $Rich_Web_Tabs_T_C_BgT, $Rich_Web_Tabs_T_C_BgC, $Rich_Web_Tabs_T_C_BgC2, $Rich_Web_Tabs_T_C_BW, $Rich_Web_Tabs_T_C_BC, $Rich_Web_Tabs_T_C_BR, $Rich_Web_Tabs_T_C_IBSC, $Rich_Web_Tabs_T_C_OBSC));
				}
				else if ($Rich_Web_Tabs_T_Ty == 'Rich_Tabs_2') 
				{
					$wpdb->query($wpdb->prepare("INSERT INTO $table_name6 (id, Tabs_T_ID, Rich_Web_Tabs_T_T, Rich_Web_Tabs_T_Ty, Rich_Web_Tabs_T_W, Rich_Web_Tabs_T_Al, Rich_Web_Tabs_T_CA, Rich_Web_Tabs_T_NavM, Rich_Web_Tabs_T_NavAl, Rich_Web_Tabs_T_N_S, Rich_Web_Tabs_T_N_MBgC, Rich_Web_Tabs_T_N_MBC, Rich_Web_Tabs_T_N_PB, Rich_Web_Tabs_T_N_IBSh, Rich_Web_Tabs_T_N_OBSh, Rich_Web_Tabs_T_N_FS, Rich_Web_Tabs_T_N_FF, Rich_Web_Tabs_T_N_IS, Rich_Web_Tabs_T_S_BgC, Rich_Web_Tabs_T_S_C, Rich_Web_Tabs_T_S_HBgC, Rich_Web_Tabs_T_S_HC, Rich_Web_Tabs_T_S_CBgC, Rich_Web_Tabs_T_S_CC, Rich_Web_Tabs_T_C_BgT, Rich_Web_Tabs_T_C_BgC, Rich_Web_Tabs_T_C_BgC2, Rich_Web_Tabs_T_C_BW, Rich_Web_Tabs_T_C_BC, Rich_Web_Tabs_T_C_BR, Rich_Web_Tabs_T_C_IBSC, Rich_Web_Tabs_T_C_OBSC, Rich_Web_Tabs_T_01, Rich_Web_Tabs_T_02, Rich_Web_Tabs_T_03, Rich_Web_Tabs_T_04, Rich_Web_Tabs_T_05, Rich_Web_Tabs_T_06, Rich_Web_Tabs_T_07, Rich_Web_Tabs_T_08, Rich_Web_Tabs_T_09, Rich_Web_Tabs_T_10) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $Rich_Web_Tabs_ID[0]->id, $Rich_Web_Tabs_T_T, $Rich_Web_Tabs_T_Ty, $Rich_Web_Tabs_T_W_ACD, $Rich_Web_Tabs_T_Al_ACD, $Rich_Web_Tabs_T_CA_ACD, $Rich_Web_Tabs_T_N_Title_S_2_ACD, $Rich_Web_Tabs_T_AlTit_ACD, $Rich_Web_Tabs_T_N_S_ACD, $Rich_Web_Tabs_T_N_MBgC_ACD, $Rich_Web_Tabs_T_Stle_Col_ACD, $Rich_Web_Tabs_T_N_PB_ACD, $Rich_Web_Tabs_T_N_IBSh_ACD, $Rich_Web_Tabs_T_N_OBSh_ACD, $Rich_Web_Tabs_T_Icon_style_ACD, $Rich_Web_Tabs_T_N_FF_ACD, $Rich_Web_Tabs_T_N_IS, $Rich_Web_Tabs_T_S_BgC_ACD, $Rich_Web_Tabs_T_S_C_ACD, $Rich_Web_Tabs_T_S_HBgC_ACD, $Rich_Web_Tabs_T_S_HC_ACD, $Rich_Web_Tabs_T_S_CBgC_ACD, $Rich_Web_Tabs_T_S_CC_ACD, $Rich_Web_Tabs_T_C_BgT_ACD, $Rich_Web_Tabs_T_C_BgC_ACD, $Rich_Web_Tabs_T_C_BgC2_ACD, $Rich_Web_Tabs_T_C_BW_ACD, $Rich_Web_Tabs_T_C_BC_ACD, $Rich_Web_Tabs_T_C_BR_ACD, $Rich_Web_Tabs_T_C_IBSC_ACD, $Rich_Web_Tabs_T_C_OBSC_ACD, $Rich_Web_Tabs_T_N_PB_2_ACD, $Rich_Web_Tabs_T_N_SBG_ACD, $Rich_Web_Tabs_T_S_AC_ACD, $Rich_Web_Tabs_T_AlTit_style_ACD, $Rich_Web_Tabs_T_N_IBSh_active_ACD, $Rich_Web_Tabs_T_N_IS_ACD, $Rich_Web_Tabs_T_S_CC_2_ACD, $Rich_Web_Tabs_T_S_CBgC_2_ACD, $Rich_Web_Tabs_T_N_IBSh_active_2_ACD, $Rich_Web_Tabs_T_N_IS_2_ACD));
					$wpdb->query($wpdb->prepare("INSERT INTO $table_name7 (id, Tabs_T_ID, Rich_Web_Acd_border_col, Rich_Web_Acd_border_col_hover, Rich_Web_Acd_border_col_active, Rich_Web_Acd_border_width, Rich_Web_Acd_border_style, Rich_Web_Tabs_T_01, Rich_Web_Tabs_T_02, Rich_Web_Tabs_T_03) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $Rich_Web_Tabs_ID[0]->id, $Rich_Web_Acd_border_col, $Rich_Web_Acd_border_col_hover, $Rich_Web_Acd_border_col_active, $Rich_Web_Acd_border_width, $Rich_Web_Acd_border_style, $Rich_Web_Acd_border_radius, $Rich_Web_Acd_border_bsh_style, $Rich_Web_Tabs_bsh_act_col_ACD));
				}
			}
			else if(isset($_POST['Rich_Web_Tabs_Update_Theme']))
			{
				$Rich_Web_Tabs_Upd_ID_Theme=sanitize_text_field($_POST['Rich_Web_Tabs_Upd_ID_Theme']);
				$wpdb->query($wpdb->prepare("UPDATE $table_name5 set Rich_Web_Tabs_T_T = %s, Rich_Web_Tabs_T_Ty = %s WHERE id = %d", $Rich_Web_Tabs_T_T, $Rich_Web_Tabs_T_Ty, $Rich_Web_Tabs_Upd_ID_Theme));
				if($Rich_Web_Tabs_T_Ty == 'Rich_Tabs_1')
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name6 set Rich_Web_Tabs_T_T = %s, Rich_Web_Tabs_T_Ty = %s, Rich_Web_Tabs_T_W = %s, Rich_Web_Tabs_T_Al = %s, Rich_Web_Tabs_T_CA = %s, Rich_Web_Tabs_T_NavM = %s, Rich_Web_Tabs_T_NavAl = %s, Rich_Web_Tabs_T_N_S = %s, Rich_Web_Tabs_T_N_MBgC = %s, Rich_Web_Tabs_T_N_MBC = %s, Rich_Web_Tabs_T_N_PB = %s, Rich_Web_Tabs_T_N_IBSh = %s, Rich_Web_Tabs_T_N_OBSh = %s, Rich_Web_Tabs_T_N_FS = %s, Rich_Web_Tabs_T_N_FF = %s, Rich_Web_Tabs_T_N_IS = %s, Rich_Web_Tabs_T_S_BgC = %s, Rich_Web_Tabs_T_S_C = %s, Rich_Web_Tabs_T_S_HBgC = %s, Rich_Web_Tabs_T_S_HC = %s, Rich_Web_Tabs_T_S_CBgC = %s, Rich_Web_Tabs_T_S_CC = %s, Rich_Web_Tabs_T_C_BgT = %s, Rich_Web_Tabs_T_C_BgC = %s, Rich_Web_Tabs_T_C_BgC2 = %s, Rich_Web_Tabs_T_C_BW = %s, Rich_Web_Tabs_T_C_BC = %s, Rich_Web_Tabs_T_C_BR = %s, Rich_Web_Tabs_T_C_IBSC = %s, Rich_Web_Tabs_T_C_OBSC = %s WHERE Tabs_T_ID = %d", $Rich_Web_Tabs_T_T, $Rich_Web_Tabs_T_Ty, $Rich_Web_Tabs_T_W, $Rich_Web_Tabs_T_Al, $Rich_Web_Tabs_T_CA, $Rich_Web_Tabs_T_NavM, $Rich_Web_Tabs_T_NavAl, $Rich_Web_Tabs_T_N_S, $Rich_Web_Tabs_T_N_MBgC, $Rich_Web_Tabs_T_N_MBC, $Rich_Web_Tabs_T_N_PB, $Rich_Web_Tabs_T_N_IBSh, $Rich_Web_Tabs_T_N_OBSh, $Rich_Web_Tabs_T_N_FS, $Rich_Web_Tabs_T_N_FF, $Rich_Web_Tabs_T_N_IS, $Rich_Web_Tabs_T_S_BgC, $Rich_Web_Tabs_T_S_C, $Rich_Web_Tabs_T_S_HBgC, $Rich_Web_Tabs_T_S_HC, $Rich_Web_Tabs_T_S_CBgC, $Rich_Web_Tabs_T_S_CC, $Rich_Web_Tabs_T_C_BgT, $Rich_Web_Tabs_T_C_BgC, $Rich_Web_Tabs_T_C_BgC2, $Rich_Web_Tabs_T_C_BW, $Rich_Web_Tabs_T_C_BC, $Rich_Web_Tabs_T_C_BR, $Rich_Web_Tabs_T_C_IBSC, $Rich_Web_Tabs_T_C_OBSC, $Rich_Web_Tabs_Upd_ID_Theme));
				}
				else if ($Rich_Web_Tabs_T_Ty == 'Rich_Tabs_2') 
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name6 set Rich_Web_Tabs_T_T = %s, Rich_Web_Tabs_T_Ty = %s, Rich_Web_Tabs_T_W = %s, Rich_Web_Tabs_T_Al = %s, Rich_Web_Tabs_T_CA = %s, Rich_Web_Tabs_T_NavM = %s, Rich_Web_Tabs_T_NavAl = %s, Rich_Web_Tabs_T_N_S = %s, Rich_Web_Tabs_T_N_MBgC = %s, Rich_Web_Tabs_T_N_MBC = %s, Rich_Web_Tabs_T_N_PB = %s, Rich_Web_Tabs_T_N_IBSh = %s, Rich_Web_Tabs_T_N_OBSh = %s, Rich_Web_Tabs_T_N_FS = %s, Rich_Web_Tabs_T_N_FF = %s, Rich_Web_Tabs_T_N_IS = %s, Rich_Web_Tabs_T_S_BgC = %s, Rich_Web_Tabs_T_S_C = %s, Rich_Web_Tabs_T_S_HBgC = %s, Rich_Web_Tabs_T_S_HC = %s, Rich_Web_Tabs_T_S_CBgC = %s, Rich_Web_Tabs_T_S_CC = %s, Rich_Web_Tabs_T_C_BgT = %s, Rich_Web_Tabs_T_C_BgC = %s, Rich_Web_Tabs_T_C_BgC2 = %s, Rich_Web_Tabs_T_C_BW = %s, Rich_Web_Tabs_T_C_BC = %s, Rich_Web_Tabs_T_C_BR = %s, Rich_Web_Tabs_T_C_IBSC = %s, Rich_Web_Tabs_T_C_OBSC = %s, Rich_Web_Tabs_T_01 = %s, Rich_Web_Tabs_T_02 = %s, Rich_Web_Tabs_T_03 = %s, Rich_Web_Tabs_T_04 = %s, Rich_Web_Tabs_T_05 = %s, Rich_Web_Tabs_T_06 = %s, Rich_Web_Tabs_T_07 = %s, Rich_Web_Tabs_T_08 = %s, Rich_Web_Tabs_T_09 = %s, Rich_Web_Tabs_T_10 = %s WHERE Tabs_T_ID = %d", $Rich_Web_Tabs_T_T, $Rich_Web_Tabs_T_Ty, $Rich_Web_Tabs_T_W_ACD, $Rich_Web_Tabs_T_Al_ACD, $Rich_Web_Tabs_T_CA_ACD, $Rich_Web_Tabs_T_N_Title_S_2_ACD, $Rich_Web_Tabs_T_AlTit_ACD, $Rich_Web_Tabs_T_N_S_ACD, $Rich_Web_Tabs_T_N_MBgC_ACD, $Rich_Web_Tabs_T_Stle_Col_ACD, $Rich_Web_Tabs_T_N_PB_ACD, $Rich_Web_Tabs_T_N_IBSh_ACD, $Rich_Web_Tabs_T_N_OBSh_ACD, $Rich_Web_Tabs_T_Icon_style_ACD, $Rich_Web_Tabs_T_N_FF_ACD, $Rich_Web_Tabs_T_N_IS, $Rich_Web_Tabs_T_S_BgC_ACD, $Rich_Web_Tabs_T_S_C_ACD, $Rich_Web_Tabs_T_S_HBgC_ACD, $Rich_Web_Tabs_T_S_HC_ACD, $Rich_Web_Tabs_T_S_CBgC_ACD, $Rich_Web_Tabs_T_S_CC_ACD, $Rich_Web_Tabs_T_C_BgT_ACD, $Rich_Web_Tabs_T_C_BgC_ACD, $Rich_Web_Tabs_T_C_BgC2_ACD, $Rich_Web_Tabs_T_C_BW_ACD, $Rich_Web_Tabs_T_C_BC_ACD, $Rich_Web_Tabs_T_C_BR_ACD, $Rich_Web_Tabs_T_C_IBSC_ACD, $Rich_Web_Tabs_T_C_OBSC_ACD, $Rich_Web_Tabs_T_N_PB_2_ACD, $Rich_Web_Tabs_T_N_SBG_ACD, $Rich_Web_Tabs_T_S_AC_ACD, $Rich_Web_Tabs_T_AlTit_style_ACD, $Rich_Web_Tabs_T_N_IBSh_active_ACD, $Rich_Web_Tabs_T_N_IS_ACD, $Rich_Web_Tabs_T_S_CC_2_ACD, $Rich_Web_Tabs_T_S_CBgC_2_ACD, $Rich_Web_Tabs_T_N_IBSh_active_2_ACD, $Rich_Web_Tabs_T_N_IS_2_ACD, $Rich_Web_Tabs_Upd_ID_Theme));
					$wpdb->query($wpdb->prepare("UPDATE $table_name7 set Rich_Web_Acd_border_col = %s, Rich_Web_Acd_border_col_hover = %s, Rich_Web_Acd_border_col_active = %s, Rich_Web_Acd_border_width = %s, Rich_Web_Acd_border_style = %s, Rich_Web_Tabs_T_01 = %s, Rich_Web_Tabs_T_02 = %s, Rich_Web_Tabs_T_03 = %s WHERE Tabs_T_ID = %s", $Rich_Web_Acd_border_col, $Rich_Web_Acd_border_col_hover, $Rich_Web_Acd_border_col_active, $Rich_Web_Acd_border_width, $Rich_Web_Acd_border_style, $Rich_Web_Acd_border_radius, $Rich_Web_Acd_border_bsh_style, $Rich_Web_Tabs_bsh_act_col_ACD, $Rich_Web_Tabs_Upd_ID_Theme));
				}
			}
		}
		else
		{
			wp_die('Security check fail'); 
		}
	}
	$Rich_WebFontCount = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name WHERE id>%d",0));
	$Rich_Web_Tabs_Dat = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name6 WHERE id>%d",0));
	$Rich_Web_Tabs_T1  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name6 WHERE id>%d",0));
	$Rich_Web_Tabs_T2  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name7 WHERE id>%d",0));

	$Rich_Web_Tabs_T1_ACD  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name6 WHERE Rich_Web_Tabs_T_Ty=%s",'Rich_Tabs_2'));
	$Rich_Web_Tabs_T2_ACD  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name7 WHERE Tabs_T_ID=%s",$Rich_Web_Tabs_T1_ACD[0]->id));
?>

<style>
button , a , input {
    outline:none !important;
}
button:focus {
    border: none;
    outline: none;
}
input[type=button]:focus, input[type=submit]:focus{
	border: none;
    outline: none;
}
.button_nav_bar{
    text-decoration: none;
    color: #fff;    
    padding: 8px 19px;   
    background-color: #23282d;
    border:none;    
    font-size: 16px;
    cursor: pointer;
    box-shadow: 0px 0px 8px grey;
    margin: 6px;
    border-radius: 7px;
	outline:none;
 }
 .button_nav_bar:hover{
 	color: white;
 	background-color: #6ecae9;
	outline:none;
 }
 .button_nav_bar.active{
 	color: white;
 	background-color: #6ecae9;
	outline:none;
 }
 .nav_bar_tabs{
 	overflow: hidden;
    background-color: #23282d;
    width: 99%;
    display: inline-flex;
 }
 .tab_content {
    display: inline-block;
    height: 100%;
    width: 21%;
    position: relative;
    margin: 20px;
}
 .tab_content:hover .tab_all_icons{
 	display: block;
 	position: absolute;
 	bottom: 60px;
 	width: 90%;
 	text-align: center;
 	width: 100%;
    box-sizing: content-box;
    position: absolute;
    background-color: #1c1b1b9e;
    border-radius: 10px;
    bottom: 0%;
    top: 0%;
  }
  .tab_content:hover .tab_icon{
 	border-radius: 7px;
    background-color: #055c82;
    cursor: pointer;
 	display: inline-block;
 	width: 17px;
 	font-size: 15px;
 	padding: 7px;
	 margin-left: 5px;
 }
 .tab_content:hover .tab_icon_pro{
	border-radius: 7px;
	background-color: #63a4ff;
    background-image: linear-gradient(315deg, #63a4ff 0%, #83eaf1 74%);
    cursor: pointer;
 	display: inline-block;
 	width: 30%;
 	color: white;
 	font-size: 15px;
 	padding: 5px;
 	position: relative;
 	top: 5px;
 }
 .tab_content:hover .tab_name{
 	font-size: 15px;
 	position: absolute;
 	top: -15px;
 	width: 100%;
 	color: white;
 	font-family: initial;
 	text-align: center;
 	display: block;
 }
 .tab_content:hover .tab_image{
 	opacity: 0.2;
 	width: 97%;
 	height: 80%;
 	position: relative;
 	background-color: #6ecae9;
 	color: #6ecae9;
 }
 .tab_content:hover .rw_tabs_name_dis{
	 font-size:12px;
 }
 .tab_image {
    display: inline-block;
    width: 100%;
    height: 62%;
    opacity: 1;
    border-radius: 9px;
    box-shadow: 0px 0px 8px #5a5757;
}
 .Rich_Web_Tabs_Content_Data1_Theme{
 	text-align: center;
 	background-color: #23282d;
 	margin-top: 0 !important;
 }
 .tab_icon{
 	cursor: pointer;
 	display: inline-block;
 	background-color: transparent;
 	width: 25px;
 	font-size: 25px;
 	padding: 10px;
 }
.tab_icon_cancel {
    background-color: #990000;
    background-image: linear-gradient(147deg, #990000 0%, #ff0000 74%);
    opacity: 0.7;
    border: none;
    color: white;
    padding: 6px 11px;
    cursor: pointer;
    font-size: 13px;
    border-radius: 7px;
    margin-right: 10px;
}
.tab_icon_delete {
	background-color: #63a4ff;
    background-image: linear-gradient(315deg, #63a4ff 0%, #83eaf1 74%);
	opacity: 0.7;
    border: none;
    color: white;
    padding: 6px 11px;
    cursor: pointer;
    font-size: 13px;
    border-radius: 7px;
}
.tab_icon_cancel:hover , .tab_icon_delete:hover{
    opacity:1;
}
.tab_all_icons{
 	position: absolute;
 	bottom: 60px;
 	width: 100%;
 	text-align: center;
 	display: none;
}
 .tab_name{
 	font-size: 18px;
 	position: absolute;
 	top: 10px;
 	width: 100%;
 	text-align: center;
 	display: none;
 	color: white;
 	font-family: initial;
}
 .tab-icon2{
 	width: 100%;
 	position: relative;
 	top: 37%;
 }
 .underline{
 	border-top: 1px solid #6ecae9;
 	width: 99%;
 	margin: -0.3px;
 }
 .pro_types{
 	width: 100%;
 	font-size: 12px;
 }
 .Rich_Web_Tabs_Pro_Badge_Overlay {
    position: absolute;
    left: 0%;
    top: 0px;
    width: 32%;
    height: 81%;
    overflow: hidden;
    pointer-events: none;
    z-index: 100;
    -webkit-transition: width 1s ease, height 1s ease;
    -moz-transition: width 1s ease, height 1s ease;
    -o-transition: width 1s ease, height 1s ease;
    transition: width 0.4s ease, height 0.4s ease;
}
.Rich_Web_Tabs_Pro_Badge {
    margin: 0;
    padding: 0;
    color: white;
    padding: 4px 0px;
    font-size: 10px;
    font-family: Arial, Helvetica, sans-serif;
    line-height: normal;
    text-transform: uppercase;
    background: #47a3da;
}
.Rich_Web_Tabs_Pro_Badge::before, .Rich_Web_Tabs_Pro_Badge::after {
    content: '';
    position: absolute;
    top: 0;
    margin: 0 -1px;
    width: 100%;
    height: 100%;
    background: inherit;
    min-width: 55px
}
.Rich_Web_Tabs_Pro_Badge::before {
    right: 100%
}
.Rich_Web_Tabs_Pro_Badge::after {
    left: 100%
}
.Rich_Web_Tabs_Badge_TopLeft {
    position: absolute;
    top: 0;
    left: 0;
    -ms-transform: translateX(-30%) translateY(0%) rotate(-45deg);
    -webkit-transform: translateX(-30%) translateY(0%) rotate(-45deg);
    transform: translateX(-30%) translateY(0%) rotate(-45deg);
    -ms-transform-origin: top right;
    -webkit-transform-origin: top right;
    transform-origin: top right;
}
@media only screen and (max-width: 1258px) 
{
  .tab_content {margin: 13px;width: 21%;}
}
@media only screen and (max-width: 905px) 
{
  .tab_content {margin: 14px;width: 28%;}
}
@media only screen and (max-width: 585px) 
{
  .tab_content { margin: 2px; width: 31%;}
}
.rw_tabs_icons_dis
{
 	display: block !important;
 	bottom: 60px;
 	width: 90%;
 	text-align: center;
    width: 100%;
    box-sizing: content-box;
    position: absolute;
    background-color: #1c1b1b9e;
    border-radius: 10px;
    bottom: 0%;
    top: 0%;
}
.rw_tabs_name_dis
{
    font-size: 12px;
    position: absolute;
    top: -15px;
    width: 100%;
    color: white;
    font-family: initial;
    text-align: center;
    display: block !important;
 }
.rw_tabs_tab_image_dis
{
 	opacity: 0.2;
 	width: 97%;
 	height: 80%;
 	position: relative;
 	background-color: #6ecae9;
 	color: #6ecae9;
}

.Rich_Web_Tabs__InputError{
border: 1px solid #ff0000 !important;
color: #0e0e0e !important;
outline:none !important;
}
.Rich_Web_Tabs__InputError:focus{
	box-shadow:none !important;
}
.Rich_Wen_Tabs_Error_TT {
	font-family: Helvetica;
    font-size: 13px;
    font-weight: bold;
    color: #cc0033;
    line-height: 20px;
    background-color: #fce4e4;
    border: 1px solid #fcc2c3;
    border-radius: 7px;
    -moz-border-radius: 7px;
    -webkit-border-radius: 7px;
    float: right;
    position: absolute;
    padding: 7px 11px 4px;
    margin-right: 11px;
    position: absolute;
    top: 40px;
    left: 44%;
    display:none;
}
.Rich_Wen_Tabs_Error_TT:after, .Rich_Wen_Tabs_Error_TT:before {
  content: '';
  border: 7px solid transparent;
  position: absolute;
  top: 10px;
}
.Rich_Wen_Tabs_Error_TT:after {
  border-right: 7px solid #fce4e4;
  left: -14px;
}
.Rich_Wen_Tabs_Error_TT:before {
  border-right: 7px solid #fcc2c3;
  left: -15px;
}
.Rich_Web_Tabs_SaveAnim_Theme:disabled{
	background: #47bde5;
    cursor: pointer;
    border: none;
    box-shadow: 0px 0px 2px #47bde5;
    color: #fff;
    text-shadow: 1px 1px 1px #000000;
}
.RW_Tabs_Pre_Load {
	position: fixed;
    top: 43%;
    left: 54%;
}
.RW_Tabs_Pre_Spin {
	position: absolute;
	top: 0;
	width: 50px;
	height: 50px;
	border-radius: 50%;
	border: 15px solid #23282d;
	animation: rw_tabs_anim_rotation 3s infinite linear;
	-webkit-animation: rw_tabs_anim_rotation 3s infinite linear;
	-moz-animation: rw_tabs_anim_rotation 3s infinite linear;
	-o-animation: rw_tabs_anim_rotation 3s infinite linear;
}
.RW_Tabs_Pre_Spin:before {
	content: "";
	display: block;
	position: absolute;
	left: -15px;
	top: -15px;
	height: 100%;
	width: 100%;
	border-top: 15px solid #6ecae9;
	opacity: 0.8;
	border-left: 15px solid transparent;
	border-bottom: 15px solid transparent;
	border-right: 15px solid transparent;
	border-radius: 50%;
}

@-webkit-keyframes rw_tabs_anim_rotation {
	from {-webkit-transform: rotate(0deg);}
	to {-webkit-transform: rotate(359deg);}
}
@-moz-keyframes rw_tabs_anim_rotation {
	from {-moz-transform: rotate(0deg);}
	to {-moz-transform: rotate(359deg);}
}
@-o-keyframes rw_tabs_anim_rotation {
	from {-o-transform: rotate(0deg);}
	to {-o-transform: rotate(359deg);}
}
@keyframes rw_tabs_anim_rotation {
	from {transform: rotate(0deg);}
	to {transform: rotate(359deg);}
}
.RW_Tabs_Pre_Rounder {
	position: absolute;
	top: -15px;
	left: -15px;
	width: 70px;
	height: 70px;
	border: 20px solid;
	border-radius: 50%;
    border-top-color: #6ecae9;
    border-left-color: #fff;
    border-bottom-color: #6ecae9;
    border-right-color: #fff;
	opacity: 0.2;
	animation: rw_tabs_anim_load_one 5s infinite;
	-webkit-animation: rw_tabs_anim_load_one 5s infinite;
	-moz-animation: rw_tabs_anim_load_one 5s infinite;
	-o-animation: rw_tabs_anim_load_one 5s infinite;
}
@keyframes rw_tabs_anim_load_one {
	0% {transform: scale(1,1) rotate(0deg); opacity: 0.2;}
	50% {transform: scale(4,4) rotate(360deg); opacity: 0;}
}
@-webkit-keyframes rw_tabs_anim_load_one {
	0% {-webkit-transform: scale(1,1) rotate(0deg); opacity: 0.2;}
	50% {-webkit-transform: scale(4,4) rotate(360deg); opacity: 0;}
}
@-moz-keyframes rw_tabs_anim_load_one {
	0% {-moz-transform: scale(1,1) rotate(0deg); opacity: 0.2;}
	50% {-moz-transform: scale(4,4) rotate(360deg); opacity: 0;}
}
@-o-keyframes rw_tabs_anim_load_one {
	0% {-o-transform: scale(1,1) rotate(0deg); opacity: 0.2;}
	50% {-o-transform: scale(4,4) rotate(360deg); opacity: 0;}
}
.RW_Tabs_Pre_Rounder_Sec {
    opacity: 0.1;
    transform: rotate(90deg);
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    animation: rw_tabs_anim_load_two5s infinite;
    -webkit-animation: rw_tabs_anim_load_two5s infinite;
    -moz-animation: rw_tabs_anim_load_two5s infinite;
    -o-animation: rw_tabs_anim_load_two5s infinite;
    animation-delay: 1s;
    -webkit-animation-delay: 1s;
    -moz-animation-delay: 1s;
    -o-animation-delay: 1s;
}
@keyframes rw_tabs_anim_load_two{
	0% {transform: scale(1,1) rotate(90deg); opacity: 0.1;}
	50% {transform: scale(4,4) rotate(-360deg); opacity: 0;}
}
@-webkit-keyframes rw_tabs_anim_load_two{
	0% {-webkit-transform: scale(1,1) rotate(90deg); opacity: 0.1;}
	50% {-webkit-transform: scale(4,4) rotate(-360deg); opacity: 0;}
}
@-moz-keyframes rw_tabs_anim_load_two{
	0% {-moz-transform: scale(1,1) rotate(90deg); opacity: 0.1;}
	50% {-moz-transform: scale(4,4) rotate(-360deg); opacity: 0;}
}
@-o-keyframes rw_tabs_anim_load_two{
	0% {-o-transform: scale(1,1) rotate(90deg); opacity: 0.1;}
	50% {-o-transform: scale(4,4) rotate(-360deg); opacity: 0;}
}
.RW_Tabs_Pre_Loader_T {
    position: absolute;
    top: 95px;
    left: -38px;
    font-family: Arial;
    color: #999999;
    letter-spacing: 3px;
    min-width: 160px;
    text-align: center;
    -webkit-animation: rw_tabs_text 5s infinite;
    -moz-animation: rw_tabs_text 5s infinite;
    -o-animation: rw_tabs_text 5s infinite;
    animation: rw_tabs_text 5s infinite;
}
@-webkit-keyframes rw_tabs_text {
	0% {opacity: 1;}
	10% {opacity: 0.5}
	15% {opacity: 1;}
	30% {opacity: 1;}
	65% {opacity: 0.3;}
	90% {opacity: 0.8;}
}
@-moz-keyframes rw_tabs_text {
	0% {opacity: 1;}
	10% {opacity: 0.5}
	15% {opacity: 1;}
	30% {opacity: 1;}
	65% {opacity: 0.3;}
	90% {opacity: 0.8;}
}
@-o-keyframes rw_tabs_text {
	0% {opacity: 1;}
	10% {opacity: 0.5}
	15% {opacity: 1;}
	30% {opacity: 1;}
	65% {opacity: 0.3;}
	90% {opacity: 0.8;}
}
@keyframes rw_tabs_text {
	0% {opacity: 1;}
	10% {opacity: 0.5}
	15% {opacity: 1;}
	30% {opacity: 1;}
	65% {opacity: 0.3;}
	90% {opacity: 0.8;}
}
.RW_Tabs_Pre_Div{
    position: fixed;
    top: 0;
    background: #23282d;
    z-index: 200;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    vertical-align: middle;
    bottom: 0;
}

.Rich_Web_Tabs_Del_Trash{
    color: #ffffff;
    font-size: 25px;
    display: inherit;
    margin-bottom: 9px;
}
.Rich_Web_Tabs_Deleting , .Rich_Web_Tabs_Copying  {
    -webkit-animation:spin 4s linear infinite;
    -moz-animation:spin 4s linear infinite;
    animation:spin 4s linear infinite;
}
.Rich_Web_Tabs_Del_Trash {
    color:red;
}
@-moz-keyframes spin { 100% { -moz-transform: rotate(360deg); } }
@-webkit-keyframes spin { 100% { -webkit-transform: rotate(360deg); } }
@keyframes spin { 100% { -webkit-transform: rotate(360deg); transform:rotate(360deg); } }

.Rich_Web_Tabs_Inserting {
        -webkit-animation: action 1s infinite  alternate;
        animation: action 1s infinite  alternate;
}
@-webkit-keyframes action {
    0% { transform: translateY(0); }
    100% { transform: translateY(-10px); }
}
@keyframes action {
    0% { transform: translateY(0); }
    100% { transform: translateY(-10px); }
}
.tab_icon_copy {
    background-color: #055c82;
    border: none;
    color: white;
    padding: 7px 12px;
    cursor: pointer;
    font-size: 15px;
    border-radius: 7px;
}
.tab_icon_copy:hover {
  background-color: #055c82;
}
</style>

<script>
jQuery(window).load(function() {
  jQuery('.RW_Tabs_Pre_Div').hide();
});
</script>	

<form method="POST" enctype="multipart/form-data" >
	<div class="RW_Tabs_Pre_Div" >
			<div class="RW_Tabs_Pre_Load">
				<div class="RW_Tabs_Pre_Spin"></div>
				<div class="RW_Tabs_Pre_Rounder"></div>
				<div class="RW_Tabs_Pre_Rounder RW_Tabs_Pre_Rounder_Sec"></div>
				<div class="RW_Tabs_Pre_Loader_T">
					Loading
				</div>
			</div>	
	</div>
	<?php wp_nonce_field( 'edit-menu_', 'Rich_Web_Tabs_Nonce' );?>
	<?php require_once( 'Tabs-Rich-Web-Header.php' ); ?>
	<div class="RichWeb_Tabs_Themes_Buttons" style="position: relative; width: 99%; height: 50px;">
	<div id="RichWeb_Tabs_ProVersion_Info" style="">
  		<span class="RW_Tabs_ProVersion_reversed RW_Tabs_ProVersion_reversed_Right">
    		<span> &#9888; </span>
 		</span>
  		<span class="RW_Tabs_ProVersion_reversed RW_Tabs_ProVersion_reversed_Left">
		  If you want to create new themes, it’s available only on the pro version!
  		</span> 
	</div>
		<a href="https://wordpress.org/support/plugin/tabbed/" target="_blank"><input type="button"  class="RichWeb_Tabs_Sup_But" value="Support" /></a>
		<input type='button' class='Rich_Web_Tabs_Add_Theme'    value='New Theme'    onclick='Rich_Web_Tabs_Added_Theme()'/>
		<input type='submit' class='Rich_Web_Tabs_Save_Theme'   value='Save Theme'   name='Rich_Web_Tabs_Save_Theme' />
		<input type='submit' class='Rich_Web_Tabs_Update_Theme' value='Update Theme' name='Rich_Web_Tabs_Update_Theme'/>
		<input type='button' class='Rich_Web_Tabs_Cancel_Theme' value='Cancel'       onclick='Rich_Web_Tabs_Theme_Canceled()'/>
		<input type='text' style='display:none' id="Rich_Web_Tabs_Upd_ID_Theme" name='Rich_Web_Tabs_Upd_ID_Theme' value="">
	</div>
	<div class="nav_bar_tabs" id="navigation_bar">
	 <button class="button_nav_bar all active" onclick="filter_tabs('all')">All</button>
	 <button class="button_nav_bar free" onclick="filter_tabs('free')">Free</button>
	 <button class="button_nav_bar tabs" onclick="filter_tabs('tabs')">Tabs</button>
	 <button class="button_nav_bar accordion" onclick="filter_tabs('accordion')">Accordion</button>
	 </div>
	 <div><hr class="underline">
	<div class="Rich_Web_Tabs_Fixed_Div"></div>
	<div class='Rich_Web_Tabs_Content_Theme'>	
		<div class='Rich_Web_Tabs_Content_Data1_Theme' >
			<?php for($i=0;$i<count($Rich_Web_Tabs_Dat);$i++){?> 
				<?php preg_match_all('/\d{1,2}/', $Rich_Web_Tabs_Dat[$i]->Rich_Web_Tabs_T_N_S, $tabTy); $tabTy = $tabTy[0][0]; ?>				
				<?php preg_match_all('/acd/', $Rich_Web_Tabs_Dat[$i]->Rich_Web_Tabs_T_N_S, $acd); $acd = $acd[0][0]; if($acd == ''){$acd = 'tabs';}; ?>
				<div class="tab_content <?php echo $acd.'_a'.' '; ?> <?php echo 'free'.' '; echo $acd.' '; echo $tabTy;?>">
			    <?php if($acd == 'tabs') { ?>
			    	<img src='https://rich-web.org/tab-images/WordPress-Tab-<?php echo($tabTy) ;?>.png' alt="<?php echo $Rich_Web_Tabs_Dat[$i]->Rich_Web_Tabs_T_T; ?>" class="tab_image">
			    <?php }else{
				if ($tabTy == 1) { $tabTy = 45; }
					?>
			    	<img src='https://rich-web.org/tab-images/WordPress-Accordion-<?php echo($tabTy) ;?>.png' alt="<?php echo $Rich_Web_Tabs_Dat[$i]->Rich_Web_Tabs_T_T; ?>" class="tab_image">
			    <?php }?>
			    <div class='tab_all_icons'>
			    	<div class="tab-icon2 IconTab<?php echo $Rich_Web_Tabs_Dat[$i]->id;?>">
				   		<div class='tab_icon'
				    	onclick="Rich_Web_Tabs_Edit_Theme(<?php echo $Rich_Web_Tabs_Dat[$i]->id;?>)"><i class='Rich_Web_Tabs_Edit rich_web rich_web-pencil'></i></div>
				    	<div class='tab_icon'
				    	onclick="Rich_Web_Tabs_Copy_Theme(<?php echo $Rich_Web_Tabs_Dat[$i]->id;?>)"><i class='Rich_Web_Tabs_Copy rich_web rich_web-files-o'></i></div>
				    	<?php if ($Rich_Web_Tabs_Dat[$i]->id > 16) { ?>
						<div class="tab_icon" 
						onclick="Rich_Web_Tabs_Delete_Theme(<?php echo $Rich_Web_Tabs_Dat[$i]->id;?>)"><i class='Rich_Web_Tabs_Del rich_web rich_web-trash'></i></div>
						<?php } ?>
					</div></div>
				        <h4 class="tab_name IconTab_Name<?php echo $Rich_Web_Tabs_Dat[$i]->id;?>"><?php echo $Rich_Web_Tabs_Dat[$i]->Rich_Web_Tabs_T_T; ?></h4>
			    </div>			   
			<?php } ?>
			<?php for($i=1;$i<=31;$i++){?> 
				<div class="tab_content tabs tabs_b <?php echo $i; ?>">
					<img src='https://rich-web.org/tab-images/WordPress-Tab-<?php echo $i;?>.png' alt="Tabs - <?php echo $i; ?>" class="tab_image">
			    	<div class="Rich_Web_Tabs_Pro_Badge_Overlay">
                    	<span class="Rich_Web_Tabs_Badge_TopLeft Rich_Web_Tabs_Pro_Badge">Pro</span>
                	</div>
					<div class='tab_all_icons'>
			    		<div class="tab-icon2">
			    			<a href="https://rich-web.org/wordpress-tabs-<?php echo $i; ?>/" target="_blank">
				   			<div class='tab_icon_pro'><i class="pro_types">PRO ONLY</i></div></a>
				    	</div>
				        <h4 class="tab_name">Tabs - <?php echo $i; ?></h4>
					</div></div>
			<?php } ?>
			<?php for($i=1;$i<=31;$i++){?> 
			
				<div class="tab_content acd acd_b <?php echo $i; ?>">
			    	<img src='https://rich-web.org/tab-images/WordPress-Accordion-<?php if ($i == 1) { echo '45' ;}else{echo $i;} ?>.png' alt="Tabs - <?php echo $i; ?>" class="tab_image">
			    	<div class="Rich_Web_Tabs_Pro_Badge_Overlay">
                    <span class="Rich_Web_Tabs_Badge_TopLeft Rich_Web_Tabs_Pro_Badge">Pro</span>
                	</div>
					<div class='tab_all_icons'>
			    		<div class="tab-icon2">
				   			<a href="https://rich-web.org/wordpress-tab-accordion-faq-<?php echo $i; ?>/" target="_blank">
				   		<div class='tab_icon_pro'><i class="pro_types">PRO ONLY</i></div></a>
				    </div>
				    <h4 class="tab_name">Accordion - <?php echo $i; ?></h4>
					</div></div>
			<?php } ?>
			<script type="text/javascript">
				function filter_reset(){
					for (var i = 0; i < jQuery('.tabs_a').length; i++) {
						for (var k = 0; k < jQuery('.tabs_b').length; k++) {
							if (jQuery(jQuery('.tabs_a')[i]).attr('class').split(' ').pop() == jQuery(jQuery('.tabs_b')[k]).attr('class').split(' ').pop()) {
								jQuery(jQuery('.tabs_b')[k]).css('display','none');
							}
						}
					}
					for (var i = 0; i < jQuery('.acd_a').length; i++) {
						for (var k = 0; k < jQuery('.acd_b').length; k++) {
							if (jQuery(jQuery('.acd_a')[i]).attr('class').split(' ').pop() == jQuery(jQuery('.acd_b')[k]).attr('class').split(' ').pop()) {
								jQuery(jQuery('.acd_b')[k]).css('display','none');
							}
						}
					}
				}
				function Rich_Web_Tabs_Copy_Theme(Theme_ID) {
					event.preventDefault();
                    jQuery('.IconTab_Name' + Theme_ID).addClass('rw_tabs_name_dis');
                    jQuery('.IconTab' + Theme_ID).parent().addClass('rw_tabs_icons_dis');
                    jQuery('.IconTab' + Theme_ID).parent().prev().addClass('rw_tabs_tab_image_dis');
                    var rw_tabs_copied_img = jQuery('.IconTab' + Theme_ID).parent().prev().attr('src');
                    jQuery('.IconTab' + Theme_ID).html('<button class="tab_icon_copying rw_tab_acc_copied' + Theme_ID + '"><i class="Rich_Web_Tabs_Copying rich_web rich_web-refresh  rich_web_tabs-spin"></i>Copying</button>');
                    var ajaxurl = object.ajaxurl;
                    var data = {
                        action: 'Rich_Web_Tabs_Clone_Theme', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
                        foobar: Theme_ID, // translates into $_POST['foobar'] in PHP
                    };
                    jQuery.post(ajaxurl, data, function(response) {
                        var arr = Array();
                        var spl = response.split('=>');
                        for (var i = 1; i < spl.length; i++) {
                            arr[arr.length] = spl[i].split('[')[0].trim();
                        }
                        arr[arr.length - 1] = arr[arr.length - 1].split(')')[0].trim();
                        var rw_new_tab_acd_id = arr[0];
                        var rw_new_tab_acd_name = arr[1];
                        var rw_new_tab_acd_type = arr[2];
                        jQuery('.rw_tab_acc_copied' + Theme_ID).html('<i class="Rich_Web_Tabs_Install rich_web rich_web-check"></i> Copied');
                        setTimeout(() => {

                            if (rw_new_tab_acd_type == 'Rich_Tabs_1') {

                                jQuery('.IconTab' + Theme_ID).parent().parent().after('<div class="tab_content tabs_a free tabs ' + Theme_ID +'"><img src="' + rw_tabs_copied_img + '" alt="' +rw_new_tab_acd_name +'" class="tab_image"><div class="tab_all_icons"><div class="tab-icon2 IconTab' +rw_new_tab_acd_id +'"><div class="tab_icon" onclick="Rich_Web_Tabs_Edit_Theme(' +rw_new_tab_acd_id +')"><i class="Rich_Web_Tabs_Edit rich_web rich_web-pencil"></i></div><div class="tab_icon" onclick="Rich_Web_Tabs_Copy_Theme(' +rw_new_tab_acd_id +')"><i class="Rich_Web_Tabs_Copy rich_web rich_web-files-o"></i></div><div class="tab_icon" onclick="Rich_Web_Tabs_Delete_Theme(' +rw_new_tab_acd_id +')"><i class="Rich_Web_Tabs_Del rich_web rich_web-trash"></i></div></div></div><h4 class="tab_name IconTab_Name' +rw_new_tab_acd_id + '">' + rw_new_tab_acd_name + '</h4></div>');
                            } else if (rw_new_tab_acd_type == 'Rich_Tabs_2') {
                                jQuery('.IconTab' + Theme_ID).parent().parent().after('<div class="tab_content acd_a  free acd ' + Theme_ID +'"><img src="' + rw_tabs_copied_img + '" alt="' +rw_new_tab_acd_name +'" class="tab_image"><div class="tab_all_icons"><div class="tab-icon2 IconTab' +rw_new_tab_acd_id +'"><div class="tab_icon" onclick="Rich_Web_Tabs_Edit_Theme(' +rw_new_tab_acd_id +')"><i class="Rich_Web_Tabs_Edit rich_web rich_web-pencil"></i></div><div class="tab_icon" onclick="Rich_Web_Tabs_Copy_Theme(' +rw_new_tab_acd_id +')"><i class="Rich_Web_Tabs_Copy rich_web rich_web-files-o"></i></div><div class="tab_icon" onclick="Rich_Web_Tabs_Delete_Theme(' +rw_new_tab_acd_id +')"><i class="Rich_Web_Tabs_Del rich_web rich_web-trash"></i></div></div></div><h4 class="tab_name IconTab_Name' +rw_new_tab_acd_id + '">' + rw_new_tab_acd_name + '</h4></div>');
                            }
                            jQuery('.IconTab_Name' + Theme_ID).removeClass('rw_tabs_name_dis');
                            jQuery('.IconTab' + Theme_ID).parent().removeClass('rw_tabs_icons_dis');
                            jQuery('.IconTab' + Theme_ID).parent().prev().removeClass('rw_tabs_tab_image_dis');
							if (Theme_ID < 17) {
								jQuery('.IconTab' + Theme_ID).html('<div class="tab_icon" onclick="Rich_Web_Tabs_Edit_Theme(' +Theme_ID + ')"><i class="Rich_Web_Tabs_Edit rich_web rich_web-pencil"></i></div><div class="tab_icon" onclick="Rich_Web_Tabs_Copy_Theme(' +Theme_ID + ')"><i class="Rich_Web_Tabs_Copy rich_web rich_web-files-o"></i></div>');
							}else{
								jQuery('.IconTab' + Theme_ID).html('<div class="tab_icon" onclick="Rich_Web_Tabs_Edit_Theme(' +Theme_ID + ')"><i class="Rich_Web_Tabs_Edit rich_web rich_web-pencil"></i></div><div class="tab_icon" onclick="Rich_Web_Tabs_Copy_Theme(' +Theme_ID + ')"><i class="Rich_Web_Tabs_Copy rich_web rich_web-files-o"></i></div><div class="tab_icon" onclick="Rich_Web_Tabs_Delete_Theme(' +Theme_ID + ')"><i class="Rich_Web_Tabs_Del rich_web rich_web-trash"></i></div>');

							}
                        }, 600);
                    });
                }
			
				function filter_tabs(x){
					event.preventDefault();	
					if (x == 'all') {
						jQuery('.tab_content').css('display','');
					}
					else if (x == 'free') {
						jQuery('.tab_content').css('display','none');
						jQuery('.free').css('display','');
					}
					else if (x == 'tabs') {
						jQuery('.tab_content').css('display','none');
						jQuery('.tabs').css('display','');
					}
					else if (x == 'accordion') {
						jQuery('.tab_content').css('display','none');
						jQuery('.acd').css('display','');
					}
					jQuery('.button_nav_bar').removeClass('active')
					jQuery('.nav_bar_tabs .'+ x).addClass('active')
					filter_reset()
				}
				filter_reset()
				</script>
		</div>
		<div class='Rich_Web_Tabs_Content_Data2_Theme'>
			<table class="Rich_Web_Tabs_Content_Table3_Theme1">
				<tr>
					<td>Theme Name</td>
					<td>Theme Type</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_T" id="Rich_Web_Tabs_T_T" placeholder="Theme Title. . ."  required='required'   oninput="Rich_Web_Tabs_T_T_Available()" >
						<div class="Rich_Wen_Tabs_Error_TT"> This name isn't avaible </div>
					</td>
					<td>
						<select name="Rich_Web_Tabs_T_Ty" id="Rich_Web_Tabs_T_Ty" onchange="Rich_Web_Tabs_T_Ty_Changed()">
							<option value="Rich_Tabs_1"> Tabs      </option>
							<option value="Rich_Tabs_2"> Accordion </option>
						</select>
					</td>
					<input type="hidden" name="Rich_Web_Tabs_T_Ty" id="Rich_Web_Tabs_T_Ty1" disabled="disabled">
				</tr>
			</table>
			<table class="Rich_Web_Tabs_Content_Table3_Theme Rich_Web_Tabs_Content_Table3_Theme_1">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Width (%)</td>
					<td>Align</td>
					<td>Content Animation</td>
					<td>Navigation Mode</td>
				</tr>
				<tr>
					<td>
						<div class="Rich_Web_Tabs_Range">  
							<input class="Rich_Web_Tabs_Range__range" type="range" id="Rich_Web_Tabs_T_W" name="Rich_Web_Tabs_T_W" value="<?php echo $Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_W;?>" min="0" max="100">
							<span class="Rich_Web_Tabs_Range__value" id="Rich_Web_Tabs_T_W_Span"><?php echo $Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_W;?></span>
						</div>
					</td>
					<td>
						<select name="Rich_Web_Tabs_T_Al" id="Rich_Web_Tabs_T_Al">
							<option value="left"   <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_Al=='left'){ echo 'selected';}?>>   Left   </option>
							<option value="right"  <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_Al=='right'){ echo 'selected';}?>>  Right  </option>
							<option value="center" <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_Al=='center'){ echo 'selected';}?>> Center </option>
						</select>
					</td>
					<td>
						<select name="Rich_Web_Tabs_T_CA" id="Rich_Web_Tabs_T_CA">
						    <option value="" >None</option>
							<option value="Random"          <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='Random'){ echo 'selected';}?>>          Random            </option>
							<option value="Scale"           <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='Scale'){ echo 'selected';}?>>           Scale             </option>
							<option value="FadeUp"          <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='FadeUp'){ echo 'selected';}?>>          Fade Up           </option>
							<option value="FadeDown"        <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='FadeDown'){ echo 'selected';}?>>        Fade Down         </option>
							<option value="FadeLeft"        <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='FadeLeft'){ echo 'selected';}?>>        Fade Left         </option>
							<option value="FadeRight"       <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='FadeRight'){ echo 'selected';}?>>       Fade Right        </option>
							<option value="SlideUp"         <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='SlideUp'){ echo 'selected';}?>>         Slide Up          </option>
							<option value="SlideDown"       <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='SlideDown'){ echo 'selected';}?>>       Slide Down        </option>
							<option value="SlideLeft"       <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='SlideLeft'){ echo 'selected';}?>>       Slide Left        </option>
							<option value="SlideRight"      <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='SlideRight'){ echo 'selected';}?>>      Slide Right       </option>
							<option value="ScrollDown"      <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='ScrollDown'){ echo 'selected';}?>>      Scroll Down       </option>
							<option value="ScrollUp"        <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='ScrollUp'){ echo 'selected';}?>>        Scroll Up         </option>
							<option value="ScrollRight"     <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='ScrollRight'){ echo 'selected';}?>>     Scroll Right      </option>
							<option value="ScrollLeft"      <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='ScrollLeft'){ echo 'selected';}?>>      Scroll Left       </option>
							<option value="Bounce"          <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='Bounce'){ echo 'selected';}?>>          Bounce            </option>
							<option value="BounceLeft"      <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='BounceLeft'){ echo 'selected';}?>>      Bounce Left       </option>
							<option value="BounceRight"     <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='BounceRight'){ echo 'selected';}?>>     Bounce Right      </option>
							<option value="BounceDown"      <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='BounceDown'){ echo 'selected';}?>>      Bounce Down       </option>
							<option value="BounceUp"        <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='BounceUp'){ echo 'selected';}?>>        Bounce Up         </option>
							<option value="HorizontalFlip"  <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='HorizontalFlip'){ echo 'selected';}?>>  Horizontal Flip   </option>
							<option value="VerticalFlip"    <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='VerticalFlip'){ echo 'selected';}?>>    Vertical Flip     </option>
							<option value="RotateDownLeft"  <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='RotateDownLeft'){ echo 'selected';}?>>  Rotate Down Left  </option>
							<option value="RotateDownRight" <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='RotateDownRight'){ echo 'selected';}?>> Rotate Down Right </option>
							<option value="RotateUpLeft"    <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='RotateUpLeft'){ echo 'selected';}?>>    Rotate Up Left    </option>
							<option value="RotateUpRight"   <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='RotateUpRight'){ echo 'selected';}?>>   Rotate Up Right   </option>
							<option value="TopZoom"         <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='TopZoom'){ echo 'selected';}?>>         Top Zoom          </option>
							<option value="BottomZoom"      <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='BottomZoom'){ echo 'selected';}?>>      Bottom Zoom       </option>
							<option value="LeftZoom"        <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='LeftZoom'){ echo 'selected';}?>>        Left Zoom         </option>
							<option value="RightZoom"       <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_CA=='RightZoom'){ echo 'selected';}?>>       Right Zoom        </option>
						</select>
					</td>
					<td>
						<select name="Rich_Web_Tabs_T_NavM" id="Rich_Web_Tabs_T_NavM" onchange="Rich_Web_Tabs_T_NavM_Ch()">
							<option value="horizontal" <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_NavM=='horizontal'){ echo 'selected';}?>> Horizontal </option>
							<option value="vertical"   <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_NavM=='vertical'){ echo 'selected';}?>>   Vertical   </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Navigation Align</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<select name="Rich_Web_Tabs_T_NavAl" id="Rich_Web_Tabs_T_NavAl">
							<option class="Rich_Web_Tabs_T_NavM_H" value="left"   <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_NavAl=='left'){ echo 'selected';}?>>   Left   </option>
							<option class="Rich_Web_Tabs_T_NavM_H" value="right"  <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_NavAl=='right'){ echo 'selected';}?>>  Right  </option>
							<option class="Rich_Web_Tabs_T_NavM_H" value="center" <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_NavAl=='center'){ echo 'selected';}?>> Center </option>
							<option class="Rich_Web_Tabs_T_NavM_V" value="top"    <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_NavAl=='top'){ echo 'selected';}?>>    Top    </option>
							<option class="Rich_Web_Tabs_T_NavM_V" value="bottom" <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_NavAl=='bottom'){ echo 'selected';}?>> Bottom </option>
						</select>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Navigation Options</td>
				</tr>
				<tr>
					<td>Main Background Color</td>
					<td><span class="Rich_Web_Tabs_T_N_S_Span">Main Border Color</span></td>
					<td><span class="Rich_Web_Tabs_T_N_S_PB_Span">Place Between (px)</span></td>
					<td>Inset Box Shadow Color</td>
				</tr>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_N_MBgC" id="Rich_Web_Tabs_T_N_MBgC" class="Rich_Web_Tab_Col alpha-color-picker" value="<?php echo $Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_N_MBgC;?>">
					</td>
					<td>
						<div class="Rich_Web_Tabs_T_N_S_Div">  
							<input type="text" name="Rich_Web_Tabs_T_N_MBC" id="Rich_Web_Tabs_T_N_MBC" class="Rich_Web_Tab_Col alpha-color-picker" value="<?php echo $Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_N_MBC;?>">
						</div>
					</td>
					<td>
						<div class="Rich_Web_Tabs_Range Rich_Web_Tabs_T_N_S_PB_Span">  
							<input class="Rich_Web_Tabs_Range__range" type="range" id="Rich_Web_Tabs_T_N_PB" name="Rich_Web_Tabs_T_N_PB" value="<?php echo $Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_N_PB;?>" min="0" max="15">
							<span class="Rich_Web_Tabs_Range__value" id="Rich_Web_Tabs_T_N_PB_Span"><?php echo $Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_N_PB;?></span>
						</div>
					</td>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_N_IBSh" id="Rich_Web_Tabs_T_N_IBSh" class="Rich_Web_Tab_Col alpha-color-picker" value="<?php echo $Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_N_IBSh;?>">
					</td>
				</tr>
				<tr>
					<td>Outset Box Shadow Color</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Icon Size (px)</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_N_OBSh" id="Rich_Web_Tabs_T_N_OBSh" class="Rich_Web_Tab_Col alpha-color-picker" value="<?php echo $Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_N_OBSh;?>">
					</td>
					<td>
						<div class="Rich_Web_Tabs_Range">  
							<input class="Rich_Web_Tabs_Range__range" type="range" id="Rich_Web_Tabs_T_N_FS" name="Rich_Web_Tabs_T_N_FS" value="<?php echo $Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_N_FS;?>" min="8" max="48">
							<span class="Rich_Web_Tabs_Range__value" id="Rich_Web_Tabs_T_N_FS_Span"><?php echo $Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_N_FS;?></span>
						</div>
					</td>
					<td>
						<select id="Rich_Web_Tabs_T_N_FF" name="Rich_Web_Tabs_T_N_FF">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]->Font_family==$Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_N_FF){ ?> 
									<option value="<?php echo $Rich_WebFontCount[$i]->Font_family;?>" selected><?php echo $Rich_WebFontCount[$i]->Font_family;?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i]->Font_family;?>"><?php echo $Rich_WebFontCount[$i]->Font_family;?></option>
								<?php }?>
							<?php }?>
						</select>
					</td>
					<td>
						<div class="Rich_Web_Tabs_Range">  
							<input class="Rich_Web_Tabs_Range__range" type="range" id="Rich_Web_Tabs_T_N_IS" name="Rich_Web_Tabs_T_N_IS" value="<?php echo $Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_N_IS;?>" min="8" max="72">
							<span class="Rich_Web_Tabs_Range__value" id="Rich_Web_Tabs_T_N_IS_Span">0</span>
						</div>
					</td>
					<td style="display:none;">
						<select name="Rich_Web_Tabs_T_N_S" id="Rich_Web_Tabs_T_N_S">
							<option value="Rich_Web_Tabs_tabs_1"  <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_N_S=='Rich_Web_Tabs_tabs_1'){ echo 'selected';}?>>  Tab - 1               </option>
							<option value="Rich_Web_Tabs_tabs_2"  <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_N_S=='Rich_Web_Tabs_tabs_2'){ echo 'selected';}?>>  Tab - 2           </option>
							<option value="Rich_Web_Tabs_tabs_3"  <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_N_S=='Rich_Web_Tabs_tabs_3'){ echo 'selected';}?>>  Tab - 3           </option>
							<option value="Rich_Web_Tabs_tabs_4"  <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_N_S=='Rich_Web_Tabs_tabs_4'){ echo 'selected';}?>>  Tab - 4		   </option>
							<option value="Rich_Web_Tabs_tabs_5"  <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_N_S=='Rich_Web_Tabs_tabs_5'){ echo 'selected';}?>>  Tab - 5          </option>
							<option value="Rich_Web_Tabs_tabs_6"  <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_N_S=='Rich_Web_Tabs_tabs_6'){ echo 'selected';}?>>  Tab - 6      </option>
							<option value="Rich_Web_Tabs_tabs_7"  <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_N_S=='Rich_Web_Tabs_tabs_7'){ echo 'selected';}?>>  Tab - 7       </option>
							<option value="Rich_Web_Tabs_tabs_8"  <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_N_S=='Rich_Web_Tabs_tabs_8'){ echo 'selected';}?>>  Tab - 8           </option>
						</select>
						<input type="hidden" name="Rich_Web_Tabs_T_N_S" id="Rich_Web_Tabs_T_N_S1" disabled="disabled">
					</td>
				</tr>
				<tr>
					<td colspan="4">SubTitle Options</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Color</td>
					<td>Hover Background Color</td>
					<td>Hover Color</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_S_BgC" id="Rich_Web_Tabs_T_S_BgC" class="Rich_Web_Tab_Col alpha-color-picker" value="<?php echo $Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_S_BgC;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_S_C" id="Rich_Web_Tabs_T_S_C" class="Rich_Web_Tab_Col alpha-color-picker" value="<?php echo $Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_S_C;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_S_HBgC" id="Rich_Web_Tabs_T_S_HBgC" class="Rich_Web_Tab_Col alpha-color-picker" value="<?php echo $Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_S_HBgC;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_S_HC" id="Rich_Web_Tabs_T_S_HC" class="Rich_Web_Tab_Col alpha-color-picker" value="<?php echo $Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_S_HC;?>">
					</td>
				</tr>
				<tr>
					<td>Current Background Color</td>
					<td>Current Color</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_S_CBgC" id="Rich_Web_Tabs_T_S_CBgC" class="Rich_Web_Tab_Col alpha-color-picker" value="<?php echo $Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_S_CBgC;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_S_CC" id="Rich_Web_Tabs_T_S_CC" class="Rich_Web_Tab_Col alpha-color-picker" value="<?php echo $Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_S_CC;?>">
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Content Options</td>
				</tr>
				<tr>
					<td>Background Type</td>
					<td>Background Color 1</td>
					<td>Background Color 2</td>
					<td>Border Width (px)</td>
				</tr>
				<tr>
					<td>
						<select name="Rich_Web_Tabs_T_C_BgT" id="Rich_Web_Tabs_T_C_BgT">
							<option value="color"       <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_C_BgT=='color'){ echo 'selected';}?>>       Color       </option>
							<option value="transparent" <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_C_BgT=='transparent'){ echo 'selected';}?>> Transparent </option>
							<option value="gradient"    <?php if($Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_C_BgT=='gradient'){ echo 'selected';}?>>    Gradient    </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_C_BgC" id="Rich_Web_Tabs_T_C_BgC" class="Rich_Web_Tab_Col alpha-color-picker" value="<?php echo $Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_C_BgC;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_C_BgC2" id="Rich_Web_Tabs_T_C_BgC2" class="Rich_Web_Tab_Col alpha-color-picker" value="<?php echo $Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_C_BgC2;?>">
					</td>
					<td>
						<div class="Rich_Web_Tabs_Range">  
							<input class="Rich_Web_Tabs_Range__range" type="range" id="Rich_Web_Tabs_T_C_BW" name="Rich_Web_Tabs_T_C_BW" value="<?php echo $Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_C_BW;?>" min="0" max="10">
							<span class="Rich_Web_Tabs_Range__value" id="Rich_Web_Tabs_T_C_BW_Span"><?php echo $Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_C_BW;?></span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td>Inset Box Shadow Color</td>
					<td>Outset Box Shadow Color</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_C_BC" id="Rich_Web_Tabs_T_C_BC" class="Rich_Web_Tab_Col alpha-color-picker" value="<?php echo $Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_C_BC;?>">
					</td>
					<td>
						<div class="Rich_Web_Tabs_Range">  
							<input class="Rich_Web_Tabs_Range__range" type="range" id="Rich_Web_Tabs_T_C_BR" name="Rich_Web_Tabs_T_C_BR" value="<?php echo $Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_C_BR;?>" min="0" max="20">
							<span class="Rich_Web_Tabs_Range__value" id="Rich_Web_Tabs_T_C_BR_Span"><?php echo $Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_C_BR;?></span>
						</div>
					</td>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_C_IBSC" id="Rich_Web_Tabs_T_C_IBSC" class="Rich_Web_Tab_Col alpha-color-picker" value="<?php echo $Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_C_IBSC;?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_C_OBSC" id="Rich_Web_Tabs_T_C_OBSC" class="Rich_Web_Tab_Col alpha-color-picker" value="<?php echo $Rich_Web_Tabs_T1[0]->Rich_Web_Tabs_T_C_OBSC;?>">
					</td>
				</tr>
			</table>
			<!-- Accordion Content -->
			<table class="Rich_Web_Tabs_Content_Table3_Theme Rich_Web_Tabs_Content_Table3_Theme_2">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Width (%)</td>
					<td>Align</td>
					<td>Content Animation</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="Rich_Web_Tabs_Range">  
							<input class="Rich_Web_Tabs_Range__range" type="range" id="Rich_Web_Tabs_T_W_ACD" name="Rich_Web_Tabs_T_W_ACD" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_W?>" min="0" max="100">
							<span class="Rich_Web_Tabs_Range__value" id="Rich_Web_Tabs_T_W_Span_ACD">0</span>
						</div>
					</td>
					<td>
						<select name="Rich_Web_Tabs_T_Al_ACD" id="Rich_Web_Tabs_T_Al_ACD">
							<option value="left"   <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_Al=='left'){ echo 'selected';}?>>   Left   </option>
							<option value="right"  <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_Al=='right'){ echo 'selected';}?>>  Right  </option>
							<option value="center" <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_Al=='center'){ echo 'selected';}?>> Center </option>
						</select>
					</td>
					<td>
						<select name="Rich_Web_Tabs_T_CA_ACD" id="Rich_Web_Tabs_T_CA_ACD">
							<option value="none"      <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_CA=='none'){ echo 'selected';}?>>      None      </option>
							<option value="bounce"    <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_CA=='bounce'){ echo 'selected';}?>>    Bounce    </option>
							<option value="clip"      <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_CA=='clip'){ echo 'selected';}?>>      Clip      </option>
							<option value="drop"      <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_CA=='drop'){ echo 'selected';}?>>      Drop      </option>
							<option value="fade"      <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_CA=='fade'){ echo 'selected';}?>>      Fade      </option>
							<option value="highlight" <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_CA=='highlight'){ echo 'selected';}?>> Highlight </option>
							<option value="pulsate"   <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_CA=='pulsate'){ echo 'selected';}?>>   Pulsate   </option>
							<option value="shake"     <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_CA=='shake'){ echo 'selected';}?>>     Shake     </option>
							<option value="size"      <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_CA=='size'){ echo 'selected';}?>>      Size      </option>
							<option value="slide"     <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_CA=='slide'){ echo 'selected';}?>>     Slide     </option>
						</select>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Navigation Options</td>
				</tr>
				<tr>
					<!-- <td>Style</td> -->
					<td>Place Between Navigation (px)</td>
					<td>Place Between Navigation And Content (px)</td>
					<td><span class="Rich_Web_Tabs_acd_sBg" style="display: none;">Style Background</span></td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td style="display:none;">
						<select name="Rich_Web_Tabs_T_N_S_ACD" id="Rich_Web_Tabs_T_N_S_ACD">
							<option value="Rich_Web_Tabs_acd_1"    <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_N_S=='Rich_Web_Tabs_acd_1'){ echo 'selected';}?>>    Accordion 1  </option>
							<option value="Rich_Web_Tabs_acd_2"    <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_N_S=='Rich_Web_Tabs_acd_2'){ echo 'selected';}?>>    Accordion 2  </option>
							<option value="Rich_Web_Tabs_acd_3"    <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_N_S=='Rich_Web_Tabs_acd_3'){ echo 'selected';}?>>    Accordion 3  </option>
							<option value="Rich_Web_Tabs_acd_4"    <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_N_S=='Rich_Web_Tabs_acd_4'){ echo 'selected';}?>>    Accordion 4  </option>
							<option value="Rich_Web_Tabs_acd_5"    <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_N_S=='Rich_Web_Tabs_acd_5'){ echo 'selected';}?>>    Accordion 5  </option>
							<option value="Rich_Web_Tabs_acd_6"    <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_N_S=='Rich_Web_Tabs_acd_6'){ echo 'selected';}?>>    Accordion 6  </option>
							<option value="Rich_Web_Tabs_acd_7"    <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_N_S=='Rich_Web_Tabs_acd_7'){ echo 'selected';}?>>    Accordion 7  </option>
							<option value="Rich_Web_Tabs_acd_8"    <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_N_S=='Rich_Web_Tabs_acd_8'){ echo 'selected';}?>>    Accordion 8  </option>
						</select>
						<input type="hidden" name="Rich_Web_Tabs_T_N_S_ACD" id="Rich_Web_Tabs_T_N_S_ACD1" disabled="disabled">
					</td>
					<td>
						<div class="Rich_Web_Tabs_Range">  
							<input class="Rich_Web_Tabs_Range__range" type="range" id="Rich_Web_Tabs_T_N_PB_ACD" name="Rich_Web_Tabs_T_N_PB_ACD" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_N_PB?>" min="0" max="35">
							<span class="Rich_Web_Tabs_Range__value" id="Rich_Web_Tabs_T_N_PB_Span_ACD">0</span>
						</div>
					</td>
					<td>
						<div class="Rich_Web_Tabs_Range">  
							<input class="Rich_Web_Tabs_Range__range" type="range" id="Rich_Web_Tabs_T_N_PB_2_ACD" name="Rich_Web_Tabs_T_N_PB_2_ACD" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_01?>" min="0" max="35">
							<span class="Rich_Web_Tabs_Range__value" id="Rich_Web_Tabs_T_N_PB_2s_Span_ACD">0</span>
						</div>
					</td>
					<td>
						<div class="Rich_Web_Tabs_acd_sBg" style="display: none;">
							<input type="text" name="Rich_Web_Tabs_T_Stle_Col_ACD" id="Rich_Web_Tabs_T_Stle_Col_ACD" class="Rich_Web_Tab_Col alpha-color-picker" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_N_MBC?>">
						</div>
					</td>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_S_BgC_ACD" id="Rich_Web_Tabs_T_S_BgC_ACD" class="Rich_Web_Tab_Col alpha-color-picker" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_S_BgC?>">
					</td>
				</tr>
				<tr>
					<td>Hover Background Color</td>
					<td>Current Background Color</td>
					<td>Background Style</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_S_HBgC_ACD" id="Rich_Web_Tabs_T_S_HBgC_ACD" class="Rich_Web_Tab_Col alpha-color-picker" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_S_HBgC?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_N_MBgC_ACD" id="Rich_Web_Tabs_T_N_MBgC_ACD" class="Rich_Web_Tab_Col alpha-color-picker" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_N_MBgC?>">
					</td>
					<td>
						<select name="Rich_Web_Tabs_T_N_SBG_ACD" id="Rich_Web_Tabs_T_N_SBG_ACD">
							<option value="style_bg_none" <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_02=='style_bg_none'){ echo 'selected';}?>> None    </option>
							<option value="style_bg_1"    <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_02=='style_bg_1'){ echo 'selected';}?>>    Style 1 </option>
							<option value="style_bg_2"    <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_02=='style_bg_2'){ echo 'selected';}?>>    Style 2 </option>
							<option value="style_bg_3"    <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_02=='style_bg_3'){ echo 'selected';}?>>    Style 3 </option>
							<option value="style_bg_4"    <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_02=='style_bg_4'){ echo 'selected';}?>>    Style 4 </option>
							<option value="style_bg_5"    <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_02=='style_bg_5'){ echo 'selected';}?>>    Style 5 </option>
							<option value="style_bg_6"    <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_02=='style_bg_6'){ echo 'selected';}?>>    Style 6 </option>
							<option value="style_bg_7"    <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_02=='style_bg_7'){ echo 'selected';}?>>    Style 7 </option>
							<option value="style_bg_8"    <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_02=='style_bg_8'){ echo 'selected';}?>>    Style 8 </option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="4">Border Options</td>
				</tr>
				<tr>
					<td>Border Color</td>
					<td>Hover Border Color</td>
					<td>Current Border Color</td>
					<td>Border Style</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_Acd_border_col" id="Rich_Web_Acd_border_col" class="Rich_Web_Tab_Col alpha-color-picker" value="<?=$Rich_Web_Tabs_T2_ACD[0]->Rich_Web_Acd_border_col?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_Acd_border_col_hover" id="Rich_Web_Acd_border_col_hover" class="Rich_Web_Tab_Col alpha-color-picker" value="<?=$Rich_Web_Tabs_T2_ACD[0]->Rich_Web_Acd_border_col_hover?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_Acd_border_col_active" id="Rich_Web_Acd_border_col_active" class="Rich_Web_Tab_Col alpha-color-picker" value="<?=$Rich_Web_Tabs_T2_ACD[0]->Rich_Web_Acd_border_col_active?>">
					</td>
					<td>
						<select name="Rich_Web_Acd_border_style" id="Rich_Web_Acd_border_style">
							<option value="none"   <?php if($Rich_Web_Tabs_T2_ACD[0]->Rich_Web_Acd_border_style=='none'){ echo 'selected';}?>>   None   </option>
							<option value="solid"  <?php if($Rich_Web_Tabs_T2_ACD[0]->Rich_Web_Acd_border_style=='solid'){ echo 'selected';}?>>  Solid  </option>
							<option value="dotted" <?php if($Rich_Web_Tabs_T2_ACD[0]->Rich_Web_Acd_border_style=='dotted'){ echo 'selected';}?>> Dotted </option>
							<option value="dashed" <?php if($Rich_Web_Tabs_T2_ACD[0]->Rich_Web_Acd_border_style=='dashed'){ echo 'selected';}?>> Dashed </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Box Shadow Color</td>
					<td>Box Shadow Hover Color</td>
					<td>Box Shadow Current Color</td>
				</tr>
				<tr>
					<td>
						<div class="Rich_Web_Tabs_Range">  
							<input class="Rich_Web_Tabs_Range__range" type="range" id="Rich_Web_Acd_border_width" name="Rich_Web_Acd_border_width" value="<?=$Rich_Web_Tabs_T2_ACD[0]->Rich_Web_Acd_border_width?>" min="0" max="10">
							<span class="Rich_Web_Tabs_Range__value" id="Rich_Web_Acd_border_width_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_N_IBSh_ACD" id="Rich_Web_Tabs_T_N_IBSh_ACD" class="Rich_Web_Tab_Col alpha-color-picker" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_N_IBSh?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_N_OBSh_ACD" id="Rich_Web_Tabs_T_N_OBSh_ACD" class="Rich_Web_Tab_Col alpha-color-picker" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_N_OBSh?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_Tabs_bsh_act_col_ACD" id="Rich_Web_Tabs_bsh_act_col_ACD" class="Rich_Web_Tab_Col alpha-color-picker" value="<?=$Rich_Web_Tabs_T2_ACD[0]->Rich_Web_Tabs_T_03?>">
					</td>
				</tr>
				<tr>
					<td>Box Shadow Style</td>
					<td><span class="Rich_Web_Acd_border_radius">Border Radius</span></td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<select name="Rich_Web_Acd_border_bsh_style" id="Rich_Web_Acd_border_bsh_style">
							<option value="none"         <?php if($Rich_Web_Tabs_T2_ACD[0]->Rich_Web_Acd_border_bsh_style=='none'){ echo 'selected';}?>>         None     </option>
							<option value="style_bsh_15" <?php if($Rich_Web_Tabs_T2_ACD[0]->Rich_Web_Acd_border_bsh_style=='style_bsh_15'){ echo 'selected';}?>> Style 1  </option>
							<option value="style_bsh_1"  <?php if($Rich_Web_Tabs_T2_ACD[0]->Rich_Web_Acd_border_bsh_style=='style_bsh_1'){ echo 'selected';}?>>  Style 2  </option>
							<option value="style_bsh_2"  <?php if($Rich_Web_Tabs_T2_ACD[0]->Rich_Web_Acd_border_bsh_style=='style_bsh_2'){ echo 'selected';}?>>  Style 3  </option>
							<option value="style_bsh_3"  <?php if($Rich_Web_Tabs_T2_ACD[0]->Rich_Web_Acd_border_bsh_style=='style_bsh_3'){ echo 'selected';}?>>  Style 4  </option>
							<option value="style_bsh_4"  <?php if($Rich_Web_Tabs_T2_ACD[0]->Rich_Web_Acd_border_bsh_style=='style_bsh_4'){ echo 'selected';}?>>  Style 5  </option>
							<option value="style_bsh_5"  <?php if($Rich_Web_Tabs_T2_ACD[0]->Rich_Web_Acd_border_bsh_style=='style_bsh_5'){ echo 'selected';}?>>  Style 6  </option>
							<option value="style_bsh_6"  <?php if($Rich_Web_Tabs_T2_ACD[0]->Rich_Web_Acd_border_bsh_style=='style_bsh_6'){ echo 'selected';}?>>  Style 7  </option>
							<option value="style_bsh_7"  <?php if($Rich_Web_Tabs_T2_ACD[0]->Rich_Web_Acd_border_bsh_style=='style_bsh_7'){ echo 'selected';}?>>  Style 8  </option>
							<option value="style_bsh_8"  <?php if($Rich_Web_Tabs_T2_ACD[0]->Rich_Web_Acd_border_bsh_style=='style_bsh_8'){ echo 'selected';}?>>  Style 9  </option>
							<option value="style_bsh_9"  <?php if($Rich_Web_Tabs_T2_ACD[0]->Rich_Web_Acd_border_bsh_style=='style_bsh_9'){ echo 'selected';}?>>  Style 10 </option>
							<option value="style_bsh_10" <?php if($Rich_Web_Tabs_T2_ACD[0]->Rich_Web_Acd_border_bsh_style=='style_bsh_10'){ echo 'selected';}?>> Style 11 </option>
							<option value="style_bsh_11" <?php if($Rich_Web_Tabs_T2_ACD[0]->Rich_Web_Acd_border_bsh_style=='style_bsh_11'){ echo 'selected';}?>> Style 12 </option>
							<option value="style_bsh_12" <?php if($Rich_Web_Tabs_T2_ACD[0]->Rich_Web_Acd_border_bsh_style=='style_bsh_12'){ echo 'selected';}?>> Style 13 </option>
							<option value="style_bsh_13" <?php if($Rich_Web_Tabs_T2_ACD[0]->Rich_Web_Acd_border_bsh_style=='style_bsh_13'){ echo 'selected';}?>> Style 14 </option>
							<option value="style_bsh_14" <?php if($Rich_Web_Tabs_T2_ACD[0]->Rich_Web_Acd_border_bsh_style=='style_bsh_14'){ echo 'selected';}?>> Style 15 </option>
						</select>
					</td>
					<td>
						<div class="Rich_Web_Tabs_Range Rich_Web_Acd_border_radius">  
							<input class="Rich_Web_Tabs_Range__range" type="range" id="Rich_Web_Acd_border_radius" name="Rich_Web_Acd_border_radius" value="<?=$Rich_Web_Tabs_T2_ACD[0]->Rich_Web_Tabs_T_01?>" min="0" max="30">
							<span class="Rich_Web_Tabs_Range__value" id="Rich_Web_Acd_border_radius_Span"></span>
						</div>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Title Options</td>
				</tr>
				<tr>
					<td>Title Color</td>
					<td>Hover Title Color</td>
					<td>Current Title Color</td>
					<td>Title Style</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_S_C_ACD" id="Rich_Web_Tabs_T_S_C_ACD" class="Rich_Web_Tab_Col alpha-color-picker" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_S_C?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_S_HC_ACD" id="Rich_Web_Tabs_T_S_HC_ACD" class="Rich_Web_Tab_Col alpha-color-picker" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_S_HC?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_S_AC_ACD" id="Rich_Web_Tabs_T_S_AC_ACD" class="Rich_Web_Tab_Col alpha-color-picker" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_03?>">
					</td>
					<td>
						<select name="Rich_Web_Tabs_T_AlTit_style_ACD" id="Rich_Web_Tabs_T_AlTit_style_ACD">
							<option value="style_ti_none" <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_04=='style_ti_none'){ echo 'selected';}?>> None    </option>
							<option value="style_ti_1"    <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_04=='style_ti_1'){ echo 'selected';}?>>    Style 1 </option>
							<option value="style_ti_2"    <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_04=='style_ti_2'){ echo 'selected';}?>>    Style 2 </option>
							<option value="style_ti_3"    <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_04=='style_ti_3'){ echo 'selected';}?>>    Style 3 </option>
							<option value="style_ti_4"    <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_04=='style_ti_4'){ echo 'selected';}?>>    Style 4 </option>
							<option value="style_ti_5"    <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_04=='style_ti_5'){ echo 'selected';}?>>    Style 5 </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Title Font Family</td>
					<td>Title Size (px)</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<select id="Rich_Web_Tabs_T_N_FF_ACD" name="Rich_Web_Tabs_T_N_FF_ACD">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]->Font_family==$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_N_FF_ACD){ ?> 
									<option value="<?php echo $Rich_WebFontCount[$i]->Font_family;?>" selected><?php echo $Rich_WebFontCount[$i]->Font_family;?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i]->Font_family;?>"><?php echo $Rich_WebFontCount[$i]->Font_family;?></option>
								<?php }?>
							<?php }?>
						</select>
					</td>
					<td>
						<div class="Rich_Web_Tabs_Range">  
							<input class="Rich_Web_Tabs_Range__range" type="range" id="Rich_Web_Tabs_T_N_Title_S_2_ACD" name="Rich_Web_Tabs_T_N_Title_S_2_ACD" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_NavM?>" min="8" max="50">
							<span class="Rich_Web_Tabs_Range__value" id="Rich_Web_Tabs_T_N_Title_S_2_ACD_Span">0</span>
						</div>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Icon Options</td>
				</tr>
				<tr>
					<td>Left Icon Color</td>
					<td>Hover Left Icon Color</td>
					<td>Current Left Icon Color</td>
					<td>Left Icon Size (px)</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_S_CC_ACD" id="Rich_Web_Tabs_T_S_CC_ACD" class="Rich_Web_Tab_Col alpha-color-picker" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_S_CC?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_S_CBgC_ACD" id="Rich_Web_Tabs_T_S_CBgC_ACD" class="Rich_Web_Tab_Col alpha-color-picker" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_S_CBgC?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_N_IBSh_active_ACD" id="Rich_Web_Tabs_T_N_IBSh_active_ACD" class="Rich_Web_Tab_Col alpha-color-picker" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_05?>">
					</td>
					<td>
						<div class="Rich_Web_Tabs_Range">  
							<input class="Rich_Web_Tabs_Range__range" type="range" id="Rich_Web_Tabs_T_N_IS_ACD" name="Rich_Web_Tabs_T_N_IS_ACD" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_06?>" min="8" max="50">
							<span class="Rich_Web_Tabs_Range__value" id="Rich_Web_Tabs_T_N_IS_ACD_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Right Icon Color</td>
					<td>Hover Right Icon Color</td>
					<td>Current Right Icon Color</td>
					<td>Right Icon Size (px)</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_S_CC_2_ACD" id="Rich_Web_Tabs_T_S_CC_2_ACD" class="Rich_Web_Tab_Col alpha-color-picker" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_07?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_S_CBgC_2_ACD" id="Rich_Web_Tabs_T_S_CBgC_2_ACD" class="Rich_Web_Tab_Col alpha-color-picker" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_08?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_N_IBSh_active_2_ACD" id="Rich_Web_Tabs_T_N_IBSh_active_2_ACD" class="Rich_Web_Tab_Col alpha-color-picker" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_09?>">
					</td>
					<td>
						<div class="Rich_Web_Tabs_Range">  
							<input class="Rich_Web_Tabs_Range__range" type="range" id="Rich_Web_Tabs_T_N_IS_2_ACD" name="Rich_Web_Tabs_T_N_IS_2_ACD" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_10?>" min="8" max="50">
							<span class="Rich_Web_Tabs_Range__value" id="Rich_Web_Tabs_T_N_IS_ACD_2_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Right Icon Type</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<select name="Rich_Web_Tabs_T_Icon_style_ACD" id="Rich_Web_Tabs_T_Icon_style_ACD">
							<option value="none"            <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_N_FS=='none'){ echo 'selected';}?>>            None    </option>
							<option value="sort-desc"       <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_N_FS=='sort-desc'){ echo 'selected';}?>>       Style 1 </option>
							<option value="circle"          <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_N_FS=='circle'){ echo 'selected';}?>>          Style 2 </option>
							<option value="angle-double-up" <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_N_FS=='angle-double-up'){ echo 'selected';}?>> Style 3 </option>
							<option value="arrow-circle-up" <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_N_FS=='arrow-circle-up'){ echo 'selected';}?>> Style 4 </option>
							<option value="angle-up"        <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_N_FS=='angle-up'){ echo 'selected';}?>>        Style 5 </option>
							<option value="plus"            <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_N_FS=='plus'){ echo 'selected';}?>>            Style 6 </option>
						</select>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Content Options</td>
				</tr>
				<tr>
					<td>Background Type</td>
					<td>Background Color 1</td>
					<td>Background Color 2</td>
					<td><div class="Rich_Web_Tabs_Cont_BR_Width_ACD">Border Width (px)</div></td>
				</tr>
				<tr>
					<td>
						<select name="Rich_Web_Tabs_T_C_BgT_ACD" id="Rich_Web_Tabs_T_C_BgT_ACD">
							<option value="color"        <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_C_BgT=='color'){ echo 'selected';}?>>       Color                    </option>
							<option value="transparent"  <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_C_BgT=='transparent'){ echo 'selected';}?>> Transparent              </option>
							<option value="gradient"     <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_C_BgT=='gradient'){ echo 'selected';}?>>    Gradient (Left To Right) </option>
							<option value="gradient_top" <?php if($Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_C_BgT=='gradient'){ echo 'selected';}?>>    Gradient (Top To Bottom) </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_C_BgC_ACD" id="Rich_Web_Tabs_T_C_BgC_ACD" class="Rich_Web_Tab_Col alpha-color-picker" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_C_BgC?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_C_BgC2_ACD" id="Rich_Web_Tabs_T_C_BgC2_ACD" class="Rich_Web_Tab_Col alpha-color-picker" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_C_BgC2?>">
					</td>
					<td>
						<div class="Rich_Web_Tabs_Range Rich_Web_Tabs_Cont_BR_Width_ACD">  
							<input class="Rich_Web_Tabs_Range__range" type="range" id="Rich_Web_Tabs_T_C_BW_ACD" name="Rich_Web_Tabs_T_C_BW_ACD" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_C_BW?>" min="0" max="10">
							<span class="Rich_Web_Tabs_Range__value" id="Rich_Web_Tabs_T_C_BW_Span_ACD">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td><div class="Rich_Web_Tabs_Cont_BR_color_ACD">Border Color</div></td>
					<td><div class="Rich_Web_Tabs_Cont_BR_ACD">Border Radius (px)</div></td>
					<td>Inset Box Shadow Color</td>
					<td>Outset Box Shadow Color</td>
				</tr>
				<tr>
					<td>
						<div class="Rich_Web_Tabs_Cont_BR_color_ACD">
							<input type="text" name="Rich_Web_Tabs_T_C_BC_ACD" id="Rich_Web_Tabs_T_C_BC_ACD" class="Rich_Web_Tab_Col alpha-color-picker" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_C_BC?>">
						</div>
					</td>
					<td>
						<div class="Rich_Web_Tabs_Range Rich_Web_Tabs_Cont_BR_ACD">  
							<input class="Rich_Web_Tabs_Range__range" type="range" id="Rich_Web_Tabs_T_C_BR_ACD" name="Rich_Web_Tabs_T_C_BR_ACD" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_C_BR?>" min="0" max="20">
							<span class="Rich_Web_Tabs_Range__value" id="Rich_Web_Tabs_T_C_BR_Span_ACD">0</span>
						</div>
					</td>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_C_IBSC_ACD" id="Rich_Web_Tabs_T_C_IBSC_ACD" class="Rich_Web_Tab_Col alpha-color-picker" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_C_IBSC?>">
					</td>
					<td>
						<input type="text" name="Rich_Web_Tabs_T_C_OBSC_ACD" id="Rich_Web_Tabs_T_C_OBSC_ACD" class="Rich_Web_Tab_Col alpha-color-picker" value="<?=$Rich_Web_Tabs_T1_ACD[0]->Rich_Web_Tabs_T_C_OBSC?>">
					</td>
				</tr>
			</table>
		</div>
	</div>
</form>