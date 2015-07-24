function displayAccesskeys(){
	if(!document.getElementsByTagName || !document.createElement || !document.createTextNode) return false;
	// 取得文档中所有的a标签
	var links = document.getElementsByTagName("a");
	var akeys = new Array();
	// 遍历链接
	for (var i = 0; i < links.length; i++) {
		var current_link = links[i];
		// 如果没有accesskey属性继续循环
		if (!current_link.getAttribute("accesskey")) continue;
		// 取得accesskey的值
		var key = current_link.getAttribute("accesskey");
		// 得到链接文本
		var text = current_link.lastChild.nodeValue;
		// 把它们添加到数组
		akeys[key] = text;
	}
		// 创建列表
		var list = document.createElement("ul");
		// 遍历访问键
		for (key in akeys){
			var text = akeys[key];
			var str = key + ": " +text;
			var item = document.createElement("li");
			var item_text = document.createTextNode(str);
			item.appendChild(item_text);
			list.appendChild(item);
		}
		// 创建标题
		var header = document.createElement("h3");
		var header_text = document.createTextNode("Accesskeys");
		header.appendChild(header_text);
		// 插入到页面主体
		document.body.appendChild(header);
		document.body.appendChild(list);
}
addLoadEvent(displayAccesskeys);