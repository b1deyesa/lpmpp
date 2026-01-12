<x-layout.dashboard-form title="Pusat LPMPP" class="pusat">
    
    {{-- Form --}}
    <x-form action="{{ route('dashboard.pusat.store') }}" method="POST">
        <x-input label="Nama Bagian" type="text" name="nama_bagian" />
        <x-input label="Singkatan" type="text" name="singkatan_bagian" />
        <x-input label="Jabatan dan Fungsi" type="editor" name="jabatan" />
        <div class="input">
            <span class="input__label">Anggota</span>
            <div x-data="{ options: @js(json_decode($tenaga_pengelolas, true)), q:'', isFocused:false, selected:[], filtered(){ return Object.entries(this.options).filter(([k,v])=>!this.selected.some(i=>i.tenaga_pengelola_id==k)&&v.toLowerCase().includes(this.q.toLowerCase())); }, choose(key,val){ this.selected.push({ tenaga_pengelola_id:key, label:val, jabatan:'' }); this.q=''; this.isFocused=false; }, remove(index){ this.selected.splice(index,1); }, blurHandler(){ setTimeout(()=>{ if(!Object.values(this.options).some(v=>v.toLowerCase()===this.q.toLowerCase())) this.q=''; this.isFocused=false; },150); } }" class="select-search-multiple">
                <input type="text" x-model="q" @focus="isFocused=true" @input="isFocused=true" @blur="blurHandler" autocomplete="off">
                <ul x-show="isFocused && filtered().length" x-transition>
                    <template x-for="[key,val] in filtered()" :key="key">
                        <li @mousedown.prevent="choose(key,val)" x-text="val"></li>
                    </template>
                </ul>
                <table class="selected-table">
                    <template x-for="(item,index) in selected" :key="item.tenaga_pengelola_id">
                    <tr>
                        <td x-text="item.label"></td>
                        <td>
                            <input type="text" placeholder="Jabatan" x-model="item.jabatan" :name="`anggota[${index}][jabatan]`" autocomplete="off">
                        </td>
                        <td width="1%">
                            <button type="button" @click="remove(index)" class="remove"><i class="fa-solid fa-xmark"></i></button>
                        </td>
                        <input type="hidden" :name="`anggota[${index}][tenaga_pengelola_id]`" :value="item.tenaga_pengelola_id">
                    </tr>
                    </template>
                </table>
            </div>
            <small class="input__error">
                {{ $errors->first('anggota') ?: $errors->first('anggota' . '.key') }}
            </small>
        </div>                
        <x-button type="submit">Save</x-button>
    </x-form>
    
    {{-- Table --}}
    <div class="dashboard__section">
        <div class="section__header">
            <h3 class="header__title">All Pusat</h3>
            <hr class="header__line">
        </div>
        <x-table>
            <x-slot:head>
                <th>Nama Bagian</th>
                <th>Kepala Pusat</th>
            </x-slot:head>
            <x-slot:body>
                @forelse ($pusats as $pusat)
                    <tr>
                        <td>{{ $pusat->nama_bagian }}</td>
                        <td>
                            <ul>
                                @forelse ($pusat->anggota as $nama => $jabatan)
                                    <li>{{ $nama }} @if($jabatan) ({{ $jabatan }}) @endif</li>
                                @empty
                                    <li>-</li>
                                @endforelse
                            </ul>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="table__empty" colspan="999">No content available</td>
                    </tr>
                @endforelse
            </x-slot:body>
        </x-table>
    </div>
    
</x-layout.dashboard-form>