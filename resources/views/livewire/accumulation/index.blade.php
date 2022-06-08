<div class="p-6 sm:px-10 bg-white border-b border-gray-200">
    <ul class="flex flex-col sm:flex-row sm:space-x-8 sm:items-center">
       @foreach ($products as $products)
           <li>
               <input type="checkbox" value="{{$products->id}}" wire:model="types/">
               <span> {{$products->name}} </span>
           </li>
        @endforeach
    </ul>
    <br>
    <br>
   <div class= "card-body">
       <div class = "row">
           <div class = "col" style="height: 300px !important;">
              <livewire:livewire-column-chart :column-chart-model="$chartModel"/>
        </div>
        <br>
        <br>
        <div class = "col" style="height: 300px !important;">
              <livewire:livewire-pie-chart :pie-chart-model="$piechartModel"/>
        </div>
    </div>
</div>

