<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tasks extends MX_Controller {


	public function index()
	{
		$this->taskList();
	}


	public function taskList()
	{
        $data['title'] = 'Task Manager';
        
		$this->load->model('tasks_model');
		$data['lists'] = $this->tasks_model->getTasks('priority');

		$this->load->module('nofun');
        $data['method1'] = $this->nofun->sayHello();

        $data['method2'] = Modules::run('nofun/sayHello');



		$this->load->view('tasks_view', $data);
	}
}
