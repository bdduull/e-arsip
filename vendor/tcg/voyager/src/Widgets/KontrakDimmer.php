<?php

namespace TCG\Voyager\Widgets;

use Arrilot\Widgets\AbstractWidget;
use TCG\Voyager\Facades\Voyager;
use App\Kontrak;

class KontrakDimmer extends AbstractWidget
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
        $count = Kontrak::count();
        $string = $count == 1 ? 'kontrak' : 'kontraks';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-group',
            'title'  => "{$count} {$string}",
            'text'   => "Kamu memiliki {$count} {$string} data. Tekan tombol dibawah ini untuk melihat semua kontrak.",
            'button' => [
                'text' => 'View all kontrak',
                'link' => route('voyager.kontraks.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/03.png'),
        ]));
    }
}
