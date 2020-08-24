!function o(r,a,u){function l(e,t){if(!a[e]){if(!r[e]){var i="function"==typeof require&&require;if(!t&&i)return i(e,!0);if(c)return c(e,!0);var n=new Error("Cannot find module '"+e+"'");throw n.code="MODULE_NOT_FOUND",n}var s=a[e]={exports:{}};r[e][0].call(s.exports,function(t){return l(r[e][1][t]||t)},s,s.exports,o,r,a,u)}return a[e].exports}for(var c="function"==typeof require&&require,t=0;t<u.length;t++)l(u[t]);return l}({1:[function(t,e,i){"use strict";var n=r(t(4)),s=r(t(2)),o=r(t(3));function r(t){return t&&t.__esModule?t:{default:t}}panel.plugin("wottpal/git",{use:[n.default],sections:{gitLog:s.default,gitRevisions:o.default}})},{2:2,3:3,4:4}],2:[function(t,e,i){!function(){"use strict";Object.defineProperty(i,"__esModule",{value:!0}),i.default={data:function(){return{headline:"",limit:5,kirbyOnly:!0,log:[],paginatedLog:[]}},computed:{paginationOptions:function(){return{limit:this.limit,align:"center",details:!0,keys:this.log.map(function(t){return t.hash}),total:this.log.length,hide:!1}}},created:function(){var e=this;this.load().then(function(t){e.limit=t.limit,e.headline=t.headline,e.kirbyOnly=t.kirbyOnly,e.processLog(JSON.parse(JSON.stringify(t.gitLog))),e.paginate()})},methods:{paginate:function(t){var e=0,i=Math.min(this.log.length,this.limit);t&&(e=t.start-1,i=t.end),this.paginatedLog=this.log.slice(e,i)},processLog:function(t){var e=this;this.log=t.map(function(t){var e="By: ",i=t.message.indexOf(e);-1!=i?(t.author=t.message.substring(i+e.length),t.message=t.message.substring(0,i),t.authorSource="Kirby"):t.authorSource="Git";var n=/(.*):\w*(.*)\w*/.exec(t.message);return"Kirby"==t.authorSource&&n&&2<=n.length?(t.commitType=n[1],t.commitSubject=n[2].trim().split("/"),t.commitSubject=t.commitSubject.map(function(t){return t.replace("None",'<span class="k-structure-item-path__none">None</span>')})):(t.commitType="Developer Commit",t.commitSubject=[t.message]),t}).filter(function(t){return"Kirby"==t.authorSource||!e.kirbyOnly})}}}}(),e.exports.__esModule&&(e.exports=e.exports.default);var n="function"==typeof e.exports?e.exports.options:e.exports;n.render=function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("section",{staticClass:"k-gitlog-section"},[i("k-headline",[e._v(e._s(e.headline))]),e._v(" "),e.log.length?[i("div",{staticClass:"k-gitlog-table"},e._l(e.paginatedLog,function(t){return i("div",{key:t.hash,staticClass:"k-gitlog-row"},[i("p",{},[i("span",{staticClass:"k-gitlog-item-label"},[e._v(e._s(t.commitType))]),e._v(" "),i("span",{staticClass:"k-gitlog-item-path",attrs:{title:t.commitSubject.join(" / ")}},e._l(t.commitSubject,function(t){return i("span",{domProps:{innerHTML:e._s(t)}})}))]),e._v(" "),i("p",{},[i("span",{staticClass:"k-gitlog-item-label"},[e._v("Author")]),e._v(" "),i("span",{attrs:{title:t.author}},[e._v(e._s(t.author))])]),e._v(" "),i("p",{},[i("span",{staticClass:"k-gitlog-item-label"},[e._v("Date")]),e._v(" "),i("span",{attrs:{title:t.dateFormatted}},[e._v(e._s(t.dateFormatted))])])])})),e._v(" "),i("k-pagination",e._b({ref:"pagination",on:{paginate:function(t){e.paginate(t)}}},"k-pagination",e.paginationOptions,!1))]:i("k-box",[e._v("\n    No commits or no repository found.\n  ")])],2)},n.staticRenderFns=[]},{}],3:[function(t,e,i){!function(){"use strict";Object.defineProperty(i,"__esModule",{value:!0}),i.default={props:{gitRevisions:Array,fields:{type:Array,default:[]},columns:{type:Array,default:[]},limit:{default:5,type:Number}},data:function(){return{infoColumns:{dateFormatted:"Date"},revisions:[],paginatedRevisions:[]}},created:function(){this.$events.$on("form.change",this.onFormChange),this.$events.$on("form.save",this.onFormSave),this.$events.$on("form.reset",this.onFormReset)},destroyed:function(){this.$events.$off("form.change",this.onFormChange),this.$events.$off("form.save",this.onFormSave),this.$events.$off("form.reset",this.onFormReset)},mounted:function(){this.initInfoColumns(),this.initRevisions(),this.paginate()},computed:{paginationOptions:function(){return{limit:this.limit,align:"center",details:!0,keys:this.revisions.map(function(t){return t.hash}),total:this.revisions.length,hide:!1}}},methods:{onFormChange:function(){},onFormSave:function(){},onFormReset:function(){this.revisions.length&&(this.revisions[0].selected=!0)},initInfoColumns:function(){var t={author:"Author",hash:"Commit-Hash",message:"Commit-Message"},e=!0,i=!1,n=void 0;try{for(var s,o=this.columns[Symbol.iterator]();!(e=(s=o.next()).done);e=!0){var r=s.value;r in t&&(this.infoColumns[r]=t[r])}}catch(t){i=!0,n=t}finally{try{!e&&o.return&&o.return()}finally{if(i)throw n}}},initRevisions:function(){var i=this;console.log(this.gitRevisions),this.revisions=JSON.parse(JSON.stringify(this.gitRevisions)),this.revisions=this.revisions.filter(function(t){var e=Object.keys(t.content).filter(function(t){return-1!==i.fields.indexOf(t)});return 0<(t.updateFields=e).length}),this.revisions=this.revisions.map(function(t){var e=t.message.indexOf("By: ");return-1!=e?(t.author=t.message.substring(e+"By: ".length),t.authorSource="Kirby"):t.authorSource="Git",t}),this.revisions.length&&(this.revisions[0].first=!0,this.revisions[0].selected=!0)},applyRevision:function(t){this.revisions.forEach(function(t){return t.selected=!1}),t.selected=!0,this.$forceUpdate();var e,i,n,s=!0,o=!1,r=void 0;try{for(var a,u=t.updateFields[Symbol.iterator]();!(s=(a=u.next()).done);s=!0){var l=a.value,c=t.content[l];this.$events.$emit("values-push",(n=c,(i=l)in(e={})?Object.defineProperty(e,i,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[i]=n,e))}}catch(t){o=!0,r=t}finally{try{!s&&u.return&&u.return()}finally{if(o)throw r}}},paginate:function(t){var e=0,i=Math.min(this.revisions.length,this.limit);t&&(e=t.start-1,i=t.end),this.paginatedRevisions=this.revisions.slice(e,i)}}}}(),e.exports.__esModule&&(e.exports=e.exports.default);var n="function"==typeof e.exports?e.exports.options:e.exports;n.render=function(){var n=this,t=n.$createElement,s=n._self._c||t;return n.revisions.length?s("k-field",n._b({},"k-field",n.$attrs,!1),[n.revisions.length?s("div",[s("ul",{staticClass:"k-structure k-structure--git"},n._l(n.paginatedRevisions,function(i){return s("li",{key:i.hash,ref:"structureItem",refInFor:!0,staticClass:"k-structure-item",class:{"k-structure-item--isSelected":i.selected},on:{click:function(t){!i.selected&&n.applyRevision(i)}}},[s("div",{staticClass:"k-structure-item-wrapper"},[s("div",{staticClass:"k-structure-item-content"},n._l(n.infoColumns,function(t,e){return s("p",{staticClass:"k-structure-item-text"},[s("span",{staticClass:"k-structure-item-label"},[n._v("\n                "+n._s(t)+"\n                "),"Date"===t&&i.first?s("span",[n._v("(Latest)")]):n._e()]),n._v(" "),s("span",[n._v(n._s(i[e]))])])}))])])})),n._v(" "),s("k-pagination",n._b({ref:"pagination",on:{paginate:function(t){n.paginate(t)}}},"k-pagination",n.paginationOptions,!1))],1):s("k-box",[n._v("\n    No commits or no repository found.\n  ")])],1):n._e()},n.staticRenderFns=[]},{}],4:[function(t,e,i){"use strict";Object.defineProperty(i,"__esModule",{value:!0}),i.default=function(t){var e=t.options.components["k-fields-section"];e.options.methods.valuesPush||t.component("k-fields-section",{extends:e,created:function(){this.$events.$on("values-push",this.valuesPush)},destroyed:function(){this.$events.$off("values-push",this.valuesPush)},methods:{valuesPush:function(t){var e=!1;for(var i in t)i in this.values&&(this.values[i]=t[i],e=!0);e&&this.input(this.values)}}})}},{}]},{},[1]);
