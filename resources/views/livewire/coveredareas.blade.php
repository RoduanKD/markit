<div >
    <div class="form-group">
        <label for="countryId" class="form-label">Country</label>
        <select wire:model="countryId" class="form-control" wire:change="$emit('updatedCountryId')" name="" id="">
            <option value="">Select Country</option>
            @foreach ($countries as $country)
                <option value="{{ $country->id }}"

                    @if ($country->id==$countryId)
                        selected
                @endif>{{ $country->name }}</option>
            @endforeach
        </select>

    </div>
    <div class="form-group"></div>

    <label for="cityId" class="form-label"> City</label>
    <select wire:model="cityId" class="form-control" wire:change="$emit('updatedCityId')" name="city" id="">
        <option value="">Select city</option>
        @foreach ($cities as $city)
            <option value="{{ $city->id }}"

                @if ($city->id==$cityId)
                selected
        @endif>{{ $city->name }}</option>
        @endforeach
    </select>
</div>

<div class="table-responsive " wire:model="areas" >


    test
    @if($areas)
    {{-- {{ dd($areas) }} --}}
    @foreach ($areas as $area)
    @livewire('view-area', ['area' => $area], key('area-'.$area->id))

    <!-- key() using Laravel 7's tag syntax -->
    {{-- <livewire:view-item :item="$area" :wire:key="'item-'.$area->id"> --}}
    @endforeach
    @endif


<table class="table table-vcenter table-nowrap">
<thead class="thead-dark">
  <tr>
    <th scope="col">#</th>
    <th scope="col">name</th>
    <th scope="col">Country</th>
    <th scope="col">City</th>
    </tr>
</thead>
<tbody>
    @if($areas)
    @foreach ($areas as $area)


    <tr>
        <td wire:key="item-{{ $area->id }}">1{{ $area->id }}</td>

        {{-- {{ dd($area) }} --}}
        <td>1{{ $area->name }}</a></td>
        <td>1{{ $area->city->country->name }}</a></td>
        <td>1{{ $area->city->name }}</a></td>
        {{-- {{ dd($areas) }} --}}

    <td>1<a href="{{ route('areas.edit', $area) }}"> edit</a> |  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal{{ $area->id }}">
        Delete
      </button> </td>




  </tr>

  <div class="modal" tabindex="-1" id="Modal{{ $area->id }}">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-status bg-danger"></div>
        <div class="modal-body text-center py-4">

          <h3>Are you sure?</h3>
          <div class="text-muted">Do you really want to remove this city?</div>
        </div>
        <div class="modal-footer">
          <div class="w-100">
            <div class="row">
              <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal">
                  Cancel
                </a></div>
              <div class="col">
                <form action="{{ route('areas.destroy',$area) }}" method="POST">@csrf @method('Delete')<input type="submit" class="btn btn-danger w-100" data-toggle="modal" data-target="#exampleModal" value="Delete item"></form>


            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endforeach
@endif
{{-- {{ $areas->links() }} --}}
</tbody>
</table>
</div>
