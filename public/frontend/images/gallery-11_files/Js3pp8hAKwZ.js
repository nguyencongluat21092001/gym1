if (self.CavalryLogger) { CavalryLogger.start_js(["e+SPTnn"]); }

__d("TextWithEntities.react",["BaseTextWithEntities.react","Link.react","TextWithEmoticons.react","react"],(function(a,b,c,d,e,f,g){"use strict";var h=d("react");function i(a){return a.replace(/<3\b|&hearts;/g,"\u2665")}a=function(a){babelHelpers.inheritsLoose(b,a);function b(){var b,d;for(var e=arguments.length,f=new Array(e),g=0;g<e;g++)f[g]=arguments[g];return(b=d=a.call.apply(a,[this].concat(f))||this,d.$1=function(a){if(d.props.renderEmoticons||d.props.renderEmoji){var b=a.trim();return h.jsx(c("TextWithEmoticons.react"),{isWhitespace:b.length===0,text:a,renderEmoticons:d.props.renderEmoticons,renderEmoji:d.props.renderEmoji,size:d.props.showEmojisStandalone?32:16})}else return i(a)},d.$2=function(a,b){if(d.props.interpolator)return d.props.interpolator(a,b);else if(b.entity&&b.entity.url!==void 0&&b.entity.url!==null)return h.jsx(c("Link.react"),{href:b.entity,children:a});else if(b.entity&&b.entity.url===void 0)return h.jsx(c("Link.react"),{href:b.entity,children:a});else return a},b)||babelHelpers.assertThisInitialized(d)}var d=b.prototype;d.render=function(){return h.jsx(c("BaseTextWithEntities.react"),babelHelpers["extends"]({},this.props,{textRenderer:this.$1,rangeRenderer:this.$2,ranges:this.props.ranges,imageRanges:this.props.imageRanges,aggregatedRanges:this.props.aggregatedRanges,metaRanges:this.props.metaRanges,textDelightRanges:this.props.textDelightRanges,text:this.props.text}))};return b}(h.Component);g["default"]=a}),98);
__d("ScrollBoundaryContain",["Event","Scroll","UserAgent"],(function(a,b,c,d,e,f){var g=function(a,c){c.deliberateSync=!0;if(c.axis!==void 0&&c.axis===c.HORIZONTAL_AXIS||c.wheelDeltaX&&!c.wheelDeltaY||c.deltaX&&!c.deltaY)return;var d=c.wheelDelta||-c.deltaY||-c.detail,e=a.scrollHeight,f=a.clientHeight;if(e>f){c.stopPropagation();a=b("Scroll").getTop(a);(d>0&&a===0||d<0&&a>=e-f-1)&&c.preventDefault()}},h=void 0,i=function(){if(h)return h;h=b("UserAgent").isBrowser("Firefox")?"WheelEvent"in window?"wheel":"DOMMouseScroll":"mousewheel";return h},j=function(a){var c=g.bind(null,a),d=i(),e,f=b("Event").listen(a,"mouseenter",function(){e==null&&(e=b("Event").listen(a,d,c))}),h=b("Event").listen(a,"mouseleave",function(){e&&(e.remove(),e=null)}),j=!1;return{remove:function(){if(j)return;e&&(e.remove(),e=null);f.remove();h.remove();j=!0}}},k=function(a){a.deliberateSync=!0,this.scrollHeight>this.clientHeight&&a.stopPropagation()},l=function(a){var c=b("Event").listen(a,i(),k,null,{passive:!0}),d=!1;return{remove:function(){if(d)return;c.remove();d=!0}}};a={applyToElem:function(a){if("overscrollBehavior"in a.style){a.style.overscrollBehavior="contain";return l(a)}else{a.style.msScrollChaining!==void 0&&(a.style.msScrollChaining="none");return j(a)}}};e.exports=a}),null);
__d("ScrollableArea.react",["cx","Bootloader","ScrollBoundaryContain","Style","SubscriptionsHandler","cr:1503160","joinClasses","prop-types","react"],(function(a,b,c,d,e,f,g,h){"use strict";var i=d("react"),j="uiScrollableArea native",k="uiScrollableAreaWrap scrollable",l="uiScrollableAreaBody",m="uiScrollableAreaContent";a=function(a){babelHelpers.inheritsLoose(e,a);function e(d){var e;e=a.call(this,d)||this;e.$2=i.createRef();e.$4=i.createRef();e.$6=i.createRef();e.getArea=function(){return e.$1};e.$7=function(a){if(e.$3)return;var c=b("cr:1503160")!=null?b("cr:1503160").findDOMNode(e.$4.current):e.$4.current;e.$1=a.fromNative(c,{fade:e.props.fade,persistent:e.props.persistent,shadow:e.props.shadow===void 0?!0:e.props.shadow,tabIndex:e.props.tabIndex});e.$8();(e.props.onScroll||e.props.onEndReached||e.props.onTopReached)&&e.$1&&e.$1.subscribe("scroll",e.$9);e.props.onScrollableAreaLoaded&&e.props.onScrollableAreaLoaded(e.$1)};e.$9=function(){e.props.onScroll&&e.props.onScroll(),e.$1&&e.$1.isScrolledToBottom()?e.props.onEndReached&&e.props.onEndReached():e.$1&&e.$1.isScrolledToTop()&&(e.props.onTopReached&&e.props.onTopReached())};e.$5=new(c("SubscriptionsHandler"))();return e}var f=e.prototype;f.render=function(){var a={height:this.props.height},b=babelHelpers["extends"]({},this.props);delete b.maxHeight;delete b.fade;delete b.persistent;delete b.contain;return i.jsx("div",babelHelpers["extends"]({},b,{className:c("joinClasses")(this.props.className,j),ref:this.$4,role:this.props.role,style:babelHelpers["extends"]({},this.props.style||{},a),children:i.jsx("div",{className:k,ref:this.$6,role:this.props.role,style:{maxHeight:this.props.maxHeight},children:i.jsx("div",{className:l,ref:this.$2,role:this.props.role,children:i.jsx("div",{className:m,role:this.props.contentRole||this.props.role,children:this.props.children})})})}))};f.setScrollTop=function(a,b,c){this.$1&&this.$1.setScrollTop(a,b,c)};f.getScrollTop=function(){return this.$1&&this.$1.getScrollTop()||0};f.componentDidMount=function(){var a=c("Bootloader").loadModules(["ScrollableArea"],this.$7,"ScrollableArea.react");this.$5.addSubscriptions(a);a=b("cr:1503160")!=null?b("cr:1503160").findDOMNode(this.$6.current):this.$6.current;if(a&&this.props.contain){a=d("ScrollBoundaryContain").applyToElem(a);a&&this.$5.addSubscriptions(a)}};f.componentDidUpdate=function(a){a.width!==this.props.width&&this.$8();a=this.getArea();a&&a.throttledAdjustGripper()};f.componentWillUnmount=function(){this.$1&&this.$1.destroy(),this.$3=!0,this.$5.release()};f.$8=function(){var a=b("cr:1503160")!=null?b("cr:1503160").findDOMNode(this.$2.current):this.$2.current;c("Style").set(a,"width",this.props.width+"px")};return e}(i.Component);a.propTypes={width:c("prop-types").number,height:c("prop-types").oneOfType([c("prop-types").number,c("prop-types").string]),maxHeight:c("prop-types").oneOfType([c("prop-types").number,c("prop-types").string]),onScroll:c("prop-types").func,onEndReached:c("prop-types").func,onTopReached:c("prop-types").func,onScrollableAreaLoaded:c("prop-types").func,shadow:c("prop-types").bool,fade:c("prop-types").bool,persistent:c("prop-types").bool,role:c("prop-types").string,contentRole:c("prop-types").string,contain:c("prop-types").bool};a.defaultProps={contain:!0};g["default"]=a}),98);
__d("AsyncUploadBase",["ArbiterMixin","AsyncRequest","AsyncResponse","BrowserSupport","Form","forEachObject","mixin","removeFromArray"],(function(a,b,c,d,e,f,g){a=function(a){babelHelpers.inheritsLoose(b,a);b.parseFiles=function(a){var b={};c("forEachObject")(a,function(a,c){if(Array.isArray(a))b[c]=a;else{b[c]=[];if(a instanceof window.FileList)for(var d=0;d<a.length;d++)b[c].push(a.item(d));else(a instanceof window.File||a instanceof window.Blob)&&b[c].push(a)}});return b};function b(b){var c;c=a.call(this)||this;c._allowCrossOrigin=!1;c._allowCrossPageTransition=!1;c._customHeader={};c._inFlight=!1;c._limit=10;c._option={};c._preventDefaultErrorHandler=!1;c._suspended=!1;b&&c.setURI(b);c.setNetworkErrorRetryLimit(0);return c}var e=b.prototype;e.setAllowCrossOrigin=function(a){this._allowCrossOrigin=!!a;return this};e.setAllowCrossPageTransition=function(a){this._allowCrossPageTransition=!!a;return this};e.setCustomHttpHeader=function(a,b){this._customHeader[a]=b;return this};e.setData=function(a){this._data=a;return this};e.setOption=function(a,b){this._option[a]=b;return this};e.setPreventDefaultErrorHandler=function(a){this._preventDefaultErrorHandler=a;return this};e.setLimit=function(a){this._limit=a;return this};e.setNetworkErrorRetryLimit=function(a){this._retryLimit=a;return this};e.setPreprocessHandler=function(a){this._preprocessHandler=a;return this};e.setRelativeTo=function(a){this._relativeTo=a;return this};e.setStatusElement=function(a){this._statusElement=a;return this};e.setURI=function(a){this._uri=a;return this};e.suspend=function(){this._suspended=!0;return this};e.resume=function(){this._suspended=!1;this._processQueue();return this};e.isUploading=function(){return this._inFlight};e._createFileUpload=function(a,b,c){return new h(a,b,c)};e._processQueue=function(){if(this._suspended)return;while(this._pending.length<this._limit){if(!this._waiting.length)break;var a=this._waiting.shift(),b=this._preprocessHandler;b?b(a,this._processUpload.bind(this)):this._processUpload(a);this._pending.push(a)}};e._processUpload=function(a){var b=d("Form").createFormData(a.getData()||this._data);if(a.getFile()){b.append(a.getName(),a.getFile());var e=a.getFile().uploadID;e&&b.append("upload_id",e);a.getAdditionalData().forEach(function(a,c){return b.append(c,a)})}e=new(c("AsyncRequest"))().setAllowCrossOrigin(this._allowCrossOrigin).setAllowCrossPageTransition(this._allowCrossPageTransition).setURI(this._uri).setRawData(b).setStatusElement(this._statusElement).setHandler(this._success.bind(this,a)).setErrorHandler(this._failure.bind(this,a)).setUploadProgressHandler(this._progress.bind(this,a)).setInitialHandler(this._initial.bind(this,a));for(var f in this._option)e.setOption(f,this._option[f]);for(var g in this._customHeader)e.setRequestHeader(g,this._customHeader[g]);this._relativeTo&&e.setRelativeTo(this._relativeTo);e.send();a.setAsyncRequest(e);this._inFlight=!0;a.getRetryCount()||this.inform("start",a)};e._abort=function(a){this._pending.indexOf(a)!==-1&&(c("removeFromArray")(this._pending,a),this._processQueue()),c("removeFromArray")(this._waiting,a),a.abort()};e._initial=function(a){if(a.isAborted())return;this.inform("initial",a)};e._success=function(a,b){if(a.isAborted()){this.inform("success_after_abort",b);return}this._complete(a);this.inform("success",a.handleSuccess(b));this._processQueue()};e._retryUpload=function(a){a.increaseRetryCount(),this._processUpload(a)};e._failure=function(a,b){if(a.isAborted())return;if(b.error===1004&&a.getRetryCount()<(this._retryLimit||0))return this._retryUpload(a);this._complete(a);this.inform("failure",a.handleFailure(b))!==!1&&(this._preventDefaultErrorHandler||c("AsyncResponse").defaultErrorHandler(b));this._processQueue()};e._progress=function(a,b){if(a.isAborted())return;this.inform("progress",a.handleProgress(b))};e._complete=function(a){c("removeFromArray")(this._pending,a),this._pending.length||(this._inFlight=!1)};b.isSupported=function(){return d("BrowserSupport").hasFileAPI()};return b}(c("mixin")(d("ArbiterMixin")));var h=function(){function a(a,b,c){this._additionalData=new Map(),this._success=null,this._response=null,this._progressEvent=null,this._request=null,this._numRetries=0,this._aborted=!1,this._name=a,this._file=b,this._data=c}var b=a.prototype;b.getName=function(){return this._name};b.getFile=function(){return this._file};b.setFile=function(a){this._file=a};b.getData=function(){return this._data};b.getAdditionalData=function(){return this._additionalData};b.isComplete=function(){return this._success!==null};b.isSuccess=function(){return this._success===!0};b.getResponse=function(){return this._response};b.getProgressEvent=function(){return this._progressEvent};b.setAsyncRequest=function(a){this._request=a;return this};b.increaseRetryCount=function(){this._numRetries++;return this};b.getRetryCount=function(){return this._numRetries};b.isWaiting=function(){return!this._request};b.isAborted=function(){return this._aborted};b.abort=function(){this._request=null,this._aborted=!0};b.handleSuccess=function(a){this._success=!0;this._response=a;this._progressEvent=null;return this};b.handleFailure=function(a){this._success=!1;this._response=a;this._progressEvent=null;return this};b.handleProgress=function(a){this._progressEvent=a;return this};return a}();g["default"]=a}),98);
__d("AsyncUploadRequest",["AsyncUploadBase"],(function(a,b,c,d,e,f,g){a=function(a){babelHelpers.inheritsLoose(b,a);function b(){var b,c;for(var d=arguments.length,e=new Array(d),f=0;f<d;f++)e[f]=arguments[f];return(b=c=a.call.apply(a,[this].concat(e))||this,c._files=null,c._uploads=[],c._fileLessUpload=null,b)||babelHelpers.assertThisInitialized(c)}var d=b.prototype;d.setFiles=function(a){this._files=c("AsyncUploadBase").parseFiles(a);return this};d.setAlwaysReturnResponse=function(a){this._shouldAlwaysReturnResponse=a};d.abort=function(){var a=this;this._uploads.forEach(function(b){return a._abort(b)},this)};d.send=function(){if(this._inFlight)return;this._inFlight=!0;this._uploads=[];for(var a in this._files)this._files[a].forEach(function(b){this._uploads.push(this._createFileUpload(a,b))}.bind(this));this._waiting=this._uploads.slice(0);this._pending=[];this._uploads.length?this._processQueue():(this._fileLessUpload=this._createFileUpload(null,null),this._processUpload(this._fileLessUpload))};d._processQueue=function(){a.prototype._processQueue.call(this);if(!this._pending.length&&!this._waiting.length){var b=this._uploads;b=this._shouldAlwaysReturnResponse?this._fileLessUpload!=null?{response:this._fileLessUpload.getResponse(),uploads:b}:{response:b[0].getResponse(),uploads:b}:b;this.inform("complete",b)}};b.isSupported=function(){return c("AsyncUploadBase").isSupported()};return b}(c("AsyncUploadBase"));g["default"]=a}),98);
__d("DOMClone",["DataStoreConfig"],(function(a,b,c,d,e,f){a={shallowClone:function(a){return g(a,!1)},deepClone:function(a){return g(a,!0)}};function g(a,c){a=a.cloneNode(c);typeof a.__FB_TOKEN!=="undefined"&&delete a.__FB_TOKEN;typeof a[b("DataStoreConfig").expandoKey]!=="undefined"&&delete a[b("DataStoreConfig").expandoKey];return a}e.exports=a}),null);
__d("BadgeHelper",["cx","fbt","DOM","joinClasses"],(function(a,b,c,d,e,f,g,h){var i={xsmall:"_5dzz",small:"_5dz-",medium:"_5dz_",large:"_5d-0",xlarge:"_5d-1"},j={bot:"_64nf",verified:"_56_f",trending:"_1gop",topcommenter:"_59t2",page_gray_check:"_5n3t",page_gray_check_solid:"_6w81",work:"_5d62",game_blue:"_59c6",work_non_coworker:"_2ad7",work_official_badge:"_8b0y",work_official_badge_gray:"_8b-m",interest_community:"_3qcr",subscription:"_4fvy",inactive_user:"_7xv0",multi_company_group:"_9o_f"};c=h._("Nh\u00f3m ch\u00ednh th\u1ee9c");var k={bot:h._("Bot"),work_non_coworker:h._("Kh\u00f4ng ph\u1ea3i th\u00e0nh vi\u00ean trong c\u00f4ng ty b\u1ea1n"),work_official_badge:c,work_official_badge_gray:c};function l(a,c){return b("joinClasses")(i[a],j[c],"_5dzy")}function m(a){return k[a]}function a(a,c){a=l(a,c);if(a){c=m(c);return b("DOM").create("span",{className:a},c?b("DOM").create("span",{className:"accessible_elem"},c):null)}}e.exports={getClasses:l,getAlt:m,renderBadge:a,sizes:Object.keys(i),types:Object.keys(j)}}),null);
__d("Badge.react",["BadgeHelper","prop-types","react"],(function(a,b,c,d,e,f,g){var h=d("react");a=function(a){babelHelpers.inheritsLoose(b,a);function b(){return a.apply(this,arguments)||this}var c=b.prototype;c.render=function(){var a=d("BadgeHelper").getAlt(this.props.type);a=a?h.jsx("span",{className:"accessible_elem",children:a}):null;return h.jsx("span",{className:d("BadgeHelper").getClasses(this.props.size,this.props.type),children:a})};return b}(h.Component);a.propTypes={size:c("prop-types").oneOf(d("BadgeHelper").sizes),type:c("prop-types").oneOf(d("BadgeHelper").types)};a.defaultProps={size:"xsmall",type:"verified"};g["default"]=a}),98);
__d("XUIGrayText.react",["cx","XUIText.react","joinClasses","prop-types","react"],(function(a,b,c,d,e,f,g){var h,i=h||b("react");a=function(a){"use strict";babelHelpers.inheritsLoose(c,a);function c(){return a.apply(this,arguments)||this}var d=c.prototype;d.render=function(){var a=this.props,c=a.shade;a=babelHelpers.objectWithoutPropertiesLoose(a,["shade"]);c=(c==="light"?"_50f8":"")+(c==="medium"?" _c24":"")+(c==="dark"?" _50f9":"");return i.jsx(b("XUIText.react"),babelHelpers["extends"]({},a,{className:b("joinClasses")(this.props.className,c),children:this.props.children}))};return c}(i.Component);a.propTypes={shade:b("prop-types").oneOf(["light","medium","dark"])};a.defaultProps={shade:"light"};e.exports=a}),null);
__d("Middot.react",["react","stylex"],(function(a,b,c,d,e,f,g){"use strict";var h=d("react");c("stylex").inject(".spvqvc9t{clip:rect(0,0,0,0)}",1);c("stylex").inject(".qfa2pajt{clip-path:polygon(0 0,0 0,0 0,0 0)}",1);c("stylex").inject(".s8sjc6am{position:absolute}",1);function a(a){return h.jsxs("span",babelHelpers["extends"]({},a,{children:[h.jsx("span",{className:"s8sjc6am qfa2pajt spvqvc9t",children:"\xa0"}),h.jsx("span",{"aria-hidden":"true",children:" \xb7 "})]}))}a.displayName=a.name+" [from "+f.id+"]";g["default"]=a}),98);
__d("groupArray",[],(function(a,b,c,d,e,f){"use strict";function a(a,b){var c={};a.forEach(function(d,e){e=b(d,e,a);c[e]||(c[e]=[]);c[e].push(d)});return c}f["default"]=a}),66);
__d("differenceSets",[],(function(a,b,c,d,e,f){"use strict";function a(a){var b=new Set();for(var c=arguments.length,d=new Array(c>1?c-1:0),e=1;e<c;e++)d[e-1]=arguments[e];FIRST:for(var f=a,g=Array.isArray(f),h=0,f=g?f:f[typeof Symbol==="function"?Symbol.iterator:"@@iterator"]();;){var i;if(g){if(h>=f.length)break;i=f[h++]}else{h=f.next();if(h.done)break;i=h.value}var j=i;for(var k=0;k<d.length;k++){var l=d[k];if(l.has(j))continue FIRST}b.add(j)}return b}f["default"]=a}),66);
__d("WebFunnelLogger",["invariant","Banzai"],(function(a,b,c,d,e,f,g,h){"use strict";a=function(){function a(a){this.$2={},this.$3={},this.$4="web_funnel_logging",this.$5(),this.$1.funnel_definition=a}var b=a.prototype;b.log=function(){if(this.$6()){this.$5();return}this.$1.funnel_payload=JSON.stringify(this.$2);this.$1.action_payload=JSON.stringify(this.$3);c("Banzai").post(this.$4,this.$1,c("Banzai").BASIC);this.$5()};b.logWithEventTime=function(a){this.$1.event_time=a/1e3;if(this.$6()){this.$5();return}this.$7();c("Banzai").post(this.$4,this.$1,c("Banzai").BASIC);this.$5()};b.logVital=function(){if(this.$6()){this.$5();return}this.$7();c("Banzai").post(this.$4,this.$1,c("Banzai").VITAL);this.$5()};b.logVitalWithEventTime=function(a){this.$1.event_time=a/1e3;if(this.$6()){this.$5();return}this.$7();c("Banzai").post(this.$4,this.$1,c("Banzai").VITAL);this.$5()};b.$6=function(){return!1};b.$7=function(){this.$1.funnel_payload=JSON.stringify(this.$2),this.$1.action_payload=JSON.stringify(this.$3),this.$1.action!==null||h(0,5829),this.$1.session_key!==null||h(0,5830)};b.$5=function(){this.$1={};this.$2={};this.$3={};return this};b.setAction=function(a){this.$1.action=a;return this};b.addActionPayload=function(a,b){this.$3[a]=b;return this};b.setActionTag=function(a){this.$1.action_tag=a;return this};b.addFunnelPayload=function(a,b){this.$2[a]=b;return this};b.setFunnelTags=function(a){this.$1.funnel_tags=a;return this};b.setSecondaryOrder=function(a){this.$1.secondary_order_value=a;return this};b.setSessionKey=function(a){this.$1.session_key=a;return this};b.markStart=function(){this.$1.session_marker="start";return this};b.markEnd=function(){this.$1.session_marker="end";return this};b.setUserId=function(a){this.$1.user_id=a;return this};b.setIsEmployee=function(a){this.$1.is_employee=a;return this};return a}();g["default"]=a}),98);