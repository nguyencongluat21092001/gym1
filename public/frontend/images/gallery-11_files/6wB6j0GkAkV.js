if (self.CavalryLogger) { CavalryLogger.start_js(["cFbueMh"]); }

__d("CometTooltipDeferredImpl.react",["BaseContextualLayer.react","CometHeroInteractionContextPassthrough.react","CometPlaceholder.react","CometProgressRingIndeterminate.react","TetraTextPairing.react","clearTimeout","react","setTimeout","stylex","useCometDisplayTimingTrackerForInteraction","useCometTheme","useFadeEffect","useLayoutEffect_SAFE_FOR_SSR"],(function(a,b,c,d,e,f,g){"use strict";var h=d("react");b=d("react");var i=b.useLayoutEffect,j=b.useRef,k=b.useState,l={container:{backgroundColor:"ms7hmo2b",borderTopStartRadius:"ue3kfks5",borderTopEndRadius:"pw54ja7n",borderBottomEndRadius:"uo3d90p7",borderBottomStartRadius:"l82x9zwi",boxShadow:"r92hip7p",display:"a8c37x1j",marginBottom:"dicw6rsg",marginTop:"rs0gx3tq",maxWidth:"bkm5gps7",opacity:"b5wmifdl",paddingTop:"pybr56ya",paddingEnd:"d1544ag0",paddingBottom:"f10w8fjw",paddingStart:"tw6a2znq",position:"l9j0dhe7",transitionDuration:"c5ndavph",transitionProperty:"art1omkt",transitionTimingFunction:"ot9fgl3s"},containerVisible:{opacity:"pedkr2u6",transitionDuration:"ijkhr0an",transitionTimingFunction:"s13u9afw"},contextualLayer:{pointerEvents:"hzruof5a"},loadingState:{display:"j83agx80",justifyContent:"taijpn5t"}};function m(a){var b=a.contextualLayerRef;i(function(){var a=b.current;a&&a.reposition({autoflip:!0})},[b]);return null}function a(a){var b=a.contentKey,d=a.delayContentMs,e=d===void 0?0:d;d=a.headline;var f=a.id,g=a.isVisible,i=a.tooltip,n=a.tooltipTheme;n=n===void 0?"invert":n;a=babelHelpers.objectWithoutPropertiesLoose(a,["contentKey","delayContentMs","headline","id","isVisible","tooltip","tooltipTheme"]);var o=j(null),p=c("useFadeEffect")(g),q=p[0],r=p[1];p=p[2];var s=c("useCometDisplayTimingTrackerForInteraction")("ToolTip"),t=j(null),u=j(g),v=k(function(){return g===!0&&u.current===!1&&e>0}),w=v[0],x=v[1];c("useLayoutEffect_SAFE_FOR_SSR")(function(){if(g===!0&&u.current===!1&&e>0){x(!0);t.current=c("setTimeout")(function(){x(!1),t.current=null},e);return function(){c("clearTimeout")(t.current),t.current=null}}else t.current!=null&&(x(!1),c("clearTimeout")(t.current),t.current=null);u.current=g},[e,g]);v=c("useCometTheme")(n);n=v[0];v=v[1];if(i==null||!q)return null;q=h.jsx("div",{className:c("stylex")(l.loadingState),children:h.jsx(c("CometProgressRingIndeterminate.react"),{color:"dark",size:20})});return h.jsx(c("CometHeroInteractionContextPassthrough.react"),{clear:!0,children:h.jsx(c("BaseContextualLayer.react"),babelHelpers["extends"]({align:"middle"},a,{imperativeRef:o,ref:s,xstyle:l.contextualLayer,children:h.jsx(n,{children:h.jsx("span",{className:c("stylex")(v,l.container,r&&l.containerVisible),"data-testid":void 0,id:f,ref:p,role:"tooltip",children:h.jsx(c("TetraTextPairing.react"),{body:w?q:h.jsxs(c("CometPlaceholder.react"),{fallback:q,children:[h.jsx(m,{contextualLayerRef:o}),i]},b),bodyColor:"primary",headline:d,headlineColor:"primary",level:4})})})}))})}a.displayName=a.name+" [from "+f.id+"]";g["default"]=a}),98);