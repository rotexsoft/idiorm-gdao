<?php

/**
 * Description of MockModelCollectionForTestingPublicAndProtectedMethods
 *
 * @author aadegbam
 */
class MockModelCollectionForTestingPublicAndProtectedMethods extends \LeanOrm\Model\Collection
{
    public function __construct(\GDAO\Model\GDAORecordsList $data, $extra_opts = []) {
        
        parent::__construct($data, $extra_opts);
    }
}