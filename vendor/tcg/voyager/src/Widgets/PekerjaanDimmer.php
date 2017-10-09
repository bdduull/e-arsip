<?php

namespace TCG\Voyager\Widgets;

use Arrilot\Widgets\AbstractWidget;
use TCG\Voyager\Facades\Voyager;
use App\Pekerjaan;

class PekerjaanDimmer extends AbstractWidget
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
        $count = Pekerjaan::count();
        $string = $count == 1 ? 'pekerjaan' : 'pekerjaans';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-group',
            'title'  => "{$count} {$string}",
            'text'   => "Kamu memiliki {$count} {$string} data. Tekan tombol dibawah ini untuk melihat semua pekerjaan.",
            'button' => [
                'text' => 'View all pekerjaan',
                'link' => route('voyager.pekerjaans.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/03.png'),
        ]));
    }
}
