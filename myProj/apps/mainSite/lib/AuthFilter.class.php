<?php
/**
* AuthFilter
*
* This filter handles authentication. 
*/
class AuthFilter extends sfFilter {
	
	public function execute($filterChain) {
	$context = $this->getContext();
		$request = $context->getRequest();

		if(!$request->getAttribute('FirstCall'))
		{
			$request->setAttribute('FirstCall', 1);
			if($request->getParameter('module')!="login")
			{

				$enable_login=sfConfig::get('mod_' . $request->getParameter('module') . '_' . $request->getParameter('action') . '_enable_login');
				//LOGIN CONCEPT
				
				$cookie_obj=new cookie1;
				$uid=$cookie_obj->retId();
				if($uid)
				{
					$request->setAttribute('id', $uid);
					
				}
				elseif ($enable_login == 'on')
				{
					$uri = $request->getUri();
					$request->setAttribute('Uri',$uri);
					$context->getController()->forward("login","index");
			                die;				
			
				}
			}
		}
		$filterChain->execute();
	}
}
