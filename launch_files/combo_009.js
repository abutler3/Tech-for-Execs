YUI.add("minty_module_toolbar_inbox_sent_rollup",function(A){A.namespace("ui.Templates");A.ui.Templates.minty_module_toolbar_inbox_sent_rollup={base:'<div id="pagetoolbar" class="{{msgliststate}}"> <span class="btn left right multimsg"><a href="#" title="{{str_delete_email_attr}}" data-action="delete">{{str_delete}}</a></span> <span class="btn left onemsg"><a href="#" title="{{str_reply_attr}}" data-action="reply_sender">{{str_reply}}</a></span><span class="btn right menu onemsg" data-action="menu" id="btn-reply"><a href="#" title="{{str_toolbar_reply_menu_toggle_attr}}"><b>{{str_toolbar_reply_menu_toggle}}</b></a></span> <span class="btn left onemsg"><a href="#" title="{{str_forward_attr}}" data-action="forward">{{str_forward}}</a></span><span class="btn menu right multimsg" id="btn-move" data-action="menu"><a href="#" class="icon" title="{{str_move_attr}}"><i>{{str_move}}</i><b></b></a></span> {{has_preview_pane}} {{has_switch_view}} <span class="btn left right menu" data-action="menu" id="btn-actions"><a href="#" class="icon" title="{{str_actions_email_attr}}"><i>{{str_actions}}</i><b></b></a></span>  {{has_pagination}}</div>',has_preview_pane:'<span class="btn left right" id="btn-togglepreview" data-action="toggle-preview-pane"><a href="#" title="{{str_msg-view_btn_togglepreview_attr}}">{{previewToggle}}<b></b></a></span> ',has_switch_view:'<span class="btn left right menu" data-action="menu" id="btn-ml-preview"><a href="#" class="icon" title="{{str_msg-view_hd_modal}}"><i>{{str_show_message_view_options}}</i><b></b></a></span> ',pagination_inner:'<span class="btn left ufirst{{first_class_disabled}}"><a href="#" role="button" aria-disabled="{{first_aria_disabled}}" class="icon first" data-action="home" title="{{str_msg_list_first}}"><i>{{str_msg_list_first}}</i></a></span><span class="btn uprev{{first_class_disabled}}"><a href="#" role="button" aria-disabled="{{first_aria_disabled}}" class="icon previous" data-action="previous-page" title="{{str_msg_list_previous}}"><i>{{str_msg_list_previous}}</i></a></span><span class="pagination-count" id="page-info" title="{{str_msg_list_page_info}}"><i>{{current}}</i></span><span class="btn unext{{last_class_disabled}}"><a href="#" role="button" aria-disabled="{{last_aria_disabled}}" class="icon next" data-action="next-page" title="{{str_msg_list_next}}"><i>{{str_msg_list_next}}</i></a></span><span class="btn right ulast{{last_class_disabled}}"><a href="#" role="button" aria-disabled="{{last_aria_disabled}}" class="icon last" data-action="end" title="{{str_msg_list_last}}"><i>{{str_msg_list_last}}</i></a></span>',has_pagination:'<div class="rht pagination shaded" role="presentation">{{pagination_inner}}</div> '};},"1.0.0");