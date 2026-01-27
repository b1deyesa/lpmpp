<x-form class="form__active">
    <div class="active__field">
        <div class="field__input">
            <label class="input__label">Status</label>
            <x-input type="switch" wire="active" />
        </div>
        <div class="form__term">
            <p>If enabled, the website will be visible to the public. If disabled, the website status will switch to maintenance mode.</p>
        </div>
    </div>
</x-form>