<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Profil Saya') }}
        </h2>
    </x-slot>

    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            font-family: 'Poppins', sans-serif;
        }

        .section-container {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            margin-bottom: 24px;
        }

        .header-bar {
            background: #4a5568;
            padding: 16px;
            border-radius: 8px;
            color: #fff;
            text-align: center;
            margin-bottom: 24px;
        }

        h2 {
            font-size: 24px;
            font-weight: 600;
        }

        .form-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 16px;
            color: #764ba2;
        }
    </style>

    <div class="py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="header-bar">
                <h2>Profil Anda</h2>
            </div>

            <div class="section-container">
                <div class="form-title">Informasi Profil</div>
                @include('profile.partials.update-profile-information-form')
            </div>

            <div class="section-container">
                <div class="form-title">Ubah Password</div>
                @include('profile.partials.update-password-form')
            </div>

            <div class="section-container">
                <div class="form-title">Hapus Akun</div>
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>