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

		include "View/showbook.php";
	}


	function showInsert(){

		$dataCategory 	= $this->category->getllAllCategory();
		$dataPublisher 	= $this->publisher->getAllPublisher();

		include "View/insertbook.php";
	}

	function showUpdate_view()
	{
		if (isset($_GET['id'])){
			$book_id = $_GET['id'];
			$getBookById  	= $this->book->getBookById($book_id);
			include "View/updatebook.php";
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
		if (isset($_POST['insertBook'])){
			// lay du lieu tu post form
			$book_id 		= $_POST['id'];
			$book_name 		= $_POST['book_name'];
			$description 	= $_POST['description'];
			$price 			= $_POST['price'];
			$pub_id			= $_POST['pub_id'];
			$cat_id			= $_POST['cat_id'];
		
			
			// xu ly du lieu anh, va update
		   $i=0;      
            foreach(array($_FILES['file']['name']) as $i => $name){
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
                       $this->book->insertBook($book_id,$book_name,$description,$price,$hinhanhsp,$pub_id,$cat_id);

       				  // print_r($book_id);
             //          print_r($book_name);
             //          print_r($description);
             //          print_r($price);
             //          print_r($hinhanhsp);

                       // hien thi views
                      	/*index();*/
                      	header('location:../MVC2/index.php?controller=Home&action=index');
                    }
                 }
            }
		}else{
			echo "khong them  duoc";
		}
		
	}

	

	function updateBook()
	{
		if (isset($_POST['updateBook'])){
			// lay du lieu tu post form
			$book_id 		= $_POST['id'];
			$book_name 		= $_POST['book_name'];
			$description 	= $_POST['description'];
			$price 			= $_POST['price'];
			$hinhanh		= $_POST['hinhanh'];
			if($_FILES['file']['error'] != 0){
				$this->book->updateBook($book_id,$book_name,$description,$price,$hinhanh);
             	header('location:../MVC2/index.php?controller=Home&action=index');
				// xu ly du lieu anh, va update
			$i=0;      
            foreach(array($_FILES['file']['name']) as $i => $name){
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

       				  // print_r($book_id);
             //          print_r($book_name);
             //          print_r($description);
             //          print_r($price);
             //          print_r($hinhanhsp);

                       // hien thi views
                      	/*index();*/
                      	header('location:../MVC2/index.php?controller=Home&action=index');
                    }
                 }
            }
            }else{
             
            }
		}else{
			echo "khong update duoc";
		}
	}

	function deleteBook()
	{
		if (isset($_GET['id'])){
			$book_id = $_GET['id'];
			/*print_r($book_id);*/
			 $this->book->deleteBook($book_id);
			/*index();*/
			header('location:../MVC2/index.php?controller=Home&action=index');

		}else{
			echo "khong hien thi chi tiet duoc";
		}

		
	}

}