<?php

namespace App\Controllers;
use App\Models\EnquiryformModel;
use App\Models\AddreviewModel;
use App\Models\SubscribeModel;

class Home extends BaseController
{
	public function index()
	{
		return view('index');
	}

	public function enquiryform()
	{
			return view('enquiryform');
		}

 public function submitForm()
 {
	 if ( $this->request->getMethod() === 'post') {
		 $db = \Config\Database::connect();
		 $add = new EnquiryformModel();

			 $dat = [
 					'firstname'=> $this->request->getPost('firstname'),
 					'lastname'=> $this->request->getPost('lastname'),
 					'email'=> $this->request->getPost('email'),
 					'phone'=> $this->request->getPost('phone'),
 					'subject'=> $this->request->getPost('subject'),
 					'message'=> $this->request->getPost('message'),

		 ];
		 	$add ->insert($dat);
			return redirect()->to(base_url('/enquiryform'));
		}
		else {
			return redirect()->to(base_url('/enquiryform'));
		}
	}

public function review()
{
	return view('review');
}

public function addreview()
{
	if ( $this->request->getMethod() === 'post') {
		$db = \Config\Database::connect();
		$add = new AddreviewModel();

			$dat = [
				 'firstname'=> $this->request->getPost('firstname'),
				 'lastname'=> $this->request->getPost('lastname'),
				 'email'=> $this->request->getPost('email'),
				 'message'=> $this->request->getPost('message'),

		];
		 $add ->insert($dat);
		 return redirect()->to(base_url('/review'));
	 }
	 else {
		 return redirect()->to(base_url('/review'));
	 }
 }

 public function subscribe()
 {$sess = session();
 	if ( $this->request->getMethod() === 'post') {
 		$db = \Config\Database::connect();
 		$add = new SubscribeModel();

 			$dat = [

 				 'email'=> $this->request->getPost('email'),

 		];
 		 $add ->insert($dat);
		 $sess->setFlashdata('msg', 'Thank you for subscribe');
 		 return redirect()->to(base_url('/'));
 	 }
 	 else {
 		 return redirect()->to(base_url('/'));
 	 }
  }


}
