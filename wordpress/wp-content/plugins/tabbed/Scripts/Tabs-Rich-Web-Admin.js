function Rich_Web_Tabs_Added(Tabs_ID)
{
	jQuery('.Rich_Web_Tabs_Content_Data1').css('display','none');
	jQuery('.RW_Tabs_Div_Buttons a').css('display','none');
	jQuery('.Rich_Web_Tabs_Add').addClass('Rich_Web_Tabs_AddAnim').css('display','none');
	jQuery('.Rich_Web_Tabs_Content_Data2').css('display','block');
	jQuery('.Rich_Web_Tabs_Save').addClass('Rich_Web_Tabs_SaveAnim');
	jQuery('.Rich_Web_Tabs_Cancel').addClass('Rich_Web_Tabs_CancelAnim');
	jQuery('.Rich_Web_Tabs_ShortID').html('[Rich_Web_Tabs id="'+Tabs_ID+'"]');
	jQuery('.Rich_Web_Tabs_ShortID_1').html('&lt;?php echo do_shortcode(&apos;[Rich_Web_Tabs id="'+Tabs_ID+'"]&apos;);?&gt;');
	Rich_Web_Tabs_Tinymce();	
}
function Rich_Web_Tabs_Tinymce()
{
	tinymce.init({
		selector: 'textarea',
		menubar: false,
		statusbar: false,
		height: 250,
		plugins: [
		    'advlist autolink lists link image charmap print preview hr',
		    'searchreplace wordcount code media ',
		    'insertdatetime media save table contextmenu directionality',
		    'paste textcolor colorpicker textpattern imagetools codesample'
		],
		toolbar1: "newdocument | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | formatselect fontselect fontsizeselect",
		toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink image media code | insertdatetime preview | forecolor backcolor",
		toolbar3: "table | hr | subscript superscript | charmap | print | codesample ",
		fontsize_formats: '8px 10px 12px 14px 16px 18px 20px 22px 24px 26px 28px 30px 32px 34px 36px 38px 40px 42px 44px 46px 48px',
		font_formats: 'Abadi MT Condensed Light = abadi mt condensed light; Aharoni = aharoni; Aldhabi = aldhabi; Andalus = andalus; Angsana New = angsana new; AngsanaUPC = angsanaupc; Aparajita = aparajita; Arabic Typesetting = arabic typesetting; Arial = arial; Arial Black = arial black; Batang = batang; BatangChe = batangche; Browallia New = browallia new; BrowalliaUPC = browalliaupc; Calibri = calibri; Calibri Light = calibri light; Calisto MT = calisto mt; Cambria = cambria; Candara = candara; Century Gothic = century gothic; Comic Sans MS = comic sans ms; Consolas = consolas; Constantia = constantia; Copperplate Gothic = copperplate gothic; Copperplate Gothic Light = copperplate gothic light; Corbel = corbel; Cordia New = cordia new; CordiaUPC = cordiaupc; Courier New = courier new; DaunPenh = daunpenh; David = david; DFKai-SB = dfkai-sb; DilleniaUPC = dilleniaupc; DokChampa = dokchampa; Dotum = dotum; DotumChe = dotumche; Ebrima = ebrima; Estrangelo Edessa = estrangelo edessa; EucrosiaUPC = eucrosiaupc; Euphemia = euphemia; FangSong = fangsong; Franklin Gothic Medium = franklin gothic medium; FrankRuehl = frankruehl; FreesiaUPC = freesiaupc; Gabriola = gabriola; Gadugi = gadugi; Gautami = gautami; Georgia = georgia; Gisha = gisha; Gulim  = gulim; GulimChe = gulimche; Gungsuh = gungsuh; GungsuhChe = gungsuhche; Impact = impact; IrisUPC = irisupc; Iskoola Pota = iskoola pota; JasmineUPC = jasmineupc; KaiTi = kaiti; Kalinga = kalinga; Kartika = kartika; Khmer UI = khmer ui; KodchiangUPC = kodchiangupc; Kokila = kokila; Lao UI = lao ui; Latha = latha; Leelawadee = leelawadee; Levenim MT = levenim mt; LilyUPC = lilyupc; Lucida Console = lucida console; Lucida Handwriting Italic = lucida handwriting italic; Lucida Sans Unicode = lucida sans unicode; Malgun Gothic = malgun gothic; Mangal = mangal; Manny ITC = manny itc; Marlett = marlett; Meiryo = meiryo; Meiryo UI = meiryo ui; Microsoft Himalaya = microsoft himalaya; Microsoft JhengHei = microsoft jhenghei; Microsoft JhengHei UI = microsoft jhenghei ui; Microsoft New Tai Lue = microsoft new tai lue; Microsoft PhagsPa = microsoft phagspa; Microsoft Sans Serif = microsoft sans serif; Microsoft Tai Le = microsoft tai le; Microsoft Uighur = microsoft uighur; Microsoft YaHei = microsoft yahei; Microsoft YaHei UI = microsoft yahei ui; Microsoft Yi Baiti = microsoft yi baiti; MingLiU_HKSCS = mingliu_hkscs; MingLiU_HKSCS-ExtB = mingliu_hkscs-extb; Miriam = miriam; Mongolian Baiti = mongolian baiti; MoolBoran = moolboran; MS UI Gothic = ms ui gothic; MV Boli = mv boli; Myanmar Text = myanmar text; Narkisim = narkisim; Nirmala UI = nirmala ui; News Gothic MT = news gothic mt; NSimSun = nsimsun; Nyala = nyala; Palatino Linotype = palatino linotype; Plantagenet Cherokee = plantagenet cherokee; Raavi = raavi; Rod = rod; Sakkal Majalla = sakkal majalla; Segoe Print = segoe print; Segoe Script = segoe script; Segoe UI Symbol = segoe ui symbol; Shonar Bangla = shonar bangla; Shruti = shruti; SimHei = simhei; SimKai = simkai; Simplified Arabic = simplified arabic; SimSun = simsun; SimSun-ExtB = simsun-extb; Sylfaen = sylfaen; Tahoma = tahoma; Times New Roman = times new roman; Traditional Arabic = traditional arabic; Trebuchet MS = trebuchet ms; Tunga = tunga; Utsaah = utsaah; Vani = vani; Vijaya = vijaya'
	});
}
function Rich_Web_Tabs_Canceled()
{
	location.reload();
}
function Rich_Web_Tabs_Edit(Tabs_ID)
{
	jQuery('.Rich_Web_Tabs_Content_Data1').css('display','none');
	jQuery('.RW_Tabs_Div_Buttons a').css('display','none');
	jQuery('.Rich_Web_Tabs_Add').addClass('Rich_Web_Tabs_AddAnim');
	jQuery('.Rich_Web_Tabs_Add').css('display','none');
	jQuery('.Rich_Web_Tabs_Content_Data2').css('display','block');
	jQuery('.Rich_Web_Tabs_Update').addClass('Rich_Web_Tabs_SaveAnim');
	jQuery('.Rich_Web_Tabs_Cancel').addClass('Rich_Web_Tabs_CancelAnim');
	jQuery('.Rich_Web_Tabs_ShortID').html('[Rich_Web_Tabs id="'+Tabs_ID+'"]');
	jQuery('.Rich_Web_Tabs_ShortID_1').html('&lt;?php echo do_shortcode(&apos;[Rich_Web_Tabs id="'+Tabs_ID+'"]&apos;);?&gt;');
	jQuery('#Rich_Web_Tabs_Upd_ID').val(Tabs_ID);
	Rich_Web_Tabs_Tinymce();
	var ajaxurl = object.ajaxurl;
	var data = {
	action: 'Rich_Web_Tabs_Edit_Main', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
	foobar: Tabs_ID, // translates into $_POST['foobar'] in PHP
	};
	jQuery.post(ajaxurl, data, function(response) {
		var arr=Array();
		var spl=response.split('=>');
		for(var i=3;i<spl.length;i++){
			arr[arr.length]=spl[i].split('[')[0].trim(); 
		}
		arr[arr.length-1]=arr[arr.length-1].split(')')[0].trim();
		jQuery('#Rich_Web_Tabs_Name').val(arr[0]);
		jQuery('#Rich_Web_Tabs_Theme').val(arr[1]);
		jQuery('#Rich_Web_Tabs_Count').val(arr[2]);
		if (arr[arr.length - 1] == 'Rich_Tabs_1') {
			jQuery('.Rich_Web_Tabs_Bgc_Opt').removeClass('Rich_Web_Tabs_NoDs');
			jQuery('.RW_Tabs_Pro_V_W').removeClass('Rich_Web_Tabs_NoDs');
		}
	})
	var ajaxurl = object.ajaxurl;
	var data = {
	action: 'Rich_Web_Tabs_Edit_Tab', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
	foobar: Tabs_ID, // translates into $_POST['foobar'] in PHP
	};
	jQuery.post(ajaxurl, data, function(response) {
		var data = JSON.parse(response);
		for(i=0;i<data.length;i++)
		{
			for(var key in data[i])
			{
				var number= parseInt(key)+1;
				jQuery('.Rich_Web_Save_Tabs_Table2 tbody').append('<tr id="Rich_Web_Tabs_tr_'+number+'"><td>'+number+'</td><td>'+data[i][key]['Tabs_Subtitle']+'</td><td><i class="Rich_Web_Tabs_SubIcon rich_web rich_web-'+data[i][key]['Tabs_Subicon']+'"></i></td><td onclick="Rich_Web_Tabs_Clone_Tab('+number+')"><i class="Rich_Web_Tabs_Clone rich_web rich_web-files-o"></i></td><td onclick="Rich_Web_Tabs_Edit_Tab('+number+')"><i class="Rich_Web_Tabs_Pencil rich_web rich_web-pencil"></i></td><td onclick="Rich_Web_Tabs_Delete_Tab('+number+')"><i class="Rich_Web_Tabs_Trash rich_web rich_web-trash"></i><input type="text" style="display:none;" class="Rich_Web_Tabs_Add_SubTitle" id="Rich_Web_Tabs_Add_SubTitle_'+number+'" name="Rich_Web_Tabs_Add_SubTitle_'+number+'" value="'+data[i][key]['Tabs_Subtitle']+'"/><input type="text" style="display:none;" class="Rich_Web_Tabs_Add_SubIcon" id="Rich_Web_Tabs_Add_SubIcon_'+number+'" name="Rich_Web_Tabs_Add_SubIcon_'+number+'" value="'+data[i][key]['Tabs_Subicon']+'"/><input type="text" style="display:none;" class="Rich_Web_Tabs_Editing_Cont" id="Rich_Web_Tabs_Editing_Cont_'+number+'" name="Rich_Web_Tabs_Editing_Cont_'+number+'" value=""/></td></tr>');
				jQuery('#Rich_Web_Tabs_Editing_Cont_'+number).val(data[i][key]['Tabs_Subcontent']);
			}
		}
	})
}
function Rich_Web_Tabs_Delete(Tabs_ID)
{
	var RWTDTa = Tabs_ID;
	jQuery('.Rich_Web_Tabs_Fixed_Div').fadeIn();	
	jQuery('.Rich_Web_Tabs_Absolute_Div').fadeIn();

	jQuery('.Rich_Web_Tabs_Relative_No').click(function(){
		jQuery('.Rich_Web_Tabs_Fixed_Div').fadeOut();	
		jQuery('.Rich_Web_Tabs_Absolute_Div').fadeOut();
		RWTDTa = null;
	})
	jQuery('.Rich_Web_Tabs_Relative_Yes').click(function(){
		if(RWTDTa != null)
		{
			var ajaxurl = object.ajaxurl;
			var data = {
			action: 'Rich_Web_Tabs_Del', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
			foobar: Tabs_ID, // translates into $_POST['foobar'] in PHP
			};
			jQuery.post(ajaxurl, data, function() {

				jQuery('.Rich_Web_Tabs_Fixed_Div').fadeOut();	
				jQuery('.Rich_Web_Tabs_Absolute_Div').fadeOut();
				jQuery('.Rich_Web_Tabs_Content_Tr_' + Tabs_ID).remove();
				jQuery('.Rich_Web_Tabs_Content_Table_Tr2').each(function(i){
					jQuery(this).find('td:nth-child(1)').html((i+1));
				});
			})
		}	
		RWTDTa = null;		
	})
}
function Rich_Web_Tabs_Copy(Tabs_ID)
{	
	var ajaxurl = object.ajaxurl;
	var data = {
	action: 'Rich_Web_Tabs_Copy', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
	foobar: Tabs_ID, // translates into $_POST['foobar'] in PHP
	};
	jQuery.post(ajaxurl, data, function(response) {
		var data = JSON.parse(response);
		var RW_Tabs_new_id = data[0]['id'];
		var RW_Tabs_new_Tabs_name = data[0]['Tabs_name'];
		var RW_Tabs_new_SubTitles_Count = data[0]['SubTitles_Count'];
		var RW_Tabs_new_Rich_Web_Tabs_T_T = data[0]['Rich_Web_Tabs_T_T'];
		jQuery('.Rich_Web_Tabs_Content_Table_Tr2').last().after("<tr class='Rich_Web_Tabs_Content_Table_Tr2 Rich_Web_Tabs_Content_Tr_"+RW_Tabs_new_id+"' > <td>"+RW_Tabs_new_id+"</td> <td>"+RW_Tabs_new_Tabs_name+"</td> <td>"+RW_Tabs_new_Rich_Web_Tabs_T_T+"</td> <td>("+RW_Tabs_new_SubTitles_Count+")</td> <td onclick='Rich_Web_Tabs_Copy("+RW_Tabs_new_id+")' ><i class='Rich_Web_Tabs_Clone rich_web rich_web-files-o '></i></td> <td onclick='Rich_Web_Tabs_Edit("+RW_Tabs_new_id+")'><i class='Rich_Web_Tabs_Edit rich_web rich_web-pencil'></i></td> <td onclick='Rich_Web_Tabs_Delete("+RW_Tabs_new_id+")'><i class='Rich_Web_Tabs_Del rich_web rich_web-trash'></i></td></tr>"			
		);
		jQuery('.Rich_Web_Tabs_Content_Table_Tr2').each(function(i){
			jQuery(this).find('td:nth-child(1)').html((i+1));
		});
		/* jQuery('.Rich_Web_Tabs_Add').attr('onclic') */
		var RW_Tabs_New_Short = +RW_Tabs_new_id + 1;
		jQuery('.Rich_Web_Tabs_Add').attr('onclick','Rich_Web_Tabs_Added('+RW_Tabs_New_Short+')')
	})
}
function Rich_Web_Sav_Tabs_Tab()
{
	var Rich_Web_Tabs_Count = jQuery('#Rich_Web_Tabs_Count').val();
	var Rich_Web_Tabs_SubTitle = jQuery('#Rich_Web_Tabs_SubTitle').val();	
	var Rich_Web_Tabs_SubTIcon = jQuery('#Rich_Web_Tabs_SubTIcon').val();
	var Rich_Web_Tabs_Editing_Cont = tinyMCE.get('Rich_Web_Tabs_Editing_Cont').getContent();
	jQuery('.Rich_Web_Save_Tabs_Table2').append('<tr id="Rich_Web_Tabs_tr_'+parseInt(parseInt(Rich_Web_Tabs_Count)+1)+'"><td>'+parseInt(parseInt(Rich_Web_Tabs_Count)+1)+'</td><td>'+Rich_Web_Tabs_SubTitle+'</td><td><i class="Rich_Web_Tabs_SubIcon rich_web rich_web-'+Rich_Web_Tabs_SubTIcon+'"></i></td><td onclick="Rich_Web_Tabs_Clone_Tab('+parseInt(parseInt(Rich_Web_Tabs_Count)+1)+')"><i class="Rich_Web_Tabs_Clone rich_web rich_web-files-o"></i></td><td onclick="Rich_Web_Tabs_Edit_Tab('+parseInt(parseInt(Rich_Web_Tabs_Count)+1)+')"><i class="Rich_Web_Tabs_Pencil rich_web rich_web-pencil"></i></td><td onclick="Rich_Web_Tabs_Delete_Tab('+parseInt(parseInt(Rich_Web_Tabs_Count)+1)+')"><i class="Rich_Web_Tabs_Trash rich_web rich_web-trash"></i><input type="text" style="display:none;" class="Rich_Web_Tabs_Add_SubTitle" id="Rich_Web_Tabs_Add_SubTitle_'+parseInt(parseInt(Rich_Web_Tabs_Count)+1)+'" name="Rich_Web_Tabs_Add_SubTitle_'+parseInt(parseInt(Rich_Web_Tabs_Count)+1)+'" value="'+Rich_Web_Tabs_SubTitle+'"/><input type="text" style="display:none;" class="Rich_Web_Tabs_Add_SubIcon" id="Rich_Web_Tabs_Add_SubIcon_'+parseInt(parseInt(Rich_Web_Tabs_Count)+1)+'" name="Rich_Web_Tabs_Add_SubIcon_'+parseInt(parseInt(Rich_Web_Tabs_Count)+1)+'" value="'+Rich_Web_Tabs_SubTIcon+'"/><input type="text" style="display:none;" class="Rich_Web_Tabs_Editing_Cont" id="Rich_Web_Tabs_Editing_Cont_'+parseInt(parseInt(Rich_Web_Tabs_Count)+1)+'" name="Rich_Web_Tabs_Editing_Cont_'+parseInt(parseInt(Rich_Web_Tabs_Count)+1)+'" value=""/></td></tr>');
	jQuery('#Rich_Web_Tabs_Editing_Cont_'+parseInt(parseInt(Rich_Web_Tabs_Count)+1)).val(Rich_Web_Tabs_Editing_Cont);
	jQuery('#Rich_Web_Tabs_Count').val(parseInt(parseInt(Rich_Web_Tabs_Count)+1));
	Rich_Web_Tabs_PopUp_Close();
	Rich_Web_Res_Tabs_Tab();
}
function Rich_Web_Upd_Tabs_Tab()
{
	var Rich_Web_Tabs_HidUp = jQuery('#Rich_Web_Tabs_HidUp').val();
	var Rich_Web_Tabs_SubTitle = jQuery('#Rich_Web_Tabs_SubTitle').val();	
	var Rich_Web_Tabs_SubTIcon = jQuery('#Rich_Web_Tabs_SubTIcon').val();
	var Rich_Web_Tabs_Editing_Cont = tinyMCE.get('Rich_Web_Tabs_Editing_Cont').getContent();
	jQuery('#Rich_Web_Tabs_tr_'+Rich_Web_Tabs_HidUp).find('td:nth-child(2)').html(Rich_Web_Tabs_SubTitle);
	jQuery('#Rich_Web_Tabs_tr_'+Rich_Web_Tabs_HidUp).find('td:nth-child(3)').html('<i class="Rich_Web_Tabs_SubIcon rich_web rich_web-'+Rich_Web_Tabs_SubTIcon+'"></i>');
	jQuery('#Rich_Web_Tabs_tr_'+Rich_Web_Tabs_HidUp).find('.Rich_Web_Tabs_Add_SubTitle').val(Rich_Web_Tabs_SubTitle);
	jQuery('#Rich_Web_Tabs_tr_'+Rich_Web_Tabs_HidUp).find('.Rich_Web_Tabs_Add_SubIcon').val(Rich_Web_Tabs_SubTIcon);
	jQuery('#Rich_Web_Tabs_tr_'+Rich_Web_Tabs_HidUp).find('.Rich_Web_Tabs_Editing_Cont').val(Rich_Web_Tabs_Editing_Cont);
	Rich_Web_Tabs_PopUp_Close();
	jQuery('.Rich_Web_Tabs_Upd_Tab').hide(500);
	jQuery('.Rich_Web_Tabs_Sav_Tab').show(500);
}
function Rich_Web_Res_Tabs_Tab()
{
	jQuery('#Rich_Web_Tabs_SubTitle').val('');	
	jQuery('#Rich_Web_Tabs_SubTIcon').val('none');
	tinyMCE.get('Rich_Web_Tabs_Editing_Cont').setContent('');
}
function Rich_Web_Tabs_Clone_Tab(Row_Num)
{
	var Rich_Web_Tabs_SubTitle = jQuery('#Rich_Web_Tabs_tr_'+Row_Num).find('.Rich_Web_Tabs_Add_SubTitle').val();	
	var Rich_Web_Tabs_SubTIcon = jQuery('#Rich_Web_Tabs_tr_'+Row_Num).find('.Rich_Web_Tabs_Add_SubIcon').val();
	var Rich_Web_Tabs_Editing_Cont = jQuery('#Rich_Web_Tabs_tr_'+Row_Num).find('.Rich_Web_Tabs_Editing_Cont').val();
	var Rich_Web_Tabs_Count = jQuery('#Rich_Web_Tabs_Count').val();
	jQuery('#Rich_Web_Tabs_tr_'+Row_Num).after('<tr id="Rich_Web_Tabs_tr_'+parseInt(parseInt(Rich_Web_Tabs_Count)+1)+'"><td>'+parseInt(parseInt(Rich_Web_Tabs_Count)+1)+'</td><td>'+Rich_Web_Tabs_SubTitle+'</td><td><i class="Rich_Web_Tabs_SubIcon rich_web rich_web-'+Rich_Web_Tabs_SubTIcon+'"></i></td><td onclick="Rich_Web_Tabs_Clone_Tab('+parseInt(parseInt(Rich_Web_Tabs_Count)+1)+')"><i class="Rich_Web_Tabs_Clone rich_web rich_web-files-o"></i></td><td onclick="Rich_Web_Tabs_Edit_Tab('+parseInt(parseInt(Rich_Web_Tabs_Count)+1)+')"><i class="Rich_Web_Tabs_Pencil rich_web rich_web-pencil"></i></td><td onclick="Rich_Web_Tabs_Delete_Tab('+parseInt(parseInt(Rich_Web_Tabs_Count)+1)+')"><i class="Rich_Web_Tabs_Trash rich_web rich_web-trash"></i><input type="text" style="display:none;" class="Rich_Web_Tabs_Add_SubTitle" id="Rich_Web_Tabs_Add_SubTitle_'+parseInt(parseInt(Rich_Web_Tabs_Count)+1)+'" name="Rich_Web_Tabs_Add_SubTitle_'+parseInt(parseInt(Rich_Web_Tabs_Count)+1)+'" value="'+Rich_Web_Tabs_SubTitle+'"/><input type="text" style="display:none;" class="Rich_Web_Tabs_Add_SubIcon" id="Rich_Web_Tabs_Add_SubIcon_'+parseInt(parseInt(Rich_Web_Tabs_Count)+1)+'" name="Rich_Web_Tabs_Add_SubIcon_'+parseInt(parseInt(Rich_Web_Tabs_Count)+1)+'" value="'+Rich_Web_Tabs_SubTIcon+'"/><input type="text" style="display:none;" class="Rich_Web_Tabs_Editing_Cont" id="Rich_Web_Tabs_Editing_Cont_'+parseInt(parseInt(Rich_Web_Tabs_Count)+1)+'" name="Rich_Web_Tabs_Editing_Cont_'+parseInt(parseInt(Rich_Web_Tabs_Count)+1)+'" value=""/></td></tr>');
	jQuery('#Rich_Web_Tabs_Editing_Cont_'+parseInt(parseInt(Rich_Web_Tabs_Count)+1)).val(Rich_Web_Tabs_Editing_Cont);
	jQuery('.Rich_Web_Save_Tabs_Table2 tbody').find('tr').each(function(i){
		jQuery(this).find('td:nth-child(1)').html((i+1));
		jQuery(this).find('td:nth-child(6)').find('.Rich_Web_Tabs_Add_SubTitle').attr('id', 'Rich_Web_Tabs_Add_SubTitle_'+(i+1));
		jQuery(this).find('td:nth-child(6)').find('.Rich_Web_Tabs_Add_SubTitle').attr('name', 'Rich_Web_Tabs_Add_SubTitle_'+(i+1));
		jQuery(this).find('td:nth-child(6)').find('.Rich_Web_Tabs_Add_SubIcon').attr('id', 'Rich_Web_Tabs_Add_SubIcon_'+(i+1));
		jQuery(this).find('td:nth-child(6)').find('.Rich_Web_Tabs_Add_SubIcon').attr('name', 'Rich_Web_Tabs_Add_SubIcon_'+(i+1));
		jQuery(this).find('td:nth-child(6)').find('.Rich_Web_Tabs_Editing_Cont').attr('id', 'Rich_Web_Tabs_Editing_Cont_'+(i+1));
		jQuery(this).find('td:nth-child(6)').find('.Rich_Web_Tabs_Editing_Cont').attr('name', 'Rich_Web_Tabs_Editing_Cont_'+(i+1));
	});
	jQuery('#Rich_Web_Tabs_Count').val(parseInt(parseInt(Rich_Web_Tabs_Count)+1));
}
function RichWeb_Tabs_Add_New(){
	jQuery('.Rich_Web_Tabs_Upd_Tab').hide(100);
	jQuery('.Rich_Web_Tabs_Sav_Tab').show(100);
	jQuery('.Rich_Web_Tabs_PopUp').fadeIn(500);
}
function Rich_Web_Tabs_Edit_Tab(Row_Num)
{
	var Rich_Web_Tabs_SubTitle = jQuery('#Rich_Web_Tabs_tr_'+Row_Num).find('.Rich_Web_Tabs_Add_SubTitle').val();	
	var Rich_Web_Tabs_SubTIcon = jQuery('#Rich_Web_Tabs_tr_'+Row_Num).find('.Rich_Web_Tabs_Add_SubIcon').val();
	var Rich_Web_Tabs_Editing_Cont = jQuery('#Rich_Web_Tabs_tr_'+Row_Num).find('.Rich_Web_Tabs_Editing_Cont').val();
	jQuery('#Rich_Web_Tabs_HidUp').val(Row_Num);
	jQuery('.Rich_Web_Tabs_Sav_Tab').hide(100);
	jQuery('.Rich_Web_Tabs_Upd_Tab').show(100);
	jQuery('#Rich_Web_Tabs_SubTitle').val(Rich_Web_Tabs_SubTitle);	
	jQuery('#Rich_Web_Tabs_SubTIcon').val(Rich_Web_Tabs_SubTIcon);
	tinyMCE.get('Rich_Web_Tabs_Editing_Cont').setContent(Rich_Web_Tabs_Editing_Cont);
	jQuery('.Rich_Web_Tabs_PopUp').fadeIn(500);
}
function Rich_Web_Tabs_PopUp_Close(){
	jQuery('.Rich_Web_Tabs_PopUp').fadeOut(100);
	Rich_Web_Res_Tabs_Tab();
}
function Rich_Web_Tabs_Delete_Tab(Row_Num)
{
	var RWTDT = Row_Num;
	jQuery('.Rich_Web_Tabs_Fixed_Div').fadeIn();	
	jQuery('.Rich_Web_Tabs_Absolute_Div').fadeIn();
	jQuery('.Rich_Web_Tabs_Relative_No').click(function(){
		jQuery('.Rich_Web_Tabs_Fixed_Div').fadeOut();	
		jQuery('.Rich_Web_Tabs_Absolute_Div').fadeOut();
		RWTDT = null;
	})
	jQuery('.Rich_Web_Tabs_Relative_Yes').click(function(){
		if(RWTDT != null)
		{
			jQuery('.Rich_Web_Tabs_Fixed_Div').fadeOut();	
			jQuery('.Rich_Web_Tabs_Absolute_Div').fadeOut();
			jQuery('#Rich_Web_Tabs_tr_'+RWTDT).remove();
			jQuery('#Rich_Web_Tabs_Count').val(parseInt(parseInt(jQuery('#Rich_Web_Tabs_Count').val())-1));
			jQuery('.Rich_Web_Save_Tabs_Table2 tbody').find('tr').each(function(i){
				jQuery(this).find('td:nth-child(1)').html((i+1));
				jQuery(this).find('td:nth-child(6)').find('.Rich_Web_Tabs_Add_SubTitle').attr('id', 'Rich_Web_Tabs_Add_SubTitle_'+(i+1));
				jQuery(this).find('td:nth-child(6)').find('.Rich_Web_Tabs_Add_SubTitle').attr('name', 'Rich_Web_Tabs_Add_SubTitle_'+(i+1));
				jQuery(this).find('td:nth-child(6)').find('.Rich_Web_Tabs_Add_SubIcon').attr('id', 'Rich_Web_Tabs_Add_SubIcon_'+(i+1));
				jQuery(this).find('td:nth-child(6)').find('.Rich_Web_Tabs_Add_SubIcon').attr('name', 'Rich_Web_Tabs_Add_SubIcon_'+(i+1));
				jQuery(this).find('td:nth-child(6)').find('.Rich_Web_Tabs_Editing_Cont').attr('id', 'Rich_Web_Tabs_Editing_Cont_'+(i+1));
				jQuery(this).find('td:nth-child(6)').find('.Rich_Web_Tabs_Editing_Cont').attr('name', 'Rich_Web_Tabs_Editing_Cont_'+(i+1));
			});
		}	
		RWTDT = null;		
	})
}
function Rich_Web_Tabs_Sortable()
{	
	jQuery('.Rich_Web_Save_Tabs_Table2 tbody').sortable({
		update: function( event, ui ){ 
			jQuery(this).find('tr').each(function(i){
				jQuery(this).find('td:nth-child(1)').html((i+1));
				jQuery(this).find('td:nth-child(6)').find('.Rich_Web_Tabs_Add_SubTitle').attr('id', 'Rich_Web_Tabs_Add_SubTitle_'+(i+1));
				jQuery(this).find('td:nth-child(6)').find('.Rich_Web_Tabs_Add_SubTitle').attr('name', 'Rich_Web_Tabs_Add_SubTitle_'+(i+1));
				jQuery(this).find('td:nth-child(6)').find('.Rich_Web_Tabs_Add_SubIcon').attr('id', 'Rich_Web_Tabs_Add_SubIcon_'+(i+1));
				jQuery(this).find('td:nth-child(6)').find('.Rich_Web_Tabs_Add_SubIcon').attr('name', 'Rich_Web_Tabs_Add_SubIcon_'+(i+1));
				jQuery(this).find('td:nth-child(6)').find('.Rich_Web_Tabs_Editing_Cont').attr('id', 'Rich_Web_Tabs_Editing_Cont_'+(i+1));
				jQuery(this).find('td:nth-child(6)').find('.Rich_Web_Tabs_Editing_Cont').attr('name', 'Rich_Web_Tabs_Editing_Cont_'+(i+1));
			});
		}
	})
}
function Rich_Web_Tabs_T_Theme_Changed(){   
	var Rich_Web_Tabs_T_Theme_ID=jQuery('#Rich_Web_Tabs_Theme').val();
	var ajaxurl = object.ajaxurl;
	var data = {
	action: 'Rich_Web_Tabs_T_Theme_Changed', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
	Rich_Web_Tabs_T_Theme_ID: Rich_Web_Tabs_T_Theme_ID, // translates into $_POST['foobar'] in PHP
	};
	jQuery.post(ajaxurl, data, function(response) {
		if (response == 'Tab') {
			jQuery('.Rich_Web_Tabs_Bgc_Opt').removeClass('Rich_Web_Tabs_NoDs');
			jQuery('.RW_Tabs_Pro_V_W').removeClass('Rich_Web_Tabs_NoDs');
		}else if(response == 'Acd'){
			jQuery('.RW_Tabs_Pro_V_W').addClass('Rich_Web_Tabs_NoDs');
			jQuery('.Rich_Web_Tabs_Bgc_Opt').addClass('Rich_Web_Tabs_NoDs');
		}
	})
	
}


