<?php    
     
    function getView($template, $vars)    
    {       
        $smarty = new Smarty();
        $smarty -> setTemplateDir(TEMPLATE_DIR);
        $smarty -> setCompileDir(TEMPLATE_C_DIR);
        $smarty -> assign($vars);
        return $smarty -> fetch($template);
    }
    function BuildPage($template, $vars = array())
    {
        $header = getView('header.html', $vars);
        $content = getView('aside.html', $vars);
		$footer = getView('footer.html', $vars);
        return $header . $content. $footer;
    }   
	
	function BuildPage_Canvas($template, $vars = array())
    {
        $header = getView('header_canvas.html', $vars);
        $aside = getView('aside_canvas.html', $vars);
		$content = getView('content_canvas.html', $vars);
        return $header . $aside. $content;
    }  