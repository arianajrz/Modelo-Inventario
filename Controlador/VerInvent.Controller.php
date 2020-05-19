<?php
	class VerInvent 
	{
		public function Inicio()
		{
			$smarty->assign('e','true');  
			$smarty->assign('vista','Inventario'); 
			$smarty->assign('usuario',$_SESSION['user']); 
			$smarty->assign('tipo',$_SESSION['tipo']); 
			$smarty->display('Master.tpl');
		}
	}
?>