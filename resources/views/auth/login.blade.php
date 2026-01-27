<x-layout.app class="login">
    
    <img src="{{ asset('assets/img/gedung-unpatti.png') }}" class="login__background">
    
    <div class="login__container">
        <div class="login__logo">
            <img src="{{ asset('assets/img/logo-lpmpp.png') }}" alt="Logo LPMPP">
        </div>
        <div class="login__header">
            <h2 class="header__title">Login</h2>
            <small class="header__description">Welcome to the LPMPP UNPATTI System, your gateway to quality assurance and learning development.</small>
        </div>
        <x-form class="login__form" action="{{ route('auth.login.post') }}" method="POST">
            <x-input placeholder="Email" type="text" name="email" />
            <x-input placeholder="Password" type="password" name="password" />
            <div class="form__action">
                <x-input class="remember" type="checkbox" :options="json_encode(['Remember Me'])" />
                <a class="forget" href="#">Forget Password?</a>
            </div>
            <x-button type="submit">Login</x-button>
        </x-form>
    </div>
    
</x-layout.app>