<?php

namespace App\Repositories;

use Auth;


class MyController
{

	protected $user = Null;

	public function checkAuth($clientId)
	{

		$this->setUser();

		if($clientId !== $this->user->client_id)
		{
			return abort(404);
		}
		
	}

	public function setUser()
	{
		$this->user = Auth::user();

	}

}