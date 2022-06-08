<?php

namespace App\Http\Livewire\Accumulation;

use App\Models\Product;
use App\Models\TransactionItem;
use Livewire\Component;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;

class Index extends Component
{

    public $firstRun = true;

    public function render()
    {

        $chartModel = (new ColumnChartModel())
                             ->setTitle('Akumulasi Penjualan')
                             ->addColumn('Kopi Arabica', 100, '#f6ad55')
                             ->addColumn('Kopi Robusta', 200, '#DEB887')
                             ->addColumn('Kopi Liberika', 250, '#FF7F50')
                             ->addColumn('Kopi Tubruk', 170, '#556B2F')
                             ->addColumn('Kopi Latte', 350, '#FF8C00')
                             ->addColumn('Kopi Luwak', 300, '#90cdf4');
        $piechartModel = (new PieChartModel())
                             ->setTitle('Akumulasi Keuntungan')
                             ->addSlice('Kopi Arabica', 100, '#f6ad55')
                             ->addSlice('Kopi Robusta', 200, '#DEB887')
                             ->addSlice('Kopi Liberika', 250, '#FF7F50')
                             ->addSlice('Kopi Tubruk', 170, '#556B2F')
                             ->addSlice('Kopi Latte', 350, '#FF8C00')
                             ->addSlice('Kopi Luwak', 300, '#90cdf4');

        $products     =    Product::orderBy('name', 'asc')->get();
        return view('livewire.accumulation.index', compact('chartModel', 'piechartModel', 'products'));

    }
}
