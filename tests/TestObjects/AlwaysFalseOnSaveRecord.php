<?php
/**
 * Description of AlwaysFalseOnSaveRecord
 *
 * @author rotimi
 */
class AlwaysFalseOnSaveRecord extends \LeanOrm\Model\Record {

    public function save($data_2_save = null): ?bool {
        return false;
    }
    
    public function saveInTransaction($data_2_save = null): ?bool {
        return false;
    }
}
