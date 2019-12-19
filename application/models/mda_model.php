<?php


class Mda_model extends CI_Model
{

function __construct()
	{
	// Call the Model constructor
	parent::__construct();
    }

function vsantri()
	{
	$kueri="select * from siswa order by nama ASC";
	$data=$this->db->query($kueri);
	return $data;
	//$data=$this->db->get('cabbg');
	//return $data;
	}

function jsantri()
	{
	$kueri="select count(nim) as jsiswa from siswa";
	$data=$this->db->query($kueri);
	return $data;
	//$data=$this->db->get('cabbg');
	//return $data;
	}

function getsantri($id=NULL)
	{
		//$this->db->from('cabbg');
		//$this->db->where('idcabbg',$id);
		//$query = $this->db->get(); 
		//return $query->row();
		//return $query->result_array();
	$kueriid="select * from siswa";
	$golida=$this->db->query($kueriid);
	$result=$golida->result_array();
	return $result;
	}

function vasrama()
	{
	$kueri="select * from asrama ORDER BY nama_asrama ASC";
	$data=$this->db->query($kueri);
	return $data;
	//$data=$this->db->get('cabbg');
	//return $data;
	}

function inputasrama($data, $table)
	{
	$this->db->insert($table,$data);
	}

function getasrama($id=NULL)
	{
		//$this->db->from('cabbg');
		//$this->db->where('idcabbg',$id);
		//$query = $this->db->get(); 
		//return $query->row();
		//return $query->result_array();
	$kueriid="select * from asrama where id_asrama='$id'";
	$golida=$this->db->query($kueriid);
	$result=$golida->result_array();
	return $result;
	}

function update($where,$data,$table)
	{
	$this->db->where($where);
	$this->db->update($table,$data);
	}

function hapus($where,$data,$table)

	{
	$this->db->where($where);
	$this->db->delete($table,$data);
	}

function vpktkat()
	{
	$kueri="select * from paket_kategori ORDER BY nama_pktkat ASC";
	$data=$this->db->query($kueri);
	return $data;
	//$data=$this->db->get('cabbg');
	//return $data;
	}

function getpktkat($id=NULL)
	{
	$kueriid="select * from paket_kategori where id_pktkat='$id'";
	$golida=$this->db->query($kueriid);
	$result=$golida->result_array();
	return $result;
	}

function vpktmsk()
	{
	$kueri="select * from 
	paket a left join santri b on a.penerima=b.nis
	left join asrama c on b.id_asrama=c.id_asrama	
	where a.jns_paket='masuk'
	ORDER BY a.tgl_terima DESC";
	$data=$this->db->query($kueri);
	return $data;
	//$data=$this->db->get('cabbg');
	//return $data;
	}

function vpktmskb()
	{
	$kueri="select * from 
	paket a left join santri b on a.penerima=b.nis
	left join asrama c on b.id_asrama=c.id_asrama
	left join paket_kategori d on a.kategori_paket=d.id_pktkat
	where a.jns_paket='masuk'
	ORDER BY a.tgl_terima DESC";
	$data=$this->db->query($kueri);
	return $data;
	//$data=$this->db->get('cabbg');
	//return $data;
	}


function vpktklr()
	{
	$kueri="select * from 
	paket a left join santri b on a.penerima=b.nis
	left join asrama c on b.id_asrama=c.id_asrama	
	where a.jns_paket='keluar'
	ORDER BY a.tgl_terima DESC";
	$data=$this->db->query($kueri);
	return $data;
	//$data=$this->db->get('cabbg');
	//return $data;
	}

function vpktklrb()
	{
	$kueri="select * from 
	paket a left join santri b on a.penerima=b.nis
	left join asrama c on b.id_asrama=c.id_asrama	
	left join paket_kategori d on a.kategori_paket=d.id_pktkat
	where a.jns_paket='keluar'
	ORDER BY a.tgl_terima DESC";
	$data=$this->db->query($kueri);
	return $data;
	//$data=$this->db->get('cabbg');
	//return $data;
	}



function getcount($nis=NULL)
	{
		
	$kueriid="select total_paket from santri where santri.nis='$nis'";
	$golida=$this->db->query($kueriid);
	$result=$golida->result_array();
	return $result;
	}

function getpkt($rowid=NULL)
	{
	$kueri="select * from paket where id_paket='$rowid'";
	$data=$this->db->query($kueri);
	return $data;
	//$data=$this->db->get('cabbg');
	//return $data;
	}



function insert_guest($data)
	{
	$data['alamat'] = $this->db->escape_str($data['alamat']);
	$arr= array('name'=> $data['name'],
                'alamat'=> $data['alamat']);
	$this->db->insert('coba', $arr);
	
	}

function viewcoba()
	{
	$gdl=$this->db->get('coba');
	return $gdl;
	}


function viewGuest()
	{
	/*$this->db->select('*');
	$this->db->from('coba');
	$this->db->limit('2');
	$this->db->order_by('id', 'DESC');
	*/

	//$query=$this->db->get();
	$kueri="select *from coba ORDER BY id DESC";
	$query=$this->db->query($kueri);
	$config['base_url']=base_url().'index.php/Guest/view/';
	$config['total_rows']=$query->num_rows();
	$config['per_page']='2';
	$num=$config['per_page'];
	$offset=$this->uri->segment(3);
	$offset=( ! is_numeric($offset) || $offset < 1 )? 0 : $offset;
	if(empty($offset))
		{
		$offset=0;
		}
	$this->pagination->initialize($config);
	$data['query']=$this->db->query($kueri." limit $offset,$num");
	$data['base']=$this->config->item('base_url');
	return $data;

	/*if($query->num_rows()>0)
		{
		$result=$query->result_array();
		return $result;
        }
	else
		return false;*/
	}
	

function cobamodel($perPage,$uri)
	{
	$this->db->select('*');
	$this->db->from('coba');
	$this->db->order_by('id','DESC');
	$getData = $this->db->get('', $perPage, $uri);
	if($getData->num_rows() > 0)
	return $getData->result_array();
	else
	return null;
	}


function getGuest($id=NULL)
	{
	$this->db->select('*');
	$this->db->from('coba');

	if (! empty($id))
		{
		$this->db->where('id',$id);
        }

	$query=$this->db->get();

	if($query->num_rows()>0)
        {
		$result=$query->result_array();
		return $result;
        }
        else
            return false;
	}


function updateGuest($data)
	{
	$arr= array('id'=>$data['id'],
                    'name'=>$data['name'],
                    'alamat'=>$data['alamat']);

	$this->db->update('coba', $arr, array('id' => $data['id']));
	}

function delete_guest($id)
	{
	$this->db->delete('coba', array('id' => $id));
	}


function prologin($user='', $pass='')
	{
	//$this->db->select('*');
	//$this->db->from('user');
	$this->db->where(array ('user'=>$user, 'pass'=>$pass));

	$log=$this->db->get('user');
	if($log->num_rows()==1)
		{return TRUE;}
	else
		{return FALSE;}
	}
//


function librar()
	{
	
	}


function masterkl()
	{
	$kueri="select *from kl ORDER BY codeuker ASC";
	$data=$this->db->query($kueri);
	return $data;
	//$data=$this->db->get('cabbg');
	//return $data;
	}

function masterkl_()
	{
	$kueri="select * from kl ORDER BY namakl ASC";
	$data=$this->db->query($kueri);
	return $data;
	//$data=$this->db->get('cabbg');
	//return $data;
	}

function inputkl($data, $table)
	{
	$this->db->insert('kl',$data);
	}

function getidkl($id=NULL)
	{
		//$this->db->from('cabbg');
		//$this->db->where('idcabbg',$id);
		//$query = $this->db->get(); 
		//return $query->row();
		//return $query->result_array();
	$kueriid="select * from kl where idkl='$id'";
	$golida=$this->db->query($kueriid);
	$result=$golida->result_array();
	return $result;
	}

function updatekl($where,$data,$table)
	{
	$this->db->where($where);
	$this->db->update($table,$data);
	}

function hpskl($where,$data,$table)
	{
	$this->db->where($where);
	$this->db->delete($table,$data);
	}


function viewuserkl()
	{
	$kueri="select user.namauser, user.iduser, user.username, user.jabatan, user.ketuser, kl.idkl, kl.namakl, kl.codeuker from user left join kl on user.ketuser=kl.idkl ORDER BY kl.namakl ASC";
	//$kueri="select * from kl";
	$dtuser=$this->db->query($kueri);
	return $dtuser;
	
	}

function inputuserkl($data, $table)
	{
	$this->db->insert('user',$data);
	}

function userklid($id=NULL)
	{
	$kueriid="select * from user where iduser='$id'";
	$golida=$this->db->query($kueriid);
	$result=$golida->result_array();
	return $result;
	}

function viewgol()
	{
	$kueri="select * from golongan order by idgol DESC";
	$dtgol=$this->db->query($kueri);
	return $dtgol;
	}

function viewgolinduk($idnya)
	{
	$kuerix="select idgol, namagol, kodegol from golongan where idgol='$idnya'";
	$a1=$this->db->query($kuerix);
	return $a1;
	}

function golinduk()
	{
	$kueri="select * from golongan where subgol='0' order by idgol DESC";
	$golin=$this->db->query($kueri);
	return $golin;
	}

function golongan()
	{
	$kueri="select * from golongan where subgol !='0' order by namagol ASC";
	$golin=$this->db->query($kueri);
	return $golin;
	}

function inputgol($data, $table)
	{
	$this->db->insert('golongan',$data);
	}

function updategol($where,$data,$table)
	{
	$this->db->where($where);
	$this->db->update($table,$data);
	}

function golid($id=NULL)
	{
	$kueriid="select * from golongan where idgol='$id'";
	$golid=$this->db->query($kueriid);
	$result=$golid->result_array();
	return $result;
	}


function viewjns()
	{
	$kueri="select jenis.idjenis, jenis.idgol, jenis.nmjenis, jenis.kodejenis, jenis.ketjenis, thnsusut, persensusut, golongan.idgol, golongan.namagol from jenis, golongan where jenis.idgol=golongan.idgol order by jenis.idjenis DESC";
	$dtjns=$this->db->query($kueri);
	return $dtjns;
	}

function inputjns($data, $table)
	{
	$this->db->insert('jenis',$data);
	}


function jnsid($id=NULL)
	{
	$kueriid="select jenis.idjenis, jenis.idgol, jenis.nmjenis, jenis.kodejenis, jenis.ketjenis, jenis.thnsusut, jenis.persensusut, golongan.idgol, golongan.namagol from jenis, golongan where jenis.idgol=golongan.idgol and jenis.idjenis='$id'";
	$jnsid=$this->db->query($kueriid);
	$result=$jnsid->result_array();
	return $result;
	}





function monpagi()
	{
	$a1="select
	
	";
	$a=$this->db->query($a1);
	$result=$a->result_array();
	return $result;
	}



}





?>