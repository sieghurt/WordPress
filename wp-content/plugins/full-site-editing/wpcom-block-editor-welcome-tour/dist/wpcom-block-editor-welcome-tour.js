!function(e,t){for(var n in t)e[n]=t[n]}(window,function(e){var t={};function n(r){if(t[r])return t[r].exports;var i=t[r]={i:r,l:!1,exports:{}};return e[r].call(i.exports,i,i.exports,n),i.l=!0,i.exports}return n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var i in e)n.d(r,i,function(t){return e[t]}.bind(null,i));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=29)}([function(e,t){!function(){e.exports=this.wp.element}()},function(e,t){!function(){e.exports=this.wp.i18n}()},function(e,t){!function(){e.exports=this.wp.data}()},function(e,t){!function(){e.exports=this.wp.components}()},function(e,t){!function(){e.exports=this.wp.primitives}()},function(e,t,n){"object"==typeof window&&window.wpcomBlockEditorWelcomeTourAssetsUrl&&(n.p=window.wpcomBlockEditorWelcomeTourAssetsUrl)},function(e,t){!function(){e.exports=this.wp.apiFetch}()},function(e,t,n){var r=n(22);function i(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}e.exports=function(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?i(Object(n),!0).forEach((function(t){r(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):i(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}},function(e,t,n){var r=n(24),i=n(25),c=n(26),o=n(28);e.exports=function(e,t){return r(e)||i(e,t)||c(e,t)||o()}},function(e,t,n){},function(e,t){function n(e,t,n,r,i,c,o){try{var a=e[c](o),l=a.value}catch(u){return void n(u)}a.done?t(l):Promise.resolve(l).then(r,i)}e.exports=function(e){return function(){var t=this,r=arguments;return new Promise((function(i,c){var o=e.apply(t,r);function a(e){n(o,i,c,a,l,"next",e)}function l(e){n(o,i,c,a,l,"throw",e)}a(void 0)}))}}},function(e,t){!function(){e.exports=this.lodash}()},function(e,t,n){e.exports=n.p+"images/welcome-baa4ec5a6edd0ef6023e1fd5c25a3685.png"},function(e,t,n){e.exports=n.p+"images/all_blocks-8d4af2d181bc197c6e3e1cf236653c06.gif"},function(e,t,n){e.exports=n.p+"images/add_block-cdcc5441ebf7beaa83cc38e20c3d643d.gif"},function(e,t,n){e.exports=n.p+"images/make_bold-c73d1794982740d4988e41d71d8a51e5.gif"},function(e,t,n){e.exports=n.p+"images/undo-e26c3470f740f4d22e56701c2e5957b5.gif"},function(e,t,n){e.exports=n.p+"images/move_block-ecf099e30192d4c4eb0798d2cd0b0043.gif"},function(e,t,n){e.exports=n.p+"images/finish-5e197962b72fa57bfd6ac58841e32f92.png"},function(e,t,n){e.exports=n.p+"images/more_options-8b2dea79151b37fc8c91e707a0831f9b.gif"},function(e,t){!function(){e.exports=this.wp.plugins}()},,function(e,t){e.exports=function(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}},function(e,t){!function(){e.exports=this.wp.nux}()},function(e,t){e.exports=function(e){if(Array.isArray(e))return e}},function(e,t){e.exports=function(e,t){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(e)){var n=[],_n=!0,r=!1,i=void 0;try{for(var c,o=e[Symbol.iterator]();!(_n=(c=o.next()).done)&&(n.push(c.value),!t||n.length!==t);_n=!0);}catch(a){r=!0,i=a}finally{try{_n||null==o.return||o.return()}finally{if(r)throw i}}return n}}},function(e,t,n){var r=n(27);e.exports=function(e,t){if(e){if("string"==typeof e)return r(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);return"Object"===n&&e.constructor&&(n=e.constructor.name),"Map"===n||"Set"===n?Array.from(e):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?r(e,t):void 0}}},function(e,t){e.exports=function(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}},function(e,t){e.exports=function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}},function(e,t,n){"use strict";n.r(t);var r=n(7),i=n.n(r),c=n(6),o=n.n(c),a=n(2),l={setWpcomNuxStatus:function(e){var t=e.isNuxEnabled;return e.bypassApi||o()({path:"/wpcom/v2/block-editor/nux",method:"POST",data:{isNuxEnabled:t}}),{type:"WPCOM_BLOCK_EDITOR_NUX_SET_STATUS",isNuxEnabled:t}}};Object(a.registerStore)("automattic/nux",{reducer:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},t=arguments.length>1?arguments[1]:void 0,n=t.type,r=t.isNuxEnabled;return"WPCOM_BLOCK_EDITOR_NUX_SET_STATUS"===n?i()(i()({},e),{},{isNuxEnabled:r}):e},actions:l,selectors:{isWpcomNuxEnabled:function(e){return e.isNuxEnabled}},persist:!0});n(23);var u=Object(a.subscribe)((function(){var e;Object(a.dispatch)("core/nux").disableTips(),(null===(e=Object(a.select)("core/edit-post"))||void 0===e?void 0:e.isFeatureActive("welcomeGuide"))&&Object(a.dispatch)("core/edit-post").toggleFeature("welcomeGuide"),u()}));Object(a.subscribe)((function(){var e;Object(a.select)("core/nux").areTipsEnabled()&&(Object(a.dispatch)("core/nux").disableTips(),Object(a.dispatch)("automattic/nux").setWpcomNuxStatus({isNuxEnabled:!0})),(null===(e=Object(a.select)("core/edit-post"))||void 0===e?void 0:e.isFeatureActive("welcomeGuide"))&&(Object(a.dispatch)("core/edit-post").toggleFeature("welcomeGuide"),Object(a.dispatch)("automattic/nux").setWpcomNuxStatus({isNuxEnabled:!0}))}));var s=n(8),d=n.n(s),f=n(10),b=n.n(f),m=n(0),p=(n(5),n(9),n(11)),O=n(1),g=n(4),j=n(3);function h(e){var t=e.currentPage,n=e.numberOfPages,r=e.setCurrentPage;return Object(m.createElement)("ul",{className:"components-guide__page-control","aria-label":Object(O.__)("Guide controls","full-site-editing")},Object(p.times)(n,(function(e){return Object(m.createElement)("li",{key:e,"aria-current":e===t?"step":void 0},Object(m.createElement)(j.Button,{key:e,icon:Object(m.createElement)(v,{isSelected:e===t}),"aria-label":Object(O.sprintf)(Object(O.__)("Page %1$d of %2$d","full-site-editing"),e+1,n),onClick:function(){return r(e)}}))})))}var v=function(e){var t=e.isSelected;return Object(m.createElement)(g.SVG,{width:"6",height:"6",fill:"none",xmlns:"http://www.w3.org/2000/svg"},Object(m.createElement)(g.Circle,{cx:"3",cy:"3",r:"3",fill:t?"#32373C":"#E1E3E6"}))},w=Object(m.createElement)(g.SVG,{width:"24",height:"24",fill:"none",xmlns:"http://www.w3.org/2000/svg"},Object(m.createElement)(g.Path,{fillRule:"evenodd",clipRule:"evenodd",d:"M18.514 9.988l-3.476.016c.627-.626 1.225-1.22 1.82-1.811l.03-.03v-.001c.977-.971 1.944-1.933 3.015-3.004l-1.06-1.06c-1.07 1.069-2.037 2.03-3.013 3.001l-.03.03-1.818 1.809.03-3.449-1.5-.013-.045 5.28-.007.76.76-.004 5.301-.024-.007-1.5zM5.486 14.012l3.477-.016-1.82 1.811-.03.03c-.977.972-1.945 1.934-3.015 3.005l1.06 1.06c1.07-1.068 2.035-2.03 3.012-3V16.9l.03-.03 1.818-1.809-.03 3.449 1.5.013.046-5.28.006-.76-.76.004-5.3.024.006 1.5z",fill:"#fff"})),y=Object(m.createElement)(g.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},Object(m.createElement)(g.Path,{d:"M13 11.8l6.1-6.3-1-1-6.1 6.2-6.1-6.2-1 1 6.1 6.3-6.5 6.7 1 1 6.5-6.6 6.5 6.6 1-1z"}));function x(e){var t=e.onMinimize,n=e.onDismiss;return Object(m.createElement)("div",{className:"welcome-tour-card__overlay-controls"},Object(m.createElement)(j.Flex,null,Object(m.createElement)(j.Button,{isPrimary:!0,className:"welcome-tour-card__minimize-icon",icon:w,iconSize:24,onClick:function(){return t(!0)}}),Object(m.createElement)(j.Button,{isPrimary:!0,icon:y,iconSize:24,onClick:function(){return n()}})))}var E=function(e){var t=e.cardContent,n=e.cardIndex,r=e.lastCardIndex,i=e.onMinimize,c=e.onDismiss,o=e.setCurrentCard,a=t.description,l=t.heading,u=t.imgSrc;return Object(m.createElement)(j.Card,{className:"welcome-tour-card",isElevated:!0},Object(m.createElement)(x,{onDismiss:c,onMinimize:i}),Object(m.createElement)(j.CardMedia,null,Object(m.createElement)("img",{alt:"Editor Welcome Tour",src:u})),Object(m.createElement)(j.CardBody,null,Object(m.createElement)("h2",{className:"welcome-tour-card__heading"},l),Object(m.createElement)("p",{className:"welcome-tour-card__description"},a,n===r?Object(m.createElement)(j.Button,{className:"welcome-tour-card__description",isTertiary:!0,onClick:function(){return o(0)}},"Restart tour"):null)),Object(m.createElement)(j.CardFooter,null,Object(m.createElement)(h,{currentPage:n,numberOfPages:r+1,setCurrentPage:o}),Object(m.createElement)("div",null,0===n?Object(m.createElement)(j.Button,{isTertiary:!0,onClick:function(){return c()}},"No thanks"):Object(m.createElement)(j.Button,{isTertiary:!0,onClick:function(){return o(n-1)}},"Back"),n<r?Object(m.createElement)(j.Button,{className:"welcome-tour-card__next-btn",isPrimary:!0,onClick:function(){return o(n+1)}},0===n?"Let's start":"Next"):Object(m.createElement)(j.Button,{className:"welcome-tour-card__next-btn",isPrimary:!0,onClick:function(){return c()}},"Done"))))},_=n(12),S=n.n(_),P=n(13),k=n.n(P),C=n(14),N=n.n(C),T=n(15),M=n.n(T),D=n(16),z=n.n(D),B=n(17),W=n.n(B),A=n(18),I=n.n(A),R=n(19),U=n.n(R);var G=function(){return[{heading:Object(O.__)("Welcome to WordPress!","full-site-editing"),description:Object(O.__)("Continue on with this short tour to learn the fundamentals of the WordPress editor.","full-site-editing"),imgSrc:S.a,animation:null},{heading:Object(O.__)("Everything is a block","full-site-editing"),description:Object(O.__)("In the WordPress Editor paragraphs, images, and videos are all blocks.","full-site-editing"),imgSrc:k.a,animation:null},{heading:Object(O.__)("Adding a new block","full-site-editing"),description:Object(O.__)("Click + to open the inserter. Then click the block you want to add.","full-site-editing"),imgSrc:N.a,animation:"block-inserter"},{heading:Object(O.__)("Click a block to change it","full-site-editing"),description:Object(O.__)("Use the toolbar to change the appearance of a selected block. Try making it bold.","full-site-editing"),imgSrc:M.a,animation:null},{heading:Object(O.__)("More Options","full-site-editing"),description:Object(O.__)("Click the settings icon to see even more options.","full-site-editing"),imgSrc:U.a,animation:null},{heading:Object(O.__)("Undo any mistake","full-site-editing"),description:Object(O.__)("Simply click the Undo button if you've made a mistake.","full-site-editing"),imgSrc:z.a,animation:"undo-button"},{heading:Object(O.__)("Drag & drop","full-site-editing"),description:Object(O.__)("To move blocks around simply click and drag the handle around.","full-site-editing"),imgSrc:W.a,animation:"undo-button"},{heading:Object(O.__)("Congratulations!","full-site-editing"),description:Object(O.__)("You’ve now learned the basics. Remember, your site is always private until you decide to launch.","full-site-editing"),imgSrc:I.a,animation:"block-inserter"}]},F=Object(m.createElement)(g.SVG,{width:"24",height:"24",fill:"none",xmlns:"http://www.w3.org/2000/svg"},Object(m.createElement)(g.Path,{fillRule:"evenodd",clipRule:"evenodd",d:"M14.086 5.412l3.476-.015c-.627.625-1.225 1.22-1.82 1.81l-.03.031c-.977.971-1.944 1.934-3.015 3.004l1.06 1.061c1.07-1.07 2.036-2.03 3.013-3.002l.03-.03 1.817-1.808-.03 3.448 1.5.013.046-5.28.007-.759-.76.003-5.301.024.007 1.5zM9.914 18.587l-3.476.016c.627-.625 1.225-1.22 1.82-1.81l.03-.031c.977-.971 1.944-1.934 3.015-3.004l-1.06-1.061c-1.07 1.069-2.036 2.03-3.012 3.001l-.001.001-.03.03-1.817 1.808.03-3.448-1.5-.013-.046 5.279-.007.76.76-.003 5.301-.024-.007-1.5z",fill:"#50575E"}));function V(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}function L(e,t){if(null==e)return{};var n,r,i=function(e,t){if(null==e)return{};var n,r,i={},c=Object.keys(e);for(r=0;r<c.length;r++)n=c[r],t.indexOf(n)>=0||(i[n]=e[n]);return i}(e,t);if(Object.getOwnPropertySymbols){var c=Object.getOwnPropertySymbols(e);for(r=0;r<c.length;r++)n=c[r],t.indexOf(n)>=0||Object.prototype.propertyIsEnumerable.call(e,n)&&(i[n]=e[n])}return i}function $(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}var K=function(e){var t=e.icon,n=e.size,r=void 0===n?24:n,i=L(e,["icon","size"]);return Object(m.cloneElement)(t,function(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?$(Object(n),!0).forEach((function(t){V(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):$(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}({width:r,height:r},i))},X=n(20);function Y(){var e=Object(a.useSelect)((function(e){return e("automattic/nux").isWpcomNuxEnabled()})),t=Object(a.useDispatch)("automattic/nux").setWpcomNuxStatus;(new window.Image).src=G()[0].imgSrc;var n=document.createElement("div");return n.classList.add("wpcom-editor-welcome-tour-portal-parent"),Object(m.useEffect)((function(){void 0===e&&function(){var e=b()(regeneratorRuntime.mark((function e(){var n;return regeneratorRuntime.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,o()({path:"/wpcom/v2/block-editor/nux"});case 2:n=e.sent,t({isNuxEnabled:n.is_nux_enabled,bypassApi:!0});case 4:case"end":return e.stop()}}),e)})));return function(){return e.apply(this,arguments)}}()()}),[e,t]),Object(m.useEffect)((function(){if(e)return document.body.appendChild(n),function(){document.body.removeChild(n)}})),Object(m.createElement)("div",null,Object(m.createPortal)(Object(m.createElement)(q,null),n))}function q(){var e=G(),t=Object(m.useState)(!1),n=d()(t,2),r=n[0],i=n[1],c=Object(m.useState)(0),o=d()(c,2),l=o[0],u=o[1],s=Object(a.useDispatch)("automattic/nux").setWpcomNuxStatus;return e.forEach((function(e){return(new window.Image).src=e.imgSrc})),Object(m.createElement)("div",{className:"wpcom-editor-welcome-tour-frame"},r?Object(m.createElement)(H,{onMaximize:i}):Object(m.createElement)(E,{cardContent:e[l],cardIndex:l,key:l,lastCardIndex:e.length-1,onDismiss:function(){s({isNuxEnabled:!1})},onMinimize:i,setCurrentCard:u}))}function H(e){var t=e.onMaximize;return Object(m.createElement)(j.Button,{onClick:function(){return t(!1)},className:"wpcom-editor-welcome-tour__resume-btn"},Object(m.createElement)(j.Flex,{gap:13},Object(m.createElement)("p",null,"Click to resume tutorial"),Object(m.createElement)(K,{icon:F,size:24})))}Object(X.registerPlugin)("wpcom-block-editor-welcome-tour",{render:function(){return Object(m.createElement)(Y,null)}})}]));