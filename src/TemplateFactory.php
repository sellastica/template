<?php
namespace Sellastica\Template;

class TemplateFactory
{
	/**
	 * @var \Nette\Bridges\ApplicationLatte\ILatteFactory
	 */
	private $latteFactory;


	/**
	 * @param \Nette\Bridges\ApplicationLatte\ILatteFactory $latteFactory
	 */
	public function __construct(\Nette\Bridges\ApplicationLatte\ILatteFactory $latteFactory)
	{
		$this->latteFactory = $latteFactory;
	}

	/**
	 * @param string $template
	 * @param array $params
	 * @return string
	 */
	public function create(
		string $template,
		array $params
	): string
	{
		$latte = $this->latteFactory->create();
		return $latte->renderToString($template, $params);
	}
}
