<div>
    <form wire:submit.prevent="submit" enctype="multipart/form-data">
        <x-partials.input
            type="text"
            id="first_name"
            label="First Name"
            model="first_name"
            required
        />

        <x-partials.input
            type="text"
            id="last_name"
            label="Last Name"
            model="last_name"
            required
        />

        <x-partials.input
            type="email"
            id="email"
            label="Email"
            model="email"
            required
            :readonly="$isEdit"
        />

        <x-partials.input
            type="text"
            id="phone"
            label="Phone Number"
            model="phone"
            required
        />
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary btn-sm float-right">{{ ($this->isEdit ? 'Update' : 'Create') }}</button>
        </div>
    </form>
</div>
