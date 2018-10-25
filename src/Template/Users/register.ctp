<div class="container mt-3">
	<?php
		$myTemplates = [
		    'inputContainer' => '<div class="form-group">{{content}}</div>',
		    'inputContainerError' => '<div class="form-group {{required}} error">{{content}}{{error}}</div>',
		    'error' => '<div class="invalid-feedback">{{content}}</div>',
		];
		$this->Form->setTemplates($myTemplates);

		echo $this->Form->create($users);
		echo $this->Form->controls(
			[
				'name' => [
					'name' => 'name',
					'placeholder' => 'Enter Your Name',
					'required' => false,
					'label' => 'Name',
					'class' => ($this->Form->isFieldError('name')) ? 'form-control is-invalid' : 'form-control'
				],

				'email' => [
					'name' => 'email',
					'placeholder' => 'Enter Your Email',
					'required' => false,
					'label' => 'Email',
					'class' => ($this->Form->isFieldError('email')) ? 'form-control is-invalid' : 'form-control'
				],
					
				'username' => [
					'name' => 'username',
					'placeholder' => 'Enter Your Username',
					 'required' => false,
					'label' => 'Username',
					'class' => ($this->Form->isFieldError('username')) ? 'form-control is-invalid' : 'form-control'
				],

				'password' => [
					'type' => 'password',
					'name' => 'password', 
					'placeholder' => 'Enter Your password', 
					'required' => false,
					'label' => 'Password',
					'class' => ($this->Form->isFieldError('password')) ? 'form-control is-invalid' : 'form-control'
				],

				'confirmpassword' => [
					'type' 	=> 'password',
					'name' => 'confirmpassword', 
					'placeholder' => 'Confirm Your password', 
					'required' => false,
					'label' => 'Confirm Password',
					'class' => ($this->Form->isFieldError('confirmpassword')) ? 'form-control is-invalid' : 'form-control'
				],
			],
			['legend' => 'Register']
		);
		echo $this->Form->submit('Register', ['class' => 'btn btn-primary']);
		echo $this->Form->end();
	?>
</div>