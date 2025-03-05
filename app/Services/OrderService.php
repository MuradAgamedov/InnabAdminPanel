<?php

namespace App\Services;

use App\Traits\ExecuteSafely;

class OrderService
{
    use ExecuteSafely;

    public function up($model, $id) {
        $item = $model::find($id); 
        $previousItem = $model::where('order', '<', $item->order)->orderBy('order', 'desc')->first();

        if ($previousItem) {
            $currentOrder = $item->order;
            $item->order = $previousItem->order;
            $previousItem->order = $currentOrder;

            $item->save();
            $previousItem->save();
        }

        
    }
    public function down($model, $id) {
        $item = $model::find($id);
       
        $nextItem = $model::where('order', '>', $item->order)->orderBy('order')->first();

        if ($nextItem) {
            $currentOrder = $item->order;
            $item->order = $nextItem->order;
            $nextItem->order = $currentOrder;

            $item->save();
            $nextItem->save();
        }
    }
}
