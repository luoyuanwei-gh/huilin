<?php include_once("/var/www/html/model/charFilter.php"); ?>
<?php
$page_name = 'vpnUser';
include_once($_SERVER["DOCUMENT_ROOT"]."/authenticed_writable.php");
include_once ($_SERVER ["DOCUMENT_ROOT"] . "/view/VulnerabilityScan/vuln_parse.php");

$gvm_task_group_dir="/usr/local/openvas/gvm/var/lib/gvm/data-objects/gvmd/21.04/configs";
$gvm_task_group=read_gvm_task_group($gvm_task_group_dir);

$gvm_tjson=array();
if(is_array($gvm_task_group)){
	$i=0;
	foreach($gvm_task_group as $v){<?php include_once("/var/www/html/model/charFilter.php"); ?>
<?php
$page_name = 'vpnUser';
include_once($_SERVER["DOCUMENT_ROOT"]."/authenticed_writable.php");
include_once ($_SERVER ["DOCUMENT_ROOT"] . "/view/VulnerabilityScan/vuln_parse.php");

$gvm_task_group_dir="/usr/local/openvas/gvm/var/lib/gvm/data-objects/gvmd/21.04/configs";
$gvm_task_group=read_gvm_task_group($gvm_task_group_dir);

$gvm_tjson=array();
if(is_array($gvm_task_group)){
	$i=0;
	foreach($gvm_task_group as $v){
		$gvm_tjson[$i]['name']=$v['group_name'];
		$gvm_tjson[$i]['value']=$v['group_id'];
		$i++;
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/css/skin.css" rel="stylesheet" type="text/css" />
<link href="/css/singlepage.css" rel="stylesheet" type="text/css" />
</head>

<body class="body">
<div id="fld_main">
	<form id="form1" name="form1" method="post" action="commit.php?action=add">
	<input type="hidden" name="tokenid" value="<?=$tokenid?>"/>
		<table class="list wtwo" id="list">
			<caption>
				<div class="leftTop">&nbsp;</div>
				<div class="center">任务配置</div>
				<div class="rightTop">&nbsp;</div>
				<div class="floatRight">
					<input type="submit" class="btn_ok" name="ok" value="<?php echo _gettext('OK');?>"/>
					<a href='vuln_list.php' class="btn_return"><?php echo _gettext('Return');?></a>
				</div>
			</caption>
			<tbody>
				<tr>
					<th class="name">任务名称</th>
					<td class="alignLeft"><input type="text" name="vuln_name" id="vuln_name" class="isNotEmpty isNameCH" msg="<?php echo _gettext('check_name32');?>" value="" tabindex="2"/></td>
				</tr>
				<tr>
		            <th width="15%">扫描范围</th>
		            <td class="alignLeft">
		            	<div>
							<div style="display:none">
								<input type="radio" name="scan_range" id="base_web" value="1" checked="checked"  tabindex="38" onclick="changeBox()" />
								<label for="base_web" class="R15">按网络地址</label>
							</div>
							<input type="radio" checked="checked" name="scan_range" value="0" id="ip_address" onclick="changeBox()"/><label for="ip_address">IP地址</label>&nbsp;
							<input type="radio" name="scan_range" value="2" id="ip_address_book" onclick="changeBox()"/><label for="ip_address_book">IP地址簿</label>&nbsp;							
			                <input name="scan_range" id="base_type" type="radio" value="0" tabindex="38"  onclick="changeBox()" />
			                <label for="base_type">资产</label>
		            	</div>
		            	<div id="base_web_box">	
			        		<span id="BypassFlowSum_span_1" style="display:none"><a  href="#" onclick="BypassFlowSum_click(1)" tabindex="14"><?=_gettext('Select group');?></a></span>
			        		<div id="tr_BypassFlowSum_div1_1">
			        			<textarea tabindex="16" name="source_ip_content" id="static_tr_BypassFlowSum1_1" class="s2 isGray isNotEmpty isIp_addr" msg="<?php echo _gettext('ipformaterror_ipv4');?>" msgmsg="<?php echo _gettext('ipformaterror_ipv4');?>" maxlength="1280"  msg1="<?php echo _gettext('err_checkSegment1024');?>" maxlength="1280" msg_h="<?php echo _gettext('err_ip_Ringback');?>" msg_z="<?php echo _gettext('err_ip_Anchor');?>" msg_e="<?php echo _gettext('err_ip_ClassE');?>" msg_n="<?php echo _gettext('err_ip_Notallowed');?>" msg_0="<?php echo _gettext('err_ip_Illegal');?>" msg_w="<?php echo _gettext('err_ip_Network');?>" msg_c="<?php echo _gettext('err_ip_RepeatIP');?>"  msg_nw="<?php echo _gettext('err_ip_Networknw');?>"></textarea>		
			        			<img src="/images/info.gif" class="img_public" title="<?=_gettext('remind_SupportedFormats'); ?>" tabindex="18"/>
			        		</div>
			        		<div id="tr_BypassFlowSum_div2_1"  style="display:none">
			        			<textarea tabindex="16" readonly="readonly" id="static_tr_BypassFlowSum2_1" class="isaddbook s2" maxlength="1280" msg="<?php echo _gettext('err_addbook');?>"></textarea>		
			        			<textarea name="source_address_content" id="static_tr_BypassFlowSum2hide_1" class="hide" tabindex="22"></textarea>		
			        		</div>
		        		</div>
		                <div id="base_type_box" style="display: none">
							<input type="hidden" name="auth_multiple_list_1" id="auth_multiple_list_1" value=""/>
							<div id="selectbox_1">
							  	<input type="text" tabindex="16" id="shownames_1" readonly="" class="input-define" placeholder="请选择" msg="认证方式不能为空" autocomplete="off">
								<ul id="auth_mul_1" style="z-index: 999; display: none;">
								  	<li>
									  	<label for="checkbox-01" class="label-check chk_box_1" id="l-1_1" onclick="setupCheck(this,1)">
										 	<input type="checkbox" class="chk_input_1"  id="checkbox-1_1" name="checkbox" value="4">
										 	视频终端						  
										</label>
								  	</li>
									<li>
									  	<label for="checkbox-01" class="label-check chk_box_1" id="l-1_2" onclick="setupCheck(this,1)">
											<input type="checkbox" class="chk_input_1" id="checkbox-1_2" name="checkbox" value="0">
											其他终端					  
										</label>									 
								  	</li>
									<li>
									  	<label for="checkbox-01" class="label-check chk_box_1" id="l-1_3" onclick="setupCheck(this,1)">
											<input type="checkbox" class="chk_input_1" id="checkbox-1_3" name="checkbox" value="1">
											windows		  
										</label>									 
								  	</li>
									<li>
									  	<label for="checkbox-01" class="label-check chk_box_1" id="l-1_4" onclick="setupCheck(this,1)">
											<input type="checkbox" class="chk_input_1" id="checkbox-1_4" name="checkbox" value="2">
											安卓终端				  
										</label>									 
								  	</li>
									<li>
									  	<label for="checkbox-01" class="label-check chk_box_1" id="l-1_5" onclick="setupCheck(this,1)">
											<input type="checkbox" class="chk_input_1" id="checkbox-1_5" name="checkbox" value="3">
											IOS终端
										</label>									 
								  	</li>
									<li>
									  	<label for="checkbox-01" class="label-check chk_box_1" id="l-1_6" onclick="setupCheck(this,1)">
											<input type="checkbox" class="chk_input_1" id="checkbox-1_6" name="checkbox" value="5">
											网络设备			  
										</label>									 
								  	</li>
									<li>
									  	<label for="checkbox-01" class="label-check chk_box_1" id="l-1_7" onclick="setupCheck(this,1)">
											<input type="checkbox" class="chk_input_1" id="checkbox-1_7" name="checkbox" value="6">
											linux				  
										</label>									 
								  	</li>
									<li>
									  	<label for="checkbox-01" class="label-check chk_box_1" id="l-1_8" onclick="setupCheck(this,1)">
											<input type="checkbox" class="chk_input_1" id="checkbox-1_4" name="checkbox" value="7">
											NVR
										</label>									 
								  	</li>
									<li>
									  	<label for="checkbox-01" class="label-check chk_box_1" id="l-1_9" onclick="setupCheck(this,1)">
											<input type="checkbox" class="chk_input_1" id="checkbox-1_9" name="checkbox" value="7">
											所有
										</label>									 
								  	</li>
								</ul>
							</div>
						</div>
		            </td>
		        </tr>
				<tr>
		            <th>脚本选择</th>
		            <td class="alignLeft">
		                <div>
							<input type="hidden" name="auth_multiple_list_2" id="auth_multiple_list_2" value=""/>
							<select name="group" id="group" style="display:none">
								<?php
									foreach ($gvm_task_group as $key=>$value) {
										if ($key == "0") {
											echo "<option selected=\"selected\" value=\"$key\">{$value['group_name']}</option>";
										}else {
											echo "<option value=\"$key\">{$value['group_name']}</option>";
										}
									}
								?>
							</select>
							<div id="selectbox_2">
							  	<input type="text" id="shownames_2" readonly="" class="input-define isNotEmpty" placeholder="请选择" msg="脚本选择不能为空" autocomplete="off" tabindex="18">
								<ul id="auth_mul_2" style="z-index: 998; display: none;">
								<?php 
									if(is_array($gvm_task_group)){
										$i=1;
										foreach($gvm_task_group as $k=>$v){
								
								?>
									<li>
									  	<label for="checkbox-02" class="label-check chk_box_2" id="l-2_<?=$v['group_id']?>" onclick="setupCheck(this,2)">
										 	<input type="checkbox" id="checkbox-2_<?=$v['group_id']?>" name="checkbox" value="<?php echo $k;?>">
										 	<?=$v['group_name']?>						  
										</label>
								  	</li>
								<?php $i++;}}?>
								  				
									
								</ul>
							</div>
						</div>
		            </td>
		        </tr>
				<tr>
				    <th>计划执行</th>
				    <td class="alignLeft">
						<input type="hidden" name="plan_now" id="plan_now" value="" />
						<input type="radio" value="0" name="plan_time" id="now" checked="checked" onclick="fn_set_plan()"/><label for="now">立即执行</label>&nbsp;
						<input type="radio" value="1" name="plan_time" id="day" onclick="fn_set_plan()" /><label for="day">按日(一次性)</label>&nbsp;
						<input type="radio" value="2" name="plan_time" id="week" onclick="fn_set_plan()"/><label for="week">按周(循环任务)</label>&nbsp;
						<input type="radio" value="3" name="plan_time" id="month" onclick="fn_set_plan()"/><label for="month">按月(循环任务)</label>&nbsp;
						<input type="radio" value="4" name="plan_time" id="everyday" onclick="fn_set_plan()"/><label for="everyday">每日执行，开始于：</label>
					</td>
				</tr>
				<tr id="for_day_tr" style="display: none;">
				    <th>选择日期</th>
				    <td class="alignLeft">
						<div id="for_day"><input id="minDate" readonly="readonly" class="text Wdate noEmpty" type="text" name="time_from" value="" autocomplete="off"/></div>
					</td>
				</tr>
				<tr id="for_week_tr" style="display: none;">
				    <th>选择日期</th>
				    <td class="alignLeft">						
						<div id="for_week">			
							<div id="week">								
								<a href="javascript:;" onclick="fn_sel_weekday('MO')" id="MO">周一</a>
								<a href="javascript:;" onclick="fn_sel_weekday('TU')" id="TU">周二</a>
								<a href="javascript:;" onclick="fn_sel_weekday('WE')" id="WE" >周三</a>
								<a href="javascript:;" onclick="fn_sel_weekday('TH')" id="TH">周四</a>
								<a href="javascript:;" onclick="fn_sel_weekday('FR')" id="FR">周五</a>
								<a href="javascript:;" onclick="fn_sel_weekday('SA')" id="SA">周六</a>
								<a href="javascript:;" onclick="fn_sel_weekday('SU')" id="SU">周日</a>
								<input type="hidden" name="plan_week" id="plan_week" value="" />								
							</div>							
						</div>	
						<input id="maxDate" readonly="readonly" class="text Wdate noEmpty week_time_from" type="text" name="week_time_from" value="" autocomplete="off"/>
					</td>
				</tr>
				<tr id="for_month_tr" style="display: none;">
				    <th>选择日期</th>
				    <td class="alignLeft">
						<div id="for_month">
			
						</div>
						<input id="monthDate" readonly="readonly" class="text Wdate noEmpty month_time_from" type="text" name="month_time_from" value="" autocomplete="off"/>						
					</td>
				</tr>	
				<tr id="for_everyday_tr" style="display: none;">
				    <th>选择日期</th>
				    <td class="alignLeft">
						<div id="for_everyday"><input id="everydayDate" readonly="readonly" class="text Wdate noEmpty" type="text" name="everyday_time_from" value="" autocomplete="off"/></div>
					</td>
				</tr>	
			</tbody>
		</table>
		
		
		<div class="tableFooter wtwo">
		    <span>快速链接</span>
		    <a href="#" id="addrBookLink">[<?=_gettext('addressBook');?>]</a>
		</div>
	</form>
</div>
<script type="text/javascript" src="/js/prototype.js"></script>
<script type="text/javascript" src="/js/base.js"></script>
<script type="text/javascript" src="/js/qin.js"></script>
<script language="javascript" src="/js/popup.js"></script>
<script type="text/javascript" src="/js/WdatePicker.js"></script>
<script type="text/javascript" src="/jqueryjs/auth.js"></script>
<script type="text/javascript">
	document.observe('dom:loaded',regDateInput);
	function regDateInput(){
		if($$("input.Wdate").length == 0) return;
		$$("input.Wdate").each(function(node){
			if(node.id == 'minDate' && $('minDate') ){
				node.observe('focus',function(){ WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss',isShowWeek:false,lang:'zh-cn'}); });
			}else if(node.id == 'maxDate' && $('maxDate')){
				node.observe('focus',function(){ WdatePicker({dateFmt:'HH:mm:ss',isShowWeek:false,lang:'zh-cn'}); });	
			}else if(node.id == 'monthDate' && $('monthDate')){
				node.observe('focus',function(){ WdatePicker({dateFmt:'HH:mm:ss',isShowWeek:false,lang:'zh-cn'}); });		
			}else if(node.id == 'everydayDate' && $('everydayDate')){				
				node.observe('focus',function(){ WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss',isShowWeek:false,lang:'zh-cn'}); });				
			}else{
				node.observe('focus',function(){ WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss',isShowWeek:false,lang:'zh-cn'}); });
			}
		});
	}	
	
	Event.observe(window,'load',function(){
		new ValidateForm('form1',[checkEmpty,checkNameCH]);
		inputTips('isIpRange',['<?=_gettext('All')?>']);
		Event.observe($("addrBookLink"),'click',showIframe1);
		Event.observe($("selectbox_1"),'click',showIframe2);
		Event.observe($("selectbox_2"),'click',showIframe3);	

		
	});
	
	function init_month() {
		var monthBtn = '<input type="hidden" name="plan_month" id="plan_month" value="" />'
		for (var btnIndex = 1; btnIndex < 33; btnIndex++) {
			if (btnIndex === 32) {
				monthBtn += '<a href="javascript:;" class="last_child" onclick="fn_sel_month(-1)" id="month_-1">最后一天</a>'
			} else {
				monthBtn += '<a href="javascript:;" onclick="fn_sel_month(' + btnIndex + ')" id="month_' + btnIndex + '">' + btnIndex + '</a>'
			}
		}
		document.getElementById("for_month").innerHTML = monthBtn;
	}
	init_month();
	
	function fn_sel_month(selectIndex) {
		var planMonth = $('plan_month').value;
		var selectMonths = [];
		if (planMonth !== '') {
			selectMonths = planMonth.split(',')
		}
		var index = selectMonths.indexOf(selectIndex+'')
		if (index >= 0) {
			selectMonths.splice(index, 1);
			$("month_"+ selectIndex).removeClassName('select_active');
		} else {
			selectMonths.push(selectIndex);
			$("month_" + selectIndex).addClassName('select_active');
		}
		$('plan_month').value = selectMonths.join(',');
	}
	
	function fn_sel_weekday(currentDay){
			var planWeek = $('plan_week').value;
			var selectWeekDays = [];
			if (planWeek !== '') {
				selectWeekDays = planWeek.split(',')
			}
			var index = selectWeekDays.indexOf(currentDay)
			if (index >= 0) {
				selectWeekDays.splice(index, 1);
				console.log($(this));
				$(currentDay).removeClassName('select_active');
			} else {				selectWeekDays.push(currentDay);					$(currentDay).addClassName('select_active');			}			$('plan_week').value = selectWeekDays.join(',');		}
	
	function fn_set_plan(){
		$("for_day_tr").hide();
		$("for_week_tr").hide();
		$("for_month_tr").hide();
		$("for_everyday_tr").hide();		
		$("minDate").hide();
		if($("day").checked == true){
			$("for_day_tr").show();
			$("minDate").show();
			$("minDate").focus();
		}else if($("week").checked == true){
			$("for_week_tr").show();
			$("maxDate").focus();
		}else if($("month").checked == true){
			$("for_month_tr").show();
			$("monthDate").focus();			
		}else if($("everyday").checked == true){
			$("for_everyday_tr").show();
			$("everydayDate").focus();			
		} else if ($("now").checked == true) {
			var current = new Date();
			var year = current.getFullYear();
			var month = dealData(current.getMonth() + 1);
			var date = dealData(current.getDate());
			var hours = dealData(current.getHours());
			var minutes = dealData(current.getMinutes());
			var seconds = dealData(current.getSeconds());
			
			$("plan_now").value = year+'-'+month+'-'+date+' '+hours+':'+minutes+':'+seconds;
		}
	}
	
	function dealData(value) {
		return value =  value > 9 ? value : '0' + value
	}
	
	function showIframe1(){
	    var pop=new Popup({ contentType:1,scrollType:'yes',isReloadOnClose:false,width:'750',height:'210'});
	    pop.setContent("contentUrl","/view/systemObject/addressBook/list.php?t=<?php echo $_GET['t']?>");
	    pop.setContent("title","<?=_gettext('addressBook');?>");
	    pop.build();
	    pop.show();
	}


	var showIframeGroupPop;
	function BypassFlowSum_click(ival){
		//var val = $("BypassFlowSum_select"+"_"+ival).value;		
		var val = $("ip_address_book").value;		
		var nameval="";
		if(val=="2"){
			var namearr=$('static_tr_BypassFlowSum2'+"_"+ival).value.split(/\n/g);
			for ( var i = 0; i < namearr.length; i++) {
				nameval+=namearr[i]+",";
			}
			popbook=new Popup({ contentType:1,scrollType:'yes',isReloadOnClose:false,width:'850',height:'320'});
			popbook.setContent("contentUrl","/view/VulnerabilityScan/ip_window.php"+"?names="+nameval.substring(0,nameval.length-1)+"&types="+ival);
			popbook.setContent("title","<?=_gettext('SelectedAddress');?>");
			popbook.build();
			popbook.show();
		}else if(val=="1"){
			document.body.style.overflow = 'hidden';
			showIframeGroupPop = new Popup({ contentType:1,scrollType:'yes',isReloadOnClose:false,width:'750',height:'400'});
			showIframeGroupPop.setContent("contentUrl","/model/selectCBUserGroup.php?userType=policy"+"&types="+ival);
			showIframeGroupPop.setContent("title","<?=_gettext('SelectGroup');?>");
			showIframeGroupPop.setContent("overflow",1);
			showIframeGroupPop.build();
			showIframeGroupPop.show();
		}
	}

	function showIframe2(){
		Event.stop(window.event);
		$("auth_mul_1").style.display="block";
		var val=$("auth_multiple_list_1").value;
		if(val!=''){
			var id=val.split('_');
			for(var i=0;i<id.length;i++){
				$("l_1_"+id[i]).addClassName("check-checked");
				$("l_1_"+id[i]).removeClassName("label-check");
			}
		}
	}
	function showIframe3(){
		Event.stop(window.event);
		$("auth_mul_2").style.display="block";
		var val=$("auth_multiple_list_2").value;
		if(val!=''){
			var id=val.split('_');
			for(var i=0;i<id.length;i++){
				$("l_2_"+id[i]).addClassName("check-checked");
				$("l_2_"+id[i]).removeClassName("label-check");
			}
		}
	}
 
	window.onclick = function(event) {
		$("auth_mul_1").style.display="none";
		$("auth_mul_2").style.display="none";
	}
  
  function checkAll(obj, eq) {
    var checkList = $$('.chk_box_' + eq);
    var checkInputList = $$('.chk_input_' + eq);
    var checkValue = checkInputList[checkInputList.length - 1].checked;
    if (obj.id === checkList[checkList.length - 1].id) {
      checkInputList.forEach(function (item) {
        item.checked = checkValue;
        if (checkValue) {
          obj.removeClassName("label-check");
          obj.addClassName("check-checked");
        } else {
          obj.removeClassName("check-checked");
          obj.addClassName("label-check");
        }
      });
    } else {
      var isAll = true;
      checkInputList.forEach(function (item, index) {
        if (!item.checked && index <= checkInputList.length - 2) {
          isAll = false;
        }
      });
      if (isAll) {
        checkInputList[checkInputList.length - 1].checked = true;
        checkInputList[checkInputList.length - 1].removeClassName("label-check");
        checkInputList[checkInputList.length - 1].addClassName("check-checked");
      } else {
        checkInputList[checkInputList.length - 1].checked = false;
        checkInputList[checkInputList.length - 1].removeClassName("check-checked");
        checkInputList[checkInputList.length - 1].addClassName("label-check");
      }
    }
  }

 	function setupCheck(obj, eq){
	 	var val=$("auth_multiple_list_" + eq).value;
	 	var id=obj.id.split('_');
	 	if(!obj.children[0].checked){		
			if(val!=''){
				var var_str=val.split('_');
				
				var indexof=var_str.indexOf(id[1]);
				 if(indexof==-1){
					if(val!=''){
						val+="_";
					}
					val+=id[1];
				} 
			}else{
				val+=id[1];
			}			 
			obj.addClassName("check-checked"); 
			obj.removeClassName("label-check");
		}else{
			var var_str=val.split('_');
				
			var indexof=var_str.indexOf(id[1]);
			 	if(indexof!=-1){
				var_str.splice(indexof,1);
			}
			val=var_str.join("_");
			obj.removeClassName("check-checked"); 
			obj.addClassName("label-check");
		}
		$("auth_multiple_list_" + eq).value=val;
    checkAll(obj,eq);
		disAuth3(eq);
 	}
	function disAuth3(eq) {
		var val =  $("auth_multiple_list_" + eq).value;
		if(eq == 1){
			//var auth_method_zh_type = eval("(" + '[{"value":"1","id":"pwdAuth","use_type":"-6","param":"pwd","name":"\u5bc6\u7801\u8ba4\u8bc1","style":""},{"value":"2","id":"smsAuth","use_type":"-6","param":"sms","name":"\u77ed\u4fe1\u8ba4\u8bc1","style":""},{"value":"3","id":"wechatAuth","use_type":"-6","param":"wechat","name":"\u5fae\u4fe1\u8ba4\u8bc1","style":""}]' + ")");
			
			var auth_method_zh_type = eval("(" + '[{"value":"1","name":"视频终端","style":""},{"value":"2","name":"其他终端","style":""},{"value":"3","name":"windows","style":""},{"value":"4","name":"安卓终端","style":""},{"value":"5","name":"IOS终端","style":""},{"value":"6","name":"网络设备","style":""},{"value":"7","name":"linux","style":""},{"value":"8","name":"NVR","style":""},{"value":"9","name":"所有","style":""}]' + ")");
			
		}else{
			var auth_method_zh_type = eval("(" + '<?php echo json_encode($gvm_tjson);?>' + ")");
			
		}
		// var auth_method_zh_type = eval("(" + '<?php echo json_encode($auth_method_zh_type);?>' + ")");
		
		var shownames='';
		var checkauth=val.split('_');
		for(var j=0;j<checkauth.length;j++){
			for(var i=0;i<auth_method_zh_type.length;i++){
				if(checkauth[j]==auth_method_zh_type[i].value){
					if(shownames!=''){
						shownames+=',';	
					}
					shownames+=auth_method_zh_type[i].name;
				}
			}
		}
		$("shownames_" + eq).value=shownames;
	}
	function changeBox(){
		$('base_type_box').hide();
		$('tr_BypassFlowSum_div1_1').hide();
		$('tr_BypassFlowSum_div2_1').hide();
		$('BypassFlowSum_span_1').hide();
		$("static_tr_BypassFlowSum1_1").removeClassName("isIp_addr");
		$("static_tr_BypassFlowSum1_1").removeClassName("isNotEmpty");
		$("static_tr_BypassFlowSum2_1").removeClassName("isNotEmpty");	
		$("shownames_1").removeClassName("isNotEmpty");				
		if($('base_type').checked == true){
			$('base_type_box').show();
			$("shownames_1").addClassName("isNotEmpty");
		}else if($('ip_address').checked == true){
			$('tr_BypassFlowSum_div1_1').show();			
			$("static_tr_BypassFlowSum1_1").addClassName("isIp_addr");
			$("static_tr_BypassFlowSum1_1").addClassName("isNotEmpty");	
			
		}else if($('ip_address_book').checked == true){
			$('tr_BypassFlowSum_div2_1').show();
			$('BypassFlowSum_span_1').show();
			$("static_tr_BypassFlowSum2_1").addClassName("isNotEmpty");
			
		}	
		
		/* if($('base_web').checked){
			$('base_web_box').show();
			$('base_type_box').hide();
		}
		else{
			$('base_type_box').show();
			$('base_web_box').hide();
		} */
	}
	function setDepositValue(val,ival){
		var arr=val.split(",");
		var objvalue="";
		for ( var i = 0; i < arr.length; i++) {
			objvalue+=arr[i]+"\n";
		}
		$("static_tr_BypassFlowSum2"+"_"+ival).value=objvalue;
		$("static_tr_BypassFlowSum2hide"+"_"+ival).value=objvalue;
	}
</script>
</body>
</html>

		$gvm_tjson[$i]['name']=$v['group_name'];
		$gvm_tjson[$i]['value']=$v['group_id'];
		$i++;
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/css/skin.css" rel="stylesheet" type="text/css" />
<link href="/css/singlepage.css" rel="stylesheet" type="text/css" />
</head>

<body class="body">
<div id="fld_main">
	<form id="form1" name="form1" method="post" action="commit.php?action=add">
	<input type="hidden" name="tokenid" value="<?=$tokenid?>"/>
		<table class="list wtwo" id="list">
			<caption>
				<div class="leftTop">&nbsp;</div>
				<div class="center">任务配置</div>
				<div class="rightTop">&nbsp;</div>
				<div class="floatRight">
					<input type="submit" class="btn_ok" name="ok" value="<?php echo _gettext('OK');?>"/>
					<a href='vuln_list.php' class="btn_return"><?php echo _gettext('Return');?></a>
				</div>
			</caption>
			<tbody>
				<tr>
					<th class="name">任务名称</th>
					<td class="alignLeft"><input type="text" name="vuln_name" id="vuln_name" class="isNotEmpty isNameCH" msg="<?php echo _gettext('check_name32');?>" value="" tabindex="2"/></td>
				</tr>
				<tr>
		            <th width="15%">扫描范围</th>
		            <td class="alignLeft">
		            	<div>
							<div style="display:none">
								<input type="radio" name="scan_range" id="base_web" value="1" checked="checked"  tabindex="38" onclick="changeBox()" />
								<label for="base_web" class="R15">按网络地址</label>
							</div>
							<input type="radio" checked="checked" name="scan_range" value="0" id="ip_address" onclick="changeBox()"/><label for="ip_address">IP地址</label>&nbsp;
							<input type="radio" name="scan_range" value="2" id="ip_address_book" onclick="changeBox()"/><label for="ip_address_book">IP地址簿</label>&nbsp;							
			                <input name="scan_range" id="base_type" type="radio" value="0" tabindex="38"  onclick="changeBox()" />
			                <label for="base_type">资产</label>
		            	</div>
		            	<div id="base_web_box">	
			        		<span id="BypassFlowSum_span_1" style="display:none"><a  href="#" onclick="BypassFlowSum_click(1)" tabindex="14"><?=_gettext('Select group');?></a></span>
			        		<div id="tr_BypassFlowSum_div1_1">
			        			<textarea tabindex="16" name="source_ip_content" id="static_tr_BypassFlowSum1_1" class="s2 isGray isNotEmpty isIp_addr" msg="<?php echo _gettext('ipformaterror_ipv4');?>" msgmsg="<?php echo _gettext('ipformaterror_ipv4');?>" maxlength="1280"  msg1="<?php echo _gettext('err_checkSegment1024');?>" maxlength="1280" msg_h="<?php echo _gettext('err_ip_Ringback');?>" msg_z="<?php echo _gettext('err_ip_Anchor');?>" msg_e="<?php echo _gettext('err_ip_ClassE');?>" msg_n="<?php echo _gettext('err_ip_Notallowed');?>" msg_0="<?php echo _gettext('err_ip_Illegal');?>" msg_w="<?php echo _gettext('err_ip_Network');?>" msg_c="<?php echo _gettext('err_ip_RepeatIP');?>"  msg_nw="<?php echo _gettext('err_ip_Networknw');?>"></textarea>		
			        			<img src="/images/info.gif" class="img_public" title="<?=_gettext('remind_SupportedFormats'); ?>" tabindex="18"/>
			        		</div>
			        		<div id="tr_BypassFlowSum_div2_1"  style="display:none">
			        			<textarea tabindex="16" readonly="readonly" id="static_tr_BypassFlowSum2_1" class="isaddbook s2" maxlength="1280" msg="<?php echo _gettext('err_addbook');?>"></textarea>		
			        			<textarea name="source_address_content" id="static_tr_BypassFlowSum2hide_1" class="hide" tabindex="22"></textarea>		
			        		</div>
		        		</div>
		                <div id="base_type_box" style="display: none">
							<input type="hidden" name="auth_multiple_list_1" id="auth_multiple_list_1" value=""/>
							<div id="selectbox_1">
							  	<input type="text" tabindex="16" id="shownames_1" readonly="" class="input-define" placeholder="请选择" msg="认证方式不能为空" autocomplete="off">
								<ul id="auth_mul_1" style="z-index: 999; display: none;">
								  	<li>
									  	<label for="checkbox-01" class="label-check" id="l-1_1" onclick="setupCheck(this,1)">
										 	<input type="checkbox" class="chk_box"  id="checkbox-1_1" name="checkbox" value="4">
										 	视频终端						  
										</label>
								  	</li>
									<li>
									  	<label for="checkbox-01" class="label-check" id="l-1_2" onclick="setupCheck(this,1)">
											<input type="checkbox" class="chk_box" id="checkbox-1_2" name="checkbox" value="0">
											其他终端					  
										</label>									 
								  	</li>
									<li>
									  	<label for="checkbox-01" class="label-check" id="l-1_3" onclick="setupCheck(this,1)">
											<input type="checkbox" class="chk_box" id="checkbox-1_3" name="checkbox" value="1">
											windows		  
										</label>									 
								  	</li>
									<li>
									  	<label for="checkbox-01" class="label-check" id="l-1_4" onclick="setupCheck(this,1)">
											<input type="checkbox" class="chk_box" id="checkbox-1_4" name="checkbox" value="2">
											安卓终端				  
										</label>									 
								  	</li>
									<li>
									  	<label for="checkbox-01" class="label-check" id="l-1_5" onclick="setupCheck(this,1)">
											<input type="checkbox" class="chk_box" id="checkbox-1_5" name="checkbox" value="3">
											IOS终端
										</label>									 
								  	</li>
									<li>
									  	<label for="checkbox-01" class="label-check" id="l-1_6" onclick="setupCheck(this,1)">
											<input type="checkbox" class="chk_box" id="checkbox-1_6" name="checkbox" value="5">
											网络设备			  
										</label>									 
								  	</li>
									<li>
									  	<label for="checkbox-01" class="label-check" id="l-1_7" onclick="setupCheck(this,1)">
											<input type="checkbox" class="chk_box" id="checkbox-1_7" name="checkbox" value="6">
											linux				  
										</label>									 
								  	</li>
									<li>
									  	<label for="checkbox-01" class="label-check" id="l-1_8" onclick="setupCheck(this,1)">
											<input type="checkbox" class="chk_box" id="checkbox-1_4" name="checkbox" value="7">
											NVR
										</label>									 
								  	</li>
									<li>
									  	<label for="checkbox-01" class="label-check" id="l-1_9" onclick="setupCheck(this,1)">
											<input type="checkbox" class="chk_box" id="checkbox-1_9" name="checkbox" value="7">
											所有
										</label>									 
								  	</li>
								</ul>
							</div>
						</div>
		            </td>
		        </tr>
				<tr>
		            <th>脚本选择</th>
		            <td class="alignLeft">
		                <div>
							<input type="hidden" name="auth_multiple_list_2" id="auth_multiple_list_2" value=""/>
							<select name="group" id="group" style="display:none">
								<?php
									foreach ($gvm_task_group as $key=>$value) {
										if ($key == "0") {
											echo "<option selected=\"selected\" value=\"$key\">{$value['group_name']}</option>";
										}else {
											echo "<option value=\"$key\">{$value['group_name']}</option>";
										}
									}
								?>
							</select>
							<div id="selectbox_2">
							  	<input type="text" id="shownames_2" readonly="" class="input-define isNotEmpty" placeholder="请选择" msg="脚本选择不能为空" autocomplete="off" tabindex="18">
								<ul id="auth_mul_2" style="z-index: 998; display: none;">
								<?php 
									if(is_array($gvm_task_group)){
										$i=1;
										foreach($gvm_task_group as $k=>$v){
								
								?>
									<li>
									  	<label for="checkbox-02" class="label-check" id="l-2_<?=$v['group_id']?>" onclick="setupCheck(this,2)">
										 	<input type="checkbox" id="checkbox-2_<?=$v['group_id']?>" name="checkbox" value="<?php echo $k;?>">
										 	<?=$v['group_name']?>						  
										</label>
								  	</li>
								<?php $i++;}}?>
								  				
									
								</ul>
							</div>
						</div>
		            </td>
		        </tr>
				<tr>
				    <th>计划执行</th>
				    <td class="alignLeft">
						<input type="hidden" name="plan_now" id="plan_now" value="" />
						<input type="radio" value="0" name="plan_time" id="now" checked="checked" onclick="fn_set_plan()"/><label for="now">立即执行</label>&nbsp;
						<input type="radio" value="1" name="plan_time" id="day" onclick="fn_set_plan()" /><label for="day">按日(一次性)</label>&nbsp;
						<input type="radio" value="2" name="plan_time" id="week" onclick="fn_set_plan()"/><label for="week">按周(循环任务)</label>&nbsp;
						<input type="radio" value="3" name="plan_time" id="month" onclick="fn_set_plan()"/><label for="month">按月(循环任务)</label>&nbsp;
						<input type="radio" value="4" name="plan_time" id="everyday" onclick="fn_set_plan()"/><label for="everyday">每日执行，开始于：</label>
					</td>
				</tr>
				<tr id="for_day_tr" style="display: none;">
				    <th>选择日期</th>
				    <td class="alignLeft">
						<div id="for_day"><input id="minDate" readonly="readonly" class="text Wdate noEmpty" type="text" name="time_from" value="" autocomplete="off"/></div>
					</td>
				</tr>
				<tr id="for_week_tr" style="display: none;">
				    <th>选择日期</th>
				    <td class="alignLeft">						
						<div id="for_week">			
							<div id="week">								
								<a href="javascript:;" onclick="fn_sel_weekday('MO')" id="MO">周一</a>
								<a href="javascript:;" onclick="fn_sel_weekday('TU')" id="TU">周二</a>
								<a href="javascript:;" onclick="fn_sel_weekday('WE')" id="WE" >周三</a>
								<a href="javascript:;" onclick="fn_sel_weekday('TH')" id="TH">周四</a>
								<a href="javascript:;" onclick="fn_sel_weekday('FR')" id="FR">周五</a>
								<a href="javascript:;" onclick="fn_sel_weekday('SA')" id="SA">周六</a>
								<a href="javascript:;" onclick="fn_sel_weekday('SU')" id="SU">周日</a>
								<input type="hidden" name="plan_week" id="plan_week" value="" />								
							</div>							
						</div>	
						<input id="maxDate" readonly="readonly" class="text Wdate noEmpty week_time_from" type="text" name="week_time_from" value="" autocomplete="off"/>
					</td>
				</tr>
				<tr id="for_month_tr" style="display: none;">
				    <th>选择日期</th>
				    <td class="alignLeft">
						<div id="for_month">
			
						</div>
						<input id="monthDate" readonly="readonly" class="text Wdate noEmpty month_time_from" type="text" name="month_time_from" value="" autocomplete="off"/>						
					</td>
				</tr>	
				<tr id="for_everyday_tr" style="display: none;">
				    <th>选择日期</th>
				    <td class="alignLeft">
						<div id="for_everyday"><input id="everydayDate" readonly="readonly" class="text Wdate noEmpty" type="text" name="everyday_time_from" value="" autocomplete="off"/></div>
					</td>
				</tr>	
			</tbody>
		</table>
		
		
		<div class="tableFooter wtwo">
		    <span>快速链接</span>
		    <a href="#" id="addrBookLink">[<?=_gettext('addressBook');?>]</a>
		</div>
	</form>
</div>
<script type="text/javascript" src="/js/prototype.js"></script>
<script type="text/javascript" src="/js/base.js"></script>
<script type="text/javascript" src="/js/qin.js"></script>
<script language="javascript" src="/js/popup.js"></script>
<script type="text/javascript" src="/js/WdatePicker.js"></script>
<script type="text/javascript" src="/jqueryjs/auth.js"></script>
<script type="text/javascript">
	document.observe('dom:loaded',regDateInput);
	function regDateInput(){
		if($$("input.Wdate").length == 0) return;
		$$("input.Wdate").each(function(node){
			if(node.id == 'minDate' && $('minDate') ){
				node.observe('focus',function(){ WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss',isShowWeek:false,lang:'zh-cn'}); });
			}else if(node.id == 'maxDate' && $('maxDate')){
				node.observe('focus',function(){ WdatePicker({dateFmt:'HH:mm:ss',isShowWeek:false,lang:'zh-cn'}); });	
			}else if(node.id == 'monthDate' && $('monthDate')){
				node.observe('focus',function(){ WdatePicker({dateFmt:'HH:mm:ss',isShowWeek:false,lang:'zh-cn'}); });		
			}else if(node.id == 'everydayDate' && $('everydayDate')){				
				node.observe('focus',function(){ WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss',isShowWeek:false,lang:'zh-cn'}); });				
			}else{
				node.observe('focus',function(){ WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss',isShowWeek:false,lang:'zh-cn'}); });
			}
		});
	}	
	
	Event.observe(window,'load',function(){
		new ValidateForm('form1',[checkEmpty,checkNameCH]);
		inputTips('isIpRange',['<?=_gettext('All')?>']);
		Event.observe($("addrBookLink"),'click',showIframe1);
		Event.observe($("selectbox_1"),'click',showIframe2);
		Event.observe($("selectbox_2"),'click',showIframe3);	

		
	});
	
	function init_month() {
		var monthBtn = '<input type="hidden" name="plan_month" id="plan_month" value="" />'
		for (var btnIndex = 1; btnIndex < 33; btnIndex++) {
			if (btnIndex === 32) {
				monthBtn += '<a href="javascript:;" class="last_child" onclick="fn_sel_month(-1)" id="month_-1">最后一天</a>'
			} else {
				monthBtn += '<a href="javascript:;" onclick="fn_sel_month(' + btnIndex + ')" id="month_' + btnIndex + '">' + btnIndex + '</a>'
			}
		}
		document.getElementById("for_month").innerHTML = monthBtn;
	}
	init_month();
	
	function fn_sel_month(selectIndex) {
		var planMonth = $('plan_month').value;
		var selectMonths = [];
		if (planMonth !== '') {
			selectMonths = planMonth.split(',')
		}
		var index = selectMonths.indexOf(selectIndex+'')
		if (index >= 0) {
			selectMonths.splice(index, 1);
			$("month_"+ selectIndex).removeClassName('select_active');
		} else {
			selectMonths.push(selectIndex);
			$("month_" + selectIndex).addClassName('select_active');
		}
		$('plan_month').value = selectMonths.join(',');
	}
	
	function fn_sel_weekday(currentDay){
			var planWeek = $('plan_week').value;
			var selectWeekDays = [];
			if (planWeek !== '') {
				selectWeekDays = planWeek.split(',')
			}
			var index = selectWeekDays.indexOf(currentDay)
			if (index >= 0) {
				selectWeekDays.splice(index, 1);
				console.log($(this));
				$(currentDay).removeClassName('select_active');
			} else {				selectWeekDays.push(currentDay);					$(currentDay).addClassName('select_active');			}			$('plan_week').value = selectWeekDays.join(',');		}
	
	function fn_set_plan(){
		$("for_day_tr").hide();
		$("for_week_tr").hide();
		$("for_month_tr").hide();
		$("for_everyday_tr").hide();		
		$("minDate").hide();
		if($("day").checked == true){
			$("for_day_tr").show();
			$("minDate").show();
			$("minDate").focus();
		}else if($("week").checked == true){
			$("for_week_tr").show();
			$("maxDate").focus();
		}else if($("month").checked == true){
			$("for_month_tr").show();
			$("monthDate").focus();			
		}else if($("everyday").checked == true){
			$("for_everyday_tr").show();
			$("everydayDate").focus();			
		} else if ($("now").checked == true) {
			var current = new Date();
			var year = current.getFullYear();
			var month = dealData(current.getMonth() + 1);
			var date = dealData(current.getDate());
			var hours = dealData(current.getHours());
			var minutes = dealData(current.getMinutes());
			var seconds = dealData(current.getSeconds());
			
			$("plan_now").value = year+'-'+month+'-'+date+' '+hours+':'+minutes+':'+seconds;
		}
	}
	
	function dealData(value) {
		return value =  value > 9 ? value : '0' + value
	}
	
	function showIframe1(){
	    var pop=new Popup({ contentType:1,scrollType:'yes',isReloadOnClose:false,width:'750',height:'210'});
	    pop.setContent("contentUrl","/view/systemObject/addressBook/list.php?t=<?php echo $_GET['t']?>");
	    pop.setContent("title","<?=_gettext('addressBook');?>");
	    pop.build();
	    pop.show();
	}


	var showIframeGroupPop;
	function BypassFlowSum_click(ival){
		//var val = $("BypassFlowSum_select"+"_"+ival).value;		
		var val = $("ip_address_book").value;		
		var nameval="";
		if(val=="2"){
			var namearr=$('static_tr_BypassFlowSum2'+"_"+ival).value.split(/\n/g);
			for ( var i = 0; i < namearr.length; i++) {
				nameval+=namearr[i]+",";
			}
			popbook=new Popup({ contentType:1,scrollType:'yes',isReloadOnClose:false,width:'850',height:'320'});
			popbook.setContent("contentUrl","/view/VulnerabilityScan/ip_window.php"+"?names="+nameval.substring(0,nameval.length-1)+"&types="+ival);
			popbook.setContent("title","<?=_gettext('SelectedAddress');?>");
			popbook.build();
			popbook.show();
		}else if(val=="1"){
			document.body.style.overflow = 'hidden';
			showIframeGroupPop = new Popup({ contentType:1,scrollType:'yes',isReloadOnClose:false,width:'750',height:'400'});
			showIframeGroupPop.setContent("contentUrl","/model/selectCBUserGroup.php?userType=policy"+"&types="+ival);
			showIframeGroupPop.setContent("title","<?=_gettext('SelectGroup');?>");
			showIframeGroupPop.setContent("overflow",1);
			showIframeGroupPop.build();
			showIframeGroupPop.show();
		}
	}

	function showIframe2(){
		Event.stop(window.event);
		$("auth_mul_1").style.display="block";
		var val=$("auth_multiple_list_1").value;
		if(val!=''){
			var id=val.split('_');
			for(var i=0;i<id.length;i++){
				$("l_1_"+id[i]).addClassName("check-checked");
				$("l_1_"+id[i]).removeClassName("label-check");
			}
		}
	}
	function showIframe3(){
		Event.stop(window.event);
		$("auth_mul_2").style.display="block";
		var val=$("auth_multiple_list_2").value;
		if(val!=''){
			var id=val.split('_');
			for(var i=0;i<id.length;i++){
				$("l_2_"+id[i]).addClassName("check-checked");
				$("l_2_"+id[i]).removeClassName("label-check");
			}
		}
	}
 
	window.onclick = function(event) {
		$("auth_mul_1").style.display="none";
		$("auth_mul_2").style.display="none";
	}

 	function setupCheck(obj,eq){
	 	var val=$("auth_multiple_list_" + eq).value;
	 	var id=obj.id.split('_');
	 	if(obj.className=='label-check'){		 
			if(val!=''){
				var var_str=val.split('_');
				
				var indexof=var_str.indexOf(id[1]);
				 if(indexof==-1){
					if(val!=''){
						val+="_";
					}
					val+=id[1];
				} 
			}else{
				val+=id[1];
			}			 
			obj.addClassName("check-checked"); 
			obj.removeClassName("label-check");		
			
			//$("l-1_9").onclick = function(){
			//}
			
		}else{
			var var_str=val.split('_');
				
			var indexof=var_str.indexOf(id[1]);
			 	if(indexof!=-1){
				var_str.splice(indexof,1);
			}
			val=var_str.join("_");
			obj.removeClassName("check-checked"); 
			obj.addClassName("label-check");
		}
		$("auth_multiple_list_" + eq).value=val;
		disAuth3(eq);
 	}
	function disAuth3(eq) {
		var val =  $("auth_multiple_list_" + eq).value;
		if(eq == 1){
			//var auth_method_zh_type = eval("(" + '[{"value":"1","id":"pwdAuth","use_type":"-6","param":"pwd","name":"\u5bc6\u7801\u8ba4\u8bc1","style":""},{"value":"2","id":"smsAuth","use_type":"-6","param":"sms","name":"\u77ed\u4fe1\u8ba4\u8bc1","style":""},{"value":"3","id":"wechatAuth","use_type":"-6","param":"wechat","name":"\u5fae\u4fe1\u8ba4\u8bc1","style":""}]' + ")");
			
			var auth_method_zh_type = eval("(" + '[{"value":"1","name":"视频终端","style":""},{"value":"2","name":"其他终端","style":""},{"value":"3","name":"windows","style":""},{"value":"4","name":"安卓终端","style":""},{"value":"5","name":"IOS终端","style":""},{"value":"6","name":"网络设备","style":""},{"value":"7","name":"linux","style":""},{"value":"8","name":"NVR","style":""},{"value":"9","name":"所有","style":""}]' + ")");
			
		}else{
			var auth_method_zh_type = eval("(" + '<?php echo json_encode($gvm_tjson);?>' + ")");
			
		}
		// var auth_method_zh_type = eval("(" + '<?php echo json_encode($auth_method_zh_type);?>' + ")");
		
		var shownames='';
		var checkauth=val.split('_');
		for(var j=0;j<checkauth.length;j++){
			for(var i=0;i<auth_method_zh_type.length;i++){
				if(checkauth[j]==auth_method_zh_type[i].value){
					if(shownames!=''){
						shownames+=',';	
					}
					shownames+=auth_method_zh_type[i].name;
				}
			}
		}
		$("shownames_" + eq).value=shownames;
	}
	function changeBox(){
		$('base_type_box').hide();
		$('tr_BypassFlowSum_div1_1').hide();
		$('tr_BypassFlowSum_div2_1').hide();
		$('BypassFlowSum_span_1').hide();
		$("static_tr_BypassFlowSum1_1").removeClassName("isIp_addr");
		$("static_tr_BypassFlowSum1_1").removeClassName("isNotEmpty");
		$("static_tr_BypassFlowSum2_1").removeClassName("isNotEmpty");	
		$("shownames_1").removeClassName("isNotEmpty");				
		if($('base_type').checked == true){
			$('base_type_box').show();
			$("shownames_1").addClassName("isNotEmpty");
		}else if($('ip_address').checked == true){
			$('tr_BypassFlowSum_div1_1').show();			
			$("static_tr_BypassFlowSum1_1").addClassName("isIp_addr");
			$("static_tr_BypassFlowSum1_1").addClassName("isNotEmpty");	
			
		}else if($('ip_address_book').checked == true){
			$('tr_BypassFlowSum_div2_1').show();
			$('BypassFlowSum_span_1').show();
			$("static_tr_BypassFlowSum2_1").addClassName("isNotEmpty");
			
		}	
		
		/* if($('base_web').checked){
			$('base_web_box').show();
			$('base_type_box').hide();
		}
		else{
			$('base_type_box').show();
			$('base_web_box').hide();
		} */
	}
	function setDepositValue(val,ival){
		var arr=val.split(",");
		var objvalue="";
		for ( var i = 0; i < arr.length; i++) {
			objvalue+=arr[i]+"\n";
		}
		$("static_tr_BypassFlowSum2"+"_"+ival).value=objvalue;
		$("static_tr_BypassFlowSum2hide"+"_"+ival).value=objvalue;
	}
</script>
</body>
</html>
