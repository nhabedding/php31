<!-- lớp là chung chung  ví dụ cái xe
doi tượng là cụ thể cái j đó trong xe 
=>lap trinh opp vidu là sinhvien -->
<?php 
// vidu khia báo lớp 
// class là thiết kế lên 1 đối tượng
// doi tượng từ bảng thiết kết tạo lên nhiều đối tượng cụ thể khác nhau
/**
 * 
 */
class SinhVienchung 
{
	function __construct(){
		echo "<br>khoi tao construct cha";
	}
	function diemdanh1(){
		echo "<br> diem danh sach ở trường";
	}
}
// ket thuầ7
class SinhVien extends SinhVienchung 
{
	var $hoten;
	var $gioitinh;
	var $ngaysinh;
	var $quequan;
// hành dong chính là phương thức của lớp
	function diemdanh(){
		echo "<br> diem danh ở trường";
	}
// khi khỏi tao mảng thành công thì mac din sẽ chạy
	function __construct(){
// khai báo lấy __construct của cha
		parent::__construct();
		echo "<br>khoi tao construct con";
	}

}
// khởi tạo đối tượng
$sv1=new SinhVien();
// gán giá trị
$sv1->hoten = 'ha';
$sv1->gioitinh = 'Nu';
$sv1->ngaysinh = '25';
$sv1->quequan = 'ha noi';
echo "<br>ten sinh vien".$sv1->hoten;
// kết thừa từ thằng cha
$sv1->diemdanh1();
$sv1->diemdanh();

$sv2=new SinhVien();

?>
<?php 
// giói han quyen try cap
class Person
{
private $name;
public $gioitinh;
protected $ngaysinh;
    //Khai báo phương thức run ở private thì chỉ trong class đó duoc sử dung ra ngoài thì không
// protected thì các clas con mà kết thừ thì có  thể sử dung duoc
// public thì ai cũng có thể sử dung
private function run()
{
	return 'Đây là hàm run';
}


 function setName($name1)
    {
        $this->name = $name1;
    }

    function getName()
    {
        return $this->name;
    }
}
class Male extends Person
{
    function setName($name)
    {
        //đúng vì sử dụng trong class con
        $this->name = $name;
    }

    function getName()
    {
        //đúng vì sử dụng trong class con
        return $this->name;
    }
}
//Khởi tạo class
$person = new Person();
//gọi phương thức name ở ngoài sẽ ko duoc
// $person->name;
$person->setName('Lê Thị Ngọc Hà');
//Lấy ra thuộc tính name
echo $person->getName();
?>
