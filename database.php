<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "jurnal9"; //isi sesuai nama database anda

	function __construct(){
		$this->conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);//buatlah koneksi secara OOP
		
	}

	function tampil_data(){
		//lengkapilah method tampil data
		//query select user
		$data = mysqli_query($this->conn, "SELECT * FROM table_1");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	function input($nama, $alamat, $usia, $genre, $travel){
		//buatlah method input
		//query inset into user
		$genre1 = implode(', ', $genre); 
		$travel1 = implode(', ', $travel); 
		$res = mysqli_query($this->conn, "INSERT INTO table_1(nama, alamat, usia, genre, travel) VALUES('$nama', '$alamat', $usia, '$genre1', '$travel1')");
	}

	function hapus($id){
		//buatlah method hapus
		//query delete from id where id ='$id'
		$del = mysqli_query($this->conn, "DELETE FROM table_1 WHERE id = $id");

	}

	function edit($id){
		//lengkapilah method edit
		//query select from user where id ='$id'
		$data = mysqli_query($this->conn, "SELECT * FROM table_1 WHERE id = $id");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id,$nama,$alamat,$usia,$genre,$travel){
		//buatlah method update
		//query update user set blablabla where id='$id'
		$genre1 = implode(', ', $genre); 
		$travel1 = implode(', ', $travel);
		$upd = mysqli_query($this->conn, "UPDATE table_1 SET id = $id, nama = '$nama', alamat = '$alamat', usia = '$usia', genre = '$genre1', travel = '$travel1' WHERE id = $id");
	}

} 

?>