<?php
namespace App\components;
use App\Models\Menu;
class MenuRecusive {
    private $html;
    public function __contruct()
    {
        $this->html = '';
    }
    public function menuRecusiveAdd ($parentId = 0, $subMark = '') {
        $data =  Menu::where('parent_id', $parentId)->get();
        foreach($data as $dataItem) {
            $this->hmtl .= '<option value="'.$dataItem->id.'">' . $subMark . $dataItem->name . '</option>';
            $this->menuRecusiveAdd($dataItem->id, subMark: $subMark . '--');
        }
        return $this->html;
    }
}