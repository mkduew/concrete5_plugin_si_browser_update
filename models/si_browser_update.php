<?php 
class SiBrowserUpdate {
	public function addPageHeader($pid) {
		$v = View::getInstance();		
		$v->addHeaderItem('<script type="text/javascript"> 
/* <![CDATA[ */
var $buoop = {} 
$buoop.ol = window.onload; 
window.onload=function(){ 
 if ($buoop.ol) $buoop.ol(); 
 var e = document.createElement("script"); 
 e.setAttribute("type", "text/javascript"); 
 e.setAttribute("src", "http://browser-update.org/update.js"); 
 document.body.appendChild(e); 
}
/* ]]> */ 
</script>
', 'CONTROLLER');
	}
}
?>