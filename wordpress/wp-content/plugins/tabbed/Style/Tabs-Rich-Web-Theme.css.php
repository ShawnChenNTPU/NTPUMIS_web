<?php
	if(!defined('ABSPATH')) exit;
	if(!current_user_can('manage_options'))
	{
		die('Access Denied');
	}
?>
<style type="text/css">
	.Rich_Web_Tabs_Add_Theme { position: absolute; right: 10px; bottom: 10px; padding: 5px 10px; background: #47bde5; cursor: pointer; border: none; box-shadow: 0px 0px 2px #47bde5; color: #fff; text-shadow:1px 1px 1px #000000; width: initial; height:30px; transition:all 0.3s linear; }
	.Rich_Web_Tabs_AddAnim_Theme { width:0px !important; padding:0px !important; transition:all 0s linear; }
	.Rich_Web_Tabs_Save_Theme,.Rich_Web_Tabs_Update_Theme,.Rich_Web_Tabs_Cancel_Theme { position: absolute; right: 10px; bottom: 10px; padding: 0px; background: #47bde5; cursor: pointer; border: none; box-shadow: 0px 0px 2px #47bde5; color: #fff; text-shadow:1px 1px 1px #000000; width:0px; height:30px; transition:all 0.3s linear; }
	.Rich_Web_Tabs_SaveAnim_Theme { padding: 5px 10px !important; width: initial !important; right:80px !important; transition:all 0s linear; } 
	.Rich_Web_Tabs_Save_Theme:hover,.Rich_Web_Tabs_Cancel_Theme:hover,.Rich_Web_Tabs_Update_Theme:hover,.Rich_Web_Tabs_Add_Theme:hover { color: #fff; background:#30a9d1; box-shadow: 0px 0px 2px #30a9d1; }
	.Rich_Web_Tabs_CancelAnim_Theme { padding: 5px 10px !important; width: initial !important; transition:all 0s linear; }
	.Rich_Web_Tabs_Content_Theme { position: relative; width: 99%; }
	.Rich_Web_Tabs_Content_Data1_Theme { position:absolute; top:0%; left:0%; width:100% !important; margin-top:10px; z-index:1; }
	.Rich_Web_Tabs_Content_Table_Theme { border-collapse: separate; border-spacing: 1px; width: 100%; background-color: #fff; text-align: center; text-shadow:1px 1px 1px #000000; padding: 1px; color: #ffffff; }
	.Rich_Web_Tabs_Content_Table_Tr_Theme { background:#30a9d1; }
	.Rich_Web_Tabs_Content_Table_Theme td:nth-child(1) { width:10%; }
	.Rich_Web_Tabs_Content_Table_Theme td:nth-child(2) { width:60%; }
	.Rich_Web_Tabs_Content_Table_Theme td:nth-child(3) { width:10%; }
	.Rich_Web_Tabs_Content_Table_Theme td:nth-child(4) { width:10%; }
	.Rich_Web_Tabs_Content_Table_Theme td:nth-child(5) { width:10%; }
	.Rich_Web_Tabs_Content_Table2_Theme { border-collapse: separate; border-spacing: 1px; width: 100%; background-color: #fff; margin-top:10px; text-align: center; text-shadow:0px 0px 0px #000000; padding: 1px; color: #34383c; }
	.Rich_Web_Tabs_Content_Table_Tr2_Theme { background:#f1f1f1; }
	.Rich_Web_Tabs_Content_Table_Tr2_Theme:nth-child(even) { background:#ffffff; }
	.Rich_Web_Tabs_Content_Table_Tr2_Theme:hover { background-color: #e9e9e9; }
	.Rich_Web_Tabs_Content_Table2_Theme td:nth-child(1) { width:10%; }
	.Rich_Web_Tabs_Content_Table2_Theme td:nth-child(2) { width:60%; }
	.Rich_Web_Tabs_Content_Table2_Theme td:nth-child(3) { width:10%; cursor:pointer; }
	.Rich_Web_Tabs_Content_Table2_Theme td:nth-child(4) { width:10%; cursor:pointer; }
	.Rich_Web_Tabs_Content_Table2_Theme td:nth-child(5) { width:10%; cursor:pointer; }
  .Rich_Web_Tabs_Edit {  color: #20a000; }
 	.Rich_Web_Tabs_Edit_eye { font-size: 18px; color: yellow; }
  .Rich_Web_Tabs_Del{ color: #ef0a0a; }
	.Rich_Web_Tabs_Copy { color: #02b424; }
	.Rich_Web_Tabs_Content_Data2_Theme { position:absolute; top:0%; left:0%; width:100% !important; margin-top:10px; z-index:1; display:none; }
	.Rich_Web_Tabs_Content_Table3_Theme, .Rich_Web_Tabs_Content_Table3_Theme1 { position:relative; width: 100%; padding: 1px; background-color: #fff; text-align: center; color: #000; font-size: 12px; margin-bottom:15px; }
	.Rich_Web_Tabs_Content_Table3_Theme tr, .Rich_Web_Tabs_Content_Table3_Theme1 tr { background:rgba(255,255,255,.9); height: 35px; }
	.Rich_Web_Tabs_Content_Table3_Theme tr:nth-child(even), .Rich_Web_Tabs_Content_Table3_Theme1 tr:nth-child(even) { background: #f1f1f1; }
	.Rich_Web_Tabs_Content_Table3_Theme tr td { width: 25%; cursor: default; }
	.Rich_Web_Tabs_Content_Table3_Theme input[type=text], .Rich_Web_Tabs_Content_Table3_Theme select, .Rich_Web_Tabs_Content_Table3_Theme1 input[type=text], .Rich_Web_Tabs_Content_Table3_Theme1 select { width: 70%; }
	.Rich_Web_Tabs_Content_Table3_Theme1 tr td { width: 50%; cursor: default; }
	.Rich_Web_Tabs_T_Pro { font-weight: 900; color: #ff0000; font-size: 14px; margin-left: 5px; cursor: default; }
	.alpha-color-picker-wrap {margin: 3px auto !important;}
  .RichWeb_Tabs_Themes_Buttons a{position: absolute;right: 125px;bottom: 5px;}
  .wp-picker-holder{position:absolute !important;width:200px !important;z-index:9999999 !important;}
	@keyframes slide {
  0% {
    background-position: 0 0;
  }
  100% {
    background-position: -120px 60px;
  }
}
#RichWeb_Tabs_ProVersion_Info{position: absolute;right: 10px;bottom: 5px;display:none;}
.RW_Tabs_ProVersion_reversed {display: inline-block;padding: 0.3em;padding-left: 0.3em;margin-left: 0.8em;position: relative;text-align: center;vertical-align: middle;line-height: 1;color: #fff;font-size: 15px;background-color:#ef5350;}
.RW_Tabs_ProVersion_reversed:before, .RW_Tabs_ProVersion_reversed:after {content: '';width: 0;height: 0;right: -0.8em;position: absolute;top: 0;border-top: 0.8em solid #ef5350;}
.RW_Tabs_ProVersion_reversed:after {top: auto;bottom: 0;border-top: none;border-bottom: 0.8em solid #ef5350;}
.RW_Tabs_ProVersion_reversed_Right:before, .RW_Tabs_ProVersion_reversed_Right:after{border-right: 0.8em solid transparent;right: -0.8em;}
.RW_Tabs_ProVersion_reversed_Right{width: 17px;border-radius: 5px 0px 0px 5px;animation: tilt 2s infinite;}
@keyframes tilt {
  0% {
    left: 0%;
  }
  50% {
    left: 9px;
  }
  100% {
    left: 0px;
  }
}
.RW_Tabs_ProVersion_reversed_Left{margin-left:15px;border-radius: 0px 5px 5px 0px;}
.RW_Tabs_ProVersion_reversed_Left:before, .RW_Tabs_ProVersion_reversed_Left:after { content: ''; width: 0; height: 0; border-left: 0.8em solid transparent; left: -0.8em; position: absolute;}
.RW_Tabs_ProVersion_reversed_Left:after {top: auto;bottom: 0;border-top: 0.8em solid #ef5350;border-bottom: none;}
.RW_Tabs_ProVersion_reversed_Left:before {bottom: auto;top:0;border-bottom: 0.8em solid #ef5350;border-top: none;}
.bgAnimation{background-color:#ef5350;background-image: linear-gradient(45deg,#e57373 25%,transparent 25%,transparent 75%,#e57373 75%,#e57373),linear-gradient(-45deg,#e57373 25%,transparent 25%,transparent 75%,#e57373 75%,#e57373);background-size: 60px 60px;animation: slide 4s infinite linear;}
.tab-icon2 > .tab_icon:nth-child(1){background-color: #f2cf07;background-image: linear-gradient(315deg, #f2cf07 0%, #55d284 74%);}
.tab-icon2 > .tab_icon:nth-child(2){background-color: #f5d020;background-image: linear-gradient(315deg, #f5d020 0%, #f53803 74%);}
.tab-icon2 > .tab_icon:nth-child(3){background-color: #ff7878;background-image: linear-gradient(315deg, #ff7878 0%, #ff0000 74%);}
.tab_icon > i{color :#FFFFFF;}
.tab_icon_copying{background-color: #63a4ff;background-image: linear-gradient(315deg, #63a4ff 0%, #83eaf1 74%);border: none;color: white;padding: 7px 12px;cursor: pointer;font-size: 15px;border-radius: 7px;}
</style>