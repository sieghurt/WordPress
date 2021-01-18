!function(e,t){for(var n in t)e[n]=t[n]}(window,function(e){var t={};function n(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}return n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(o,r,function(t){return e[t]}.bind(null,r));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=49)}([function(e,t){!function(){e.exports=this.wp.element}()},function(e,t){!function(){e.exports=this.wp.i18n}()},function(e,t){!function(){e.exports=this.wp.blockEditor}()},function(e,t){!function(){e.exports=this.wp.data}()},function(e,t){!function(){e.exports=this.wp.compose}()},function(e,t){!function(){e.exports=this.wp.components}()},function(e,t){e.exports=function(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}},function(e,t,n){var o=n(6);function r(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);t&&(o=o.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,o)}return n}e.exports=function(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?r(Object(n),!0).forEach((function(t){o(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):r(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}},function(e,t){!function(){e.exports=this.wp.blocks}()},function(e,t){!function(){e.exports=this.lodash}()},function(e,t){function n(){return e.exports=n=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var o in n)Object.prototype.hasOwnProperty.call(n,o)&&(e[o]=n[o])}return e},n.apply(this,arguments)}e.exports=n},function(e,t,n){var o;
/*!
  Copyright (c) 2017 Jed Watson.
  Licensed under the MIT License (MIT), see
  http://jedwatson.github.io/classnames
*/!function(){"use strict";var n={}.hasOwnProperty;function r(){for(var e=[],t=0;t<arguments.length;t++){var o=arguments[t];if(o){var i=typeof o;if("string"===i||"number"===i)e.push(o);else if(Array.isArray(o)&&o.length){var l=r.apply(null,o);l&&e.push(l)}else if("object"===i)for(var c in o)n.call(o,c)&&o[c]&&e.push(c)}}return e.join(" ")}e.exports?(r.default=r,e.exports=r):void 0===(o=function(){return r}.apply(t,[]))||(e.exports=o)}()},function(e,t){!function(){e.exports=this.wp.hooks}()},function(e,t,n){var o=n(38),r=n(39),i=n(17),l=n(40);e.exports=function(e,t){return o(e)||r(e,t)||i(e,t)||l()}},function(e,t){!function(){e.exports=this.wp.domReady}()},function(e,t){!function(){e.exports=this.wp.apiFetch}()},function(e,t){!function(){e.exports=this.wp.htmlEntities}()},function(e,t,n){var o=n(18);e.exports=function(e,t){if(e){if("string"==typeof e)return o(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);return"Object"===n&&e.constructor&&(n=e.constructor.name),"Map"===n||"Set"===n?Array.from(e):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?o(e,t):void 0}}},function(e,t){e.exports=function(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,o=new Array(t);n<t;n++)o[n]=e[n];return o}},function(e,t,n){},function(e,t){!function(){e.exports=this.wp.serverSideRender}()},function(e,t){e.exports=function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}},function(e,t){function n(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}e.exports=function(e,t,o){return t&&n(e.prototype,t),o&&n(e,o),e}},function(e,t,n){var o=n(31);e.exports=function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&o(e,t)}},function(e,t,n){var o=n(32),r=n(33),i=n(34);e.exports=function(e){var t=r();return function(){var n,r=o(e);if(t){var l=o(this).constructor;n=Reflect.construct(r,arguments,l)}else n=r.apply(this,arguments);return i(this,n)}}},function(e,t){!function(){e.exports=this.wp.editor}()},function(e,t){!function(){e.exports=this.wp.url}()},function(e,t){!function(){e.exports=this.ReactDOM}()},function(e,t,n){var o=n(45),r=n(46),i=n(17),l=n(47);e.exports=function(e){return o(e)||r(e)||i(e)||l()}},function(e,t){!function(){e.exports=this.wp.plugins}()},function(e,t,n){},function(e,t){function n(t,o){return e.exports=n=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e},n(t,o)}e.exports=n},function(e,t){function n(t){return e.exports=n=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)},n(t)}e.exports=n},function(e,t){e.exports=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],(function(){}))),!0}catch(e){return!1}}},function(e,t,n){var o=n(35),r=n(36);e.exports=function(e,t){return!t||"object"!==o(t)&&"function"!=typeof t?r(e):t}},function(e,t){function n(t){return"function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?e.exports=n=function(e){return typeof e}:e.exports=n=function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},n(t)}e.exports=n},function(e,t){e.exports=function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}},function(e,t,n){},function(e,t){e.exports=function(e){if(Array.isArray(e))return e}},function(e,t){e.exports=function(e,t){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(e)){var n=[],_n=!0,o=!1,r=void 0;try{for(var i,l=e[Symbol.iterator]();!(_n=(i=l.next()).done)&&(n.push(i.value),!t||n.length!==t);_n=!0);}catch(c){o=!0,r=c}finally{try{_n||null==l.return||l.return()}finally{if(o)throw r}}return n}}},function(e,t){e.exports=function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}},function(e,t,n){},function(e,t,n){},function(e,t,n){},function(e,t,n){},function(e,t,n){var o=n(18);e.exports=function(e){if(Array.isArray(e))return o(e)}},function(e,t){e.exports=function(e){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(e))return Array.from(e)}},function(e,t){e.exports=function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}},function(e,t,n){},function(e,t,n){"use strict";n.r(t);var o=n(0),r=n(8),i=n(1),l=n(10),c=n.n(l),a=n(20),s=n.n(a),u=n(4),d=n(2),p=n(5),f=n(3),b=Object(u.compose)([Object(d.withColors)("backgroundColor",{textColor:"color"}),Object(d.withFontSizes)("fontSize"),Object(f.withSelect)((function(e){return{isPublished:e("core/editor").isCurrentPostPublished()}}))])((function(e){var t=e.attributes,n=e.backgroundColor,r=e.fontSize,l=e.setAttributes,a=e.setBackgroundColor,u=e.setFontSize,f=e.setTextColor,b=e.textColor,m=e.isPublished,g=t.customFontSize,O=t.textAlign,j=g||r.size;return Object(o.createElement)(o.Fragment,null,Object(o.createElement)(d.BlockControls,null,Object(o.createElement)(d.AlignmentToolbar,{value:O,onChange:function(e){l({textAlign:e})}})),Object(o.createElement)(d.InspectorControls,null,Object(o.createElement)(p.PanelBody,{className:"blocks-font-size",title:Object(i.__)("Text Settings","full-site-editing")},Object(o.createElement)(d.FontSizePicker,{onChange:u,value:j})),Object(o.createElement)(d.PanelColorSettings,{title:Object(i.__)("Color Settings","full-site-editing"),initialOpen:!1,colorSettings:[{value:n.color,onChange:a,label:Object(i.__)("Background Color","full-site-editing")},{value:b.color,onChange:f,label:Object(i.__)("Text Color","full-site-editing")}]},Object(o.createElement)(d.ContrastChecker,c()({textColor:b.color,backgroundColor:n.color},{fontSize:j})))),Object(o.createElement)(s.a,{isPublished:m,block:"a8c/navigation-menu",attributes:t}))}));function m(){for(var e=Object(r.getCategories)(),t=arguments.length,n=new Array(t),o=0;o<t;o++)n[o]=arguments[o];for(var i=function(){var t=c[l];if(e.some((function(e){return e.slug===t})))return{v:t}},l=0,c=n;l<c.length;l++){var a=i();if("object"==typeof a)return a.v}throw new Error("Could not find a category from the provided list: ".concat(n.join(",")))}n(30);var g=Object(o.createElement)("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24",height:"24",viewBox:"0 0 24 24"},Object(o.createElement)("path",{fill:"none",d:"M0 0h24v24H0V0z"}),Object(o.createElement)("path",{d:"M12 7.27l4.28 10.43-3.47-1.53-.81-.36-.81.36-3.47 1.53L12 7.27M12 2L4.5 20.29l.71.71L12 18l6.79 3 .71-.71L12 2z"}));Object(r.registerBlockType)("a8c/navigation-menu",{title:Object(i.__)("Navigation Menu","full-site-editing"),description:Object(i.__)("Visual placeholder for site-wide navigation and menus.","full-site-editing"),icon:g,category:m("design","layout"),supports:{align:["wide","full","right","left"],html:!1,reusable:!1},edit:b,save:function(){return null}});var O=n(12),j=n(6),v=n.n(j),h=n(21),y=n.n(h),_=n(22),S=n.n(_),E=n(23),w=n.n(E),k=n(24),C=n.n(k),x=n(11),P=n.n(x),T=n(25),B=function(e){w()(n,e);var t=C()(n);function n(){return y()(this,n),t.apply(this,arguments)}return S()(n,[{key:"toggleEditing",value:function(){var e=this.props,t=e.isEditing;(0,e.setState)({isEditing:!t})}},{key:"onSelectPost",value:function(e){var t=e.id,n=e.type;this.props.setState({isEditing:!1,selectedPostId:t,selectedPostType:n})}},{key:"render",value:function(){var e=this.props.attributes.align;return Object(o.createElement)(o.Fragment,null,Object(o.createElement)("div",{className:P()("post-content-block",v()({},"align".concat(e),e))},Object(o.createElement)(T.PostTitle,null),Object(o.createElement)(d.InnerBlocks,{templateLock:!1})))}}]),n}(o.Component),I=Object(u.compose)([Object(u.withState)({isEditing:!1,selectedPostId:void 0,selectedPostType:void 0}),Object(f.withSelect)((function(e,t){var n=t.selectedPostId,o=t.selectedPostType;return{selectedPost:(0,e("core").getEntityRecord)("postType",o,n)}}))])(B);n(37);Object(r.registerBlockType)("a8c/post-content",{title:Object(i.__)("Content","full-site-editing"),description:Object(i.__)("The page content.","full-site-editing"),icon:"layout",category:m("design","layout"),supports:{align:["full"],anchor:!1,customClassName:!1,html:!1,inserter:!1,multiple:!1,reusable:!1},attributes:{align:{type:"string",default:"full"}},edit:I,save:function(){return Object(o.createElement)(d.InnerBlocks.Content,null)}});var N=Object(u.createHigherOrderComponent)((function(e){return function(t){return"a8c/post-content"!==t.name?Object(o.createElement)(e,t):Object(o.createElement)(e,c()({},t,{className:"post-content__block"}))}}),"addContentSlotClassname");Object(O.addFilter)("editor.BlockListBlock","full-site-editing/blocks/post-content",N,9);var A=n(7),z=n.n(A),D=n(13),F=n.n(D),L=n(15),R=n.n(L),M=n(16);function V(e){var t=Object(o.useRef)();return Object(o.useEffect)((function(){t.current=e}),[e]),t.current}function U(e,t,n,r,l,c){var a=Object(o.useState)({option:t,previousOption:"",loaded:!1,error:!1}),s=F()(a,2),u=s[0],d=s[1],p=V(r),f=V(l);function b(){d(z()(z()({},u),{},{option:u.previousOption,isSaving:!1}))}return Object(o.useEffect)((function(){u.loaded||u.error?function(){var t=u.option,o=u.previousOption,c=!o&&!t||t&&o&&t.trim()===o.trim(),a=!t||0===t.trim().length;!r&&p&&a&&b();if(!l||c)return;!f&&l&&function(t){d(z()(z()({},u),{},{isSaving:!0})),R()({path:"/wp/v2/settings",method:"POST",data:v()({},e,t)}).then((function(){return function(e){d(z()(z()({},u),{},{previousOption:e,isDirty:!1,isSaving:!1}))}(t)})).catch((function(){n(Object(i.sprintf)(Object(i.__)("Unable to save site %s","full-site-editing"),e)),b()}))}(t)}():R()({path:"/wp/v2/settings"}).then((function(t){return d(z()(z()({},u),{},{option:Object(M.decodeEntities)(t[e]),previousOption:Object(M.decodeEntities)(t[e]),loaded:!0,error:!1}))})).catch((function(){n(Object(i.sprintf)(Object(i.__)("Unable to load site %s","full-site-editing"),e)),d(z()(z()({},u),{},{option:Object(i.sprintf)(Object(i.__)("Error loading site %s","full-site-editing"),e),error:!0}))}))})),{siteOptions:u,handleChange:function(e){c({updated:Date.now()}),d(z()(z()({},u),{},{option:e}))}}}var H=function(e){return Object(u.createHigherOrderComponent)((function(t){return Object(u.pure)((function(n){var r=Object(f.useSelect)((function(e){var t=e("core/editor"),n=t.isSavingPost,o=t.isPublishingPost,r=t.isAutosavingPost,i=t.isCurrentPostPublished;return(n()&&i()||o())&&!r()})),i=Object(f.useDispatch)((function(e){return e("core/notices").createErrorNotice})),l=n.isSelected,a=n.setAttributes,s=Object.keys(e).reduce((function(t,n){var o=e[n],c=U(o.optionName,o.defaultValue,i,l,r,a),s=c.siteOptions,u=c.handleChange;return t[n]={value:s.option,updateValue:u,loaded:s.loaded},t}),{});return Object(o.createElement)(t,c()({},n,s))}))}),"withSiteOptions")},q=fullSiteEditing.footerCreditOptions,W=function(e){var t=e.choice,n=q.find((function(e){return e.value===t}));if(!n)return null;var r=n.renderType,i=n.renderProps,l=n.label,c=z()({label:l},i);return"icon"===r?Object(o.createElement)(p.Icon,c):Object(o.createElement)("span",null," ",c.label," ")},G=fullSiteEditing,Q=G.footerCreditOptions,Y=G.defaultCreditOption;var $=Object(u.compose)([H({siteTitleOption:{optionName:"title",defaultValue:Object(i.__)("Site title loading…","full-site-editing")},footerCreditOption:{optionName:"footer_credit",defaultValue:Object(i.__)("Footer credit loading…","full-site-editing")}})])((function(e){var t=e.attributes.textAlign,n=void 0===t?"center":t,r=e.isSelected,i=e.setAttributes,l=e.footerCreditOption,c=l.value,a=l.updateValue,s=e.siteTitleOption.value,u=c||Y;return Object(o.createElement)(o.Fragment,null,Object(o.createElement)(d.BlockControls,null,Object(o.createElement)(d.AlignmentToolbar,{value:n,onChange:function(e){i({textAlign:e})}})),Object(o.createElement)("div",{className:P()("site-info","site-credit__block",v()({},"has-text-align-".concat(n),n))},Object(o.createElement)("span",{className:"site-name"},s),Object(o.createElement)("span",{className:"comma"},","),Object(o.createElement)("span",{className:"site-credit__selection"},r?Object(o.createElement)(p.SelectControl,{onChange:a,value:u,options:Q}):Object(o.createElement)(W,{choice:u}))))}));n(41);Object(r.registerBlockType)("a8c/site-credit",{title:Object(i.__)("WordPress.com Credit","full-site-editing"),description:Object(i.__)("This block tells the world that you're using WordPress.com.","full-site-editing"),icon:"wordpress-alt",category:m("design","layout"),supports:{align:["wide","full"],html:!1,multiple:!1,reusable:!1,removal:!1},attributes:{align:{type:"string",default:"wide"},textAlign:{type:"string",default:"center"}},edit:$,save:function(){return null}});var J=n(9);var K=Object(u.compose)([Object(d.withColors)("backgroundColor",{textColor:"color"}),Object(d.withFontSizes)("fontSize"),Object(f.withSelect)((function(e,t){var n=t.clientId,o=e("core/block-editor"),r=o.getBlockIndex,i=o.getBlockRootClientId,l=o.getTemplateLock,c=i(n);return{blockIndex:r(n,c),isLocked:!!l(c),rootClientId:c}})),Object(f.withDispatch)((function(e,t){var n=t.blockIndex,o=t.rootClientId;return{insertDefaultBlock:function(){return e("core/block-editor").insertDefaultBlock({},o,n+1)}}})),H({siteDescription:{optionName:"description",defaultValue:Object(i.__)("Site description loading…","full-site-editing")}})])((function(e){var t,n=e.attributes,r=e.backgroundColor,l=e.className,a=e.fontSize,s=e.insertDefaultBlock,u=e.setAttributes,f=e.setBackgroundColor,b=e.setFontSize,m=e.setTextColor,g=e.siteDescription,O=e.textColor,j=n.customFontSize,h=n.textAlign,y=j||a.size,_=g.value,S=g.updateValue;return Object(o.createElement)(o.Fragment,null,Object(o.createElement)(d.BlockControls,null,Object(o.createElement)(d.AlignmentToolbar,{value:h,onChange:function(e){u({textAlign:e})}})),Object(o.createElement)(d.InspectorControls,null,Object(o.createElement)(p.PanelBody,{className:"blocks-font-size",title:Object(i.__)("Text Settings","full-site-editing")},Object(o.createElement)(d.FontSizePicker,{onChange:b,value:y})),Object(o.createElement)(d.PanelColorSettings,{title:Object(i.__)("Color Settings","full-site-editing"),initialOpen:!1,colorSettings:[{value:r.color,onChange:f,label:Object(i.__)("Background Color","full-site-editing")},{value:O.color,onChange:m,label:Object(i.__)("Text Color","full-site-editing")}]},Object(o.createElement)(d.ContrastChecker,c()({textColor:O.color,backgroundColor:r.color},{fontSize:y})))),Object(o.createElement)(d.RichText,{allowedFormats:[],"aria-label":Object(i.__)("Site Description","full-site-editing"),className:P()("site-description",l,(t={"has-text-color":O.color,"has-background":r.color},v()(t,"has-text-align-".concat(h),h),v()(t,r.class,r.class),v()(t,O.class,O.class),v()(t,a.class,!j&&a.class),t)),identifier:"content",onChange:S,onReplace:s,onSplit:J.noop,placeholder:Object(i.__)("Add a Site Description","full-site-editing"),style:{backgroundColor:r.color,color:O.color,fontSize:y?y+"px":void 0},tagName:"p",value:_}))}));n(42);Object(r.registerBlockType)("a8c/site-description",{title:Object(i.__)("Site Description","full-site-editing"),description:Object(i.__)("Site description, also known as the tagline.","full-site-editing"),icon:Object(o.createElement)("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24",height:"24"},Object(o.createElement)("path",{fill:"none",d:"M0 0h24v24H0z"}),Object(o.createElement)("path",{d:"M4 9h16v2H4V9zm0 4h10v2H4v-2z"})),category:m("design","layout"),supports:{align:["wide","full"],html:!1,multiple:!1,reusable:!1},attributes:{align:{type:"string",default:"wide"},textAlign:{type:"string",default:"center"},textColor:{type:"string"},customTextColor:{type:"string"},backgroundColor:{type:"string"},customBackgroundColor:{type:"string"},fontSize:{type:"string",default:"small"},customFontSize:{type:"number"}},edit:K,save:function(){return null}});var X=Object(u.compose)([Object(d.withColors)({textColor:"color"}),Object(d.withFontSizes)("fontSize"),Object(f.withSelect)((function(e,t){var n=t.clientId,o=e("core/block-editor"),r=o.getBlockIndex,i=o.getBlockRootClientId,l=o.getTemplateLock,c=i(n);return{blockIndex:r(n,c),isLocked:!!l(c),rootClientId:c}})),Object(f.withDispatch)((function(e,t){var n=t.blockIndex,o=t.rootClientId;return{insertDefaultBlock:function(){return e("core/block-editor").insertDefaultBlock({},o,n+1)}}})),H({siteTitle:{optionName:"title",defaultValue:Object(i.__)("Site title loading…","full-site-editing")}})])((function(e){var t,n=e.attributes,r=e.className,l=e.fontSize,c=e.insertDefaultBlock,a=e.setAttributes,s=e.setFontSize,u=e.setTextColor,f=e.siteTitle,b=e.textColor,m=n.customFontSize,g=n.textAlign,O=m||l.size,j=f.value,h=f.updateValue;return Object(o.createElement)(o.Fragment,null,Object(o.createElement)(d.BlockControls,null,Object(o.createElement)(d.AlignmentToolbar,{value:g,onChange:function(e){a({textAlign:e})}})),Object(o.createElement)(d.InspectorControls,null,Object(o.createElement)(p.PanelBody,{className:"blocks-font-size",title:Object(i.__)("Text Settings","full-site-editing")},Object(o.createElement)(d.FontSizePicker,{onChange:s,value:O})),Object(o.createElement)(d.PanelColorSettings,{title:Object(i.__)("Color Settings","full-site-editing"),initialOpen:!1,colorSettings:[{value:b.color,onChange:u,label:Object(i.__)("Text Color","full-site-editing")}]})),Object(o.createElement)(d.RichText,{allowedFormats:[],"aria-label":Object(i.__)("Site Title","full-site-editing"),className:P()("site-title",r,(t={"has-text-color":b.color},v()(t,"has-text-align-".concat(g),g),v()(t,b.class,b.class),v()(t,l.class,!m&&l.class),t)),identifier:"content",onChange:h,onReplace:c,onSplit:J.noop,placeholder:Object(i.__)("Add a Site Title","full-site-editing"),style:{color:b.color,fontSize:O?O+"px":void 0},tagName:"h1",value:j}))}));n(43);Object(r.registerBlockType)("a8c/site-title",{title:Object(i.__)("Site Title","full-site-editing"),description:Object(i.__)("Your site title.","full-site-editing"),icon:"layout",category:m("design","layout"),supports:{align:["wide","full"],html:!1,multiple:!1,reusable:!1},attributes:{align:{type:"string",default:"wide"},textAlign:{type:"string",default:"center"},textColor:{type:"string"},customTextColor:{type:"string"},fontSize:{type:"string",default:"normal"},customFontSize:{type:"number"}},edit:X,save:function(){return null}});var Z=n(26),ee=(n(19),Object(u.compose)(Object(u.withState)({templateClientId:null}),Object(f.withSelect)((function(e,t){var n=t.attributes,o=t.templateClientId,r=e("core").getEntityRecord,i=e("core/editor"),l=i.getCurrentPostId,c=i.isEditedPostDirty,a=e("core/block-editor"),s=a.getBlock,u=a.getSelectedBlock,d=e("core/edit-post").isEditorSidebarOpened,p=n.templateId,f=l(),b=p&&r("postType","wp_template_part",p),m=Object(Z.addQueryArgs)(fullSiteEditing.editTemplateBaseUrl,{post:p,fse_parent_post:f}),g=u();return{currentPostId:f,editTemplateUrl:m,template:b,templateBlock:s(o),templateTitle:Object(J.get)(b,["title","rendered"],""),isDirty:c(),isEditorSidebarOpened:!!d(),isAnyTemplateBlockSelected:g&&"a8c/template"===g.name}})),Object(f.withDispatch)((function(e,t){var n=e("core/block-editor").receiveBlocks,o=e("core/edit-post").openGeneralSidebar,i=t.template,l=t.templateClientId,c=t.setState;return{savePost:e("core/editor").savePost,receiveTemplateBlocks:function(){if(i&&!l){var e=Object(r.parse)(Object(J.get)(i,["content","raw"],"")),t=Object(r.createBlock)("core/group",{},e);n([t]),c({templateClientId:t.clientId})}},openGeneralSidebar:o}})))((function(e){var t,n=e.attributes,r=e.editTemplateUrl,l=e.receiveTemplateBlocks,c=e.template,a=e.templateBlock,s=e.templateTitle,u=e.isDirty,f=e.savePost,b=e.isEditorSidebarOpened,m=e.openGeneralSidebar,g=e.isAnyTemplateBlockSelected;if(!c)return Object(o.createElement)(p.Placeholder,{className:"template-block__placeholder"},Object(o.createElement)(p.Spinner,null));var O=Object(o.createRef)(),j=Object(o.useState)(!1),h=F()(j,2),y=h[0],_=h[1];Object(o.useEffect)((function(){y&&!u&&O.current.click(),l()})),Object(o.useEffect)((function(){var e=document.querySelector(".edit-post-sidebar__panel-tabs ul li:last-child");if(b&&e){if(g)return m("edit-post/document"),void e.classList.add("hidden");e.classList.remove("hidden")}}),[g,b,m]);var S=n.align,E=n.className,w=function(e){e.stopPropagation(),_(!0),u&&(e.preventDefault(),f())};return Object(o.createElement)("div",{className:P()("template-block",(t={},v()(t,"align".concat(S),S),v()(t,"is-navigating-to-template",y),t))},a&&Object(o.createElement)(o.Fragment,null,Object(o.createElement)(p.Disabled,null,Object(o.createElement)("div",{className:E},Object(o.createElement)(d.BlockEdit,{attributes:a.attributes,block:a,clientId:a.clientId,isSelected:!1,name:a.name,setAttributes:J.noop}))),Object(o.createElement)(p.Placeholder,{className:"template-block__overlay",onClick:w},y&&Object(o.createElement)("div",{className:"template-block__loading"},Object(o.createElement)(p.Spinner,null)," ",Object(i.sprintf)(Object(i.__)("Loading editor for: %s","full-site-editing"),s)),Object(o.createElement)(p.Button,{className:y?"hidden":null,href:r,onClick:w,isDefault:!0,isLarge:!0,ref:O},Object(i.sprintf)(Object(i.__)("Edit %s","full-site-editing"),s)))))}))),te=Object(u.createHigherOrderComponent)((function(e){return function(t){return"fse-site-logo"!==t.attributes.className?Object(o.createElement)(e,t):Object(o.createElement)(e,c()({},t,{className:"template__site-logo"}))}}),"addFSESiteLogoClassname");Object(O.addFilter)("editor.BlockListBlock","full-site-editing/blocks/template",te),"wp_template_part"!==fullSiteEditing.editorPostType&&Object(r.registerBlockType)("a8c/template",{title:Object(i.__)("Template Part","full-site-editing"),__experimentalDisplayName:"label",description:Object(i.__)("Display a Template Part.","full-site-editing"),icon:"layout",category:m("design","layout"),attributes:{templateId:{type:"number"},className:{type:"string"},label:{type:"string"}},supports:{anchor:!1,customClassName:!1,html:!1,inserter:!1,reusable:!1},edit:ee,save:function(){return null},getEditWrapperProps:function(){return{"data-align":"full"}}});var ne=Object(u.createHigherOrderComponent)((function(e){return function(t){return"a8c/template"!==t.name?Object(o.createElement)(e,t):Object(o.createElement)(e,c()({},t,{className:"template__block-container"}))}}),"addFSETemplateClassname");Object(O.addFilter)("editor.BlockListBlock","full-site-editing/blocks/template",ne,9);var oe=n(14),re=n.n(oe),ie=n(27),le=n.n(ie);n(44);function ce(e){var t=e.defaultLabel,n=e.defaultUrl,r=Object(o.useState)(t),i=F()(r,2),l=i[0],c=i[1],a=Object(o.useState)(n),s=F()(a,2),u=s[0],d=s[1];return window.wp.hooks.addAction("updateCloseButtonOverrides","a8c-fse",(function(e){c(e.label),d(e.closeUrl)})),Object(o.createElement)("a",{href:u,"aria-label":l},Object(o.createElement)(p.Button,{className:"components-button components-icon-button"},Object(o.createElement)(p.Dashicon,{icon:"arrow-left-alt2"}),Object(o.createElement)("div",{className:"close-button-override__label"},l)))}re()((function(){var e=fullSiteEditing.editorPostType;if("wp_template_part"===e||"page"===e||"post"===e)var t=setInterval((function(){var n=document.querySelector(".edit-post-header__toolbar");if(n){clearInterval(t);var r=document.createElement("div");r.className="components-toolbar edit-post-fullscreen-mode-close__toolbar edit-post-fullscreen-mode-close__toolbar__override",n.prepend(r);var l=fullSiteEditing,c=l.closeButtonLabel,a=l.closeButtonUrl,s=window.calypsoifyGutenberg;s&&s.closeUrl&&(a=s.closeUrl),s&&s.closeButtonLabel&&(c=s.closeButtonLabel);var u=a||"edit.php?post_type=".concat(e),d=c||"Back";"page"!==e||c?"post"!==e||c?"wp_template_part"!==e||c||(d=Object(i.__)("Template Parts","full-site-editing")):d=Object(i.__)("Posts","full-site-editing"):d=Object(i.__)("Pages","full-site-editing"),le.a.render(Object(o.createElement)(ce,{defaultLabel:d,defaultUrl:u}),r)}}))}));var ae=n(28),se=n.n(ae),ue=n(29),de=Object(f.withSelect)((function(e){var t=e("core").getEntityRecord,n=e("core/editor").getEditedPostAttribute;return{templateClasses:Object(J.map)(n("template_part_types"),(function(e){var n=Object(J.get)(t("taxonomy","wp_template_part_type",e),"name","");return n.endsWith("-header")?"fse-header":n.endsWith("-footer")?"fse-footer":void 0}))}}))((function(e){var t=e.templateClasses,n=setInterval((function(){var e=document.querySelector(".block-editor__typewriter > div");e&&(clearInterval(n),e.className=P.a.apply(void 0,["a8c-template-editor fse-template-part"].concat(se()(t))))}));return null}));"wp_template_part"===fullSiteEditing.editorPostType&&Object(ue.registerPlugin)("fse-editor-template-classes",{render:de}),re()((function(){"wp_template_part"===fullSiteEditing.editorPostType&&Object(f.dispatch)("core/notices").createNotice("info",Object(i.__)("Updates to this template will affect all pages on your site.","full-site-editing"),{isDismissible:!1})}));var pe=Object(u.compose)(Object(f.withSelect)((function(e){var t=e("core/editor").getEditorSettings,n=e("core/block-editor").getBlocks,o=e("core/edit-post").getEditorMode,r=n().find((function(e){return"a8c/post-content"===e.name}));return{rootClientId:r?r.clientId:"",showInserter:"visual"===o()&&t().richEditingEnabled}})))((function(e){var t=e.rootClientId,n=e.showInserter;return Object(o.createElement)(d.Inserter,{rootClientId:t,disabled:!n,position:"bottom right",toggleProps:{isPrimary:!0}})})),fe="fse-post-content-block-inserter";function be(){if(!document.getElementById(fe)){var e=document.querySelector(".edit-post-header-toolbar");if(e){var t=document.createElement("div");t.className="fse-post-content-block-inserter",t.id=fe,e.insertBefore(t,e.firstChild),Object(o.render)(Object(o.createElement)(pe,null),t)}}}re()((function(){if("page"===fullSiteEditing.editorPostType)var e=setInterval((function(){document.querySelector(".edit-post-header-toolbar")&&(clearInterval(e),be(),document.getElementById("wpbody")&&void 0!==window.MutationObserver&&new window.MutationObserver(be).observe(document.getElementById("wpbody"),{subtree:!0,childList:!0}))}))}));var me=Object(f.subscribe)((function(){if("page"!==fullSiteEditing.editorPostType)return me();!1===Object(f.select)("core/block-editor").isValidTemplate()&&Object(f.dispatch)("core/block-editor").setTemplateValidity(!0)})),ge=["logo","brand","emblem","hallmark"];Object(O.addFilter)("blocks.registerBlockType","full-site-editing/editor/image-block-keywords",(function(e,t){return"core/image"!==t?e:e=Object(J.assign)({},e,{keywords:e.keywords.concat(ge)})}));n(48);Object(f.use)((function(e){return{dispatch:function(t){var n=z()({},e.dispatch(t)),o=fullSiteEditing.editorPostType;return"core/editor"===t&&n.trashPost&&"wp_template_part"===o&&(n.trashPost=function(){}),n}}})),Object(f.use)((function(e){return{dispatch:function(t){var n=z()({},e.dispatch(t)),o=fullSiteEditing.editorPostType;if("core/editor"===t&&n.editPost&&"wp_template_part"===o){var r=n.editPost;n.editPost=function(e){"draft"!==e.status&&r(e)}}return n}}}));var Oe=Object(f.subscribe)((function(){var e=Object(f.dispatch)("core/edit-post").removeEditorPanel;return"page"===fullSiteEditing.editorPostType&&e("featured-image"),"wp_template_part"===fullSiteEditing.editorPostType&&e("post-status"),Oe()}))}]));