(function(){GrowingInput=function(g,l){var i,h,f;l=$.extend({min:0,max:null,startWidth:15,correction:15},l);g=$(g).data("growing",this);var k=this;var j=function(){f=$("<span></span>").css({"float":"left",display:"inline-block",position:"absolute",left:-1000}).insertAfter(g);$.each(["font-size","font-family","padding-left","padding-top","padding-bottom","padding-right","border-left","border-right","border-top","border-bottom","word-spacing","letter-spacing","text-indent","text-transform"],function(m,n){f.css(n,g.css(n))});g.blur(d).keyup(d).keydown(d).keypress(d);d()};var e=function(n){f.html(n);var m=f.width();return(m?m:l.startWidth)+l.correction};var d=function(){h=i;i=g.val();var m=i;if(a(l.min)&&i.length<l.min){if(a(h)&&(h.length<=l.min)){return}m=b(i,l.min,"-")}else{if(a(l.max)&&i.length>l.max){if(a(h)&&(h.length>=l.max)){return}m=i.substr(0,l.max)}}g.width(e(m));return k};this.resize=d;j()};var a=function(d){return !!(d||d===0)};var c=function(e,d){return new Array(d+1).join(e)};var b=function(d,f,h,e){if(d.length>=f){return this}h=h||" ";var g=c(h,f-d.length).substr(0,f-d.length);if(!e||e=="right"){return d+g}if(e=="left"){return g+d}return g.substr(0,(g.length/2).floor())+d+g.substr(0,(g.length/2).ceil())}})();