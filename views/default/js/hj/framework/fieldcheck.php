elgg.provide("hj.framework.fieldcheck");hj.framework.fieldcheck.init=function(a){var b=true;$('[mandatory="1"]',a).each(function(){if($(this).val()==""){b=false}});$('[mandatory="true"]',a).each(function(){if($(this).val()==""){b=false}});$('[mandatory="yes"]',a).each(function(){if($(this).val()==""){b=false}});$('[mandatory="mandatory"]',a).each(function(){if($(this).val()==""){b=false}});if(!b)alert(elgg.echo("hj:framework:formcheck:fieldmissing"));return b};elgg.register_hook_handler("init","system",hj.framework.fieldcheck.init);elgg.register_hook_handler("success","hj:framework:ajax",hj.framework.fieldcheck.init);