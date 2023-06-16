<?
class ItemsController extends AppController {
    var $name = 'Items';
    var $helpers = array('Html', 'Form', 'Time');
    function index() {
        $this->set('items', $this->Item->find('all'));
    }
    function add() {
        if (!empty($this->data)) {
            $this->Item->create();
            if ($this->Item->save($this->data)) {
                $this->Session->setFlash('Agenda telah disimpan');
                $this->redirect(array('action'=>'index'), null, true);
            } else {
                $this->Session->setFlash('Agenda belum disimpan. Coba lagi!.');
            }
        }  
    }
}
?>