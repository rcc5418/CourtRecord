var jvx_65e75fe341985NonMraidTagInMraidEnv = false;
var jvx_65e75fe341985dyPropsACK = false;

(function(){
	if(typeof MRAID_ENV != 'undefined'){
		var scriptEl = document.createElement('script');
		scriptEl.src = 'mraid.js';
		var docHead = document.getElementsByTagName('head');
		if(docHead && docHead[0]){
			docHead[0].appendChild(scriptEl);
		} else if(document.body){
			document.body.appendChild(scriptEl);
		}
		jvx_65e75fe341985NonMraidTagInMraidEnv = true;
	}
})();

if(typeof jvxObjectList == "undefined"){
	var jvxObjectList = ["jvx_65e75fe341985"];
}else{
	jvxObjectList.push("jvx_65e75fe341985");
}

//get the current executing script's parent node to append nodes
function getCurrScrNode(){
    var cScrNode = null;
    try{
        cScrNode = document.currentScript;
        if(cScrNode == undefined){
            scrNodes = document.getElementsByTagName("script");
            for(var i=0;i<scrNodes.length;i++){
                var scrSrc = scrNodes[i].src;
                if(scrSrc &&  scrSrc.indexOf("https://as.jivox.com/unit/unit_renderer.php?creativeUnitType=20&bDim=300x250&bUnitId=2000&siteId=3591c9f01ccaf9&campaignId=178383&es_pId=92K8OO&isDynamic=1&us_privacy=${US_PRIVACY}&gdpr=&gdpr_consent=&jvxVer=2&dspId=DFP-BM&cMacro=https://googleads.g.doubleclick.net/dbm/clk%3Fsa%3DL%26ai%3DCjol5b1znZeP_FdOc6toP5Ju8qA2usKXUddCw0pCEEv-FgIrVCRABILflhCFgyfarjNCkiBLIAQmoAwHIA5sEqgSxAk_QVOmmk-xT-B7WZNirTm9zoyiIfagL12tgNEhorV6I5ux0lnSuvAIhGg9grs5iBCocvxYhluTwgi2-lDUHpbHnWWJvdZkEyFNKlCZQZO0wymHkywFVEK1gwmS8bAKZ9s1C4UJn6dZPruAkpC3CT202QuFJ91zyPIMM2xPztK85d4osKAPEApWXpnRrVMaIaWjgOOJA_gfZyGiGg64Rq74Y56O0pFBzexd9xjmHpp-rUI3Au-Pn3x4-RSGEz9VCnz64Q-jKRsaxrm1OeCyFwAmDzl4hhL6tZqYXL8uHR2XdnY95Jw5Z8lD86TJDVRrWqG0AKIrUemz058YJV-qzjaSyphjY2Do-7QgVGULO7WbvcVdQaMRXbkK-3L-9fWSB4nzr-8PJgTM1n0GRS_v24bciwAT3iNTw1gTgBAOIBfK_mIdOkAYBoAZNgAex3vzUA6gH2baxAqgHjs4bqAeT2BuoB-6WsQKoB_6esQKoB6--sQKoB9XJG6gHpr4bqAeaBqgH89EbqAeW2BuoB6qbsQKoB4OtsQKoB-C9sQKoB_-esQKoB9-fsQLYBwDSCCQIgGEQARhfMgKKAjoJgECAwICAgKAoSL39wTpY0drI0djdhAPyCA1iaWRkZXItMzU0NzcwgAoEmAsByAsBgAwBqg0CVVOwE8SSyhbYEwPYFAHQFQH4FgGAFwE%26ae%3D1%26num%3D1%26cid%3DCAQSKQB7FLtqZnPQC7tvSL7OdDwULCJM1yf0NZPxZqoWfO2pAL4KvmBsNxIkGAE%26sig%3DAOD64_0_TmQRGTwJIu4E0pss-oLK3cJ6dQ%26client%3Dca-pub-5722610347565274%26dbm_c%3DAKAmf-AIzJv1mnwLKW0wq6z84c_3gAIz-7scRwoIlanuszXz0Oswhjbg6-Jf-aawKcK5g5VPKAU12YQIY_GgmObVWXYBd-_vmFLPhB3DgVhzUB95eQvOS9DCkayC4UqZVdFGtPrOQKzXHX1R26k2hJj58TfhTHWYUMpEEgwbAhGiH3gj0iSytMrPpHREffF6HueHhDQnbsLCqpt3j00tWADyvL7JJm-oZJdKbErujp6TR43YArml1C4%26cry%3D1%26dbm_d%3DAKAmf-B_GBZbarXmwj6jYlzXYk0OJCrbFNb6CeERZ1k1_SWo_fxUy3NdUZHC1jcnrG98NXDOTckjuL4ELasTEUV8wX7-V9d7o0gsIPPobP-qdBCgXNxF8S5JNujvuv6CDrusl4JA8XqtPUYphN9aK2bzQvm6zYnZiBb-r7RJQpTqpIJDtiP6PlcqTZPPxGryAn1UM1VpeI4a-nIuNFNFXUbMzfqifXQPnmDt2-L8S9_fuHAMmtfgAjh5Z6sAttuxdGeg1Qdd8YVfdplZUoXM2MJv_MFnEaOQBu67NfTtb1yKWe7MDu1aU_4YF-5FtaHNv7lHMsVRSXYaQzkRu6oRkCLwxiyiJ1Vdo1Cvbm6eJj4jGjVcd2Zuna7i_RiS0U6EMw5vm8SEDNwC7T4FOTl-LZRxXdoIC8MkGTJRYObDK0jdqpNpGyHfzj-JIflit-FNmRYtvvK5oXI1NBO8B1k-dIFIFvFc3q5-XZuD9ndiGwrwGFfxQW-fz5QyasCLLfR4yCaAcdVvNLkXDgemTf4YiKJCP2n9u5G4Tjlom9x_a3aREyYLS5nDtDlt02mf0saHxH68Xb0s8Knu04VpJsX8kodQAuMSGzRAULNAaBty4EFjgPoKi5Jc02k%26adurl%3D&r=1709661295360419") != -1){
                    cScrNode = scrNodes[i];
                }
            }
        }   
    } catch(e){
            }
    return cScrNode;
}

function createiFrameNode(obj){
    /* obj should be of this format - {'id':'frame1','src':'http://www.jivox.com/','width':'1024','height':'768'} */
    var ifrm = document.createElement('iframe');
        ifrm.id = obj.id;
        ifrm.src = obj.src;
        ifrm.width = obj.width;
        ifrm.height = obj.height;
        ifrm.style = obj.style;
        ifrm.frameborder = "0";
        ifrm.scrolling = "no";
        return ifrm;
}


	// when document.body is not there, inject document.write which will be default create the html structure
	if(document.body == null){
		document.write("<div id='jvxSkeletonRef_65e75fe341985' style='display:none;'></div>")
	}

var runtimeMacros = {"%JVX_PL_TIMESTAMP%":"ct","%JVX_PL_CLK_X%":"cx","%JVX_PL_CLK_Y%":"cy","%JVX_PL_CONT_W%":"aw","%JVX_PL_CONT_H%":"ah","%JVX_PL_TV%":"tv","%JVX_PL_MRAID%":"m"};

function replaceRunTimeMacros( trackerUrl, params){
	try{
		var runtimeMacroValues = {};
		runtimeMacroValues['ct'] = params.ct;
		runtimeMacroValues['ah'] = (jvx_65e75fe341985.baseHeight) ? jvx_65e75fe341985.baseHeight : (params['clientHeight'] ? params['clientHeight'] : "") ;
		runtimeMacroValues['aw'] =  jvx_65e75fe341985.baseWidth ? jvx_65e75fe341985.baseWidth : (params['clientWidth'] ? params['clientWidth'] : "");
		var tv = runtimeMacroValues['ct'] - jvx_65e75fe341985.layoutLoadedTime;
		runtimeMacroValues['cx'] = ( params['clientX'] ) ? params['clientX'] : '';
		runtimeMacroValues['cy'] = ( params['clientY'] ) ? params['clientY'] : '';
		runtimeMacroValues['tv'] =  tv;
		runtimeMacroValues['m'] =  0  ;

		var replacedTrackerURL = new URL(trackerUrl),
		searchParams = replacedTrackerURL.searchParams;

		searchParams.forEach((value, key) => {
			if(runtimeMacros[value] != undefined){
				searchParams.set(key,runtimeMacroValues[runtimeMacros[value]]);
			}
		});
		return replacedTrackerURL.toString();
	}
	catch(err){
		console.log("Unexpected error occured while replacing macros"+err);
		return trackerUrl;
	}
}

/*
JavaScript responsible for frame busting
*/
var jvx_65e75fe341985TraffickedInFrame = false,			// COM: should be true, if !busted and self != top
	jvx_65e75fe341985SafeFrameSupported = false,		// COM: should be true only when safeFrame is supported in the page
	jvx_65e75fe341985CanBustFromFrame = true,			// COM: should be false, when all busting method fails
	jvx_65e75fe341985InNestedFrame = false;				// COM: should be true, when tag trafficked inside nested frame

if(self != top){
	jvx_65e75fe341985TraffickedInFrame = true;
}

try{
		$sf.ext.register(300, 250);
		jvx_65e75fe341985SafeFrameSupported = true;
}catch(e){
	jvx_65e75fe341985SafeFrameSupported = false;
}


for(var jvxLoopVar=0; jvxLoopVar<1; jvxLoopVar++){



// Adding close button CSS style to document.head
var css = '.jvx_boxclose{padding:0px; margin:0px; top:1px; right:1px; position:absolute; width:20px; height:19px; display:block; text-decoration:none; color:#fff; background:#111; font-family:"Tahoma", Helvetica, sans-serif; text-align:center; font-size:20px; font-weight:bold; border-radius:50%; box-shadow:0px 0px 2px 0px #FFF; cursor:pointer; line-height:17px; opacity:1; border:2px Solid #999; -webkit-border:2px Solid #999;}',
	head = document.head || document.getElementsByTagName('head')[0],
	style = document.createElement('style');
		css += '.jvx_boxclose{ -webkit-transition:-webkit-transform .25s, opacity .25s; -moz-transition:-moz-transform .25s, opacity .25s; transition: transform .25s, opacity .25s; opacity:.55; -webkit-perspective: 1000; -webkit-backface-visibility: hidden; -moz-backface-visibility: hidden;backface-visibility: hidden;} .jvx_boxclose:hover{ -webkit-transform: rotate(360deg); -moz-transform: rotate(360deg); transform: rotate(360deg); opacity:1;}';
		style.type = 'text/css';
	if (style.styleSheet){
	  style.styleSheet.cssText = css;
	} else {
	  style.appendChild(document.createTextNode(css));
	}
	head.appendChild(style);




var adInVPForOneSec = false;
var timeoutHandle;
var timerRunning = false;

var adViewabilityDetectInit = function (visibilityThreshold) { 
    try {
        var boxElement;

        boxElement = document.querySelector('#adUnitContainer_65e75fe341985');

        createObserver();

        function createObserver() {
            var observer;
            var options = {
                root: null,
                rootMargin: "0px",
                threshold: [0, 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9, 1]
            };

            observer = new IntersectionObserver(handleIntersect, options);
            observer.observe(boxElement);
        }

        function handleIntersect(entries, observer) {
            entries.forEach(function (entry) {
                                if (entry.intersectionRatio > visibilityThreshold) {
                    if (!adInVPForOneSec && !timerRunning) {
                        timerRunning = true;
                        timeoutHandle = setTimeout(function () {
                            adInVPForOneSec = true;
                                                        if(typeof jvx_65e75fe341985 != "undefined")
                            jvx_65e75fe341985.recordEvent(73);
                            else 
                            recordEvent(73);
                                                    }, 1000);
                    }
                }
                if (timerRunning && entry.intersectionRatio < visibilityThreshold) {
                    window.clearTimeout(timeoutHandle);
                    timerRunning = false;
                }
            });
        }
    } catch(e){
            }
};
var CreativeUnit = (function(){
	var creativeResolveBeginTime = new Date();
	var isMSIE = false;
		var hasFlashPlugin = (function(){
		var flashPluginAvailable = false;
		if(navigator.mimeTypes && navigator.mimeTypes["application/x-shockwave-flash"]){
			flashPluginAvailable = navigator.mimeTypes["application/x-shockwave-flash"].enabledPlugin;
		} 
		if(!flashPluginAvailable && isMSIE){
			// if we are here, this is for MSIE only.
			try {
				var flashObj = new ActiveXObject('ShockwaveFlash.ShockwaveFlash');
				if(flashObj)
					flashPluginAvailable = true;
			} catch (ex) {
			}
		}		
		return flashPluginAvailable;
	})();
	
        
	    addEvent(window, "message", receiveHtml5Message, false);

	function receiveHtml5Message(e){
  		if(typeof e.data != "string"){
			return;
		}
        var s = e.data.split(':', 10);
		        if(s && s.length >= 2 && s[0] == 'jvx_65e75fe341985'){
			var msg = s[1];
			if(msg == 'openExpansion'){
									jvx_65e75fe341985.openClickThrough();
							} else if(msg == 'closeExpansion'){
				jvx_65e75fe341985.closeExpansion(false, false);
			} else if(msg == 'expansionLoaded'){
							} else if(msg == 'recordUIR'){
				jvx_65e75fe341985.UIRRecorded = true;
			} else if(msg == 'lastMouseLeave'){
				jvx_65e75fe341985.lastMLeaveId = s[2];
			} else if(msg == 'clearUIR'){
				clearTimeout(jvx_65e75fe341985.UIRTimer);
			} else if(msg == 'recordDwell'){
				if(!jvx_65e75fe341985.DwellRecorded){
					jvx_65e75fe341985.recordDwellEvent(49, jvx_65e75fe341985.DwellElapsedTime);
				}
			} 
												else if(msg=="dynamicProperties") {
                jvx_65e75fe341985.updateDYProperties(s[2],1);
							}
			else if(msg=="clickThroughUrl") { 
								jvx_65e75fe341985.clickTagURL = s.slice(2).flat(1).join(":");
			}
			else if(msg == "clickTrackers") {	
								jvx_65e75fe341985.clickTrackers =  s.slice(2).join(":").split(",").map(function(url){ return decodeURIComponent(url) });
				this.clickTrackers = jvx_65e75fe341985.clickTrackers;
			}
												                        else if(msg == "miniScrollerBgInfo"){
                var miniScrollerBgURL = decodeURIComponent(s[2]);
                jvx_65e75fe341985.fixedBgAstLeft = parseInt(s[3]);
                jvx_65e75fe341985.renderFixedPageBg(miniScrollerBgURL,s[3]);
            } 
		}
	}

	function postHtml5Message(winRef, msg){
		try{
			winRef.postMessage('jvx_65e75fe341985' + ':' + msg, "*");
		}catch(e){
			if(typeof(winRef.contentWindow) != 'undefined')
				winRef.contentWindow.postMessage('jvx_65e75fe341985' + ':' + msg, "*");
		}
	}
		function addEvent(el, event, fn, capture){
		if(el.addEventListener){
			el.addEventListener(event,fn,capture);
		}else{
			el.attachEvent("on" + event, fn);
		}
	}
	
	function removeEvent(el, event, fn, capture){
		if(el.removeEventListener){
			el.removeEventListener(event,fn,capture);
		}else{
			el.detachEvent("on" + event, fn);
		}
	}

	function getElById(id){
		return document.getElementById(id);
	}

	function getElByClass(cName){
		if(document.getElementsByClassName){				
			return document.getElementsByClassName(cName);
		}else if(document.querySelectorAll){	// For IE8
			return document.querySelectorAll(cName);
		}
	}

	function getBox(el){
		return el.getBoundingClientRect();
	}

	function getElemByQuerySelect(el){
		return document.querySelector('#'+el+', .'+el);
	}

	function getOffset(elem) {
		if (elem.getBoundingClientRect) {
			return getOffsetRect(elem);
		} else { // old browser
			return getOffsetSum(elem);
		}
	}

	function getOffsetSum(elem) {
	  var top=0, left=0;
	  while(elem) {
		top = top + parseInt(elem.offsetTop);
		left = left + parseInt(elem.offsetLeft);
		elem = elem.offsetParent;        
	  }
	   
	  return {top: top, left: left};
	}

	function getOffsetRect(elem) {
		var box = elem.getBoundingClientRect();
		
		var body = document.body;
		var docElem = document.documentElement;
		
		var scrollTop = window.pageYOffset || docElem.scrollTop || body.scrollTop;
		var scrollLeft = window.pageXOffset || docElem.scrollLeft || body.scrollLeft;
		
		var clientTop = docElem.clientTop || body.clientTop || 0;
		var clientLeft = docElem.clientLeft || body.clientLeft || 0;
		
		var top  = box.top +  scrollTop - clientTop;
		var left = box.left + scrollLeft - clientLeft;
		
		return { top: Math.round(top), left: Math.round(left) };
	}

	function getOffset(elem) {
		if (elem.getBoundingClientRect) {
			return getOffsetRect(elem);
		} else {
			return getOffsetSum(elem);
		}
	}

	/**
	* Creates and returns element from html chunk
	* Uses innerHTML to create an element
	*/
	var toElement = (function(){
		var div = document.createElement('div');
		return function(html){
			div.innerHTML = html;
			var el = div.firstChild;
			return div.removeChild(el);
		};
	})();

	var getElComputedStyle = function(){
		var func = null;
		if (document.defaultView && document.defaultView.getComputedStyle) {
			func = document.defaultView.getComputedStyle;
		} else if (typeof(document.body.currentStyle) !== "undefined") {
			func = function(element, anything) {
			  return element["currentStyle"];
			};
		}
		return function(element, style) {
			if(typeof func === 'function')
				return func(element, null)[style];
		}
	}();

    function hasClass(el, name){        
        var re = new RegExp('\\b' + name + '\\b');        
        return re.test(el.className);
    }  
	
    function addClass(el, name){
        if(!hasClass(el, name)){
			if(el.classList && el.classList.length > 0){
				el.className += ' ' + name;
			} else {
				el.className =  name;	
			}
        }	
    }   
	
    function removeClass(el, name){
        var re = new RegExp('\\b' + name + '\\b');                
        el.className = el.className.replace(re, '');        
    }
    
    function removeNode(el){
        el.parentNode.removeChild(el);
    }

	function createImg(obj){
		/* obj should be of this format - {'id':'image1','src':'http://www.jivox.com/image.jpg','width':'180','height':'150'} */
		var id = obj.id, 
			src = obj.src, 
			width = obj.width, 
			height = obj.height,
			str = '';

		str += '<img id="'+id+'" src="'+src+'" width="'+width+'" height="'+height+'" border="0" style="margin:0;padding:0;border:0;display:block;" />';
		return str;
	}
	
	function createSWF(obj){
		var id = obj.id, 
			src = obj.src, 
			width = obj.width, 
			height = obj.height,
			params = obj.params,
			paramsHTMLStr = '',
			str = '';

		for(var paramName in params){
			paramsHTMLStr += '<param name="'+paramName+'" value="'+params[paramName]+'" />';
		}

		str += '<object type="application/x-shockwave-flash" data="'+src+'" id="'+id+'" name="'+id+'" width="'+width+'" height="'+height+'" style="display:block;">';
		str += paramsHTMLStr;
		str += '</object>';
		return str;		
	}

	function createIframe(obj){
		/* obj should be of this format - {'id':'frame1','src':'http://www.jivox.com/','width':'1024','height':'768'} */
		var id = obj.id, 
			src = obj.src, 
			width = obj.width, 
			height = obj.height,
			str = '',
			customCss = '';
				if(!isEmpty(obj.styles)){
			var styles = obj.styles;
			customCss = ";";
			for (var name in styles) {
			  if(styles.hasOwnProperty(name)){
				  customCss += name+ ":" +styles[name]+ ";";
			   }
			}
		}	
		
		var	iframeStyleVal = "";
				iframeStyleVal += "margin:0;padding:0;border:0;display:block" + customCss;

		str += '<iframe id="'+id+'" name="'+id+'" src="'+src+'" width="'+width+'" height="'+height+'" frameborder="0" scrolling="no" allowtransparency="true" style="'+iframeStyleVal+'" onload="this.style.visibility=\'visible\';"></iframe>';
		return str;
	}

	function createFIF(obj){
		/* obj should be of this format - {'id':'frame1','src':'http://www.jivox.com/','width':'1024','height':'768'} */
		var id = obj.id, 
			src = obj.src, 
			width = obj.width, 
			height = obj.height,
			str = '';
		src = '<style>body{padding:0;margin:0;}</style>' + src;
		str += '<iframe id="'+id+'" name="'+id+'" srcdoc="'+src+'" src="about:blank" width="'+width+'" height="'+height+'" frameborder="0" scrolling="no" allowtransparency="true" style="margin:0;padding:0;border:0;visibility:hidden;" onload="this.style.visibility=\'visible\';"></iframe>';

		return str;
	}

    function createDivNode(id){
        var divNode =  document.createElement('div');
        divNode.id = id;
        return divNode;
    }

    function prependNode(cNode, pNode){
		pNode.insertBefore(cNode, pNode.firstChild);
    }
	
	function setPixel(pValue){
		var pxVal = pValue.toString();
		if(pxVal.indexOf("%") >= 0){
			return "";
		}
		return "px";
	}
	
	function clearNode(pNode, idPrefix){
		var i = 0, 
			elList = pNode.getElementsByTagName('div'),
			elLen = (elList) ? elList.length : 0;
		for (i = 0; i < elLen; i++) {
			var elId = elList[i].id;
			if(elId && elId.indexOf(idPrefix) == 0){
				pNode.removeChild(elList[i]);
								return;
			}
		}
	}

		function getPageURL(){
                var currPageURL = window.location.href;
        if(currPageURL != "about:blank" || currPageURL != ""){
            return currPageURL;
        }
        var parentWindow;
                		var resolvePageURL = function(){
            try{
                parentWindow = typeof parentWindow != "undefined" ? parentWindow['parent'] : window.parent;
                var pageUrlRef = parentWindow.location.href;
                if(pageUrlRef == "about:blank"){
                    resolvePageURL();
                } else if(pageUrlRef != ""){
                    currPageURL = pageUrlRef;
                }
            } catch(e){
                console.log("Error in getting the pageURL from resolvePageURL(): " + e);
            }
        }
        if(jvx_65e75fe341985TraffickedInFrame){
                        try{
                currPageURL = top.window.location.href;
            } catch(e){
                                console.log("Error in getting the pageURL from getPageURL(): " + e);
                resolvePageURL();
            }
        } 
				return currPageURL;
	}
	
	/**
     * Helper that takes object literal
     * and returns the object after removing blank values
     * @param {Object} sourceObj
     */
	function deleteBlankAttr(sourceObj){
		for (var i in sourceObj) {
			  if (sourceObj[i] == "" || sourceObj[i] == "undefined") {
				delete sourceObj[i];
			  }
			}
		return sourceObj;	
	}
	
	/**
     * Helper that takes object literal
     * and add all properties to element.style
     * @param {Element} node
     * @param {Object} styles
     */
    function addStyles(node, styles){
		if(!isEmpty(styles)){
			styles = deleteBlankAttr(styles);
			var fChar = "",
			nodeCSS = node.style.cssText;	
			if(nodeCSS){
				fChar = " ";
				if(nodeCSS[nodeCSS.length-1] != ";"){
				  nodeCSS += ";";	// For IE8 and less
				}
			}
			for (var name in styles) {
			  if(styles.hasOwnProperty(name)){
				  nodeCSS += fChar +name+ ": " +styles[name]+ ";";
			   }
			}
			if(nodeCSS) node.style.cssText = nodeCSS.toString();
		}
	}

	/**
     * Helper that takes object literal
     * and remove all properties to element.style
     * @param {Element} el
     * @param {Object} styles
     */
    function removeStyles(el, styles){
		if(!isEmpty(styles)){
		//	styles = deleteBlankAttr(styles);
			for (var name in styles) {
				if(styles.hasOwnProperty(name)){
					el.style[name] = '';
				}
			}
		}	
    }
	
	/**
     * Helper that creates a Div component with the Id passed 
     * and add default CSS class, innerText and extra styles to the component 
	 * and then append the component to the main element
     * @param {Main element to which new node has to appended } mainEl
	 * @param {Id for the new node} nodeId
	 * @param {default CSS class name to be added} className
	 * @param {innerText to the node} text
	 * @param {Object - styles to be added to the node} styleObj
     */
	function addDivComponent(mainEl, nodeId, className, text, styleObj)
	{
		var node = createDivNode(nodeId);
		node.innerHTML = text;							
		if(className != '')
			addClass(node, className);					
		if(!isEmpty(styleObj))
			addStyles(node, styleObj);
		return mainEl.appendChild(node);
	}
	
	function setAttributes(el, attrs)
	{
		for(var key in attrs) {
			el.setAttribute(key, attrs[key]);
		}
	}
	
	function getBrowserPrefix(browserName){
		var prefix = "";
		if(!isEmpty(browserName)){
			if((browserName == 'Chrome') || (browserName == 'Safari') || (browserName == 'iPhone') || (browserName == 'iPod') || (browserName == 'iPad'))
				prefix = "webkit";
			else if(browserName == 'Firefox')
				prefix = "moz";
			else if(browserName == 'Internet Explorer')
				prefix = "ms";
			else if(browserName == 'Opera')
				prefix = "o";
			else{
							}	
		}
		return prefix;
	}
	
	function getBrowserWindowProps() {
        var browserWidth = 0, browserHeight = 0;
		var doc = document,
			docElem = doc && doc.documentElement,
			docBody = doc && doc.body;
						
		 if(typeof (window.innerWidth) == 'number') {
			// For checking non-IE browsers Mozilla, Safari, Opera, Chrome.
			browserWidth = window.innerWidth;
		}
				//All IE except version 4
		else if (docElem && docElem.clientWidth) {
            browserWidth = docElem.clientWidth;
        }
				//IE 4
        else if (docBody && docBody.clientWidth) {
			 browserWidth = docBody.clientWidth;
		}
		
		 if(typeof (window.innerHeight) == 'number') {
			// For checking non-IE browsers Mozilla, Safari, Opera, Chrome.
			browserHeight = window.innerHeight;
		}
				//All IE except version 4
		else if (docElem && docElem.clientHeight) {
            browserHeight = docElem.clientHeight;
        }
				//IE 4
        else if (docBody && docBody.clientHeight) {
			 browserHeight = docBody.clientHeight;
		}
		
        return [browserWidth, browserHeight];
    };
	
	function getCenterAlignXY(objWidth,objHeight){ 
		var winPos = getBrowserWindowProps(),
			objX = '';
		if(window.innerWidth == document.documentElement.clientWidth) {
			objX = (winPos[0] - objWidth) / 2 ;
		} else {
			var scrollWidth = window.innerWidth - document.documentElement.clientWidth;
			objX = ((winPos[0]- scrollWidth) - objWidth) / 2 ;
		}	
		 var objY = (winPos[1] - objHeight) / 2 ;
		 		 objX = (objX < 0) ? 0 : objX;
		 		 objY = (objY < 0) ? 0 : objY;
		 return [objX,objY];
	}
	
	function isEmpty(obj) {
		
		// null and undefined are "empty"
		if (obj == null) return true;

		// Assume if it has a length property with a non-zero value
		if (obj.length === 0)  return true;
		if (obj.length && obj.length > 0)    return false;

		for (var key in obj) {
			if (Object.prototype.hasOwnProperty.call(obj, key)) return false;
		}
		return true;	
	}
	/* Function used to create an event manually with the help of CustomEvent constructor for the 'evtName' */
	function createCustomEvent(evtName){
		var event = null;
		if (typeof CustomEvent === 'function') {
			event = new CustomEvent(evtName)
		} else {	// For IE browser
			event = document.createEvent("CustomEvent");
			event.initCustomEvent(evtName, false, false, '');
		}
		if(!event) return;
		return event;
	}
	
		
	function fireTracker(url){
		var imgEl = document.createElement('img');
		var finalURL = "";
		if(!url.match("https://evs.jivox.com/jivox/serverAPIs/saveImpression.php")){
			var replaceCacheBuster0 = url.replace('[timestamp]', Math.random()); 
var replaceCacheBuster1 = replaceCacheBuster0.replace('[randomNumber]', Math.random()); 
var replaceCacheBuster2 = replaceCacheBuster1.replace('{cacheBuster}', Math.random()); 
var replaceCacheBuster3 = replaceCacheBuster2.replace('{RANDOMNUM}', Math.random()); 
var replaceCacheBuster4 = replaceCacheBuster3.replace('%%CACHEBUSTER%%', Math.random()); 
finalURL = replaceCacheBuster4;			//finalURL = replaceCacheBuster;
		}else{
			if(url.indexOf("?") == -1){
				finalURL = url + "?r=" + Math.random();
			}else{
				finalURL = url + "&r=" + Math.random();
			}
		}
					if(typeof jvx_65e75fe341985 != 'undefined' && url.match("https://evs.jivox.com/jivox/serverAPIs/saveImpression.php")){	//Add es_cgName and es_segName params only for the evs trackers URL not for the thirdParty trackers.
				finalURL += "&es_cgName_"+jvx_65e75fe341985.DYReportingKey;
                if(jvx_65e75fe341985.DYSegmentName != ""){
                    finalURL += "&es_segName_"+jvx_65e75fe341985.DYSegmentName;
                }
			}
				imgEl.src = finalURL;
			}       

	function setStylesFromStr(node, styleStr){
		if(styleStr == ''){
			return;
		}
		var splittedStyles = styleStr.split(";");
		var stylesLen = splittedStyles.length;
		if(stylesLen < 1){
			return;
		}
		for(var i=0;i<stylesLen;i++){
			var splittedRule = splittedStyles[i].split(":");
			if(splittedRule.length < 2){
				continue;
			}
			var prop = splittedRule[0];
			var val = splittedRule[1];
			node.style[prop] = val;
		}
	}

	function setOpacity(myElement, opacityValue) {
		if(typeof myElement.style.opacity !== 'undefined'){
			myElement.style.opacity = opacityValue/100; // Gecko/Opera
		} else {
			myElement.style.filter = "alpha(opacity="
				 + opacityValue + ")"; // IE			
		}
	}
		function setCloseBtnProp(btnSize){
		var prop = {};
		prop.width = btnSize;
		prop.height = btnSize - 1;
				prop.size = (btnSize < 20) ? btnSize - 3 : btnSize - 2;
		prop.lHeight = (btnSize < 20) ? btnSize - 3 : btnSize - 5;
				return prop;
	}
			function alignAdUnitContainer(sfLeft, sfTop){
		var cLeft = sfLeft + "px",
			cTop = sfTop + "px",
			cNode = getElById(jvx_65e75fe341985.adUnitContainerId);
		addStyles(cNode, {"left":cLeft, "top":cTop});
	}
	function renderAdInsideSafeFrame(animDir){
		if(jvx_65e75fe341985SafeFrameSupported){
			/* ------------- SafeFrame Settings--------------- */
						var ref = jvx_65e75fe341985,
				safeFrameExpX = ref.expansionWidth - ref.baseWidth,
				safeFrameExpY = ref.expansionHeight - ref.baseHeight,
				sfTop = parseInt('0'),
				sfLeft = parseInt('0'),
				sfX = parseInt(safeFrameExpX),
				sfY = parseInt(safeFrameExpY);
				
			if(sfTop < 0){
				// expansion to come from above base
				sfTop = -(sfTop);
			}else{
				// expansion to come from base level
				sfY = sfY + sfTop;
				sfTop = 0;
			}
			if(sfY < 0) sfY = 0;	// doesn't need to reduce the height of the safeframe iframe
			try{
									if(animDir == "SlideRight" || animDir == "DiagonalTopLeft" || animDir == "SlideBottom"){
						$sf.ext.expand({t:sfTop, l:0, b:sfY, r:sfX}, 0, false);
					} else {
						$sf.ext.expand({t:sfTop, l:sfX, b:sfY, r:0}, 0, false);
											}
							}catch(e){
							}
			/* ------------- End ------------- */
		}
	}
		function findPos(obj){
		var curleft = 0;
		var curtop = 0;
		var pageY = 0;
		var pageX = 0;
	 /* var rect = obj.getBoundingClientRect();
		curleft = rect.left;
		curtop =  rect.top; */
		if (obj.offsetParent) {
			do{
				curleft += obj.offsetLeft;
				curtop += obj.offsetTop;
			}while (obj = obj.offsetParent);
		}
		
		if(!isNaN(window.pageYOffset)) {
			pageX = window.pageXOffset;
			pageY = window.pageYOffset;
		} else {
			pageY=document.body.scrollTop || document.documentElement.scrollTop;
			pageX=document.body.scrollLeft || document.documentElement.scrollLeft;
		}
		return [curleft,curtop,pageX,pageY];
	}
		function expandFromVP(expObj){
		var vpStyles = findPos(getElById(jvx_65e75fe341985.adUnitContainerId)),
			vpTop = "", vpLeft = "";
				var centerAlign = getCenterAlignXY(expObj.expWidth, expObj.expHeight);
		vpTop = parseInt(vpStyles[3]);
		if(expObj.animationDirection == "SlideLeft" || expObj.animationDirection == "SlideInRight"
		 || expObj.animationDirection == "DiagonalTopRight" || expObj.animationDirection == "SlideInDiagonalRight"
		 || (expObj.expansionOpen && (expObj.animationDirection == "SlideBottom" || expObj.animationDirection == "SlideInTop"))){
		 
			vpLeft = parseInt(centerAlign[0]) + parseInt(expObj.expWidth);
		}else{
			vpLeft = parseInt(centerAlign[0]);
		}
				
		return [vpLeft, vpTop];
	}
			// return CSS styles array for expansion unit animation
	function createStyleObject(obj){
		var transL = "", transT = "", transB = "", transR = "",
			overflowVal = "", transPos = "",
			transStr = "all "+ obj.animationSpeed +"s linear",
			transW = obj.expWidth + "px", 
			transH = obj.expHeight + "px",
			bLeft = Math.round(obj.baseBox.left),
			bTop = Math.round(obj.baseBox.top),
			expTopOffset = parseInt("0"),
			expLeftOffset = parseInt("0");
									transPos = "absolute";
							
				
				overflowVal = "hidden";
				
		switch(obj.animationDirection){
			case "SlideLeft":
			case "SlideInRight":
			case "DiagonalTopRight":
			case "SlideInDiagonalRight":
			case "DiagonalBottomRight":
			case "SlideBottom":
			case "SlideInTop":
				if(obj.animationDirection == "DiagonalTopRight" || obj.animationDirection == "SlideInDiagonalRight"
					|| obj.animationDirection == "DiagonalBottomRight"){
										transW = "0px";
					transH = "0px";
				} else if(obj.animationDirection == "SlideBottom" || obj.animationDirection == "SlideInTop"){
										
					transH = "0px";
										transStr = "height "+ obj.animationSpeed +"s linear";
										
									} else {
										transW = "0px";
					transStr = "width .5s linear, left .5s linear";
				}
				if(!obj.preStyleExpansion){
										var width = obj.bWidth;
					if(!obj.expansionOpen && (lastAnimDir == "SlideRight" || lastAnimDir == "DiagonalTopLeft") && (obj.animationDirection == "SlideInRight" || obj.animationDirection == "SlideInDiagonalRight")){
						if(obj.expWidth != obj.bWidth){
							width = obj.expWidth;
						}
					}
					if(obj.insertExpansionTo != "adUnitContainer"){
						var left = "";
						if(!obj.alignToVP){
							if(!obj.expansionOpen && (obj.animationDirection == "SlideBottom" || 
														obj.animationDirection == "SlideInTop")){
								left = "";
							} else {
								left = parseInt(bLeft) + width;
								transL = left - expLeftOffset + "px";
							}
						} else {
							if(!obj.expansionOpen && (obj.animationDirection == "SlideBottom" ||
																				obj.animationDirection == "SlideTop")){

								left = parseInt(bLeft);
							}else{
								if(obj.animationDirection != "SlideBottom" && obj.animationDirection != "SlideInTop")
									left = parseInt(bLeft) + width;
								else
									left = parseInt(bLeft);
							}
							transL = left - expLeftOffset + "px";
						}
						var winDim = getBrowserWindowProps();
																		transT = bTop + expTopOffset + 'px';
																	} else {
												var left = "";
						if(!obj.alignToVP){
							if(!obj.expansionOpen && obj.animationDirection == "SlideBottom" ||
														obj.animationDirection == "SlideInTop"){
							//	left = "";
							} else {
								left = width;
								transL = left - expLeftOffset + "px";
							}
						} else {
							if(!obj.expansionOpen && (obj.animationDirection == "SlideBottom" ||
																				obj.animationDirection == "SlideInTop")){
							//	left = "";
							} else {
								if(obj.animationDirection != "SlideBottom" && obj.animationDirection != "SlideInTop"){
									left = width;
									transL = left - expLeftOffset + "px";
								}
							}	
						}
												
												transT = expTopOffset + 'px';
											}
									}
				break;
			case "SlideRight":
			case "SlideInLeft":
			case "DiagonalTopLeft":
			case "SlideInDiagonalLeft":
			
				if(obj.animationDirection == "DiagonalTopLeft" || obj.animationDirection == "SlideInDiagonalLeft"){
										transW = "0px";
					transH = "0px";
				} else if(obj.animationDirection == "SlideRight" || obj.animationDirection == "SlideInLeft"){
																transW = "0px";
						transStr = "width "+ obj.animationSpeed +"s linear";
									} else if(obj.animationDirection == "SlideBottom" || obj.animationDirection == "SlideInTop"){
										
					transH = "0px";
										transStr = "height "+ obj.animationSpeed +"s linear";
										
									}
				
				if(!obj.preStyleExpansion){
										var el = getElById(obj.expContainerId);
					if(obj.insertExpansionTo != "adUnitContainer"){
																					var left = (el.style.left) ? parseInt(el.style.left) : parseInt(bLeft);
																			
												transL = left - expLeftOffset + "px";
												transT = bTop + expTopOffset + 'px';
					} else {
																					var left = (el.style.left) ? parseInt(el.style.left) : parseInt(bLeft);
																									transL = left - expLeftOffset + 'px';
												transT = expTopOffset + 'px';
					}
									}
				break;
			case "Center":
								var startDim = 	getCenterAlignXY(0, 0);
				transW = "0px";
				transH = "0px";
								transL = parseInt(startDim[0]) + expLeftOffset + "px";
								transT = parseInt(startDim[1]) + expTopOffset + "px";
				break;
			case "SlideTop":
			case "SlideInBottom":
								transH = "0px";
								break;
			default:
								break;	
		}
		
				
				
				
		if(0){
			transB = 0 + expTopOffset + "px";
			transT = "";
		}
		var browserPrefixTransParam = "-" + obj.browserPrefix + "-transition",
			browserPrefixParam_1 = "-" + obj.browserPrefix + "-perspective",
			browserPrefixParam_2 = "-" + obj.browserPrefix + "-backface-visibility";
			
		/* Creating style object */	
		var styleObj = {
					'overflow'				: overflowVal,
					'width'					: transW,
					'height'				: transH,
					'top'					: transT,
					'left'					: transL,
					'bottom'				: transB,
					
					'transition'					: transStr,					
					'position'				: transPos
				};
		
				
				styleObj[browserPrefixTransParam] = transStr;
		styleObj[browserPrefixParam_1] = 1000;
		styleObj[browserPrefixParam_2] = "hidden";
				lastAnimDir = obj.animationDirection;
		return styleObj;
	}
	
		
		
		
		
	
	function mraidHandleOnViewable(viewable){
		jvxMraidIsShown = viewable;		 
			if(!jvxMraidIsShown || getElById(jvx_65e75fe341985.baseContainerId)){
				return; 
			}
		jvx_65e75fe341985.init();
		handleMraidViewableImprFiring();
	}
	
	function mraidHandleViewableChange(viewable){
		mraidHandleOnViewable(viewable);
	}

	//fire viewable impression 
	function handleMraidViewableImprFiring(){
		if (!adInVPForOneSec && !timerRunning) {
			timerRunning = true;
			var timeoutHandle = setTimeout(function () {
				adInVPForOneSec = true;
				jvx_65e75fe341985.recordEvent(74);
			}, 1000);
		}
	}

	function validateVal(val){
		return (val == undefined || val == "" || val == 0) ? false : true; 
	};

	/**
	 * Constructor Function / Class for the Creative Unit
	 */
	function CreativeUnit(uniqId){

	    this.id = uniqId;  
		this.playerParamsMap = {"reportingURL":"https:\/\/evs.jivox.com","creativeUnitType":"20","bDim":"300x250","bUnitId":"2000","siteId":"3591c9f01ccaf9","campaignId":"178383","es_pId":"92K8OO","isDynamic":"1","us_privacy":"${US_PRIVACY}","gdpr":"","gdpr_consent":"","jvxVer":"2","dspId":"DFP-BM","cMacro":"https:\/\/googleads.g.doubleclick.net\/dbm\/clk?sa=L&ai=Cjol5b1znZeP_FdOc6toP5Ju8qA2usKXUddCw0pCEEv-FgIrVCRABILflhCFgyfarjNCkiBLIAQmoAwHIA5sEqgSxAk_QVOmmk-xT-B7WZNirTm9zoyiIfagL12tgNEhorV6I5ux0lnSuvAIhGg9grs5iBCocvxYhluTwgi2-lDUHpbHnWWJvdZkEyFNKlCZQZO0wymHkywFVEK1gwmS8bAKZ9s1C4UJn6dZPruAkpC3CT202QuFJ91zyPIMM2xPztK85d4osKAPEApWXpnRrVMaIaWjgOOJA_gfZyGiGg64Rq74Y56O0pFBzexd9xjmHpp-rUI3Au-Pn3x4-RSGEz9VCnz64Q-jKRsaxrm1OeCyFwAmDzl4hhL6tZqYXL8uHR2XdnY95Jw5Z8lD86TJDVRrWqG0AKIrUemz058YJV-qzjaSyphjY2Do-7QgVGULO7WbvcVdQaMRXbkK-3L-9fWSB4nzr-8PJgTM1n0GRS_v24bciwAT3iNTw1gTgBAOIBfK_mIdOkAYBoAZNgAex3vzUA6gH2baxAqgHjs4bqAeT2BuoB-6WsQKoB_6esQKoB6--sQKoB9XJG6gHpr4bqAeaBqgH89EbqAeW2BuoB6qbsQKoB4OtsQKoB-C9sQKoB_-esQKoB9-fsQLYBwDSCCQIgGEQARhfMgKKAjoJgECAwICAgKAoSL39wTpY0drI0djdhAPyCA1iaWRkZXItMzU0NzcwgAoEmAsByAsBgAwBqg0CVVOwE8SSyhbYEwPYFAHQFQH4FgGAFwE&ae=1&num=1&cid=CAQSKQB7FLtqZnPQC7tvSL7OdDwULCJM1yf0NZPxZqoWfO2pAL4KvmBsNxIkGAE&sig=AOD64_0_TmQRGTwJIu4E0pss-oLK3cJ6dQ&client=ca-pub-5722610347565274&dbm_c=AKAmf-AIzJv1mnwLKW0wq6z84c_3gAIz-7scRwoIlanuszXz0Oswhjbg6-Jf-aawKcK5g5VPKAU12YQIY_GgmObVWXYBd-_vmFLPhB3DgVhzUB95eQvOS9DCkayC4UqZVdFGtPrOQKzXHX1R26k2hJj58TfhTHWYUMpEEgwbAhGiH3gj0iSytMrPpHREffF6HueHhDQnbsLCqpt3j00tWADyvL7JJm-oZJdKbErujp6TR43YArml1C4&cry=1&dbm_d=AKAmf-B_GBZbarXmwj6jYlzXYk0OJCrbFNb6CeERZ1k1_SWo_fxUy3NdUZHC1jcnrG98NXDOTckjuL4ELasTEUV8wX7-V9d7o0gsIPPobP-qdBCgXNxF8S5JNujvuv6CDrusl4JA8XqtPUYphN9aK2bzQvm6zYnZiBb-r7RJQpTqpIJDtiP6PlcqTZPPxGryAn1UM1VpeI4a-nIuNFNFXUbMzfqifXQPnmDt2-L8S9_fuHAMmtfgAjh5Z6sAttuxdGeg1Qdd8YVfdplZUoXM2MJv_MFnEaOQBu67NfTtb1yKWe7MDu1aU_4YF-5FtaHNv7lHMsVRSXYaQzkRu6oRkCLwxiyiJ1Vdo1Cvbm6eJj4jGjVcd2Zuna7i_RiS0U6EMw5vm8SEDNwC7T4FOTl-LZRxXdoIC8MkGTJRYObDK0jdqpNpGyHfzj-JIflit-FNmRYtvvK5oXI1NBO8B1k-dIFIFvFc3q5-XZuD9ndiGwrwGFfxQW-fz5QyasCLLfR4yCaAcdVvNLkXDgemTf4YiKJCP2n9u5G4Tjlom9x_a3aREyYLS5nDtDlt02mf0saHxH68Xb0s8Knu04VpJsX8kodQAuMSGzRAULNAaBty4EFjgPoKi5Jc02k&adurl=","r":"1709661295360419","serverURL":"https:\/\/as.jivox.com","expandedUnitPlayerVolume":"0"};
		this.campaignId = '178383';
		this.siteId = '3591c9f01ccaf9';
		this.placementId = '92K8OO';
		this.creativeUnitType = '20';
		this.baseDim = '300x250';
		this.expDim = '';
				this.asyncTaskList = {};
		this.asyncTaskCount = 0;
		this.asyncCompletedTaskCount = 0;
								
                				this.browserName = 'Chrome';
		this.browserVersion = '122.0.0.0';
								this.clickTagURL = 'https://googleads.g.doubleclick.net/dbm/clk?sa=L&ai=Cjol5b1znZeP_FdOc6toP5Ju8qA2usKXUddCw0pCEEv-FgIrVCRABILflhCFgyfarjNCkiBLIAQmoAwHIA5sEqgSxAk_QVOmmk-xT-B7WZNirTm9zoyiIfagL12tgNEhorV6I5ux0lnSuvAIhGg9grs5iBCocvxYhluTwgi2-lDUHpbHnWWJvdZkEyFNKlCZQZO0wymHkywFVEK1gwmS8bAKZ9s1C4UJn6dZPruAkpC3CT202QuFJ91zyPIMM2xPztK85d4osKAPEApWXpnRrVMaIaWjgOOJA_gfZyGiGg64Rq74Y56O0pFBzexd9xjmHpp-rUI3Au-Pn3x4-RSGEz9VCnz64Q-jKRsaxrm1OeCyFwAmDzl4hhL6tZqYXL8uHR2XdnY95Jw5Z8lD86TJDVRrWqG0AKIrUemz058YJV-qzjaSyphjY2Do-7QgVGULO7WbvcVdQaMRXbkK-3L-9fWSB4nzr-8PJgTM1n0GRS_v24bciwAT3iNTw1gTgBAOIBfK_mIdOkAYBoAZNgAex3vzUA6gH2baxAqgHjs4bqAeT2BuoB-6WsQKoB_6esQKoB6--sQKoB9XJG6gHpr4bqAeaBqgH89EbqAeW2BuoB6qbsQKoB4OtsQKoB-C9sQKoB_-esQKoB9-fsQLYBwDSCCQIgGEQARhfMgKKAjoJgECAwICAgKAoSL39wTpY0drI0djdhAPyCA1iaWRkZXItMzU0NzcwgAoEmAsByAsBgAwBqg0CVVOwE8SSyhbYEwPYFAHQFQH4FgGAFwE&ae=1&num=1&cid=CAQSKQB7FLtqZnPQC7tvSL7OdDwULCJM1yf0NZPxZqoWfO2pAL4KvmBsNxIkGAE&sig=AOD64_0_TmQRGTwJIu4E0pss-oLK3cJ6dQ&client=ca-pub-5722610347565274&dbm_c=AKAmf-AIzJv1mnwLKW0wq6z84c_3gAIz-7scRwoIlanuszXz0Oswhjbg6-Jf-aawKcK5g5VPKAU12YQIY_GgmObVWXYBd-_vmFLPhB3DgVhzUB95eQvOS9DCkayC4UqZVdFGtPrOQKzXHX1R26k2hJj58TfhTHWYUMpEEgwbAhGiH3gj0iSytMrPpHREffF6HueHhDQnbsLCqpt3j00tWADyvL7JJm-oZJdKbErujp6TR43YArml1C4&cry=1&dbm_d=AKAmf-B_GBZbarXmwj6jYlzXYk0OJCrbFNb6CeERZ1k1_SWo_fxUy3NdUZHC1jcnrG98NXDOTckjuL4ELasTEUV8wX7-V9d7o0gsIPPobP-qdBCgXNxF8S5JNujvuv6CDrusl4JA8XqtPUYphN9aK2bzQvm6zYnZiBb-r7RJQpTqpIJDtiP6PlcqTZPPxGryAn1UM1VpeI4a-nIuNFNFXUbMzfqifXQPnmDt2-L8S9_fuHAMmtfgAjh5Z6sAttuxdGeg1Qdd8YVfdplZUoXM2MJv_MFnEaOQBu67NfTtb1yKWe7MDu1aU_4YF-5FtaHNv7lHMsVRSXYaQzkRu6oRkCLwxiyiJ1Vdo1Cvbm6eJj4jGjVcd2Zuna7i_RiS0U6EMw5vm8SEDNwC7T4FOTl-LZRxXdoIC8MkGTJRYObDK0jdqpNpGyHfzj-JIflit-FNmRYtvvK5oXI1NBO8B1k-dIFIFvFc3q5-XZuD9ndiGwrwGFfxQW-fz5QyasCLLfR4yCaAcdVvNLkXDgemTf4YiKJCP2n9u5G4Tjlom9x_a3aREyYLS5nDtDlt02mf0saHxH68Xb0s8Knu04VpJsX8kodQAuMSGzRAULNAaBty4EFjgPoKi5Jc02k&adurl=https%3A%2F%2Fwww.nesl.com%2Fcareers%2F%3Futm_source%3Dpamg%26utm_medium%3Ddisplay%26utm_campaign%3Dpamg_network_video_recruitment%26utm_content%3Dawareness';
		this.clickTrackers = [];
		this.adUnitContainerId = 'adUnitContainer' + uniqId;
		this.adUnitContainerWrapperId = 'adUnitContainerWrapper' + uniqId;
		this.baseContainerId = 'baseContainer' + uniqId;
		this.baseId = 'jvxBase' + uniqId;
		this.base2Id = 'jvxBase' + uniqId + '0';
		this.baseCloseId = 'baseClose' + uniqId;
		this.baseBgId = 'baseBg' + uniqId;
		this.baseBg2Id = 'baseBg' + uniqId + '0';
		this.expansionContainerId = 'expansionContainer' + uniqId;
		this.expansionId = 'expansion' + uniqId;
		this.expansion2Id = 'expansion' + uniqId + '0';
		this.expansionBgId = 'expansionBg' + uniqId;
		this.logContainerId = 'logContainer' + uniqId;
		this.closeExpansionId = 'closeExpansion' + uniqId;
		this.expansionLoaderId = 'expansionLoader' + uniqId;
		this.baseInterceptorId = 'baseInterceptor' + uniqId;
		this.expInterceptorId = 'expInterceptor' + uniqId;
		this.base2InterceptorId = 'baseInterceptor' + uniqId + '0';
		this.maskId = 'mask' + uniqId;
        this.fixedPageBgId = 'fixedPageBg' + uniqId;
		this.loaderId = 'loader' + uniqId;
		this.iBusterFrame = null;
		/*Smooth responsive and stretch variables*/
				this.baseType = 'html';
		this.baseHasLayout = '1';
		this.baseURL = 'https://as.jivox.com/unit/layout_renderer.php?creativeUnitType=20&bDim=300x250&bUnitId=2000&siteId=3591c9f01ccaf9&campaignId=178383&es_pId=92K8OO&isDynamic=1&us_privacy=%24%7BUS_PRIVACY%7D&gdpr=&gdpr_consent=&jvxVer=2&dspId=DFP-BM&cMacro=https%3A%2F%2Fgoogleads.g.doubleclick.net%2Fdbm%2Fclk%3Fsa%3DL%26ai%3DCjol5b1znZeP_FdOc6toP5Ju8qA2usKXUddCw0pCEEv-FgIrVCRABILflhCFgyfarjNCkiBLIAQmoAwHIA5sEqgSxAk_QVOmmk-xT-B7WZNirTm9zoyiIfagL12tgNEhorV6I5ux0lnSuvAIhGg9grs5iBCocvxYhluTwgi2-lDUHpbHnWWJvdZkEyFNKlCZQZO0wymHkywFVEK1gwmS8bAKZ9s1C4UJn6dZPruAkpC3CT202QuFJ91zyPIMM2xPztK85d4osKAPEApWXpnRrVMaIaWjgOOJA_gfZyGiGg64Rq74Y56O0pFBzexd9xjmHpp-rUI3Au-Pn3x4-RSGEz9VCnz64Q-jKRsaxrm1OeCyFwAmDzl4hhL6tZqYXL8uHR2XdnY95Jw5Z8lD86TJDVRrWqG0AKIrUemz058YJV-qzjaSyphjY2Do-7QgVGULO7WbvcVdQaMRXbkK-3L-9fWSB4nzr-8PJgTM1n0GRS_v24bciwAT3iNTw1gTgBAOIBfK_mIdOkAYBoAZNgAex3vzUA6gH2baxAqgHjs4bqAeT2BuoB-6WsQKoB_6esQKoB6--sQKoB9XJG6gHpr4bqAeaBqgH89EbqAeW2BuoB6qbsQKoB4OtsQKoB-C9sQKoB_-esQKoB9-fsQLYBwDSCCQIgGEQARhfMgKKAjoJgECAwICAgKAoSL39wTpY0drI0djdhAPyCA1iaWRkZXItMzU0NzcwgAoEmAsByAsBgAwBqg0CVVOwE8SSyhbYEwPYFAHQFQH4FgGAFwE%26ae%3D1%26num%3D1%26cid%3DCAQSKQB7FLtqZnPQC7tvSL7OdDwULCJM1yf0NZPxZqoWfO2pAL4KvmBsNxIkGAE%26sig%3DAOD64_0_TmQRGTwJIu4E0pss-oLK3cJ6dQ%26client%3Dca-pub-5722610347565274%26dbm_c%3DAKAmf-AIzJv1mnwLKW0wq6z84c_3gAIz-7scRwoIlanuszXz0Oswhjbg6-Jf-aawKcK5g5VPKAU12YQIY_GgmObVWXYBd-_vmFLPhB3DgVhzUB95eQvOS9DCkayC4UqZVdFGtPrOQKzXHX1R26k2hJj58TfhTHWYUMpEEgwbAhGiH3gj0iSytMrPpHREffF6HueHhDQnbsLCqpt3j00tWADyvL7JJm-oZJdKbErujp6TR43YArml1C4%26cry%3D1%26dbm_d%3DAKAmf-B_GBZbarXmwj6jYlzXYk0OJCrbFNb6CeERZ1k1_SWo_fxUy3NdUZHC1jcnrG98NXDOTckjuL4ELasTEUV8wX7-V9d7o0gsIPPobP-qdBCgXNxF8S5JNujvuv6CDrusl4JA8XqtPUYphN9aK2bzQvm6zYnZiBb-r7RJQpTqpIJDtiP6PlcqTZPPxGryAn1UM1VpeI4a-nIuNFNFXUbMzfqifXQPnmDt2-L8S9_fuHAMmtfgAjh5Z6sAttuxdGeg1Qdd8YVfdplZUoXM2MJv_MFnEaOQBu67NfTtb1yKWe7MDu1aU_4YF-5FtaHNv7lHMsVRSXYaQzkRu6oRkCLwxiyiJ1Vdo1Cvbm6eJj4jGjVcd2Zuna7i_RiS0U6EMw5vm8SEDNwC7T4FOTl-LZRxXdoIC8MkGTJRYObDK0jdqpNpGyHfzj-JIflit-FNmRYtvvK5oXI1NBO8B1k-dIFIFvFc3q5-XZuD9ndiGwrwGFfxQW-fz5QyasCLLfR4yCaAcdVvNLkXDgemTf4YiKJCP2n9u5G4Tjlom9x_a3aREyYLS5nDtDlt02mf0saHxH68Xb0s8Knu04VpJsX8kodQAuMSGzRAULNAaBty4EFjgPoKi5Jc02k%26adurl%3D&r=1709661295360419&objectName=jvx_65e75fe341985&adUnitId=2000&jvxSessionId=1709662179.4561';
		this.layoutLoadedTime = 0;
        			this.baseURL += '&base=1';
            this.baseURL += '&creativeResolveBeginTime='+Date.parse(creativeResolveBeginTime);
            							this.baseURL += '&omid=0';
						        this.baseBgType = 'image';
		this.baseBgURL = '';
		this.baseBgColor = '';
		this.baseFallbackType = '';
		this.baseFallbackURL = '';		
		this.baseFallbackFileName = '';
		this.baseFallbackWidgetSrc = '';
        this.baseWidth = '300';
		this.baseHeight = '250';
                        this.origBaseWidth = '300';
        this.origBaseHeight = '250';
        		this.baseCloseRight = '0';
		this.baseBehaviourId = '0';
		this.behaviourId = '1';
		this.behaviourName = '0x0 Expansion';
        this.insertAdUnitContainerTo = 'slot';
        this.insertAdUnitContainerAs = 'fc';
        this.insertBaseTo = 'adUnitContainer';
        this.insertBaseAs = 'fc';
						var pageURL = getPageURL();
		this.encodedPageURL = encodeURIComponent(pageURL);
				//check the current state of the expansion
		this.expansionOpen = false;
		//check whether the expansion has really opened
		this.expansionHasOpened = false;
		//make sure openExpansionComplete msg is fired only once, because openExpComplete was getting fired incase of orientationchange(css transition was happening in this case)
		this.postOpenExpCompMsg = true;
						
			
						
				this.storeTransitionEndEvt = {};
		this.autoExpandTimerRef = null;
		this.autoCollapseTimerRef = null;
		this.timeSpentOnAd = 0;
				this.UIRTimer = null;
		this.UIRRecorded = false;
		this.DwellTimer = null;
		this.DwellRecorded = true;
		this.DwellElapsedTimer = null;
		this.DwellElapsedTime = 0;
							//	this.sfCollapseFirst = false;
										this.openExpAgain = false;
						this.raiseCMacroFlag = false;
										
			}

	/*
	Prototype object of the CreativeUnit. Add methods / properties to this so that they get shared 
	among all objects created out of this class but at the same time it's created only once.
	*/
	CreativeUnit.prototype = {
		constructor:CreativeUnit,
						         addScriptTagToBody: function(srcLink){
	         var script = document.createElement('script');
	         script.src = srcLink;
	         document.body.appendChild(script);
         },
         sendCookieRequest: function(cookieName){
	        if(jvx_65e75fe341985SafeFrameSupported){
		         var callBackFnName ='jvx_65e75fe341985'+".updateDYProperties";
		         jvx_65e75fe341985.addScriptTagToBody('https://as.jivox.com'+"/unit/getCookies.php?cookieName="+cookieName+"&callback="+callBackFnName+"&deleteCookie="+1+"&r_="+Math.random());  
	         }                  
         },
         updateDYProperties: function(val,isNotCookieData){
            if(!val) return;
            if(isNotCookieData != 1) var val = JSON.parse(val);
            var dynPropArr = val.split("|");
            jvx_65e75fe341985.DYReportingKey = dynPropArr[0] ? decodeURIComponent(dynPropArr[0]) : "";
            jvx_65e75fe341985.DYSegmentName = dynPropArr[1] ? decodeURIComponent(dynPropArr[1]) : "";
			jvx_65e75fe341985.eventServerParams = dynPropArr[2] ? decodeURIComponent(dynPropArr[2]) : "";   //Getting trafficker events output from layout_renderer_html.php
            //this.fireCREvent();
			jvx_65e75fe341985dyPropsACK = true;
         },
						fireCreativeLoadedEvent: function(eventSrc){
			var doFireCreativeLoadEvt = (eventSrc.id == this.baseId) || (this.baseDim == "" && eventSrc.id == this.expansionId);
			if(doFireCreativeLoadEvt){
				var creativeLoadEndTime = new Date();
				var creativeLoadElapseTime = Math.round((creativeLoadEndTime - creativeResolveBeginTime)/1000);
				jvx_65e75fe341985.recordEvent(72, 'es_et=' + creativeLoadElapseTime);
			}
		},
		onLoadEventHandler:function(event){
			var eventSrc = event.target || event.srcElement;
			if(eventSrc != 'undefined' && eventSrc != null){
				this.fireCreativeLoadedEvent(eventSrc);
								               	
                    if(jvx_65e75fe341985SafeFrameSupported){
                        var getReportingKeyFromCookie = false,
                            baseAndExpHasLayout = (this.baseHasLayout == 1 && this.expansionHasLayout == 1),
                            elId = eventSrc.id;
                            if(baseAndExpHasLayout){
                                if(elId.indexOf("jvxBase_") != -1){
                                    getReportingKeyFromCookie = true;
                                }
                            } else {
                                if(elId.indexOf("jvxBase_") != -1 && this.baseHasLayout == 1){
                                    getReportingKeyFromCookie = true;
                                }else if(elId.indexOf("expansion_") != -1 && this.expansionHasLayout == 1){
                                    getReportingKeyFromCookie = true;
                                }
                            }
                            if(getReportingKeyFromCookie){
                                jvx_65e75fe341985.sendCookieRequest('jvx_65e75fe341985'+"_dynamicProperties");
                            }
                    }
                											}	
		},
						restyleExpansion:function(){
			var that = this,
				expEl = getElById(this.expansionContainerId),
				offLeft = parseInt(0),
				offTop = parseInt(0);
				
			var getCoords = function(){
				var baseBox = "";
				baseBox = that.getAdUnitBox();
				return baseBox;
			};
										if(this.expansionOpen){
					var box = getCoords();
					var newLeft = "", newTop = "";
					if(this.insertExpansionTo != 'adUnitContainer'){
						if(this.expAnimDir == "DiagonalTopRight" || this.expAnimDir == "SlideLeft" ||
							this.expAnimDir == "SlideBottom" || this.expAnimDir == "SlideTop"){
							
							newLeft = Math.round(box.left) - (parseInt(this.expansionWidth) - parseInt(this.baseWidth)) - offLeft;
						} else {
							newLeft = Math.round(box.left) + offLeft;
						}
						newTop = Math.round(box.top) + offTop;
					}else{
						if(this.expAnimDir == "DiagonalTopRight" || this.expAnimDir == "SlideLeft" ||
							this.expAnimDir == "SlideBottom" || this.expAnimDir == "SlideTop"){
							
							newLeft = parseInt(this.expansionWidth) - parseInt(this.baseWidth) + offLeft;
							newLeft = "-" +newLeft+ 'px';
						} else {
							newLeft = offLeft;
						}
						newTop = offTop;
					}
										addStyles(expEl, {'left': newLeft + 'px', 'top': newTop + 'px'});
				} else {
					this.preStyleExpContainer();
				}
					},
						        renderBase:function(responsive){
			if(this.asyncTaskCount > 0){
								if(this.asyncTaskCount > this.asyncCompletedTaskCount){
					return;
				}
			}
                        if(responsive) {
				var baseContainerNode = getElById(this.baseContainerId);
				baseContainerNode.style.backgroundColor = this.baseBgColor;
				var cNode = getElById(this.adUnitContainerId);
				if(cNode != null) {
					// Reset width and height for base container
					cNode.style.width = this.baseWidth + 'px';
					cNode.style.height = this.baseHeight + 'px';
				}
								var bNode = getElById(this.baseId);
				var b2Node = getElById(this.base2Id);
				if(bNode != null) {
					var iframeNode = (bNode.nodeName.toLowerCase() == "iframe") ? bNode : b2Node;
					var imgNode = (bNode.nodeName.toLowerCase() == "img") ? bNode : b2Node;
										if(this.baseType == "html" && iframeNode != null) {
						iframeNode.style.display = 'block';
						if(imgNode != null) {
							imgNode.style.display = 'none';
						}
						 
						iframeNode.width = this.baseWidth;
												iframeNode.height = this.baseHeight;
						if(this.baseHasLayout == 1){
							// Layout renderer should render new layout						
							/*Smooth responsive and stretch variables*/
															postHtml5Message(iframeNode, 'reRenderLayout');
								setTimeout(function(){
                                	postHtml5Message(iframeNode, 'activateScene');
                                },1);
													} else {
							// html banner
							iframeNode.src = this.baseURL;
						}
						
												return;
					} 
										else if(this.baseHasLayout != 1 && imgNode != null) {
						imgNode.style.display = 'block';
												if(iframeNode != null) {
							iframeNode.style.display = 'none';
							//Layout renderer should pause all the activities like video
							postHtml5Message(iframeNode, 'pauseInteraction');
							postHtml5Message(iframeNode, 'deActivateScene');
						}
												 
						imgNode.width = this.baseWidth;
												imgNode.height = this.baseHeight;
						imgNode.src = this.baseURL;
												return;
					} else {
						var origBaseId = this.baseId;
						this.baseId = this.base2Id;
					}
				}
			}
			var that = this;
			var baseHTMLStr = this.getBase();
			var baseNode = toElement(baseHTMLStr);
			var baseContainerNode = getElById(this.baseContainerId);
			baseContainerNode.appendChild(baseNode);
									addEvent(getElById(this.baseId), "load", function(event){ 
								jvx_65e75fe341985.layoutLoadedTime = Date.now();
				that.onLoadEventHandler(event); }, false);
						if(this.baseId == this.base2Id) {
				//Reset baseId to original value
				this.baseId = origBaseId;
				//Set style for baseNode
				var baseNode = getElById(this.baseId);
				baseNode.style.position = 'absolute';
				baseNode.style.display = 'none';
				if(bNode.nodeName.toLowerCase() == "iframe") {
					//Layout renderer should pause all the activities like video
					postHtml5Message(bNode, 'pauseInteraction');
					postHtml5Message(bNode, 'deActivateScene');
				}
				//Set style for base2Node
				var base2Node = getElById(this.base2Id);
				base2Node.style.position = 'absolute';
				base2Node.style.display = 'block';
				//Add load event handler
				addEvent(getElById(this.base2Id), "load", function(event){ that.onLoadEventHandler(event); }, false);
			}
					},
        getBase:function(){
			var baseType = this.baseType;
			var str = "";
			switch(baseType){
				case "image":
					str = this.getBaseImage();
					break;
								case "html":
					str = this.getBaseHTML();
					break;
				default:
					break;
			}
			return str;
		},
		getBaseImage:function(){
			var obj = {};
			obj.id = this.baseId;
			var bUrl = this.baseURL,
				ext = bUrl.substr(bUrl.lastIndexOf('.')+1),
				cacheBustBgImg = '';
						if(ext == "gif" && (cacheBustBgImg.length == 0 || parseInt(cacheBustBgImg))){
				bUrl = bUrl + "?" + Math.random();
			}else{
							if(parseInt(cacheBustBgImg)){
					bUrl = bUrl + "?" + Math.random();
				}
			}
			obj.src = bUrl;
			obj.width = this.baseWidth;
			obj.height = this.baseHeight;
			return createImg(obj);
		},
				getBaseHTML:function(){
						var obj = {};
			obj.id = this.baseId;
			obj.src = this.baseURL;
			if(this.baseHasLayout == 1){
					            				var tzOffset = new Date().getTimezoneOffset();
				obj.src += "&localTimeOffset=" + tzOffset;
																obj.src += '&pageURL='+this.encodedPageURL;
							}
							if(this.baseHasLayout == 1){
            		obj.src += '&allowExp=0';
            	}
                        if(this.baseHasLayout == 1){
                                                    if(jvx_65e75fe341985SafeFrameSupported){
                        obj.src += '&isSF=1';
                    }
                            }
						if(this.baseHasLayout == 1 && this.expansionHasLayout == 1){
								obj.src += '&useBaseCVForExp=1';
			}
						obj.width = this.baseWidth;
			obj.height = this.baseHeight;
			return createIframe(obj);
		}, 
		getBaseFallback:function(){
			var fallbackType = this.baseFallbackType;
			var str = "";
			switch(fallbackType){
				case "image":
					str = this.getBaseFallbackImage();
					break;
				case "widget":
					str = this.getBaseFallbackWidget();
					break;
				case "swiffy":
				case "html5":
					str = this.getBaseFallbackHTML();
					break;
				default:
					break;
			}
			return str;
		},
		getBaseFallbackImage:function(){
						var obj = {};
			obj.id = this.baseId;
			obj.src = this.baseFallbackURL;
			obj.width = this.baseWidth;
			obj.height = this.baseHeight;
			return createImg(obj);
		},
		getBaseFallbackWidget:function(){
			var obj = {};
			obj.id = this.baseId;
			obj.src = this.baseFallbackWidgetSrc;
			obj.width = this.baseWidth;
			obj.height = this.baseHeight;
			return createFIF(obj);
		},
		getBaseFallbackHTML:function(){
			var obj = {};
			obj.id = this.baseId;
			obj.src = this.baseFallbackURL;
			obj.width = this.baseWidth;
			obj.height = this.baseHeight;
			return createIframe(obj);
		}, 
		getBaseClose:function(){
			var obj = {};
			obj.id = this.baseCloseId;
			obj.src = '';
			obj.width = '';
			obj.height = '';
			return createImg(obj);
		},
						getExpansionRef:function(){
			var eNode = getElById(this.expansionId);
            var e2Node = getElById(this.expansion2Id);
            if(!eNode) return null;
            var eIframeNode = (eNode.nodeName.toLowerCase() == "iframe") ? eNode : e2Node;
            return eIframeNode;
		},
		fnCallback:function(evt){
			var ref = jvx_65e75fe341985,
				pName = '', targetId = '', key = '';
			if(evt){
				pName = evt.propertyName,
				targetId = evt.target.id,
				key = targetId;	
			}
			if(targetId == ref.loaderId)
				return;
		/*	var addPNameToKey = function(pName){
				if(pName == 'width'){
					key += evt.target.clientWidth;	
				}else if(pName == 'height'){
					key += evt.target.clientHeight;
				}else if(pName == 'top'){
					key += evt.target.clientTop;
				}else if(pName == 'left'){
					key += evt.target.clientLeft;
				}
				return key;
			};	
		*/
			var executeCallBack = function(transitionEvt){
								if(ref != 'undefined' && ref != null){
					var el = ref.getExpansionRef(),
						expEl = getElById(ref.expansionContainerId);
					if(ref.expansionOpen){
						
																			
																		var clsEl = getElById(ref.closeExpansionId);
						if(clsEl){
														clsEl.style.display = 'block';
						}	
																		if(ref.expansionHasLayout == 1 && ref.postOpenExpCompMsg){
														if(transitionEvt){
								postHtml5Message(el,'openExpansionComplete');
								postHtml5Message(el,'activateScene');
							}else{
															}
							ref.postOpenExpCompMsg = false;
						}
					}else{
						if(ref.openExpAgain) ref.openExpAgain = false; 
												
												if(jvx_65e75fe341985SafeFrameSupported && transitionEvt){
							try{
								$sf.ext.collapse();
															}catch(e){}
						}
												
												var clsEl = getElById(ref.closeExpansionId);
						if(clsEl)
							clsEl.style.display = 'none';
												if(ref.expansionHasLayout == 1){
							if(transitionEvt){
								postHtml5Message(el,'closeExpansionComplete');
							}else{
															}
													}
						
												
						/* Removing Styles from adUnitContainer which is set during openExpansion and adding default styles for Billboard */
												/* End */
						
						/* Removing Styles from document.body which is set during openExpansion for Sidekick */
												/* End */

						ref.expansionHasOpened = false;
						ref.postOpenExpCompMsg = true;
					}
				}
			};
			if(!isEmpty(ref.storeTransitionEndEvt)){
				if(!ref.storeTransitionEndEvt.hasOwnProperty(key)){		// If KEY not present in the object, add the New Key to the object and 
					ref.storeTransitionEndEvt[key] = targetId;			// execute callback
					if(targetId != ref.closeExpansionId){
						executeCallBack(evt);
					}	
				}else{
				//	log("already exist");
				}
			}else{
				ref.storeTransitionEndEvt[key] = targetId;
				if(targetId != ref.closeExpansionId){
					executeCallBack(evt);
				}	
				setTimeout(function(){ref.storeTransitionEndEvt = {};},200);
			}
		},
										applyInterceptorStyle:function(iNode,pNode){
			iNode.style.position = "absolute";
			iNode.style.cursor = "pointer"; // In iOS, event delegation don't work for div "clicks" unless this is set.
			iNode.style.top = "0px";
			iNode.style.left = "0px";
			pNode.appendChild(iNode);
		},
		renderInterceptor:function(type){
			var iNode = '', pNode = '';
			if(type == 'base'){
				iNode = createDivNode(this.baseInterceptorId); //interceptor node
				pNode = getElById(this.baseContainerId);
				iNode.style.width = this.baseWidth + "px";
				iNode.style.height = this.baseHeight + "px";
											} else if(type == 'expansion'){
				iNode = createDivNode(this.expInterceptorId); //interceptor node
				pNode = getElById(this.expansionContainerId);
				iNode.style.width = this.expansionWidth + "px";
				iNode.style.height = this.expansionHeight + "px";
			}
			this.applyInterceptorStyle(iNode,pNode);
		},
								setAdUnitStyle:function(obj){
			if(this.insertExpansionTo == "adUnitContainer") {
				var transitionPos = "",
				mainContStyle = {};
								addStyles(getElById(this.adUnitContainerId), mainContStyle);		// Setting CSS styles to #adUnitContainer 
			}
		},
								
				
		getIBusterFrameInfo:function(){
			if(typeof(jivoxIBusterAdObject) != "undefined"){
				var hostIframes = document.body.getElementsByTagName("iframe"),
					iFramesLen = (hostIframes) ? hostIframes.length : 0;
				for(var i=0; i < iFramesLen; i++){
					if(hostIframes[i].contentWindow == jivoxIBusterAdObject["jvx_65e75fe341985"].foreignWindow){
						cords = getBox(hostIframes[i]);
						return [cords, hostIframes[i]];
					//	this.iBusterFrameCords = cords;
					//	this.iBusterFrame = hostIframes[i];
					}
				}
			}
		},
				getAdUnitBox: function(){
						var box = getOffset(getElById(this.adUnitContainerId));
						return box;
		},
		animate: function(obj){
			var styles = {},
				expEl = getElById(this.expansionContainerId),
				expLeft = parseInt(expEl.style.left),
				expTop = parseInt(expEl.style.top),
				startTimeOut = 80, endTimeOut = 80,
				jsAnimSpeed = obj.animationSpeed*1000;
				
			var adUnitBox = this.getAdUnitBox();
			obj.browserPrefix = getBrowserPrefix(this.browserName);
			obj.expWidth = parseInt(this.expansionWidth);
			obj.expHeight = parseInt(this.expansionHeight);
			obj.bWidth = parseInt(this.baseWidth);
			obj.bHeight = parseInt(this.baseHeight);
			obj.alignToVP = this.alignToVP;
			
			var that = this;
			var openAnimSettings = function(styleObj){
				var returnVal = null;
				if(!that.preStyleExpansion){
					if(that.expAnimDir != "SlideTop"){
						if(styleObj['left'] != "")
							returnVal = parseInt(styleObj['left']) -  obj.expWidth
					}	
				} else {
					that.preStyleExpansion = false;
					if(that.expAnimDir != "SlideTop"){
						returnVal = expLeft -  obj.expWidth;
					} else {
												returnVal = parseInt(adUnitBox.top) - (parseInt(that.expansionHeight) - parseInt(that.baseHeight));
											}
				}
				return returnVal;
			};
				
						
						
			obj.preStyleExpansion = this.preStyleExpansion;
			obj.insertExpansionTo = this.insertExpansionTo;
			obj.expContainerId = this.expansionContainerId;
			
						//adding close button to Expansion
			var closeDiv = getElById(this.closeExpansionId);
			if(!closeDiv) {
				var dispType = "none", clsLeft = "", clsTop = "";
																		var clsStyles = {'display' : dispType,
									 'top'	   : clsTop + 'px',
									 'left'    : clsLeft +'px',
									 									};	
					closeDiv = addDivComponent(expEl, this.closeExpansionId, 'jvx_boxclose', '&times;', clsStyles);
							} else {
				closeDiv.style.display = 'block';
			}
						
											styles = createStyleObject(obj);
				if(this.vAlignToVP && !this.preStyleExpansion){
					if(obj.expansionOpen){
						var vpTop = setVAlignTop(styles);
						styles['top'] = vpTop + 'px';
					}else{
						styles['top'] = expTop + "px";
					}
				}
									if(!obj.expansionOpen && (obj.animationDirection == "SlideInDiagonalRight"
						|| obj.animationDirection == "SlideInRight")){
						var clsExpLeft = expLeft +  parseInt(that.expansionWidth);
						styles['left'] = clsExpLeft + "px";
					}
					addStyles(expEl, styles);
								
				if(obj.expansionOpen){
					if(obj.animationDirection == "DiagonalTopRight" || obj.animationDirection == "SlideInDiagonalRight"
						|| obj.animationDirection == "SlideLeft" || obj.animationDirection == "SlideInRight"
						|| obj.animationDirection == "SlideBottom" || obj.animationDirection == "SlideInTop"){
						
						var newLeft = openAnimSettings(styles);
					}
										var that = this;
					setTimeout(function() {
						expEl.style.width = obj.expWidth + "px";
						expEl.style.height = obj.expHeight + "px";
						if(!that.alignToVP || (that.alignToVP && (obj.animationDirection != "SlideBottom" &&
																obj.animationDirection != "SlideInTop"))){
							
							if(newLeft != "undefined") expEl.style.left = newLeft + "px";
						}
					},startTimeOut);
									} else {
									}
						// COM: transition end evt is not triggered when animSpeed is 0
					},
		
	/* Expansion code starts */ 
        renderExpansionBg:function(){
			var str = "";
            var expansionContainerEl = getElById(this.expansionContainerId);
            var expansionBgElement = null;
			switch(this.expansionBgType){
				case "image":
					str = this.getExpansionBgImage();
					break;
				default:
					break;
			}
            expansionBgEl = toElement(str);
            expansionContainerEl.appendChild(expansionBgEl);
        },
        getExpansionBgImage:function(){
			var obj = {};
			obj.id = this.expansionBgId;
			obj.src = this.expansionBgURL;
			obj.width = this.expansionWidth;
			obj.height = this.expansionHeight;
			return createImg(obj);
        },
				// this function decides whether to call intermediate/actual layout file incase of loading the expansion
		getExpansionURL:function(url){
			var expansionURL = '';
			if(this.baseHasLayout == 1 && this.expansionHasLayout == 1 && url.indexOf("layout_renderer.php") > 0){
				url += "&useBaseCVForExp=1";
				expansionURL = url.replace("layout_renderer.php", this.expIntermediateFileName);
			}else{
				expansionURL = url;
			}
			return expansionURL;
		},
				renderExpansion:function(mobileVP){
			var eNode = getElById(this.expansionId);
			if(eNode != null) {
				if(mobileVP) {
					var winDim = getBrowserWindowProps();
					//Re-style expansion container
					var eContainerNode = getElById(this.expansionContainerId);
					if(eContainerNode != null) {
						//Reset width and height for expansion container
																				eContainerNode.style.width = winDim[0]+'px';
							eContainerNode.style.height = winDim[1]+'px';
														
					}
					
					//Re-render expansion node in expansionType hybrid (!'C' and !'I')
					var e2Node = getElById(this.expansion2Id);
					var eIframeNode = (eNode.nodeName.toLowerCase() == "iframe") ? eNode : e2Node;
					var eImgNode = (eNode.nodeName.toLowerCase() == "img") ? eNode : e2Node;

					if(this.expansionHasLayout == 1 && eIframeNode != null) {
						eIframeNode.style.display = 'block';
						if(eImgNode != null) {
							eImgNode.style.display = 'none';
						}
						eIframeNode.width = this.expansionWidth;
						eIframeNode.height = this.expansionHeight;
												//Reposition expansion div
//						var mt = (winDim[1] - this.expansionHeight)/2 + 'px',
//							ml = (winDim[0] - this.expansionWidth)/2 + 'px';
//					//	eIframeNode.style.margin = mt + ' 0 0 ' + ml;
						//Post a message to layout renderer
						
						/*Smooth responsive and stretch variables*/
													postHtml5Message(eIframeNode, 'reRenderLayout');
												if(eIframeNode.src == 'about:blank'){
							var eNodeSrc = this.expansionURL;
														// do the same in mobile case also
							var expURL = this.getExpansionURL(eNodeSrc);
							if(expURL != eNodeSrc){ eNodeSrc = expURL; }
														eIframeNode.src = eNodeSrc;
						}
						return;
					} else if(this.expansionHasLayout != 1 && eImgNode != null) {
						eImgNode.style.display = 'block';
						if(eIframeNode != null) {
							eIframeNode.style.display = 'none';
							//Layout renderer should pause all the activities like video
							postHtml5Message(eIframeNode, 'pauseInteraction');
							postHtml5Message(eIframeNode, 'deActivateScene');
						}
						eImgNode.width = this.expansionWidth;
						eImgNode.height = this.expansionHeight;
						//Reposition expansion div
						//Center align expansion node if expansion is an image no layout,
						//If expansion has layout then layout_renderer takes care of alignment
						var mt = (winDim[1] - this.expansionHeight)/2 + 'px',
							ml = (winDim[0] - this.expansionWidth)/2 + 'px';
						eImgNode.style.margin = mt + ' 0 0 ' + ml;
						//Process image based expansion 
						eImgNode.src = this.expansionURL;
						return;
					} else {
						var origExpansionId = this.expansionId;
						this.expansionId = this.expansion2Id;
					}
				} else {
									return;
				}
			}
			var expansionType = this.expansionType;
			var that = this;
			var str = "";
			switch(expansionType){
				case "image":
					str = this.getExpansionImage();
					break;
								case "html":
					str = this.getExpansionHTML();
					break;
				default:
					break;
			}
			if(!str) return false;
			var expansionContainerNode = getElById(this.expansionContainerId);
            var expansionNode = toElement(str);
            expansionContainerNode.appendChild(expansionNode);
						if(expansionNode)
				expansionNode.style.cursor = "pointer";
						addEvent(getElById(this.expansionId), "load", function(event){ that.onLoadEventHandler(event); }, false);
			
						if(this.expansionId == this.expansion2Id) {
				//Reset expansionId to original value
				this.expansionId = origExpansionId;
				//Set style for eNode
				var eNode = getElById(this.expansionId);
				//eNode.style.position = 'absolute';
				eNode.style.display = 'none';
				if(eNode.nodeName.toLowerCase() == "iframe") {
					//Layout renderer should pause all the activities like video
					postHtml5Message(eNode, 'pauseInteraction');
					postHtml5Message(eNode, 'deActivateScene');
				}
				//Set style for base2Node
				var e2Node = getElById(this.expansion2Id);
				//e2Node.style.position = 'absolute';
				e2Node.style.display = 'block';
				//Reposition expansion div
//				var mt = (winDim[1] - this.expansionHeight)/2 + 'px',
//					ml = (winDim[0] - this.expansionWidth)/2 + 'px';
//				e2Node.style.margin = mt + ' 0 0 ' + ml;
				//Add load event handler
				addEvent(e2Node, "load", function(event){ that.onLoadEventHandler(event); }, false);
			}
						//Center align expansion node if expansion is an image no layout,
			//If expansion has layout then layout_renderer takes care of alignment
			if(mobileVP && expansionType == "image") {
				var winDim = getBrowserWindowProps();
				var eNode = getElById(this.expansionId);
				var mt = (winDim[1] - this.expansionHeight)/2 + 'px',
					ml = (winDim[0] - this.expansionWidth)/2 + 'px';
				eNode.style.margin = mt + ' 0 0 ' + ml;
			}
		},
		getExpansionImage:function(){
			var obj = {};
			obj.id = this.expansionId;
			obj.src = this.expansionURL;
			obj.width = this.expansionWidth;
			obj.height = this.expansionHeight;
			return createImg(obj);
		},
				getExpansionHTML:function(){
			var obj = {};
			obj.id = this.expansionId;
			obj.src = this.expansionURL;
			if(this.userInitAction && parseInt(this.expansionHasLayout)){
				// add this param so that expansion layout knows it got opened manualy and not an auto-expansion
				obj.src += "&userInitAction=1";				
			}
			if(this.expansionHasLayout == 1){
								                var tzOffset = new Date().getTimezoneOffset();
				obj.src += "&localTimeOffset=" + tzOffset;
								                    if(jvx_65e75fe341985SafeFrameSupported){
                        obj.src += '&isSF=1';
                    }
                																obj.src += '&pageURL='+this.encodedPageURL;
							}
			obj.width = this.expansionWidth;
			obj.height = this.expansionHeight;
						
						obj.styles = {'max-width':'none !important'};
			
						var expURL = this.getExpansionURL(obj.src);
			if(expURL != obj.src){ obj.src = expURL; }
						return createIframe(obj);
		}, 
		getExpansionFallback:function(){
			var fallbackType = this.expansionFallbackType;
			var str = "";
			switch(fallbackType){
				case "image":
					str = this.getExpansionFallbackImage();
					break;
				case "widget":
					str = this.getExpansionFallbackWidget();
					break;
				case "swiffy":
				case "html5":
					str = this.getExpansionFallbackHTML();
					break;
				default:
					break;
			}
			return str;
		},
		getExpansionFallbackImage:function(){
			var obj = {};
			obj.id = this.expansionId;
			obj.src = this.expansionFallbackURL;
			obj.width = this.expansionWidth;
			obj.height = this.expansionHeight;
			return createImg(obj);
		},
		getExpansionFallbackWidget:function(){
			var obj = {};
			obj.id = this.expansionId;
			obj.src = this.expansionFallbackWidgetSrc;
			obj.width = this.expansionWidth;
			obj.height = this.expansionHeight;
			return createFIF(obj);
		},
		getExpansionFallbackHTML:function(){
			var obj = {};
			obj.id = this.expansionId;
			obj.src = this.expansionFallbackURL;
			obj.width = this.expansionWidth;
			obj.height = this.expansionHeight;
			return createIframe(obj);
		},
		
		openWindow:function(url){
							if(jvx_65e75fe341985NonMraidTagInMraidEnv){
					mraid.open(url);
				} else {
					window.open(url);
				}
					},
		openClickThrough:function(event={}){
							this.openWindow(this.clickTagURL);
						try{
				var clickEventDetails = {'clientX':event.clientX !== undefined ? event.clientX : event.nativeEvent ? event.nativeEvent.clientX : "", 
					'clientY': event.clientY !== undefined ? event.clientY : event.nativeEvent ? event.nativeEvent.clientY : "", 
					'clientHeight' : event && event.target && event.target.clientHeight !== undefined ? event.target.clientHeight : "", 
					'clientWidth' : event && event.target && event.target.clientWidth !== undefined ? event.target.clientWidth : "",
				     'ct': Date.now() }
			}
			catch(err){
				var clickEventDetails = {
					'clientX':'',
					'clientY':'',
					'clientHeight':'',
					'clientWidth':'',
					'ct': Date.now()
				};
				console.log("Unexpected error occured while fetching Event obj " + err);
			}
			
												// raise Macro flag if cMacro is not replaced
										
				if(!this.raiseCMacroFlag){
					var eventRecordParams = "c_cx="+clickEventDetails.clientX+"/c_cy="+clickEventDetails.clientY+"/c_ct="+clickEventDetails.ct+"/c_tv="+(clickEventDetails.ct-jvx_65e75fe341985.layoutLoadedTime);
					this.recordEvent(1, eventRecordParams);
				}else{
					var eventRecordParams = "es_clkMac_1/c_cx="+clickEventDetails.clientX+"/c_cy="+clickEventDetails.clientY+"/c_ct="+clickEventDetails.ct+"/c_tv="+(clickEventDetails.ct-jvx_65e75fe341985.layoutLoadedTime);
					this.recordEvent(1, eventRecordParams);
				}
									if(!adInVPForOneSec){
												this.recordEvent(73);
												adInVPForOneSec = true;
						if (timerRunning) {
							window.clearTimeout(timeoutHandle);
							timerRunning = false;
						}
					}
													var clkTrackers = this.clickTrackers;
					if(clkTrackers.length != 0){
						for(var tracker of clkTrackers){
							fireTracker(replaceRunTimeMacros(tracker,clickEventDetails));
						}
					}
						},
				openExpansion:function(autoExpand, skipOpenEvent){
			
						
						if(!jvx_65e75fe341985CanBustFromFrame || jvx_65e75fe341985InNestedFrame){
				return;
			}
									
						
			if(!this.expansionHasOpened){
																				if(jvx_65e75fe341985SafeFrameSupported)
					renderAdInsideSafeFrame(this.expAnimDir);
												this.expansionOpen = true;
								this.userInitAction = autoExpand ? false : true;
				if(!this.openExpAgain){
															if(!autoExpand && !skipOpenEvent){
						this.recordEvent(37);
					}
														}
				var obj = {};
				obj.baseBox = this.getAdUnitBox();
							//	obj.baseBox = getOffset(getElById(this.adUnitContainerId));
													obj.animationDirection = this.expAnimDir;
				obj.animationSpeed = this.expAnimSpeed;
				obj.expansionOpen = this.expansionOpen;
				
				if(this.behaviourId != "" || this.behaviourId != "undefined")
					obj.transitionType = parseInt(this.behaviourId);						// hard code the value for testing
								
				var expRendered = this.renderExpansion();
				if(expRendered != false){
					if(!this.expInterceptorDomRef){
												var userHandlesExpClick = "";
						var eFlashClick = "";
						if(this.expansionType == "flash"){
							if(!hasFlashPlugin){
								eFlashClick = "";
							}else{
								eFlashClick = "";
							}
							if(eFlashClick){
								eFlashClick = parseInt(eFlashClick);
							}
						}
												if((userHandlesExpClick && this.expansionType == 'html') 
							|| (this.expansionType == 'flash' && (!eFlashClick && eFlashClick !== ""))){
							
							this.renderInterceptor('expansion');
							if(getElById(this.expInterceptorId)){
								this.expInterceptorDomRef = getElById(this.expInterceptorId);
							}
						}
											}else{
						this.expInterceptorDomRef.style.display = 'block';
					}
					this.expansionHasOpened = true;
					if(this.expansionHasLayout == 1) {
						postHtml5Message(this.getExpansionRef(),'openExpansion');
					}
					
										
										
					if(jvx_65e75fe341985SafeFrameSupported){						
												this.animate(obj);
											}else{
						this.animate(obj);
					}
				}
							}	
		},
		closeExpansion:function(autoClose, skipCloseEvent){	// Only animation applied to hide, expUnit is not deleted
			var that = this;
			if(this.expansionHasOpened){
																												if(!autoClose && !skipCloseEvent){
					this.recordEvent(47);
				}
								this.expansionOpen = false;
								if(!autoClose){
					if(this.autoExpandTimerRef != null){
						clearTimeout(that.autoExpandTimerRef);
					}
				}
				if(this.expansionHasLayout == 1) {
					postHtml5Message(this.getExpansionRef(),'closeExpansion');
				}

				var obj = {};
				obj.transitionType = parseInt(this.behaviourId);			// hard code the value for testing
								obj.animationDirection = this.expAnimDir;
								if(!this.clsExpAnimSpeed && this.clsExpAnimSpeed !== 0){
					obj.animationSpeed = this.expAnimSpeed;
				} else {
					// when close exp anim speed value is not ""
					obj.animationSpeed = "";
				}
				obj.baseBox = this.getAdUnitBox();
							//	obj.baseBox = getOffset(getElById(this.adUnitContainerId));
													obj.expansionOpen = this.expansionOpen;
				
								if(this.expInterceptorDomRef){		// hide expansion interceptor if exists. 
					this.expInterceptorDomRef.style.display = 'none';
				}
								this.animate(obj);
				
							}	
		},
		loadExpansion:function(){

		},
		/* Expansion code ends */

		onBaseMouseOver:function(){
								}, 
		onBaseMouseOut:function(){
					},
		onAdUnitMouseOut:function(){
			var that = this;
									clearTimeout(this.UIRTimer);
			if(!this.DwellRecorded){
            	this.recordDwellEvent(49, this.DwellElapsedTime);
            }
								},
		recordEvent:function(eventId,addnlParams){
											if( !jvx_65e75fe341985dyPropsACK && (eventId==48 || eventId==49 || eventId==1)){
					addnlParams = (addnlParams) ? addnlParams + "/c_actualEventId="+eventId : "c_actualEventId="+eventId;
					eventId = 78;
				}
								var eventReportingParams = '';
											eventReportingParams = "225885/2000/178383/3591c9f01ccaf9/20/jvxSId_1709662179.4561";		
												var rand = Math.random();
				var imgEl = document.createElement("img");
                var tempURL = "";
                var eventReportingURL = "https://evs.jivox.com/trk" + "/" + eventId + "/" + eventReportingParams;
                eventReportingURL += "/es_pId_92K8OO";
                tempURL += "";
                                tempURL += "";
                									if(jvx_65e75fe341985.eventServerParams != "" && jvx_65e75fe341985.eventServerParams != undefined){
						tempURL += "/" + jvx_65e75fe341985.eventServerParams;
					}
				                tempURL = addnlParams ? (tempURL + "/" + addnlParams) : tempURL;
									tempURL += "/bDim="+ "300x250";
								tempURL = tempURL + "/jvxRandom=" + rand;
				//eventReportingURL = (eventId == 1) ? (eventReportingURL + ";https://googleads.g.doubleclick.net/dbm/clk?sa=L&ai=Cjol5b1znZeP_FdOc6toP5Ju8qA2usKXUddCw0pCEEv-FgIrVCRABILflhCFgyfarjNCkiBLIAQmoAwHIA5sEqgSxAk_QVOmmk-xT-B7WZNirTm9zoyiIfagL12tgNEhorV6I5ux0lnSuvAIhGg9grs5iBCocvxYhluTwgi2-lDUHpbHnWWJvdZkEyFNKlCZQZO0wymHkywFVEK1gwmS8bAKZ9s1C4UJn6dZPruAkpC3CT202QuFJ91zyPIMM2xPztK85d4osKAPEApWXpnRrVMaIaWjgOOJA_gfZyGiGg64Rq74Y56O0pFBzexd9xjmHpp-rUI3Au-Pn3x4-RSGEz9VCnz64Q-jKRsaxrm1OeCyFwAmDzl4hhL6tZqYXL8uHR2XdnY95Jw5Z8lD86TJDVRrWqG0AKIrUemz058YJV-qzjaSyphjY2Do-7QgVGULO7WbvcVdQaMRXbkK-3L-9fWSB4nzr-8PJgTM1n0GRS_v24bciwAT3iNTw1gTgBAOIBfK_mIdOkAYBoAZNgAex3vzUA6gH2baxAqgHjs4bqAeT2BuoB-6WsQKoB_6esQKoB6--sQKoB9XJG6gHpr4bqAeaBqgH89EbqAeW2BuoB6qbsQKoB4OtsQKoB-C9sQKoB_-esQKoB9-fsQLYBwDSCCQIgGEQARhfMgKKAjoJgECAwICAgKAoSL39wTpY0drI0djdhAPyCA1iaWRkZXItMzU0NzcwgAoEmAsByAsBgAwBqg0CVVOwE8SSyhbYEwPYFAHQFQH4FgGAFwE&ae=1&num=1&cid=CAQSKQB7FLtqZnPQC7tvSL7OdDwULCJM1yf0NZPxZqoWfO2pAL4KvmBsNxIkGAE&sig=AOD64_0_TmQRGTwJIu4E0pss-oLK3cJ6dQ&client=ca-pub-5722610347565274&dbm_c=AKAmf-AIzJv1mnwLKW0wq6z84c_3gAIz-7scRwoIlanuszXz0Oswhjbg6-Jf-aawKcK5g5VPKAU12YQIY_GgmObVWXYBd-_vmFLPhB3DgVhzUB95eQvOS9DCkayC4UqZVdFGtPrOQKzXHX1R26k2hJj58TfhTHWYUMpEEgwbAhGiH3gj0iSytMrPpHREffF6HueHhDQnbsLCqpt3j00tWADyvL7JJm-oZJdKbErujp6TR43YArml1C4&cry=1&dbm_d=AKAmf-B_GBZbarXmwj6jYlzXYk0OJCrbFNb6CeERZ1k1_SWo_fxUy3NdUZHC1jcnrG98NXDOTckjuL4ELasTEUV8wX7-V9d7o0gsIPPobP-qdBCgXNxF8S5JNujvuv6CDrusl4JA8XqtPUYphN9aK2bzQvm6zYnZiBb-r7RJQpTqpIJDtiP6PlcqTZPPxGryAn1UM1VpeI4a-nIuNFNFXUbMzfqifXQPnmDt2-L8S9_fuHAMmtfgAjh5Z6sAttuxdGeg1Qdd8YVfdplZUoXM2MJv_MFnEaOQBu67NfTtb1yKWe7MDu1aU_4YF-5FtaHNv7lHMsVRSXYaQzkRu6oRkCLwxiyiJ1Vdo1Cvbm6eJj4jGjVcd2Zuna7i_RiS0U6EMw5vm8SEDNwC7T4FOTl-LZRxXdoIC8MkGTJRYObDK0jdqpNpGyHfzj-JIflit-FNmRYtvvK5oXI1NBO8B1k-dIFIFvFc3q5-XZuD9ndiGwrwGFfxQW-fz5QyasCLLfR4yCaAcdVvNLkXDgemTf4YiKJCP2n9u5G4Tjlom9x_a3aREyYLS5nDtDlt02mf0saHxH68Xb0s8Knu04VpJsX8kodQAuMSGzRAULNAaBty4EFjgPoKi5Jc02k&adurl=https%3A%2F%2Fwww.nesl.com%2Fcareers%2F%3Futm_source%3Dpamg%26utm_medium%3Ddisplay%26utm_campaign%3Dpamg_network_video_recruitment%26utm_content%3Dawareness") : eventReportingURL;
									tempURL += "/es_cgName="+jvx_65e75fe341985.DYReportingKey;
                    if(jvx_65e75fe341985.DYSegmentName != ""){
                        tempURL += "/es_segName="+jvx_65e75fe341985.DYSegmentName;
                    }
								
								
				eventReportingURL += "/es_encParams_"+ btoa(tempURL);;
				imgEl.src = eventReportingURL;
									},
        
				recordUIREvent:function(eventId, elapsedTime){
			if(this.UIRRecorded){
				return;
			}
			this.recordEvent(eventId, elapsedTime);
			this.UIRRecorded = true;
					},
		recordDwellEvent:function(eventId, elapsedTime){
			var that = this;
			if(this.DwellRecorded){
				return;
			}
			clearTimeout(that.DwellTimer);
			if(elapsedTime > 0){
				var eventRecordParams = "es_et=" + elapsedTime;
				this.recordEvent(eventId, eventRecordParams);
			}
			clearInterval(this.DwellElapsedTimer);
			this.DwellElapsedTimer = null;
			this.DwellElapsedTime = 0;
			this.DwellRecorded = true;
			this.DwellTimer = null;
		},
				                						renderAdUnitContainer:function(){
						
						var cNode = createDivNode(this.adUnitContainerId);
			            												document.write('<div id="jvxScrRefNode_65e75fe341985" style="display:none;"></div>');	
				var jvxPNode = '';
				var jvxNode = getElById("jvxScrRefNode_65e75fe341985");
				pNode = (jvxNode)? (jvxPNode = jvxNode.parentNode) : document.body;
				if(jvxPNode) jvxPNode.removeChild(jvxNode);
																			cNode.style.position = "relative";
			cNode.style.margin = "0 auto";
						
											cNode.style.width = this.baseWidth + setPixel(this.baseWidth);
				cNode.style.height = this.baseHeight + setPixel(this.baseHeight);
							
																						var auNode = '<div id="'+this.adUnitContainerId+'" style="position:relative;width:'+this.baseWidth+setPixel(this.baseWidth)+';height:'+this.baseHeight+setPixel(this.baseHeight)+';cursor:pointer;"></div>';
																				document.write(auNode);
																							/* bgSkinUnit - align adUnit center portion in viewport */
								},
		        getInsertToNode:function(insertTo){
            var pNode = null;
			insertTo = (insertTo == 'adUnitContainer') ? this.adUnitContainerId : insertTo;
			if(insertTo == 'body'){
                pNode = document.body;
            } 
						else {
				pNode = getElById(insertTo); // get the node by id
				if(!pNode){
					pNode = document.querySelector(insertTo);
				}
				if(!pNode){
					if(getElByClass(insertTo))
						pNode = getElByClass(insertTo)[0]; // get the node by class
				}	
            }
            pNode = (pNode == null) ? document.body : pNode;
            return pNode;
        },
				renderBaseContainer:function(){
            				var insertBaseTo = this.insertBaseTo;
				var pNode = this.getInsertToNode(insertBaseTo); //parent node
				var cNode = createDivNode(this.baseContainerId); //child node
				cNode.style.backgroundColor = this.baseBgColor;
				
				/*Smooth responsive and stretch variables*/
								
												prependNode(cNode, pNode);
												if(insertBaseTo == 'adUnitContainer'){
					cNode.style.position = 'relative';
				} else {
					var box = getBox(getElById(this.adUnitContainerId));
					var t = box.top;
					var l = box.left;
					cNode.style.left = l + "px";
					cNode.style.top = t + "px";
					cNode.style.position = 'absolute';
				}
									},
								renderExpansionContainer:function(){
            var insertExpansionTo = this.insertExpansionTo;
            var pNode = this.getInsertToNode(insertExpansionTo); //parent node
            var cNode = createDivNode(this.expansionContainerId); //child node
			if(insertExpansionTo != "adUnitContainer" && (this.expansionType == "image" || this.expansionType == "flash"))
				cNode.style.cursor = "pointer";
			cNode.style.backgroundColor = this.expansionBgColor;
						cNode.style.zIndex = 1999998;
						if(this.insertExpansionAs == "fc"){
				prependNode(cNode, pNode);
			}else{
				pNode.appendChild(cNode);
			}
					},
				getClosestDim:function(unitArr, pWidth, pHeight){
						// COM: Setting winWidth = adSlotWidth, when there are multiple ad units and bpType='as'
							var winDim = getBrowserWindowProps();
				var currentWinWidth = winDim[0],
					currentWinHeight = winDim[1];
						
			var leastDiff = 10000; 
			var leastWidthDiff = 10000; 
			var	leastHeightDiff = 10000;
			var bestFitBannerDim = '';
			var diffArr = new Array();
			var cdwObj,cdhObj = {};
			var chkDiff = false;
			var smallestDiff = -1; 
			var smallestWidth, smallestDim = null;

			for(var auIndex in unitArr){
				var currentObjKey = unitArr[auIndex]['dimension'],
					specifiedWidthAvl = unitArr[auIndex].hasOwnProperty('specifiedWidth');
					
				var assetWidthVal = (specifiedWidthAvl) ? parseInt(unitArr[auIndex]['specifiedWidth']) :
									parseInt(currentObjKey.split('x')[0]);
								var assetWidth = assetWidthVal;
				var assetHeight = parseInt(currentObjKey.split('x')[1]);
								if(assetWidth == currentWinWidth) {
					leastDiff = 0;
					bestFitBannerDim = currentObjKey;
					break;
				} else if(assetWidth < currentWinWidth && (currentWinWidth - assetWidth) < leastDiff) {
					leastDiff = (currentWinWidth - assetWidth);
					bestFitBannerDim = currentObjKey;
				} 
				if(smallestWidth == null || assetWidth < smallestWidth) {
					smallestWidth = assetWidth;
					smallestDim = currentObjKey;
				}
							}
						if(bestFitBannerDim == '' && smallestDim != null) {
				bestFitBannerDim = smallestDim;
			}
			
			
			return bestFitBannerDim;
		},
				setBaseProperties:function(bestFitDim){
						var bestFitBase = {};
			for(var auIndex in this.responsiveBaseUnitArr) {
				bestFitBase = this.responsiveBaseUnitArr[auIndex];
				if(bestFitBase['dimension'] == bestFitDim)
					break;
			}
			if(bestFitBase) {
				this.baseHasLayout = bestFitBase['hasLayout'];
				this.baseBgType = '';
				this.baseBgURL = '';
				this.baseBgColor = '';
				if(this.baseHasLayout == 1) {
					this.baseType = 'html';
					this.baseURL = 'https://as.jivox.com/unit/layout_renderer.php?creativeUnitType=20&bDim=300x250&bUnitId=2000&siteId=3591c9f01ccaf9&campaignId=178383&es_pId=92K8OO&isDynamic=1&us_privacy=%24%7BUS_PRIVACY%7D&gdpr=&gdpr_consent=&jvxVer=2&dspId=DFP-BM&cMacro=https%3A%2F%2Fgoogleads.g.doubleclick.net%2Fdbm%2Fclk%3Fsa%3DL%26ai%3DCjol5b1znZeP_FdOc6toP5Ju8qA2usKXUddCw0pCEEv-FgIrVCRABILflhCFgyfarjNCkiBLIAQmoAwHIA5sEqgSxAk_QVOmmk-xT-B7WZNirTm9zoyiIfagL12tgNEhorV6I5ux0lnSuvAIhGg9grs5iBCocvxYhluTwgi2-lDUHpbHnWWJvdZkEyFNKlCZQZO0wymHkywFVEK1gwmS8bAKZ9s1C4UJn6dZPruAkpC3CT202QuFJ91zyPIMM2xPztK85d4osKAPEApWXpnRrVMaIaWjgOOJA_gfZyGiGg64Rq74Y56O0pFBzexd9xjmHpp-rUI3Au-Pn3x4-RSGEz9VCnz64Q-jKRsaxrm1OeCyFwAmDzl4hhL6tZqYXL8uHR2XdnY95Jw5Z8lD86TJDVRrWqG0AKIrUemz058YJV-qzjaSyphjY2Do-7QgVGULO7WbvcVdQaMRXbkK-3L-9fWSB4nzr-8PJgTM1n0GRS_v24bciwAT3iNTw1gTgBAOIBfK_mIdOkAYBoAZNgAex3vzUA6gH2baxAqgHjs4bqAeT2BuoB-6WsQKoB_6esQKoB6--sQKoB9XJG6gHpr4bqAeaBqgH89EbqAeW2BuoB6qbsQKoB4OtsQKoB-C9sQKoB_-esQKoB9-fsQLYBwDSCCQIgGEQARhfMgKKAjoJgECAwICAgKAoSL39wTpY0drI0djdhAPyCA1iaWRkZXItMzU0NzcwgAoEmAsByAsBgAwBqg0CVVOwE8SSyhbYEwPYFAHQFQH4FgGAFwE%26ae%3D1%26num%3D1%26cid%3DCAQSKQB7FLtqZnPQC7tvSL7OdDwULCJM1yf0NZPxZqoWfO2pAL4KvmBsNxIkGAE%26sig%3DAOD64_0_TmQRGTwJIu4E0pss-oLK3cJ6dQ%26client%3Dca-pub-5722610347565274%26dbm_c%3DAKAmf-AIzJv1mnwLKW0wq6z84c_3gAIz-7scRwoIlanuszXz0Oswhjbg6-Jf-aawKcK5g5VPKAU12YQIY_GgmObVWXYBd-_vmFLPhB3DgVhzUB95eQvOS9DCkayC4UqZVdFGtPrOQKzXHX1R26k2hJj58TfhTHWYUMpEEgwbAhGiH3gj0iSytMrPpHREffF6HueHhDQnbsLCqpt3j00tWADyvL7JJm-oZJdKbErujp6TR43YArml1C4%26cry%3D1%26dbm_d%3DAKAmf-B_GBZbarXmwj6jYlzXYk0OJCrbFNb6CeERZ1k1_SWo_fxUy3NdUZHC1jcnrG98NXDOTckjuL4ELasTEUV8wX7-V9d7o0gsIPPobP-qdBCgXNxF8S5JNujvuv6CDrusl4JA8XqtPUYphN9aK2bzQvm6zYnZiBb-r7RJQpTqpIJDtiP6PlcqTZPPxGryAn1UM1VpeI4a-nIuNFNFXUbMzfqifXQPnmDt2-L8S9_fuHAMmtfgAjh5Z6sAttuxdGeg1Qdd8YVfdplZUoXM2MJv_MFnEaOQBu67NfTtb1yKWe7MDu1aU_4YF-5FtaHNv7lHMsVRSXYaQzkRu6oRkCLwxiyiJ1Vdo1Cvbm6eJj4jGjVcd2Zuna7i_RiS0U6EMw5vm8SEDNwC7T4FOTl-LZRxXdoIC8MkGTJRYObDK0jdqpNpGyHfzj-JIflit-FNmRYtvvK5oXI1NBO8B1k-dIFIFvFc3q5-XZuD9ndiGwrwGFfxQW-fz5QyasCLLfR4yCaAcdVvNLkXDgemTf4YiKJCP2n9u5G4Tjlom9x_a3aREyYLS5nDtDlt02mf0saHxH68Xb0s8Knu04VpJsX8kodQAuMSGzRAULNAaBty4EFjgPoKi5Jc02k%26adurl%3D&r=1709661295360419&objectName=jvx_65e75fe341985';
											this.baseURL += '&jvxSessionId=1709662179.4561';
										if(bestFitBase['type'] == 'banner') {
						this.baseURL += '&base=1';
					}
															this.baseURL += '&loadLayout=0';
										this.baseBgType = bestFitBase['backgroundType'];
					this.baseBgURL = bestFitBase['url'];
                    this.baseURL += "&creativeResolveBeginTime="+Date.parse(creativeResolveBeginTime);
                    				} else {
					this.baseType = bestFitBase['backgroundType'];
					this.baseURL = bestFitBase['url'];
				}

				if(bestFitBase['backgroundColor'] != null && bestFitBase['backgroundColor'] != '') {
					this.baseBgColor = bestFitBase['backgroundColor'];
				} else {
					this.baseBgColor = '';
				}
				this.baseFallbackType = bestFitBase['fallbackType'];
				this.baseFallbackURL = bestFitBase['fallbackURL'];		
				this.baseFallbackFileName = bestFitBase['fallbackFileName'];

				//Todo: replace special characters, make sure that widget source is syntactically correct
 				this.baseFallbackWidgetSrc = bestFitBase['fallbackWidgetSrc'];
				
								this.baseWidth = bestFitDim.split('x')[0];
								this.baseHeight = bestFitDim.split('x')[1];
                
                                this.origBaseWidth = bestFitDim.split('x')[0];
                this.origBaseHeight = bestFitDim.split('x')[1];
                
				
								
				/*Smooth responsive and stretch variables*/
					
												this.baseDim = bestFitBase['dimension'];
				
							}
		},
		setExpandProperties:function(bestFitDim){
						var bestFitExpand = {};
			for(var auIndex in this.responsiveExpandUnitArr) {
				bestFitExpand = this.responsiveExpandUnitArr[auIndex];
				if(bestFitExpand['dimension'] == bestFitDim)
					break;
			}
			if(bestFitExpand) {
				this.expansionHasLayout = bestFitExpand['hasLayout'];
				this.expansionType = '';
				this.expansionURL = '';
				this.expansionBgType = '';
				this.expansionBgURL = '';
				this.expansionBgColor = '';
				if(this.expansionHasLayout == 1) {
					this.expansionType = 'html';
										var adUnitIdStr = '';
										this.expansionURL = 'https://as.jivox.com/unit/layout_renderer.php?creativeUnitType=20&bDim=300x250&&siteId=3591c9f01ccaf9&campaignId=178383&es_pId=92K8OO&isDynamic=1&us_privacy=%24%7BUS_PRIVACY%7D&gdpr=&gdpr_consent=&jvxVer=2&dspId=DFP-BM&cMacro=https%3A%2F%2Fgoogleads.g.doubleclick.net%2Fdbm%2Fclk%3Fsa%3DL%26ai%3DCjol5b1znZeP_FdOc6toP5Ju8qA2usKXUddCw0pCEEv-FgIrVCRABILflhCFgyfarjNCkiBLIAQmoAwHIA5sEqgSxAk_QVOmmk-xT-B7WZNirTm9zoyiIfagL12tgNEhorV6I5ux0lnSuvAIhGg9grs5iBCocvxYhluTwgi2-lDUHpbHnWWJvdZkEyFNKlCZQZO0wymHkywFVEK1gwmS8bAKZ9s1C4UJn6dZPruAkpC3CT202QuFJ91zyPIMM2xPztK85d4osKAPEApWXpnRrVMaIaWjgOOJA_gfZyGiGg64Rq74Y56O0pFBzexd9xjmHpp-rUI3Au-Pn3x4-RSGEz9VCnz64Q-jKRsaxrm1OeCyFwAmDzl4hhL6tZqYXL8uHR2XdnY95Jw5Z8lD86TJDVRrWqG0AKIrUemz058YJV-qzjaSyphjY2Do-7QgVGULO7WbvcVdQaMRXbkK-3L-9fWSB4nzr-8PJgTM1n0GRS_v24bciwAT3iNTw1gTgBAOIBfK_mIdOkAYBoAZNgAex3vzUA6gH2baxAqgHjs4bqAeT2BuoB-6WsQKoB_6esQKoB6--sQKoB9XJG6gHpr4bqAeaBqgH89EbqAeW2BuoB6qbsQKoB4OtsQKoB-C9sQKoB_-esQKoB9-fsQLYBwDSCCQIgGEQARhfMgKKAjoJgECAwICAgKAoSL39wTpY0drI0djdhAPyCA1iaWRkZXItMzU0NzcwgAoEmAsByAsBgAwBqg0CVVOwE8SSyhbYEwPYFAHQFQH4FgGAFwE%26ae%3D1%26num%3D1%26cid%3DCAQSKQB7FLtqZnPQC7tvSL7OdDwULCJM1yf0NZPxZqoWfO2pAL4KvmBsNxIkGAE%26sig%3DAOD64_0_TmQRGTwJIu4E0pss-oLK3cJ6dQ%26client%3Dca-pub-5722610347565274%26dbm_c%3DAKAmf-AIzJv1mnwLKW0wq6z84c_3gAIz-7scRwoIlanuszXz0Oswhjbg6-Jf-aawKcK5g5VPKAU12YQIY_GgmObVWXYBd-_vmFLPhB3DgVhzUB95eQvOS9DCkayC4UqZVdFGtPrOQKzXHX1R26k2hJj58TfhTHWYUMpEEgwbAhGiH3gj0iSytMrPpHREffF6HueHhDQnbsLCqpt3j00tWADyvL7JJm-oZJdKbErujp6TR43YArml1C4%26cry%3D1%26dbm_d%3DAKAmf-B_GBZbarXmwj6jYlzXYk0OJCrbFNb6CeERZ1k1_SWo_fxUy3NdUZHC1jcnrG98NXDOTckjuL4ELasTEUV8wX7-V9d7o0gsIPPobP-qdBCgXNxF8S5JNujvuv6CDrusl4JA8XqtPUYphN9aK2bzQvm6zYnZiBb-r7RJQpTqpIJDtiP6PlcqTZPPxGryAn1UM1VpeI4a-nIuNFNFXUbMzfqifXQPnmDt2-L8S9_fuHAMmtfgAjh5Z6sAttuxdGeg1Qdd8YVfdplZUoXM2MJv_MFnEaOQBu67NfTtb1yKWe7MDu1aU_4YF-5FtaHNv7lHMsVRSXYaQzkRu6oRkCLwxiyiJ1Vdo1Cvbm6eJj4jGjVcd2Zuna7i_RiS0U6EMw5vm8SEDNwC7T4FOTl-LZRxXdoIC8MkGTJRYObDK0jdqpNpGyHfzj-JIflit-FNmRYtvvK5oXI1NBO8B1k-dIFIFvFc3q5-XZuD9ndiGwrwGFfxQW-fz5QyasCLLfR4yCaAcdVvNLkXDgemTf4YiKJCP2n9u5G4Tjlom9x_a3aREyYLS5nDtDlt02mf0saHxH68Xb0s8Knu04VpJsX8kodQAuMSGzRAULNAaBty4EFjgPoKi5Jc02k%26adurl%3D&r=1709661295360419&objectName=jvx_65e75fe341985'+adUnitIdStr;
											this.expansionURL += '&jvxSessionId=1709662179.4561';
										this.expansionBgType = bestFitExpand['backgroundType'];
					this.expansionBgURL = bestFitExpand['url'];
                    				} else {
					this.expansionType = bestFitExpand['backgroundType'];
					this.expansionURL = bestFitExpand['url'];
				}
				
				var expURL = this.expansionURL;
				if(this.baseDim == "" && this.expansionHasLayout == 1){
					expURL = (expURL.indexOf("&fireViewabilityEvent=1") != -1) ? expURL : (expURL + "&fireViewabilityEvent=1");
				} else {
					expURL = (expURL.indexOf("&fireViewabilityEvent=0") != -1) ? expURL : (expURL + "&fireViewabilityEvent=0");
				}
								if(this.baseHasLayout == 1 && this.expansionHasLayout == 1){
					expURL = (expURL.indexOf("&fireCL=0") != -1) ? expURL : (expURL + "&fireCL=0");
				}
								
				if(this.baseHasLayout != 1 && this.expansionHasLayout == 1){
                    expURL = (expURL.indexOf("&creativeResolveBeginTime") != -1) ? expURL : (expURL + "&creativeResolveBeginTime="+Date.parse(creativeResolveBeginTime));
                }
				this.expansionURL = expURL;
				this.expansionBgColor = bestFitExpand['backgroundColor'];
				if(this.expansionBgColor == '' || this.expansionBgColor == null) {
					this.expansionBgColor = 'transparent';
				}

				this.expansionFallbackType = bestFitExpand['fallbackType'];
				this.expansionFallbackURL = bestFitExpand['fallbackURL'];
				this.expansionFallbackFileName = bestFitExpand['fallbackFileName'];

				//Todo: replace special characters, make sure that widget source is syntactically correct
				this.expansionFallbackWidgetSrc = bestFitExpand['fallbackWidgetSrc'];
				this.expansionWidth = bestFitDim.split('x')[0];
				this.expansionHeight = bestFitDim.split('x')[1];
								this.expDim = bestFitExpand['dimension'];
			}
		},
		onAdUnitMouseOver:function(e) {
			var that = this;			
						this.DwellRecorded = false;
			if(null == this.DwellElapsedTimer){
				this.DwellElapsedTimer = setInterval(function(){ ++that.DwellElapsedTime; }, 1000);
			}
			
			if(null == this.DwellTimer){
				var dwellTime = parseInt(60000) + 50; //adding 50ms to make sure setTimeOut is triggered after setInterval.
				this.DwellTimer = setTimeout(function(){that.recordDwellEvent(49, that.DwellElapsedTime); },dwellTime);
			}
			
			if(!this.UIRRecorded){
				this.UIRTimer = setTimeout(function(){that.recordUIREvent(48);},500);
			}
								},

		clickHandler:function(eventSrc, event){
			if(eventSrc){
				var eventSrcId = eventSrc.id;
				if(eventSrc.parentNode != null)
					var parentId = eventSrc.parentNode.id;
				if(eventSrcId == this.baseId || eventSrcId == this.base2Id){
										this.openClickThrough(event);
									} else if(eventSrcId == this.baseBgId) {
									} else if(eventSrcId == this.baseInterceptorId || eventSrcId == this.base2InterceptorId){
															this.openClickThrough(event);
									} else if(eventSrcId == this.expansionId){
											this.openClickThrough(event);
									} else if(eventSrcId == this.expInterceptorId){
											this.openClickThrough(event);
									} else if(eventSrcId == this.closeExpansionId){
					this.closeExpansion();
				} else if(eventSrcId == this.baseCloseId) {
					this.closeBase();
				} 
											}
		},
		mouseenterHandler:function(event){
			var eventSrc = event.target || event.srcElement;
			var fromEl = event.fromElement || event.relatedTarget;
			var toEl = event.toElement || event.relatedTarget;
			if(eventSrc){
				var eventSrcId = eventSrc.id;
				if(eventSrcId == this.baseContainerId || eventSrcId == this.baseContainerId+'0' || eventSrcId == this.countDownContainerId || eventSrcId == this.expansionContainerId || eventSrcId == this.closeExpansionId){
										var frmElId = (fromEl) ? fromEl.id : "";
					if(frmElId != this.expansionContainerId && frmElId != this.expansionId && frmElId != this.closeExpansionId
					 && frmElId != this.expInterceptorId && frmElId != this.expansionLoaderId){
						
						if(eventSrcId == this.baseContainerId || eventSrcId == this.baseContainerId+'0'){
							this.onBaseMouseOver();
						}
						if(this.expansionOpen){
							if(frmElId != this.baseContainerId && frmElId != this.baseContainerId+'0' && frmElId != this.baseId 
							 && frmElId != this.baseInterceptorId){
																this.onAdUnitMouseOver();
															}
						}else{
														this.onAdUnitMouseOver();
													}
					}
										
										this.allowExpToExpand = false;
									}
			}	
		},
		mouseleaveHandler:function(event){
			var eventSrc = event.target || event.srcElement;
						var fromEl = event.fromElement || event.relatedTarget;
						var toEl = event.toElement || event.relatedTarget;
			if(eventSrc){
				var eventSrcId = (eventSrc.id) ? eventSrc.id : "";
				if(eventSrcId == this.baseContainerId || eventSrcId == this.baseContainerId+'0' || eventSrcId == this.countDownContainerId || eventSrcId == this.expansionContainerId || eventSrcId == this.closeExpansionId){
				 
					var frmElId = (fromEl) ? fromEl.id : "";
					var toElId = (toEl) ? ((toEl.id) ? toEl.id : "") : "";
										if(eventSrcId == this.baseContainerId || eventSrcId == this.baseContainerId+'0'){
						this.onBaseMouseOut();
					}
										if((frmElId == this.expansionContainerId || frmElId == this.expansionId || frmElId == this.closeExpansionId 
					 || frmElId == this.expInterceptorId || frmElId == this.expansionLoaderId) && (toElId != this.baseContainerId && toElId != this.baseContainerId+'0' && toElId != this.baseId && toElId != this.baseInterceptorId)){
					 
												this.onAdUnitMouseOut();
											}else if((frmElId == this.baseContainerId || frmElId == this.baseContainerId+'0' || frmElId == this.baseId 
					 || frmElId == this.baseInterceptorId) && (toElId != this.expansionContainerId && toElId != this.expansionId && toElId != this.closeExpansionId && toElId != this.expansionLoaderId && toElId != this.expInterceptorId)){
						
												this.onAdUnitMouseOut();
											}
										
										this.allowExpToExpand = true;	// allows expansion to expand - tells whether the mouseout on adUnit happened really. #M-4891.
									}
			}
		},
		visibilityStateHandler:function(){
			if(document.visibilityState == "hidden"){
				// hasHidden = true;
			}else{
							}
		},
		onWindowResize:function(){
						if(this.leaveBehindOnVpOut && !this.isAdInOriginalState){		
			this.leaveBehindTheAd(this.leaveBehindOnVpOut,this.leaveBehindScalePer,this.leaveBehindXVal,this.leaveBehindYVal,'','1',true);
		}
																			        		},
		eventController:function(event){
			var eventSrc = event.target || event.srcElement;
			var eventType = event.type;
			if(eventType == 'click'){
				this.clickHandler(eventSrc,event);
			} 
						else if(eventType == 'resize'){
				this.onWindowResize();
			} else if(eventType == 'orientationchange'){
				this.onWindowResize();
			} else if(eventType == 'visibilitychange'){
				this.visibilityStateHandler();
			} else if(eventType == 'mouseenter'){
				this.mouseenterHandler(event);
			} else if(eventType == 'mouseleave'){
				this.mouseleaveHandler(event);
			}
					},
		delegateEvents:function(){
			var that = this;
						addEvent(getElById(this.baseContainerId), "mouseenter", that.listenerCallback, false);
			addEvent(getElById(this.baseContainerId), "mouseleave", that.listenerCallback, false);
							
														
			addEvent(document, "click", that.listenerCallback, false);
			addEvent(window, "resize", that.listenerCallback, false);
			addEvent(window, "orientationchange", that.listenerCallback, false);
						var browserName = this.browserName;
			if((browserName == 'Safari') || (browserName == 'iPhone') || (browserName == 'iPod') || (browserName == 'iPad')){
				addEvent(document, "visibilitychange", that.listenerCallback, false);
			}
		},
		listenerCallback:function(event) {
			jvx_65e75fe341985.eventController(event); 
		},
        removeEvents:function(){
			var that = this;
			var elArr = [{"el":window,"eventTypeArr":["resize","orientationchange","load"]},
						 {"el":document,"eventTypeArr":["click","mouseover","mouseout","visibilitychange"]}];
			var elLen = elArr.length;
            for(var i = 0;i < elLen;i++){
            	var eventLen = elArr[i]["eventTypeArr"].length;
				for(var j = 0;j < eventLen;j++){
					removeEvent(elArr[i]["el"],elArr[i]["eventTypeArr"][j],that.listenerCallback, false);
				}
			}
		},
                        isLayoutURLReady:function(){
			        },
		getElById:function(id){
			return getElById(id);
		},
		sendPostMessage : function(winRef, msg){
			postHtml5Message(winRef, msg);
		},
		createDivNode:function(id){
			return createDivNode(id);
		},
		appendNode:function(parentNode, childNode){
            return parentNode.appendChild(childNode);
		},
		addEvent:function(el, event, fn, capture){
            return addEvent(el, event, fn, capture);
		},
		autoExpand:function(){
                        this.openExpansion(true);
                        var self = this;
            this.autoExpandTimerRef = setTimeout(function(){self.closeExpansion(true);},7 * 1000);
                    },
                
                        
                		init:function(){
						
						
						this.renderAdUnitContainer(); 
			            			            this.renderBaseContainer();
			
			
											this.renderBase();
                                								
			
			
						
						
												
		/*	
					*/	
								//	console.log("Load exp");
			
			 

			 
			
			
 			this.delegateEvents();

					
																		
													var visibilityThreshold = this.origBaseWidth * this.origBaseHeight > 242500 ? 0.3 : 0.5;
				if(!validateVal(this.baseHasLayout) || (this.baseDim == "" && !validateVal(this.expansionHasLayout)))
				adViewabilityDetectInit(visibilityThreshold);
					}
	};
	return CreativeUnit;
})();


var jvx_65e75fe341985 = new CreativeUnit("_65e75fe341985");
jvx_65e75fe341985.DYReportingKey = "";
jvx_65e75fe341985.DYSegmentName = "";
jvx_65e75fe341985.eventServerParams = "";
	if(jvx_65e75fe341985NonMraidTagInMraidEnv){
				jvx_65e75fe341985.recordEvent(75);
	}
    jvx_65e75fe341985.init();


/*! srcdoc-polyfill - v0.1.1 - 2013-03-01
* http://github.com/jugglinmike/srcdoc-polyfill/
* Copyright (c) 2013 Mike Pennisi; Licensed MIT */
(function(t,e){var c,n,o=t.srcDoc,r=!!("srcdoc"in e.createElement("iframe")),i={compliant:function(t,e){e&&t.setAttribute("srcdoc",e)},legacy:function(t,e){var c;t&&t.getAttribute&&(e?t.setAttribute("srcdoc",e):e=t.getAttribute("srcdoc"),e&&(c="javascript: window.frameElement.getAttribute('srcdoc');",t.setAttribute("src",c),t.contentWindow&&(t.contentWindow.location=c)))}},s=t.srcDoc={set:i.compliant,noConflict:function(){return t.srcDoc=o,s}};if(!r)for(s.set=i.legacy,n=e.getElementsByTagName("iframe"),c=n.length;c--;)s.set(n[c])})(this,this.document);

}




/* Jivox � 2024 */
