<?php 

class Pages extends Controller {
	public function __construct(){
		// $this->postModel = $this->model('Post');
	}

	

	public function index(){

		// $posts = $this->postModel->getPosts();
		if(isLoggedIn()){
			redirect('posts');
		}

		$data = [
			'title' => 'SharePosts',
			'description' => 'Simple social network built on the myefficyMVC PHP framework'
		];


		$this->view('pages/index', $data);
	}

	public function about(){
		$data = [
			'title' => 'About Us',
			'description' => 'App to share posts with other users'	
		];

		$this->view('pages/about', $data);
	}
}

