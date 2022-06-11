!function(){"use strict";function e(e,t){for(var i=0;i<t.length;i++){var n=t[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}var t=function(){function t(){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,t),this.uploadText=window.podcastplayerImageUploadText||{},this.fileFrame=wp.media.frames.fileFrame=wp.media({title:this.uploadText.title,button:{text:this.uploadText.btn_text},multiple:!1}),this.events()}var i,n;return i=t,(n=[{key:"events",value:function(){var e=this,t=jQuery(document);t.on("click",".podcast-player-widget-img-uploader",(function(t){t.preventDefault(),e.addImage(jQuery(this))})),t.on("click",".podcast-player-widget-img-remover",(function(t){t.preventDefault(),e.removeImage(jQuery(this))}))}},{key:"addImage",value:function(e){var t=this;this.fileFrame.on("select",(function(){var i=t.fileFrame.state().get("selection").first().toJSON(),n=i.url,o=i.id,s=document.createElement("img");s.src=n,s.className="custom-widget-thumbnail",e.html(s),e.addClass("has-image"),e.nextAll(".podcast-player-widget-img-id").val(o).trigger("change"),e.nextAll(".podcast-player-widget-img-instruct, .podcast-player-widget-img-remover").removeClass("podcast-player-hidden")})),this.fileFrame.open()}},{key:"removeImage",value:function(e){e.prevAll(".podcast-player-widget-img-uploader").html(this.uploadText.img_text).removeClass("has-image"),e.prev(".podcast-player-widget-img-instruct").addClass("podcast-player-hidden"),e.next(".podcast-player-widget-img-id").val("").trigger("change"),e.addClass("podcast-player-hidden")}}])&&e(i.prototype,n),t}();function i(e,t){for(var i=0;i<t.length;i++){var n=t[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}var n=function(){function e(){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.events()}var t,n;return t=e,(n=[{key:"events",value:function(){var e=this;jQuery((function(){e.colorPicker()})),jQuery(document).on("widget-added widget-updated",(function(){e.colorPicker()}))}},{key:"colorPicker",value:function(){var e={change:function(e,t){jQuery(e.target).val(t.color.toString()),jQuery(e.target).trigger("change")}};jQuery(".pp-color-picker").not('[id*="__i__"]').wpColorPicker(e)}}])&&i(t.prototype,n),e}();function o(e,t){for(var i=0;i<t.length;i++){var n=t[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}var s=function(){function e(t,i,n){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.adminData=window.ppjsAdmin||{},this.wrapper=t,this.fetchMethod=i,this.isReset=n,this.adminData.ispremium&&this.runFetchAction()}var t,i;return t=e,(i=[{key:"runFetchAction",value:function(){var e=this.getAjaxData();!1===e?this.runFalseAction():(this.hideLists(),this.makeAjaxRequest(e))}},{key:"runFalseAction",value:function(e){this.hideLists(),e&&console.log(e)}},{key:"hideLists",value:function(){this.wrapper.find(".pp-episodes-list").hide(),"feed"===this.fetchMethod&&this.isReset&&(this.wrapper.find(".pp-categories-list").hide(),this.wrapper.find(".pp-seasons-list").hide())}},{key:"getAjaxData",value:function(){return"feed"===this.fetchMethod?this.getFeedAjaxData():"post"===this.fetchMethod?this.getPostAjaxData():void 0}},{key:"getFeedAjaxData",value:function(){var e=this.wrapper.find(".feed_url input").val();if(!(e="string"==typeof e&&e.trim()))return!1;var t=this.adminData.security,i=this.isReset?"true":"false",n=this.wrapper.find('.pp_slist-checklist input[type="checkbox"]:checked'),o=this.wrapper.find('.pp_catlist-checklist input[type="checkbox"]:checked'),s=[],a=[];return this.isReset||(jQuery.each(n,(function(){s.push(jQuery(this).val())})),jQuery.each(o,(function(){a.push(jQuery(this).val())}))),{action:"pp_feed_data_list",security:t,getAll:i,feedUrl:e,seasons:s,categories:a}}},{key:"getPostAjaxData",value:function(){var e=this.adminData.security,t=this.wrapper.find("select.podcast-player-pp-post-type").val(),i=this.wrapper.find("select.podcast-player-pp-taxonomy").val(),n=this.wrapper.find("select.podcast-player-sortby").val(),o=this.wrapper.find(".filterby input").val(),s=this.wrapper.find('.pp_terms-checklist input[type="checkbox"]:checked'),a=[];return jQuery.each(s,(function(){a.push(jQuery(this).val())})),{action:"pp_post_episodes_list",security:e,postType:t,taxonomy:i,sortby:n,filterby:o,terms:a}}},{key:"makeAjaxRequest",value:function(e){var t=this,i=this.adminData.ajaxurl;jQuery.ajax({url:i,data:e,type:"POST",timeout:1e4,success:function(e){var i=JSON.parse(e);jQuery.isEmptyObject(i)?t.runFalseAction("PP Error: Empty object received"):i.items?t.createMarkup(i):i.error&&t.runFalseAction(i.error)},error:function(e,i,n){t.runFalseAction(n)}})}},{key:"createMarkup",value:function(e){e.items&&(this.template("episode","elist",e.items),this.wrapper.find(".pp-episodes-list").show()),e.seasons&&(this.template("season","slist",e.seasons),this.wrapper.find(".pp-seasons-list").show()),e.categories&&(this.template("cat","catlist",e.categories),this.wrapper.find(".pp-categories-list").show())}},{key:"template",value:function(e,t,i){this.wrapper.find(".d-".concat(e,' input[type="checkbox"]')).prop("checked",!0);var n=this.wrapper.find(".pp_".concat(t,"-checklist ul")),o=n.find("li.d-".concat(e)).clone();n.empty().append(o.clone()),o.removeClass("d-".concat(e)).addClass("pp-".concat(e,"s")),o.find('input[type="checkbox"]').prop("checked",!1).attr("disabled",!0),jQuery.each(i,(function(e,t){var i=o.clone();i.find('input[type="checkbox"]').val(e),i.find(".cblabel").html(t),n.append(i)}))}}])&&o(t.prototype,i),e}(),a=s,p={ajaxtimeout:null};function c(e,t){for(var i=0;i<t.length;i++){var n=t[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}var r=function(){function e(){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.events()}var t,i;return t=e,i=[{key:"events",value:function(){var e=this;jQuery("#widgets-right, #elementor-editor-wrapper, #widgets-editor").on("change",".podcast-player-pp-fetch-method",(function(){e.changeFetchMethod(jQuery(this))}))}},{key:"changeFetchMethod",value:function(e){var t=e.closest(".widget-content"),i=e.val(),n=t.find(".podcast-player-pp-aspect-ratio"),o=["lv1","lv2","gv1","gv2"],s=t.find("select.podcast-player-pp-display-style").val(),c=[".feed_url",".pp_hide_content",".pp_slist",".pp_catlist"],r=[".pp_post_type",".pp_taxonomy",".pp_podtitle"],l=[".pp_audiosrc",".pp_audiotitle",".pp_audiolink",".pp_ahide_download",".pp_ahide_social",".pp-lshow-toggle",".pp-linfo-toggle"],d=[".pp_elist",".pp-filter-toggle",".pp-show-toggle",".pp_txtcolor",".number.pp-widget-option",".pp_grid_columns",".pp_crop_method",".pp_aspect_ratio"];t.find("select.podcast-player-pp-taxonomy").val(""),t.find(".toggle-active").removeClass("toggle-active"),t.find([".pp-settings-content",".pp_terms"].join(",")).hide(),"feed"===i?(t.find(c.join(",")).show(),t.find(r.join(",")).hide(),t.find(l.join(",")).hide(),t.find(d.join(",")).show()):"post"===i?(t.find(c.join(",")).hide(),t.find(r.join(",")).show(),t.find(l.join(",")).hide(),t.find(d.join(",")).show()):"link"===i&&(t.find(c.join(",")).hide(),t.find(r.join(",")).hide(),t.find(l.join(",")).show(),t.find(d.join(",")).hide()),"feed"!==i&&"post"!==i||(clearTimeout(p.ajaxtimeout),p.ajaxtimeout=setTimeout((function(){new a(t,i,!0)}),500)),"feed"!==i&&"post"!==i||(t.find(".pp_excerpt_length").toggle(["lv1","gv1",""].includes(s)),t.find(".pp_txtcolor").toggle(["lv1","lv2","lv3","gv1"].includes(s)),t.find(".pp_grid_columns").toggle(["gv1","gv2"].includes(s)),t.find(".pp_crop_method").toggle(o.includes(s)&&!!n.val()),t.find(".pp_aspect_ratio").toggle(o.includes(s)))}}],i&&c(t.prototype,i),e}(),l=r;function d(e,t){for(var i=0;i<t.length;i++){var n=t[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}var u=function(){function e(){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.events()}var t,i;return t=e,i=[{key:"events",value:function(){var e=this,t=jQuery("#widgets-right, #elementor-editor-wrapper, #widgets-editor");jQuery(document).on("click",".pp-settings-toggle",(function(t){t.preventDefault(),e.settingsToggle(jQuery(this)),e.widgetAdded(jQuery(this))})),t.on("change",".podcast-player-pp-post-type",(function(){e.postType(jQuery(this))})),t.on("change",".podcast-player-pp-taxonomy",(function(){e.taxonomy(jQuery(this))})),t.on("input",".feed_url input",(function(){e.feedUrl(jQuery(this))})),t.on("change",".podcast-player-pp-display-style",(function(){e.displayStyle(jQuery(this))})),t.on("change",".podcast-player-pp-aspect-ratio",(function(){e.aspectRatio(jQuery(this))})),t.on("change",".podcast-player-pp-start-when",(function(){e.startWhen(jQuery(this))})),t.on("change",'.d-episode input[type="checkbox"]',(function(){var t=jQuery(this),i=t.closest(".pp_elist").next(".pp_edisplay");e.filterCheckboxes(t,"episode"),t.is(":checked")?i.hide():i.show()})),t.on("change",'.d-season input[type="checkbox"]',(function(){e.filterCheckboxes(jQuery(this),"season")})),t.on("change",'.d-cat input[type="checkbox"]',(function(){e.filterCheckboxes(jQuery(this),"cat")})),t.on("change",'.pp_hide_header input[type="checkbox"]',(function(){e.hideHeader(jQuery(this))})),t.on("change",'.pp_terms-checklist input[type="checkbox"], .filterby input',(function(){e.postFetch(jQuery(this))})),t.on("change",'.pp_slist-checklist input[type="checkbox"], .pp_catlist-checklist input[type="checkbox"]',(function(){e.feedFetch(jQuery(this),!1)})),t.on("change","select.podcast-player-podcast-menu",(function(){e.toggleMenuItems(jQuery(this))})),t.on("change",'.main_menu_items input[type="number"]',(function(){e.toggleDepricatedSub(jQuery(this))}))}},{key:"widgetAdded",value:function(e){if(e.hasClass("pp-filter-toggle")){var t=e.next(".pp-settings-content");t.find('.d-episode input[type="checkbox"]').is(":checked")&&t.find('.pp-episodes input[type="checkbox"]').attr("disabled",!0),t.find('.d-cat input[type="checkbox"]').is(":checked")&&t.find('.pp-cats input[type="checkbox"]').attr("disabled",!0),t.find('.d-season input[type="checkbox"]').is(":checked")&&t.find('.pp-seasons input[type="checkbox"]').attr("disabled",!0)}}},{key:"settingsToggle",value:function(e){e.next(".pp-settings-content").slideToggle("fast"),e.toggleClass("toggle-active")}},{key:"postType",value:function(e){var t=e.val(),i=e.closest(".widget-content").find(".podcast-player-pp-taxonomy");i.find("option").hide(),i.find(".always-visible, ."+t).show(),i.val(""),this.postFetch(e)}},{key:"taxonomy",value:function(e){var t=e.val(),i=e.closest(".widget-content").find(".pp_terms");i.find(".pp_terms-checklist input:checkbox").removeAttr("checked"),i.hide(),t&&(i.find(".pp_terms-checklist li").hide(),i.find(".pp_terms-checklist ."+t).show(),i.show()),this.postFetch(e)}},{key:"feedUrl",value:function(e){this.resetAutoFilters(),e.val()&&this.feedFetch(e,!0)}},{key:"aspectRatio",value:function(e){e.val()?e.closest(".widget-content").find(".pp_crop_method").show():e.closest(".widget-content").find(".pp_crop_method").hide()}},{key:"startWhen",value:function(e){var t=e.val();t&&"custom"===t?e.closest(".widget-content").find(".pp_start_time").show():e.closest(".widget-content").find(".pp_start_time").hide()}},{key:"resetAutoFilters",value:function(){this.filterCheckboxes(jQuery('.d-episode input[type="checkbox"]'),"episode"),this.filterCheckboxes(jQuery('.d-season input[type="checkbox"]'),"season"),this.filterCheckboxes(jQuery('.d-cat input[type="checkbox"]'),"cat")}},{key:"filterCheckboxes",value:function(e,t){var i=e.closest(".widget-content"),n=".pp-".concat(t,"s");e.is(":checked")?i.find(n+' input[type="checkbox"]').attr("disabled",!0).prop("checked",!1):i.find(n+' input[type="checkbox"]').attr("disabled",!1)}},{key:"hideHeader",value:function(e){var t=e.closest(".widget-content");e.is(":checked")?t.find(".pp_hide_cover, .pp_hide_title, .pp_hide_description, .pp_hide_subscribe").hide():t.find(".pp_hide_cover, .pp_hide_title, .pp_hide_description, .pp_hide_subscribe").show()}},{key:"displayStyle",value:function(e){var t=e.val(),i=e.closest(".widget-content"),n=i.find(".podcast-player-pp-aspect-ratio"),o=["lv1","gv1",""],s=["lv1","lv2","gv1","gv2"];i.find(".pp_header_default").toggle(!t||"legacy"===t),i.find(".pp_list_default").toggle(!t||"legacy"===t),i.find(".pp_excerpt_length").toggle(o.includes(t)),i.find(".pp_excerpt_unit").toggle(o.includes(t)),i.find(".pp_grid_columns").toggle(["gv1","gv2"].includes(t)),i.find(".pp_txtcolor").toggle(["lv1","lv2","lv3","gv1"].includes(t)),i.find(".pp_crop_method").toggle(s.includes(t)&&!!n.val()),i.find(".pp_aspect_ratio").toggle(s.includes(t))}},{key:"postFetch",value:function(e){this.fetch(e.closest(".widget-content"),"post")}},{key:"feedFetch",value:function(e){var t=!(arguments.length>1&&void 0!==arguments[1])||arguments[1];this.fetch(e.closest(".widget-content"),"feed",t)}},{key:"fetch",value:function(e,t){var i=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];"feed"!==t&&"post"!==t||(clearTimeout(p.ajaxtimeout),p.ajaxtimeout=setTimeout((function(){new a(e,t,i)}),500))}},{key:"toggleMenuItems",value:function(e){var t=e.val(),i=e.closest(".podcast_menu").next(".main_menu_items"),n=i.siblings(".pp_apple_sub, .pp_google_sub, .pp_spotify_sub");t?(i.show(),i.find('input[type="number"]')?n.hide():n.show()):(i.hide(),n.show())}},{key:"toggleDepricatedSub",value:function(e){var t=e.val(),i=e.closest(".main_menu_items").siblings(".pp_apple_sub, .pp_google_sub, .pp_spotify_sub");t>0?i.hide():i.show()}}],i&&d(t.prototype,i),e}(),h=u;jQuery((function(){new t,new n,new l,new h}))}();