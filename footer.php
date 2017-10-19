<div style="height: 200px" class="hidden-phone"></div>
<div style="height: 50px" class="visible-phone"></div>
<hr>
<div style="text-align:center;">
<small>
</a>
<span class="hidden-phone">
Dr. Chuck Online is not an official activity of the University of Michigan
or School of Information in any way.  
There will be no certificates and no credit - just learning for learning sake 
and learning about learning.  This is my research into how we learn and you are 
welcome to participate.</span>
The contents of this web site (other than the end-user produced content) are 
Copyright Creative Commons
Attribution by 
<a href="<?php echo($CFG->site_owner_page); ?>" target="_blank"><?php echo($CFG->site_owner); ?></a>.
</small>
<br/>
<a href="http://openbadges.org" target="_blank">
<img src="OpenBadges_Insignia_WeIssue.png">
</a>
</div>
<div style="height: 50px"></div>
<?php if ( $CFG->OFFLINE === false ) { 
   if ( $CFG->analytics !== false ) {
?>
<!--
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, 
		gaTrack: true, gaId: '<?php echo($CFG->analytics); ?>'}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?php echo($CFG->analytics); ?>']);
  _gaq.push(['_setDomainName', 'dr-chuck.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php } 
if ( $CFG->OLARK_EXPERIMENTAL === true ) { 
?>
<!-- begin olark code --><script data-cfasync="false" type='text/javascript'>/*{literal}<![CDATA[*/
window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){f[z]=function(){(a.s=a.s||[]).push(arguments)};var a=f[z]._={},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={0:+new Date};a.P=function(u){a.p[u]=new Date-a.p[0]};function s(){a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{b.contentWindow[g].open()}catch(w){c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{var t=b.contentWindow[g];t.write(p());t.close()}catch(x){b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('1302-2115536-10-2739');/*]]>{/literal}*/</script><noscript><a href="https://www.olark.com/site/1302-2115536-10-2739/contact" title="Chat with Dr. Chuck" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript><!-- end olark code -->
<?php } } ?>
