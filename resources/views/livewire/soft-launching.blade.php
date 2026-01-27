<div x-data="{ open:false }">

    <style>
        .btn-launch{
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width:240px;
            height:240px;
            border-radius:50%;
            background:#1a4c72;
            color:#fff;
            border:none;
            font-size:24px;
            font-weight:700;
            display:flex;
            align-items:center;
            justify-content:center;
            cursor:pointer;
            box-shadow:0 14px 35px rgba(211,47,47,.5);
            transition:transform .15s ease, box-shadow .15s ease;
        }

        .btn-launch:hover{
            transform:scale(1.05);
            box-shadow:0 20px 45px rgba(211,47,47,.65);
        }

        .btn-launch:active{
            transform:scale(.94);
            box-shadow:0 8px 20px rgba(211,47,47,.4);
        }

        .overlay{
            position:fixed;
            inset:0;
            background:rgba(0,0,0,.6);
            display:flex;
            align-items:center;
            justify-content:center;
            z-index:9999;
        }

        .modal{
            display: flex;
            flex-direction: column;
            background:#fff;
            padding:30px 40px;
            border-radius:14px;
            text-align:center;
            min-width:300px;
            gap: 1em
        }

        .modal p{
            margin-bottom:24px;
            font-size:16px;
        }

        .buttons {
            display: flex;
            gap: .5em
        }
        .btn-yes{
            background:#2e7d32;
            color:#fff;
            padding:10px 22px;
            border:none;
            border-radius:6px;
            margin-right:10px;
            cursor:pointer;
            width: 10em;
        }

        .btn-no{
            background:#e0e0e0;
            padding:10px 22px;
            border:none;
            border-radius:6px;
            cursor:pointer;
            width: 10em;
        }
        
        .logo__lpmpp {
            position: absolute;
            width: 7em;
            opacity: 30%;
        }
    </style>

    <button
        type="button"
        class="btn-launch"
        @click="open = true"
    >
    <img src="{{ asset('assets/img/logo-lpmpp.png') }}" alt="" class="logo__lpmpp">
        <span style="display: block; z-index:2">SOFT<br>LAUNCHING</span>
    </button>

    <div
        x-show="open"
        x-transition.opacity
        class="overlay"
        @click.self="open = false"
    >
        <div
            x-show="open"
            x-transition.scale
            class="modal"
        >
            <p>Konfirmasi untuk me-launching Website LPMPP</p>

            <div class="buttons">
                <button
                    type="button"
                    class="btn-yes"
                    wire:click="launch"
                >
                    Ya
                </button>
    
                <button
                    type="button"
                    class="btn-no"
                    @click="open = false"
                >
                    Batal
                </button>
            </div>
        </div>
    </div>

</div>