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
				'lastname' => [
					'name' => 'lastname',
					'placeholder' => 'Enter Your Lastname',
					'required' => false,
					'label' => 'Lastname',
					'class' => ($this->Form->isFieldError('lastname')) ? 'form-control is-invalid' : 'form-control'
				],
				'firstname' => [
					'name' => 'firstname',
					'placeholder' => 'Enter Your Firstname',
					'required' => false,
					'label' => 'Firstname',
					'class' => ($this->Form->isFieldError('firstname')) ? 'form-control is-invalid' : 'form-control'
				],

				'email' => [
					'name' => 'email',
					'placeholder' => 'Enter Your Email',
					'required' => false,
					'label' => 'Email',
					'class' => ($this->Form->isFieldError('email')) ? 'form-control is-invalid' : 'form-control'
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