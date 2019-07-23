<?php 
defined('BASEPATH') OR exit ('No script direct access allowed');

	class m_Validation extends CI_Model{

		public function val_login()
		{
			return [
				[
					'field'	=> 'username',
					'label'	=> 'Username',
					'rules'	=> 'required|rtrim',
					'errors'=> ['required'=>'The username field is required !'],
				],
				[
					'field'	=> 'password',
					'label'	=> 'Password',
					'rules'	=> 'required|rtrim',
					'errors'=> ['required'=>'The Password field is required !']
				]
			];
		}

		public function val_guide()
		{
			return [
				[
					'field'	=> 'nik',
					'label'	=> 'NIK',
					'rules'	=> 'required|is_unique[tb_guide.nik]|min_length[16]|max_length[16]|rtrim',
					'errors'=> [	
									'required'		=> 'Form <b>%s</b> tidak boleh kosong.',
									'is_unique' 	=> 'This NIK address is already being used',
							   ]
				],
				[
					'field'	=> 'email',
					'label'	=> 'Email',
					'rules'	=> 'required|valid_email|is_unique[tb_guide.email]|rtrim',
					'errors'=> [
									'required' 		=> 'Form <b>%s</b> tidak boleh kosong.',
									'valid_email'	=> 'Email not valid !',
									'is_unique'		=> 'This email address is already being used'
								]
				],
				[
					'field'	=> 'name',
					'label'	=> 'Name',
					'rules'	=> 'required|rtrim',
					'errors'=> ['required'=>'Name is required']
				],
				[
					'field'	=> 'hp',
					'label'	=> 'No HP',
					'rules'	=> 'required|rtrim',
					'errors'=> ['required'=>'No HP is required']
				],
				[
					'field'	=> 'age',
					'label'	=> 'Age',
					'rules'	=> 'required|rtrim',
					'errors'=> ['required'=>'Age is required']
				],
			];
		}

		public function val_editGuide()
		{
			return [
				[
					'field'	=> 'name',
					'label'	=> 'Name',
					'rules'	=> 'required|rtrim',
					'errors'=> ['required'=>'Name is required']
				],
				[
					'field'	=> 'hp',
					'label'	=> 'No HP',
					'rules'	=> 'required|rtrim',
					'errors'=> ['required'=>'No HP is required']
				],
				[
					'field'	=> 'age',
					'label'	=> 'Age',
					'rules'	=> 'required|rtrim',
					'errors'=> ['required'=>'Age is required']
				],
			];
		}




		public function val_destination()
		{
			return [
				[
					'field'	=> 'destination',
					'label'	=> 'Destination',
					'rules'	=> 'required|rtrim',
					'errors'=> ['required' 	=> 'Destination is required.']
				],
				[
					'field'	=> 'price',
					'label'	=> 'Price',
					'rules'	=> 'required|rtrim',
					'errors'=> ['required'=>'Price is required.']
				],
				[
					'field'	=> 'description',
					'label'	=> 'description',
					'rules'	=> 'required|rtrim',
					'errors'=> ['required'=>'Description is required.']
				]
			];
		}


		public function val_editProfile()
		{
			return [
				[
					'field'	=> 'nama',
					'label'	=> 'Nama',
					'rules'	=> 'required|rtrim',
					'errors'=> ['required'=>'Form <b>%s</b> tidak boleh kosong.']
				],
				[
					'field'	=> 'tgl',
					'label'	=> 'Tanggal Lahir',
					'rules'	=> 'required|rtrim',
					'errors'=> ['required'=>'Form <b>%s</b> tidak boleh kosong.']
				],
				[
					'field'	=> 'tempat',
					'label'	=> 'Tempat Lahir',
					'rules'	=> 'required|rtrim',
					'errors'=> ['required'=>'Form <b>%s</b> tidak boleh kosong.']
				],
				[
					'field'	=> 'alamat',
					'label'	=> 'Alamat',
					'rules'	=> 'required|rtrim',
					'errors'=> ['required'=>'Form <b>%s</b> tidak boleh kosong.']
				],
				[
					'field'	=> 'hp',
					'label'	=> 'No HP',
					'rules'	=> 'required|rtrim',
					'errors'=> ['required'=>'Form <b>%s</b> tidak boleh kosong.']
				],
				[
					'field'	=> 'komisariat',
					'label'	=> 'Komisariat',
					'rules'	=> 'required|rtrim',
					'errors'=> ['required'=>'Form <b>%s</b> tidak boleh kosong.']
				],
			];
		}


		public function val_password()
		{
			return [
				[
					'field'	=> 'oldPass',
					'label'	=> 'Password Lama',
					'rules'	=> 'required|rtrim',
					'errors'=> ['required' 	=> 'Form <b>%s</b> tidak boleh kosong']
				],
				[
					'field'	=> 'newPass',
					'label'	=> 'Password Baru',
					'rules'	=> 'required|rtrim|min_length[8]|matches[konfirmasi]',
					'errors'=> [
									'required'		=> 'Form <b>%s</b> tidak boleh kosong.',
									'min_length'	=> 'Minimal panjang <b>%s</b> 8 karakter',
									'matches'		=> 'Password Baru dan Konfirmasi Password tidak cocok'
							   ]
				],
				[
					'field'	=> 'konfirmasi',
					'label'	=> 'Konfirmasi Password Baru',
					'rules'	=> 'required|rtrim',
					'errors'=> [
									'required'		=> 'Form <b>%s</b> tidak boleh kosong.',
							   ]
				]
			];
		}

		




	}
?>