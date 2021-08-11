<?php 
namespace App\components;

use App\Models\Category;

class Recusive {
    private $data;
    private $htmlSlelect = '';
    public function __construct ($data) {
        $this->data = $data;
    }
    function categoryRecusive ( $parentId,$id = 0, $text = '') {
        foreach ($this->data as $value) {
            if ($value['parent_id'] == $id) {
               if (!empty($parentId) && $parentId == $value['id']) {
                   $this->htmlSlelect .= "<option selected value='".$value['id']."'>".$text . $value['name']."</option>";
                } else {
                   $this->htmlSlelect .= "<option value='".$value['id']."'>".$text . $value['name']."</option>";
               }
                if (!empty($parent_id)) {
                    # code...
                }
            $this->categoryRecusive($parentId,$value['id'], $text. '--');
            }
        }
        return $this->htmlSlelect;
    }
}
