<?
class Pasien extends AppModel {
    var $name = 'Pasien';
    var $validate = array(
        'nama' => array(
            'rule' => VALID_NOT_EMPTY,
            'message' => 'Nama item tidak boleh kosong.')
        );
}
?>