"use strict";(globalThis.webpackChunkcomplianz_gdpr=globalThis.webpackChunkcomplianz_gdpr||[]).push([[4676,4976,4048],{24976:(e,n,t)=>{t.r(n),t.d(n,{UseMenuData:()=>r});var c=t(30809),a=t(61744),u=t(524),m=t(32208),o=t(93396);const r=(0,c.Su)(((e,n)=>({menuDataLoaded:!1,saving:!1,menu:[],menuChanged:!1,changedMenuType:"per_document",emptyMenuLink:"#",requiredDocuments:[],createdDocuments:[],genericDocuments:[],documentsNotInMenu:[],pageTypes:[],regions:[],fetchMenuData:async()=>{const n=await d(!1);let t=n.required_documents.filter((e=>e.page_id));e({menuDataLoaded:!0,emptyMenuLink:n.empty_menu_link,menu:n.menu,requiredDocuments:n.required_documents,genericDocuments:n.generic_documents_list,createdDocuments:t,pageTypes:n.page_types,documentsNotInMenu:n.documents_not_in_menu,regions:n.regions})},updateMenu:(n,t)=>{let c=isNaN(n)?"per_type":"per_document";e({menuType:c}),e("per_type"===c?(0,u.cp)((e=>{let c=e.genericDocuments.findIndex((function(e,t){return e.page_id===n||e.type===n})),a=e.createdDocuments.findIndex((function(e,t){return e.page_id===n||e.type===n}));-1!==c&&(e.genericDocuments[c].menu_id=t,-1!==a&&(e.createdDocuments[a].menu_id=-1),e.menuChanged=!0)})):(0,u.cp)((e=>{let c=e.genericDocuments.findIndex((function(e,t){return e.page_id===n||e.type===n})),a=e.createdDocuments.findIndex((function(e,t){return e.page_id===n||e.type===n}));-1!==a&&(e.createdDocuments[a].menu_id=t,-1!==c&&(e.genericDocuments[c].menu_id=-1),e.menuChanged=!0)})))},saveDocumentsMenu:async(t,c)=>{if(e({saving:!0}),n().menuChanged||t){let t={};t.genericDocuments=n().genericDocuments.filter((e=>e.can_region_redirect)),t.createdDocuments=n().createdDocuments;const u=a.doAction("save_documents_menu_data",t).then((n=>(e({saving:!1}),n))).catch((e=>{console.error(e)}));c&&m.toast.promise(u,{pending:(0,o.__)("Saving menu...","complianz-gdpr"),success:(0,o.__)("Menu saved","complianz-gdpr"),error:(0,o.__)("Something went wrong","complianz-gdpr")})}else c&&m.toast.info((0,o.__)("Settings have not been changed","complianz-gdpr"))}}))),d=()=>a.doAction("documents_menu_data",{generate:!1}).then((e=>e)).catch((e=>{console.error(e)}))},64676:(e,n,t)=>{t.r(n),t.d(n,{default:()=>m});var c=t(51280),a=t(24976),u=t(11668);const m=(0,t(88496).memo)((e=>{const{genericDocuments:n}=(0,a.UseMenuData)();let t=n.filter((n=>n.type===e.pageType.type));return 0===t.length?null:(0,c.createElement)("div",null,(0,c.createElement)("h3",{className:"cmplz-h4"},e.type),t.map(((e,n)=>(0,c.createElement)(u.default,{key:n,document:e}))))}))},11668:(e,n,t)=>{t.r(n),t.d(n,{default:()=>m});var c=t(51280),a=t(24976),u=t(93396);const m=(0,t(88496).memo)((e=>{const{menu:n,updateMenu:t}=(0,a.UseMenuData)();return(0,c.createElement)("div",{className:"cmplz-single-document-menu"},(0,c.createElement)("div",{className:"cmplz-document-menu-title"},e.document.title),(0,c.createElement)("select",{value:e.document.menu_id,onChange:n=>(n=>{t(e.document.page_id,n.target.value)})(n)},(0,c.createElement)("option",{value:-1,key:-1},(0,u.__)("Select a menu","complianz-gdpr")),n.map(((e,n)=>(0,c.createElement)("option",{key:n,value:e.id},e.label)))))}))}}]);