<meta charset="utf8">
<?php
	$dom = new DOMDocument();
    $dom->load("dsthuchanhbtl2021.xml");
    $row = $dom->getElementsByTagName("Row");
	$dong=0;
	foreach ($row as $r) 
	{if ($dong>0)
		{for ($i = 0; $i <=15; $i++) 
			{
				$a[$i] = $r->getElementsByTagName("Cell")->item($i)->nodeValue;
			}
			$conn = mysqli_connect("localhost","root","","quanlythuchanhweb");
			mysqli_query($conn,"SET NAMES 'UTF8'");
			$them="insert into danhsach(Manhom,Tenthanhvien,Buoithuchanh,Detai,Congviec,Tuan1,Tuan2,Tuan3,Tuan4,Tuan5,Tuan6,Tuan7,Tuan8,Tuan9,Tuan10) values('".$a[1]."','".$a[2]."','".$a[4]."','".$a[3]."','".$a[5]."','".$a[6]."','".$a[7]."','".$a[8]."','".$a[9]."','".$a[10]."','".$a[11]."','".$a[12]."','".$a[13]."','".$a[14]."','".$a[15]."')";
			$sql=mysqli_query($conn,$them) or die("Không thể thực hiện câu truy vấn");
			}
	$dong=$dong+1;
	}
	mysqli_close($conn);
?>
<script>
			alert("Đã chuyển xong dữ liệu!");
			window.history.back();
</script>