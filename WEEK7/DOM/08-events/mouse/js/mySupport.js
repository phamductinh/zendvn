// JavaScript Document

this.mySupport = function(){


	/*=======================================
	* PUBLIC FUNCTIONS
	*========================================*/
	this.pageXY = function(e){
		return pageXY(e);
	}
	
	this.mouseButton = function(e){
		return mouseButton(e);
	}
	
	this.disableRightClick = function(e){
		return disableRightClick(e);
	}
	
	/*=======================================
	* PRIVATE FUNCTIONS
	*========================================*/
	
	function disableRightClick(e){
		var myS = new mySupport();
		var vType = myS.mouseButton(e);
		//
		if(vType == "right"){
			alert("Right click disabled");
			return false;	
		}
	}
	
	function mouseButton(e){
		
		var vType = "left";
		if(typeof(e.which) == "number"){
			switch (e.which){
				case 1: vType = "left"; 
						break; 
				case 2: vType = "middle"; 
						break;
				case 3: vType = "right"; 
						break;
			}
		}else{
			switch (e.button){
				case 1: vType = "left"; 
						break; 
				case 4: vType = "middle"; 
						break;
				case 2: vType = "right"; 
						break;
			}
		}
		
		return vType;
	}
	
	function pageXY(e){
		if(typeof(e.pageX) == "undefined"){
			var pageX = e.clientX + document.documentElement.scrollLeft;
			var pageY = e.clientY + document.documentElement.scrollTop;
		}else{
			var pageX = e.pageX;
			var pageY = e.pageY;
		}	
		return {pageX: pageX, pageY: pageY}
	}
	
	
}
