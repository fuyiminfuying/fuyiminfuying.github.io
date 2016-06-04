!DOCTYPE HTML
!--[if lt IE 7]      html class=no-js lt-ie9 lt-ie8 lt-ie7 ![endif]--
!--[if IE 7]         html class=no-js lt-ie9 lt-ie8 ![endif]--
!--[if IE 8]         html class=no-js lt-ie9 ![endif]--
!--[if gt IE 8]!-- html class=no-js !--![endif]--
head
  meta charset=php $this-options-charset();  
	meta name=viewport content=width=device-width,user-scalable=no
  php if ($this-is('index')) titleCho'stitle
	php else 
	titlephp $this-archiveTitle('.', '', ' - '); Cho'stitle
	php endif; 
	!--[if lt IE 9]
    link rel=stylesheet href=php $this-options-themeUrl('javascripthtml5shiv.js'); 
    ![endif]--
    link rel=stylesheet href=php $this-options-adminUrl('cssnormalize.css'); 
    link rel=stylesheet href=php $this-options-themeUrl('style.css'); 
  php $this-header(generator=&template=&); 
head
body
div class=body404
div class=info404
header id=header404 class=clearfix
  div class=site-name404
    i404i
  div
header
section
  div class=title404p每一个平凡的日常br都是连续发生中的奇迹pdiv
  a class=index404 rel=nofollow href=php $this-options-siteUrl(); 回首页看看a
section
footer id=footer404
	&copy; php echo date('Y');  php $this-options-title(); .span
footer
div
div
php $this-footer(); 
body
html