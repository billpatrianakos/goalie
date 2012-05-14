// jTABS
(function($){
    $.fn.jTabs = function(options) {
        var defaults = {
            content: "div.content",
			equal_height: false,
			cookies: false,
			animate: false,
			effect: "fade",
			speed: 400
        };
        var options = $.extend(defaults, options);

        return this.each(function() {
            // object is the selected pagination element list
            obj = $(this);
            
			var objTabs = $(options.content);
			var number_of_items = obj.children("li").size();
			var tabIndex = [];
			var tabs = [];
			
			
			// create array of tab index items
			for (i=1;i<=number_of_items;i++) { tabIndex[i] = obj.find("li:nth-child("+i+")"); tabIndex[i].attr("title", i); }
			
			// create array tabs
			for (i=1;i<=number_of_items;i++) { tabs[i] = $(options.content + "> div:nth-child("+i+")"); }
			
			// if equal height on
			if(options.equal_height) {
				var maxHeight = 0;
				$(options.content).children("div").each(function(){
				   if ($(this).outerHeight() > maxHeight) { maxHeight = $(this).outerHeight(); }
				});
				$(options.content).height(maxHeight);
			}
			
			// initiate the current tab
			if (options.cookies) {
				if (getCookie("page")) { showTab(getCookie("page")); }
				else { setCookie("page",1,999); showTab(1);	}
			} else {
				showTab(1);
			}
			
			function showTab(num) {
				tabIndex[num].addClass("active").siblings().removeClass("active");
				if(!options.animate) { tabs[num].show().siblings().hide(); }
				else {
				
					switch (options.effect) {
						case "fade":
							tabs[num].fadeIn(options.speed).siblings().hide();
							break;
						case "slide":
							tabs[num].slideDown(options.speed).siblings().hide();
							break;
					}
				
				}
			}
			
            
			obj.find("li").live("click", function(e){
				e.preventDefault();
				var tab_num = $(this).attr("title");
				showTab(tab_num);
				if (options.cookies) setCookie("page",tab_num,999);
			});
			
			
			/* code to handle cookies */
			function setCookie(c_name,value,expiredays)
			{
				var exdate=new Date();exdate.setDate(exdate.getDate()+expiredays);document.cookie=c_name+"="+escape(value)+
((expiredays==null)?"":";expires="+exdate.toUTCString());
			}
			function getCookie(c_name)
			{
				if(document.cookie.length>0)
				{c_start=document.cookie.indexOf(c_name+"=");if(c_start!=-1)
				{c_start=c_start+c_name.length+1;c_end=document.cookie.indexOf(";",c_start);if(c_end==-1)c_end=document.cookie.length;return unescape(document.cookie.substring(c_start,c_end));}}
				return"";
			}
        });
        
       
    };
})(jQuery);

// jTIP
(function($){
    $.fn.jTip = function(options) {
        var defaults = {
            attr: "title",
			tip_class: "tip_window",
			y_coordinate: -40,
			x_coordinate: 20
        };
        var options = $.extend(defaults, options);

        return this.each(function() {
            // object is the selected pagination element list
            var obj = $(this);
			//obj.css({"position":"relative"});
			
			$("body").append('<div class="'+options.tip_class+'" style="position:absolute; z-index:999; left:-9999px;"></div>'); 
			tObj = $("."+options.tip_class);
			var title_value = obj.attr(options.attr);
			
			obj.hover(function(e) {	
				
				tObj.css({opacity:0.8, display:"none"}).fadeIn(400);
				obj.removeAttr(options.attr);
				tObj.css({'left':e.pageX+ options.y_coordinate, 'top':e.pageY+ options.y_coordinate}).html(title_value);
				
				//fading in the tip
				tObj.stop().fadeTo('10',0.8);
				
			}, function(e) {
			
				//Put back the title attribute's value
				obj.attr(options.attr,title_value);
				//Remove the appended tooltip template
				tObj.stop().fadeOut(400);
				
			});
			obj.mousemove(function(e) {
				//Move the tip with the mouse while moving
				tObj.css({'top':e.pageY + options.y_coordinate,'left': e.pageX + options.y_coordinate});
			});

			
		});
    };
})(jQuery);