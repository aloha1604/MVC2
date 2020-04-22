<?php
/**
 * Class Home
 * index.php?controller=Home&action=index
 */
class Home
{
	public $book;
	public $category;
	public $publisher;
	function __construct()
	{
		$this->book = new Model_Book();
		$this->category = new Model_Category();
		$this->publisher = new Model_Publisher();
		$action = getIndex('action', 'index');
		
		//print_r($_GET);
		if (method_exists($this,$action))
			$this->$action();
		else {echo "Chưa xây dựng method  $action "; exit;}
		
	}

	function index()
	{
		$dataCategory = $this->category->getllAllCategory();
		$dataPublisher = $this->publisher->getAllPublisher();
		$dataBook = $this->book->getBook();


		echo "<pre>";	print_r($dataBook);
		echo "<pre>";	print_r($dataCategory);
		echo "<pre>";	print_r($dataPublisher);

		include "View/showbook.php";
	}

	function showUpdate_view()
	{
		if (isset($_GET['id'])){
			$book_id = $_GET['id'];
			$dataCategory 	= $this->category->getllAllCategory();
			$dataPublisher 	= $this->publisher->getAllPublisher();
			$getBookById  	= $this->book->getBookById($book_id);
			echo "<pre>";	print_r($getBookById);
			echo "<pre>";	print_r($dataCategory);
			echo "<pre>";	print_r($dataPublisher);
		}else{
			echo "khong update duoc";
		}
	}

	function showDetailBook()
	{
		if (isset($_GET['id'])){
			$book_id = $_GET['id'];
			print_r($book_id);
			$getBookById  	= $this->book->getBookById($book_id);
			echo "<pre>";	print_r($getBookById);
		}else{
			echo "khong hien thi chi tiet duoc";
		}
		
	}

	
	function insertBook()
	{
		// sữa book
		// lay thong tin tu form post len
		  if (isset($_POST['themhinh'])) {
                $idchitiet = $_POST['idchitiet'];
                $idsp = $_POST['idsp'];

                  $i=0;      
                foreach($_FILES['file']['name'] as $i => $name){
                    $name= $_FILES['file']['name'][$i];
                    $type= $_FILES['file']['type'][$i];
                    $size= $_FILES['file']['size'][$i];
                    $tmp= $_FILES['file']['tmp_name'][$i];
                    
                    //tách đuôi
                    $explode= explode('.',$name);
                    $ex= end($explode);
                    $path='./assets/images';
                    
                    $path=$path . basename($explode[0].time().'.'.$ex);
                    $hinhanhsp= basename($explode[0].time().'.'.$ex);
                    $thongbao=array();
                            
                    if(empty($tmp)){
                        echo $thongbao[]='Hay chon 1 file!';
                    }else{
                        $chophep=array('jpg','img','gif');
                        $max_size=400000000;
                        if(in_array($ex,$chophep) === false){
                            echo $thongbao[]='File nhu ...';
                        }else if($size > $max_size){
                            echo $thongbao[]='File to vay a....';
                        }
                    }if(empty($thongbao)){
                        if(!file_exists('./assets/images')){
                            mkdir('./assets/images',0777);
                        }
                        if(move_uploaded_file($tmp,$path)){
                        	//thu hien du lieu
                           $this->hinhAnh->insert_HinhAnh($idchitiet,$hinhanhsp);
                          	// call view
                                                   }
                     }
                }
                  // Call Views
            	include "View/showbook.php";  
            }
	}

	

	function updateBook($id)
	{
		if (isset($_POST['updateBook'])){
			// lay du lieu tu post form
			$book_id 		= $_POST['id'];
			$book_name 		= $_POST['book_name'];
			$description 	= $_POST['description'];
			$price 			= $_POST['price'];
		
			
			// xu ly du lieu anh, va update
		   $i=0;      
            foreach($_FILES['file']['name'] as $i => $name){
                $name= $_FILES['file']['name'][$i];
                $type= $_FILES['file']['type'][$i];
                $size= $_FILES['file']['size'][$i];
                $tmp= $_FILES['file']['tmp_name'][$i];
                
                //tách đuôi
                $explode= explode('.',$name);
                $ex= end($explode);
                $path='./assets/images';
                
                $path=$path . basename($explode[0].time().'.'.$ex);
                $hinhanhsp= basename($explode[0].time().'.'.$ex);
                $thongbao=array();
                        
                if(empty($tmp)){
                    echo $thongbao[]='Hay chon 1 file!';
                }else{
                    $chophep=array('jpg','img','gif');
                    $max_size=400000000;
                    if(in_array($ex,$chophep) === false){
                        echo $thongbao[]='File nhu ...';
                    }else if($size > $max_size){
                        echo $thongbao[]='File to vay a....';
                    }
                }if(empty($thongbao)){
                    if(!file_exists('./assets/images')){
                        mkdir('./assets/images',0777);
                    }
                    if(move_uploaded_file($tmp,$path)){
                    	//truy van du dieu
                       $this->book->updateBook($book_id,$book_name,$description,$price,$hinhanhsp);

                       // hien thi views
                      	index();

                    }
                 }
            }
		}else{
			echo "khong update duoc";
		}
	}

	function deleteBook()
	{
		if (isset($_GET['id'])){
			$book_id = $_GET['id'];
			print_r($book_id);
			$getBookById  	= $this->book->deleteBook($book_id);
			index();
		}else{
			echo "khong hien thi chi tiet duoc";
		}
		
	}


	// function searchBook()
	// {
	// 	$data = $this->model->searchBook(getIndex('book_name'));
	// 	include "View/home_showBook.php";
	// }


}