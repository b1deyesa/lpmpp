<div class="grafik-akreditasi__container">
    <select wire:model.live="year">
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
        <option value="2025">2025</option>
        <option value="2026">2026</option>
        <option value="2027">2027</option>
    </select>
    <div style="display: flex; gap: 1em; justify-content: space-between;">
        <div class="grafik-akreditasi__item">
            <h3 class="item__title">Pie Akreditasi Program Studi</h3>
            <x-chart id="pie_akreditasi" height="220px" width="360px" type="pie" :labels="$chartData['labels']" :data="$chartData['data']" :colors="$chartData['colors']" title="Jumlah Program Studi"/>            
        </div>
        <div class="grafik-akreditasi__item">
            <h3 class="item__title">Grafik Akreditasi Program Studi</h3>
            <x-chart id="bar_akreditasi" height="220px" width="540px" type="bar" :labels="$chartData['labels']" :data="$chartData['data']" :colors="$chartData['colors']" title="Jumlah Program Studi"/>            
        </div>
    </div>
</div>