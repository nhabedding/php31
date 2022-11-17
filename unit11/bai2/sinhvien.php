<?php 
class SinhVien  
{
	var $hoten;
	var $gioitinh;
	var $ngaysinh;
	var $quequan;


	
	function setGioitinh($gioitinh)
	{
		$this->gioitinh = $gioitinh;
	}

	function getGioitinh()
	{
		return $this->gioitinh;
	}
	function setNgaysinh($ngaysinh)
	{
		$this->ngaysinh = $ngaysinh;
	}
	
	function getNgaysinh()
	{
		return $this->ngaysinh;
	}
	function setQuequan($quequan)
	{
		$this->quequan = $quequan;
	}

	function getQuequan()
	{
		return $this->quequan;
	}
	function setHoten($hoten){
		$this->hoten = $hoten ;
	}
	

	function getHoten()
	{
		return $this->hoten;
	}
	
}

$person = new SinhVien();

$person->setHoten('Lê Thị Ngọc Hà');
$person->setGioitinh('<br>Nữ');
$person->setNgaysinh('<br>25/02');
$person->setQuequan('<br>Hà Nội');
echo $person->getHoten();
echo $person->getGioitinh();
echo $person->getNgaysinh();
echo $person->getQuequan();

?>