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
    <select wire:model="cityId" class="form-control" name="city" id="">
        <option value="">Select city</option>
        @foreach ($cities as $city)
            <option value="{{ $city->id }}"

                @if ($city->id==$cityId)
                selected
        @endif>{{ $city->name }}</option>
        @endforeach
    </select>
</div>
