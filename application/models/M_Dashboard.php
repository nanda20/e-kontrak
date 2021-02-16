<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Dashboard extends CI_Model {

	function getQuery(){
		return $this->db->query('Select (select count(*) from kontrak) as kontrakAll,(select count(*) from amendkontrak) as amenKontrakAll,(select count(*) from kontrak where validasi=3) as kontrakTerVerfikasiKadis,(select count(*) from amendkontrak where validasi=3) as amendKontrakTerVerfikasiKadis,(select count(*) from kontrak where validasi>=2) as KontrakTerVerfikasiOfficer,(select count(*) from amendkontrak where validasi >=2) as amendKontrakTerVerfikasiOfficer')->result();
	}
	function getQueryVendor(){
	    $kv= $this->session->kodevendor;
	    return $this->db->query('select (select count(*) from kontrak where kodeVendor='.$kv.') as totalKontrak,(select count(*) from kontrak where validasi=3 and kodeVendor='.$kv.') as totalKontrakTervalidasi,(select count(*) from amendkontrak am join kontrak k on k.idKontrak=am.idKontrak where k.kodeVendor='.$kv.') as totalAmendKontrak,(select count(*) from amendkontrak am join kontrak k on k.idKontrak=am.idKontrak where am.validasi=3 and kodeVendor='.$kv.') as totalAmendKontrakTervalidasi' )->result();
	    
	}
	

}