YUI.add("omapps-i18n",function(a){a.namespace("omapps");a.omapps.I18n=function(h,m,e){var c=function(i){var n;if(window.XMLHttpRequest){n=new XMLHttpRequest();}else{n=new ActiveXObject("Microsoft.XMLHTTP");}if(n){n.open("GET",i,false);n.send(null);if(n.status===200){return n.responseText;}}};var b=function(i){var o,n;o="us";n=window.location.href.match(/[\?&]\.intl=([a-z0-9]{2})/);if(n){o=n[1];}switch(o){case"aa":return["en-SG"];case"ar":return["es-AR"];case"au":return["en-AU"];case"br":return["pt-BR"];case"ca":return["en-CA"];case"cf":return["fr-CA"];case"cl":return["es-CL"];case"cn":return["zh-Hans-CN"];case"co":return["es-CO"];case"de":return["de-DE"];case"dk":return["da-DK"];case"e1":return["es-US"];case"es":return["es-ES"];case"fi":return["fi-FI"];case"fr":return["fr-FR"];case"gr":return["el-GR"];case"hi":return["hi-IN"];case"hk":return["zh-Hant-HK"];case"id":return["id-ID"];case"ie":return["en-IE"];case"in":return["en-IN"];case"it":return["it-IT"];case"jp":return["ja-JP"];case"kr":return["ko-KR"];case"mx":return["es-MX"];case"my":return["en-MY"];case"nl":return["nl-NL"];case"no":return["nb-NO"];case"nz":return["en-NZ"];case"pe":return["es-PE"];case"ph":return["en-PH"];case"pl":return["pl-PL"];case"ro":return["ro-RO"];case"ru":return["ru-RU"];case"se":return["sv-SE"];case"sg":return["en-SG"];case"th":return["th-TH"];case"tr":return["tr-TR"];case"tw":return["zh-Hant-TW"];case"uk":return["en-GB"];case"us":return["en-US"];case"ve":return["es-VE"];case"vn":return["vi-VN"];default:return["en-US"];}};var l=b(h)[0],f=false,j=e.length,k,d;for(var g=0;g<j&&!f;g++){if(e[g].toLowerCase()===l.toLowerCase()){f=true;break;}}if(!f){l="en-US";}k=m.replace("en-US",l);d=JSON.parse(c(k));this.translate=function(i){i=i.toUpperCase();if(d.hasOwnProperty(i)){return d[i];}else{return"";}};};},"0.1.1",{requires:["base","json"]});