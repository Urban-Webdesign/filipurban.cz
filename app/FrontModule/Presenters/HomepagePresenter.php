<?php declare(strict_types = 1);

namespace App\FrontModule\Presenters;

class HomepagePresenter extends BasePresenter
{

	public function renderDefault(): void
	{

	}

	public function renderService($slug): void
	{
		$this->template->slug = $slug;
	}

}
