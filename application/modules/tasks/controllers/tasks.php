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

        //method one for accessing another module
		$this->load->module('nofun');
        $data['method1'] = $this->nofun->sayHello();
        
        //method two for accessing another module
        $data['method2'] = Modules::run('nofun/sayHello');

        $data['module']  = 'tasks';
        $data['content'] = 'tasks_view';        

		echo Modules::run('templates/admin', $data);
	}
}
