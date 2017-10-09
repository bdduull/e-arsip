<?php

namespace TCG\Voyager\Widgets;

use Arrilot\Widgets\AbstractWidget;
use TCG\Voyager\Facades\Voyager;
use App\Dokumentasi;

class DokumentasiDimmer extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Dokumentasi::count();
        $string = $count == 1 ? 'dokumentasi' : 'dokumentasis';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-group',
            'title'  => "{$count} {$string}",
            'text'   => "Kamu memiliki {$count} {$string} data. Tekan tombol dibawah ini untuk melihat semua dokumentasi.",
            'button' => [
                'text' => 'View all dokumentasi',
                'link' => route('voyager.dokumentasis.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/03.png'),
        ]));
    }
}
