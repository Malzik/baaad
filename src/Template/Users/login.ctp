<div class="container mt-3">
	<?php
		$myTemplates = [
		    'inputContainer' => '<div class="form-group">{{content}}</div>',
		    'input' => '<input type="{{type}}" class="form-control" name="{{name}}"{{attrs}}/>'
		];
		$this->Form->setTemplates($myTemplates);

		echo $this->Form->create();
		echo $this->Form->controls(
			[
				'Email' => ['placeholder' => 'Enter Your Email', 'required' => true],
				'password' => ['placeholder' => 'Enter Your password', 'required' => true]
			],
			['legend' => 'Sign In']
		);
		echo $this->Form->button('<i class=" fa fa-sign-in"> Login</i>', [
			'class' => 'btn btn-success',
			'type' => 'submit',
			'escape' => false
		]);
		echo $this->Form->end();
	?>
</div>