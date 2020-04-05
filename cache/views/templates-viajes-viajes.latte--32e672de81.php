<?php
// source: C:\Users\adesl\Documents\GitHub\LandTravel\src\core/../../views/templates/viajes/viajes.latte

use Latte\Runtime as LR;

class Template32e672de81 extends Latte\Runtime\Template
{
	public $blocks = [
		'body' => 'blockBody',
		'scripts' => 'blockScripts',
	];

	public $blockTypes = [
		'body' => 'html',
		'scripts' => 'html',
	];


	function main()
	{
		extract($this->params);
?>

<?php
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('body', get_defined_vars());
?>

<?php
		$this->renderBlock('scripts', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		$this->parentName = '../base/base.latte';
		
	}


	function blockBody($_args)
	{
		extract($_args);
		/* line 4 */
		$this->createTemplate('../components/viajes.latte', $this->params, "include")->renderToContentType('html');
		
	}


	function blockScripts($_args)
	{
?>	<script src="js/popover.js"></script>
<?php
	}

}