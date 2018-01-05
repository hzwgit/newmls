$(function(){
	$('.ext_submit').click(function(){
		// 选取表单

		var form = $('#setPersonForm');
		// 获取表单数据
		var data = getFormData(form);
		//发送ajax请求
		$.post('handle',data,function(data){
			// console.log(data);
			if(data == 0){
				$('.setting_success').css({display:'block',color:'green'}).html('修改成功');
			}else if(data==1){
				$('.setting_success').css({display:'block',color:'red'}).html('修改失败');
			}
		});
	})

	function getFormData(form){
	var data = form.serialize();
	data = decodeURI(data);
	var arr = data.split('&');
	var item,key,value,newData={};
	for(var i=0;i<arr.length;i++){
		item = arr[i].split('=');
		key = item[0];
		value = item[1];
		if(key.indexOf('[]')!=-1){
			key = key.replace('[]','');
			if(!newData[key]){
				newData[key] = [];
			}
			newData[key].push(value);
		}else{
			newData[key] = value;
		}
	}
	return newData;
}

	$('#true_name').focus(function(){
		$(this).next().html('请填写你的真实姓名');
	}).blur(function(){
		$(this).next().html('');
	})

	$('#nickname').focus(function(){
		$(this).next().html('请更改你的昵称');
	}).blur(function(){
		$(this).next().html('');
	})

	


var shenArr=[/*"请选择省份/城市",*/"北京市","上海市","天津市","重庆市","香港特别行政区","澳门特别行政区","湖南","辽宁","河北","山东","河南","湖北","福建","四川","江西"];
		//自定义下标（属性）
		//shenArr["名称"]
		// shenArr["请选择省份/城市"]=["请选择城市/地区"];
		shenArr["北京市"]=["北京市"];
		shenArr["上海市"]=["上海市"];
		shenArr["天津市"]=["天津市"];
		shenArr["重庆市"]=["重庆市"];
		shenArr["香港特别行政区"]=["香港特别行政区"];
		shenArr["澳门特别行政区"]=["澳门特别行政区"];
		shenArr["福建"]=["福州市","厦门市","泉州市","漳州市","南平市","三明市","龙岩市","莆田市"];
		shenArr["湖南"]=["长沙市","株洲市","湘潭市","郴州市","益阳市","娄底市","衡阳市","常德市"];
		shenArr["辽宁"]=["沈阳市","大连市","抚顺市","鞍山市","铁岭市","本溪市","丹东市","锦州市"];
		shenArr["河北"]=["保定市","唐山市","邯郸市","邢台市","沧州市","衡水市","廊坊市","承德市"];
		shenArr["山东"]=["济南市","青岛市","威海市","潍坊市","菏泽市","济宁市","莱芜市","烟台市"];
		shenArr["河南"]=["洛阳市","焦作市","商丘市","信阳市","周口市","鹤壁市","安阳市","濮阳市"];
		shenArr["湖北"]=["武汉市","荆门市","汉口市","咸宁市","襄樊市","荆州市","黄石市","孝感市"];
		shenArr["江西"]=["南昌市","赣州市","上饶市","宜春市","吉安市","抚州市","萍乡市","九江市"];

$.each(shenArr,function(i,val){
				//添加下拉项
				$("select[name=provinceid]").append("<option value='"+val+"'>"+val+"</option>");
				
			});
		
			//市级下拉框绑定
			$("select[name=provinceid]").change(function(){
				var index=$(this).val();
				var shiArr=shenArr[index];
				$("select[name=city_id]").empty();
				$.each(shiArr,function(i,val){
					//添加下拉项
					$("select[name=city_id]").append("<option value='"+val+"'>"+val+"</option>");
				});
			});

})
