<x-layout.guest class="pusat">
    <div class="pusat__container">
        <div class="pusat__list">
            @foreach ($pusats as $pusat)
                <div class="list__item">
                    <img src="{{ asset('assets/img/default.jpg') }}" class="item__background">
                    <div class="item__body">
                        <div class="body__left">
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout.guest>