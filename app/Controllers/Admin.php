<?php namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
      $sess = session();
      if($sess->id && $sess->type == 'ADMIN')
          {
              return view('dashboard');
            }
      else
          {
            return redirect()->to(base_url('Admin/login'));
          }
    }


public function login()
 {
		$sess = session();
		$sess->destroy();
		echo view('login');
 }

public function logged()
    {
		if ($this->request->getMethod() === 'post') {
			$sess = session();
			$email=$this->request->getPost('email');
            $pass=$this->request->getPost('pass');
            echo $email;
            echo $pass;
			$db = \Config\Database::connect();
			$que=$db->query("select * from `admin`  where email='".$email."' and password='".$pass."'");
			$row = $que->getRow();
			if($row){
				$array = [
					'id' => $row->id,
					'name' => $row->name,
                    'email' => $row->email,
                    'type' => 'ADMIN'
				];
                $sess->set($array);

				return redirect()->to(base_url('Admin/index'));
			}else{

              $sess->setFlashdata('msg', 'Access Denial');
				return redirect()->to(base_url('Admin/login'));
			}

		}
	}

public function logout()
  {
		$sess = session();
		$sess->destroy();
		return redirect()->to(base_url('Admin/login'));
	}


	public function subscriber()
	{

		$sess = session();
		if($sess->id && $sess->type == 'ADMIN')
				{
						return view('subscriber');
					}
		else
				{
					return redirect()->to(base_url('Admin/login'));
				}
	}

	public function delete_form()
	{
				$sess = session();
		if($sess->id && $sess->type == 'ADMIN'){
			$db = \Config\Database::connect();
			$id=$this->request->getGet('id');
			$que=$db->query("delete from `enquiryform` where id = '".$id."'");

						return redirect()->to(base_url('Admin/index'));
				}
		else{
			return redirect()->to(base_url('Admin/login'));
		}
	}

	public function viewreview()
	{

		$sess = session();
		if($sess->id && $sess->type == 'ADMIN')
				{
						return view('viewreview');
					}
		else
				{
					return redirect()->to(base_url('Admin/login'));
				}
	}

	public function delete_review()
	{
				$sess = session();
		if($sess->id && $sess->type == 'ADMIN'){
			$db = \Config\Database::connect();
			$id=$this->request->getGet('id');
			$que=$db->query("delete from `addreview` where id = '".$id."'");

						return redirect()->to(base_url('Admin/viewreview'));
				}
		else{
			return redirect()->to(base_url('Admin/login'));
		}
	}

	public function delete_subscriber()
	{
				$sess = session();
		if($sess->id && $sess->type == 'ADMIN'){
			$db = \Config\Database::connect();
			$id=$this->request->getGet('id');
			$que=$db->query("delete from `subscribe` where id = '".$id."'");

						return redirect()->to(base_url('Admin/subscriber'));
				}
		else{
			return redirect()->to(base_url('Admin/login'));
		}
	}

	public function contactdetails()
	{

		$sess = session();
	if($sess->id && $sess->type == 'ADMIN')
			{
					return view('contactdetails');
				}
	else
			{
				return redirect()->to(base_url('Admin/login'));
			}
	}
	public function profile()
	{

		$sess = session();
	if($sess->id && $sess->type == 'ADMIN')
			{
					return view('profile');
				}
	else
			{
				return redirect()->to(base_url('Admin/login'));
			}
	}
}
