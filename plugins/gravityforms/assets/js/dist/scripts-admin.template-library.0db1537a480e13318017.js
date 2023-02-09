"use strict";(self.webpackChunkgravityforms=self.webpackChunkgravityforms||[]).push([[236],{5675:function(e,t,r){r.r(t),r.d(t,{default:function(){return Ze}});var o=r(8349),n=r(8950),i=r(2975),s=r.n(i),a=r(9843),c=r.n(a),l=r(5872),p=r.n(l),u=r(4216),m=r.n(u),y=r(6172),d=r.n(y),f=r(1930),b=r(351),g=r.n(b),v=r(5718),T=r.n(v),P=r(7539),O=r.n(P),h=r(9608),_=r.n(h),C=r(2954),j=r(5518),k=function(){var e=(0,n.Z)(s().mark((function e(t){var r,o,n,i,a,c,l,p,u,m,y,d,f;return s().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(i=t.template.id,a=t.title,c=t.description,l=t.endpoints,a){e.next=3;break}return e.abrupt("return",{error:{code:"missing_title"}});case 3:return p={baseUrl:_(),method:"POST",body:{templateId:i,form:{title:a,description:c}}},e.next=6,(0,C.Z)("create_from_template",l,p);case 6:if(u=e.sent,m=null==u||null===(r=u.data)||void 0===r||null===(o=r.data)||void 0===o?void 0:o.form_id,null==u||null===(n=u.data)||void 0===n||!n.success||!m){e.next=13;break}y=(0,j.updateQueryVar)("page","gf_edit_forms"),window.location.href=(0,j.updateQueryVar)("id",m,y),e.next=14;break;case 13:return e.abrupt("return",{error:{code:null!=u&&null!==(d=u.data)&&void 0!==d&&null!==(f=d.data)&&void 0!==f&&f.message?u.data.data.message:"failedRequest"}});case 14:case"end":return e.stop()}}),e)})));return function(t){return e.apply(this,arguments)}}(),w=function(e){var t=e.accessLevels,r=void 0===t?[]:t,o=e.licenseLevel,n=void 0===o?"single":o,i=["basic","pro","dev","elite","single","multi","nonprofit","enterprise","gravityflow","gravityview","godaddy"];return!r.filter((function(e){return i.includes(e)})).includes(n)},E=function(e){var t,r,n,i=e.blankOnClick,s=void 0===i?function(){}:i,a=e.licenseType,c=void 0===a?"":a,l=e.strings,p=void 0===l?{}:l,u=e.templateOnClick,m=void 0===u?function(){}:u,y=e.templates,d=void 0===y?[]:y,b=e.thumbnailUrl,v=void 0===b?"":b;return o.React.createElement(o.SimpleBar,null,o.React.createElement("div",{className:"gform-template-library__card-grid-container"},o.React.createElement(g(),{container:!0,wrap:!0,rowSpacing:6,columnSpacing:6,customClasses:["gform-template-library__card-grid"],justifyContent:"flex-start"},(t={contentAttributes:{headingAttributes:{content:p.blankForm,weight:"medium",size:"text-sm",tagName:"h2"},textAttributes:{content:p.createForm,size:"text-sm"},blankButtonAttributes:{onClick:s},imageAttributes:{asBg:!0,url:"https://i.imgur.com/KsZxvrs.png",altText:p.blankForm}},bgColor:"",style:"form-template-blank"},r=o.React.createElement(g(),{key:0,customClasses:["gform-template-library__card-grid-item"],item:!0},o.React.createElement(O(),t)),n=d.map((function(e,t){var r=c&&c.slice(2).toLowerCase()||"single",n=w({accessLevels:e.template_access_level,licenseLevel:r})?p.upgradeTag:"",i=p.useTemplateWithTitle.split("%s"),s=p.previewWithTitle.split("%s"),a={customClasses:["gform-card__form-template-secondary-button-icon"],icon:"external-link"},l={contentAttributes:{bgColor:e.template_background,headingAttributes:{content:e.title,weight:"medium",size:"text-sm",tagName:"h2"},primaryCtaAttrs:{ctaType:"button",children:o.React.createElement(o.React.Fragment,null,i[0],o.React.createElement("span",{className:"gform-visually-hidden"},'"'.concat(e.title,'"')),i[1]),onClick:m(e)},secondaryCtaAttrs:{ctaType:"link",children:o.React.createElement(o.React.Fragment,null,o.React.createElement(T(),a),s[0],o.React.createElement("span",{className:"gform-visually-hidden"},'"'.concat(e.title,'"')),s[1]),href:e.template_preview_url,target:"_blank"},imageAttributes:{asBg:!0,url:"".concat(v).concat(e.template_thumbnail),imagePosition:"top center",imageAttributes:{style:{backgroundSize:"100%"}},altText:e.title},tagAttributes:{content:n,size:"text-xxs"}},style:"form-template"};return o.React.createElement(g(),{key:t+1,customClasses:["gform-template-library__card-grid-item"],item:!0},o.React.createElement(O(),l))})),[r].concat((0,f.Z)(n))))))},R=r(7169),x=r(564),A=r.n(x),z=r(4824),L=r.n(z),D=r(5211),S=r.n(D),Z=r(5235),F=r.n(Z),N=r(2577),B=r(9581),I=r(11),V=r(6134);function W(e){var t=e.size,r=void 0===t?40:t,n=e.componentProps,i=void 0===n?{}:n,s=e.foreground,a=void 0===s?"":s,c=e.lineWeight,l=void 0===c?2:c,p=e.speed,u=void 0===p?2:p,m=50*l/r,y={animation:"animation: gformLoaderStretch calc(".concat(u,"s * 0.75) ease-in-out infinite")};return a&&(y.stroke=a),o.React.createElement("svg",(0,I.Z)({},i,{height:r,width:r,viewBox:"25 25 50 50",style:{animation:"gformLoaderRotate ".concat(u,"s linear infinite"),height:"".concat(r,"px"),width:"".concat(r,"px")}}),o.React.createElement("circle",{cx:"50",cy:"50",r:"20",strokeWidth:m,style:y}))}function M(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);t&&(o=o.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,o)}return r}function q(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?M(Object(r),!0).forEach((function(t){(0,R.Z)(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):M(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}var H=(0,o.React.forwardRef)((function(e,t){var r=e.background,n=void 0===r?"":r,i=e.children,s=void 0===i?null:i,a=e.customAttributes,c=void 0===a?{}:a,l=e.customClasses,p=void 0===l?[]:l,u=e.displayText,m=void 0===u||u,y=e.foreground,d=void 0===y?"":y,f=e.lineWeight,b=void 0===f?5:f,g=e.mask,v=void 0!==g&&g,T=e.maskCustomAttributes,P=void 0===T?{}:T,O=e.maskCustomClasses,h=void 0===O?[]:O,_=e.maskTheme,C=void 0===_?"light":_,k=e.size,w=void 0===k?40:k,E=e.spacing,x=void 0===E?"":E,A=e.speed,z=void 0===A?2:A,L=e.text,D=void 0===L?"":L,S=e.textColor,Z=void 0===S?"#000":S,F=e.textCustomAttributes,N=void 0===F?{}:F,B=e.textCustomClasses,M=void 0===B?[]:B,H=e.type,U=void 0===H?"ring":H,Q=v?q({className:(0,o.classnames)((0,R.Z)({"gform-loader__mask":!0},"gform-loader__mask--theme-".concat(C),!0),h)},P):{},K=q({className:(0,o.classnames)(q((0,R.Z)({"gform-loader":!0},"gform-loader--".concat(U),!0),(0,j.spacerClasses)(x)),p)},c),G=D?q({className:(0,o.classnames)({"gform-loader__text":m,"gform-visually-hidden":!m},M),style:{color:Z}},N):{};return o.React.createElement(o.React.Fragment,null,o.React.createElement(V.ConditionalWrapper,{condition:v,wrapper:function(e){return o.React.createElement("div",Q,e)}},o.React.createElement(V.ConditionalWrapper,{condition:!v&&D&&m,wrapper:function(e){return o.React.createElement("span",{className:"gform-loader__inner"},e)}},"ring"===U?o.React.createElement(W,{background:n,componentProps:K,foreground:d,lineWeight:b,size:w,speed:z,ref:t}):o.React.createElement("span",(0,I.Z)({},K,{ref:t})),D&&o.React.createElement("span",G,D),s)))}));H.propTypes={background:o.PropTypes.string,children:o.PropTypes.oneOfType([o.PropTypes.arrayOf(o.PropTypes.node),o.PropTypes.node]),customAttributes:o.PropTypes.object,customClasses:o.PropTypes.oneOfType([o.PropTypes.string,o.PropTypes.array,o.PropTypes.object]),displayText:o.PropTypes.bool,foreground:o.PropTypes.string,lineWeight:o.PropTypes.number,mask:o.PropTypes.bool,maskCustomAttributes:o.PropTypes.object,maskCustomClasses:o.PropTypes.oneOfType([o.PropTypes.string,o.PropTypes.array,o.PropTypes.object]),maskTheme:o.PropTypes.string,size:o.PropTypes.number,spacing:o.PropTypes.oneOfType([o.PropTypes.string,o.PropTypes.number,o.PropTypes.array,o.PropTypes.object]),speed:o.PropTypes.number,text:o.PropTypes.string,textColor:o.PropTypes.string,textCustomAttributes:o.PropTypes.object,textCustomClasses:o.PropTypes.oneOfType([o.PropTypes.string,o.PropTypes.array,o.PropTypes.object]),type:o.PropTypes.string},H.displayName="Loader";var U=H;function Q(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);t&&(o=o.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,o)}return r}function K(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?Q(Object(r),!0).forEach((function(t){(0,R.Z)(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):Q(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}var G=o.React.forwardRef,J={"size-height-s":"size-text-xs","size-height-m":"size-text-sm","size-height-l":"size-text-sm","size-height-xl":"size-text-sm","size-height-xxl":"size-text-md"},X=G((function(e,t){var r,n=e.active,i=void 0!==n&&n,s=e.activeText,a=void 0===s?"":s,c=e.activeType,l=void 0===c?"":c,p=e.children,u=void 0===p?null:p,m=e.circular,y=void 0!==m&&m,d=e.customAttributes,f=void 0===d?{}:d,b=e.customClasses,g=void 0===b?[]:b,v=e.disabled,T=void 0!==v&&v,P=e.disableWhileActive,O=void 0===P||P,h=e.icon,_=void 0===h?"":h,C=e.iconAttributes,k=void 0===C?{}:C,w=e.iconPosition,E=void 0===w?"":w,x=e.iconPrefix,A=void 0===x?"gform-icon":x,z=e.label,L=void 0===z?"":z,D=e.loaderProps,S=void 0===D?{customClasses:"gform-button__loader",lineWeight:2,size:16}:D,Z=(e.lockSize,e.onClick),F=void 0===Z?function(){}:Z,N=e.size,I=void 0===N?"size-r":N,V=e.spacing,W=void 0===V?"":V,M=e.type,q=void 0===M?"primary-new":M,H=e.width,Q=void 0===H?"auto":H,G=e.ariaLabel,X=void 0===G?"":G,Y=K({className:(0,o.classnames)(K((r={"gform-button":!0},(0,R.Z)(r,"gform-button--".concat(I),!0),(0,R.Z)(r,"gform-button--".concat(q),!0),(0,R.Z)(r,"gform-button--width-".concat(Q),!0),(0,R.Z)(r,"gform-button--circular",y),(0,R.Z)(r,"gform-button--activated",i),(0,R.Z)(r,"gform-button--active-type-".concat(l),l),(0,R.Z)(r,"gform-button--loader-after","loader"===l),(0,R.Z)(r,"gform-button--icon-leading",_&&"leading"===E),(0,R.Z)(r,"gform-button--icon-trailing",_&&"trailing"===E),r),(0,j.spacerClasses)(W)),g),onClick:F,disabled:T||O&&i,ref:t},f);X&&(Y["aria-label"]=X);var $=K(K({},k),{},{customClasses:(0,o.classnames)(["gform-button__icon"],k.customClasses||[]),icon:_,iconPrefix:A}),ee=J[I],te=(0,o.classnames)((0,R.Z)({"gform-button__text":!0,"gform-button__text--inactive":!0},"gform-typography--".concat(ee),0===I.indexOf("size-height-"))),re=(0,o.classnames)((0,R.Z)({"gform-button__text":!0,"gform-button__text--active":!0},"gform-typography--".concat(ee),0===I.indexOf("size-height-"))),oe=a&&i;return o.React.createElement("button",Y,_&&(!L||"leading"===E)&&o.React.createElement(B.Z,$),L&&!oe&&o.React.createElement("span",{className:te},L),oe&&o.React.createElement("span",{className:re},a),_&&"trailing"===E&&o.React.createElement(B.Z,$),"loader"===l&&i&&o.React.createElement(U,S),u)}));X.propTypes={active:o.PropTypes.bool,activeText:o.PropTypes.string,activeType:o.PropTypes.oneOf(["loader"]),children:o.PropTypes.oneOfType([o.PropTypes.arrayOf(o.PropTypes.node),o.PropTypes.node]),circular:o.PropTypes.bool,customAttributes:o.PropTypes.object,customClasses:o.PropTypes.oneOfType([o.PropTypes.string,o.PropTypes.array,o.PropTypes.object]),disabled:o.PropTypes.bool,disableWhileActive:o.PropTypes.bool,icon:o.PropTypes.string,iconAttributes:o.PropTypes.object,iconPosition:o.PropTypes.oneOf(["leading","trailing"]),iconPrefix:o.PropTypes.string,label:o.PropTypes.string,loaderProps:o.PropTypes.object,lockSize:o.PropTypes.bool,onClick:o.PropTypes.func,size:o.PropTypes.string,spacing:o.PropTypes.oneOfType([o.PropTypes.string,o.PropTypes.number,o.PropTypes.array,o.PropTypes.object]),type:o.PropTypes.string,width:o.PropTypes.string},X.displayName="Button";var Y=X;function $(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);t&&(o=o.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,o)}return r}function ee(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?$(Object(r),!0).forEach((function(t){(0,R.Z)(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):$(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}var te=(0,o.React.forwardRef)((function(e,t){var r=e.children,n=void 0===r?null:r,i=e.content,s=void 0===i?"":i,a=e.customAttributes,c=void 0===a?{}:a,l=e.customClasses,p=void 0===l?[]:l,u=e.href,m=void 0===u?"":u,y=e.spacing,d=void 0===y?"":y,f=e.target,b=void 0===f?"":f,g=ee({className:(0,o.classnames)(ee({"gform-link":!0},(0,j.spacerClasses)(d)),p),href:m,target:b,ref:t},c);return"_blank"===b&&(g.rel="noopener"),o.React.createElement("a",g,s,n)}));te.propTypes={children:o.PropTypes.oneOfType([o.PropTypes.arrayOf(o.PropTypes.node),o.PropTypes.node]),content:o.PropTypes.string,customAttributes:o.PropTypes.object,customClasses:o.PropTypes.oneOfType([o.PropTypes.string,o.PropTypes.array,o.PropTypes.object]),href:o.PropTypes.string,spacing:o.PropTypes.oneOfType([o.PropTypes.string,o.PropTypes.number,o.PropTypes.array,o.PropTypes.object]),target:o.PropTypes.string},te.displayName="Link";var re=te;function oe(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);t&&(o=o.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,o)}return r}function ne(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?oe(Object(r),!0).forEach((function(t){(0,R.Z)(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):oe(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}var ie=(0,o.React.forwardRef)((function(e,t){var r,n=e.asHtml,i=void 0!==n&&n,s=e.children,a=void 0===s?null:s,c=e.content,l=void 0===c?"":c,p=e.customAttributes,u=void 0===p?{}:p,m=e.customClasses,y=void 0===m?[]:m,d=e.size,f=void 0===d?"text-md":d,b=e.spacing,g=void 0===b?"":b,v=e.tagName,T=void 0===v?"div":v,P=e.weight,O=void 0===P?"regular":P,h=ne({className:(0,o.classnames)(ne((r={"gform-text":!0},(0,R.Z)(r,"gform-typography--size-".concat(f),!0),(0,R.Z)(r,"gform-typography--weight-".concat(O),!0),r),(0,j.spacerClasses)(g)),y),ref:t},u);i&&(h.dangerouslySetInnerHTML={__html:l});var _=T;return i?o.React.createElement(_,h):o.React.createElement(_,h,l,a)}));ie.propTypes={asHtml:o.PropTypes.bool,children:o.PropTypes.oneOfType([o.PropTypes.arrayOf(o.PropTypes.node),o.PropTypes.node]),content:o.PropTypes.string,customAttributes:o.PropTypes.object,customClasses:o.PropTypes.oneOfType([o.PropTypes.string,o.PropTypes.array,o.PropTypes.object]),size:o.PropTypes.string,spacing:o.PropTypes.oneOfType([o.PropTypes.string,o.PropTypes.number,o.PropTypes.array,o.PropTypes.object]),tagName:o.PropTypes.string,weight:o.PropTypes.string},ie.displayName="Text";var se=ie;function ae(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);t&&(o=o.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,o)}return r}function ce(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?ae(Object(r),!0).forEach((function(t){(0,R.Z)(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):ae(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}var le=o.React.forwardRef,pe=o.React.useState,ue=le((function(e,t){var r,n=e.children,i=void 0===n?null:n,s=e.content,a=void 0===s?"":s,c=e.contentCustomAttributes,l=void 0===c?{}:c,p=e.contentCustomClasses,u=void 0===p?[]:p,m=e.ctaLabel,y=void 0===m?"":m,d=e.ctaLink,f=void 0===d?"":d,b=e.customAttributes,g=void 0===b?{}:b,v=e.customClasses,T=void 0===v?[]:v,P=e.customIcon,O=void 0===P?"":P,h=e.customIconPrefix,_=void 0===h?"gform-icon":h,C=e.dismissableAriaLabel,k=void 0===C?"":C,w=e.dismissableTitle,E=void 0===w?"":w,x=e.hasCta,A=void 0!==x&&x,z=e.iconAttributes,L=void 0===z?{}:z,D=e.iconClasses,S=void 0===D?[]:D,Z=e.isDismissable,F=void 0!==Z&&Z,I=e.isInline,V=void 0!==I&&I,W=e.spacing,M=void 0===W?"":W,q=e.theme,H=void 0===q?"cosmos":q,U=e.type,Q=void 0===U?"default":U,K=pe(!1),G=(0,N.Z)(K,2),J=G[0],X=G[1],$=ce({className:(0,o.classnames)(ce((r={"gform-alert":!0},(0,R.Z)(r,"gform-alert--".concat(Q),!0),(0,R.Z)(r,"gform-alert--theme-".concat(H),!0),(0,R.Z)(r,"gform-alert--inline",V),r),(0,j.spacerClasses)(M)),T),ref:t},g),ee="cosmos"===H,te=ce({"aria-hidden":"true"},L),oe=(0,o.classnames)({"gform-alert__icon":!0},S),ne=O;if(!O)switch(Q){case"default":ne="campaign";break;case"notice":ne=ee?"circle-notice":"circle-notice-fine";break;case"success":ne=ee?"circle-check":"circle-check-fine";break;case"error":ne=ee?"circle-notice":"circle-error-fine";break;case"accessibility":ne="accessibility"}var ie=ce({content:a,customClasses:(0,o.classnames)(["gform-alert__message"],u),tagName:"p"},l);return J?null:o.React.createElement("div",$,o.React.createElement(B.Z,{customAttributes:te,customClasses:oe,icon:ne,iconPrefix:_}),o.React.createElement("div",{className:"gform-alert__message-wrap"},o.React.createElement(se,ie,i),A&&o.React.createElement(re,{content:y,customClasses:["gform-alert__cta","gform-button","gform-button--white","gform-button--size-xs"],href:f,target:"_blank"})),F&&o.React.createElement(Y,{ariaLabel:k,customAttributes:{title:E},customClasses:["gform-alert__dismiss"],icon:"delete",onClick:function(){X(!0)}}))}));ue.propTypes={children:o.PropTypes.oneOfType([o.PropTypes.arrayOf(o.PropTypes.node),o.PropTypes.node]),content:o.PropTypes.string,contentCustomAttributes:o.PropTypes.object,contentCustomClasses:o.PropTypes.oneOfType([o.PropTypes.string,o.PropTypes.array,o.PropTypes.object]),ctaLabel:o.PropTypes.string,ctaLink:o.PropTypes.string,customAttributes:o.PropTypes.object,customClasses:o.PropTypes.oneOfType([o.PropTypes.string,o.PropTypes.array,o.PropTypes.object]),customIcon:o.PropTypes.string,customIconPrefix:o.PropTypes.string,dismissableAriaLabel:o.PropTypes.string,dismissableTitle:o.PropTypes.string,hasCta:o.PropTypes.bool,iconAttributes:o.PropTypes.object,iconClasses:o.PropTypes.array,isDismissable:o.PropTypes.bool,isInline:o.PropTypes.bool,spacing:o.PropTypes.oneOfType([o.PropTypes.string,o.PropTypes.number,o.PropTypes.array,o.PropTypes.object]),theme:o.PropTypes.string,type:o.PropTypes.string},ue.displayName="Alert";var me,ye,de,fe,be,ge=ue,ve=r(89),Te=r.n(ve),Pe=r(7329),Oe=r.n(Pe),he=null===(me=(0,j.getConfig)(Oe(),"gform_admin_config"))||void 0===me||null===(ye=me.components)||void 0===ye?void 0:ye.template_library,_e=(null==he||null===(de=he.data)||void 0===de?void 0:de.defaults)||{};"mock_endpoint"===(null==he||null===(fe=he.endpoints)||void 0===fe||null===(be=fe.create_from_template)||void 0===be?void 0:be.action)&&(_e.isLibraryOpen=!0);var Ce=(0,V.create)(_e,(function(e){return{setIsLibraryOpen:function(t){return e((function(){return{isLibraryOpen:t}}))},setFlyoutOpen:function(t){return e((function(){return{flyoutOpen:t}}))},setFlyoutFooterButtonLabel:function(t){return e((function(){return{flyoutFooterButtonLabel:t}}))},setFlyoutTitleValue:function(t){return e((function(){return{flyoutTitleValue:t}}))},setFlyoutDescriptionValue:function(t){return e((function(){return{flyoutDescriptionValue:t}}))},setSelectedTemplate:function(t){return e((function(){return{selectedTemplate:t}}))},setFlyoutTitleErrorState:function(t){return e((function(){return{flyoutTitleErrorState:t}}))},setFlyoutTitleErrorMessage:function(t){return e((function(){return{flyoutTitleErrorMessage:t}}))},setImportError:function(t){return e((function(){return{importError:t}}))},setFlyoutPrimaryLoadingState:function(t){return e((function(){return{flyoutPrimaryLoadingState:t}}))}}}));function je(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);t&&(o=o.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,o)}return r}function ke(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?je(Object(r),!0).forEach((function(t){(0,R.Z)(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):je(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}var we,Ee=o.React.useCallback,Re=function(e){var t=e.flyoutAttributes,r=void 0===t?{}:t,n=e.footerAttributes,i=void 0===n?{}:n,s=e.showAlert,a=void 0!==s&&s,c=e.strings,l=void 0===c?{}:c,u=e.titleInputState,m=void 0===u?{}:u,y=Ce((function(e){return e.flyoutTitleValue})),d=Ce((function(e){return e.setFlyoutTitleValue})),f=Ce((function(e){return e.flyoutDescriptionValue})),b=Ce((function(e){return e.setFlyoutDescriptionValue})),g={className:(0,o.classnames)({"gform-flyout__footer":!0})},v=ke(ke({},i.primaryButtonAttributes),{},{customClasses:(0,o.classnames)({"gform-flyout__footer-primary-button":!0}),type:"primary-new"}),T=ke(ke({},i.secondaryButtonAttributes),{},{customClasses:(0,o.classnames)({"gform-flyout__footer-secondary-button":!0}),type:"white"});r.afterContent=o.React.createElement("footer",g,o.React.createElement("div",{className:"gform-flyout__footer-inner"},o.React.createElement(A(),T),o.React.createElement(A(),v)));var P=Ee((0,j.debounce)(d,{wait:300}),[y]),O=Ee((0,j.debounce)(b,{wait:300}),[f]),h=ke({closeButtonCustomAttributes:{icon:"x",iconPrefix:"gform-common-icon",size:"size-xs",type:"simplified"},customClasses:["gform-template-library__flyout"],direction:"right",desktopWidth:100,mobileBreakpoint:768,mobileWidth:100,headerHeadingCustomAttributes:{size:"display-sm",weight:"semibold"},zIndex:100001},r),_={controlled:!0,id:"template-library-form-title-input",required:!0,requiredLabel:{content:"(".concat(l.required,")")},placeholder:l.titlePlaceholder,size:"size-l",labelPosition:"above",labelAttributes:{label:l.title,htmlFor:"template-library-form-title-input"},onChange:P,error:m.errorState,helpTextAttributes:{content:m.errorMessage},value:y};return o.React.createElement(Te(),h,a&&o.React.createElement(ge,{content:l.upgradeAlert,contentCustomAttributes:{asHtml:!0},customClasses:["gform-template-library__flyout-alert"],isInline:!0,spacing:6,type:"error"}),o.React.createElement(p(),{spacing:6},o.React.createElement(L(),_)),o.React.createElement(p(),{spacing:6},o.React.createElement(S(),{label:l.description,htmlFor:"template-library-form-description-text"}),o.React.createElement(F(),{controlled:!0,id:"template-library-form-description-text",placeholder:l.formDescriptionPlaceHolder,onChange:O,value:f})))},xe=o.React.useEffect,Ae=function(e){var t=Ce((function(e){return e.flyoutOpen})),r=Ce((function(e){return e.setFlyoutOpen})),i=Ce((function(e){return e.flyoutFooterButtonLabel})),a=Ce((function(e){return e.setFlyoutFooterButtonLabel})),l=Ce((function(e){return e.flyoutTitleValue})),u=Ce((function(e){return e.setFlyoutTitleValue})),y=Ce((function(e){return e.flyoutDescriptionValue})),f=Ce((function(e){return e.setFlyoutDescriptionValue})),b=Ce((function(e){return e.selectedTemplate})),g=Ce((function(e){return e.setSelectedTemplate})),v=Ce((function(e){return e.flyoutTitleErrorState})),T=Ce((function(e){return e.setFlyoutTitleErrorState})),P=Ce((function(e){return e.flyoutTitleErrorMessage})),O=Ce((function(e){return e.setFlyoutTitleErrorMessage})),h=Ce((function(e){return e.importError})),_=Ce((function(e){return e.setImportError})),C=Ce((function(e){return e.flyoutPrimaryLoadingState})),j=Ce((function(e){return e.setFlyoutPrimaryLoadingState})),R=Ce((function(e){return e.isLibraryOpen})),x=Ce((function(e){return e.setIsLibraryOpen}));xe((function(){document.addEventListener("gform/template_library/set_open_status",(function(e){x(e.detail.isOpen)}))}),[]);var A=function(){var t=(0,n.Z)(s().mark((function t(){var r,o;return s().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return z(),j(!0),t.next=4,k({template:b,title:l,description:y,endpoints:e.endpoints});case 4:(r=t.sent)&&r.error&&(-1!==r.error.code.indexOf("_title")?(T(!0),o="duplicate_title"===r.error.code?e.i18n.duplicateTitle:e.i18n.missingTitle,O(o)):_(!0),j(!1));case 6:case"end":return t.stop()}}),t)})));return function(){return t.apply(this,arguments)}}(),z=function(){T(!1),O("")},L={closeButtonType:"simplified",closeButtonTitle:e.i18n.closeButton,customCloseButtonClasses:["gform-template-library__exit-button"],customMaskClasses:t?["gform-template-library--flyout-open","gform-template-library__mask"]:["gform-template-library__mask"],customWrapperClasses:["gform-template-library"],id:"gform-template-library",isOpen:R,lockBody:!0,maskBlur:!1,maskTheme:"dark",mode:"modal",zIndex:1e5,onClose:function(){x(!1)}},D={blankOnClick:function(){return z(),g({title:e.i18n.blankFormTitle,description:e.i18n.blankFormDescription,id:"blank"}),r(!0),void a(e.i18n.createForm)},licenseType:e.data.licenseType,strings:e.i18n,templateOnClick:function(t){return function(t){return function(){z(),g(t),r(!0),a(e.i18n.useTemplate)}}(t)},templates:e.data.templates,thumbnailUrl:e.data.thumbnail_url},S={flyoutAttributes:{isOpen:t,onClose:function(){u(""),f(""),r(!1)},simplebar:!0,title:null==b?void 0:b.title},titleInputState:{errorState:v,errorMessage:P},footerAttributes:{primaryButtonAttributes:{label:i,onClick:A,active:C,activeType:"loader",activeText:e.i18n.createActiveText},secondaryButtonAttributes:{label:e.i18n.cancel,onClick:function(){r(!1)}}},setFlyoutTitleValue:u,setFlyoutDescriptionValue:f,flyoutTitleValue:l,flyoutDescriptionValue:y,showAlert:"blank"!==b.id&&w({accessLevels:b.template_access_level,licenseLevel:e.data.licenseType&&e.data.licenseType.slice(2).toLowerCase()||"single"}),strings:e.i18n};return o.React.createElement(c(),L,o.React.createElement(p(),{customClasses:["gform-template-library__heading"]},o.React.createElement(m(),{size:"display-sm",weight:"semibold",spacing:3,content:e.i18n.heading}),o.React.createElement(d(),{content:e.i18n.subheading,size:"text-md",weight:"regular"})),o.React.createElement(E,D),o.React.createElement(Re,S),h&&o.React.createElement(c(),{alertButtonText:e.i18n.importErrorCloseText,buttonWidth:"full",confirmButtonType:"white",content:e.i18n.failedRequest,customWrapperClasses:["gform-template-library__alert"],isOpen:!0,maskBlur:!0,maskTheme:"dark",mode:"alert",onCloseAfterAnimation:function(){return _(!1)},showCloseButton:!1,theme:"cosmos",title:e.i18n.failedRequestDialogTitle,titleIndicatorType:"error",zIndex:100001}))},ze=o.ReactDOM.createRoot,Le=(null===Oe()||void 0===Oe()||null===(we=Oe().components)||void 0===we?void 0:we.template_library)||{},De={templateLibraryTrigger:(0,j.getNode)("gform-add-new-form")},Se=function(){(0,j.trigger)({event:"gform/template_library/set_open_status",el:document,data:{isOpen:!0},native:!1})},Ze=function(e){ze(e).render(o.React.createElement(Ae,Le)),De.templateLibraryTrigger.addEventListener("click",Se)}}}]);
//# sourceMappingURL=scripts-admin.template-library.0db1537a480e13318017.js.map