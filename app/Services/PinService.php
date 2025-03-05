<?php

namespace App\Services;

use App\Traits\ExecuteSafely;

class PinService
{
    public function __construct(public ImageService $imageService, public FileService  $fileService)
    {
    }
    public function pin($item)
    {
        if ($item) {
            $item->update(['pinned' => true]);
            return redirect()->back()->with(['message' => 'Uğurla pinləndi.']);
        } else {
            return redirect()->back()->with(['message' => 'Tapılmadı!'], 404);
        }
    }

    public function unpin($item)
    {
        if ($item) {
            $item->update(['pinned' => false]);
            return redirect()->back()->with(['message' => 'Uğurla pindən çıxarıldı.']);
        } else {
            return redirect()->back()->with(['message' => 'Tapılmadı!'], 404);
        }
    }
}
