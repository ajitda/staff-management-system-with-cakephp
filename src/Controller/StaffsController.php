<?php


namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;

class StaffsController extends AppController
{
	public function initialize()
	{
		parent::initialize();
		$this->loadModel('Staffs');
	}

	public function index()
	{
		$this->set('staffs', $this->Staffs->find('all'));
	}

	public function add()
	{
		//$post = $this->Posts->newEntity();
		$staff = '';
		if($this->request->is('post')){
			//$post = $this->Posts->patchEntity($post, $this->request->getData());
			if(!empty($this->request->data['file']['name'])){
				$filename = $this->request->data['file']['name'];
				$url = Router::url('/', true).'img/'.$filename;
				$current_file = 'img/'.$filename;
				//print_r($url);
				//exit();
				$tmp_file = $this->request->data['file']['tmp_name'];
				
				if(move_uploaded_file($tmp_file, $current_file)){
					$staff = $this->Staffs->newEntity();
					$staff->first_name = $this->request->data['first_name'];
					$staff->last_name = $this->request->data['last_name'];
					$staff->email = $this->request->data['email'];
					$staff->gender = $this->request->data['gender'];
					$staff->salary_range = $this->request->data['salary_range'];

					$staff->description = $this->request->data['description'];
					$staff->phone = $this->request->data['phone'];

					$staff->image = $url;
					$skills = implode(',', $this->request->data['skills']);
					$staff->skills = $skills;

					$staff->created= date("Y-m-d H:i:s");
					$staff->modified= date("Y-m-d H:i:s");
					if($this->Staffs->save($staff)){
						$this->Flash->success(__('Staff Added Successfully'));
						return $this->redirect(['action'=>'index']);
					}else{
						$this->Flash->error(__('Unable to add your Staff!'));
					}
				}
			}
		}
		$this->set('staff', $staff);
	}

	public function view($id = Null)
	{
		$staff = $this->Staffs->get($id);
		$this->set('staff', $staff);
	}

	public function edit($id = Null)
	{
		$staff = $this->Staffs->get($id);
		if($this->request->is(['post', 'put'])){
				if(!empty($this->request->data['file']['name'])){
					$filename = $this->request->data['file']['name'];
					$url = Router::url('/', true).'img/'.$filename;
					$current_file = 'img/'.$filename;
					//print_r($url);
					//exit();
					$tmp_file = $this->request->data['file']['tmp_name'];
					move_uploaded_file($tmp_file, $current_file);
					$staff->image = $url;
					}
				
					//$staff = $this->Staffs->newEntity();
					$staff->first_name = $this->request->data['first_name'];
					$staff->last_name = $this->request->data['last_name'];
					$staff->email = $this->request->data['email'];
					$staff->gender = $this->request->data['gender'];
					$staff->salary_range = $this->request->data['salary_range'];

					$staff->description = $this->request->data['description'];
					$staff->phone = $this->request->data['phone'];

					
					$skills = implode(',', $this->request->data['skills']);
					$staff->skills = $skills;

					$staff->created= date("Y-m-d H:i:s");
					$staff->modified= date("Y-m-d H:i:s");
					if($this->Staffs->save($staff)){
						$this->Flash->success(__('Staff Updated Successfully'));
						return $this->redirect(['action'=>'index']);
					}else{
						$this->Flash->error(__('Unable to Update your staff!'));
					}
				
			}
		$this->set('staff', $staff);
	}

	public function delete($id = Null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$staff = $this->Staffs->get($id);
		if($this->Staffs->delete($staff)){
			$this->Flash->success(__('Staff Deleted Successfully'));
			return $this->redirect(['action'=> 'index']);
		}
	}

}